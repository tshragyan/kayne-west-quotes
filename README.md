If you are using Docker:

 1) Run: docker compose up -d
1)Run: cp .env.example .env
2)Run: docker exec -it kayne-west-quotes-app-1 sh
3)Inside the container, run: composer install
4)Inside the container, run: php artisan key:generate
5)Inside the container, run: php artisan migrate
6)Inside the container, run: php artisan db:seed
7)Inside the container, run: php artisan serve --host=0.0.0.0 --port=8000
8)Open a new terminal tab and run: php artisan schedule:run to run scheduled jobs.
Then, open in your browser: http://localhost:8000/, and use the password password to access the page.

If you are using XAMPP:

1)Configure your local environment.
Open the project and run:
1) composer install
2) php artisan key:generate
3) php artisan migrate
4) php artisan db:seed
5) php artisan schedule:run to run scheduled jobs.
Open your configured local host in the browser, and use the password password to access the page.
