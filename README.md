# Лабораторная работа 6-1

## Новые условия оценки работ

- Работа ведется в ветках согласно модулю этого задания (это первый модуль) (например, `mod-1`, `mod-2`)

- При выставлении баллов будет оцениваться то, как правильно оформляются коммиты и их содержание

[Как делить на коммиты RU](https://uncaughtexception.ru/posts/2017/03/22/kogda-nuzhno-delat-kommit/)

[Это же, но на языке - оригинале](https://dev.to/gonedark/when-to-make-a-git-commit)

**Нейминг коммитов должен иметь скоуп коммита, например `feat`, `chore`, `refactor` и так далее, больше об этом можно прочитать [здесь](https://gist.github.com/DmitriiNazimov/f9cf7d0631d12c19827518b8bd8134c4)**

- Контент будет влиять на оценку проекта (тут его как такового нет, но это будет распространяться на следующие работы)

## Дедлайн сдачи работы без пенальти

???

## Как выполнять

- Создать пустой репозиторий в организации 31ISR под названием `up09-lab6-{ваша_фамилия}`

_При создании репозитория обязательно поставьте галочку "Создать README файл"_

- Открыть проект в workspace

## 0. Подготовка workspace

Установите следующие расширения в VSCode

- [PHP](https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode)
- [Laravel Blade formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter)
- [Laravel Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)
- [Laravel Extra Intellisense](https://marketplace.visualstudio.com/items?itemName=amiralizadeh9480.laravel-extra-intellisense)
- [Laravel goto view](https://marketplace.visualstudio.com/items?itemName=codingyu.laravel-goto-view)

## 1. Создание проекта

1. Инициализируйте проект под названием `note-app`

```
composer create-project laravel/laravel note-app
```

2. Сделайте commit в ветку `mod-1` под названием `initial commit`, вы будете делать коммиты изменений в данном модуле

3. Перейдите в папку с проектом и запустите приложение

```
php artisan serve
```

_Если у вас не произошло автоматическое выкидывание порта 8000, напишите команду в терминал `gh codespace ports`, где будет указан URL, по которому можно будет получить доступ к проекту_

```
? Choose codespace: ktkv419/test (mod-1*): shiny invention
LABEL  PORT  VISIBILITY  BROWSE URL
       8000  private     https://shiny-invention-g5wggjr5gp62v7qw-8000.app.github.dev
                         ^ это адрес
```

4. Откройте новый терминал и установите npm пакеты

```
npm install
```

затем запустите проект

```
npm run dev
```

### Структура Laravel 11 проекта

#### Стек технологий

##### Laravel
это сам фреймворк, предоставляющий удобную структуру для разработки веб-приложений. Он включает в себя встроенные механизмы маршрутизации, работы с базами данных, очередями, аутентификацией и многими другими возможностями.
##### Vite
это инструмент для быстрой сборки и разработки фронтенда. В Laravel он используется для управления ассетами (CSS, JS, изображения), обеспечивая горячую перезагрузку (hot reload) и оптимизированную сборку.
##### Artisan
это встроенный консольный интерфейс Laravel. Он позволяет выполнять команды для генерации кода (make:model, make:controller и т. д.), миграции базы данных (migrate), очистки кэша (cache:clear) и других задач по администрированию.
##### Composer
это менеджер зависимостей для PHP. С его помощью устанавливаются и обновляются библиотеки Laravel и другие пакеты, необходимые для работы приложения.

#### Файловая структура

- app/: Содержит ядро приложения, включая модели, контроллеры и другие классы.
- bootstrap/: Содержит файлы, необходимые для начальной загрузки фреймворка, включая настройки автозагрузки и кэширования.
- config/: Содержит конфигурационные файлы приложения.
- database/: Содержит миграции, сиды и файлы баз данных, такие как SQLite.
- public/: Содержит файл index.php, который является точкой входа для всех запросов, а также публичные ресурсы, такие как изображения, JavaScript и CSS.
- resources/: Содержит представления (views), некомпилированные ресурсы (например, SASS, JavaScript) и языковые файлы.
- routes/: Содержит файлы маршрутов приложения, такие как web.php и api.php.
- storage/: Содержит скомпилированные шаблоны Blade, файлы сессий, кэш и логи.
- tests/: Содержит тесты вашего приложения.
- vendor/: Содержит зависимости, установленные через Composer.

## Создание первого адреса

1. Создайне новый контроллер приложения 

    Контроллер в Laravel — это класс, который обрабатывает HTTP-запросы, управляет бизнес-логикой и возвращает ответ клиенту. Он действует как посредник между маршрутом (Route) и логикой приложения.

```
php artisan make:controller WelcomeController
```

2. Внесите изменения в контроллер `app/Http/Controllers/WelcomeController.php`

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{

    public function welcome()
    {
        return view('welcome')
    }
}
```

3. Добавьте контроллер в приложение изменив файл `routes/web.php`

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
```

- `Route::get('/')` – определяет маршрут для GET-запроса к корневому пути (/).
- `[WelcomeController::class, 'welcome']` – при запросе вызывается метод welcome() внутри WelcomeController.
- `->name('welcome')` – задаёт именованный маршрут, позволяя ссылаться на него внутри приложения.

4. Измените представление `welcome`

```php
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Welcome</h1>
    </body>
</html>
```

> [!WARNING]
>
> **Задание 1**

> Создайте новое представление `goodbye`, где будет `h1` с контентом `Goodbye` и будет находиться по адресу `/goodbye`
