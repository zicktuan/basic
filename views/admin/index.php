
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
                if ( isset( $_GET['controller'] ) ) {
                    switch ( $_GET['controller'] ) {
                        case 'admin-user':
                            include '../../app/controllers/Backend/UserController.php';
                            break;
                    }
                }
            ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <?php include 'inc/footer.php' ?>
</div>
<!-- End of Main Content -->