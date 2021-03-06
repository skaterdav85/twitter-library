<?php 

/**
 * GET users/suggestions
 * https://dev.twitter.com/docs/api/1.1/get/users/suggestions
 */

require_once __DIR__ . '/credentials.php';
require_once __DIR__ . '/../src/Tang/TwitterRestApi/TwitterApi.php';

$twitterApi = new Tang\TwitterRestApi\TwitterApi([
	'api_key' => API_KEY,
	'api_secret' => API_SECRET
]);

$twitterApi->authenticate();
$json = $twitterApi->get('users/suggestions');
echo $json;