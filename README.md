### Clone repository into your local environment

~~~
git clone https://github.com/MooCot/mvp-news-docker.git
~~~

REQUIREMENTS

[laravel] https://laravel.com/docs/8.x/installation

Install docker and essentials:
[Docker CE](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/)

[Docker-compose](https://docs.docker.com/compose/install/#install-compose)

[Allow non-root access to Docker](https://docs.docker.com/engine/installation/linux/linux-postinstall/#manage-docker-as-a-non-root-user)

Steps
-------------------------------------

docker-compose up --build
create .env in nvp-news
docker exec -it web bash
exit
php artisan key:generate (generate app key)
login in admiminer on pord 6080 and create db
config laravel .env for db
docker exec -it web bash
php artisan migrate
exit

Postman Link
-------------------------------------
https://www.getpostman.com/collections/02e3bddbf69e6ee97d44

GitHub Link
-------------------------------------
git clone https://github.com/MooCot/mvp-news.git