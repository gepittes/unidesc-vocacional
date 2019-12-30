<h1 align="center">Welcome to Teste Vocacional 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-2.0.0-blue.svg?cacheSeconds=2592000" />
  <a href="https://github.com/gepittes/docs-vocacional" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
</p>

> Teste vocacional da Feira das profissões | UNIDESC

### 🏠 [Homepage](https://github.com/gepittes/unidesc-vocacional)

## Install

```
$ git clone https://github.com/gepittes/unidesc-vocacional
$ cd unidesc-vocacional
$ composer install
```

## Usage

```
$ cp .env.example .env
$ php artisan key:generate
```

Configure your database in **.env**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=123456
```

```
$ php artisan migrate --seed
```

## Run app

```
$ php artisan serve
```

Check app in http://localhost:8000/

## Author

| Gabriel Roque  | Jadilson Guedes |
| ------------- | ------------- |
| <img src="https://avatars2.githubusercontent.com/u/32438220?s=460&v=4" width="110">  | <img src="https://avatars0.githubusercontent.com/u/36805474?s=460&v=4" width="110">   |
| <a href="https://github.com/gabriel-roque">Github</a>  | <a href="https://github.com/gabriel-roque">Github</a>  |
| <a href="https://www.linkedin.com/in/gabriel-roque/">Linkedin</a> | <a href="https://www.linkedin.com/in/jadilson12/">Linkedin</a> |


## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/gepittes/unidesc-vocacional/issues). 

## Show your support

Give a ⭐️ if this project helped you!

***
