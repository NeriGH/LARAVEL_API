### COMMAND LARAVEL

## SUMMARY

<!-- Un contrôleur à pour but de répondre aux requêtes HTTP des clients -->
<!-- Une route va permettre aux utilisateurs d'accèder à nos contrôleurs -->
<!-- Un modèle va être utilisé afin de créer un objet model (une table dans un bdd)  -->

# CREATE PROJECT

> > composer create-project --prefer-dist laravel/laravel [PROJECT-NAME]

# START SERVER

> > php artisan serve

# CREATE CONTROLLER

> > php artisan make:controller [CONTROLER-NAME]

# VERIFY ROUTE

<!-- Do not forget to "use [path/to/controler]" on the web.php -->

> > php artisan route:list

# CREATION D'UNE TABLE

<!-- Do not forget to declare the structure of the table in the migration -->
<!-- Do not forget to declare in the model the element you want to pass to the db -->
<!-- protected $fillable = ['table-name1', 'table-name2'];-->

> > php artisan make:model [TABLE-NAME]

# POSTMAN

-   GET
    http://127.0.0.1:8000/api/concert => ALL DB
    http://127.0.0.1:8000/api/concert/?id={$id}

-   POST
    http://127.0.0.1:8000/api/concert/?name={$name}&date={$date}

-   EDIT
    http://127.0.0.1:8000/api/concert/?id={$id}&name={$name}&date={$date}

-   DELETE
    http://127.0.0.1:8000/api/concert/{$id}
