<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data.

// $resource = curl_init($url);

// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);

// $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

// var_dump($code);

// echo $result;

// echo $result;
// Get response status code

// set_opt_array

// Post request

$resource =curl_init();
$user = [
    'name' => 'Faisal Ahammed',
    'username' => 'setufaisal',
    'email' => 'setu@example.com'
];
curl_setopt($resource, $user[
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER =>['content-type : application'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);

curl_close($resource);
echo $result;


?>