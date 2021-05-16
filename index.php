<?php

include 'app/controllers/UserController.php';

$userController = new UserController();

$users = $userController->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if( !empty( $users ) ): ?>
                        <?php $i = 0; foreach( $users as $user ): $i++ ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php echo !empty( $user['username'] ) ? $user['username'] : '' ?></td>
                                <td><?php echo !empty( $user['email'] ) ? $user['email'] : '' ?></td>
                                <td><?php echo ( $user['status'] === 1 ) ? 'Active' : 'Block' ?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
