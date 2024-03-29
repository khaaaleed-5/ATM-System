    <?php
    require_once(__DIR__ . "/../../Models/admin.php");
    require_once(__DIR__ . "/Head.php");

    $showAlert = 0;

    if(!isset($_SESSION['firstname'])){
        echo '<b>Redirecting you to login screen to login...</b>';
        $refresh_delay = 1; // 2 seconds delay
        $redirect_url = "../LoginAdmin.php";
    
        header("refresh:$refresh_delay;url=$redirect_url");
        exit();
    }
    // create new employee
    if (isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['userName']) && isset($_POST['passWord']) && isset($_POST['acState'])) {
        $admin = new admin($_POST['userName'], $_POST['passWord'],"",$_POST['fName'].",".$_POST['lName']);
        if($_POST['acState'] == 'Admin'){
            $ok = $admin->createAdmin($admin);
        }else{
            $serviceTech = new servicesTechinican($_POST['fName'], $_POST['lName'], $_POST['userName'], $_POST['passWord']);
            $ok = $admin->createSRT($serviceTech);
        }
        if ($ok) {
            $showAlert = 1;
        } else {
            $showAlert = 2;
        }
    }
    ?>
    <!-- start CreateAdmin -->

    <body>

        <?php
        require_once(__DIR__ . "/nav.php");
        ?>
        <div class="container">
            <div class="CreateAdmin screen" id="CreateAdmin">
                <div class="container-fluid">
                    <h2>Add Employee</h2>
                    <form method="POST" action="#">
                        <div class="d-flex gap-4">
                            <div class="form-floating w-50 mb-3">
                                <input type="text" class="form-control" id="floatingSSN" placeholder="First Name" name="fName" required>
                                <label for="floatingSSN">First name</label>
                            </div>
                            <div class="form-floating w-50 mb-3">
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lName" required>
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="UserName" placeholder="user Name" name="userName" required>
                            <label for="UserName">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="Password" class="form-control" id="floatingPassword" placeholder="Password" name="passWord" required>
                            <label for="floatingCard">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="acState">
                            <option value="Blocked" selected>Admin</option>
                            <option value="Running">Service Technician</option>
                        </select>
                        <label for="floatingSelect">Role</label>
                        </div>
                        <input class="btn btn-success" type="submit" name="Add Admin">
                    </form>
                </div>
            </div>
        </div>
    </body>


    <!-- end CreateAdmin -->

    <?php
    if ($showAlert == 1) {

    ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'New Admin created successfully'
            })
        </script>
    <?php
    } else if ($showAlert == 2) {
    ?>
        <script>
            const Tooast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Tooast.fire({
                icon: 'error',
                title: 'Username already taken OR Connection error'
            })
        </script>
    <?php
    } ?>