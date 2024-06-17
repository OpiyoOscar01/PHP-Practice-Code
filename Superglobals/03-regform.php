<?php
echo '<pre>';
    var_dump($_POST);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo " ";
echo "Hello world";
?>
<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name">
    <label for="Password">Password:</label>
    <input type="text" id="password" name="password" placeholder="Enter your password">
    <button type="submit">Submit</button>
</form>
</body>
</html>
