<?php
    include "partials/header.php";
    require "partials/functions.php";
    include "partials/nav.php";
?>
    <title>Home || Products</title>
    <div class='container border d-flex align-items-center justify-content-around mt-5 p-5'>
        <form class="card" style="width: 18rem;" method='post'>
            <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTrAVx_1mK6THml6MDUKUQbCBeF-li7-dumYJ8k7rH4zeLu_rVz-Sypm1mJpGBclELPetBO56iOG2ZRVOkncSBkPMb4gAhUkuyEurG531s&usqp=CAE" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Slacks pants for Men Casual Straight Trouser</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, libero deleniti sapiente fugiat tempore non quo rem, quibusdam, </p>
                <p><b>$40</b></p>
                <input name='name'  type="hidden" value='Slacks pants for Men Casual Straight Trouser'>
                <input name='description'  type="hidden" value='Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, libero deleniti sapiente fugiat tempore non quo rem, quibusdam,'>
                <input name='price' type="hidden" value='40'>
                <input name='id' type="hidden" value='<?php echo $id ?>'>
                <button name='cartBtn1' class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Add to cart</button>
            </div>
        </form>

        <form class="card" style="width: 18rem;" method='post'>
            <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTJO_fLU44u9A86bcDva2qEu_LEH9fQg1i5_883IHOhrqK6Lkt1sQOgjBnheiJx_xrmimbEMNAB5hayQtxqIZw7bpDPFV3qCHREthx-YsE&usqp=CAE" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Trouser Pants For women high Quality Products</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus amet, quas totam mollitia eius unde suscipit quia praesentium ratione.s.
                </p>
                <p><b>$30</b></p>
                <input name='name'  type="hidden" value='Trouser Pants For women high Quality Products'>
                <input name='description'  type="hidden" value='Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus amet, quas totam mollitia eius unde suscipit quia praesentium ratione.s.'>
                <input name='price' type="hidden" value='30'>
                <input name='id' type="hidden" value='<?php echo $id ?>'>
                <button name='cartBtn2' class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Add to cart</button>
            </div>
        </form>

        <form class="card" style="width: 18rem;" method='post'>
            <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSvyP7Aa-lFDIC6nD_4Km9lfqGJ074IbnGq1Pm9H0UJqRGv1OEg6LU6JQ53nANM2To3GYT5n0Un9XAYN_LX6NKWh5JMS4v7xKqgrBl6QswQl1_bTMRgFsn-&usqp=CAE" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ready Stock Men's Business Office Formal </h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae numquam autem doloribus consectetur corporis voluptatibus voluptate.</p>
                <p><b>$45</b></p>
                <input name='name'  type="hidden" value='Ready Stock Men's Business Office Formal'>
                <input name='description'  type="hidden" value='Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae numquam autem doloribus consectetur corporis voluptatibus voluptate.'>
                <input name='price' type="hidden" value='45'>
                <input name='id' type="hidden" value='<?php echo $id ?>'>
                <button name='cartBtn3' class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i> Add to cart</button>
            </div>
        </form>
    </div>

<?php include "partials/footer.php"; ?>