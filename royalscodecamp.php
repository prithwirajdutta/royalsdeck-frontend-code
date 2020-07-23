


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="navbarcolor.css">
<style type="text/css">

#msg{
      padding:0;
      margin:0;
      position:fixed;
      bottom:-350px;
      right:10px;
      background-color:white;
      max-width:300px;
      height:400px;
      border:1px solid #d9534f;
   }
   #msg-top{
      background-color:#d9534f;
      height:50px;
      width:100%;
      margin-bottom:20px;
      cursor:pointer;
   }
   #msgboxbtn:hover{
      cursor:pointer;
   }
   #connectbtn{
    border-radius:20px;
   }
   #connectbtn:hover{
    cursor:pointer;
   }
  #vibe{
    max-width:500px;
    background-color:white;
    border-radius:20px;
    padding:0;
  }
  #vibetext{
    width:100%;border-radius:20px 0px 0px 20px;border:white;
  }
  #vibebtn{
    width:100%;border-radius:0px 20px 20px 0px;
  }
  #vibebtn:hover{cursor:pointer;}
   @media screen and (max-width:640px) {
    #navbarSupportedContent{
        background-color:white;
    }
    #brd{
        display:none;
    }
    #vibe{
      border-radius:20px;
    }
    #vibetext{
      border-radius:20px 20px 0px 0px;
    }
    #vibebtn{
      border-radius:0px 0px 20px 20px;
    }
   }
    button,#submitbutton:hover{cursor:pointer;}
    #git{color:white;}
    #you{color:white;}
    #fb{color:white;}
    #lid{color:white;}
    #tw{color:white;}
    #git:hover{color:#EBEDEF;}
    #you:hover{color:#EBEDEF;}
    #lid:hover{color:#EBEDEF;}
    #tw:hover{color:#EBEDEF;}
    #fb:hover{color:#EBEDEF;}
    .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/refresh.gif') center no-repeat #fff;
}
#shadow{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
 /*  @media only screen and (max-width: 600px) {
       #chessimg{
           display:none;
       }
            .jumbotron{
               /* background:url('img/header.png')no-repeat !important;
                background-size:100% 40% !important; */
             /*   background-image:linear-gradient(to left,#288FF5,#7957E7,#401FA7) !important;width:100% !important;color:white !important;
                min-height:600px !important;
            }
           
           .nav-link{
               color:#2F363F!important;
               background-color:white!important;
           }
           #headtext{
               margin-left:10px!important;
               margin-top:110px !important;
           }
           #ctn1{
               margin-bottom:200px!important;
           }
           #ctnin1{
               margin-left:20px!important;
           }
  
      
        }*/
  </style>
  <head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107498769-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107498769-1');
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
  <nav id="nav1" class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="index.php" style="text-decoration:none;"><h4 style="padding:10px;color:#2F363F;"><b><i style="font-size:50px;color:#FAC42F;" class="fas fa-crown"></i> <span style="color:white;" id="brd">ROYALS DECK</span></b></h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" id="toggler" aria-hidden="true" style="font-size:30px;"></i></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow-x:hidden;padding:20px;border-radius:20px;">
     <!--<ul class="navbar-nav ml-auto" style="margin-left:950px;">
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
        </ul>-->
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" id="nav-link6"  style="color:black;text-decoration:none;" target="_blank" href="covid19.php">Covid19</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" id="nav-link2"  style="color:black;text-decoration:none;" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link3"  style="color:black;text-decoration:none;" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link4" style="color:black;text-decoration:none;" href="royalscodecamp.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link5" style="color:black;text-decoration:none;" href="products.php">Products</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" id="nav-link1" style="color:black;text-decoration:none;" href="startupstories.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link7"  style="color:black;text-decoration:none;" target="_blank" href="salesforce.php">Salesforce</a>
          </li>
        </ul>
      </div>
    </nav> 
  </head>
  <body style="padding-top:100px;">
  <img src="img/royalscodecamp.png" style="width:100%;"/><br><br>
<div class="container" style="padding:20px;margin-top:40px;">
<center><h4 style="color:#7D3C98;"><b>Trending Courses</b></h4></center><br>
  <div class="row">
             <div class="col-md-4"><div class="card" id="shadow" data-aos="fade-up" data-aos-duration="1000">
              <div class="card-body">
              <iframe width="100%" height="200px" src="https://www.youtube.com/embed/0rkMTYrP9Es?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br>
                <center>
                <h4>Weather App</h4>
                <p>Build Weather app,learn about Api.</p><br>
                
                <br><br></center>
              </div>
            </div></div><br>
            <div class="col-md-4"><div class="card" data-aos="fade-up" data-aos-duration="2000">
              <div class="card-body" id="shadow">
             <iframe width="100%" height="200px" src="https://www.youtube.com/embed/PhK5YpSeE2k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
                <center>
                <h4>Polling Application</h4>
                <p>Learn to build a polling app.</p><br>
             
                <br><br></center>
            </div></div><br>
          </div>
           <div class="col-md-4"><div class="card" data-aos="fade-up" data-aos-duration="3000">
              <div class="card-body" id="shadow">
             <iframe width="100%" height="200px" src="https://www.youtube.com/embed/jdWcOe-W2Bk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
                <center>
                <h4>Pokemon App</h4>
                <p>Learn to build a pokemon app.</p><br>
             
                <br><br></center>
              </div>
            </div></div><br>
          </div>
  </div>
</div>
<div class="container" style="padding:20px;margin-top:40px;">
<center><h4 style="color:#7D3C98;"><b>Top Courses</b></h4></center><br>
  <div class="row">
    <div class="col-md-4">
      <a href="hms-course.php" style="text-decoration:none;"><div data-aos="fade-up"
     data-aos-duration="1000" class="card">
       <div class="card-img-top" style="background-color:#2E86C1;color:white;"><center><h1 style="font-size:80px;margin:60px 0px;"><i class="fab fa-php"></i></h1></center></div>
        <div class="card-body">
         <center>
          <h3 style="color:#2E86C1;">Php</h3>
          <p style="color:#2E86C1;">Learn Web Development using Php,Mysqli and Bootstrap by creating a real time project.</p></center>
        </div>
      </div></a><br>
    </div>
      <div class="col-md-4">
      <a href="reactjs-course.php" style="text-decoration:none;"><div data-aos="fade-up"
     data-aos-duration="2000" class="card">
       <div class="card-img-top" style="background-color:#E91E63;color:white;"><center><h1 style="font-size:80px;margin:60px 0px;"><i class="fab fa-react"></i></h1></center></div>
        <div class="card-body">
         <center>
          <h3 style="color:#E91E63;">React Js</h3>
          <p style="color:#E91E63;">Learn React Js from beginner to advanced building real time apps.Weather App project included.</p></center>
        </div>
      </div></a><br>
    </div>
     <div class="col-md-4">
      <a href="javascript-course.php" style="text-decoration:none;"><div data-aos="fade-up"
     data-aos-duration="1000" class="card">
       <div class="card-img-top" style="background-color:#F39C12;color:white;"><center><h1 style="font-size:80px;margin:60px 0px;"><i class="fab fa-js-square"></i></h1></center></div>
        <div class="card-body">
         <center>
          <h3 style="color:#F39C12;">JavaScript</h3>
          <p style="color:#F39C12;">Learn coding in JavaScript using real examples.Also learn to use latest JS Libraries.</p></center>
        </div>
      </div></a><br>
    </div>
</div>
    <center><a href="courses.php" style="border-radius:20px;background-color:#7D3C98;border-color:#7D3C98;" class="btn btn-info"/>View All</a></center>
    <br><br>
<div class="container">
           <div class="container" style="padding:30px;background-color:#F8F9F9;">
                <h4 style="color:#7D3C98;"><b>About Royals CodeCamp</b></h4><br>
                <p style="text-align:justify;">Royals CodeCamp is an Open Source Video Course Contribution Platform.</p><hr>
                <h4 style="color:#7D3C98;"><b>Sponsor</b></h4><br>
                <p style="text-align:justify;">Mail us your course sponsorship information to below email address.</p><hr>
                <h4 style="color:#7D3C98;"><b>Contribute Courses</b></h4><br>
                <p>Send us your courses through "We Transfer" using below email id.</p>
                <p><span style="color:#7D3C98;font-family: 'Fredoka One', cursive;"><i class="fas fa-envelope-open-text"></i> prithwilifesolutions@gmail.com</span></p>
                <p><b>Why contribute ?</b></p>
                <ul>
                    <li>We do not monitize our YouTube videos through AdSense.</li>
                    <li>Your contributions will be voluntory and free, you won't get paid.</li>
                    <li>You will get exposure as a online trainer through our platform.</li>
                    <li>You shall receive a certificate from Royals CodeCamp on Successful contribution of a video tutorial.</li>
                    <li>On Contribution of 3 or more videos you will be receiving a Premium Certificate.</li>
                    <li>You can also promote your paid or free courses or products in the process.</li>
                    <li>Absolute course attibution to trainer for his/her own course.</li>
                    <li>Incase we have a sponsor or incase you have a sponsor there will be common sharing of profit which is 50%</li>
                </ul>
                <p><b>Note:</b> We request you to provide only high quality content inorder to be shared on our channel.</p>
            </div>
        </div>
    </div>
    
</div>
<br><br><br><br>

<!--************Footer***************-->
<footer style="margin:0px;background-image:linear-gradient(to left,#288FF5,#7957E7,#401FA7);height:350px;width:100%;">
      <img src="img/wave.png" width="100%" height="120px"/><br> 
      <div class="container" data-aos="zoom-out-right"><br>
           <div class="row">
               <div class="col-md-4">
                    <h1 id="social">
                            <a style="color:white;" href="https://www.linkedin.com/in/prithwiraj-dutta-8a861a120/" id="lid" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a style="color:white;" href="https://www.youtube.com/channel/UCLSxrKkOZdHfh0jVkRwJiYw" id="you" target="_blank"><i class="fab fa-youtube-square"></i></a>
                            <a style="color:white;" href="https://github.com/prithwirajdutta" id="git" target="_blank"><i class="fab fa-github-square"></i></a>
                        </h1>
                        <span style="color: white;"><b>Royals Deck</b><br>A Prithwiraj Enterprise</span>
               </div>
                <div class="col-md-6"></div>
           </div>
       </div>
    </footer>
<!-- *** Msg Box *** -->
<!--<div id="msg" class="container">
   <div id="msg-top" style="padding:10px 0px;"><center><h5 style="color:white;"><i class="far fa-comments"></i> Leave a Message!</h5></center></div>
   <div style="padding:5px;">
   <form class="form-group" id="add_note_form">
      <input type="text" name="name" id="name" placeholder="enter name" class="form-control" required /><br>
      <input type="text" name="email" id="email" placeholder="enter email" class="form-control" required /><br>
      <input type="text" name="contact" id="contact" placeholder="enter contact" class="form-control" required /><br>
      <textarea rows="2" type="text" id="message" name="message" placeholder="enter message" class="form-control" required /></textarea><br>
      <input type="submit" id="msgboxbtn" style="width:100%;" value="Send Message" class="btn btn-danger" name="msg_submit">
   </form></div>
</div>-->
<!-- *** *** -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--************Javascript Libraries***************-->
<script type = "text/javascript"
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<!-- <script type="text/javascript">
   $(document).ready(function(){
      var c=1;
      $("#msg-top").click(function(){
         c++;
         if(c%2==0)
         $("#msg").animate({bottom:"0px"},1000);
       else
         $("#msg").animate({bottom:"-350px"},1000);
      });
   });
    /* Add Message */
   var add_note_form = document.querySelector("#add_note_form");
          add_note_form.addEventListener("submit",function(e){
            e.preventDefault();
            add_notification();
          });
          function add_notification(){
            const name = document.querySelector("#name").value;
            const email = document.querySelector("#email").value;
            const contact = document.querySelector("#contact").value;
            const message = document.querySelector("#message").value;
            var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  swal({
                        title: "Thanks for Leaving a message !",
                        text: this.responseText,
                        icon: "success",
                      });
                }
              }
          xhttp.open("POST", "function.php", true);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhttp.send("name="+name+"&email="+email+"&contact="+contact+"&message="+message+"&msg_submit=msg_submit");
          }
</script>-->


<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    $(document).ready(function(){
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("nav1").style.background = "white";
        document.getElementById("nav1").style.boxShadow = " 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";
        document.getElementById("toggler").style.color = "#2F363F";
        document.getElementById("nav-link1").style.color = "#2F363F";
        document.getElementById("nav-link2").style.color = "#2F363F";
        document.getElementById("nav-link3").style.color = "#2F363F";
        document.getElementById("nav-link4").style.color = "#2F363F";
        document.getElementById("nav-link5").style.color = "#2F363F";
        
      } 
      else
      {
        document.getElementById("nav1").style.background = "transparent";
        document.getElementById("nav1").style.boxShadow = "none";
       
      } 
        window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("nav1").style.background = "white";
        document.getElementById("nav1").style.boxShadow = " 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";
        document.getElementById("toggler").style.color = "#2F363F";
        document.getElementById("nav-link1").style.color = "#2F363F";
        document.getElementById("nav-link2").style.color = "#2F363F";
        document.getElementById("nav-link3").style.color = "#2F363F";
        document.getElementById("nav-link4").style.color = "#2F363F";
        document.getElementById("nav-link5").style.color = "#2F363F";
        
      } 
      else
      {
        document.getElementById("nav1").style.background = "transparent";
        document.getElementById("nav1").style.boxShadow = "none";
       
      } 
    }
    });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/2daac97524.js"></script>
		<!-- <script src="http://localhost:3002/dist/aos.js"></script> -->

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>

		<script>
			hljs.initHighlightingOnLoad();

			$('.hero__scroll').on('click', function(e) {
				$('html, body').animate({
					scrollTop: $(window).height()
				}, 1200);
			});
		</script>
  </body>
   <!--     <div class="se-pre-con"></div>
 <script>
$(window).load(function() {
		// Animate loader off screen
        setTimeout(function(){
		$(".se-pre-con").fadeOut("slow");
        },500);
});</script> -->
</html>
