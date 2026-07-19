# Laravel Conversion - Eyad Bassem Coaching Platform

## Project Overview

This project converts the static HTML pages into a dynamic Laravel application with database models, migrations, and admin management interfaces.

## Database Schema

### Tables

1. **pages** - Main page management
2. **page_sections** - Sections within pages
3. **section_items** - Individual items within sections
4. **coaches** - Coach profiles
5. **programs** - Coaching programs
6. **process_steps** - Steps in the coaching process
7. **coaching_methods** - Methods used in programs
8. **testimonials** - Client testimonials
9. **faqs** - Frequently asked questions

## Installation

1. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

4. **Run the application**
   ```bash
   php artisan serve
   ```

## Routes

### Public Routes
- `GET /` - Landing page
- `GET /evolved-balanced` - Evolved & Balanced page

### Admin Routes
- `GET/POST /admin/pages` - Manage pages
- `GET/POST /admin/coaches` - Manage coaches
- `GET/POST /admin/programs` - Manage programs
- `GET/POST /admin/testimonials` - Manage testimonials
- `GET/POST /admin/faqs` - Manage FAQs

## Features

✅ Dynamic page content management
✅ Coach profile management
✅ Program creation and customization
✅ Process steps configuration
✅ Coaching methods management
✅ Client testimonials
✅ FAQ management
✅ Scalable architecture with Eloquent ORM
