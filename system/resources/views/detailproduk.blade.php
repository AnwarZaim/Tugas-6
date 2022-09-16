<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Spike shoes Website Template | Home :: w3layouts</title>
    <link href="{{ url('/public') }}/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <!----start-alert-scroller---->
    <script src="{{ url('/public') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/public') }}/js/jquery.easy-ticker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#demo').hide();
            $('.vticker').easyTicker();
        });
    </script>
    <!----start-alert-scroller---->
    <!-- start menu -->
    <link href="{{ url('/public') }}/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ url('/public') }}/js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    <script src="{{ url('/public') }}/js/menu_jquery.js"></script>
    <!-- //End menu -->
    <!---slider---->
    <link rel="stylesheet" href="{{ url('/public') }}/css/slippry.css">
    <script src="{{ url('/public') }}/js/jquery-ui.js" type="text/javascript"></script>
    <script src="{{ url('/public') }}/js/scripts-f0e4e0c2.js" type="text/javascript"></script>
    <script>
        jQuery('#jquery-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
            // options
            adaptiveHeight: false, // height of the sliders adapts to current slide
            useCSS: false, // true, false -> fallback to js if no browser support
            autoHover: false,
            transition: 'fade'
        });
    </script>
    <!----start-pricerage-seletion---->
    <script type="text/javascript" src="{{ url('/public') }}/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/public') }}/css/jquery-ui.css">
    <script type='text/javascript'>
        //<![CDATA[
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [100, 400],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
                "values", 1));

        }); //]]>
    </script>
    <!----//End-pricerage-seletion---->
    <!---move-top-top---->
    <script type="text/javascript" src="{{ url('/public') }}/js/move-top.js"></script>
    <script type="text/javascript" src="{{ url('/public') }}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1200);
            });
        });
    </script>
    <!---//move-top-top---->
</head>

<body>
    <!---start-wrap---->
    <!---start-header---->
    <div class="header">
        <div class="top-header">
            <div class="wrap">
                <div class="top-header-left">
                    <ul>
                        <!---cart-tonggle-script---->
                        <script type="text/javascript">
                            $(function() {
                                var $cart = $('#cart');
                                $('#clickme').click(function(e) {
                                    e.stopPropagation();
                                    if ($cart.is(":hidden")) {
                                        $cart.slideDown("slow");
                                    } else {
                                        $cart.slideUp("slow");
                                    }
                                });
                                $(document.body).click(function() {
                                    if ($cart.not(":hidden")) {
                                        $cart.slideUp("slow");
                                    }
                                });
                            });
                        </script>
                        <!---//cart-tonggle-script---->
                        <li><a class="cart" href="#"><span id="clickme"> </span></a></li>
                        <!---start-cart-bag---->
                        <div id="cart">Your Cart is Empty <span>(0)</span></div>
                        <!---start-cart-bag---->
                        <li><a class="info" href="#"><span> </span></a></li>
                    </ul>
                </div>
                <div class="top-header-center">
                    <div class="top-header-center-alert-left">
                        <h3>FREE DELIVERY</h3>
                    </div>
                    <div class="top-header-center-alert-right">
                        <div class="vticker">
                            <ul>
                                <li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="top-header-right">
                    <ul>
                        <li><a href="{{ url('login') }}">Login</a><span> </span></li>
                        <li><a href="register.html">Join</a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----start-mid-head---->
        <div class="mid-header">
            <div class="wrap">
                <div class="mid-grid-left">
                    <form>
                        <input type="text" placeholder="What Are You Looking for?" />
                    </form>
                </div>
                <div class="mid-grid-right">
                    <a class="logo" href="{{ url('index') }}"><span> </span></a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//End-mid-head---->
        <!----start-bottom-header---->
        <div class="header-bottom">
            <div class="wrap">
                <!-- start header menu -->
                <ul class="megamenu skyblue">
                    <li class="active grid"><a class="color4" href="{{ url('index   ') }}">Home</a><span> </span>
                    </li>
                    <li class="active grid"><a class="color4" href="{{ url('produk') }}">Produk</a><span> </span>
                    </li>
                    <li class="active grid"><a class="color4" href="#">Kategori</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Men</h4>
                                        <ul>
                                            <li><a href="products.html">new arrivals</a></li>
                                            <li><a href="products.html">men</a></li>
                                            <li><a href="products.html">women</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">brands</a></li>
                                        </ul>
                                    </div>
                                    <div class="h_nav">
                                        <h4>help</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>account</h4>
                                        <ul>
                                            <li><a href="products.html">login</a></li>
                                            <li><a href="products.html">create an account</a></li>
                                            <li><a href="products.html">create wishlist</a></li>
                                            <li><a href="products.html">my shopping bag</a></li>
                                            <li><a href="products.html">brands</a></li>
                                            <li><a href="products.html">create wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>my company</h4>
                                        <ul>
                                            <li><a href="products.html">trends</a></li>
                                            <li><a href="products.html">sale</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>popular</h4>
                                        <ul>
                                            <li><a href="products.html">new arrivals</a></li>
                                            <li><a href="products.html">men</a></li>
                                            <li><a href="products.html">women</a></li>
                                            <li><a href="products.html">accessories</a></li>
                                            <li><a href="products.html">kids</a></li>
                                            <li><a href="products.html">style videos</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1 women">
                                    <div class="women-pic">
                                        <img src="{{ url('/public') }}/{{ url('/public') }}/images/women.png"
                                            title="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col2"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                                <div class="col1"></div>
                            </div>
                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </div>
    <!----//End-bottom-header---->
    <!---//End-header---->
    <!--- start-content---->
    <div class="content details-page">
        <!---start-product-details--->
        <div class="product-details">
            <div class="wrap">
                <ul class="product-head">
                    <li><a href="#">Home</a> <span>::</span></li>
                    <li class="active-page"><a href="#">Product Page</a></li>
                    <div class="clear"> </div>
                </ul>
                <!----details-product-slider--->
                <!-- Include the Etalage files -->
                <link rel="stylesheet" href="{{ url('/public') }}/css/etalage.css">
                <script src="{{ url('/public') }}/js/jquery.etalage.min.js"></script>
                <!-- Include the Etalage files -->
                <script>
                    jQuery(document).ready(function($) {

                        $('#etalage').etalage({
                            thumb_image_width: 300,
                            thumb_image_height: 400,
                            source_image_width: 900,
                            source_image_height: 1000,
                            show_hint: true,
                            click_callback: function(image_anchor, instance_id) {
                                alert('Callback example:\nYou clicked on an image with the anchor: "' +
                                    image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                            }
                        });
                        // This is for the dropdown list example:
                        $('.dropdownlist').change(function() {
                            etalage_show($(this).find('option:selected').attr('class'));
                        });

                    });
                </script>
                <!----//details-product-slider--->
                <div class="details-left">
                    <div class="details-left-slider">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image"
                                        src="{{ url('/public') }}/images/product-slide/image1_thumb.jpg" />
                                    <img class="etalage_source_image"
                                        src="{{ url('/public') }}/images/product-slide/image1_large.jpg" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image2_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image2_large.jpg" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image3_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image3_large.jpg" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image4_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image4_large.jpg" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image5_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image5_large.jpg" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image6_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image6_large.jpg" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image"
                                    src="{{ url('/public') }}/images/product-slide/image7_thumb.jpg" />
                                <img class="etalage_source_image"
                                    src="{{ url('/public') }}/images/product-slide/image7_large.jpg" />
                            </li>
                        </ul>
                    </div>
                    <div class="details-left-info">
                        <div class="details-right-head">
                            <h1>Product Name Goes Here</h1>
                            <ul class="pro-rate">
                                <li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
                                <li><a href="#">0 Review(s) Add Review</a></li>
                            </ul>
                            <p class="product-detail-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p>
                            <a class="learn-more" href="#">
                                <h3>MORE DETAILS</h3>
                            </a>
                            <div class="product-more-details">
                                <ul class="price-avl">
                                    <li class="price"><span>$153.39</span><label>$145.72</label></li>
                                    <li class="stock"><i>In stock</i></li>
                                    <div class="clear"> </div>
                                </ul>
                                <ul class="product-colors">
                                    <h3>available Colors ::</h3>
                                    <li><a class="color1" href="#"><span> </span></a></li>
                                    <li><a class="color2" href="#"><span> </span></a></li>
                                    <li><a class="color3" href="#"><span> </span></a></li>
                                    <li><a class="color4" href="#"><span> </span></a></li>
                                    <li><a class="color5" href="#"><span> </span></a></li>
                                    <li><a class="color6" href="#"><span> </span></a></li>
                                    <li><a class="color7" href="#"><span> </span></a></li>
                                    <li><a class="color8" href="#"><span> </span></a></li>
                                    <div class="clear"> </div>
                                </ul>
                                <ul class="prosuct-qty">
                                    <span>Quantity:</span>
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </ul>
                                <input type="button" value="add to cart" />
                                <ul class="product-share">
                                    <h3>All so Share On</h3>
                                    <ul>
                                        <li><a class="share-face" href="#"><span> </span> </a></li>
                                        <li><a class="share-twitter" href="#"><span> </span> </a></li>
                                        <li><a class="share-google" href="#"><span> </span> </a></li>
                                        <li><a class="share-rss" href="#"><span> </span> </a></li>
                                        <div class="clear"> </div>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="details-right">
                    <a href="#">SEE MORE</a>
                </div>
                <div class="clear"> </div>
            </div>
            <!----product-rewies---->
            <div class="product-reviwes">
                <div class="wrap">
                    <!--vertical Tabs-script-->
                    <!---responsive-tabs---->
                    <script src="{{ url('/public') }}/js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion
                                width: 'auto', //auto or any width like 600px
                                fit: true, // 100% fit in a container
                                closed: 'accordion', // Start closed if in accordion view
                                activate: function(event) { // Callback function if tab is switched
                                    var $tab = $(this);
                                    var $info = $('#tabInfo');
                                    var $name = $('span', $info);
                                    $name.text($tab.text());
                                    $info.show();
                                }
                            });

                            $('#verticalTab').easyResponsiveTabs({
                                type: 'vertical',
                                width: 'auto',
                                fit: true
                            });
                        });
                    </script>
                    <!---//responsive-tabs---->
                    <!--//vertical Tabs-script-->
                    <!--vertical Tabs-->
                    <div id="verticalTab">
                        <ul class="resp-tabs-list">
                            <li>Description</li>
                            <li>Product tags</li>
                            <li>Product reviews</li>
                        </ul>
                        <div class="resp-tabs-container vertical-tabs">
                            <div>
                                <h3> Details</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna,
                                    euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed
                                    sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a
                                    facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna,
                                    euismod ut ornare non, volutpat vel tortor</p>
                            </div>
                            <div>
                                <h3>Product Tags</h3>
                                <h4>Add Your Tags:</h4>
                                <form>
                                    <input type="text"> <input type="submit" value="ADD TAGS" />
                                    <span>Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                </form>
                            </div>
                            <div>
                                <h3>Customer Reviews</h3>
                                <p>There are no customer reviews yet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"> </div>
                    <!--- start-similar-products--->
                    <div class="similar-products">
                        <div class="similar-products-left">
                            <h3>SIMILAR PRODUCTS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="similar-products-right">
                            <!-- start content_slider -->
                            <!--- start-rate---->
                            <script src="js/jstarbox.js"></script>
                            <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen"
                                charset="utf-8" />
                            <script type="text/javascript">
                                jQuery(function() {
                                    jQuery('.starbox').each(function() {
                                        var starbox = jQuery(this);
                                        starbox.starbox({
                                            average: starbox.attr('data-start-value'),
                                            changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                                                'clickonce') ? 'once' : true,
                                            ghosting: starbox.hasClass('ghosting'),
                                            autoUpdateAverage: starbox.hasClass('autoupdate'),
                                            buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                                                'data-button-count') || 5,
                                            stars: starbox.attr('data-star-count') || 5
                                        }).bind('starbox-value-changed', function(event, value) {
                                            if (starbox.hasClass('random')) {
                                                var val = Math.random();
                                                starbox.next().text(' ' + val);
                                                return val;
                                            }
                                        })
                                    });
                                });
                            </script>
                            <!---//End-rate---->
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item" onclick="location.href='details.html';">
                                    <div class="product-grid fade sproduct-grid">
                                        <div class="product-pic">
                                            <a href="#"><img src="{{ url('/public') }}/images/product1.jpg"
                                                    title="product-name" /></a>
                                            <p>
                                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small>
                                                    FG</a>
                                                <span>Men's Firm-Ground Football Boot</span>
                                            </p>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-cust">
                                                <a href="#">Details</a>
                                            </div>
                                            <div class="product-info-price">
                                                <a href="#">&#163; 200</a>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="more-product-info">
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" onclick="location.href='details.html';">
                                    <div class="product-grid fade sproduct-grid">
                                        <div class="product-pic">
                                            <a href="#"><img src="{{ url('/public') }}/images/product2.jpg"
                                                    title="product-name" /></a>
                                            <p>
                                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small>
                                                    FG</a>
                                                <span>Men's Firm-Ground Football Boot</span>
                                            </p>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-cust">
                                                <a href="#">Details</a>
                                            </div>
                                            <div class="product-info-price">
                                                <a href="#">&#163; 320</a>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="more-product-info">
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" onclick="location.href='details.html';">
                                    <div class="product-grid fade sproduct-grid">
                                        <div class="product-pic">
                                            <a href="#"><img src="{{ url('/public') }}/images/product3.jpg"
                                                    title="product-name" /></a>
                                            <p>
                                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small>
                                                    FG</a>
                                                <span>Men's Firm-Ground Football Boot</span>
                                            </p>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-cust">
                                                <a href="#">Details</a>
                                            </div>
                                            <div class="product-info-price">
                                                <a href="#">&#163; 380</a>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="more-product-info">
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" onclick="location.href='details.html';">
                                    <div class="product-grid fade sproduct-grid">
                                        <div class="product-pic">
                                            <a href="#"><img src="{{ url('/public') }}/images/product4.jpg"
                                                    title="product-name" /></a>
                                            <p>
                                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small>
                                                    FG</a>
                                                <span>Men's Firm-Ground Football Boot</span>
                                            </p>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-cust">
                                                <a href="#">Details</a>
                                            </div>
                                            <div class="product-info-price">
                                                <a href="#">&#163; 300</a>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="more-product-info">
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" onclick="location.href='details.html';">
                                    <div class="product-grid fade sproduct-grid">
                                        <div class="product-pic">
                                            <a href="#"><img src="{{ url('/public') }}/images/product5.jpg"
                                                    title="product-name" /></a>
                                            <p>
                                                <a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small>
                                                    FG</a>
                                                <span>Men's Firm-Ground Football Boot</span>
                                            </p>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-cust">
                                                <a href="#">Details</a>
                                            </div>
                                            <div class="product-info-price">
                                                <a href="#">&#163; 270</a>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="more-product-info">
                                            <span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----//End-img-cursual---->
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <!--- //End-similar-products--->
                </div>
            </div>
            <div class="clear"> </div>
            <!--//vertical Tabs-->
            <!----//product-rewies---->
            <!---//End-product-details--->
        </div>
    </div>
    <!---- start-bottom-grids---->
    <div class="bottom-grids">
        <div class="bottom-top-grids">
            <div class="wrap">
                <div class="bottom-top-grid">
                    <h4>GET HELP</h4>
                    <ul>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="#">Shopping</a></li>
                        <li><a href="#">NIKEiD</a></li>
                        <li><a href="#">Nike+</a></li>
                    </ul>
                </div>
                <div class="bottom-top-grid">
                    <h4>ORDERS</h4>
                    <ul>
                        <li><a href="#">Payment options</a></li>
                        <li><a href="#">Shipping and delivery</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div>
                <div class="bottom-top-grid last-bottom-top-grid">
                    <h4>REGISTER</h4>
                    <p>Create one account to manage everything you do with Nike, from your shopping preferences to your
                        Nike+ activity.</p>
                    <a class="learn-more" href="#">Learn more</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="bottom-bottom-grids">
            <div class="wrap">
                <div class="bottom-bottom-grid">
                    <h6>EMAIL SIGN UP</h6>
                    <p>Be the first to know about new products and special offers.</p>
                    <a class="learn-more" href="#">Sign up now</a>
                </div>
                <div class="bottom-bottom-grid">
                    <h6>GIFT CARDS</h6>
                    <p>Give the gift that always fits.</p>
                    <a class="learn-more" href="#">View cards</a>
                </div>
                <div class="bottom-bottom-grid last-bottom-bottom-grid">
                    <h6>STORES NEAR YOU</h6>
                    <p>Locate a Nike retail store or authorized retailer.</p>
                    <a class="learn-more" href="#">Search</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!---- //End-bottom-grids---->
    <!--- //End-content---->
    <!---start-footer---->
    <div class="footer">
        <div class="wrap">
            <div class="footer-left">
                <ul>
                    <li><a href="#">United Kingdom</a> <span> </span></li>
                    <li><a href="#">Terms of Use</a> <span> </span></li>
                    <li><a href="#">Nike Inc.</a> <span> </span></li>
                    <li><a href="#">Launch Calendar</a> <span> </span></li>
                    <li><a href="#">Privacy & Cookie Policy</a> <span> </span></li>
                    <li><a href="#">Cookie Settings</a></li>
                    <div class="clear"> </div>
                </ul>
            </div>
            <div class="footer-right">
                <p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
                <script type="text/javascript">
                    $(document).ready(function() {
                        /*
                                							var defaults = {
                                					  			containerID: 'toTop', // fading element id
                                								containerHoverID: 'toTopHover', // fading element hover id
                                								scrollSpeed: 1200,
                                								easingType: 'linear'
                                					 		};
                                							*/

                        $().UItoTop({
                            easingType: 'easeOutQuart'
                        });

                    });
                </script>
                <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;">
                    </span></a>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <!---//End-footer---->
    <!---//End-wrap---->
</body>

</html>
