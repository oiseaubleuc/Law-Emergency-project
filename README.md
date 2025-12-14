# Law Emergency - 24/7 Legal Assistance Platform

**A professional web application for a law firm providing 24/7 legal assistance services**

## Overview

Law Emergency is a full-featured web application built with Laravel 11, designed for a prestigious law firm to provide round-the-clock legal assistance to clients. The platform offers a modern, professional interface with multilingual support and comprehensive case management capabilities.

## Key Features

### Public Features
- **Multilingual Support**: Full internationalization with support for English, French, and Dutch (EN/FR/NL)
- **Legal Area Pages**: Dedicated pages for different legal specialties:
  - Strafrecht (Criminal Law)
  - Verkeersrecht (Traffic Law)
  - Familierecht (Family Law)
- **News/Blog System**: Public news articles with image support
- **Contact Form**: Secure contact form with database storage
- **Case Submission**: Public case submission system (no authentication required)
- **Responsive Design**: Mobile-first, responsive design with professional styling

### User Features (Authenticated)
- **User Authentication**: Secure login/registration system
- **Profile Management**: User profile creation and editing
- **Case Management (Jobs)**: Full CRUD operations for legal cases:
  - Create, read, update, and delete cases
  - File upload support
  - PDF generation for case documents
  - Case type classification

### Admin Features
- **Admin Dashboard**: Dedicated admin panel with statistics
- **News Management**: Create, edit, and delete news articles
- **User Management**: Admin access to user data
- **Content Moderation**: Full control over website content

## Technical Stack

### Backend
- **Framework**: Laravel 11.9
- **PHP**: 8.2+
- **Database**: MySQL/SQLite (configurable)
- **PDF Generation**: barryvdh/laravel-dompdf
- **Authentication**: Laravel's built-in authentication system

### Frontend
- **CSS Framework**: Tailwind CSS 4.1
- **JavaScript**: Alpine.js 3.x
- **Build Tool**: Vite 5.0
- **Typography**: Cormorant Garamond & Playfair Display (premium serif fonts)
- **Design**: Professional color palette (Navy Blue #0a1929 & Elegant Gold #c9a961)

### Additional Technologies
- **PostCSS** & **Autoprefixer** for CSS processing
- **Axios** for HTTP requests
- **Bootstrap 5.3** (optional components)

## Design Philosophy

The application features a premium, professional design specifically tailored for a prestigious law firm:
- **Color Scheme**: Deep navy blue (#0a1929) as primary color representing trust and professionalism, paired with elegant gold (#c9a961) accents for prestige
- **Typography**: Elegant serif fonts (Cormorant Garamond, Playfair Display) for a sophisticated, legal industry-appropriate appearance
- **UI/UX**: Modern card-based layouts, smooth animations, and intuitive navigation
- **Accessibility**: ARIA labels, semantic HTML, and keyboard navigation support

## Security Features

- **CSRF Protection**: Laravel's built-in CSRF token validation
- **XSS Protection**: Automatic output escaping in Blade templates
- **Authentication Middleware**: Secure route protection
- **Admin Middleware**: Role-based access control
- **Input Validation**: Server-side validation for all forms
- **File Upload Security**: Secure file handling and storage

## Project Structure

```
├── app/
│   ├── Http/Controllers/    # Application controllers
│   │   ├── ContactController.php
│   │   ├── JobController.php
│   │   ├── NewsController.php
│   │   ├── LanguageController.php
│   │   └── ...
│   ├── Models/              # Eloquent models
│   │   ├── Job.php
│   │   ├── News.php
│   │   ├── ContactMessage.php
│   │   └── User.php
│   └── Http/Middleware/     # Custom middleware
├── resources/
│   ├── views/              # Blade templates
│   ├── lang/               # Localization files (en, fr, nl)
│   ├── css/                # Custom CSS
│   └── js/                 # JavaScript files
├── routes/
│   └── web.php             # Application routes
└── public/                  # Public assets
```

## Localization

The application supports three languages:
- **English (en)**: Default language
- **French (fr)**: Full translation
- **Dutch (nl)**: Full translation

Language files are located in `resources/lang/{locale}/messages.php`

## Features in Detail

### Case Management System
- Users can submit legal cases with detailed information
- File attachments supported
- PDF generation for case documentation
- Case categorization by type
- Full CRUD operations for authenticated users

### News System
- Public news articles with rich content
- Image support with proper display
- Admin-controlled content management
- SEO-friendly URLs

### Contact System
- Secure contact form
- Database storage of messages
- Email notifications (configurable)
- Form validation and error handling

## Development

- **Laravel Version**: 11.9
- **PHP Version**: 8.2+
- **Node Version**: 20.19+ or 22.12+ (for Vite)
- **Testing**: Pest PHP (configured)

## License

MIT License

## Author

Houdaifa H.

---

**Note**: This is a professional web application designed for a law firm, featuring modern web development practices, security best practices, and a premium user experience suitable for a prestigious legal services provider.
