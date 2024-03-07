<header class="is-transparent is-dark border-b backdrop-filter backdrop-blur-2xl" uk-sticky="cls-inactive: is-dark is-transparent border-b"> 
    <div class="header_inner">
        <div class="left-side">

            <!-- Logo -->
            <div id="logo">
                <a href="explore.html">
                    <img src="../assets/images/logo-mobile.png" class="logo_mobile" alt="">
                </a>
            </div>
        </div>
        <div class="right-side">

            <!-- Header search box  -->
            <div class="header_search"><i class="uil-search-alt"></i> 
                <input value="" type="text" class="form-control" placeholder=" Quick search for anything.." autocomplete="off">
                <div uk-drop="mode: click;offset:10" class="header_search_dropdown">
                       
                    <h4 class="search_title"> Recently </h4>
                    <ul>
                        <li> 
                            <a href="#">  
                                <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Erica Jones </div>
                            </a> 
                        </li> 
                        <li> 
                            <a href="#">  
                                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Coffee  Addicts </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                <div class="list-name"> Mountain Riders </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                <div class="list-name"> Property Rent And Sale  </div>
                            </a> 
                        </li>
                        <li> 
                            <a href="#">  
                                <img src="../assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                <div class="list-name">  Erica Jones </div>
                            </a> 
                        </li>
                    </ul>

                </div>
            </div>

            <div>

                <!-- cart -->
                <a href="#" class="header_widgets">
                    <ion-icon name="cart-outline" class="is-icon"></ion-icon>
                </a>
                <div uk-drop="mode: click" class="dropdown_cart">
                    <div class="cart-headline"> My Cart 
                    <a href="#" class="checkout">Checkout</a>
                </div>
                    <ul class="dropdown_cart_scrollbar" data-simplebar>
                    </ul>
                </div>
                 <!-- profile -->
                <a href="#">
                    <img src="../assets/images/avatars/placeholder.png" class="header_widgets_avatar" alt="">
                </a>
                <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                    <ul>   
                        <li>
                            <a href="#" class="user">
                                <div class="user_avatar">
                                    <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="user_name">
                                    <div>NTP </div>
                                    <span> @NTP </span>
                                </div>
                            </a>
                        </li>
                        <li> 
                            <hr>
                        </li>
                     
                        <li> 
                            <hr>
                        </li>
                        <li> 
                            <a href="#">
                                <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                 My Account 
                            </a>
                        </li>
                     
                            <hr>
                        </li>
                    
                        <li> 
                            <a href="#">
                                <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                Log Out 
                            </a>
                        </li>
                    </ul>
                </div> 

            </div>

        </div>
    </div>
</header>