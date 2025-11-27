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
2. Ensure you have a PHP environment set up.
3. Run the script:
    ```bash
    php index.php
    ```
4. Observe the output and any errors that may occur due to symlink handling.
5. You can also modify the `helper/lib.php` file to add more helper functions as needed.
6. To test the symlink functionality, you can create a symlink manually or use the provided script.
7. Check the `README.md` for any updates or additional instructions.

## Files
- `index.php`: The main script that demonstrates the symlink functionality.
- `helper/lib.php`: Contains helper functions used in the project.
- `README.md`: Documentation for the project.

## License
This project is licensed under the Apache License 2.0. See the LICENSE file for more details.