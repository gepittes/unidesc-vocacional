
<p align="center">
   <img src="https://raw.githubusercontent.com/gepittes/docs-vocacional/master/teste-vocacional-logo.png" width="300">
</p>

<p>
  <img alt="Version" src="https://img.shields.io/badge/version-2.0.0-blue.svg?cacheSeconds=2592000" />
  <a href="https://github.com/gepittes/docs-vocacional" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
</p>

> Teste vocacional da Feira das profissões | UNIDESC

<p align="center">
    <a href="http://177.107.132.54/"><img src="https://i.imgur.com/TPSteG6.png" align="center"></a>
</p>

## 🖼 Previews

<img src="https://i.imgur.com/xUAYgma.jpg">

| Home          | Form          |
| ------------- | ------------- |
| <img src="https://i.imgur.com/Vm7DWZT.png">  | <img src="https://i.imgur.com/QICfgH0.png">  |

| Questions     | Results       |
| ------------- | ------------- |
| <img src="https://i.imgur.com/ZpyNrel.png">  | <img src="https://i.imgur.com/eJFTiE3.png">  |

| Results       | Results       |
| ------------- | ------------- |
| <img src="https://i.imgur.com/gZguMG5.png">  | <img src="https://i.imgur.com/CiRNet1.png">  |

| Mail Result   |
| ------------- |
| <img src="https://i.imgur.com/jPLpIlR.png">  |

## Dependencies
- PHP 7.2
- Composer
- MySQL 8


## 🚀 Install

```
$ git clone https://github.com/gepittes/unidesc-vocacional
$ cd unidesc-vocacional
$ composer install
```

## 🖱️ Usage

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

## 📈 Run app

```
$ php artisan serve
```

Check app in http://localhost:8000/

## 👤 Authors

| Gabriel Roque  | Jadilson Guedes |
| ------------- | ------------- |
| <img src="https://avatars2.githubusercontent.com/u/32438220?s=460&v=4" width="110">  | <img src="https://avatars0.githubusercontent.com/u/36805474?s=460&v=4" width="110">   |
| <a href="https://github.com/gabriel-roque">Github</a>  | <a href="https://github.com/jadilson12">Github</a>  |
| <a href="https://www.linkedin.com/in/gabriel-roque/">Linkedin</a> | <a href="https://www.linkedin.com/in/jadilson12/">Linkedin</a> |


## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/gepittes/unidesc-vocacional/issues). 

## Show your support

Give a ⭐️ if this project helped you!

