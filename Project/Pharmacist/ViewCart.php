<?php

session_start();
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <style>
        .product-image {
            float: left;
            width: 15%;
            text-align: center;
        }

        .product-details {
            float: left;
            width: 20%;
            text-align: center;
        }

        .product-price {
            float: left;
            width: 10%;
            text-align: center;
        }

        .product-quantity {
            float: left;
            width: 13%;
            text-align: center;
        }

        /* .product-removal {
                float: left;
                width: 9%;
            }
/*  */
        .product-line-price {
            float: left;
            width: 15%;
            text-align: center;
        }

        /* This is used as the traditional .clearfix class */
        .group:before,
        .shopping-cart:before,
        .column-labels:before,
        .product:before,
        .totals-item:before,
        .group:after,
        .shopping-cart:after,
        .column-labels:after,
        .product:after,
        .totals-item:after {
            content: "";
            display: table;
        }

        .group:after,
        .shopping-cart:after,
        .column-labels:after,
        .product:after,
        .totals-item:after {
            clear: both;
        }

        .group,
        .shopping-cart,
        .column-labels,
        .product,
        .totals-item {
            zoom: 1;
        }

        /* Apply clearfix in a few places */
        /* Apply dollar signs */
        .product .product-price:before,
        .product .product-line-price:before,
        .totals-value:before {
            content: "₹";
        }

        /* Body/Header stuff */
        body {
            padding: 0px 30px 30px 20px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light",
                "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 100;
        }

        h1 {
            font-weight: 100;
        }

        label {
            color: #aaa;
        }

        .shopping-cart {
            margin-top: -45px;
        }

        /* Column headers */
        .column-labels label {
            width: 13;
            text-align: center;
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .column-labels .product-image,
        .column-labels .product-details,
        /* .column-labels .product-price, */
        .column-labels .product-removal {
            text-indent: -9999px;
        }

        /* Product entries */
        .product {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .product .product-image {
            text-align: center;
        }

        .product .product-image img {
            width: 100px;
        }

        .product .product-details .product-title {
            margin-right: 20px;
            font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
        }

        .product .product-details .product-description {
            margin: 5px 20px 5px 0;
            line-height: 1.4em;
        }

        .product .product-quantity input {
            width: 40px;
        }

        .product .remove-product {
            border: 0;
            padding: 4px 8px;
            background-color: #c66;
            color: #fff;
            font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
            font-size: 12px;
            border-radius: 3px;
        }

        .product .remove-product:hover {
            background-color: #a44;
        }

        /* Totals section */
        .totals .totals-item {
            float: right;
            clear: both;
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
        }

        .totals .totals-item label {
            display: inline-block;
            /* float: left; */
            clear: both;
            width: auto;
            text-align: center;
        }

        .totals .totals-item .totals-value {
            display: inline-block;
            /* float: right; */
            width: auto;
            text-align: center;
        }

        .totals .totals-item-total {
            font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
        }

        .checkout {
            float: right;
            border: 0;
            margin-top: 20px;
            padding: 6px 25px;
            background-color: #6b6;
            color: #fff;
            font-size: 25px;
            border-radius: 3px;
        }

        .checkout:hover {
            background-color: #494;
        }

        /* Make adjustments for tablet */
        @media screen and (max-width: 650px) {
            .shopping-cart {
                margin: 0;
                padding-top: 20px;
                border-top: 0px solid #eee;
            }

            /* .column-labels {
                display: none;
            } */

            .product {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .product-image {
                float: right;
                width: auto;
                text-align: center;
                flex: 1;
            }

            .product-image img {
                margin: 0 0 10px 10px;
            }

            .product-details {
                float: none;
                margin-bottom: 10px;
                width: auto;
                text-align: center;
                flex: 1;


            }

            .product-price {
                clear: both;
                width: 70px;
                text-align: center;


            }

            .product-quantity {
                width: 100px;
                text-align: center;
                flex: 1;


            }

            .product-quantity input {
                margin-left: 20px;
            }

            .product-quantity:before {
                content: "x";
            }

            .product-removal {
                width: auto;
            }

            .product-line-price {
                float: left;
                width: 70px;
                text-align: center;
                flex: 1;


            }

            .totals {
                margin-top: 20px;
            }
        }

        /* Make more adjustments for phone */
        @media screen and (max-width: 350px) {
            .product-removal {
                float: right;
            }

            .product-line-price {
                float: right;
                clear: left;
                width: auto;
                margin-top: 10px;
            }

            .product .product-line-price:before {
                content: "Item Total: ₹";
            }

            .totals .totals-item label {
                width: 60%;
            }

            .totals .totals-item .totals-value {
                width: 40%;
            }
        }


        label {
            margin: 0px 15px;
        }



        /*SWITCH 2 ------------------------------------------------*/
        .switch2 {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 32px;
            border-radius: 27px;
            background-color: #bdc3c7;
            cursor: pointer;
            transition: all .3s;
        }

        .switch2 input {
            display: none;
        }

        .switch2 input:checked+div {
            left: calc(100% - 40px);
        }

        .switch2 div {
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 25px;
            background-color: white;
            top: -4px;
            left: 0px;
            box-shadow: 0px 0px 0.5px 0.5px rgb(170, 170, 170);
            transition: all .2s;
        }

        .switch2-checked {
            background-color: #2ecc71;
        }
    </style>
</head>
<?php

if (isset($_POST["btn_checkout"])) {

    $amt = $_POST["carttotalamt"];


    $selC = "select * from tbl_order where user_id='" . $_GET["uid"] . "'and order_status='0'";
    $rs = $con->query($selC);
    $row = $rs->fetch_assoc();
    $_SESSION["bid"] = $row["order_id"];

    $upQry1 = "update tbl_order set order_amount='" . $amt . "',order_status='1' where user_id='" . $_GET["uid"] . "'";
    $con->query($upQry1);

    $upQry1 = "update tbl_singleorder set singleorder_status='1' where order_id='" . $row["order_id"] . "'";
    if ($con->query($upQry1)) {



?>
        <script>
            window.location = "Success.html";
        </script>
<?php





    }
}


?>

<body onload="recalculateCart()" style="padding:0px">
    <?php
    ob_start();
    // include("Head.php");
    ?>
    <div style="padding: 30px;" align="center">
        <h1>Cart</h1>
        <br>
        <br>
        <div class="column-labels">
            <label class="product-price" style="width: 13%; text-align:center">Image</label>
            <label class="product-price" style="width: 16%; text-align:center">Details</label>
            <label class="product-price" style="width: 12%; text-align:center">Price</label>
            <label class="product-price" style="width: 7%; text-align:center">Quantity</label>
            <label class="product-price" style="width: 17%; text-align:center">Total</label>
        </div>
        <form method="post">
            <div class="shopping-cart" style="margin-top: 50px">
                <?php
                $sel = "select * from tbl_order b inner join tbl_singleorder c on c.order_id=b.order_id where b.user_id='" . $_GET["uid"] . "' and order_status='0' and singleorder_status=0";
                $res = $con->query($sel);
                while ($row = $res->fetch_assoc()) {
                    $selPr = "select * from tbl_product where product_id='" . $row["product_id"] . "'";
                    $respr = $con->query($selPr);
                    if ($rowpr = $respr->fetch_assoc()) {
                        $selstock = "select sum(stock_quantity) as stock from tbl_stock where product_id='" . $rowpr["product_id"] . "'";
                        $selstock1 = "select sum(singleorder_qty) as quantity from tbl_singleorder where product_id='" . $rowpr["product_id"] . "' and singleorder_status >'0'";
                        $chk = $con->query($selstock1)->fetch_assoc();
                        $resst = $con->query($selstock);
                        if ($rowst = $resst->fetch_assoc()) {
                ?>

                            <div class="product">
                                <div class="product-image" align="center">
                                    <img
                                        src="../Assets/Files/Product/<?php echo $rowpr["product_photo"] ?>" />
                                </div>
                                <div class="product-details" align="center">
                                    <div class="product-title"><?php echo $rowpr["product_name"] ?></div>

                                </div>
                                <div class="product-price " align="center"><?php echo $rowpr["product_price"] ?></div>
                                <div class="product-quantity">
                                    <?php
                                    echo $row["singleorder_qty"];
                                    ?>
                                </div>
                                <div class="product-line-price" align="center">
                                    <?php
                                    $pr = $rowpr["product_price"];
                                    $qty = $row["singleorder_qty"];
                                    $tot = (int)$pr * (int)$qty;
                                    echo $tot;
                                    ?>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>

                <div class="totals" align="right">
                    <div class="totals-item totals-item-total">
                        <br>
                        <!-- <br>
                        <br>
                        <br>
                        <br> -->
                        <div align="right">
                            <label>Grand Total</label>
                            <div class="totals-value" id="cart-total">0</div>
                            <input type="hidden" id="cart-totalamt" name="carttotalamt" value="">
                        </div>
                    </div>






                    <button type="submit" class="checkout" name="btn_checkout">Checkout</button>


                </div>
        </form>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            /* Set rates + misc */
            var fadeTime = 300;

            /* Assign actions */
            $(".product-quantity select").change(function() {

                $.ajax({
                    url: "../Assets/AjaxPages/AjaxCart.php?action=Update&id=" + this.id + "&qty=" + this.value
                });
                updateQuantity(this);

            });

            $(".product-removal button").click(function() {

                $.ajax({
                    url: "../Assets/AjaxPages/AjaxCart.php?action=Delete&id=" + this.value
                });
                removeItem(this);
            });

            /* Recalculate cart */
            function recalculateCart() {
                var subtotal = 0;

                /* Sum up row totals */
                $(".product").each(function() {
                    subtotal += parseFloat(
                        $(this).children(".product-line-price").text()
                    );
                });

                /* Calculate totals */
                var total = subtotal;

                /* Update totals display */
                $(".totals-value").fadeOut(fadeTime, function() {
                    $("#cart-total").html(total.toFixed(2));
                    document.getElementById("cart-totalamt").value = total.toFixed(2);
                    if (total == 0) {
                        $(".checkout").fadeOut(fadeTime);
                    } else {
                        $(".checkout").fadeIn(fadeTime);
                    }
                    $(".totals-value").fadeIn(fadeTime);
                });
            }

            /* Update quantity */
            function updateQuantity(quantityInput) {
                /* Calculate line price */
                var productRow = $(quantityInput).parent().parent();
                var price = parseFloat(productRow.children(".product-price").text());
                var quantity = $(quantityInput).val();
                var linePrice = price * quantity;
                /* Update line price display and recalc cart totals */
                productRow.children(".product-line-price").each(function() {
                    $(this).fadeOut(fadeTime, function() {
                        $(this).text(linePrice.toFixed(2));
                        recalculateCart();
                        $(this).fadeIn(fadeTime);
                    });
                });
            }

            /* Remove item from cart */
            function removeItem(removeButton) {
                /* Remove row from DOM and recalc cart total */
                var productRow = $(removeButton).parent().parent();
                productRow.slideUp(fadeTime, function() {
                    productRow.remove();
                    recalculateCart();
                });

            }

            $('.switch2 input').on('change', function() {
                var dad = $(this).parent();
                if ($(this).is(':checked'))
                    dad.addClass('switch2-checked');
                else
                    dad.removeClass('switch2-checked');
            });
        </script>
    </div>
</body>
<?php
// include("Foot.php");
ob_flush();
?>

</html>