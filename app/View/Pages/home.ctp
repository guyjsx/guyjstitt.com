<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<body>
<div class="container">
      <div class="page-header">
        <h1>Welcome to My Page!</h1>
      </div>
      <div class="row border-bottom">

    <div class=" col-md-3 slide my-images crop slideRight">
    <img class="img-responsive" src="app/webroot/img/profile.jpg" alt="profile picture">
    </div>

    <div class ="col-md-4 box">
        <div class="slide slideUp">
        <h2>...an Accomplished <span class="my-label">Web Developer</span> and Manager</h2>

        <p> I am currently a Senior at the University of Louisville majoring in Computer Information Systems, with a concentration in Web-Development. I'm employed at CBSi and Restorative Justice Louisville as a Web Developer</p>
        </div>
     
        <ul class ="social">
          <li class = "socialSlide1"><a href="https://www.facebook.com/guyjstitt" class = "facebook" target = "_blank"> facebook sprite </a></li>
          <li class = "socialSlide2"><a href="https://twitter.com/GuyjStitt" class = "twitter" target ="_blank">twitter sprite</a></li>
          <li class = "socialSlide3"><a href="https://plus.google.com/106859996232584782611/posts" class = "google" target ="_blank">google sprite</a></li>
          <li class = "socialSlide4"><a href="http://www.linkedin.com/pub/guy-stitt/43/472/146" class = "linkedin" target ="_blank">linkedin sprite</a></li>
        </ul>
       
    </div>


     <div class ="col-md-4 slide slideLeft">


         <ul class="ul-left tags">
             <li ><span class ="title">Name</span> <span class="value"> Guy J. Stitt</span></li>
             <li ><span class ="title"> Age</span> <span class="value"> 21</span></li>
             <li ><span class ="title"> City</span> <span class="value"> Louisville</span></li>
             <li ><span class ="title"> State</span> <span class="value"> Kentucky</span></li>
             <li ><span class ="title"> Phone</span> <span class="value"> 502-333-4283</span></li>
         </ul>

       


     </div>
     </div>

    </div>




</body>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
   // now on the basis of scrollTop value show your div
     if(scrollTop > 200){
      $('.content').fadeIn('slow');
     }
     // and so on
    })
})
</script>