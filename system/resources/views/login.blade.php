<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Spike shoes Website Template | login :: w3layouts</title>
    <link href="{{ url('/public') }}/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    </script>
    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!----//webfonts---->
    <script src="{{ url('/public') }}/js/jquery.min.js"></script>
    <!----start-alert-scroller---->
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
    <script src="{ url('/public') }}/js/menu_jquery.js"></script>
    <!-- //End menu -->
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
                        <li><a href="{{ url('admin/AdminBeranda') }}">Login</a><span> </span></li>
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

    </div>
    <!----//End-bottom-header---->
    <!---//End-header---->
    <!--- start-content---->
    <div class="content login-box">
        <div class="login-main">
            <div class="wrap">
                <h1>LOGIN OR CREATE AN ACCOUNT</h1>
                <div class="login-left">
                    <h3>NEW CUSTOMERS</h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <a class="acount-btn" href="register.html">Creat an Account</a>
                </div>
                <div class="login-right">
                    <h3>REGISTERED CUSTOMERS</h3>
                    <p>If you have an account with us, please log in.</p>

                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <span>Password<label>*</label></span>
                            <input type="password" name="password">
                        </div>
                        <a class="forgot" href="#">Forgot Your Password?</a>
                        <input type="submit" value="Login" />
                    </form>
                </div>
                <div class="clear"> </div>
            </div>
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