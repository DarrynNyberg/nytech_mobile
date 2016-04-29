# nytech_mobile
Drupal 7 module to create phone ready navigation when the screen size is bootstrap sm or xs. Ment to be used with Bootstrap 3.x YOU MUST BE USING BOOTSTRAP drupal project or have a theme that uses BOOTSTRAP as a base theme or the markup for the menus will not look proper.

It produces a 50px high floating header navbar with a hambuger to the left and an option to the right. Both the left and right fly in while the left is just a list and the right blacks out the screen and presents only the options.

Default left is main menu while default right is user menu.

Markup is located `nytech_mobile/templates/mobile-header.tpl.php`

CSS is located at `nytech_mobile/css/nytech_mobile.css`

JS is located at `nytech_mobile/nytech_mobile.module` within the function `drupal_inect_js()`...

TO USE:
```<?php print theme('mobile_header'); ?>```