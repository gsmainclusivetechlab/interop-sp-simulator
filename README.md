GSMA Service Provider Simulator
===================================

[![Codacy grade](https://img.shields.io/codacy/grade/bd9d99bf5900401b9f11b9fa1ccef4f9?logo=codacy)](https://www.codacy.com/gh/gsmainclusivetechlab/interop-sp-simulator?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=gsmainclusivetechlab/interop-sp-simulator&amp;utm_campaign=Badge_Grade)

[![CircleCI Master](https://img.shields.io/circleci/build/github/gsmainclusivetechlab/interop-sp-simulator/master?label=Master&logo=circleCI&token=39af964dd2ce605e21a23434dc09d254b003ac34)](https://app.circleci.com/pipelines/github/gsmainclusivetechlab/interop-sp-simulator?branch=master) [![CircleCI Develop](https://img.shields.io/circleci/build/github/gsmainclusivetechlab/interop-sp-simulator/develop?label=Develop&logo=circleCI&token=39af964dd2ce605e21a23434dc09d254b003ac34)](https://app.circleci.com/pipelines/github/gsmainclusivetechlab/interop-sp-simulator?branch=develop)

BASE STRUCTURE
-------------------
```folder_structure
  build/		contains docker container config
  runtime/
    |-- bash/		Bash history (composer cache, bash commands history)
    |-- mysql/		MySQL databases for docker container
  src/			Laravel application code (Project)
```

INSTALLATION
------------

Project can be setup with Docker.

(If you have a Mac machine - we recommend to run docker under Vagrant)

1.  Clone repository
2.  Navigate to your project directory
3.  Run `make init`, this command will copy important files from examples:
    -  .env
    -  docker-compose.yml
    -  src/.env
    -  build/nginx-server.conf
4.  Check .env files for correct configurations.
5.  Run a test run to build containers and init DB: `make test-run`. After containers up press "Ctrl+C" to exit.
6.  Run containers with `make run`
7.  Add to your `/etc/hosts` file: `127.0.0.1 itp-sp.test`
8.  Run installation `make install`  

### Docker PHP Container

To get inside PHP container to run composer/php commands run this command:

`make php-bash`

Inside PHP container there is also GNU Make utility, run `make` without any parameters to get available commands list.

### Docker nodejs container

To build nodejs you can use make helpers:

`make npm-i`
`make npm-build`
`make npm-watch`

To open nodejs container permanently just run:

`make nodejs-bash`

### Using telescope for check incoming requests

In `src/.env` set TELESCOPE_ENABLED=true

Run

`make php-bash`

Inside PHP container run

`php artisan telescope:install`

`php artisan migrate`

### Site access:

Access your site via URL: <http://itp-sp.test:8087>

You're ready to write your code!
------------
