# A Week With Wanda
A humorous, web-based game featuring a virtual assistant called Wanda - to raise awareness of some of the risks and possibilities of AI.

[Find out more about the project here.](https://weekwithwanda.wordpress.com)

## Installation
1. Clone this repository
2. Run `composer install`
3. Complete the [Laravel configuration steps here](https://laravel.com/docs/5.7#configuration)
4. Create a database (the project uses mysql by default)
    1. then run `php artisan migrate`
    2. then run `php artisan db:seed`
5. Run `npm install` 
6. Set up your `.env` file. As part of this, you will need to add:
    1. A mail provider e.g. Mailchimp
    2. An SMS provider if you want to make use of this functionality (currently the project is set up to work with [MessageBird](https://www.messagebird.com/en/))
    3. A Facebook app with client id and secret if you want to enable registering/login via Facebook [this site explains how to set this up.](https://www.codexworld.com/create-facebook-app-id-app-secret/) The callback url needs to `<your site url>/login/facebook/callback`
    4. An IP geographic lookup key in order to get the user's country, which some functionality relies on (currently the project is set up to work with [GeoIP DB](https://geoip-db.com/))
