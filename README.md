# Mentorship WordPress Theme

A custom WordPress theme for mentorship websites that connects mentors and mentees. Built with modern web technologies, responsive design, and powerful functionality for educational platforms.

## 🌟 Features

- **Responsive Design**: Mobile-first approach with modern UI/UX
- **Custom Post Types**: Mentors, Sessions, Testimonials
- **User Management**: Mentor/Mentee registration and profiles
- **Search & Filtering**: Advanced mentor discovery system
- **Booking System**: Session scheduling and management
- **Payment Integration**: Support for Stripe and PayPal
- **Rating & Reviews**: Mentor feedback system
- **Messaging System**: Built-in communication tools
- **Admin Dashboard**: Comprehensive backend management
- **SEO Optimized**: Schema markup and performance optimized
- **Security Enhanced**: WordPress security best practices

## 🛠️ Technology Stack

- **Backend**: PHP 7.4+, WordPress 5.0+
- **Frontend**: HTML5, CSS3 (SCSS), JavaScript (ES6+)
- **Build Tools**: Webpack, Babel, Sass
- **Package Managers**: NPM, Composer
- **Database**: MySQL 5.7+ / MariaDB 10.2+
- **Web Server**: Apache/Nginx with PHP-FPM

## 📋 Requirements

Before installation, ensure your system has:

- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or higher (or MariaDB 10.2+)
- **Node.js**: 16.0 or higher
- **NPM**: 7.0 or higher
- **Composer**: 2.0 or higher
- **Web Server**: Apache or Nginx
- **WordPress**: 5.0 or higher

### Required PHP Extensions

- php-mysql
- php-mysqli
- php-pdo
- php-curl
- php-gd
- php-mbstring
- php-xml
- php-zip
- php-intl
- php-bcmath

## 🚀 Quick Setup

### Automated Setup (Recommended)

1. **Clone or download the project**
2. **Run the setup script**:
   ```bash
   chmod +x setup.sh
   ./setup.sh
   ```

The setup script will automatically:
- Install all required dependencies
- Configure PHP extensions
- Setup the database
- Install WordPress core
- Configure the theme
- Install essential plugins

### Manual Setup

If you prefer manual installation:

#### 1. Database Setup

```bash
# Create database
mysql -u root -p -e "CREATE DATABASE mentorship_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Create user (optional)
mysql -u root -p -e "CREATE USER 'mentorship_user'@'localhost' IDENTIFIED BY 'your_password';"
mysql -u root -p -e "GRANT ALL PRIVILEGES ON mentorship_wp.* TO 'mentorship_user'@'localhost';"
mysql -u root -p -e "FLUSH PRIVILEGES;"
```

#### 2. WordPress Configuration

```bash
# Copy and configure wp-config.php
cp wp-config-sample.php wp-config.php

# Edit wp-config.php with your database credentials
```

#### 3. Install Dependencies

```bash
# Install Node.js dependencies
npm install

# Install PHP dependencies
composer install
```

#### 4. Build Assets

```bash
# Development build
npm run css:dev
npm run js:dev

# Production build
npm run build
```

#### 5. Set Permissions

```bash
# Set proper file permissions
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;
chmod 600 wp-config.php
chmod -R 755 wp-content/uploads/
```

## 🔧 Configuration

### Environment Variables

Copy `.env.example` to `.env` and configure:

```bash
cp .env.example .env
```

Key configurations:

```env
# Database
DB_NAME=mentorship_wp
DB_USER=your_username
DB_PASSWORD=your_password
DB_HOST=localhost

# WordPress
WP_ENV=development
WP_HOME=http://localhost:8000
WP_DEBUG=true

# API Keys
STRIPE_PUBLIC_KEY=pk_test_...
STRIPE_SECRET_KEY=sk_test_...
GOOGLE_MAPS_API_KEY=your_api_key
```

### WordPress Settings

After installation, configure these WordPress settings:

1. **Permalinks**: Set to "Post name" structure
2. **Media Settings**: Configure image sizes
3. **Discussion Settings**: Enable/disable comments
4. **User Registration**: Enable if needed

## 🎨 Theme Customization

### Custom Post Types

The theme includes these custom post types:

- **Mentors**: Mentor profiles and information
- **Sessions**: Mentorship sessions and bookings
- **Testimonials**: User reviews and feedback

### Custom Taxonomies

- **Skills**: Mentor expertise areas
- **Industries**: Business/career categories
- **Session Categories**: Types of mentorship sessions

### Theme Options

Access theme options via:
- **WordPress Admin** → **Appearance** → **Customize**
- **Mentorship Settings** panel

## 💻 Development

### Development Server

Start the development server:

```bash
npm run dev
```

This starts a PHP built-in server at `http://localhost:8000`

### Asset Development

```bash
# Watch for changes (development)
npm run css:dev
npm run js:dev

# Build for production
npm run build

# Watch SCSS files
npm run theme:watch
```

### Code Quality

```bash
# PHP Code Standards
composer run lint
composer run lint:fix

# JavaScript Linting
npm run lint
npm run lint:fix

# Run all tests
composer run check
```

### File Structure

```
Mentorship./
├── wp-content/
│   ├── themes/
│   │   └── mentorship/
│   │       ├── assets/
│   │       │   ├── css/
│   │       │   ├── js/
│   │       │   └── scss/
│   │       ├── inc/
│   │       ├── template-parts/
│   │       ├── functions.php
│   │       └── style.css
│   └── plugins/
├── database/
├── logs/
├── package.json
├── composer.json
├── webpack.config.js
└── setup.sh
```

## 🔌 Essential Plugins

The theme works best with these plugins:

### Included in Setup
- **Contact Form 7**: Contact forms
- **Yoast SEO**: Search engine optimization
- **Elementor**: Page builder
- **Ultimate Member**: User management
- **WooCommerce**: Payment processing

### Recommended Additional Plugins
- **WP User Frontend**: Frontend user management
- **BookingPress**: Advanced booking system
- **WP Mail SMTP**: Email delivery
- **UpdraftPlus**: Backup solution
- **Wordfence**: Security enhancement

## 🎯 Usage Guide

### For Site Administrators

1. **Adding Mentors**:
   - Go to **Mentors** → **Add New**
   - Fill in mentor details, skills, and bio
   - Set featured image and availability

2. **Managing Sessions**:
   - Monitor bookings in **Sessions**
   - Approve/decline requests
   - Manage schedules

3. **User Management**:
   - Review mentor applications
   - Manage user roles and permissions
   - Monitor user activity

### For Mentors

1. **Profile Setup**:
   - Complete profile information
   - Add skills and expertise
   - Set availability and pricing

2. **Session Management**:
   - Accept/decline bookings
   - Manage schedule
   - Communicate with mentees

### For Mentees

1. **Finding Mentors**:
   - Browse mentor directory
   - Use search and filters
   - View profiles and reviews

2. **Booking Sessions**:
   - Select mentor and time slot
   - Complete payment (if required)
   - Receive confirmation

## 🚀 Deployment

### Production Checklist

Before deploying to production:

- [ ] Update `wp-config.php` with production database credentials
- [ ] Set `WP_DEBUG` to `false`
- [ ] Configure SSL certificates
- [ ] Set up backups
- [ ] Configure caching
- [ ] Test all functionality
- [ ] Set up monitoring

### Performance Optimization

1. **Caching**: Install a caching plugin (WP Rocket, W3 Total Cache)
2. **CDN**: Configure a Content Delivery Network
3. **Image Optimization**: Use WebP format and compression
4. **Database**: Optimize database tables regularly
5. **Minification**: Enable CSS/JS minification

## 🛡️ Security

The theme implements security best practices:

- Sanitized inputs and outputs
- Nonce verification for forms
- Capability checks for admin functions
- SQL injection prevention
- XSS protection
- CSRF protection

### Additional Security Measures

1. **Install Security Plugin**: Wordfence or Sucuri
2. **Regular Updates**: Keep WordPress and plugins updated
3. **Strong Passwords**: Enforce strong password policies
4. **Two-Factor Authentication**: Enable 2FA for admin users
5. **File Permissions**: Set proper file permissions
6. **Hide wp-config.php**: Move outside web root if possible

## 🔧 Troubleshooting

### Common Issues

**1. White Screen of Death**
```bash
# Enable debug mode
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
# Check error logs
tail -f wp-content/debug.log
```

**2. Permission Denied Errors**
```bash
# Fix file permissions
sudo chown -R www-data:www-data .
chmod -R 755 wp-content/uploads/
```

**3. Memory Limit Errors**
```php
// Add to wp-config.php
define('WP_MEMORY_LIMIT', '512M');
```

**4. Plugin Conflicts**
- Deactivate all plugins
- Activate one by one to identify conflicts
- Check error logs for details

### Getting Help

- Check the [WordPress Codex](https://codex.wordpress.org/)
- Visit [WordPress Support Forums](https://wordpress.org/support/)
- Review theme documentation
- Check error logs in `wp-content/debug.log`

## 📱 Browser Support

- Chrome 60+
- Firefox 60+
- Safari 12+
- Edge 79+
- iOS Safari 12+
- Chrome for Android 60+

## 🤝 Contributing

We welcome contributions! Please:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

### Development Guidelines

- Follow WordPress coding standards
- Write meaningful commit messages
- Include documentation for new features
- Test across different browsers
- Ensure accessibility compliance

## 📄 License

This project is licensed under the GNU General Public License v2.0 - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:

- **Documentation**: Check this README and inline code comments
- **Issues**: Report bugs via GitHub Issues
- **Community**: Join our Discord/Slack channel
- **Email**: support@mentorshiptheme.com

## 📝 Changelog

### Version 1.0.0
- Initial release
- Custom post types for mentors and sessions
- Responsive design
- Search and filtering functionality
- Basic booking system
- User management integration

---

**Made with ❤️ for the mentorship community**

Ready to connect mentors and mentees? Start building your mentorship platform today!