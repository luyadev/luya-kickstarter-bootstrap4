<?php

require 'vendor/luyadev/luya-deployer/luya.php';

// DEV environment
server('dev', 'server.tld', 22)
    ->user('username')
    ->password('password')
    ->stage('dev')
    ->env('deploy_path', '/path/to/dev/project/public_html');

// Preproduction environment
server('prep', 'server.tld', 22)
    ->user('username')
    ->password('password')
    ->stage('prep')
    ->env('deploy_path', '/path/to/prep/project/public_html');

// Production environment
server('prod', 'server.tld', 22)
    ->user('username')
    ->password('password')
    ->stage('prod')
    ->env('deploy_path', '/path/to/prod/project/public_html');

set('repository', 'https://user:password@github.com/organisation/repository.git');
