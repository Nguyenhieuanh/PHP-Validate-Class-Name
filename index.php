<?php
$pattern = '/^[CAP][0-9]{4}[GHIKLM]/';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_REQUEST['check']))
    $className = $_GET['class'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Validate tên của lớp học</title>
</head>
<body>
<form action="#" method="get">
    <label>
        Class Name:
        <input type="text" name="class">
    </label>
    <button type="submit" name="check">Check</button>
    <br>
    <?php if (isset($_REQUEST['check'])) {
        if (!preg_match($pattern, $className)) {
            echo "Wrong format";
        } else echo "Ok!";
    } ?>
</form>
</body>
</html>
