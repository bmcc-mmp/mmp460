---
site: MMP 460
---

## Installing a WordPress Site

WordPress is an open source free application that can be downloaded from [wordpress.org](https://wordpress.org/) and installed manually on a server. *Alternatively, many internet hosting services provide a one-click installation of WordPress sites*.

**A WorPress site is comprised of three main components:**

- **The WordPress application** –  a PHP-based Content Management software that is installed on the server.
- **A database** that stores all the content of the site, including text, images and other media.
- **A theme** – a set of php files that specify the design of the site. Because the theme (the design) is separated from the database (the content)  it can be changed easily without affecting the site’s content.

### Steps to installing a WordPress site manually

1. **Download WordPress** from [wordpress.org](https://wordpress.org/) and unzip it.
2. **Create a new database**. Create a user that has administrator privilages to the database. Make note the names of the database, user and password.
3. **Connect the database to the WordPress installation**. Locate a file in the extracted WordPress folder called wp-config-sample.php and rename it wp-config.php. Open it in a text editor and add the database name, user name and password in their designated places. Add the MySQL hostname (this information should be provided by your internet hosting service. It is often mysqlsvr or localhost, if installed locally).
4. **Upload the extracted WorPress folder with all files to server**
5. **Run the install script**. In your browser address field type the url of your wordpress site and follow the instructions to install the site. Make note of your username and password. These are different than the ones used for the databes.

### Managing the site

1. Login in to your WordPress site's dashboard at yoursiteurl/wp-admin using the username and password selected during installation.
2. To change the theme, choose Appearance > Themes and select or install a new theme.

------------------------

For step-by-step instructions, follow WordPress famous [5-Minute Installation](https://wordpress.org/support/article/how-to-install-wordpress/).
