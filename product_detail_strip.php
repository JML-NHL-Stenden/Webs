<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Stripes Socks</title>
        <link rel ="stylesheet" href = "./css/product_detail.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="img/Sunny_socks_Pink.png">
    </head>




    <body>

    <!-- --------------------------------- HEADER ------------------------------- -->
    <header>
        <?php
        include "./view/layout/header.php"
        ?>
    </header>
    <!-- --------------------------------- HEADER - END  ------------------------------- -->



    <main>

        <!-- Color options -->

        <div class="home-title">
        <p><a href="Project1.php"> Home &nbsp;> &nbsp;<b>Strip Socks</b></a></p>
        

        </div>
        
        <div class="product-custom">

            <div class="prod-info-holder">

                    <h1> Sunny’s Strip Socks</h1>

                <!----------------- Stars rating  ---------------->

                    <fieldset class="rate">
                        <div id="rating-label"><span id="current-rating">0</span></div>

                        <input type="radio" id="rating5"     name="rating" value="5 / 5" />  <label for="rating5"                    title="5 stars"></label>
                        <input type="radio" id="rating4.5"   name="rating" value="4.5 / 5" /><label class="half" for="rating4.5"     title="4 1/2 stars"></label>
                        <input type="radio" id="rating4"     name="rating" value="4 / 5" />  <label for="rating4"                    title="4 stars"></label>
                        <input type="radio" id="rating3.5"   name="rating" value="3.5 / 5" /><label class="half" for="rating3.5"     title="3 1/2 stars"></label>
                        <input type="radio" id="rating3"     name="rating" value="3 / 5" />  <label for="rating3"                    title="3 stars"></label>
                        <input type="radio" id="rating2.5"   name="rating" value="2.5 / 5" /><label class="half" for="rating2.5"     title="2 1/2 stars"></label>
                        <input type="radio" id="rating2"     name="rating" value="2 / 5" />  <label for="rating2"                    title="2 stars"></label>
                        <input type="radio" id="rating1.5"   name="rating" value="1.5 / 5" /><label class="half" for="rating1.5"     title="1 1/2 stars"></label>
                        <input type="radio" id="rating1"     name="rating" value="1 / 5" />  <label for="rating1"                    title="1 star"></label>
                        <input type="radio" id="rating0.5"   name="rating" value="0.5 / 5" /><label class="half" for="rating0.5"     title="1/2 star"></label>
                    </fieldset>

                <!----------------- Stars rating - end ---------------->

                    <h3> $ 3.99  </h3>
                    <!-- <br> -->
                    <p class='p-materials'> Made from 100% organic cotton Produced in Portugal </p>
                    <!-- <br> -->

                
                <form id="productsSelectingForm" action="shoppingcart.php" method="post">
                    <section class ="color-container">
                        <p>Select colors</p>
                        <!-- CHECKKKKKKKKKKKKK FOOOOOOOOOOOOOOORM WHY HEEEEEEEEEEEEEERE -->
                    <form id="productsSelectingForm" action="shoppingcart.php" method="post">
                                <div class="circle-colors">
                                    <div class="custom-radio" id="red" onclick="changeImage('red')">
                                        <input type="radio" id="red-c" name="color" value="red">
                                        <label for="red-c"></label>
                                    </div>
                                    <div class="custom-radio" id="green" onclick="changeImage('green')">
                                        <input type="radio" id="green-c" name="color" value="green">
                                        <label for="green-c"></label>
                                    </div>
                                    <div class="custom-radio" id="blue" onclick="changeImage('blue')">
                                        <input type="radio" id="blue-c" name="color" value="blue">
                                        <label for="blue-c"></label>
                                    </div>
                                    <div class="custom-radio" id="yellow" onclick="changeImage('yellow')">
                                        <input type="radio" id="yellow-c" name="color" value="yellow">
                                        <label for="yellow-c"></label>
                                    </div>
                                    <div class="custom-radio" id="pink" onclick="changeImage('pink')">
                                        <input type="radio" id="pink-c" name="color" value="pink">
                                        <label for="pink-c"></label>
                                    </div>
                                </div>

                </section>

                    <!-- Pair counter and submit button -->
                    <div id="submit-and-counter">
                        <!-- Pair counter -->
                        <div id="redCountFields" style="display:none">
                            <label for="field-red">Pair count:</label>
                            <input type="number" class="number-input"  name="counts_of_pairs[red]" min="0">
                        </div>
                        <div id="greenCountFields" style="display:none">
                            <label for="field-green">Pair count:</label>
                            <input type="number" class="number-input"  name="counts_of_pairs[green]" min="0">
                        </div>
                        <div id="blueCountFields" style="display:block">
                            <label for="field-blue">Pair count:</label>
                            <input type="number" class="number-input"  name="counts_of_pairs[blue]" min="0">
                        </div>
                        <div id="yellowCountFields" style="display:none">
                            <label for="field-yellow">Pair count:</label>
                            <input type="number" class="number-input"  name="counts_of_pairs[yellow]" min="0">
                        </div>
                        <div id="pinkCountFields" style="display:none">
                            <label for="field-pink">Pair count:</label>
                            <input type="number" class="number-input"  name="counts_of_pairs[pink]" min="0">
                        </div>
                        <!-- Go to the cart -->
                        <input class="go-to-cart-button" type="submit" value="Go to the cart">
                    </div>
                </form>
            </div>

            <!-- Image container for the first image -->
            <div id="image-container">
                <img id="displayed-image" src="../Webs/img/Sunny_socks_blue.jpg" alt="Default Image">
            </div>

            <!-- Image container for the second image -->
            <div id="image-container-2">
                <img id="displayed-image-2" src='../Webs/img/packaging/jpg/catalogus_sokken_stripes_blue.jpg' alt="Second Image">
            </div>

        </div>


        <div class="row-2">

            <div class="content-nav">
                <ul>
                    <li><a href="#section1">Product Details</a></li>
                    <li><a href="#section2">Rating & Reviews</a></li>
                    <li><a href="#section3">FAQs</a></li>
                </ul>
            </div>

            <div class="sections">
                <section class="section" id="section1">
                    <h2>Product Details</h2>
                        <div class="prod-d pd-1">
                            <h3>Sunny’s Striped Socks</h3>
                            <p> 100% Cotton</p>
                        </div> 
                </section>


                <section class="section" id="section2">
                    <h2>All Reviews</h2>
                    <div class="comment-row">
                        <div class="comment c-1">
                            <h3>Samantha D.</h3>
                            <p>"I absolutely love this stripes socks! 
                                The design is unique and the fabric feels so comfortable. 
                                As a fellow designer, I appreciate the attention to detail. 
                                It's become my favorite go-to stripes socks.".</p>
                            <!-- <br> -->
                            <p>Posted on August 14, 2023</p>
                        </div>

                        <div class="comment c-2">
                            <h3>Alex M.</h3>
                                <p>"The stripes socks exceeded my expectations! 
                                    The colors are vibrant and the print quality is top-notch.
                                    Being a UI/UX designer myself, I'm quite picky about aesthetics, and this stripes socks definitely gets a thumbs up from me."
                                    <!-- <br> -->
                                <p>Posted on August 15, 2023</p>
                        </div>
                    </div>

        

                    <!-- Add more comments in pairs as needed -->
                
                        <div class="comments-hidden" id="hidden-comments">
                            <!-- Additional comments will be displayed here when the "Display More" button is clicked -->

                            <div class="comment-row">
                                
                                <div class="comment c-3">
                                <h3>Derek O.</h3>
                                    <p>"The stripes socks have the best quality material and very durable!"
                                    <!-- <br> -->
                                    <p>Posted on August 17, 2023</p>
                                </div>

                                <div class="comment c-4">
                                    <h3>Jim M.</h3>
                                    <p> "The stripes socks are very lovely and I like the socks especially with the white stripes!"</p>
                                    <!-- <br> -->
                                    <p>Posted on September 13, 2023</p>
                                </div>
                            </div>

                            <div class="comment-row">
                                <div class="comment c-5">
                                    <h3>Alejandro N.</h3>
                                        <p>"Very unique color shades from these stripes socks, and it offer a variety of options!""
                                        <!-- <br> -->
                                        <p>Posted on September 16, 2023</p>
                                </div>

                            <div class="comment c-6">
                                <h3>Raif K.</h3>
                                <p>"These unique stripes socks are my favorites, it fits to any special activity events or I can even wear it every day!."</p>
                                <!-- <br> -->
                                <p>Posted on October 29, 2023</p>
                            </div>
                        </div>
            </div>


            <button   button id="display-more-btn">Load More Review</button>
        </section>


        <section class="section" id="section3">
            <h2>Frequent Asked Question/s</h2>
            <div class="question q-1">
                    <!-- <h3><br>Will this cause irritation for my skin?</h3> -->
                    <p>No,  it wont unless you have allergic reaction with cottons. Then you won't be able to use our products due it made 100% cotton.</p>
                
            </div>
                    
            <div class="question q-2">
                    <!-- <h3><br>How long does it take for the product to be delivered?</h3> -->
                    <p>Normally, it does take to 2-3 business day to deliver to the location.</p>
                
            </div>
        </section>
        
            </div>
            
        </div>

            <section>
                <div class ="recommend-section">

                        <div class="rec-img-container">
                            
                        <div class="rec-h1-style"><h1> You might also like</h1></div>

                            <div class="grid-items1 flex-element">
                                <div class="rec">
                                <a  href="./product_detail_uni.php"> <img class="rec-img pack-sock-blue" src="./img/packaging/png/catalogus_sokken_uni_blue.png" alt="Blue packaged uni-color socks">
                                    <p>Sunny's Blue Uni-Color Sock</p></a>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>

                            <div class="grid-items2 flex-element">
                                <div class="rec">
                                <a  href="./product_detail_uni.php"><img class="rec-img pack-sock-pink" src="./img/packaging/png/catalogus_sokken_uni_pink.png" alt="Pink packaged uni-color socks">
                                    <p>Sunny's Pink Uni-Color Sock</p></a>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>

                            <div class="grid-items3 flex-element">
                                <div class="rec">
                                <a  href="./product_detail_uni.php" ><img class="rec-img pack-sock-green" src="./img/packaging/png/catalogus_sokken_uni_green.png" alt="Green packaged uni-color socks">
                                    <p>Sunny's Green Uni-Color Sock</p></a>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>

                            <div class="grid-items4 flex-element">
                                <div class="rec">
                                <a  href="./product_detail_uni.php" ><img class="rec-img pack-sock-yellow" src="./img/packaging/png/catalogus_sokken_uni_yellow.png" alt="Yellow packaged uni-color socks">
                                    <p>Sunny's Yellow Uni-Color Sock</p></a>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>

                        </div>
                </div>
            </section>

    </main>







    <!-- --------------------------------- FOOTER ------------------------------- -->

    <footer>
    <?php
    include "./view/layout/footer.php"
    ?>
    </footer>
    <!-- --------------------------------- FOOTER - END ------------------------------- -->

    <!--  Js file links -->
    <script src="./js/star-rating.js"></script>
    <script src="./js/color-change-stripes.js"></script>
    <script src="./js/strip-uni-button.js"></script>
    <!--  Js file links - END -->

    </body>




</html>