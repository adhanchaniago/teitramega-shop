<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
   <body>
      <div class="header">
         <div class="top-bar">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-2">
                     <div class="language-wrapper">
                        <div class="box-language">
                           <form id="form-language">
                              <div class="btn-group toggle-wrap">
                                 <span class="toggle">
                                    <span><img src="assets/img/language/id-gb.png" alt="English" title="English" height="11" width="16"> Indonesia</span>
                                 </span>

                              </div>
                           </form>
                        </div>
                   
                        <a href="#"><i class="icon-phone"></i> Hubungi Kami : 0821 - 8005 7770</a>
                     </div>
                     <div class="clear"></div>
                  </div>
                  <div class="col-md-8 col-sm-10">
                     <div class="search-area">
                        <form>
                           <div class="control-group">
            
                           <input class="search-field" placeholder="Aku Mau Belanja...">
                           <a class="search-button" href="#"><i class="icon-magnifier"></i></a>
                        </div>
                     </form>
                  </div>
                  <div class="shop-cart">
                     <ul>
                        <li><a class="cart-icon cart-btn" href="#"><span class="icon-heart"></span></a></li>
                        <li>
                           <a href="#" class="cart-icon cart-btn"><i class="icon-basket"></i></a>
                           
                        </li>
                     </ul>
                  </div>
                  <div class="account link-inline">
                     <a href="login-form.html"><i class="icon-login"></i><span class="hidden-mobile">login/register</span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="row">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url() ?>">
                     <img src="assets/img/logo.png" alt="logo">
                  </a>
               </div>
               <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a class="" href="<?php echo base_url() ?>">Home </a></li>
                     <li><a href="about.html">About</a></li>
                     <li>
                        <a href="#">Catalog <span class="caret"></span></a>
                        <div class="dropdown mega-menu megamenu1">
                           <div class="row">
                              <div class="col-sm-3 col-xs-12">
                                 <ul class="menulinks">
                                    <li class="maga-menu-title">
                                       <a href="#">Men</a>
                                    </li>
                                    <li><a href="category.html">Clothing</a></li>
                                    <li><a href="category.html">Handbags</a></li>
                                    <li><a href="category.html">Maternity</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li><a href="category.html">Scarves</a></li>
                                 </ul>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                 <ul class="menulinks">
                                    <li class="maga-menu-title">
                                       <a href="#">Women</a>
                                    </li>
                                    <li><a href="category.html">Handbags</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li><a href="category.html">Clothing</a></li>
                                    <li><a href="category.html">Watches</a></li>
                                    <li><a href="category.html">Hats</a></li>
                                 </ul>
                              </div>
                              <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                                 <span class="block-last">
                                    <img src="assets/img/block_menu.jpg" alt="">
                                 </span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="#">Shop <span class="caret"></span></a>
                        <div class="dropdown mega-menu megamenu2">
                           <div class="row">
                              <div class="col-sm-6 col-xs-12">
                                 <ul class="menulinks">
                                    <li class="maga-menu-title">
                                       <a href="#">Normal Shop Pages</a>
                                    </li>
                                    <li><a href="category.html">Single Category</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="shopping-cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="single-shop.html">Seller's Store</a></li>
                                    <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                                    <li><a href="shop-list.html">Shop List Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="order.html">Order Track</a></li>
                                 </ul>
                              </div>
                              <div class="col-sm-6 col-xs-12">
                                 <ul class="menulinks">
                                    <li class="maga-menu-title">
                                       <a href="#">Multi-vendor Pages</a>
                                    </li>
                                    <li><a href="submission.html">Product Submission</a></li>
                                    <li><a href="single-shop.html">Seller Store Page</a></li>
                                    <li><a href="edit-profile.html">Seller Account</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="shop.html">Search</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="#">Pages <span class="caret"></span></a>
                        <ul class="dropdown">
                           <li>
                              <a href="about.html">
                                 About Us
                              </a>
                           </li>
                           <li>
                              <a href="services.html">
                                 Services
                              </a>
                           </li>
                           <li>
                              <a href="contact.html">
                                 Contact Us
                              </a>
                           </li>
                           <li>
                              <a href="product-details.html">
                                 Product Details
                              </a>
                           </li>
                           <li>
                              <a href="team.html">
                                 Team Member
                              </a>
                           </li>
                           <li>
                              <a href="checkout.html">
                                 Checkout
                              </a>
                           </li>
                           <li>
                              <a href="compare.html">
                                 Compare
                              </a>
                           </li>
                           <li>
                              <a href="compare.html">
                                 Compare
                              </a>
                           </li>
                           <li>
                              <a href="shopping-cart.html">
                                 Shopping cart
                              </a>
                           </li>
                           <li>
                              <a href="faq.html">
                                 FAQs
                              </a>
                           </li>
                           <li>
                              <a href="wishlist.html">
                                 Wishlist
                              </a>
                           </li>
                           <li>
                              <a href="404.html">
                                 404 Error
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#">Blog <span class="caret"></span></a>
                        <ul class="dropdown">
                           <li>
                              <a href="blog.html">
                                 Blog Right Sidebar
                              </a>
                           </li>
                           <li>
                              <a href="blog-left-sidebar.html">
                                 Blog Left Sidebar
                              </a>
                           </li>
                           <li>
                              <a href="blog-full-width.html">
                                 Blog Full Width
                              </a>
                           </li>
                           <li>
                              <a href="blog-details.html">
                                 Blog Details
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="contact.html">
                           Contact
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>



         <ul class="mobile-menu">
            <li>
               <a class="active" href="index.html">
                  Home
               </a>
               <ul class="dropdown">
                  <li>
                     <a href="index.html">Home V1</a>
                  </li>
                  <li>
                     <a class="active" href="index-2.html">Home V2</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="about.html">About</a>
            </li>
            <li>
               <a href="#">Catalog</a>
               <ul class="dropdown menulinks">
                  <li class="maga-menu-title">
                     <a href="#">Men</a>
                  </li>
                  <li><a href="category.html">Clothing</a></li>
                  <li><a href="category.html">Handbags</a></li>
                  <li><a href="category.html">Maternity</a></li>
                  <li><a href="category.html">Jewelry</a></li>
                  <li><a href="category.html">Scarves</a></li>
                  <li class="maga-menu-title">
                     <a href="#">Women</a>
                  </li>
                  <li><a href="category.html">Handbags</a></li>
                  <li><a href="category.html">Jewelry</a></li>
                  <li><a href="category.html">Clothing</a></li>
                  <li><a href="category.html">Watches</a></li>
                  <li><a href="category.html">Hats</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Shop</a>
               <ul class="menulinks">
                  <li class="maga-menu-title">
                     <a href="#">Normal Shop Pages</a>
                  </li>
                  <li><a href="category.html">Single Category</a></li>
                  <li><a href="product-details.html">Product Details</a></li>
                  <li><a href="shopping-cart.html">Cart Page</a></li>
                  <li><a href="checkout.html">Checkout Page</a></li>
                  <li><a href="single-shop.html">Seller's Store</a></li>
                  <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                  <li><a href="shop-list.html">Shop List Sidebar</a></li>
                  <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                  <li><a href="order.html">Order Track</a></li>
                  <li class="maga-menu-title">
                     <a href="#">Multi-vendor Pages</a>
                  </li>
                  <li><a href="submission.html">Product Submission</a></li>
                  <li><a href="single-shop.html">Seller Store Page</a></li>
                  <li><a href="edit-profile.html">Seller Account</a></li>
                  <li><a href="login.html">Log In</a></li>
                  <li><a href="shop.html">Search</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Pages</a>
               <ul class="dropdown">
                  <li>
                     <a href="about.html">About Us</a>
                  </li>
                  <li>
                     <a href="services.html">Services</a>
                  </li>
                  <li>
                     <a href="contact.html">Contact Us</a>
                  </li>
                  <li>
                     <a href="product-details.html">Product Details</a>
                  </li>
                  <li>
                     <a href="team.html">Team Member</a>
                  </li>
                  <li>
                     <a href="checkout.html">Checkout</a>
                  </li>
                  <li>
                     <a href="compare.html">Compare</a>
                  </li>
                  <li>
                     <a href="shopping-cart.html">Shopping cart</a>
                  </li>
                  <li>
                     <a href="faq.html">FAQs</a>
                  </li>
                  <li>
                     <a href="wishlist.html">Wishlist</a>
                  </li>
                  <li>
                     <a href="404.html">404 Error</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#">Blog</a>
               <ul class="dropdown">
                  <li>
                     <a href="blog.html">Blog Right Sidebar</a>
                  </li>
                  <li>
                     <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                  </li>
                  <li>
                     <a href="blog-full-width.html">Blog Full Width</a>
                  </li>
                  <li>
                     <a href="blog-details.html">Blog Details</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="contact.html">Contact</a>
            </li>
         </ul>
      </nav>
   </div>

<?php  

?>