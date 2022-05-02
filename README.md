# LIS - Invesitación aplicada
[Infografia](./framework.pdf)

[Video](https://drive.google.com/file/d/1RnuPcmbw37szXEWpwpSxJn07S9_YXPKk/view?usp=sharing)

## Requitos
* PHP
* Composer
* nodeJS
* Gestor de base de datos (MySQL, PostgresSQL, etc)

## Poniendolo en marcha...
Descargar las dependencias de php
```
composer install
```

Descargar las dependencias de nodeJS
```
npm install
```

Crear la base de datos Libros

Modificar el archivo .env.example y guardarlo como .env

Generar clave de aplicación
```
php artisan key:generate
```

Ejecutar las migraciones
```
php artisan migrate
```