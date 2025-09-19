# Prof. Md Sadiq Iqbal - Personal Website

This is a Laravel-based personal website for Prof. Md Sadiq Iqbal, Chairman of the Department of Computer Science & Engineering at Bangladesh University.

## Project Structure

### Views Structure

```
resources/views/
├── layouts/
│   └── app.blade.php          # Main layout file
├── components/
│   ├── loader.blade.php       # Loading animation component
│   ├── progress-scroll.blade.php # Progress scroll button
│   ├── navbar.blade.php       # Navigation bar component
│   ├── header.blade.php       # Hero section component
│   ├── about.blade.php        # About section component
│   ├── research.blade.php     # Research areas component
│   ├── events.blade.php       # Events section component
│   ├── achievements.blade.php # Achievements timeline component
│   ├── gallery.blade.php      # Gallery with filtering component
│   ├── blog.blade.php         # Blog posts component
│   └── contact.blade.php      # Contact form component
└── home.blade.php             # Main home page
```

### Controllers

```
app/Http/Controllers/
└── HomeController.php         # Handles home page logic
```

### Routes

```
routes/web.php                 # Web routes configuration
```

## Features

-   **Responsive Design**: Mobile-friendly layout
-   **Component-Based Architecture**: Modular Blade components for easy maintenance
-   **Smooth Scrolling**: Enhanced user experience with smooth scrolling
-   **Interactive Elements**:
    -   Loading animation
    -   Progress scroll button
    -   Gallery filtering
    -   Contact form
    -   Research carousel
-   **SEO Optimized**: Proper meta tags and semantic HTML

## Sections

1. **Header**: Hero section with professor's introduction
2. **About**: Personal and professional background
3. **Research**: Research areas with carousel
4. **Events**: Upcoming events and highlights
5. **Achievements**: Career timeline and milestones
6. **Gallery**: Photo gallery with category filtering
7. **Blog**: Latest blog posts
8. **Contact**: Contact form and information

## Setup Instructions

1. **Install Dependencies**:

    ```bash
    composer install
    npm install
    ```

2. **Environment Setup**:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

3. **Database Setup** (if needed):

    ```bash
    php artisan migrate
    ```

4. **Asset Compilation**:

    ```bash
    npm run dev
    ```

5. **Start Development Server**:
    ```bash
    php artisan serve
    ```

## Asset Requirements

Make sure the following assets are available in the `public/assets/` directory:

-   CSS files: `plugins.css`, `style.css`
-   JavaScript files: jQuery, plugins, GSAP, custom scripts
-   Images: All referenced images in the components

## Customization

### Adding New Sections

1. Create a new component in `resources/views/components/`
2. Include it in `home.blade.php`
3. Add corresponding route if needed

### Modifying Content

-   Update content directly in the component files
-   Use Laravel's `asset()` helper for all static assets
-   Maintain the existing CSS classes for styling consistency

### Styling

-   All styles are in `public/assets/css/style.css`
-   Component-specific styles can be added to the layout file using `@stack('styles')`

## Browser Support

-   Modern browsers (Chrome, Firefox, Safari, Edge)
-   Responsive design for mobile devices
-   Progressive enhancement for older browsers

## License

This project is for educational and personal use.

# sadiq-sir-app-only-frontend

https://myaccount.google.com/apppasswords

```
    php artisan cache:clear
    php artisan route:clear
    php artisan config:clear
    php artisan view:clear
    php artisan optimize:clear
```
