# Dashboard

## Members group

camille.bouzerand@epitech.eu
arthur.dassier@epitech.eu

## Docker

The project is execute with docker with 1 image for the laravel site and 1 for the mySQL db (and a 3rd for myphpadmin).

## Infrastructure of project

```shell
-Dashboard_2019+--Dashboard --> laravel docker image / all files for laravel project
               |__run --> DATABASE docker image / all file for DB
```

## How to run it

If it's the first time you clone it or a new git pull, you must install the new depedencies.
In order to do that, go in the directory "Dashboard" and execute:
$composer update
$composer install

Then, in order to run it, execute in the root directory :

```shell
$sudo docker-compose up --build
```

Go in an internet browser and enter : - 0.0.0.0:8000 -> the site
                                      - 0.0.0.0:8080 -> the myphpadmin (DB manager mySQL)

## How to login on the site

### Register

If you want to create a new user in the DB, you can click on register in the main page and follow the instructions.

### Login

#### Normal mode

if you already have an account in the DB of the application you can use them in the login section.

#### Google mode

You can use your google account if you have one for login on the application. There is no need to be in the DB. Click on the google icon
on the top right of the login.

#### Github mode

You can also login with your github account in the same way of google.

## Widgets

There are 4 main widgets on the main page :

### Weather widget

This widget give you all information of weather conditions for the selected city (by default for Paris).
If you want to change the city, you can do it by click on the little list on the bottom of the widget and select a new one.

### Calendar widget

This widget give you all the information of the current day. You also have a graphical calendar representation (by default on actual month).
If you want to see an other month of the actual year, you can use the the little list on the bottom of the widget and select a new one.

### Instagram widget

This widget give you all information of the actual user (account of camzer by default) and the last post of him. You can change the user :
-click on the link on the bottom of the widget
-on the website click on the button "Generate a key"
-register the account of the key you want
-copy/past the link in the section in the bottom of the widget and here you go !

### Clock widget

This widget is an international clock. You can chose a city for change the clock (by default on Paris). (!!! Actualy dont work as well cause the clock reset to paris !!!)