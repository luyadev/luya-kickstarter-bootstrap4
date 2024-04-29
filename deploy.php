<?php

namespace Deployer;

require 'vendor/luyadev/luya-deployer/luya.php';

host('SSH_HOST')
    ->setLabels(['stage' => 'prod'])
    ->set('remote_user', 'SSH_USER_NAME')
    ->set('deploy_path', '~/httpdocs');

after('luya:commands', 'unglue');

set('repository', 'https://USER:PASSWORD@github.com/VENDOR/REPO.git');