#!/bin/bash

# Railway Deployment Script for WordPress Mentorship Site
# This script helps deploy your WordPress site to Railway

set -e  # Exit on any error

echo "🚀 WordPress Mentorship Site - Railway Deployment"
echo "=================================================="

# Check if Railway CLI is installed
if ! command -v railway &> /dev/null; then
    echo "❌ Railway CLI not found. Installing..."
    npm install -g @railway/cli
fi

# Check if user is logged in
if ! railway whoami &> /dev/null; then
    echo "🔐 Please log in to Railway:"
    railway login
fi

# Build assets before deployment
echo "🔨 Building assets..."
npm run build

# Create .railwayignore if it doesn't exist
if [ ! -f ".railwayignore" ]; then
    echo "📝 Creating .railwayignore..."
    cat > .railwayignore << EOF
node_modules/
.git/
*.log
.env.local
.DS_Store
wp-content/uploads/
wp-content/cache/
deployment/
README.md
*.md
EOF
fi

# Create production wp-config.php
echo "⚙️ Creating production wp-config.php..."
cat > wp-config-production.php << 'EOF'
<?php
// Railway WordPress Configuration

// Database settings from Railway environment
$db_host = $_ENV['MYSQL_HOST'] ?? 'localhost';
$db_name = $_ENV['MYSQL_DATABASE'] ?? 'mentorship_wp';
$db_user = $_ENV['MYSQL_USER'] ?? 'root';
$db_password = $_ENV['MYSQL_PASSWORD'] ?? '';
$db_port = $_ENV['MYSQL_PORT'] ?? '3306';

define('DB_HOST', $db_host . ':' . $db_port);
define('DB_NAME', $db_name);
define('DB_USER', $db_user);
define('DB_PASSWORD', $db_password);
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Security keys - generate these at https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'your-auth-key-here');
define('SECURE_AUTH_KEY',  'your-secure-auth-key-here');
define('LOGGED_IN_KEY',    'your-logged-in-key-here');
define('NONCE_KEY',        'your-nonce-key-here');
define('AUTH_SALT',        'your-auth-salt-here');
define('SECURE_AUTH_SALT', 'your-secure-auth-salt-here');
define('LOGGED_IN_SALT',   'your-logged-in-salt-here');
define('NONCE_SALT',       'your-nonce-salt-here');

// WordPress URLs
$site_url = $_ENV['RAILWAY_STATIC_URL'] ?? $_ENV['RAILWAY_PUBLIC_DOMAIN'] ?? 'http://localhost';
define('WP_HOME', $site_url);
define('WP_SITEURL', $site_url);

// WordPress settings
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);

// File permissions
define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0755 & ~ umask()));
define('FS_CHMOD_FILE', (0644 & ~ umask()));

// Memory and execution limits
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

// Disable file editing in admin
define('DISALLOW_FILE_EDIT', true);

// WordPress table prefix
$table_prefix = 'wp_';

// Additional configuration
if (isset($_ENV['WORDPRESS_CONFIG_EXTRA'])) {
    eval($_ENV['WORDPRESS_CONFIG_EXTRA']);
}

// Load WordPress
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
EOF

echo "🎯 Deployment Options:"
echo "1. Create new Railway project"
echo "2. Deploy to existing project"
echo ""
read -p "Choose option (1 or 2): " choice

case $choice in
    1)
        echo "🆕 Creating new Railway project..."
        railway login
        railway init

        echo "📊 Adding MySQL database..."
        railway add --database mysql

        echo "🚀 Deploying..."
        railway up

        echo "✅ Deployment complete!"
        echo "🌐 Your site will be available at the URL shown above"
        echo ""
        echo "⚠️  Important next steps:"
        echo "1. Visit your Railway dashboard to get the domain"
        echo "2. Complete WordPress setup in browser"
        echo "3. Upload your database if you have one"
        ;;

    2)
        echo "📂 Available projects:"
        railway projects
        echo ""
        read -p "Enter project name: " project_name
        railway link $project_name

        echo "🚀 Deploying to existing project..."
        railway up

        echo "✅ Deployment complete!"
        ;;

    *)
        echo "❌ Invalid option selected"
        exit 1
        ;;
esac

echo ""
echo "🎉 Deployment Summary:"
echo "====================="
echo "✅ Assets built successfully"
echo "✅ Production config created"
echo "✅ Site deployed to Railway"
echo ""
echo "📋 What to do next:"
echo "1. Visit your Railway dashboard: https://railway.app/dashboard"
echo "2. Check your deployment logs"
echo "3. Visit your live site URL"
echo "4. Complete WordPress installation if needed"
echo "5. Share the URL with your employer!"
echo ""
echo "💡 Pro tip: Your site URL will be something like:"
echo "   https://your-project-name.up.railway.app"

# Clean up
rm -f wp-config-production.php

echo ""
echo "🚀 Happy deploying!"
