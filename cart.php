<?php
    include "partials/header.php";
    // session_start();
    require "partials/functions.php";
    include "partials/nav.php";


    $getAllDataincart = "SELECT * FROM carts WHERE user_id = ?";
    $stmt = $con->prepare($getAllDataincart);
    $stmt->execute([$id]);
    $fetch = $stmt->fetch();

    //======== Get total price
    $getTotalPrice = "SELECT SUM(price) AS total FROM carts WHERE user_id = ?";
    $total_stmt = $con->prepare($getTotalPrice);
    $total_stmt->execute([$id]);
    $total = $total_stmt->fetch();
    
?>
    <title>Cart</title>
    <div class='container d-flex justify-content-around'>
        <div class='w-50 mt-5'>
            <h2>Cart items</h2>
            <table class='table'>
                <thead class='text-center bg-primary text-light'>
                    <tr>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($stmt->rowCount()){ ?>
                        <?php do{ ?>
                            <tr>
                                <td class='fw-bold'><?php echo $fetch['name'] ?></td>
                                <td><?php echo $fetch['description'] ?></td>
                                <td>$<?php echo $fetch['price'] ?></td>
                                <td>
                                    <form method='post'>
                                        <input type="hidden" name='cart_id' value='<?php echo $fetch['id'] ?>'>
                                        <button name='deleteBtn' class='btn btn-danger'>DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php }while($fetch = $stmt->fetch()) ?>
                    <?php }else{ ?>
                        <tr>
                            <td colspan='4' class='text-center'>Your cart is empty</td>
                        </tr>
                    <?php } ?>
                    <!-- <tr class='fw-bolder fs-3 text-center'>
                        <td colspan='2' class='text-center'>TOTAL : </td>
                        <td colspan='2'>$<?php echo $total['total']; ?></td>
                    </tr> -->
                </tbody>
            </table>
        </div>

        <input id='payment_value' type="hidden" value='<?php echo $total['total'] ? $total['total'] : 0 ?>'>

        <div class='border w-25 mt-5 pt-5 p-3'>
            <div class='d-flex justify-content-evenly fw-bolder fs-3 text-center'>
                <p>TOTAL : </p>
                <p>$<?php echo $total['total'] ? $total['total'] : 0 ?></p>
            </div>
            <div id='paypal_button' class='mt-5'></div>
        </div>
    </div>

<?php
    include "partials/footer.php";
?>