<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="product page for artisan brew catagory" >
    <meta name="keywords" content="product artisan brew" >
    <meta name="author" content="Noah Ding Ka TING"  >
    <link rel="stylesheet" href="styles/style.css">
    <title>Artisan Brew</title>
</head>



<body>

    <?php include('./view/navigation.php'); ?>

    <section>
        <div class="topBanner">
            <figure>
                <img src="images/Brew&GoLogo.jpg" alt="banner image">
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
                <li><a href="basicbrew.php">Basic Brew</a></li>
                <li class="currentProductPage">Artisan Brew</li>
                <li><a href="noncoffee.php">Non-Coffee</a></li>
                <li><a href="hotbeverages.php">Hot Beverages</a></li>
            </ol>
        </div>
    </section>

    <section>
        <div class="productCardSection">
            <div class="productCardContainer">
                <button class="productButton">
                    <div class="productCard" id="ButterscotchLatte">
                        <h2 class="productName">Butterscotch Latte</h2>
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
                    <div class="productCard" id="ButterscotchCreme">
                        <h2 class="productName">Butterscotch Creme</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM14.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM16.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="MintLatte">
                        <h2 class="productName">Mint Latte</h2>
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

                <button class="productButton">
                    <div class="productCard" id="ViennaLatte">
                        <h2 class="productName">Vienna Latte</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM14.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM16.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="PistachioLatte">
                        <h2 class="productName">Pistachio Latte</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM15.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM17.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="StrawberryLatte">
                        <h2 class="productName">Strawberry Latte </h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM14.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM16.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="Mocha">
                        <h2 class="productName">Mocha</h2>
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
                    <div class="productCard" id="MintMocha">
                        <h2 class="productName">Mint Mocha</h2>
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

                <button class="productButton">
                    <div class="productCard" id="OrangeMocha">
                        <h2 class="productName">Orange Mocha</h2>
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

                <button class="productButton">
                    <div class="productCard" id="YuzuAmericano">
                        <h2 class="productName">Yuzu Americano</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM13.90</td>
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
                    <div class="productCard" id="CheeseAmericano">
                        <h2 class="productName">Cheese Americano</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM13.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM15.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="OrangeAmericano">
                        <h2 class="productName">Orange Americano</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM13.90</td>
                            </tr>
                            <tr>
                                <th>NP</th>
                                <td>RM15.90</td>
                            </tr>
                            <tr>
                                <th colspan="2">Add RM2 for Oat Milk</th>
                            </tr>
                        </table>
                    </div>
                </button>

                <button class="productButton">
                    <div class="productCard" id="ExtraEspressoShot">
                        <h2 class="productName">Extra Espresso Shot</h2>
                        <table>
                            <tr>
                                <td>RM2</td>
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
