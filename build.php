<?php

require_once __DIR__ . '/vendor/autoload.php';

// Make sure that cached responses are used if resources haven't changed since last time,
// without reaching the X-Rate-Limit.
$client = new \Github\Client(
    new \Github\HttpClient\CachedHttpClient(['cache_dir' => 'data/github-api-cache'])
);

// Init
echo "Fetching user data...\n";
$user = $client->api('user')->show('zendframework');

echo "Fetching repositories...\n";
$organizationApi = $client->api('organization');
$paginator       = new Github\ResultPager($client);
$repos           = $paginator->fetchAll($organizationApi, 'repositories', ['zendframework']);

// Sort alphabetically
usort($repos, function($a, $b) {
    return $a['name'] <=> $b['name'];
});

/*
// This is for testing only to figure out what data is fetched

file_put_contents(
    'data/user.json',
    json_encode($user, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

file_put_contents(
    'data/repos.json',
    json_encode($repos, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);
*/

echo "Generating static files...\n";
$templates = new League\Plates\Engine('templates');
file_put_contents('dist/index.html', $templates->render('index', [
    'repos' => $repos,
]));

echo "Job's done!\n";
