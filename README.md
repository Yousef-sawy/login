# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Aabout this project 

This is a simple php project using codeigniter framework . Project consists of a login,Register,dashboard and profile pages.



![reg_val](https://github.com/user-attachments/assets/81a14e6c-c66c-497d-8f35-52a39769ee0b)
![reg](https://github.com/user-attachments/assets/4233f537-dea1-44a6-b0fa-e539d404d6a7)
![php](https://github.com/user-attachments/assets/2bc82942-d3dd-4929-89b6-48e5eb507f2d)
![login_val](https://github.com/user-attachments/assets/e5420ca0-7db2-40d2-9c8e-ba470b694d3c)
![login](https://github.com/user-attachments/assets/5b4edddc-bc5d-4685-8fd2-e0950053c9fc)
![update](https://github.com/user-attachments/assets/faef0052-d892-4010-a745-e335a8b33a1d)

