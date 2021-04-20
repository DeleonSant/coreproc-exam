# Getting started

## Installation

Clone the repository

    git clone git@github.com:DeleonSant/coreproc-exam.git

Switch to the repo folder

    cd coreproc-exam

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Make a link to storage

    php artisan storage:link

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


