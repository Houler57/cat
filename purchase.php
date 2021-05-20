<?php
		include("./includes/functions.inc.php");

        //echo $_SESSION["currentitem"] . "hello";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include("./includes/header.php");
?>
    <title>Home Page</title>
</head>

<body>
    <?php include("./includes/navbar.php");  ?>
    <main>

        <div class="container">
            <div class="py-5 text-center">

                <h2>Checkout</h2>

            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>

                                <?php $mytier = $_SESSION["currentitem"]; ?>


                                <h6 class="my-0"><?= printItem($mytier,"name") ?></h6>

                                <small class="text-muted"><?= printItem($mytier,"desc") ?></small>
                            </div>
                            <!-- printItem($_SESSION["currentintem"],"price") -->
                            <span class="text-muted"><?php  ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (AUD)</span>
                            <strong>$<?= printItem($mytier,"price") ?></strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>






                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" id="email" placeholder="email" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your email is required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>



                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <div class="card ">
                                    <div class="card-header">
                                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                            <!-- Credit card form tabs -->
                                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card"
                                                        class="nav-link active "> <i
                                                            class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                                <li class="nav-item"> <a data-toggle="pill" href="#paypal"
                                                        class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal
                                                    </a> </li>
                                                <li class="nav-item"> <a data-toggle="pill" href="#net-banking"
                                                        class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net
                                                        Banking </a> </li>
                                            </ul>
                                        </div> <!-- End -->
                                        <!-- Credit card form content -->
                                        <div class="tab-content">
                                            <!-- credit card info-->
                                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                                <form role="form" onsubmit="event.preventDefault()">
                                                    <div class="form-group"> <label for="username">
                                                            <h6>Card Owner</h6>
                                                        </label> <input type="text" name="username"
                                                            placeholder="Card Owner Name" required
                                                            class="form-control "> </div>
                                                    <div class="form-group"> <label for="cardNumber">
                                                            <h6>Card number</h6>
                                                        </label>
                                                        <div class="input-group"> <input type="text" name="cardNumber"
                                                                placeholder="Valid card number" class="form-control "
                                                                required>
                                                            <div class="input-group-append"> <span
                                                                    class="input-group-text text-muted"> <i
                                                                        class="fab fa-cc-visa mx-1"></i> <i
                                                                        class="fab fa-cc-mastercard mx-1"></i> <i
                                                                        class="fab fa-cc-amex mx-1"></i> </span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group"> <label><span class="hidden-xs">
                                                                        <h6>Expiration Date</h6>
                                                                    </span></label>
                                                                <div class="input-group"> <input type="number"
                                                                        placeholder="MM" name="" class="form-control"
                                                                        required> <input type="number" placeholder="YY"
                                                                        name="" class="form-control" required> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                                    title="Three digit CV code on the back of your card">
                                                                    <h6>CVV <i
                                                                            class="fa fa-question-circle d-inline"></i>
                                                                    </h6>
                                                                </label> <input type="text" required
                                                                    class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer"> <button type="button"
                                                            class="subscribe btn btn-primary btn-block shadow-sm">
                                                            Confirm Payment </button>
                                                </form>
                                            </div>
                                        </div> <!-- End -->
                                        <!-- Paypal info -->
                                        <div id="paypal" class="tab-pane fade pt-3">
                                            <h6 class="pb-2">Select your paypal account type</h6>
                                            <div class="form-group "> <label class="radio-inline"> <input type="radio"
                                                        name="optradio" checked> Domestic </label> <label
                                                    class="radio-inline"> <input type="radio" name="optradio"
                                                        class="ml-5">International </label></div>
                                            <p> <button type="button" class="btn btn-primary "><i
                                                        class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                                            <p class="text-muted"> Note: After clicking on the button, you will be
                                                directed to a secure gateway for payment. After completing the payment
                                                process, you will be redirected back to the website to view details of
                                                your order. </p>
                                        </div> <!-- End -->
                                        <!-- bank transfer info -->
                                        <div id="net-banking" class="tab-pane fade pt-3">
                                            <div class="form-group "> <label for="Select Your Bank">
                                                    <h6>Select your Bank</h6>
                                                </label> <select class="form-control" id="ccmonth">
                                                    <option value="" selected disabled>--Please select your Bank--
                                                    </option>
                                                    <option>Bank 1</option>
                                                    <option>Bank 2</option>
                                                    <option>Bank 3</option>
                                                    <option>Bank 4</option>
                                                    <option>Bank 5</option>
                                                    <option>Bank 6</option>
                                                    <option>Bank 7</option>
                                                    <option>Bank 8</option>
                                                    <option>Bank 9</option>
                                                    <option>Bank 10</option>
                                                </select> </div>
                                            <div class="form-group">
                                                <p> <button type="button" class="btn btn-primary "><i
                                                            class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button>
                                                </p>
                                            </div>
                                            <p class="text-muted">Note: After clicking on the button, you will be
                                                directed to a secure gateway for payment. After completing the payment
                                                process, you will be redirected back to the website to view details of
                                                your order. </p>
                                        </div> <!-- End -->
                                        <!-- End -->
                                    </div>
                                </div>
                            </div>











                        </div>
    </main>
    <?php include("./includes/footer.php");  ?>
</body>

</html>