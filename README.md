# PHP Image Gallery with Routing

This project is a simple image gallery implemented in PHP. It includes a basic routing system that supports dynamic URL parameters, enabling functionality such as viewing, uploading, and deleting images from the gallery.

## Features

- **Dynamic Routing**: Custom PHP router class to handle static and dynamic routes.
- **Image Gallery**: Upload, view, and delete images.
- **404 Error Handling**: Redirects to a custom 404 page if the route is not found.
- **Dynamic Route Parameters**: Supports URLs with parameters, e.g., `delete/{id}` for deleting images by ID.

## Folder Structure

- `index.php` - The main entry point for the application.
- `functions.php` - Contains helper functions for the app.
- `controllers/` - Directory for controller files handling different routes.
    - `index.php` - Controller for the main gallery page.
    - `upload.php` - Controller to handle image uploads.
    - `delete.php` - Controller to handle image deletion.
    - `404.php` - Controller for handling 404 errors.
- `.htaccess` - Configured for routing all requests to `index.php`.

## Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/img_gallery_php.git
