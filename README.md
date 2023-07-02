<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Тестовое задание

- Использованный фреймворк - Laravel 10
- Тематика проекта: Связь <code>«многие ко многим»</code> 2-х таблиц <code>"Люди"</code> и <code>"Уровень образования"</code>
- Таблицы <code>persons</code> и <code>education_levels</code>, вспомогательная таблица для реализации связи «многие ко многим» <code>person_education_level</code>
- Для таблиц созданы миграции
- Работа с базой данных реализована через шаблон репозитория
- Реализована простая аутентификация по ключу, для этого добавлен Middleware класс <code>ApiKeyMiddleware</code>
- Для правильной работы аутентификации необходимо добавить переменную окружения <code>API_KEY</code> (файл <code>.env</code>, пример: <code>API_KEY=test-app-api-key</code>)
- Api-key передается как параметр api_key в каждом запросе, реализована также передача в виде HTTP заголовка (в коде закомментирована)
- Реализованы CRUD методы для обоих сущностей
- UI нет, все запросы и ответы в JSON формате
