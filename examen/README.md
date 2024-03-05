PASOS PARA CORRER EL PORYECTO :
1.CONFIGURAMOS LA BASE DE DATOS , LA ABSE DE DATOS ESTA CON EL NOMBRE DE examen1
2.SI USAS PHP 8.1.27 TE VA CORRER, SINO CAMBIA LA CONFIGURACION 
3. COMO TINEE BOOSTRATP :

composer require ibex/crud-generator --dev
php artisan vendor:publish --tag=crud
php artisan make:crud 'NOMBRE DE LA TABLA'
composer require laravel/ui
php artisan ui bootstrap
php artisan ui bootstrap --auth

4. Instalas npm install && npm run dev
