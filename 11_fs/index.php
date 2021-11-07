<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
// Create directory
// mkdir('test');
// // Rename directory
// rename ('test' , 'test2');
// // Delete directory
// rmdir('test');
// rmdir('test2');
// Read files and folders inside directory
$files = scandir('../');
var_dump($files);
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', "Here is some content.");
// file_get_contents from URL

// $usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
// echo $usersJson;
// $users = json_decode($usersJson, true);
// var_dump($users);

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt'); //true
// is_dir
is_dir('test'); //false
// filemtime

$filename = 'sample.txt';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s .",filemtime($filename)) . "<br>";
}
// filesize

echo $filename . ' : ' .filesize($filename). 'bytes' . "<br>";
// disk_free_space
echo $df_c = disk_free_space("C:") . '<br>';
echo $df_d = disk_free_space("D:") . '<br>';
echo $df_e = disk_free_space("E:") . '<br>';
echo $df_f = disk_free_space("F:") . '<br>';
echo $df_g = disk_free_space("G:") . '<br>';
echo $df_h = disk_free_space("H:") . '<br>';





// file