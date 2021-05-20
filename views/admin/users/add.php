    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
    </div>

    <?php echo isset( $errors['checkUsername'] ) ? '<div class="alert alert-danger" role="alert">'.$errors['checkUsername'].'</div>' : '' ?>
    <?php echo isset( $errors['checkEmail'] ) ? '<div class="alert alert-danger" role="alert">'.$errors['checkEmail'].'</div>' : '' ?>
    <?php echo isset( $errors['checkPass'] ) ? '<div class="alert alert-danger" role="alert">'.$errors['checkPass'].'</div>' : '' ?>


    <div class="col-6">
        <form action="index.php?controller=admin-user&action=store" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control required">
                <div class="form-text" style="color: red;"><?php echo isset( $errors['username'] ) ? $errors['username'] : '' ?></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
                <div class="form-text" style="color: red;"><?php echo isset( $errors['email'] ) ? $errors['email'] : '' ?></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
                <div class="form-text" style="color: red;"><?php echo isset( $errors['password'] ) ? $errors['password'] : '' ?></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Comfirm password</label>
                <input type="password" name="re-password" class="form-control">
                <div class="form-text" style="color: red;"><?php echo isset( $errors['rePass'] ) ? $errors['rePass'] : '' ?></div>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select form-control" name="status">
                    <option value="0">Block</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <select class="form-select form-control" name="level">
                    <option value="0">Administrator</option>
                    <option value="1">Subscriber</option>
                    <option value="2">Author</option>
                    <option value="3">Editor</option>
                    <option value="4">Contributor</option>
                </select>
            </div>
            <button type="submit" name="btn-submit-user" class="btn btn-primary">Add</button>
        </form>
    </div>
    
