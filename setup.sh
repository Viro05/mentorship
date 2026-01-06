#!/bin/bash

# Mentorship WordPress Development Environment Setup Script
# This script sets up the complete development environment

set -e

echo "🚀 Setting up Mentorship WordPress Development Environment..."

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

print_header() {
    echo -e "${BLUE}=== $1 ===${NC}"
}

# Check if required tools are installed
check_requirements() {
    print_header "Checking Requirements"

    # Check PHP
    if ! command -v php &> /dev/null; then
        print_error "PHP is not installed. Please install PHP 7.4 or higher."
        exit 1
    else
        PHP_VERSION=$(php -v | head -n 1 | cut -d ' ' -f 2 | cut -d '.' -f 1,2)
        print_status "PHP version: $PHP_VERSION"
    fi

    # Check MySQL/MariaDB
    if ! command -v mysql &> /dev/null; then
        print_warning "MySQL/MariaDB not found. You'll need to install it manually."
        print_status "Installing MySQL server..."
        sudo apt-get update
        sudo apt-get install -y mysql-server mysql-client
    else
        print_status "MySQL/MariaDB is installed"
    fi

    # Check Node.js
    if ! command -v node &> /dev/null; then
        print_status "Installing Node.js..."
        curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
        sudo apt-get install -y nodejs
    else
        NODE_VERSION=$(node -v)
        print_status "Node.js version: $NODE_VERSION"
    fi

    # Check Composer
    if ! command -v composer &> /dev/null; then
        print_status "Installing Composer..."
        curl -sS https://getcomposer.org/installer | php
        sudo mv composer.phar /usr/local/bin/composer
        sudo chmod +x /usr/local/bin/composer
    else
        print_status "Composer is installed"
    fi
}

# Install PHP extensions
install_php_extensions() {
    print_header "Installing PHP Extensions"

    PHP_EXTENSIONS=(
        "php-mysql"
        "php-mysqli"
        "php-pdo"
        "php-pdo-mysql"
        "php-curl"
        "php-gd"
        "php-mbstring"
        "php-xml"
        "php-zip"
        "php-intl"
        "php-bcmath"
        "php-imagick"
    )

    for extension in "${PHP_EXTENSIONS[@]}"; do
        if dpkg -l | grep -q "^ii  $extension "; then
            print_status "$extension is already installed"
        else
            print_status "Installing $extension..."
            sudo apt-get install -y $extension
        fi
    done
}

# Setup database
setup_database() {
    print_header "Setting up Database"

    # Start MySQL service
    sudo systemctl start mysql
    sudo systemctl enable mysql

    # Create database
    print_status "Creating database 'mentorship_wp'..."
    mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS mentorship_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;" || true

    print_status "Database created successfully!"
}

# Create directories
create_directories() {
    print_header "Creating Project Directories"

    # Create theme directory
    mkdir -p wp-content/themes/mentorship
    mkdir -p wp-content/themes/mentorship/assets/{css,scss,js,images,fonts}
    mkdir -p wp-content/themes/mentorship/inc
    mkdir -p wp-content/themes/mentorship/template-parts
    mkdir -p wp-content/themes/mentorship/templates

    # Create plugin directory for custom functionality
    mkdir -p wp-content/plugins/mentorship-core

    # Create uploads directory
    mkdir -p wp-content/uploads
    chmod 755 wp-content/uploads

    # Create logs directory
    mkdir -p logs

    # Create database backup directory
    mkdir -p database

    print_status "Directories created successfully!"
}

# Install Node.js dependencies
install_node_dependencies() {
    print_header "Installing Node.js Dependencies"

    if [ -f "package.json" ]; then
        npm install
        print_status "Node.js dependencies installed!"
    else
        print_error "package.json not found!"
    fi
}

# Setup WordPress configuration
setup_wp_config() {
    print_header "Configuring WordPress"

    # Generate WordPress salts
    print_status "Generating WordPress security keys..."
    SALTS=$(curl -s https://api.wordpress.org/secret-key/1.1/salt/)

    # Update wp-config.php with new salts
    if [ -f "wp-config.php" ]; then
        # Create backup
        cp wp-config.php wp-config.php.backup

        # Replace salts in wp-config.php
        sed -i "/define.*AUTH_KEY/,/define.*NONCE_SALT/c\\
$SALTS" wp-config.php

        print_status "WordPress configuration updated with security keys!"
    else
        print_error "wp-config.php not found!"
    fi
}

# Download and setup essential plugins
setup_plugins() {
    print_header "Installing Essential Plugins"

    PLUGINS_DIR="wp-content/plugins"

    # Essential plugins for mentorship website
    PLUGINS=(
        "https://downloads.wordpress.org/plugin/contact-form-7.latest-stable.zip"
        "https://downloads.wordpress.org/plugin/yoast-seo.latest-stable.zip"
        "https://downloads.wordpress.org/plugin/elementor.latest-stable.zip"
        "https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip"
        "https://downloads.wordpress.org/plugin/ultimate-member.latest-stable.zip"
        "https://downloads.wordpress.org/plugin/wp-user-frontend.latest-stable.zip"
    )

    for plugin_url in "${PLUGINS[@]}"; do
        plugin_name=$(basename "$plugin_url" .zip | sed 's/\.latest-stable//')
        print_status "Downloading $plugin_name..."

        cd "$PLUGINS_DIR"
        wget -q "$plugin_url" -O "$plugin_name.zip"
        unzip -q "$plugin_name.zip"
        rm "$plugin_name.zip"
        cd - > /dev/null

        print_status "$plugin_name installed!"
    done
}

# Set proper permissions
set_permissions() {
    print_header "Setting File Permissions"

    # WordPress recommended permissions
    find . -type d -exec chmod 755 {} \;
    find . -type f -exec chmod 644 {} \;

    # Make wp-config.php more secure
    chmod 600 wp-config.php

    # Make uploads directory writable
    chmod -R 755 wp-content/uploads

    # Make cache directories writable if they exist
    [ -d "wp-content/cache" ] && chmod -R 755 wp-content/cache

    print_status "File permissions set!"
}

# Create development tools
create_dev_tools() {
    print_header "Creating Development Tools"

    # Create .htaccess for local development
    cat > .htaccess << 'EOF'
# WordPress SEO-friendly URLs
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# Security headers
<IfModule mod_headers.c>
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
</IfModule>

# Disable directory browsing
Options -Indexes

# Protect wp-config.php
<files wp-config.php>
order allow,deny
deny from all
</files>
EOF

    # Create gitignore
    cat > .gitignore << 'EOF'
# WordPress
wp-config.php
wp-content/uploads/
wp-content/blogs.dir/
wp-content/upgrade/
wp-content/backup-db/
wp-content/advanced-cache.php
wp-content/wp-cache-config.php
wp-content/cache/
wp-content/cache/supercache/

# WordPress Multisite
wp-content/blogs.dir/
wp-content/blog-deleted/
wp-content/blog-inactive/
wp-content/blog-suspended/

# Plugins and themes (exclude custom ones)
wp-content/plugins/
wp-content/themes/twenty*/
!wp-content/themes/mentorship/
!wp-content/plugins/mentorship-core/

# Node modules and build files
node_modules/
npm-debug.log*
yarn-debug.log*
yarn-error.log*

# Build directories
dist/
build/

# IDE files
.vscode/
.idea/
*.swp
*.swo
*~

# OS files
.DS_Store
Thumbs.db

# Logs
*.log
logs/

# Environment files
.env
.env.local
.env.development.local
.env.test.local
.env.production.local

# Backup files
*.backup
*.bak
*.sql

# Temporary files
tmp/
temp/
EOF

    print_status "Development tools created!"
}

# Display final instructions
display_instructions() {
    print_header "Setup Complete!"

    echo ""
    print_status "Your WordPress mentorship development environment is ready!"
    echo ""
    print_status "Next steps:"
    echo "  1. Start the development server: npm run dev"
    echo "  2. Open http://localhost:8000 in your browser"
    echo "  3. Follow the WordPress installation wizard"
    echo "  4. Default database settings:"
    echo "     - Database Name: mentorship_wp"
    echo "     - Username: root"
    echo "     - Password: (your MySQL root password)"
    echo "     - Host: localhost"
    echo ""
    print_status "Development commands:"
    echo "  - npm run dev        : Start development server"
    echo "  - npm run build      : Build assets for production"
    echo "  - npm run css:dev    : Compile SCSS in development mode"
    echo "  - npm run js:dev     : Build JavaScript in development mode"
    echo "  - npm run db:export  : Export database backup"
    echo ""
    print_warning "Remember to:"
    echo "  - Set your MySQL root password if you haven't already"
    echo "  - Update wp-config.php with your actual database credentials"
    echo "  - Install SSL certificate for HTTPS in production"
    echo ""
}

# Main execution
main() {
    print_header "Mentorship WordPress Setup"

    check_requirements
    install_php_extensions
    setup_database
    create_directories
    install_node_dependencies
    setup_wp_config
    setup_plugins
    set_permissions
    create_dev_tools
    display_instructions

    print_status "Setup completed successfully! 🎉"
}

# Run main function
main "$@"
