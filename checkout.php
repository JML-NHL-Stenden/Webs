<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./Webs/view/layout/header.css">
    <link rel="stylesheet" href="./Webs/view/layout/footer.css">
    <link rel="stylesheet" href="./css/checkout.css">
</head>
<?php include"./view/layout/header.php" ?>
<body>
    <div class="billing wrapper">
        <h3 class="hd">Check out</h3>
        <h5>Billing details</h5>
        <div class="box">
            <div class="subbox">
                <div class="box-1">
                    <form action="" method="POST">
                        <ul class="form-1">
                            <li>
                                <p>First Name*</p>
                                <input type="text" name="name" size=50 placeholder="First Name">
                            </li>
                            <li>
                                <p>Last Name*</p>
                                <input type="text" name="name" size=50 placeholder="Last Name">
                            </li>
                            <li>
                                <p>Country/Region*</p>
                                <input type="text" name="name" size=50 placeholder="Country/Region">
                            </li>
                            <li>
                                <p>Company</p>
                                <input type="text" name="name" size=50 placeholder="Company(optional)">
                            </li>
                            <li>
                                <p>Street Address*</p>
                                <input type="text" name="name" size=50 placeholder="House number and street name">
                            </li>
                            <li>
                                <p>Apt,suite,unit</p>
                                <input type="text" name="name" size=50 placeholder="Apartment,suite,unit,etc(optional)">
                            </li>
                        </ul>
                        <ul class="form-2">
                            <li>
                                <p>City*</p>
                                <input type="text" name="name" size=32 placeholder="Town/City">
                            </li>
                            <li>
                                <p>State*</p>
                                <input type="text" name="name" size=32 placeholder="State">
                            </li>
                            <li>
                                <p>Postal Code*</p>
                                <input type="text" name="name" size=32 placeholder="Postal Code">
                            </li>
                            <li>
                                <p>Phone*</p>
                                <input type="text" name="name" size=32 placeholder="Phone number">
                            </li>
                        </ul>
                        <ul>
                            <li> <button class="confirm">Confirm</button></li>
                            <li> 
                                <input type="checkbox" name="click" id="">
                                <label for="check-label">Save my information for a faster checkout</label>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="box-2">
                    <form action="">
                        <ul>
                            <li>
                                <h4>Shipping Address</h4>
                                <h5>Select the address that matches your card or payment method</h5>
                                <div class="content">
                                    <p>
                                        <input type="radio" name=address>
                                        <label for="same">Same as Billing address</label>
                                    </p>
                                    <p class="line-part">
                                        <input type="radio" name=address>
                                        <label for="same">Use a different shipping address</label>
                                    </p>
                                </div>
                            </li>
                            <li class="method">
                                <h4>Shipping Method</h4>
                                <div class="content">
                                    <p>
                                        <input type="radio" name=method>
                                        <label for="same">Regular Mail</label>
                                    </p>
                                    <p class="line-part">
                                        <input type="radio" name=method>
                                        <label for="same">PostNL</label>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <h4>Payment Method</h4>
                                <h5>All transactions are secure and encrypted</h5>
                                <div class="payment">
                                    <input type="radio" name=payment>
                                    <label for="credit">Credit Card</label>
                                    <p>
                                        <a href="#">Google pay</a>
                                        <a href="#">Visa</a>
                                        <a href="#">Master</a>
                                        <a href="#">Apple pay</a>
                                    </p>
                                    <p>
                                        <div class="pay-info">
                                            <ul>
                                                <li><input type="text" size=40 name=same placeholder="Expiration date(MM/YY)"></li>
                                                <li><input type="text" size=40 name=same placeholder="Security Code"></li>
                                            </ul>
                                        </div>
                                    </p>
                                    <p class="line-part">
                                        <input type="radio" name=payment>
                                        <label for="cash">Cash on delivery</label>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <button class="confirm">Pay Now</button>
                    </form>

                </div>
            </div>
            <div class="summary">
                <h3>Order Summary</h3>
                <ul>
                    <li>
                        <a href="#"><img src="./pictures/socks_blue.jpg" alt=""></a>
                        <a href="#">
                            <p>Sunny’s Stripped Socks</p>
                            <p>Color: <span>blue</span></p>
                            <span><p>$3.99</p></span>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="./pictures/socks_green.jpg" alt=""></a>
                        <a href="#">
                            <p>Sunny’s Uni Socks</p>
                            <p>Color: <span>grenn</span></p>
                            <span><p>$3.99</p></span>
                        </a>
                    </li>
                    <li>
                        <a href=""><img src="./pictures/socks_yellow.jpg" alt=""></a>
                        <a href="#">
                            <p>Sunny’s Stripped Socks</p>
                            <p>Color: <span>yellow</span></p>
                            <span><p>$3.99</p></span>
                        </a>
                    </li>
                    <li>
                        <div class="total">
                            <p>Subtotal: <span>$15.96</span></p>
                            <p>Savings: <span>-$6</span></p>
                            <p>Shipping: <span>$15</span></p>
                            <p>Total Pay:<span>$9.96</span></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php include"./view/layout/footer.php" ?>
    
    
</body>
</html>