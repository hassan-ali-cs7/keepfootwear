<?php

if ($_POST["submit"]) {

      
      
     if (!$_POST['name']) {

       $error="<br />Please enter your name";

     }
      
     if (!$_POST['email']) {

       $error.="<br />Please enter your email address";

     }
     
      
     if (!$_POST['message']) {

       $error.="<br />Please enter a message";

     }
      
     if ($_POST['email']!="" AND !filter_var($_POST['email'],
FILTER_VALIDATE_EMAIL)) {
      
     $error.="<br />Please enter a valid email address";

     }
     
      
     if ($error) {

 $result='<div class="alert alert-danger"><strong>There were error(s)
in your form:</strong>'.$error.'</div>';

     } else {


      /* THE EMAIL WHERE YOU WANT TO RECIEVE THE CONTACT MESSAGES */
 if (mail("contact@keepfootwear.com", "Message from Your keepfootwear.com",


 
"Name: ".$_POST['name']."
Email: ".$_POST['email']." 
Message: ".$_POST['message'])) {
$result='<div class="alert alert-success"> <strong> Thank
you!</strong> We\'ll get back to you shortly.</div>';
} else {
$result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';
}
}
}
?>



<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Shoe Shop Website Designs: We build creative websites for shoe shops. We also provide SEO, social media and online marketing services to shoe shops"/>
    
    
    <title>Shoe Design Website: Websites, SEO and More</title>

       <!-- CSS Stylesheets -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/navbar.css" />
    <link rel="stylesheet" type="text/css" href="css/get-a-quote-form.css" />

  <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Lato|Raleway" rel="stylesheet">
    
  <!-- Favicon -->
   <link rel="icon" href="images/keepfootwear-favicon.jpg">
   
<!-- begin Talkwithlead code -->
<script type="text/javascript" src="https://widgets.talkwithlead.com/Scripts/js/Librarytwl.js"></script>
<script type="text/javascript">
var _Xyz_UserData = 'MjMwMzk=';
var _Xyz_AgentNew = 'KzkyMzE4MDAxMDE3OQ==';
var ___Twl = { "id": "XB6GWExSf64fKIpqc2RRy1gOgKtQ6bMGIY2MIKA0rCk", "version": "1.1" }; (function (window, document) {
var s1 = document.createElement('script');
s1.type = 'text/javascript';
s1.async = true;
s1.src = "https://widgets.talkwithlead.com/Scripts/js/javascript.js".replace(/[+]/g, '/').replace(/[=]/g, '.');
document.getElementsByTagName('head')[0].appendChild(s1);
})(window, document);
</script>
<!-- end Talkwithlead code -->
  </head>

 <body>


 <div class="topbanner">
  
   <nav class="navbar navbar-default navbar-static navbar-transparent" role="navigation">
      
      <div class="container">

        <div class="navbar-header">

        <a class="navbar-brand" href="http://keepfootwear.com">
        <img alt="Brand" src="images/keepfootwear-logo.png" class="logo"></a>

         
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=" .navbar-collapse">
      
                        <span class="sr-only">Toggle navigation </span>
          
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
          
                </button>

                 
        
        </div><!--end navbar-header-->


      
          <div class="collapse navbar-collapse" align="center">
      
                   <ul class="nav navbar-nav">

                    <li align="center"> <a href="http://keepfootwear.com/growth-tips.html">Growth Tips For Shoe Shops</a></li>

                    <li align="center"> <a href="http://keepfootwear.com/contact.php">Contact</a></li>
              
          
              </ul>
          
          </div><!--end navbar-collapse-->

      </div>

</nav><!--end nav-->


  <h1 align="center">I Help Shoe Shops <br /><span class="cursive">Get More Customers</span></h1>

      <div class="row">

          <div class="col-md-6 col-md-offset-3" id="result" align="center">

                 <!--- Form Success/ Failure Message will display here-->
             <p align="center"><strong><?php echo $result; ?> </strong></p>


          </div> <!--- /.col-md -->

      </div>  <!--- /.row -->

</div><!--end topbanner-->



<div id="growbusiness">

  <div class="container">

      <div class="row">

        <div class="col-md-6" align="center">

           <img src="images/grow-your-footwear-shop-img.jpg" alt="grow-your-coffee-show-img" class="img-responsive">

           <h2 class="article-name">How to Grow Your Shoe Shop Online in 5 Easy Steps</h2>

        </div><!--end col-md-6-->

        <div class="col-md-6" align="center" id="read-article">

           <button type="submit" class="btn btn-lg center-block articlelink" hvr-float-shadow><a href="http://keepfootwear.com/actionable-tips-to-maximize-your-coffee-shops-profit.html">Read the Article</button></a>

        </div><!--- /.col-md-->

      </div><!--- /.row-->

  </div><!--- /.container-->

</div><!--- /#grow-business-->


<div class="growsales"> 

        <p align="center">Focus on Shoe business while I take care of your online presence!</p>

</div><!--end growsales-->


<div id="morecustomers">

  <div class="container">

    <h3 align="center">I Help Shoe Shops With:</h3>

      <div class="row">

              <div class="col-md-4" align="center">

                  <a href="https://keepfootwear.com/website-design.html"><img src="images/shoe-design-website.jpg" alt="shoe-design-website" class="img-responsive"></a>

                  <a href="https://keepfootwear.com/website-design.html"><h2>Website Design</h2></a>

                  <p>We create professional and spectacular website designs for shoe shops. Have a look at some of our eye-catching designs.</p>

              </div>

              <div class="col-md-4" align="center">

                    <img src="images/seo-for-footwear-shop.jpg" alt="seo-for-shoe-shop-websites" class="img-responsive">

                        <h2>SEO</h2>
                          
                        <p>Your website should be found in top results when an online user is searching for the type of shoes you offer. We help in improving your website search ranking.</p>

              </div>

              <div class="col-md-4" align="center">

                   <img src="images/social-media.jpg" alt="social-media" class="img-responsive">

                        <h2>Social Media</h2>

                        <p>We take care of your social media presence. We keep your customers engaged and updated about your products and events on social media channels.</p>

              </div>

        </div><!--- /.row-->

    </div><!-- /.container-->

</div><!--- /.morecustomers-->



<!-- <div class="testimonials"> 

    <h4 align="center">Client Testimonials</h4>

      <div class="container">

          <div class="row">

             <div class="col-md-1"></div>

             <div class="col-md-5">

            <p align="center"><img src="images/client1.png" alt="happy-client" class="img-responsive"></p>

             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend quis augue nec efficitur. Fusce elit mauris, porttitor euismod viverra non, condimentum ut velit. Nunc in purus nibh. In non consectetur sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend quis augue nec efficitur. Fusce elit mauris, porttitor euismod viverra non, condimentum ut velit. Nunc in purus nibh. In non consectetur sapien. </p>

             <p class="client-review">- Mary Ann, Brewtiful</p>

             </div>

             <div class="col-md-5 client2">

            <p align="center"><img src="images/client2.png" alt="happy-client" class="img-responsive"></p>

             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend quis augue nec efficitur. Fusce elit mauris, porttitor euismod viverra non, condimentum ut velit. Nunc in purus nibh. In non consectetur sapien.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend quis augue nec efficitur. Fusce elit mauris, porttitor euismod viverra non, condimentum ut velit. Nunc in purus nibh. In non consectetur sapien. </p>

             <p class="client-review">- Elinor Olsen, Greenside Cafe</p>

             </div>

             <div class="col-md-1"></div>

          </div>

      </div>

</div>   -->
<!--- /.testimonials-->


<div class="portfolio">

  <h4 align="center">Some of My Work</h4>

  <div class="container">

      <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-4 col-sm-4" align="center">

                    <a href="https://comforttoes.com"><img src="images/portfolio-website-1.jpg" alt="portfolio-website" class="img-responsive"></a>


              </div>

              <div class="col-md-4 col-sm-4" align="center">

                    <a href="https://elegantsole.com"><img src="images/portfolio-website-2.jpg" alt="portfolio-website" class="img-responsive"></a>


              </div>

              <!-- <div class="col-md-4 col-sm-4 col-sm-4" align="center">

                   <a href="#"><img src="images/portfolio-website.jpg" alt="portfolio-website" class="img-responsive"></a>

              </div> -->

        </div><!--end row-->

    </div><!--end container-->

</div><!--end portfolio-->


<div class="request-quote" id="request-a-quote"> <br>

  <h4>Request a Quote</h4>

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> <br />


        <form action="https://keepfootwear.com" method="post"><br />
      

            <div align="center" class="form-group center-block">
              
                   <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $_POST['name']; ?>" />
                   
             
           </div>

            <div align="center" class="form-group center-block">
               
                      <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $_POST['email']; ?>" />
                      
                
            </div>



            <div align="center" class="form-group center-block">

                <textarea class="form-control" name="message"><?php echo $_POST['message']; ?> </textarea><br /> <br />

            </div>
                    
                    <br>

                    <p align="center" ><input type="submit" name="submit" class="btn btn-success btn-lg submit" value="Request a Quote" /> </p><br />

          </form> <!--- /form-->

      </div><!--- /.col-md-->
    
    </div><!--- /.row-->


        <!-- <div class="row">

          <div class="col-md-6 col-md-offset-3"> <br />
            <p class="havewebsite" align="center">If you already have an existing website and <br />you'd like to see how I can help you, <a href="http://keepfootwear.com/growth-tips.html">click here</a></p>
            
            <br>

          </div>

        </div> -->  <!--- /.row-->  
    
    </div><!--- /.container--><br><br><br>
 
</div><!--- /.request-quote-->

        
        <div class="social-links" align="center">

            <a href="https://www.linkedin.com/company/keep-footwear" target="_blank"><svg  width="35" height="35" viewBox="0 0 24 24">
            <path fill="#454867" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>

      </div> <!--end social-link-->



<div class="exclusive-group" align="center">

      <p>Join my Exclusive Facebook Group for Shoe Shop Owners - <a href="https://www.facebook.com/groups/2470976386554095" target="_blank"><span style="color: white">Click here to apply</span></a></p>

</div><!--end exclusive-group-->



<div id="footer" align="center">

            <a href="http://keepfootwear.com/growth-tips.html">GROWTH TIPS</a>
            <a href="http://keepfootwear.com/about.html">ABOUT ME</a>
            <a href="http://keepfootwear.com/contact.php">CONTACT</a>



</div><!--end of footer-->

<p align="center" class="text-muted copyright">&copy; keepfootwear.com</p> 


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- <script src="js/bootstrap.min.js"></script> -->

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>

</html>
