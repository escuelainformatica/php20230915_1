# Ejercicio 15 Septiembre 

Usando este ejercicio como ejemplo

* Necesitamos crear un sistema que muestre ciudades,paises y continentes.
* Para ello cree 3 modelos: (incluya el id y las fechas por defecto)
* Ciudad 
    * fillable nombre
    * funcion muchos es a uno: pais()
* Pais
    * fillable nombre
    * funcion muchos es a uno: continente()
* Continente
    * fillable nombre    

* Cree una migracion
* Cree un factory
* Cree o modifique el seeder para crear 100 ciudades,100 paises y 100 continentes

* Para mostrar todos los datos, use Ciudad::with['pais','pais.continente']->get();
* Use el tinker para ver si estan los datos:

```
php artisan tinker
> Ciudad::with['pais','pais.continente']->get();
(para salir del Tinker, escriba exit o presione control+c)
```

* Cree el controlador
* Cree una funcion para listar los datos
* Cree la vista para mostrar los datos
* Y modifique router/web.php




