# laravel-boilerplate
![GitHub](https://img.shields.io/github/license/brifiction/laravel-boilerplate?style=for-the-badge) 
![GitHub release (latest by date)](https://img.shields.io/github/v/release/brifiction/laravel-boilerplate?style=for-the-badge) 
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/brifiction/laravel-boilerplate/PHP%20Tests%20for%20Laravel%20Boilerplate?label=GitHub%20Actions&style=for-the-badge)
![Docker Cloud Build Status](https://img.shields.io/docker/cloud/build/brifiction/laravel-boilerplate?style=for-the-badge) 
![Docker Pulls](https://img.shields.io/docker/pulls/brifiction/laravel-boilerplate?style=for-the-badge)

## Summary
This is a Laravel boilerplate project. Usage of the provided CI/CD products / services, are purely optional. 

The Laravel boilerplate project focus:
> To develop your Laravel application, with Docker, in a local environment.

Please review the files mentioned below, before performing any continued development:
1. The `composer.json` file, please review sections such as `require` and `require-dev`.
1. The `package.json` file. Delete `package-lock.json` file, if you're using `yarn`.
1. Example helper functions, under `app/Helpers`. Delete them if not used or required, then update `config/app.php` 
under `aliases`.
1. The `tests/*` files (more will be defined for CI/CD purposes).

Lastly, this boilerplate will be maintained, by updating to the latest Laravel version (upon official Laravel 
latest release, after reviewing the upgrade notes and change logs).

> For more information, go to [Laravel Release Notes](https://laravel.com/docs/master/releases).

## Continuous Integration and Continuous Development (CI/CD)

### GitHub

#### GitHub Actions
There are pre-defined example `workflows`. They are meant to be later customized, or define new workflows to tailor 
your development workflow needs:

##### Example workflows
1. Testing each Laravel deployment on each supported OS.
1. Running your Laravel PHPUnit tests.
1. Install and test your PHP modules beforehand. 
1. [Create your own Docker container action](https://docs.github.com/en/actions/creating-actions/creating-a-docker-container-action).

And so much more.

### Docker
Below are the services defined in the `docker-compose.yml` file:

1. Microsoft SQL Server (optional)
1. MySQL (optional)
1. NGINX
1. PHP-FPM
1. PhpMyAdmin (optional)
1. Redis (optional)

The services mentioned above are mostly optional, as you are welcome to make any changes to the `Dockerfile` and
`docker-compose.yml` files to suit your local development needs.

All Docker configurations for each service, are defined in the `.docker` folder structure.

## How to use

1. Modify your configurations for each service, that suits your needs. They are each located in the `.docker` folder.
1. Modify your `Dockerfile` and `docker-compose.yml` files, to suit your containerization needs.
1. Run `composer install`.
1. Define your environment variables in the `.env` file, including your database connection driver.
1. Run the `docker-compose` commands below in order.
   ```bash
   # Pulls an image associated with a service defined in a docker-compose.yml or docker-stack.yml file, but does not start containers based on those images.
   docker-compose pull
   # Services are built once and then tagged, by default as 'project_service'.
   docker-compose build
   # Builds, (re)creates, starts, and attaches to containers for a service, also as 'Detached mode'.
   docker-compose up -d
   ```
1. That's it! Enjoy coding with Laravel!

## Troubleshooting
1. There were some changes made with the Docker containers, why aren't they showing changes made?
   
   Try below in order, following commands should help make each build helpful for development workflow.
   ```bash
   # Stops containers and removes containers, networks, volumes, and images created by up.
   docker-compose down
   # Services are built once and then tagged, by default as 'project_service'.
   docker-compose build
   # If no changes to Dockerfiles.
   docker-compose build --no-cache
   # Builds, (re)creates, starts, and attaches to containers for a service, also as 'Detached mode'.
   docker-compose up -d
   ```
   
1. Some Linux packages are not installing, or have an error returned for some of them. How do we resolve these issues?

   Based on the error(s) received, it varies from incorrect packages installed with mismatched OS type, to deprecated 
   package names used. However, it is still all about modifying the `apt-get` commands in the `Dockerfile` at project root.

### Microsoft SQL Server PDO Drivers
The online resources for the `sqlsrv pdo drivers` constantly changes, however would like to leave a note here that 
you'll need them to be added as a `php extension`, in order to make a successful mssql database connection.

It is like any other database driver, just that these are obtained and configured differently, as opposed to `postgres`,
`sqlite` and others.

### Docker Compose commands
1. `docker-compose down` (https://docs.docker.com/compose/reference/down/)
1. `docker-compose build` (https://docs.docker.com/compose/reference/build/)
1. `docker-compose up` (https://docs.docker.com/compose/reference/up/)

## References
1. Laravel (https://laravel.com/)
1. PHP (https://www.php.net/downloads)
1. Composer (https://getcomposer.org/)
1. Docker Compose (https://docs.docker.com/compose/)
1. GitHub Actions (https://docs.github.com/en/actions)


