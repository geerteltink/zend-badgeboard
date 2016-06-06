<?php

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

$client = new \Github\Client(
    new \Github\HttpClient\CachedHttpClient(['cache_dir' => 'data/github-api-cache'])
);

$organizationApi = $client->api('organization');

$paginator  = new Github\ResultPager($client);
$parameters = array('zendframework');
$repos     = $paginator->fetchAll($organizationApi, 'repositories', $parameters);


$user  = $client->api('user')->show('zendframework');

/*
file_put_contents(
    'data/user.json',
    json_encode($user, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);
*/

file_put_contents(
    'data/repos.json',
    json_encode($repos, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

$templates = new League\Plates\Engine('templates');
file_put_contents('dist/index.html', $templates->render('index', [
    'repos' => $repos,
]));