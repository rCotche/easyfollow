# Easy follow

EasyFollow est une application de pointage crossplatform (mobile, desktop, web).
Avec une interface intuitive elle permet de suivre ses heures de travail et ses gains
obtenus.

## Requis

- PHP v 8.1 ou supérieur
- MySQL v 5.7.36 ou supérieur
- Composer v 2.4.1 ou supérieur
- Node.js v 18.13.0 ou supérieur

## Installation

- Créez une base de donnée avec pour nom :
```
easyFollow
```
- Assurez vous que l'interclassement est :
```
utf8mb4_unicode_ci
```
- Importez le fichier ".sql" dans la base de données que vous venez de créer
- Dans votre projet Laravel modifier le fichier "app>config>database.php" pour la connexion au serveur de base de données
```php
'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => 'InnoDB ROW_FORMAT=DYNAMIC',
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ]
```
- Modifiez votre fichier environnement à la racine du projet pour la connexion au serveur de base de données :
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=easyFollow
DB_USERNAME=
DB_PASSWORD=
```

## License

[MIT](https://choosealicense.com/licenses/mit/)