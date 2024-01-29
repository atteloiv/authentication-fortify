# Authentication fortify

**Laravel Fortify** – это независимая от внешнего интерфейса серверная реализация аутентификации для Laravel. Fortify регистрирует маршруты и контроллеры, необходимые для реализации всего функционала аутентификации Laravel, включая вход в систему, регистрацию, сброс пароля, подтверждение электронной почты и двухфакторную аутентификацию.

<img src="public/image.png" width="500">

[Дизайн](<https://www.figma.com/file/fHAYWjmjN95JnQ7J8NbC03/Registration-page-(Community)?type=design&node-id=0-1&mode=design&t=YHnSeQqlPHzEAFcl-0>)

## Дополнительная документация

-   [Пакет Laravel Fortify](https://laravel.com/docs/10.x/fortify)

## Установка

1. Клонируйте репозиторий `git clone https://github.com/atteloiv/authentication-fortify.git`
2. Перейдите в папку склонированного репозитория
3. Установите composer `composer install`
4. Создайте новый файл конфигурации на основе .env.example `cp .env.example .env`
5. Сгенерируйте уникальный ключ `php artisan key:generate`
6. Настройте базу данных в файле .env в корне проекта:

```
DB_CONNECTION="тип используемого соединения"
DB_HOST="имя хоста или IP-адрес сервера"
DB_PORT="номер порта"
DB_DATABASE="имя БД"
DB_USERNAME="имя пользователя"
DB_PASSWORD="пароль"
```

7.  Запустите миграцию базы данных `php artisa migrate`

8.  Настройте систему электронной почты в файле .env в корне проекта:

```
MAIL_MAILER="драйвер почтовой программы"
MAIL_HOST="имя хоста или IP-адрес сервера"
MAIL_PORT="номер порта"
MAIL_USERNAME="имя пользователя"
MAIL_PASSWORD="пароль"
MAIL_ENCRYPTION="метод шифрования"
MAIL_FROM_ADDRESS="адрес электронной почты отправителя"
MAIL_FROM_NAME="имя отправителя"
```

9. Запустите веб-сервер `php artisan serve`
