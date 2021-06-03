<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="?controller=admin-user&action=store" method="post">
        <div>
            <label for="">username</label>
            <input type="text" name="username">
            <?php echo !empty($errors['username']) ? $errors['username'] : '' ?>
        </div>
        <div>
            <label for="">password</label>
            <input type="text" name="password">
            <?php echo !empty($errors['password']) ? $errors['password'] : '' ?>
        </div>
        <button type="submit" name="btn-submit">add</button>
    </form>
    
</body>
</html>