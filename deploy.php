<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Bielecki');

// Project repository
set('repository', 'git@github.com:ambielecki/bielecki_v2.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

set('bin/npm', function () {
    return run('which npm');
});

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
    if (has('previous_release')) {
        if (test('[ -d {{previous_release}}/node_modules ]')) {
            run('cp -R {{previous_release}}/node_modules {{release_path}}');
        }
    }
    run("cd {{release_path}} && {{bin/npm}} install");
});

task('npm-prod', function () {
    run("cd {{release_path}} && {{bin/npm}} run production");
});

after('artisan:optimize', 'npm-install');
after('npm-install', 'npm-prod');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');
