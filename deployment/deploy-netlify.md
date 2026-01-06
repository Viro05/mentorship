# 🌐 Deploy to Netlify - Quick Guide

## Option 1: Drag & Drop (Fastest - 2 minutes)

### Step 1: Build Your Site
```bash
cd Mentorship.
npm run build
```

### Step 2: Create Static Export
```bash
# Create a static version folder
mkdir netlify-deploy
cp -r wp-content/themes/mentorship/assets netlify-deploy/
cp wp-content/themes/mentorship/*.php netlify-deploy/

# Create a simple index.html for demo
cat > netlify-deploy/index.html << 'EOF'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship Site - Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-navbar py-4">
        <div class="container">
            <a href="#" class="navbar-brand fw-bold">Mentorship.</a>
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="#home">Home</a>
                <a class="nav-link" href="#programs">Programs</a>
                <a class="nav-link" href="#resources">Resources</a>
                <a class="nav-link" href="#contact">Contact</a>
            </div>
            <div>
                <a href="#" class="btn btn-outline-primary me-2">Login</a>
                <a href="#" class="btn btn-primary">Signup</a>
            </div>
        </div>
    </nav>
    
    <div class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Find Your Perfect Mentor</h1>
                    <p class="lead mb-4">Connect with industry experts and accelerate your career growth</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary btn-lg">Find a Mentor</a>
                        <a href="#" class="btn btn-outline-primary btn-lg">Become a Mentor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/hero-img.png" alt="Hero" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-5">Our Programs</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-briefcase fa-3x text-primary mb-3"></i>
                        <h5>Career Mentorship</h5>
                        <p>Accelerate your career with expert guidance</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-chart-line fa-3x text-success mb-3"></i>
                        <h5>Business Mentorship</h5>
                        <p>Grow your business with strategic advice</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-heart fa-3x text-info mb-3"></i>
                        <h5>Life Coaching</h5>
                        <p>Transform your life with personal development</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-rocket fa-3x text-warning mb-3"></i>
                        <h5>Business Coaching</h5>
                        <p>Accelerate your business performance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Mentorship. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
EOF
```

### Step 3: Deploy to Netlify
1. Go to [netlify.com](https://netlify.com)
2. Sign up/login (free)
3. Drag the `netlify-deploy` folder to the deployment area
4. Get your live URL instantly!

---

## Option 2: Git Integration (Professional - 5 minutes)

### Step 1: Push to GitHub
```bash
# If not already a git repo
git init
git add .
git commit -m "Ready for deployment"

# Create repo on GitHub, then:
git remote add origin https://github.com/yourusername/mentorship-site.git
git push -u origin main
```

### Step 2: Connect to Netlify
1. Go to [netlify.com/new](https://netlify.com/new)
2. Choose "Import from Git"
3. Select your GitHub repository
4. Build settings:
   - **Build command:** `npm run build`
   - **Publish directory:** `netlify-deploy`
5. Click "Deploy site"

### Step 3: Custom Domain (Optional)
1. In Netlify dashboard → Domain settings
2. Add custom domain
3. Follow DNS instructions

---

## Option 3: Netlify CLI (Developer - 3 minutes)

```bash
# Install Netlify CLI
npm install -g netlify-cli

# Login to Netlify
netlify login

# Build and deploy
npm run build
netlify deploy --prod --dir=netlify-deploy

# Your site is live!
```

---

## 🎯 Quick Demo URL

After deployment, you'll get a URL like:
- `https://amazing-newton-123456.netlify.app`
- Custom domain: `https://your-domain.com`

**Share this URL with your employer instantly!**

---

## 🔧 Pro Tips

### Enable HTTPS (Automatic)
- Netlify provides free SSL certificates
- Your site will be secure by default

### Custom Domain
- Buy a domain from any registrar
- Point DNS to Netlify
- Free SSL included

### Form Handling
```html
<!-- Netlify handles forms automatically -->
<form netlify>
  <input type="email" name="email" required>
  <button type="submit">Subscribe</button>
</form>
```

### Environment Variables
- Go to Site Settings → Environment Variables
- Add any config you need
- Rebuild to apply changes

---

## 🚨 Limitations

**What works:**
- ✅ Static HTML/CSS/JS
- ✅ Contact forms
- ✅ Custom domains
- ✅ HTTPS
- ✅ CDN (fast worldwide)

**What doesn't work:**
- ❌ WordPress PHP functionality
- ❌ Database connections
- ❌ User registration/login
- ❌ Admin panel

**Perfect for:**
- Portfolio/demo sites
- Landing pages
- Static content
- Showing design/frontend skills

---

## 📞 Share with Employer

**Email Template:**
```
Hi [Employer Name],

I've deployed my WordPress Mentorship site for your review:

🌐 Live Site: https://your-site.netlify.app

Key Features:
✅ Responsive design
✅ Modern UI/UX
✅ Clean code structure
✅ Fast loading
✅ Mobile-optimized

The site showcases:
- Custom WordPress theme development
- Bootstrap integration
- JavaScript functionality
- SCSS styling
- Professional deployment

Please feel free to explore and let me know if you have any questions!

Best regards,
[Your Name]
```

---

## 🎉 Success!

Your site is now live and ready to impress your employer! 

The deployment takes literally 2-5 minutes and gives you a professional URL to share immediately.