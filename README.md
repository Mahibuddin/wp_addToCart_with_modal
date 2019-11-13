Dynamic Add to Cart Features:-

Include CSS library on the web page

<link rel="stylesheet" href="css/bootstrap.min.css">

Add this CSS
<style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
</style>


Include JS library on the web page

<script src="js/jquery-2.2.3.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/jquery.mycart.js"></script>

N.B: Every add to cart button should contain following data-* fields :-
   data-id,
   data-name,
   data-summary,
   data-price,
   data-quantity,
   data-image
Example:- 
<button class="my-cart-btn" data-id="2" data-name="product 2" data-summary="summary 2" data-price="20" data-quantity="1" data-image="images/img_2.png">Add to Cart</button>


REFFERENCE: (SPECIAL THANKS) :-
Asraf Uddin Ahmed ( https://github.com/Asraf-Uddin-Ahmed/jquery.mycart )
