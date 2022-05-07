# Laravel & Nuxt.js & Laradock  Dashboard 

![Product Image](https://s3.amazonaws.com/creativetim_bucket/products/350/original/opt_ad_nuxt_laravel_thumbnail.jpg)

# Laravel API Setup

## Introduction

JSON:API is a specification for how a client should request that resources be fetched or modified, and how a server should respond to those requests. It is designed to minimize both the number of requests and the amount of data transmitted between clients and servers. This efficiency is achieved without compromising readability, flexibility, or discoverability.

[Click here to go to the JSON:API docs](https://explore.postman.com/api/6357/laravel-jsonapi)

## Prerequisites

### JSON:API backend
The Laravel JSON:API backend project requires a proper multi-threaded web server such as Apache/Nginx environment with PHP, Composer and MySQL.

**Do not use `php artisan serve` as it will result in stalled requests due to the single-threaded nature of the built-in PHP web server.** 

We strongly recommend using [Laradock](https://laradock.io/) for Linux and Mac or [Laragon](https://laragon.org/download/) for Windows if possible.

Other options for your local environment:
- Windows: [How to install WAMP on Windows](https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows)
- Linux: [How to install LAMP on Linux](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu)
- Mac: [How to install MAMP on MAC](https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/)

You will also need to install Composer 2: [https://getcomposer.org/doc/00-intro.md](https://getcomposer.org/doc/00-intro.md)

### Nuxt Argon frontend
The Nuxt Argon frontend project requires a working local environment with NodeJS version 8.9 or above (8.11.0+ recommended), npm.

Install Node: https://nodejs.org/ (version 8.11.0+ recommended)

Install NPM: https://www.npmjs.com/get-npm

## Laradoc Installation

1 Clone Laradock inside your PHP project:
```
git clone https://github.com/Laradock/laradock.git
```
2 Enter the laradock folder and rename .env.example to .env.
```
cp .env.example .env
```
3 Open your project’s .env file and set the following:
```
PHP_VERSION=8.0
```
4 Run your containers:
```
docker-compose up -d nginx mysql phpmyadmin redis workspace 
```

5 Edit /etc/hosts (Mac OS)
```
127.0.0.1       lanuxt.dashbord.test
127.0.0.1       lanuxt.api.test
```

Docker Commands
```
docker-compose exec workspace bash

docker-compose up -d --build workspace
docker-compose up -d workspace

docker-compose up -d nginx
```
## Laravel API Project Installation

1. Navigate in your Laravel API project folder: cd your-laravel-json-api-project
2. Install project dependencies: composer install
3. Create a new .env file: cp .env.example .env
4. Add your own database credentials in the .env file in DB_DATABASE, DB_USERNAME, DB_PASSWORD
5. Create users table: php artisan migrate --seed
6. Generate application key: php artisan key:generate
7. Install Laravel Passport: php artisan passport:install
8. Add your own mailtrap.io credentials in MAIL_USERNAME and MAIL_PASSWORD in the .env file

## Nuxt Argon Dashboard Project Installation
Note: As many packages are deprecated on Node.js v16.x or higher make sure you are using Node.js 14.x(recommended) before strarting this installation.
1. Navigate to your Nuxt Argon Dashboard project folder: `cd your-nuxt-argon-dashbord-project`
2. Install project dependencies: `npm install`
3. Create a new .env file: `cp .env.example .env`
4. `BASE_URL` should contain the URL of your Nuxt Argon Dashboard Project (eg. http://localhost:8080/)
5. `API_BASE_URL` should contain the URL of your Laravel JSON:API Project. (eg. http://localhost:3000/api/v1)
6. Run `npm run dev` to start the application in a local development environment or `npm run build` to build release distributables.

## Usage

Register a user or login using admin@jsonapi.com and secret and start testing the theme.

Besides the dashboard and the auth pages this theme also has an edit profile page. All the necessary files are installed out of the box. Keep in mind that all the features can be viewed once you log in using the credentials provided above or by registering your own user.

### Dashboard

You can access the dashboard either by using the "**Dashboards/Dashboard**" link in the left sidebar or by adding **/dashboard** in the URL.

### Login

The login functionality is fully implemented in our theme helping you to start your project in no time. To login into dashboard you just have to add **/login** in the URL and fill the login form with one of the credentials (user: **admin@jsonapi.com** and password: **secret**).

| Profile Page                                                                                                                                                                                                                        | Users Page                                                                                                                                                                                                                         | Tables Page                                                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [![Profile Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/nuxt-argon-dashboard-laravel/profile.PNG)](https://nuxt-argon-dashboard-laravel.creative-tim.com/examples/user-profile?ref=nadl-readme) | [![Users Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/nuxt-argon-dashboard-laravel/users.PNG)](https://nuxt-argon-dashboard-laravel.creative-tim.com/examples/user-management?ref=nadl-readme) | [![Tables Page](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/nuxt-argon-dashboard-laravel/table.PNG)](https://nuxt-argon-dashboard-laravel.creative-tim.com/tables/regular?ref=nadl-readme) |

[View More](https://nuxt-argon-dashboard-laravel.creative-tim.com/?ref=nadl-readme)

## Documentation

The documentation for the Nuxt Argon Dashboard Laravel is hosted at our [website](https://nuxt-argon-dashboard-laravel.creative-tim.com/documentation?ref=nadl-readme).


```
|-- nuxt-argon-dashboard
│   app.html
│   CHANGELOG.md
│   nuxt.config.js
│   package.json
│   polyfills.js
│   README.md
│   yarn.lock
│
├───assets
│   ├───css
│   │   │   style.css
│   │   │
│   │   ├───font-awesome
│   │   └───nucleo
│   └───sass
│       │   argon.scss
│       │
│       ├───core
│       └───custom
│               _components.scss
│               _custom.scss
│               _functions.scss
│               _mixins.scss
│               _transitions.scss
│               _utilities.scss
│               _variables.scss
│               _vendors.scss
│
├───components
│   │   ValidationError.vue
│   │
│   ├───argon-core
│   │   │   Badge.vue
│   │   │   BaseAlert.vue
│   │   │   BaseButton.vue
│   │   │   BaseDropdown.vue
│   │   │   BaseHeader.vue
│   │   │   BasePagination.vue
│   │   │   BaseProgress.vue
│   │   │   CloseButton.vue
│   │   │   index.js
│   │   │   LoadingPanel.vue
│   │   │   Modal.vue
│   │   │   NavbarToggleButton.vue
│   │   │
│   │   ├───Breadcrumb
│   │   │       Breadcrumb.vue
│   │   │       BreadcrumbItem.vue
│   │   │       RouteBreadcrumb.vue
│   │   │
│   │   ├───Cards
│   │   │       Card.vue
│   │   │       StatsCard.vue
│   │   │
│   │   ├───Charts
│   │   │       BarChart.js
│   │   │       config.js
│   │   │       DoughnutChart.js
│   │   │       globalOptionsMixin.js
│   │   │       LineChart.js
│   │   │       optionHelpers.js
│   │   │       PieChart.js
│   │   │
│   │   ├───Collapse
│   │   │       Collapse.vue
│   │   │       CollapseItem.vue
│   │   │
│   │   ├───Feed
│   │   │       Comment.vue
│   │   │
│   │   ├───Inputs
│   │   │       BaseCheckbox.vue
│   │   │       BaseInput.vue
│   │   │       IconCheckbox.vue
│   │   │       TagsInput.vue
│   │   │
│   │   ├───Navbar
│   │   │       BaseNav.vue
│   │   │       NavbarToggleButton.vue
│   │   │
│   │   ├───NotificationPlugin
│   │   │       index.js
│   │   │       Notification.vue
│   │   │       Notifications.vue
│   │   │
│   │   ├───SidebarPlugin
│   │   │       index.js
│   │   │       SideBar.vue
│   │   │       SidebarItem.vue
│   │   │
│   │   └───WorldMap
│   │           AsyncWorldMap.vue
│   │           WorldMap.vue
│   │
│   ├───Dashboard
│   │   └───Cards
│   │           UserEditCard.vue
│   │           UserPasswordCard.vue
│   │
│   ├───feed
│   │       Comment.vue
│   │
│   ├───layouts
│   │   └───argon
│   │           Content.vue
│   │           ContentFooter.vue
│   │           DashboardNavbar.vue
│   │
│   ├───pages
│   │   ├───dashboard
│   │   │       ActivityFeed.vue
│   │   │       LightTable.vue
│   │   │       PageVisitsTable.vue
│   │   │       ProgressTrackList.vue
│   │   │       SocialTrafficTable.vue
│   │   │       UserList.vue
│   │   │
│   │   ├───register
│   │   │       FailedRegistration.vue
│   │   │       SuccessfulRegistration.vue
│   │   │
│   │   └───UserProfile
│   │           UserCard.vue
│   │
│   ├───tables
│   │   │   projects.js
│   │   │   users.js
│   │   │
│   │   ├───PaginatedTables
│   │   │       clientPaginationMixin.js
│   │   │
│   │   └───RegularTables
│   │           DarkTable.vue
│   │           LightTable.vue
│   │           TranslucentTable.vue
│   │
│   └───widgets
│           CreditCard.vue
│           MembersCard.vue
│           PaypalCard.vue
│           ProgressTrackList.vue
│           StatsCards.vue
│           VectorMapCard.vue
│           VisaCard.vue
│
├───layouts
│       AuthLayout.vue
│       DashboardLayout.vue
│       error1.vue
│
├───middleware
│       README.md
│       redirect.js
│
├───mixins
│       form-mixin.js
│       global.js
│
├───pages
│   │   dashboard.vue
│   │   index.vue
│   │   login.vue
│   │   register.vue
│   │
│   ├───components
│   │       icons.vue
│   │       notifications.vue
│   │
│   ├───examples
│   │   ├───user-management
│   │   │       index.vue
│   │   │
│   │   └───user-profile
│   │           index.vue
│   │
│   ├───maps
│   │       google.vue
│   │
│   ├───password
│   │       email.vue
│   │       reset.vue
│   │
│   └───tables
│           regular.vue
│
├───plugins
│   │   axios.js
│   │   elementUi.js
│   │   README.md
│   │
│   └───dashboard
│       │   dashboard-plugin.js
│       │   globalComponents.js
│       │   globalDirectives.js
│       │   JsonApi.js
│       │   world-map.js
│       │
│       └───directives
│               click-outside.js
│
├───services
│       profile-service.js
│       users-service.js
│
├───static
│   │   .nojekyll
│   │   favicon.png
│   │   README.md
│   │   sw.js
│   │
│   └───img
│       │   examples_image.png
│       │   examples_image1.png
│       │   placeholder.jpg
│       │
│       ├───brand
│       │       favicon.png
│       │       green.png
│       │       white.png
│       │
│       ├───icons
│       │   ├───cards
│       │   │       bitcoin.png
│       │   │       mastercard.png
│       │   │       paypal.png
│       │   │       visa.png
│       │   │
│       │   ├───common
│       │   │       github.svg
│       │   │       google.svg
│       │   │
│       │   └───flags
│       │           DE.png
│       │           GB.png
│       │           US.png
│       │
│       └───theme
│               angular.jpg
│               bootstrap.jpg
│               img-1-1000x600.jpg
│               img-1-1000x900.jpg
│               landing-1.png
│               landing-2.png
│               landing-3.png
│               profile-cover.jpg
│               react.jpg
│               sketch.jpg
│               team-1.jpg
│               team-2.jpg
│               team-3.jpg
│               team-4.jpg
│               team-5.jpg
│               vue.jpg
│
├───store
│       index.js
│       profile.js
│       README.md
│       register.js
│       users.js
│
└───util
        API_KEY.js
        authCustomStrategy.js
        throttle.js
```

## Browser Support

At present, we officially aim to support the last two versions of the following browsers:

<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/chrome-logo.png?raw=true" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/firefox-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/edge-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/safari-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/opera-logo.png" width="64" height="64">

## Resources

- Demo: <https://nuxt-argon-dashboard-laravel.creative-tim.com/?ref=nadl-readme>
- Download Page: <https://www.creative-tim.com/product/nuxt-argon-dashboard-laravel?ref=nadl-readme>
- Documentation: <https://nuxt-argon-dashboard-laravel.creative-tim.com/documentation?ref=nadl-readme>
- License Agreement: <https://www.creative-tim.com/license>
- Support: <https://www.creative-tim.com/contact-us>
- Issues: [Github Issues Page](https://github.com/creativetimofficial/nuxt-argon-dashboard-laravel/issues)
- **Dashboards:**

| HTML                                                                                                                                                                                | Laravel                                                                                                                                                                                                 | Nuxt & Laravel                                                                                                                                                                                                        |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [![Argon Dashboard HTML](https://s3.amazonaws.com/creativetim_bucket/products/96/thumb/argon-dashboard-2.jpg)](https://www.creative-tim.com/product/argon-dashboard?ref=nadl-readme) | [![Argon Dashboard Laravel](https://s3.amazonaws.com/creativetim_bucket/products/140/thumb/opt_ad_laravel_thumbnail.jpg)](https://www.creative-tim.com/product/argon-dashboard-laravel?ref=nadl-readme) | [![Nuxt Argon Dashboard Larave](https://s3.amazonaws.com/creativetim_bucket/products/350/thumb/opt_ad_nuxt_laravel_thumbnail.jpg)](https://www.creative-tim.com/product/nuxt-argon-dashboard-laravel?ref=nadl-readme) |

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Creative Tim](https://creative-tim.com/?ref=nadl-readme)
- [UPDIVISION](https://updivision.com)

## Reporting Issues

We use GitHub Issues as the official bug tracker for the Nuxt Argon Dashboard Laravel. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Nuxt Argon Dashboard Laravel. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/?ref=nadl-readme).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.

## Licensing

- Copyright Creative Tim (https://www.creative-tim.com/?ref=nadl-readme)
- Licensed under MIT (https://github.com/creativetimofficial/nuxt-argon-dashboard-laravel/blob/master/LICENSE.md)

## Useful Links

- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)
- [Affiliate Program](https://www.creative-tim.com/affiliates/new) (earn money)
- [Blog Creative Tim](http://blog.creative-tim.com/)
- [Free Products](https://www.creative-tim.com/bootstrap-themes/free) from Creative Tim
- [Premium Products](https://www.creative-tim.com/bootstrap-themes/premium?ref=nadl-readme) from Creative Tim
- [React Products](https://www.creative-tim.com/bootstrap-themes/react-themes?ref=nadl-readme) from Creative Tim
- [Angular Products](https://www.creative-tim.com/bootstrap-themes/angular-themes?ref=nadl-readme) from Creative Tim
- [VueJS Products](https://www.creative-tim.com/bootstrap-themes/vuejs-themes?ref=nadl-readme) from Creative Tim
- [More products](https://www.creative-tim.com/bootstrap-themes?ref=nadl-readme) from Creative Tim
- Check our Bundles [here](https://www.creative-tim.com/bundles??ref=nadl-readme)

## Social Media

### Creative Tim:

Twitter: <https://twitter.com/CreativeTim?ref=nadl-readme>

Facebook: <https://www.facebook.com/CreativeTim?ref=nadl-readme>

Dribbble: <https://dribbble.com/creativetim?ref=nadl-readme>

Instagram: <https://www.instagram.com/CreativeTimOfficial?ref=nadl-readme>

### Updivision:

Twitter: <https://twitter.com/updivision?ref=nadl-readme>

Facebook: <https://www.facebook.com/updivision?ref=nadl-readme>

Linkedin: <https://www.linkedin.com/company/updivision?ref=nadl-readme>

Updivision Blog: <https://updivision.com/blog/?ref=nadl-readme>

## Credits

- [Creative Tim](https://creative-tim.com/?ref=nadl-readme)
- [UPDIVISION](https://updivision.com)
