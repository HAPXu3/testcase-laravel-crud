При создании CRUD использовался генератор [InfyOm Laravel Generator](https://github.com/InfyOmLabs/laravel-generator).

Поддерживается аутентификация через Google и Github при указании нижеследующих переменных в .env:

для google
```
GOOGLE_CLIENT_ID
GOOGLE_CLIENT_SECRET
GOOGLE_REDIRECT
```

для github
```
GITHUB_CLIENT_ID
GITHUB_CLIENT_SECRET
GITHUB_REDIRECT_URI
```

### Установка
Клонировать репозиторий
```
git clone https://github.com/HAPXu3/testcase-laravel-crud.git <destination path>
```
Установить зависимости
```
composer install
```
Создать .env и заполнить необходимые поля
```
cp .env.example .env
```
Запустить миграции
```
php artisan migrate
```
