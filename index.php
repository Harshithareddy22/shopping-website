<?php
  include("db.php");
?>
<html lang="en">

<head>
<style>  
.searchbox {  
float: left;  
}  
input[type=text] {  
padding: 6px;  
margin-top: 8px;  
font-size: 17px;  
border: none;  
}  
.searchbox button {  
  
padding: 8px;  
margin-top: 10px;  
margin-left: 10px;  
background: orange;  
font-size: 20px;  
border: none;  
cursor: pointer;  
}  
.searchbox button:hover {  
background: blue;  
}  
</style>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Nunito&family=Palanquin+Dark:wght@500&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sty.css">
    <title>Elite Deals Store</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                
                
                <img  width="50" src="logo.jpg">
                <!-- <img src="./img/sneakers.png" alt=""> -->
                <h2>Elite Deals</h2>
            </div>
           <div class="navItem">
<!--  <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="./img/search.png" width="20" height="20" alt="" class="searchIcon">
                </div>-->
                
<div class="searchbox">  
<form>   
<input type="text" placeholder=" Search...." name="search">   
<a href="new2.html"><button type="submit">Submit</button></a>  
</form>  
</div>   

            </div>
            <div class="navItem">
                <span class="limitedOffer"></span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a style="text-decoration:none;" href="proj1.html">Fashion</a></h3>
            <h3 class="menuItem">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a  style="text-decoration:none;"href="new1.html">Electronics</a></h3>
            <h3 class="menuItem">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a  style="text-decoration:none;"href="new2.html">Cosmetics</a></h3>
            <h3 class="menuItem">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a  style="text-decoration:none;"href="new3.html">Furniture</a></h3>
            <h3 class="menuItem">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a style="text-decoration:none;" href="new4.html">Books</a></h3>
            <h3 class="menuItem">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a  style="text-decoration:none;"href="login.php">LogOut</a></h3>
            
        </div>
    </nav>
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="./img/fasf.jpg" style="width:100%" height="87%">
          <form action="proj1.html">
            <button class="buyButton1">Shop now</button></form>
          <div class="text"></div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="./img/electronic.jpg" style="width:100%" height="87%">
          <form action="new1.html">
            <button class="buyButton2" >Shop now</button></form>
          <div class="text"></div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="./img/cosmetic.jpg" style="width:100%" height="85%" >
          <form action="new2.html">
            <button class="buyButton3">Shop now</button></form>
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="./img/furniture.jpg" style="width:100%">
            <form action="new3.html">
                <button class="buyButton4">Shop now</button></form>
            <div class="text"></div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="./img/bookstore.jpg" style="width:100%">
            <form action="new4.html">
                <button class="buyButton5">Shop now</button></form>
            <div class="text"></div>
          </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      <!--
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem1">
                <img src="./img/fasf.jpg" alt="" class="sliderImg" id="firsts">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Fashion is more art than art is.....!</h1>
                <h2 class="sliderPrice">Best Collections</h2>
                <a href="#product">
                    <form action="fashion.html">
                    <button class="buyButton1">Explore!</button></form>
                </a>
            </div>
            <div class="sliderItem2">
                <img src="./img/electronic.jpg" alt="" class="sliderImg" id="second">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">Rs 1149</h2>
                <a href="#product">
                    <button class="buyButton2">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem3">
                <img src="./img/cosmetic.jpg" alt="" class="sliderImg" id="thirds">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">Rs 2100</h2>
                <a href="#product">
                    <button class="buyButton3">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem4">
                <img src="./img/furniture.jpg" alt="" class="sliderImg" id="fourth">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">Rs 2999</h2>
                <a href="#product">
                    <button class="buyButton4">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem5">
                <img src="./img/books.png" alt="" class="sliderImg" id="fifth">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">Rs 999</h2>
                <a href="#product">
                    <button class="buyButton5">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>
   -->
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="product" id="product">
        <img src="./img/air2.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Nike<br>Revolution 5 Sneakers For Men </h1>
            <h2 class="productPrice">Rs 1999</h2>
            <p class="productDesc">Limited Offer......!</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <button class="productButton">BUY NOW!</button>
        </div>
        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+1 234 5678" class="payInput">
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton">Checkout!</button>
            <span class="close">X</span>
        </div>
    </div>
   <!-- <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="https://images.pexels.com/photos/13159244/pexels-photo-13159244.jpeg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/2982100/pexels-photo-2982100.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="https://images.pexels.com/photos/1018911/pexels-photo-1018911.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/34514/spot-runs-start-la.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
    </div>-->
    <h1 style="color:black; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans U
    nicode', Geneva, Verdana, sans-serif;font-style: italic;font: 1em sans-serif;">&emsp;&emsp;Top Offers
</h1>    <table> <div class="tabb">
        <tr>
           
             <td><figure><img src="./img/blazer.png" width="220px" height="230px" ><figcaption>Nike premium Shoes <br>&emsp;&emsp;Rs.1,999<br>&emsp;<a href="pay.html"><button class="productButton" style="padding: auto;position: absolute;">BUY NOW!</button></a></figcaption></figure></td>
             <td><figure><img src="./img/dress.png" width="230px" height="250px"><figcaption>&emsp;Party wear dress<br>&emsp;&emsp;&emsp;Rs.2,599<br>&emsp;<a href="pay.html"><button class="productButton" style="padding: auto;position: absolute;">BUY NOW!</button></a></figcaption></figure></td>
                <td><figure></figure><img src="./img/chair1.jpeg" width="250px" height="240x"><figcaption>&emsp;Teak wood Furniture<br>&emsp;&emsp;&emsp;Rs.5,999<br>&emsp;&emsp;<a href="pay.html"><button class="productButton" style="padding: auto;position: absolute;">BUY NOW!</button></a></figcaption></figure></figure></td>
                <td><figure><img src="./img/hp.jpg" width="250px" height="225px"><figcaption><br>HP Elitebook 840 G5 14<br>&emsp;&emsp;&emsp;Rs.29,999<br>&emsp;&emsp;<a href="pay.html"><button class="productButton" style="padding: auto;position: absolute;">BUY NOW!</button></a></figcaption></figure></td>
                <td><figure><img src="./img/watch.jpg" width="240px" height="240px"><figcaption>Hover Smart Watch<br>&emsp;&emsp;&emsp;Rs.1999<br>&emsp;<a href="pay.html"><button class="productButton" style="padding: auto;position: absolute;">BUY NOW!</button></figcaption></a></figure></td>        </tr>
</div></table><br><br><br>
 
    <!--<div class="newSeason">
        <div class="nsItem">
            <img src="./img/glitt.jpeg"
                alt="" width="500" height="500" class="nsImg">
        </div>
       <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>-->
        <div class="nsItem">
            <img src="slid1.webp"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <img src="tele.png"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <img src="slid.webp"
                alt="" class="nsImg">
        </div>
        
       <!-- </div 
    <img src="./img/offer.jpeg" width="100%" height="85%">--->
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Nike</li>
                    <li class="fListItem">Zara</li>
                    <li class="fListItem">Lakme</li>
                    <li class="fListItem">H&M</li>
                    <li class="fListItem">Celvin klein</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                    <input type="text" placeholder="helpline +919898987540" class="fInput">
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@elite deals. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>

</html>