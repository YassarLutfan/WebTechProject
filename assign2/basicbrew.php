<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="product page for basic brew catagory" />
    <meta name="keywords" content="product basic brew" />
    <meta name="author" content="Noah Ding Ka TING"  />
    <link rel="stylesheet" href="styles/style.css">
    <title>Basic Brew</title>
</head>



<body>

    <?php include('./view/navigation.php'); ?>

    <section>
        <div class="topBanner">
            <figure>
                <img src="images/Brew&GoLogo.jpg" alt="banner image" width="100px" height="100px">
                <figcaption>by Brew & Go. Coffee</figcaption>
            </figure>
            <h1 class="productCatagory">Products</h1>

            <aside>
                <div class="productKeyDefinitionFlipCard">
                    <div class="productKeyDefinitionFlipCardInner">
                        <div class="productKeyDefinitionFlipCardFront">
                            <h3>Key Definitions</h3>
                        </div> 

                        <div class="productKeyDefinitionFlipCardBack">
                            <dl>
                                <div>
                                    <dt>MP</dt>
                                    <dd>Member Price</dd>
                                </div>
                                <hr>
                                <div>
                                    <dt>NP</dt>
                                    <dd>Normal Price</dd>
                                </div>
                                <hr>
                                <div>
                                    <dt>RM</dt>
                                    <dd>Ringgit Malaysia</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <div class="productCatagorySelector">
            <ol>
                <li class="currentProductPage">Basic Brew</li>
                <li><a href="artisanbrew.php">Artisan Brew</a></li>
                <li><a href="noncoffee.php">Non-Coffee</a></li>
                <li><a href="hotbeverages.php">Hot Beverages</a></li>
            </ol>
        </div>
    </section>

    <section>
        <div class="productCardSection">
            <div class="productCardContainer">
                <button class="productButton">
                    <div class="productCard" id="Americano">
                        <h2 class="productName">Americano</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM8.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM10.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>
                
                <button class="productButton">
                    <div class="productCard" id="Latte">
                        <h2 class="productName">Latte</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM10.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM12.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="Cappuccino">
                        <h2 class="productName">Cappuccino</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM11.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM13.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="Aerocano">
                        <h2 class="productName">Aerocano</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM10.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM12.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="Aero-latte">
                        <h2 class="productName">Aero-latte</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM12.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM14.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>
                
            </div>
        </div>
    </section>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>

</body>


</html>
