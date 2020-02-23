<?php
namespace Deployer;

require 'recipe/laravel.php';
//require 'recipe/npm.php';

// Project name
set('application', 'Bielecki');

// Project repository
set('repository', 'git@github.com:ambielecki/bielecki_v2.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('andrewbielecki.com')
    ->user('ambielecki')
    ->stage('production')
    ->set('deploy_path', '/var/www/html/bielecki');

// Tasks

task('pwd', function () {
    $result = run('pwd');
    writeln("Current dir: {$result}");
});

task('build', function () {
    run('cd {{release_path}} && build');
});

task('npm-install', function () {
    run('{{bin/npm}} install');
});

task('npm-prod', function () {
    run('{{bin/npm}} run production');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
after('artisan:optimize', 'npm-install');
after('npm-install', 'npm-prod');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');
