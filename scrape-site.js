const puppeteer = require("puppeteer");
const fs = require("fs");
const path = require("path");

async function scrapeMentorshipSite() {
  console.log("Starting to scrape mentorship website...");

  const browser = await puppeteer.launch({
    headless: true,
    args: ["--no-sandbox", "--disable-setuid-sandbox"],
  });

  const page = await browser.newPage();

  try {
    // Set viewport
    await page.setViewport({ width: 1920, height: 1080 });

    // Navigate to the site
    console.log("Loading dev-client.mentorsbrain.com...");
    await page.goto("https://dev-client.mentorsbrain.com", {
      waitUntil: "networkidle0",
      timeout: 30000,
    });

    // Wait for Angular to load
    await new Promise((resolve) => setTimeout(resolve, 3000));

    // Get the fully rendered HTML
    const html = await page.content();

    // Get page title
    const title = await page.title();

    // Get all images
    const images = await page.evaluate(() => {
      return Array.from(document.querySelectorAll("img")).map((img) => ({
        src: img.src,
        alt: img.alt,
        width: img.width,
        height: img.height,
      }));
    });

    // Get all links
    const links = await page.evaluate(() => {
      return Array.from(document.querySelectorAll("a")).map((link) => ({
        href: link.href,
        text: link.textContent.trim(),
      }));
    });

    // Get navigation structure
    const navigation = await page.evaluate(() => {
      const nav =
        document.querySelector("nav") ||
        document.querySelector('[role="navigation"]');
      if (nav) {
        return nav.outerHTML;
      }
      return null;
    });

    // Get main content areas
    const contentSections = await page.evaluate(() => {
      const sections = [];

      // Look for common content containers
      const selectors = [
        "main",
        '[role="main"]',
        ".container",
        ".content",
        "section",
        ".hero",
        ".banner",
        "header",
        "footer",
      ];

      selectors.forEach((selector) => {
        const elements = document.querySelectorAll(selector);
        elements.forEach((el, index) => {
          if (el.textContent.trim().length > 50) {
            sections.push({
              selector: `${selector}[${index}]`,
              html: el.outerHTML.substring(0, 1000) + "...",
              text: el.textContent.trim().substring(0, 500) + "...",
            });
          }
        });
      });

      return sections;
    });

    // Get CSS styles from stylesheets
    const stylesheets = await page.evaluate(() => {
      return Array.from(document.styleSheets).map((sheet, index) => {
        try {
          return {
            href: sheet.href,
            index: index,
            disabled: sheet.disabled,
          };
        } catch (e) {
          return { error: "Cannot access stylesheet", index: index };
        }
      });
    });

    // Get color scheme and fonts
    const styles = await page.evaluate(() => {
      const computedStyle = getComputedStyle(document.body);
      return {
        fontFamily: computedStyle.fontFamily,
        backgroundColor: computedStyle.backgroundColor,
        color: computedStyle.color,
        fontSize: computedStyle.fontSize,
      };
    });

    // Take screenshot
    await page.screenshot({
      path: "site-screenshot.png",
      fullPage: true,
    });

    // Compile results
    const results = {
      url: "https://dev-client.mentorsbrain.com",
      title: title,
      scrapedAt: new Date().toISOString(),
      html: html,
      images: images,
      links: links,
      navigation: navigation,
      contentSections: contentSections,
      stylesheets: stylesheets,
      bodyStyles: styles,
      summary: {
        totalImages: images.length,
        totalLinks: links.length,
        hasNavigation: !!navigation,
        contentSectionsFound: contentSections.length,
      },
    };

    // Save to files
    fs.writeFileSync("scraped-content.json", JSON.stringify(results, null, 2));
    fs.writeFileSync("scraped-html.html", html);

    console.log("Scraping completed successfully!");
    console.log(`- Found ${images.length} images`);
    console.log(`- Found ${links.length} links`);
    console.log(`- Found ${contentSections.length} content sections`);
    console.log("- Screenshot saved as site-screenshot.png");
    console.log("- Full data saved to scraped-content.json");
    console.log("- HTML saved to scraped-html.html");
  } catch (error) {
    console.error("Error scraping site:", error);
  } finally {
    await browser.close();
  }
}

// Run the scraper
scrapeMentorshipSite().catch(console.error);
