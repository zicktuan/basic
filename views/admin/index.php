
<?php include 'inc/header.php' ?>
<?php include 'inc/sidebar.php' ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php include 'inc/navbar.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php
                // Master page
                if ( isset( $_GET['page'] ) ) {
                    switch ( $_GET['page'] ) {
                        case 'list-user':
                            include_once 'users/index.php';
                            break;
                        case 'add-user':
                            include_once 'users/add.php';
                            break;
                        case 'update-user':
                            include_once 'users/update.php';
                            break;

                    }
                }
            ?>

        </div>
        <!-- /.container-fluid -->

    </div>

</div>
<!-- End of Main Content -->
</div>

<?php include 'inc/footer.php' ?>