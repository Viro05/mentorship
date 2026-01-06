# Deployment Instructions for Mentorship Site

## Quick Deploy to Netlify via GitHub

### Step 1: Create GitHub Repository

1. Go to [github.com/new](https://github.com/new)
2. Repository name: `mentorship-site`
3. Description: `WordPress Mentorship Site - Static Build for Netlify`
4. Make it **Public** (easier for Netlify)
5. **Don't** initialize with README
6. Click "Create repository"

### Step 2: Get GitHub Personal Access Token

1. Go to [GitHub Settings → Personal Access Tokens](https://github.com/settings/tokens)
2. Click "Generate new token (classic)"
3. Name: `Mentorship Site Deploy`
4. Expiration: 30 days (or longer if needed)
5. Scopes: Check `repo` (Full control of private repositories)
6. Click "Generate token"
7. **Copy the token immediately** (you won't see it again)

### Step 3: Push Code to GitHub

Open terminal in the project directory and run:

```bash
# Add your GitHub repository as remote
git remote add origin https://github.com/Viro05/mentorship-site.git

# Push to GitHub (use your token as password when prompted)
git push -u origin main
```

When prompted:
- Username: `Viro05`
- Password: `[paste your personal access token here]`

### Step 4: Deploy to Netlify

1. Go to [netlify.com](https://netlify.com) and sign up/login
2. Click "New site from Git"
3. Choose "GitHub" and authorize Netlify
4. Select your `mentorship-site` repository
5. Configure build settings:
   - **Build command**: `npm run build:netlify`
   - **Publish directory**: `build`
   - **Base directory**: (leave empty)
6. Click "Deploy site"

### Step 5: Get Your Live URL

- Netlify will provide a URL like: `https://amazing-name-123456.netlify.app`
- You can customize this URL in Site settings → Domain management
- Share this URL with your employer

## Alternative: Manual Netlify Deploy

If GitHub setup is problematic, you can deploy directly:

1. Run `npm run build:netlify` in the project directory
2. Go to [netlify.com/drop](https://netlify.com/drop)
3. Drag and drop the `build` folder to deploy instantly

## Project Details

- **Git Config**: Already set to `sm24vq@brocku.ca` / `Viro05`
- **Build Status**: ✅ Ready (static files in `./build/`)
- **Build Command**: `npm run build:netlify`
- **Output Directory**: `build/`

## What's Included in Deployment

✅ Fixed navbar dropdown (hover functionality)
✅ Program pages without "featured" sections  
✅ Working image loading
✅ Responsive design
✅ Static HTML/CSS/JS export

## Notes

- This is a **static site** deployment (HTML/CSS/JS only)
- No WordPress admin panel or database functionality
- Perfect for showcasing the site to employers
- Fast loading and secure hosting on Netlify

## Troubleshooting

**Git Authentication Issues:**
- Use Personal Access Token as password
- Or set up SSH keys in GitHub settings

**Build Fails:**
- Run `npm install` first
- Check Node.js version (requires Node 14+)

**Missing Files:**
- Ensure `build` directory exists after `npm run build:netlify`
- Check `netlify.toml` is in root directory

## Support

If you need help:
1. Check the build logs in Netlify dashboard
2. Verify all files are in the GitHub repository
3. Ensure build command and publish directory are correct