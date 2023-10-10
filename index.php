<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h2 class="text-center m-5 p-5 text-success">Nagad Payment gateway integration</h2>
    <hr>

    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col-md-6">
                <img src="asset/product.png" alt="product image">
            </div>
            <div class="col-md-6">
                <h2>Pay with Nagad</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quia. Nihil obcaecati quis.</p>

                    <form action="payment.php" method="post">
                        <span>Enter Amount</span>
                        <input value="1" name="price" type="number">
                        <button type="submit" name="nagad-payment">Pay Now</button>
                    </form>



            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>