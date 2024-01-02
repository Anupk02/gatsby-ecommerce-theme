<?php
session_start();

if (isset($_SESSION['status'])) {
    echo "<script>alert('thanks for login.')</script>";

    unset($_SESSION['status']);
}

if (!isset($_SESSION['user'])) {
  header("Location: http://localhost/nursery/index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planto</title>
    <link rel="icon" type="image/x-icon" href="fevicon.png">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="header.css?v=1">
    <link rel="stylesheet" href="/css/all.min.css">
    <script src="jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <div class="main">
        <div class="header">
          <div class="icon">
            <img src="logo_thumbnail.png" class="logo" alt="icon">
          </div>
        
            <div class="menu-bar">
              <div class="navbar">
                <ul>
                    <li><a  id="navb" href="home.php"><i  class="fa-solid fa-house"></i> HOME</a></li>
                    <div class="subnav">
                    <li class="subnav-item"><a id="navb" href="home.php">PLANTS <i class="fa-solid fa-chevron-down"></i></a>
                      <div class="sub-menu-1">
                      <ul>
                        <li><a href="#section1"><i class="fa-solid fa-leaf"></i>   Air Plants</a></li>
                        <li><a href="#section2"><i class="fa-solid fa-leaf"></i>   Aquatic Plants</a></li>
                        <li><a href="#section3"><i class="fa-solid fa-leaf"></i>   Herb plants</a></li>
                        <li><a href="#section4"><i class="fa-solid fa-leaf"></i>   Fruit plants</a></li>
                        <li><a href="#section5"><i class="fa-solid fa-leaf"></i>   Flower plants</a></li>
                        <li><a href="#section6"><i class="fa-solid fa-leaf"></i>   Bonsai plants</a></li>
                      </ul>        
                    </li></div>
                    <li><a  id="navb" href="content.html" target="_blank">CONTENT</a></li>
                    <li><a id="navb" href="about.html" target="_blank">ABOUT</a></li>
                    <li><a id="navb" href="fedback.html" target="_blank">FEEDBACK</a></li>
                    <div class="search-box">
                    <button class="btn-search"><i class="fas fa-search"></i></button>
                    <input type="text" class="input-search" id="inp" placeholder="Type to Search..">
                    </div>
                    <div class="Admin-btn">
                    <a href="" class="btn-search" style="color:green;margin-right:30px;gap:5px;"><i class="fa-solid fa-user"></i>  <?php echo $_SESSION['user'] ?></a>
                    </div>
                    <div class="login-btn">
                    <a href="logout.php" onclick="return confirm('Are You sure you want to logout?');"><button  class="btn-search"><i class="fa-solid fa-sign-out"></i> Logout</button></bytton></a>
                    </div>
                    <div class="login-cart">
                    <button class="btn-search cart1"  id="cart-icon"><i class="fa-solid fa-cart-shopping"></i> cart</i></button>
                  </div>
                  <div class="cart">
                    <h2 class="cart-title">Your cart</h2>
                    <div class="cart-content">
                    </div>
                    <div class="total">
                      <div class="total-title">Total</div>
                      <div class="total-price">₹0</div>
                    </div>
                    <button type="button" class="btn-buy">Buy Now</button>
                    <i class="fa-solid fa-xmark" id="close-cart"></i>
                    <script src="cart.js"></script>
                  </div>
                </ul>   
              </div>
            </div>  
          </div>
        <hr class="new">
        
        <br>
        <br>
        <div class="back">
          <h3 style="text-align: center;margin-left: 243px; margin-right: 258px;">
          "From our hands to your garden, we offer the finest selection of nursery plants for your botanical paradise."
          </h3>
          </div>
        <br>
        
        <section class="shop_container">
          <h2 class="section-title">Nursery plant shop</h2> 
          <br>
          <scan class="producth">TRENDING  PRODUCTS</scan> 
          <form>
<div class="form-group">
<label for="ship-address" class="form-label">
<i class="fas fa-map-marker-alt"></i>
Deliver to*
</label>
<div class="input-wrapper">
<input  name="ship-address" class="ship-address" required   placeholder="Enter a location">
</div>
</div>
</form>    
          <div class="inner-wrap content-wrap">
            <hr class="hr3">
            
          <div class="product-grid">
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant1.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Jasminum sambac, Mogra, Arabian Jasmine - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹299</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant2.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Peace Lily, Spathiphyllum - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹169</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant3.jpg" alt="icon"class="product-img">
              <h6 class="product-title tooltip">Miniature Rose, Button Rose (Any Color) - Plant <span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹299</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant4.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Parijat Tree, Parijatak, Night Flowering Jasmine - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹359</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant5.jpg" alt="icon"class="product-img">
              <h6 class="product-title tooltip">Damascus Rose, Scented Rose (Any Color) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹299</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant6.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Elephant bush, Portulacaria afra, Jade plant (Green) - Succulent Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹349</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant7.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Krishna Tulsi Plant, Holy Basil, Ocimum tenuiflorum (Black) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹259</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant8.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Raat Ki Rani, Raat Rani, Night Blooming Jasmine - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹299</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant9.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Madhumalti Dwarf, Rangoon Creeper - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹369</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>   
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant10.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Piper Betel, Maghai Paan - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹311</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant11.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Lemon Grass - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹298</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant12.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Rosemary - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹249</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant13.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Syngonium (Pink) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹169</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant14.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Chlorophytum, Spider Plant - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹285</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant15.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Rose (Red) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹244</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant16.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">2 Layer Lucky Bamboo Plant in a Bowl with Pebbles<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹359</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant17.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Kunda, Downy Jasmine - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹289</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant18.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Portulaca, 9 O Clock (Any Color) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹139</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant19.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Clitoria Ternatea, Gokarna (Blue) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹248</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant20.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Krishna Kamal, Passion flower, Passiflora incarnata (Purple) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹274</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant21.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Aloe vera - Succulent Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹260</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant22.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Areca Palm (Small) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹144</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant23.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Citronella, Odomas - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹255</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant24.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Curry Leaves, Kadi Patta, Murraya koenigii, Meetha Neem - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹274</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant25.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Money plant marble prince, Scindapsus n joy - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹180</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant26.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Kagzi Nimboo, Lemon Tree - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹512</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant27.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Hibiscus, Gudhal Flower (Red Double) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹232</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant28.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Curtain creeper, Vernonia creeper, Parda bel - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹301</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant29.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Creeping fig Plant, Ficus pumila - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹297</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant30.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Adenium Plant, Desert Rose (Grafted, Any Color) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹334</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant31.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Graptoveria opalina - Succulent Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹188</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant32.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Orange Fruit, Santra ( Grafted ) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹512</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant33.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Nephrolepis exaltata bosteniensis, Boston Fern - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹360</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            <div class="grid-product">
              <div class="img-name plant3">
              <img src="./img/plant34.jpg" alt="icon" class="product-img">
              <h6 class="product-title tooltip">Jade Bonsai - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
              </div> 
              <p class="product-price1"><scan class="product-price">₹2099</scan> <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
            </div>
            
              <p id="not-found" style="display: none;" class="not-found">No matching products found.</p>
              <script src="search.js"></script>
              <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="icon-box">
                        <i class="fa-solid fa-check"></i>
                      </div>				
                      <h4 class="modal-title w-100">Thank you!</h4>	
                    </div>
                    <div class="modal-body">
                      <p class="text-center">Your product has been added to the cart.</p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
              <script>
              document.addEventListener("DOMContentLoaded", function() {
              var addToCartButtons = document.querySelectorAll(".add-to-cart");
              var modal = document.querySelector("#myModal");
              var body = document.querySelector("body");
              addToCartButtons.forEach(function(button) {
              button.addEventListener("click", function() {
              modal.style.display = "block";
              body.classList.add("modal-open");
              });
          });
            var okBtn = modal.querySelector(".btn-success");
            okBtn.addEventListener("click", function() {
            modal.style.display = "none";
            body.classList.remove("modal-open");
            });
          });
                </script>
            
          </div>
        </div>
      </section> 
      <section class="shop_container" id="section1">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Air Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Air Plant, Tillandsia ionantha Guatemala (Large) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹359 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Ananas - Air Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹664 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Zinn - Air Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹1320 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Loving Touch - Air Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹859 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant5.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Living Pearls - Air Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹1009 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img1/plant6.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Air Plant, Tillandsia ionantha var. ionantha - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹359 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section>   
<section class="shop_container" id="section2">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Aquatic Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Lotus, Nelumbo Nucifera (Pink) - Plant<span class="tooltip-text">Images are for reference purposes only. Actual products may vary in shape or appearance based on climate, age, height, etc. The product is replaceable but not returnable.</span></h6>
                  </div> 
                  <p class="product-price1">₹878 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Water Lily, Nymphae Nouchali (Blue) - Plant<span class="tooltip-text">nouchali is a day-blooming non-viviparous plant with submerged roots and stems. Part of the leaves are submerged, while others rise slightly above the surface. The leaves are round and green on top; they usually have a darker underside.</span></h6>
                  </div> 
                  <p class="product-price1">₹304 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Water Canna, Thalia Dealbata - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹470 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Victoria lily - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹498 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant5.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Water Coleus indoor plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹480 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant6.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Philodendron<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹370<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img2/plant7.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Peace Lily<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹740 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section> 
<section class="shop_container" id="section3">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Herb Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Mexican mint, Patharchur, Ajwain Leaves - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹230 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Thyme, Thymus vulgaris - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹260 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Badi Elaichi, Black Cardamom - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹411<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Thai Basil, Ocimum thyrsiflora - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹208<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant5.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Brahmi, Gotu Kola, Centella asiatica - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹300<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant6.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Shatavari Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹466<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img3/plant7.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Live Tulsi Herbal Live Plant | Tulsi Plant (Rama Tulsi & Krishna Tulsi) with Pots<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹201<button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section> 
<section class="shop_container" id="section4">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Fruit Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Kagzi Nimboo, Lemon Tree - Plant<span class="tooltip-text">Kagzi Lime is popular for its beautiful appearance and pleasing flavour and for its excellent food qualities.</span></h6>
                  </div> 
                  <p class="product-price1">₹505 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Nimboo, Lemon Tree - Plant<span class="tooltip-text">Growing Lemon plant is an easy way to add a tropical flair to your garden. When you know its unique health benefits, and how to care for Lemon plants, you will be rewarded with many years of lovely fruit.</span></h6>
                  </div> 
                  <p class="product-price1">₹399 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Pomegranate, Annar, Anar (Grafted) - Plant<span class="tooltip-text">Enjoy the delicious and nutritious watery, red arils of Pomegranate by growing easily at your home.</span></h6>
                  </div> 
                  <p class="product-price1">₹369 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Orange Fruit, Santra ( Grafted ) - Plant<span class="tooltip-text">Orange trees are widely grown in tropical and subtropical climates for their sweet fruit. The fruit of the orange tree can be eaten fresh, or processed for its juice or fragrant peel.</span></h6>
                  </div> 
                  <p class="product-price1">₹549 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant5.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Guava Tree, Amrud, Psidium guajava (Grown through seeds) - Plant<span class="tooltip-text">Enjoy the delicious and nutritious watery, red arils of Pomegranate by growing easily at your home.</span></h6>
                  </div> 
                  <p class="product-price1">₹232 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant6.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Mango Tree (Kesar, Grafted) - Plant<span class="tooltip-text">Mango Kesar smell is its most distinguishing feature, the colour of the pulp resembling saffron, the spice it is named after.</span></h6>
                  </div> 
                  <p class="product-price1">₹454 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant7.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Grape, Angoor (Seedless) - Plant<span class="tooltip-text">Mango Kesar smell is its most distinguishing feature, the colour of the pulp resembling saffron, the spice it is named after.</span></h6>
                  </div> 
                  <p class="product-price1">₹508 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img4/plant8.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Dragon Fruit - Plant<span class="tooltip-text">Mango Kesar smell is its most distinguishing feature, the colour of the pulp resembling saffron, the spice it is named after.</span></h6>
                  </div> 
                  <p class="product-price1">₹375 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section> 

<section class="shop_container" id="section5">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Flower Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Rose (Orange) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹299 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">5 Best Fragrant Plants<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹1560 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Madhumalti Dwarf, Rangoon Creeper - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹333 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Pentas (White) - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹278 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant5.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Set of 3 Outdoor Flowering Plants for Beautiful Garden<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹820 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img5/plant6.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">greennursery Bird of Paradise Plant  (Hybrid, Pack of 1)<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹180 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section> 
<section class="shop_container" id="section6">
<br><br><br><br><br><br><br><br>
              <scan class="producth">Bonsai Plants</scan>     
                <hr class="hr3">
              <div class="product-grid">
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img6/plant1.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Ficus microcarpa Bonsai- Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹3980 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img6/plant2.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Ficus Bonsai Vertical Braided Arrangement - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹7465 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img6/plant3.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Banyan tree Bonsai - Plant<span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹2860 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
                <div class="grid-product">
                  <div class="img-name plant3">
                  <img src="./img6/plant4.jpg" alt="icon" class="product-img">
                  <h6 class="tooltip">Ficus Bonsai <span class="tooltip-text">Information about the plant goes here</span></h6>
                  </div> 
                  <p class="product-price1">₹743 <button class="add-to-cart"><i class="fa-solid fa-cart-plus"></i>  Add to cart</button><p>
                </div>
</section> 
   
      <!--main-->
      <button onclick="topFunction()" id="top" title="Go to top">Top  <i class="fa-solid fa-arrow-up-from-bracket"></i></button>
            
      <script>
        let mybutton = document.getElementById("top");
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
      <!--footer-->
      <div class="footer">
        <hr class="new1">
      <div class="row">
        <div class="column">
          <h2>Gardening Knowlege</h2>
          <p><a  href="https://www.skynursery.com/blog/" target="_blank">BLOG</a></p>
          <p><a  href="https://www.woodlandtrust.org.uk/blog/2018/04/why-plants-are-important/" target="_blank">IMPORTANCE</a></p>
          <p><a  href="https://whyfarmit.com/baby-nursery-plants/" target="_blank">TOP 20 Plants</a></p>
          <p><a  href="https://en.wikipedia.org/wiki/Plant_nursery" target="_blank">WIKIPEDIA</a></p>
          <p><a  href="content.html" target="_blank">CONTENT</a></p>
        </div>
        <div class="column">
          <h2>Useful Links</h2>
          <p><a href="home.php">HOMEPAGE</a></p>
          <p><a href="about.html" target="_blank">About us</a></p>
          <p><a href="home.php">HELP</a></p>
          <p><a href="fedback.html" target="_blank">FEADBACK</a></p>
          <P><button id="cart3" class="lof1"><i class="fa-solid fa-cart-shopping"></i> Cart</button></P>
          <p><a href="privacy.html" target="_blank">POLICIES</a></p>
        </div>
        <div class="column">
          <h2>Follow us</h2>
          <P><a href="home.php"><i class="fa-brands fa-facebook"></i> FACEBOOK</a></P>
          <P><a href="home.php"><i class="fa-brands fa-twitter"></i> TWITTER</a></P>
          <p><a href="home.php"><i class="fa-brands fa-instagram"></i> INSTAGRAM</a></p>
          <p><a href="https://www.linkedin.com/in/koturwar-anupkumar-sheshrao-1b861a259/" target="_blank"><i class="fa-brands fa-linkedin"></i> LINKEDIN</a></p>
          <p><a href=""><i class="fa-solid fa-phone"></i> 91 8999881962</a></p>
        </div>
      <script>
      const link = document.getElementById('cart3');
      const button = document.getElementById('cart-icon');
  
        link.addEventListener('click', function(event) {
        event.preventDefault();
  
        button.click();
        });
        </script>
      
      <hr class="new1">
      <h2>© 2023 Planto Nursery. All rights reserved.</h2>
      <hr class="new1">
    </div>
    </div>
  </div> 
</body>
</html>