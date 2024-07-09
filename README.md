# About Course App

This application provides comprehensive information about the courses offered by an educational institute.<br>

Users can utilize its endpoints to perform various operations including:
- Retrieve a comprehensive list of available courses.
- Access detailed information for a specific course.
- Create new courses with relevant details.
- Modify existing course information.
- Delete courses.

These functionalities empower users to manage course-related data efficiently within the institute's framework.

## Project Commands

1. <u>Install Packages:</u>

    1. Update package list:

        ```
        sudo apt update
        ```

    2. Install PHP and related packages:

        ```
        sudo apt install php php-cli php-json php-mbstring php-mysql php-xml php-zip php8.1-curl composer
        ```

    3. Install MySQL client:

        ```
        sudo apt install mysql-client-core-8.0
        ```

    4. Install MySQL server:

        ```
        sudo apt install mysql-server
        ```
<p>

2. <u>Commands to run after installing 'mysql-server':</u>

    1. List the contents of '/var/run/mysqld/':

        ```
        ls -la /var/run/mysqld/
        ```

    2. Create the '/var/run/mysqld/' directory:

        ```
        sudo mkdir -p /var/run/mysqld
        ```

    3. Change ownership of '/var/run/mysqld/' to 'mysql:mysql':

        ```
        sudo chown mysql:mysql /var/run/mysqld
        ```

    4. Set permissions for '/var/run/mysqld/' to '755':

        ```
        sudo chmod 755 /var/run/mysqld
        ```

    5. Verify that '/var/run/mysqld/' exists:

        ```
        ls -la /var/run/mysqld/
        ```

    6. Restart the MySQL service:

        ```
        sudo service mysql restart
        ```
<p>

3. <u>Verify MySQL Access:</u>

    - Follow this step if also presented with an error such as:

        ```
        SQLSTATE[HY000] [1698] Access denied for user 'root'@'localhost'
        ```

    1. Starts the MySQL client with superuser (root) privileges:

        ```
        sudo mysql -u root -p
        ```

    2. Enter the below commands after starting and logging into the MySQL client:

        ```
        mysql> SELECT user, authentication_string, plugin FROM mysql.user WHERE user='root';

        mysql> ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
        mysql> FLUSH PRIVILEGES;

        mysql> exit;
        ```

    3. Restart the MySQL service:

        ```
        sudo service mysql restart
        ```
<p>

4. <u>Setup Laravel:</u>

    1. Check Laravel Version:

        ```
        laravel --version
        ```

    2. Install Laravel Installer Globally:

        ```
        composer global require laravel/installer
        ```

    3. Update Shell Configuration (e.g., ~/.bashrc, ~/.bash_profile, ~/.zshrc):

        - Add the following lines to the end of one of these files, depending on your shell ('~/.bashrc', '~/.bash_profile', or '~/.zshrc'):

        ```
        # Laravel Composer
        export PATH="$PATH:$HOME/.config/composer/vendor/bin"

        # Laravel Alias
        alias laravel='~/.config/composer/vendor/bin/laravel'
        ```

    4. Source the Shell Configuration:

        ```
        source ~/.bashrc  # or ~/.bash_profile or ~/.zshrc, depending on where you made the changes
        ```

    5. Verify Laravel Installation:

        ```
        laravel --version
        ```
<p>

5. <u>Commands to run to create the project:</u>

    1. Restart the MySQL service:

        ```
        sudo service mysql restart
        ```

    2. Create the Laravel application:

        ```
        laravel new course-app
        ```

    3. Change the current directory to the project directory:

        ```
        cd course-app/
        ```

    4. Make a model:

        ```
        php artisan make:model Course
        ```

    5. Create a migration:

        ```
        php artisan make:migration create_course
        ```

    6. Run the migration:

        ```
        php artisan migrate
        ```

    7. Make a Controller:

        ```
        php artisan make:controller CourseController
        ```

    8. Create the 'resources/views/layouts' directory and the necessary files:

        ```
        mkdir resources/views/layouts
        touch resources/views/layouts/app.blade.php
        ```

    9. Create the 'resources/views/course' directory and the necessary files:

        ```
        mkdir resources/views/course
        touch resources/views/course/create.blade.php
        touch resources/views/course/edit.blade.php
        touch resources/views/course/index.blade.php
        touch resources/views/course/show.blade.php
        ```

    10. Start the local development server:

        ```
        php artisan serve
        ```

        - Type Control-C (^C) in the terminal to stop the local development server
<p>

- <u>Commands used throughout the development of the project:</u>

    - Clear the configuration cache:

        ```
        php artisan config:clear
        ```

    - Display the status of migrations:

        ```
        php artisan migrate:status
        ```

    - Reset and re-run all migrations:

        ```
        php artisan migrate:refresh
        ```

    - Run any outstanding migrations:

        ```
        php artisan migrate
        ```

    - Start the local development server:

        ```
        php artisan serve
        ```

        - Type Control-C (^C) in the terminal to stop the local development server

    - Check the status of the MySQL service:

        ```
        sudo service mysql status
        ```

    - Start the MySQL service:

        ```
        sudo service mysql start
        ```

    - Stop the MySQL service:

        ```
        sudo service mysql stop
        ```

    - Restart the MySQL service:

        ```
        sudo service mysql restart
        ```
