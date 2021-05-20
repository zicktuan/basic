 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage User</h1>
    <a href="index.php?controller=admin-user&action=create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        Add user
    </a>
</div>
<!-- <?php if( isset( $msg ) ): ?>
    <div class="alert alert-success" role="alert">
    <?php echo $msg ?>
    </div>
<?php endif ?> -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Level</th>
                        <th>Create time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if( !empty( $data ) ): ?>
                        <?php $i = 0; foreach( $data as $item ): $i++; ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo !empty( $item['username'] ) ? $item['username'] : '' ?></td>
                                <td><?php echo !empty( $item['email'] ) ? $item['email'] : '' ?></td>
                                <td><?php echo ( 1 == $item['status'] ) ? 'Active' : 'Block' ?></td>
                                <td><?php echo $item['level'] ?></td>
                                <td><?php echo date( 'd/m/Y', $item['created_time'] ) ?></td>
                                <td>
                                    <a href="index.php?controller=admin-user&action=create&id=<?php echo $item['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="index.php?controller=admin-user&action=delete&id=<?php echo $item['id'] ?>" class="btn btn-sm btn-danger">Del</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>