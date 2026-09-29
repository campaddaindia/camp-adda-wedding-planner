# Camp Adda Wedding Planner

A complete PHP website and admin panel for a Jim Corbett destination wedding company.

## Features
- Responsive homepage matching the provided luxury wedding theme
- About Us page
- Wedding Venues page
- Contact/Enquiry page
- Query form with:
  - bride name
  - groom name
  - wedding date
  - number of persons
  - mobile number
- Floating WhatsApp / contact button on every page
- Admin login and dashboard to view all enquiries
- MySQL table structure included

## Setup
1. Create a MySQL database named `jimcorbett_weddings`
2. Import `db/schema.sql`
3. Update database credentials in `config/database.php` if needed
4. Run the project in a PHP-enabled server
5. Access the site at `http://localhost/index.php`
6. Admin login:
   - Email: `admin@campadda.in`
   - Password: `admin123`

## Admin page
- `admin/login.php`
- `admin/dashboard.php`

## Main pages
- `index.php`
- `about.php`
- `venues.php`
- `contact.php`

## Database file
- `db/schema.sql`

## Important note
The project uses a local PHP/MySQL setup. If your local environment uses a different DB user/password, update `config/database.php` accordingly.
