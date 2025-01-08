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

![image](https://github.com/user-attachments/assets/fe6ce18d-b255-429a-b7a7-71a667096cc2)
![image](https://github.com/user-attachments/assets/febafa63-c448-4ab2-8238-7e4e9af88d0f)
![image](https://github.com/user-attachments/assets/bd2cae83-6e24-4c45-888e-ea4a31c354a8)
![image](https://github.com/user-attachments/assets/7069242c-4f69-4a9c-839f-36375be43e24)
![image](https://github.com/user-attachments/assets/d67fc488-77b0-451c-9915-da2b2711c2d6)
![image](https://github.com/user-attachments/assets/8d51d52b-174c-460a-9648-42a3e5abcc10) ![image](https://github.com/user-attachments/assets/dca7e1ed-84f4-4e08-bc5c-2f5b7344b7f9)

## Database Design

![image](https://github.com/user-attachments/assets/8d1723d6-137f-46bf-af9a-16dd7843cd4e)
 
## Installation

1. Clone repository:
```bash
git clone [https://github.com/SupunLakshithe/A-Photography-Portfolio-Website.git]
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
