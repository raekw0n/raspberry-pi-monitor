[![StyleCI](https://github.styleci.io/repos/197078264/shield?branch=master)](https://github.styleci.io/repos/197078264)

# Raspberry Pi Monitor

A client for the [raspberry pi monitor API](https://github.com/raekw0n/raspberry-pi-monitor-api)

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


![image](https://i.imgur.com/sWoKUfH.png)

## License
Raspberry Pi Monitor is open-sourced software licensed under the MIT license.
