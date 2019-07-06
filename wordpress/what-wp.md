---
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: What is WordPress?
---

## What is WordPress?

WordPress is a *content management* application that can be used to create websites that are dynamically managed from the browswer. Practically speaking, once a WordPress site is installed, you can log into it and use its dashboard to add or change content without the need for coding HTML or CSS. The changes that you make will be instantly added to the website.

WordPress come with many templates, called *themes*, allowing you to create a professional looking site in minutes, without design work. In addition, many 3-party extentions, called *plugins*, can be used to add functionality, like slideshows, forms and even a shopping cart.

WordPress is an open source free application that can be downloaded from [wordpress.org](https://wordpress.org/) and installed manually on a server. Alternatively, many internet hosting services provide a one-click installation of WordPress sites. It should NOT be confused with wordpress.com, which is a service that hosts wordpress sites.

**A WorPress site is comprised of three main components:**

- **The WordPress application** –  a PHP-based Content Management software that is installed on the server.
- **A database** that stores all the content of the site, including text, images and other media.
- **A theme** – a set of php files that specify the design of the site. Because the theme (the design) is separated from the database (the content)  it can be changed easily without affecting the site’s content.

### Steps to installing a WordPress site manually

1. **Download WordPress** from [wordpress.org](https://wordpress.org/) and unzip it.
2. **Create a new database**. Create a user that has administrator privilages to the database. Make note the names of the database, user and password.
3. **Connet the database to the WordPress installation**. Locate a file in the extracted WordPress folder called wp-config-sample and rename it wp-config.php. Open it in a text editor. under the section labeled:

         // ** MySQL settings - You can get this info from your web host ** //
        DB_NAME 
        
The name of the database you created for WordPress in Step 2 . For example:

        define('DB_NAME', 'jsmith_db');
        DB_USER 
        
The username you created for WordPress in Step 2. For example:

        define('DB_USER', 'jsmith_jsmith');
        DB_PASSWORD 
        
The password you chose for the WordPress username in Step 2.

        DB_HOST 
        The hostname you determined in Step 2 (in our case is mysqlsvr). For example:
        define('DB_HOST', 'mysqlsvr');
        DB_CHARSET 
4. **Upload the WorPress files to server** to the lica
5. **Install the site**
