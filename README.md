#### Install Packages

```
composer install
```

#### Copy .env file

```
cp .env.example .env
```

#### Set Database Detail & run migration

```
php artisan migrate
```

#### Set Application key

```
php artisan key:generate
```

#### Start Laravel Project

```
php artisan serve
```