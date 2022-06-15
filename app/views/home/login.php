<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ;  ?></title>
</head>
<body>
    <h1><?php echo $h1 ?></h1>
    <form action="postlogin" method="POST">
        <input type="text" name=email>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>