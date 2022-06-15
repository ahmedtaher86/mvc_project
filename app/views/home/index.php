<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
   
    <ul>
    <?php foreach ($data as $key => $value) { ?>
        <li><?php echo $value["id"]; ?></li>
        <li><?php echo $value["email"]; ?></li>
        <li><?php echo $value["password"]; ?></li>
        <li><?php echo $value["username"]; ?></li>
    <?php } ?>
    </ul>
<h1><?php   echo $h1; ?></h1>
</body>
</html>