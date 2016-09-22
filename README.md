# Skeleton Slim 3 Help Scout Dynamic App

A basic Slim 3 application to build a Help Scout dynamic app.
Using the [tompedals/helpscout-dynamic-app](https://github.com/tompedals/helpscout-dynamic-app) library to handle the request and produce the response. Simply implement the provided `AppHandlerInterface` interface for your app.

![Example app](http://developer.helpscout.net/img/developers/app-ex.png)

An example AppHandler is within the skeleton project to show some additional customer information on support tickets.
Expose your own data as an app for an enhanced support experience!

## Create your project

    composer create-project --no-interaction --stability=dev tompedals/helpscout-dynamic-app-slim my-app

## Getting started

Install the dependencies

    composer install

Start the web server

    php -S 0.0.0.0:8888 -t public public/index.php

Once running browse to [http://localhost:8888](http://localhost:8888).
