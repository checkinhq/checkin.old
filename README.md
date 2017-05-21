![CheckIn](/.github/logo.png?raw=true)

[![Build Status](https://img.shields.io/travis/checkinhq/checkin.svg?style=flat-square)](https://travis-ci.org/checkinhq/checkin)
[![Total Downloads](https://img.shields.io/packagist/dt/checkinhq/checkin.svg?style=flat-square)](https://packagist.org/packages/checkinhq/checkin)

**!**


## Quick start

``` bash
$ make setup
```

To start Docker container:

``` bash
$ docker-compose up -d
```

To run the built-in PHP server:

``` bash
$ make serve
```

To run the built-in PHP server in a Docker container:

``` bash
$ make DOCKER_OPTS="-p 8080:8080" docker serve
```

You should have the app running on localhost, port 8080.

Clean up when you are done:

``` bash
$ make clean
```


## Recommended development environment

Make sure the following are installed:

- latest [Docker](https://www.docker.com/)
- latest [Docker Compose](https://docs.docker.com/compose/)
- make
- [composer](https://getcomposer.org/)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
