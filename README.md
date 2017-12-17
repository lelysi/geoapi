# Project Title

Service GeoAPI

## Getting Started

* run
* composer update in www/ directory
* run 
* docker-compose up -d
* in project folder
* open 
* http://127.0.0.1/ip2geo?ip=000.000.000.000 
* and replace 000.000.000.000 with your ip

If container with nginx is not started, a possible cause that your 80 port may be used, try to change its in docker-compose file (81 for instance)

### Prerequisites

You need to have docker and composer installed

## Built With

* [Klein](https://github.com/klein/klein.php) - The route library used
* [IlluminateDatabase](https://packagist.org/packages/illuminate/database) - and PDO library from Laravel


## Authors

* **Denis Makovey** - [lelysi](https://github.com/lelysi)

## License

This project is licensed under the Creative Commons Attribution-ShareAlike 4.0 International License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

This product includes GeoLite2 data created by MaxMind, available from
<a href="http://www.maxmind.com">http://www.maxmind.com</a>.