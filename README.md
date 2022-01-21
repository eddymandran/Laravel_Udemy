<h1 align="center">Bienvenue dans My Blog 👋</h1>
<p>
</p>

> Tutoriel Udemy de Florent NICOLAS (https://florentnicolas.com/) permettant la découverte de Laravel 8.
> <br/>
> L'idée était de construire un blog completement fonctionnel permettant de couvrir tous les concepts de base de Lavarel. 

## Installation

```sh
composer install

-> Falcutatif : 
npm install 
```

## Configuration

```sh
cp .env.example .env
php artisan key:generate

-> Créer en local une base de données puis compléter le .env

- DB_HOST
- DB_PORT
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

-> Réaliser ensuite les migrations

php artisan migrate
```

## Jeux de données ( facultatif )

```sh
-> Catégories
php artisan db:seed --class=CategorySeeder

-> Articles
php artisan db:seed --class=ArticleSeeder
```

## Creation du compte admin Voyager (dashboard admin)

```sh
php artisan voyager:admin your@email.com --create
```

## Connexion avec github
Si vous souhaiter avec github, vous aurez besoin de mettre a jour les 2 variables suivantes dans votre .env <br/>
Au besoin, vous pouvez vous aider de la documentation suivante : [authentification OAuth](https://docs.github.com/en/developers/apps/building-oauth-apps/creating-an-oauth-app)
```sh
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
```
## Usage

```sh
php artisan serve
```

## Execution des tests

```sh
php artisan test
```

## Auteur

👤 **Eddy MANDRAN**

* Github: [@eddymandran](https://github.com/eddymandran)
* LinkedIn: [@eddymandran](https://linkedin.com/in/eddymandran)
