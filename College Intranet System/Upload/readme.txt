Max's Navigation System

Max's Navigation System is very easy to use and flexible dynamic site navigation system. 
You only need to configure your site menus and submenus at one place and insert one line of code
in all of your website. As result you will get pure CSS based menu system which supports submenus, 
rollover effects and shows your actual location on the navigation panel. No database is required. 
The appearance can be change via CSS. An example project is alos included.

Usage:
    1. Open the maxNavigation.class.php
    2. In the first PHP section edit the $mainMenu and $subMenu arrays.
       Use menu title as key and url as value.
       
       $mainMenu['Projects']  = 'projects.php'; 
       
    3. On every page where you want to display the menu just insert the following line of code:
       <?php include('maxNavigation.class.php'); ?>

The archive file contains a small demo project.       
