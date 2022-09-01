<?php require('vendor/autoload.php');
$dotenv = new Dotenv\Dotenv(__DIR__, '.env2');
$dotenv->load();

echo 'Using docker env-file (NOQUOTES_1) => ' . getenv('NOQUOTES_1') . PHP_EOL;
echo 'Using docker env-file (WITHQUOTES_1) => ' . getenv('WITHQUOTES_1') . PHP_EOL;
echo 'Using docker env-file (WITHNEWLINE_1) => ' . getenv('WITHNEWLINE_1') . PHP_EOL;
echo 'Using docker env-file (WITHNEWLINEQUOTES_1) => ' . getenv('WITHNEWLINEQUOTES_1') . PHP_EOL;
echo 'Using docker env-file (OBJECT_1) => ' . getenv('OBJECT_1') . PHP_EOL;
echo 'Using docker env-file (BLANK_QUOTES_1) => ' . getenv('BLANK_QUOTES_1') . PHP_EOL;
echo 'Using docker env-file (BLANK_NOQUOTES_1) => ' . getenv('BLANK_NOQUOTES_1') . PHP_EOL;
echo 'Using docker env-file (DASH-KEY-1) => ' . getenv('DASH-KEY-1') . PHP_EOL;
echo 'Using docker env-file (DASH_VALUE_1) => ' . getenv('DASH_VALUE_1') . PHP_EOL;

echo 'Using Dotenv library (NOQUOTES_2) => ' . getenv('NOQUOTES_2') . PHP_EOL;
echo 'Using Dotenv library (WITHQUOTES_2) => ' . getenv('WITHQUOTES_2') . PHP_EOL;
echo 'Using Dotenv library (WITHNEWLINE_2) => ' . getenv('WITHNEWLINE_2') . PHP_EOL;
echo 'Using Dotenv library (WITHNEWLINEQUOTES_2) => ' . getenv('WITHNEWLINEQUOTES_2') . PHP_EOL;
echo 'Using Dotenv library (OBJECT_2) => ' . getenv('OBJECT_2') . PHP_EOL;
echo 'Using Dotenv library (BLANK_QUOTES_2) => ' . getenv('BLANK_QUOTES_2') . PHP_EOL;
echo 'Using Dotenv library (BLANK_NOQUOTES_2) => ' . getenv('BLANK_NOQUOTES_2') . PHP_EOL;
echo 'Using Dotenv library (DASH-KEY-2) => ' . getenv('DASH-KEY-2') . PHP_EOL;
echo 'Using Dotenv library (DASH_VALUE_2) => ' . getenv('DASH_VALUE_2') . PHP_EOL;
