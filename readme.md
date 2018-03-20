# EyeTracking BD

## Installation :  

- Run npm install.
- Run <b> composer install </b>.
- Import the database from ./extraData.
- Modify the <b>.env.example</b> into a <b>.env</b> and add your database connection settings.
- Run <b>php artisan key:generate</b>.
- Run <b>php artisan serve</b>.
+(bdd import)

## Problem with npm run dev : 
If you have th problem below : 
  ✖ Error: pngquant failed to build, make sure that libpng-dev is installed

You need to follow this steps : 
- <code> sudo apt-get install libpng-dev </code>
- <code> npm install </code>
It might worked now ! If not try this : 

- <code> sudo add-apt-repository "deb http://mirrors.kernel.org/ubuntu/ xenial main"</code>
- <code> sudo apt-get update</code>
- <code> sudo apt-get install libpng12-dev</code>
- <code> npm install</code>
- <code> npm run dev </code>

## License


@TDB
