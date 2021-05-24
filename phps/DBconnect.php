<?php
$host = 'iruminfra.synology.me';
$user = 'admin';
$pw = 'Irif0106!@#';
$dbName = 'irum';
$mysqli = new mysqli($host, $user, $pw, $dbName);
?>

<?php
if ($mysqli) {
    echo "MySQL 접속 성공";
} else {
    echo "MySQL 접속 실패";
}
?>