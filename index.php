<?php
    include "partials/header.php";
    require "partials/functions.php";
?>
    <title>Log in</title>

    <div class="container mt-5">
        <?php 
            if($notif){ 
                echo $notif_text;
            }
         ?>
        <div class='w-25 border p-4 mx-auto mt-5'>
            <h2 class=''>Log in</h2>
            <hr>
            <form method='post'>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name='email' aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>
                <button type="submit" class="btn btn-primary w-100" name='loginBtn'>Log in</button>
                <hr>
                <div class='text-center fs-6'>
                    <p>OR</p>
                    <p>Don't have a account?</p>
                </div>
                <a class='btn btn-secondary w-100' href="register.php">Register</a>
            </form>
        </div>
    </div>

<?php include "partials/footer.php"; ?>