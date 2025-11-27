<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/imadenugraha/php-symlink-fail-poc.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('192.168.122.10')
    ->set('remote_user', 'made')
    ->set('deploy_path', '/home/php-symlink-fail-poc');

// Hooks

after('deploy:failed', 'deploy:unlock');
