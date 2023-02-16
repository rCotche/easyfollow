# Easy follow

easyfollow est une application de pointage crossplatform (mobile, desktop, web).
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
easyfollow
```
- Assurez vous que l'interclassement est :
```
utf8mb4_unicode_ci
```
- Importez le fichier ".sql" dans la base de données que vous venez de créer
- Modifiez votre fichier environnement à la racine du projet pour la connexion au serveur de base de données :
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=easyfollow
DB_USERNAME=
DB_PASSWORD=
```

## License

[MIT](https://choosealicense.com/licenses/mit/)