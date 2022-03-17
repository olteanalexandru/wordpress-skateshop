<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cinematograf
 */

?>
<?php
get_header();?>

<div class="area" >
            <ul class="circles">
            <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
            
	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main row">


  


			<section class="error-404 not-found col-md-12">
				<header class="page-header">
                    <div class="content404"><img src="/wp-content/uploads/2020/05/saedx-blog-featured-70.jpg" alt="" srcset=""></div>
					<h1 class="page-title"><?php esc_html_e( '404 - Pagina nu a fost gasita
Uh oh. ¯\_(ツ)_/¯', 'cinematograf' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Se pare ca nimic nu a fost gasit la aceasta locatie. Poate doresti sa dai un search ?', 'cinematograf' ); ?></p>

						<?php
					get_search_form();

					
					?>

	</div><!-- .widget -->

					
				
		  </div>
	
			  
  </div><!-- .page-content -->
		
		
		
		</section><!-- .error-404 -->
	
						
				
		</main><!-- #main -->
	</div><!-- #primary -->
<style>
.content404{
    


background-image: url("/wp-content/uploads/2020/05/saedx-blog-featured-70.jpg");
background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */



   
}
.container.darkmode{
 min-width: -webkit-fill-available;
 padding:0;
    
}
div#primary{
   min-height:100%; 
}
.content-area::after{
    opacity: 0.5;
}
.acfnomarg{
margin:0 auto;
}
#primary {
    border-bottom: 1px dotted rgb(76, 74, 71);
}
.error-404 ,.page-title{
   
  
    text-align:center!important;
    margin:0 auto;
}

@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}



/*bootsnippet*/


.area{
    background:#4e54c8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
   


</style>


