<?php
const DB_HOST = 'php8-2-db-host'; 
const DB_PORT = 3306; 
const DB_DATABASE = 'php_db'; 
const DB_USERNAME = 'root';
const DB_PASSWORD = 'root'; 
const DB_CHARSET = 'utf8mb4';

$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_DATABASE . ';charset=' . DB_CHARSET;
try {
    $dbh = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git編</title>
    <link rel="stylesheet" href="css/style.css" >
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
</head>
<body>

</body>
</html>

