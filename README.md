# EventHub

Welcome to EventHub!

## Table of Contents

-   [EventHub](#eventhub)
    -   [Table of Contents](#table-of-contents)
    -   [Installation](#installation)
    -   [Example User Data](#example-user-data)
    -   [Contributors](#contributors)

## Installation

To get started with the project, follow these steps:

1.  Clone the repository to your local machine:

    ```
    git clone https://github.com/Kchanit/EventHub
    ```

2.  Change your working directory to the project folder:

    ```
    cd EventHub
    ```

3.  Install Laravel Dependencies
    ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
    ```
4.  Create an alias for Laravel Sail:

-   For wsl
    ```
    echo "alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'" >> ~/.bashrc
    ```
-   For zsh
    ```
    echo "alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'" >> ~/.zshrc
    ```

5. Create a .env file
    ```
    cp .env.example .env
    ```
6. Run all container
    ```
    sail up -d
    ```
7. Generate an application key in .env:

    ```
    sail artisan key:generate
    ```

8. Install JavaScript dependencies and build assets:
    ```
    sail yarn install
    ```
9. Build and compile Frontend assets:

    ```
    sail yarn dev
    ```

10. Run database migrations and seeders to set up the database:

    ```
    sail artisan migrate:fresh --seed
    ```

11. Link Storage
    ```
    sail artisan storage:link
    ```

## Example User Data

1. User1
    - email: user01@gmail.com
    - password: 1234
2. User2
    - email: user02@gmail.com
    - password: 1234
3. Officer1
    - officer01@gmail.com
    - password: 1234

## Contributors

-   Chanitaphon Lohamongkol 6410406533
-
