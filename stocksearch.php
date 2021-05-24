<html>

<body>
    <?php

    $host = 'iruminfra.synology.me';
    $user = 'admin';
    $pw = 'Irif0106!@#';
    $dbName = 'irum';
    $conn = mysqli_connect($host, $user, $pw, $dbName);


    // ..기능별 스크립트...
    $model = $_POST["model"];
    $description = $_POST["description"];

    $query = "insert into model_and_description (model, description) values ('$model','$description')";
    $result = mysqli_query($conn, $query);

    if ($result === false) {
        echo mysqli_error($conn);
    } else {
        echo "입력성공<br/>";
    }
    mysqli_close($conn);
    print "<br><a href='index.html'>메인 화면으로</a>";
    ?>






</body>

</html>