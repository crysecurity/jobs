# Jobs

## About Jobs

Repository for managing company vacancies. Ability to create vacancies, manage them and find new employees in the company

## Requirements

- docker
- docker-compose
- php >= 7.2

# Installation

```bash
$ git clone git@github.com:crysecurity/jobs.git
$ cd jobs
$ cp .env.example .env
```

Setting up database settings to .env file

```bash
$ php artisan key:generate
$ docker-compose up -d
$ php artisan migrate --seed
```

## Security Vulnerabilities

If you discover a security vulnerability within Jobs, please send an e-mail to Cry Security via [cr4sec@gmail.com](mailto:cr4sec@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Jobs is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
