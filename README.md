If you are using Docker:

Run: docker compose up -d
Run: cp .env.example .env
Run: docker exec -it kayne-west-quotes-app-1 sh
Inside the container, run: composer install
Inside the container, run: php artisan key:generate
Inside the container, run: php artisan migrate
Inside the container, run: php artisan db:seed
Inside the container, run: php artisan serve --host=0.0.0.0 --port=8000
Open a new terminal tab and run: php artisan schedule:run to run scheduled jobs.
Then, open in your browser: http://localhost:8000/, and use the password password to access the page.

If you are using XAMPP:

Configure your local environment.
Open the project and run:
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan schedule:run to run scheduled jobs.
Open your configured local host in the browser, and use the password password to access the page.
