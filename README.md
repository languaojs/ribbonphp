# RibbonPHP
*The simplest PHP MVC framework today.*

## What is it?

RibbonPHP is a pure PHP framework that will help you to build your PHP application of any kind. It is designed to be used for both novices and pros.

## Install using composer?

1. Install XAMPP or WAMP to your machine
2. Install Composer
3. Enter the *htdocs* (for XAMPP) or *www* (for WAMP) directory. Create a new directory with whatever name.
4. Open your code editor, direct to the new-made directory, and run the terminal
5. Type `composer require languaojs/ribbonphp:dev-main`
6. Composer will download all directories and files into `vendor` while you only need the `ribbonphp` directory and its contents. So, copy the `ribbonphp` directory (it is inside the `languaojs` directory) and paste the directory to your *htdocs* or *www* directory.
7. Run your local server and go to `localhost/ribbonphp`

## Install using Git Clone?
1. Install XAMPP or WAMP to your machine
2. Install Visual Studio Code (VSCode)
3. Open VSCode and its terminal
4. Direct the terminal to the htdocs or www directory
5. Run `git clone https://github.com/languaojs/ribbonphp.git` from the terminal
6. Run your localserver and go to `localhost/ribbonphp`

## Next step

You may need to rename the directory name (e.g. myapp). After rename the directory, go to `ribbon/ribbon_core/Config.php` and adjust the value of `APP_ROOT`.

This is a Beta version. I will soon create a full documentation of how to use RibbonPHP and update this Readme file. Currently, you can visit [RibbonPHP Blog](https://ribbonphp.blogspot.com).