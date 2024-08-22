Порядок разворачивания приложения:
 - В .env установить рандомный токен пользователя в переменную AUTH_TOKEN
 - В .env установить токен Telegram-бота в переменную TELEGRAM_TOKEN
 - В .env установить домен Telegram API в переменную TELEGRAM_DOMAIN
 - Ввести в терминал docker-compose up -d
 - Ввести в терминале docker exec -it app_notify bash, чтобы войти в контейнер
 - Провести миграции прописав php artisan migrate
 - Создать запись в таблице chats по роуту http://localhost:8000/api/user/add,
        который принимает в себя три параметра {
       "telegram_id": 835465081,
       "message": "Привет!",
       "period": 15
   }, в заголовок Authorization ввести AUTH_TOKEN из переменной окружения
 - Для запуска крона прописать php artisan schedule:run
