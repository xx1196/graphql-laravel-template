<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Resume
This template is designed to be able to create laravel projects with ***graphql*** and auth with ***passport*** to have a code base already configured
## Requisites
* php 8.0
* composer v2

## Steps
* run ```composer i```
* copy ```.env.example``` to ```.env```
* run ```php artisan key:generate```
* run  ```php artisan lighthouse:ide-helper```
* run  ```php artisan migrate```
* run ```php artisan passport:install```
* replace this variables in ```.env``` whit credentials which throws the above command in the Password grant client section (usually the second pair of keys)
    * PASSPORT_CLIENT_ID
    * PASSPORT_CLIENT_SECRET

* Run ```php artisan serve```
* Create a database and conect it
* Open ```localhost:8000/graphql-playground ``` to see the enviroment playground
