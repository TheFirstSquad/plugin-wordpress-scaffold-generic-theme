# Implementation

### **Inputs**
The inputs for using the plugin are:  

| **Field** | **Example** | **Description** |
| :--- | :--- | :--- |
| wp_theme_name | Theme Stackspot Blog  | Theme Name |
| wp_theme_uri | https://www.your-theme-site.com/ | Theme URI |
| wp_theme_version | 1.0.0 | Version |
| wp_theme_description | Theme Stackspot Blog - Description | Description  |
| wp_theme_tags | blog, responsive | Tags |
| wp_theme_author | Author Name  | Author |
| wp_theme_author_uri | https://www.your-site.com/ | Author URI |
| wp_theme_php_requires | ~7.4 | PHP Requires |
| wp_theme_compatible | ~5.0 | Wordpress Compatible |
| wp_theme_license | GNU General Public License v3 or later | License |
| wp_theme_license_uri | http://www.gnu.org/licenses/gpl-3.0.html | License URI |

### Scaffold

The plugin will create the initial folder structure for a theme, inside the WordPress Themes base folder together with the creation of the ``style.css`` file.

The purpose of this plugin is just to create a base structure for its development, all the theme logic will have to be implemented later. 

#### File Structure
```bash
│   404.php
│   archive.php
│   comments.php
│   footer.php
│   front-page.php
│   functions.php
│   header.php
│   index.php
│   page.php
│   README.txt
│   rtl.css
│   screenshot.png
│   search.php
│   searchform.php
│   sidebar.php
│   single.php
│   style.css
│
├───assets
│   ├───css
│   ├───fonts
│   ├───images
│   └───js
├───classes
├───inc
├───template-parts
│   ├───footer
│   ├───header
│   ├───navigation
│   ├───page
│   └───post
└───templates
```

``style.css``
```php
<?php
/*!
Theme Name: Theme Stackspot Blog
Theme URI: https://www.your-theme-site.com/
Version: 1.0.0
Description: Theme Stackspot Blog - Description
Tags: blog, responsive
Author: Author Name
Author URI: https://www.your-site.com/
Requires PHP: ~7.4
Tested up to: 6.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html


Theme Stackspot Blog WordPress Theme, Copyright 2022
Theme Stackspot Blog is distributed under the terms of the GNU General Public License v3 or later
*/
```

### Additional Settings

N/A
