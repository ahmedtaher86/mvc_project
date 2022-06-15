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
    <form action="postregister" method="POST">
         
        <label for="username">username :</label>
        <br>
        <input type="text" id=username name="username">
        <br>
        <label for="email">email :</label>
        <br>
        <input type="email" id=email name="email">
        <br>
        <label for="password">password :</label>
        <br>
        <input type="password" id=email name="password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>