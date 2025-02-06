# My Drupal Site Configuration  
This README file contains the configuration details of my Drupal site along with relevant screenshots. 

Portfolio Website with Dynamic Content  

# Prerequisites  

Before proceeding, ensure you have the following software installed:  

- **Git**: Version control system to clone the repository.  
- **DDEV**: Local development environment management tool.  
- **Docker**: Required by DDEV for container management.  
- **Composer**: Dependency management tool for PHP.  

Environments
In your machine create a directory where you want to store your Drupal project. Then, open your terminal and navigate to that directory.
# Step 1: Clone the Drupal repository

Run the following command to clone the Drupal repository:
ddev config (create --project-type drupal11 --docroot=web)
ddev start
git clone https://github.com/drupal-composer/folio.git web
ddev import-db --src=database-file-folio.sql.gz 
cd web
ddev composer install (install Drupal and its dependencies)
ddev drush/drush
ddev drush uli (generate a URL for accessing the site)
ddev drush en -y (enable all available modules)
ddev drush cr (clear Drupal cache)

# Step 2: Configure Drupal settings

Navigate to the Drupal root directory using the following command:
cd web

Create a copy of the default Drupal settings file:
cp core/sites/default/default.settings.php custom.settings.php

Edit the custom.settings.php file and configure your database connection details:

1. Update the following variables:
   - database_host: The database host (usually 'db').
   - database_name: The database name (usually 'drupal').   

   ```php
   $config['database_default']['default']['database'] = 'drupal';
   $config['database_default']['default']['username'] = 'root';
   $config['database_default']['default']['password'] = 'your_database_password';
   $config['database_default']['default']['host'] = 'db';
   ```

2. Update the following variables:
   - admin_email: The email address for the Drupal admin user.
   - site_name: The name of your website.
   ```php
   $config['system.site']['name'] = 'folio Website';
   $config['system.site']['mail'] = 'admin@example.com';
   ```

3. Update the following variable:
   - theme_default: The theme for your website.
   ```php
   $config['system.theme']['default'] = 'folio';

        # Enable the theme
        ddev drush theme:enable portfolio -y


        # Clear Drupal cache
        ddev drush cr

        # Rebuild the database
        ddev drush cr
        # Restart the web server
        ddev restart
        # Access the website
        ddev drush uli
        # Enable the necessary modules
        ddev drush en -y views views_ui field_ui block_content
        # Clear Drupal cache
        ddev drush cr
        # Rebuild the database
        ddev drush cr
        # Restart the web server
        ddev restart
        

Custom Theme Configuration (Claro)
I created a new theme folder named custom in the theme directory.
I followed the Claro theme documentation to create a custom theme.
Added the following:
Info file: Details about the theme.
Libraries file: To load CSS files.
CSS directory: Containing style.css, project.css, and service.css.
Images and template directory: For custom assets and templates.


  CSS Structure
Under the CSS directory:

Added global CSS styles in style.css.
Libraries and Info File
libraries.yml: Called the CSS files via global styling.
info file: Included the theme name, description, core version, dependencies, and regions.
Twig Configuration
page.html.twig: Overridden the default page template.
node--article.html.twig: Overridden the default node template.
block.html.twig: Overridden the default block template.
CSS Configuration
style.css: Contains global styles applied across the website.

Screenshots:


Homepage


file:///home/harrison/Downloads/FireShot/Home.pdf

About

file:///home/harrison/Downloads/FireShot/about.pdf


contact
file:///home/harrison/Downloads/FireShot/contact.png


Portfolio
file:///home/harrison/Pictures/Screenshots/Screenshot%20from%202025-02-07%2000-20-11.png


