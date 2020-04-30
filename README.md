# laravel-boilerplate
![GitHub All Releases](https://img.shields.io/github/downloads/brifiction/laravel-boilerplate/total?style=for-the-badge) ![GitHub release (latest by date)](https://img.shields.io/github/v/release/brifiction/laravel-boilerplate?style=for-the-badge)

## Summary
This is a Laravel boilerplate project. It will be updated to latest Laravel version, when available.

### Docker
1. Microsoft SQL Server
1. MYSQL
1. NGINX
1. PHP-FPM
1. REDIS (optional)

## How to use

1. Modify your configurations for each service, that suits your needs. They are each located in the ``.docker`` folder.
1. Modify your ``Dockerfile`` and ``docker-compose.yml`` files, to suit your containerization needs.
1. Run ``composer install``.
1. Define your environment variables in the ``.env`` file, including your database connection driver.
1. Run the ``docker-compose`` commands below in order.
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
   
1. Some of the Linux packages are not installing, or have an error returned for some of them. How do we fix them?

   Based on the error(s) received, it varies from incorrect packages installed with mismatched OS type, to deprecated 
   package names used. However, it is still all about modifying the `apt-get` commands in the `Dockerfile` at project root.

## References
1. Laravel (https://laravel.com/)
1. PHP (https://www.php.net/downloads)
1. Composer (https://getcomposer.org/)

### Microsoft SQL Server PDO Drivers
The online resources for the ``sqlsrv pdo drivers`` constantly changes, however would like to leave a note here that 
you'll need them to be added as a ``php extension``, in order to make a successful mssql database connection.

It is like any other database driver, just that these are obtained and configured differently, as opposed to `postgres`,
`sqlite` and others.

### Docker Compose commands
1. ```docker-compose down``` (https://docs.docker.com/compose/reference/down/)
1. ```docker-compose build``` (https://docs.docker.com/compose/reference/build/)
1. ```docker-compose up``` (https://docs.docker.com/compose/reference/up/)


