# laravel-boilerplate
Important: The README will be constantly updated, due how a boilerplate project is defined / built with its core composer packages used. 
There are tons of optional choices to start your Laravel project, however there are some baseline composer packages that are defined as core packages for the boilerplate. 
In addition, these composer packages are entirely optional to install / use, remove them if they are not required.

## Specifications
Application Architecture
```yaml
PHP: ^7.2 
MySQL: 8.0
Laravel: ^6.0
Redis: ^5.0.7
Nginx: ^1.17.6
```

Composer Packages (*excluding Laravel and its dependencies* - baseline packages used for boilerplate)
```yaml
Guzzle: ^6.5
Pusher: ^4.1
Spatie's Laravel Analytics: ^3.8
```

```yaml
laravel/ui: ^1.0
```

## Summary
This is a Laravel boilerplate project. It will be updated to latest version of Laravel, when ready.

The project will constantly evolve and adapt, the architecture itself will be subjected to change in years to come. Ideally, this boilerplate is best hosted / developed in a Linux environment.



In summary, there are a couple of composer packages / services used for the baseline of this boilerplate.
1. Pusher
2. Sentry
3. Spatie
    1. Laravel Analytics
    1. Laravel Activity Log

### Docker
Including Docker and Docker Compose files are entirely optional. However, containerisation support will maximize development and mundane CI/CD workflows.

Be warned that using Docker for deployment to production environment is strongly advised, and please ensure that your ``Dockerfile(s)`` and ``docker-compose`` files are in order. Such as, if you're handling database 

### Redis
For this boilerplate, the main Redis client used is [predis](https://github.com/nrk/predis). It is installed via composer:

```bash
composer require predis/predis
```

If you'd like to change to another client, please edit the config / env file, and remove ``predis/predis`` from composer.json file.

For more information, go to [Laravel Docs](https://laravel.com/docs) > Database > Redis. Please bear in mind, links might be subjected to change.

## Resources (Optional - Uninstall if unnecessary)
[Spatie, Web design agency based in Antwerp, Belgium](https://github.com/spatie)
1. [Laravel Analytics](https://github.com/spatie/laravel-analytics)
1. [Laravel Activity Log](https://github.com/spatie/laravel-activitylog)



