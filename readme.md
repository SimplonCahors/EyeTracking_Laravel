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
<code> sudo apt-get install libpng-dev </code>
then <code> npm install </code>
It might worked now !

## License


@TDB
