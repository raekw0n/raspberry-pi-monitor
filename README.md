# Raspberry Pi Monitor

A client for the [raspberry pi monitor API.](https://github.com/raekw0n/raspberry-pi-monitor-api)

![image](https://i.imgur.com/sWoKUfH.png)

## Installation

Clone this repository:
```bash
$ git clone git@github.com:raekw0n/raspberry-pi-monitor.git
$ cd raspberry-pi-monitor
```

Configure your env variables:
```bash
$ cp .env-example .env
```

Install back-end dependencies:
```bash
$ composer install
```

Install front-end dependencies:
```bash
$ npm install
```

Compile assets:
```bash
$ npm install
```

## Development

To enable testing for development purposes, set `APP_DEBUG=true` in your `.env`, this will load the json test data contained within `tests/`, rather than calling the API.

Raspberry Pi Monitor is built using [Danielle Micro Framework](https://github.com/raekw0n/danielle-micro-framework) - You can find documentation [here](https://github.com/raekw0n/danielle-micro-framework). 

## License
Raspberry Pi Monitor is open-sourced software licensed under the MIT license.
