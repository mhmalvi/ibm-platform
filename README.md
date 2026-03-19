# IBM Platform

A comprehensive education and service management platform built with Laravel and Vue.js. This full-stack application manages student enrollments, course bookings, service orders, agent workflows, and payment processing for an international education business.

## Features

- **Student Management** — Complete student profiles including personal details, education history, English proficiency, emergency contacts, and consent forms
- **Course Management** — Course catalog with categories, enrollment tracking, and certificate generation
- **Booking System** — Service booking with assignment to agents and status tracking
- **Order Processing** — Full order lifecycle with wallet management and PayPal integration
- **Agent Portal** — Dedicated agent workflows with booking assignments and commission reports
- **Blog & Gallery** — Content management for posts and image galleries
- **Messaging** — Internal messaging and customer communication system
- **Reporting** — Company and service provider reports with summary processing
- **PDF Generation** — Certificate and document generation via DomPDF
- **SMS & Email** — Event-driven notifications via Twilio SMS and email
- **Payment Gateway** — PayPal REST API integration for online payments
- **Country Data** — International country/region support via pragmarx/countries

## Tech Stack

- **Backend:** Laravel 8 (PHP 7.3+ / 8.0+)
- **Frontend:** Vue.js SPA with Laravel Mix
- **API:** RESTful API with Laravel Sanctum authentication
- **Payments:** PayPal REST API SDK
- **PDF:** barryvdh/laravel-dompdf
- **SMS:** Twilio SDK
- **Data Sync:** SheetDB (Google Sheets integration)
- **Database:** MySQL

## Getting Started

```bash
# Clone the repository
git clone https://github.com/mhmalvi/ibm-platform.git
cd ibm-platform

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Configure environment
cp .envExample .env
php artisan key:generate

# Configure PayPal, Twilio, and mail credentials in .env

# Run migrations
php artisan migrate

# Build frontend assets
npm run dev

# Start the development server
php artisan serve
```

## Project Structure

```
app/
├── Http/Controllers/API/Backend/   # RESTful API controllers
│   ├── AgentController             # Agent management
│   ├── BookingController           # Booking workflows
│   ├── CertificateController       # Certificate generation
│   ├── CourseController            # Course CRUD
│   ├── CustomerController          # Customer management
│   ├── OrderController             # Order processing
│   ├── PaypalController            # Payment integration
│   ├── ServiceController           # Service catalog
│   └── StudentsController          # Student enrollment
├── Models/
│   ├── Student/                    # Student-related models (10+ models)
│   ├── Booking, Course, Order      # Core business models
│   └── Service, Package, Rating    # Service models
├── Events/                         # Mail, SMS, and auth events
├── CrudMachanism/                  # Reusable CRUD logic layer
└── CrudInterface/                  # CRUD contracts
resources/js/components/backend/    # Vue.js SPA components
├── dashboards/                     # Dashboard views
├── booking/                        # Booking management
├── courses/                        # Course management
├── customer/                       # Customer views
└── authentication/                 # Login and auth
```

## License

MIT
