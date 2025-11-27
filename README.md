# PHP Symlink Fail Proof of Concept

This repository contains a proof of concept for a PHP symlink failure scenario. It is designed to demonstrate how symlinks can lead to unexpected behavior in PHP applications.

## Overview
This project includes a simple PHP script that creates a symlink to a file and attempts to access it. The goal is to illustrate the potential pitfalls of using symlinks in PHP, especially when file paths are not handled correctly.

## Usage
1. Clone the repository:
    ```bash
    git clone https://github.com/imadenugraha/php-symlink-fail-poc.git
    cd php-symlink-fail-poc
    ```
2. Install dependencies using Composer:
    ```bash
    composer install
    ```
   Ensure you have Composer installed on your system.
3. Make sure `deploy.php` is configured correctly with your server details. Update the host, remote user, and deploy path as needed:
    ```php
    host('your-server-ip')
        ->set('remote_user', 'your-username')
        ->set('deploy_path', '/path/to/deploy');
    ```
   Replace `your-server-ip`, `your-username`, and `/path/to/deploy` with your actual server details.
4. Deploy the application using Deployer:
    ```bash
    vendor/bin/dep deploy
    ```
   This will set up the necessary environment and deploy the application to the specified host.
5. Access the application in your web browser at `http://your-server-ip/index.php`.
6. You should see the output from the application, which will demonstrate the symlink functionality.
7. Deploy again and test the symlink behavior by accessing the `index.php` file.

## Files
- `index.php`: The main script that demonstrates the symlink functionality.
- `helper/lib.php`: Contains helper functions used in the project.
- `README.md`: Documentation for the project.
- `deploy.php`: Deployment script using Deployer.
- `composer.json`: Composer configuration file for dependencies.
- `composer.lock`: Lock file for Composer dependencies.

## License
This project is licensed under the Apache License 2.0. See the LICENSE file for more details.