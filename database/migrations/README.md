# Database Migrations

This portfolio project does not manage database migrations.

## Database Setup

The database structure is managed by the external admin project (`sadiq_sir_lab`).

### Setup Steps:

1. **Create Database:**

    ```sql
    CREATE DATABASE sadiq_sir_lab;
    ```

2. **Run Migrations in Admin Project:**

    ```bash
    # In your admin project directory
    php artisan migrate
    ```

3. **Configure Portfolio Project:**
    - Update `.env` file with correct database credentials
    - Create storage link: `php artisan storage:link`
    - Start server: `php artisan serve`

### Database Tables Expected:

-   `abouts` - About section data
-   `achievements` - Achievement data
-   `banners` - Banner/hero section data
-   `blog_categories` - Blog categories
-   `blogs` - Blog posts
-   `contact_messages` - Contact form submissions
-   `events` - Event data
-   `gallery_categories` - Gallery categories
-   `galleries` - Gallery items
-   `profiles` - Profile information
-   `researches` - Research data
-   `social_media` - Social media links
-   `subscribers` - Newsletter subscribers

### Note:

This portfolio project is view-only and does not create or modify database structure.
