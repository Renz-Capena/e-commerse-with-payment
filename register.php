<?php
    include "partials/header.php";
    require "partials/functions.php";
?>
    <title>Register</title>

    <div class="container mt-5">
        <?php 
            if($notif){ 
                echo $notif_text;
            }
         ?>
        <div class='w-50 border p-4 mx-auto mt-5'>
            <h2 class=''>Register</h2>
            <hr>
            <form method='post'>
                <div class='mb-3 d-flex alig-items-center justify-content-between'>
                    <div class="pe-2 w-50">
                        <label for="exampleInputEmail1" class="form-label">First name</label>
                        <input type="text" class="form-control" name='firstname' aria-describedby="emailHelp">
                    </div>
                    <div class="ps-2 w-50">
                        <label for="exampleInputEmail1" class="form-label">Last name</label>
                        <input type="text" class="form-control" name='lastname' aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name='email' aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                    <input type="password" class="form-control" name='confirm_password'>
                </div>
                <button class="btn btn-primary w-100" name='registerBtn'>Register</button>
                <hr>
                <div class='text-center fs-6'>
                    <p>OR</p>
                    <p>Already have a account?</p>
                </div>
                <a class='btn btn-secondary w-100' href="index.php">Login</a>
            </form>
        </div>
    </div>
<?php 
    include "partials/footer.php"
?>