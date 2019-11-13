<?php
/*
* Template Name: Home page
*
*/
get_header(); ?>
<?php global $wd_wt; $meta_data = get_post_meta( get_the_ID(), '_custom_page_options', true );?>
<?php global $wd_wt; $home_data = get_post_meta( get_the_ID(), 'homepage_offer', true );?>
<body <?php body_class(); ?>>
    
    <div class="wrapper">
        <!-- header -->
        <div class="header"  data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-md-2">
            			<div class="navbar-header">
	                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
	                            <span class="sr-only">Toggle navigation</span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                        </button>
	                        <a itemprop="url" class="navbar-brand" href="<?php echo site_url(); ?>">
	                            <?php if(cs_get_option('log_c')){?>
	                        <img  itemprop="logo" src="<?php echo cs_get_option('log_c');?>" alt="logo"> 
	                        <?php }else{ echo cs_get_option('logo_text_c'); }?>
	                        </a>
	                    </div>
            		</div>
            		<div class="col-md-9">
            			<nav class="navbar">
							<ul id="cl-effect-3" class="nav navbar-nav navbar-right cl-effect-3">
								<?php
									if(has_nav_menu('header_menu')){
									wp_nav_menu( array(
										'menu'              => 'header_menu',
										'theme_location'    => 'header_menu',
										'depth'             => 10,
										'container'         => 'div',
										'container_class'   => 'navbar-collapse collapse',
										'container_id'      => 'navbar2',
										'menu_class'        => 'nav navbar-nav navbar-right'
									));
									} else { ?>
											<ul class="setup_menu">
												<li><a href="<?php echo admin_url('nav-menus.php'); ?>"><?php esc_html_e('Set Up Your Menu','hello');?></a></li>
											</ul>
									<?php }
								?>
							</ul>
                   		 <!-- </div> -->
                    	<!--/.nav-collapse -->
                		</nav>
            		</div>
            		<div class="col-md-1">
            			<div class="cart-btn">
				        	<span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
				      </div>
            		</div>
            	</div>

            </div>
        </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			  <a href="care.html"><img class="first-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ba1.jpg" alt="First slide"></a>

			</div>
			<div class="item">
			  <a href="kitchen.html"><img class="second-slide " src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ba.jpg" alt="Second slide"></a>
			</div>
			<div class="item">
			  <a href="hold.html"><img class="third-slide " src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ba2.jpg" alt="Third slide"></a>
			</div>
		</div>
    </div>
    
    <div class="content-top offer-w3agile">
		<div class="container ">
			<div class="spec ">
				<h3><?php echo $home_data['offer_title']?></h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l wthree-of">

				<?php
					$offer_sec_group = $home_data['offer_group'];

					if($offer_sec_group){
						$i = 1;
						foreach($offer_sec_group as $offer_group){ ?>
				<div class="col-md-3 pro-1">
					<div class="col-m">								
						<a href="#" data-toggle="modal" data-target="#myModal<?php echo $i; ?>" class="offer-img">
							<img src="<?php echo wp_get_attachment_url($offer_group['offer_img']); ?>" class="img-responsive" alt="">
							<div class="offer"><p><span><?php echo $offer_group['status']?></span></p></div>
						</a>
						<div class="mid-1">
							<div class="women">
								<h6><a href="#"><?php echo $offer_group['pro_name']?></a><?php echo esc_html__( '(', 'gta' );?><?php echo $offer_group['quantity']?><?php echo esc_html__( ')', 'gta' );?></h6>							
							</div>
							<div class="mid-2">
								<p ><label><?php echo esc_html__( '$', 'gta' );?><?php echo $offer_group['old_price']?></label><em class="item_price"><?php echo esc_html__( '$', 'gta' );?><?php echo $offer_group['new_price']?></em></p>
									<div class="block">
									<div class="rating"> 
									<?php 

									switch ($offer_group['rating']) {
										case '1':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '1.5':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '2':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '2.5':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '3':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '3.5':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
											<i class="fa fa-star-o"></i>';
											break;

										case '4':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>';
											break;							

										case '4.5':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>';
											break;

										case '5':
											echo '<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>';
											break;	
									}
									?>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="add">
								<button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $i; ?>" data-name="<?php echo $offer_group['pro_name']?>" data-summary="summary 1" data-price="<?php echo $offer_group['new_price']?>" data-quantity="1" data-image="<?php echo wp_get_attachment_url($offer_group['offer_img']); ?>"><i class="<?php echo $offer_group['btn_icon']?>" aria-hidden="true"></i> <?php echo $offer_group['button']?></button>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
									<div class="item">
										<img src="<?php echo wp_get_attachment_url($offer_group['offer_img']); ?>" class="img-responsive" alt="">
									</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $offer_group['pro_name']?><?php echo esc_html__( '(', 'gta' );?><?php echo $offer_group['quantity']?><?php echo esc_html__( ')', 'gta' );?></h3>
									<p class="in-para"> <?php echo $offer_group['m_sub_title']?></p>
									<div class="price_single">
									  <span class="reducedfrom "><del><?php echo esc_html__( '$', 'gta' );?><?php echo $offer_group['old_price']?> </del><?php echo esc_html__( '$', 'gta' );?><?php echo $offer_group['new_price']?></span>
									
									<div class="clearfix"></div>
									</div>
									<h4 class="quick"><?php echo $offer_group['view_title']?></h4>
									<p class="quick_desc"><?php echo $offer_group['view_desc']?></p>
									<div class="add-to">
									   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $i; ?>" data-name="<?php echo $offer_group['pro_name']?>" data-summary="summary 1" data-price="<?php echo $offer_group['new_price']?>" data-quantity="1" data-image="<?php echo wp_get_attachment_url($offer_group['offer_img']); ?>"><i class="<?php echo $modal_group['m_btn_icon']?>" aria-hidden="true"><?php echo $offer_group['button']?></button>
									</div>
								</div>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
				<?php $i++; } } ?>
								
			<div class="clearfix"></div>
			</div>
		</div> 
	</div>


<!--footer-->
<div class="footer">
	<div class="container">
		<?php dynamic_sidebar('foo-widget'); ?>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2><a href="<?php echo esc_html(cs_get_option('foorer_logo_link'));?>"></a><?php echo esc_html(cs_get_option('foorer_logo_title'));?></h2>
				<?php
					if(cs_get_option('foorer_logo')){?>
						<a href="<?php echo esc_html(cs_get_option('foorer_logo_link'));?>"><img src="<?php echo esc_url(wp_get_attachment_image_src( cs_get_option('foorer_logo'), 'full') [0]);?>" alt="<?php esc_html_e('Reat State Theme','reat-estate-theme');?>" /></a>
				<?php  }else{ ?> <h2 class="logo_title"><?php echo esc_attr( get_bloginfo( 'name', 'display' )); ?></h2> <?php } ?>
				
			</div>
		<div class="copy-right">
			<?php 
				//Footer Text Condition
				if(empty(cs_get_option('copyright'))){	
			?>
				<p><?php echo esc_html__('2019 Big store. All Rights Reserved | Design by ','reat-estate-theme')?><a href="http://w3layouts.com/"><?php esc_html_e('W3layouts','reat-estate-theme')?></a></p>
				<?php	
					}else{ 
				?> 
				<p><?php echo esc_html(cs_get_option('copyright'));?> <a href="<?php echo esc_html(cs_get_option('copyright_link'));?>"><?php echo esc_html(cs_get_option('copyright_link_title'));?></a></p>
			<?php	
				};
			?>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
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
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mycart.js"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
		var goToCartIcon = function($addTocartBtn){
	      var $cartIcon = $(".my-cart-icon");
	      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "99"});
	      $addTocartBtn.prepend($image);
	      var position = $cartIcon.position();
	      $image.animate({
	        top: position.top,
	        left: position.left
	      }, 500 , "linear", function() {
	        $image.remove();
	      });
	    }

		$('.my-cart-btn').myCart({

			cartItems: [
		        {id: <?php echo $i; ?>, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: '<?php echo wp_get_attachment_url($offer_group['offer_img']); ?>'}
		      ],
			classCartIcon: 'my-cart-icon',
			classCartBadge: 'my-cart-badge',
			affixCartIcon: true,
			checkoutCart: function(products) {
			$.each(products, function(){
			});
			},
			clickOnAddToCart: function($addTocart){
			goToCartIcon($addTocart);
			}
	    });
	})
  </script>

<?php wp_footer(); ?>
</body>
</html>