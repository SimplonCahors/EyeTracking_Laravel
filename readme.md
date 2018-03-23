# EyeTracking BD

## Installation :  
 

- Run npm install.
- Run <b> composer install </b>.


- Run <code> npm install </code> .
- Run <code> composer install </code>.
- Import the database from ./extraData.
- Copy the <b>.env.example</b> into a <b>.env</b> and add your database connection settings.
- Run <code>php artisan key:generate</code>.
- Run <code> php artisan serve</code>.


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

## To try file uploading : 
- make sure you have the latest DB and your .env is set up correctly. 
- run <code> php artisan storage:link </code>  
- if your terminal says it already exists, delete the storage folder in ./public (/!\ not ./storage) and run the command again.




## License
@TDB
