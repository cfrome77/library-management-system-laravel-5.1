# libray-management-system
A library management system for allowing users to borrow books

installation of git cloned libray-management-system: git clone git@https://github.com/cfrome77/library-management-system.git, assumes you have ssh key set up with github

1. ssh into virtualbox machine: homestead up then homestead ssh, assuming it vagrant homestead is setup. [Setup article](https://medium.com/@eaimanshoshi/i-am-going-to-write-down-step-by-step-procedure-to-setup-homestead-for-laravel-5-2-17491a423aa)
2. composer install
3. php artisan key:generate
4. npm install
    a. use --no-bin-links for symlink issues
5. bower install
6. gulp
    a. use npm rebuild node-sass if error
    b. add --no-bin-link if you get symlink error with npm
7. migrate and seed the database: php artisan migrate and php artisan db:seed
8. cp .env.example .env
9. edit .env with correct info/keys below

SITE_NAME="libray-management-system"

SENDER=true

APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:6QLvI06lVzCUSvMAuKwgJ4Hqsya0BMY9Jw1GXDvcaa4=
APP_URL=http://libray-management-system.app
APP_DOMAIN=stratus.app

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls

FULLSTORY_ORG=1234
    
12. view app at http://libray-management-system.app

13. use homestead reload --provision to restart homestead after making changes to your code

