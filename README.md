# Lismore's Lens - Photography Portfolio Website

A PHP-based photography portfolio website with booking system and gallery management.

## Features

- Photo gallery with category filtering (Wildlife, Weddings, Portraits, Events)
- Package booking system for different photography services
- Admin panel for gallery and booking management
- Responsive design using Bootstrap 5
- Client testimonials carousel
- User authentication system

## Tech Stack

- PHP
- MySQL
- Bootstrap 5.1.3
- jQuery UI 1.13.2
- JavaScript
- HTML/CSS

## Prerequisites

- PHP 7.0+
- MySQL
- XAMPP/WAMP/MAMP

## Screenshots


## Database design

 
## Installation

1. Clone repository:
```bash
git clone https://github.com/yourusername/lismores-lens.git
```

2. Create MySQL database: `database-site07`

3. Configure database in `permit/fun-db.php`:
```php
$conn = new mysqli("localhost", "your_username", "your_password", "database-site07");
```

4. Set write permissions for `uploads/`


## Usage

- Access website through: `http://localhost/photgrapher-website/`
- Admin login: `http://localhost/photgrapher-website/signin.php`
- Admin Dashboard: `http://localhost/photgrapher-website/permit/index.php`

## Directory Structure

```
photgrapher-website/
├── assets/           # Images & icons
├── css/             # Stylesheets
├── js/              # JavaScript files
├── permit/          # Admin functions
├── uploads/         # Photo uploads
└── *.php            # Main PHP pages
```

## Security Note

For production deployment:
- Update database credentials
- Enable CSRF protection
- Implement secure password hashing
- Add input validation
- Configure secure session handling

## Contributing

Pull requests welcome. For major changes, open issue first.
