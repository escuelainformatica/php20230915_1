# Ejercicio 15 Septiembre 

Usando este ejercicio como ejemplo

* Necesitamos crear un sistema que muestre ciudades,paises y continentes.
* Para ello cree 3 modelos: (incluya el id y las fechas en la migracion)
* Ciudad 
    * fillable: nombreciudad (texto),idpais (entero pequeño)
    * funcion: muchos es a uno: pais()
* Pais
    * fillable: nombrepais (texto),idcontinente (entero pequeño)
    * funcion: muchos es a uno: continente()
* Continente
    * fillable: nombrecontinente (texto)
Ejemplo:
> php artisan make:model Ciudad

* Cree una migracion

> php artisan migrate:install
> php artisan make:migration mi_migracion
(una vez que este hecha la migracion)
> php artisan migrate:fresh


* Cree un factory para cada uno de los modelos. Use faker() para generar nombres falsos. para idpais e idcontinente, genere numeros al azar entre 1 y 100.
Ejemplo:
> php artisan make:factory CiudadFactory

* Cree o modifique el seeder para crear 100 ciudades,100 paises y 100 continentes

* Para mostrar todos los datos, use Ciudad::with['pais','pais.continente']->get();
* Use el tinker para ver si estan los datos:

```
php artisan tinker
> Ciudad::with['pais','pais.continente']->get();
(para salir del Tinker, escriba exit o presione control+c)
```

* Cree el controlador

> php artisan make:controller CiudadController

* Cree una funcion dentro del controller para listar los datos
* Cree la vista para mostrar los datos
* Y modifique router/web.php




