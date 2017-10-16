# Chronos by ![Flagrow logo](https://avatars0.githubusercontent.com/u/16413865?v=3&s=20) [Flagrow](https://discuss.flarum.org/d/1832-flagrow-extension-developer-group), a project of [Gravure](https://gravure.io/)

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/flagrow/chronos/blob/master/LICENSE.md) [![Latest Stable Version](https://img.shields.io/packagist/v/flagrow/chronos.svg)](https://packagist.org/packages/flagrow/chronos) [![Total Downloads](https://img.shields.io/packagist/dt/flagrow/chronos.svg)](https://packagist.org/packages/flagrow/chronos) [![Donate](https://img.shields.io/badge/patreon-support-yellow.svg)](https://www.patreon.com/flagrow) [![Join our Discord server](https://discordapp.com/api/guilds/240489109041315840/embed.png)](https://flagrow.io/join-discord)

An extension that allows for [Laravel Task Scheduling](https://laravel.com/docs/5.1/scheduling#introduction) to be added
to any extension. We use it internally for [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) to
process long running tasks in the background, circumventing browser, webserver and php timeouts.

> This is a package meant for extension developers.

## Installation for developers

Add a constraint in the `composer.json` of your extension:

```json
        "dependencies": {
            "flagrow/chronos": "~1.0"
        }
```

## Configuration

Make sure you register your [Illuminate Console Command](https://laravel.com/docs/5.1/artisan#command-structure) by
subscribing to the event `Flagrow\Console\Events\ConfigureConsoleApplication`.

Example implementations:
- [flagrow/serve](https://github.com/flagrow/serve/blob/master/src/Listeners/AddServeCommand.php)

To set a schedule, create a [Service Provider](https://laravel.com/docs/5.1/packages#service-providers) which
resolves the `Illuminate\Console\Scheduling\Schedule` through IoC, then use its methods to configure the schedule
for the command, see the [Task Scheduling documentation](https://laravel.com/docs/5.1/scheduling#defining-schedules).

Example implementations:
- [flagrow/bazaar]()

## Support our work

We prefer to keep our work available to everyone.
In order to do so we rely on voluntary contributions on [Patreon](https://www.patreon.com/flagrow).

## Security

If you discover a security vulnerability within Upload, please send an email to the Gravure team at security@gravure.io. All security vulnerabilities will be promptly addressed.

Please include as many details as possible. You can use `php flarum info` to get the PHP, Flarum and extension versions installed.

## Links

- [Flarum Discuss post]()
- [Source code on GitHub](https://github.com/flagrow/chronos)
- [Changelog](https://github.com/flagrow/chronos/blob/master/CHANGELOG.md)
- [Report an issue](https://github.com/flagrow/chronos/issues)
- [Download via Packagist](https://packagist.org/packages/flagrow/chronos)

An extension by [Flagrow](https://flagrow.io/), a project of [Gravure](https://gravure.io/).
