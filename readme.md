# EyeTracking BD

## Installation :  
 
- Run <code> npm install </code> .
- Run <code> composer install </code>.
- Copy the <b>.env.example</b> into a <b>.env</b> and add your database connection settings.
- Run <code>php artisan key:generate</code>.

## Import database :

- Run <code> php artisan migrate:fresh </code>.

If you want default datas you can use seeds : 

- Run <code> composer dump-autoload </code>.
- Run <code> php artisan db:seed </code>

## Launch the server :

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

## Problem with npm run watch : 
If your npm run dev works, but any npm run watch won't work , try this : https://github.com/BrowserSync/browser-sync/issues/224 

## Database problem :

If you can't acces your database, even if your .env and everything is right, maybe laravel doesn't load your .env.
If so, try <code> php artisan config:cache </code> 

## To try file uploading : 
- make sure you have the latest DB and your .env is set up correctly. 
- run <code> php artisan storage:link </code>  
- if your terminal says it already exists, delete the storage folder in ./public (/!\ not ./storage) and run the command again.




## License
@TDB
