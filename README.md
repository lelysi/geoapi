# Project Title

Service GeoIP

## Getting Started

1. run ``` composer update ``` in www/geoapi/ directory
2. run ``` docker-compose up -d ``` in project root folder
3. run ``` docker ps ``` in project root folder
4. copy CONTAINER_ID for IMAGE ``` geoapi_php ```
5. run ``` docker exec -i -t CONTAINER_ID bash ``` with replacing CONTAINER_ID with the id you copied in the previous step
6. inside the container run ``` php geoapi/db/do_migrate.php create ``` and little bit wait untill the command is finished
7. ``` exit ``` the container
8. open http://127.0.0.1/ip2geo?ip=000.000.000.000 and replace 000.000.000.000 with an ip location you wish to know

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
