    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
    </div>


    <div class="col-6">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control required">
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Comfirm password</label>
                <input type="password" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select form-control">
                    <option value="0">Block</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <select class="form-select form-control">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
