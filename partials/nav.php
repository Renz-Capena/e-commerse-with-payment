<?php
    require "db.php";

    session_start();

    $id = $_SESSION['userId'];

    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$id]);
    $fetch = $stmt->fetch();
?>
<div class='container mt-3 p-0'>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Products</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart</a>
            </li>
          </ul>
          <div class='mx-5'>
              Welcome! <?php echo $fetch['first_name'] ?>
          </div>
          <a href='index.php' class='btn btn-danger'>Log out</a>
        </div>
      </div>
    </nav>
</div>