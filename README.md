# A Week With Wanda
A humorous, web-based game featuring a virtual assistant called Wanda - to raise awareness of some of the risks and possibilities of AI.

It's essentially a [branching narrative](https://thestoryelement.wordpress.com/2015/02/11/designing-branching-narrative/) interactive story (with lots of fiction to suggest Wanda is way smarter and more advanced than she really is!)

[Find out more about the project here.](https://weekwithwanda.wordpress.com)

## Behind the scenes
When developing this project, I created a couple of crude admin tools to preview Wanda's range of emotions, and the different chats. You can see these here:
[Scenarios & chats](https://weekwithwanda.com/scenarios)
[Emotions](https://weekwithwanda.com/emotions)

You can find the [scenario chats structure here](https://github.com/joefhall/week-with-wanda/tree/master/config/scenarios) and [language files here](https://github.com/joefhall/week-with-wanda/tree/master/resources/lang/en/chats) in this project.

## Installation
Want to run A Week With Wanda on your own server, modify or improve it?  Here's how to get it set up.

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
    5. Queueing of jobs to schedule emails, text messages, etc - for example with Redis or [Supervisor](https://laravel.com/docs/5.7/queues#supervisor-configuration))
