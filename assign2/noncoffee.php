<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="product page for non-coffee catagory" />
    <meta name="keywords" content="product non-coffee" />
    <meta name="author" content="Noah Ding Ka TING"  />
    <link rel="stylesheet" href="styles/style.css">
    <title>Non-Coffee</title>
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
                <li><a href="basicbrew.php">Basic Brew</a></li>
                <li><a href="artisanbrew.php">Artisan Brew</a></li>
                <li class="currentProductPage">Non-Coffee</li>
                <li><a href="hotbeverages.php">Hot Beverages</a></li>
            </ol>
        </div>
    </section>

    <section>
        <div class="productCardSection">
            <div class="productCardContainer">
                <button class="productButton">
                    <div class="productCard" id="Chocolate">
                        <h2 class="productName">Chocolate</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM13.90 </td>
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
                    <div class="productCard" id="MintChocolate">
                        <h2 class="productName">Mint Chocolate</h2>
                        <table>
                            <tr>
                                <th>MP</th>
                                <td>RM13.90 </td>
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
                    <div class="productCard" id="OrangeChocolate">
                        <h2 class="productName">Orange Chocolate</h2>
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
                    <div class="productCard" id="YuzuSoda">
                        <h2 class="productName">Yuzu Soda</h2>
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
                    <div class="productCard" id="StrawberrySoda">
                        <h2 class="productName">Strawberry Soda</h2>
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
                    <div class="productCard" id="YuzuCheese">
                        <h2 class="productName">Yuzu Cheese</h2>
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
                    <div class="productCard" id="YuriMatcha">
                        <h2 class="productName">Yuri Matcha</h2>
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
                    <div class="productCard" id="StrawberryMatcha">
                        <h2 class="productName">Strawberry Matcha</h2>
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
                    <div class="productCard" id="YuzuMatcha">
                        <h2 class="productName">Yuzu Matcha</h2>
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
                    <div class="productCard" id="Houjicha">
                        <h2 class="productName">Houjicha</h2>
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
                
            </div>
        </div>
    </section>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>

</body>


</html>
