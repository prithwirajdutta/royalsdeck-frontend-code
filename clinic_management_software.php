


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="navbarcolor.css">
<style type="text/css">
#productdiv:hover{
    cursor:pointer;
    background-image: linear-gradient(to right, #EBEDEF, white);
}
#productdiv,#productdiv2{
    margin-bottom:30px;
}
#productdetails{
     position:absolute;
     right:10px;
     top:30px;
     width:250px;
}
#desktop{
    display:block;
}
#mobile{
    display:none;
}
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

   @media only screen and (max-width: 600px) {
 
       #productdiv2{
           margin-top:300px;
       }
       #productdetails{
     position:absolute;left:10px;bottom:10px;width:100%;margin-top:300px;
    }
            #desktop{
                display:none !important;
            }
            #mobile{
                display:block!important;
            }
            .jumbotron{
               /* background:url('img/header.png')no-repeat !important;
                background-size:100% 40% !important; */
                background-image:linear-gradient(to left,#288FF5,#7957E7,#401FA7) !important;width:100% !important;color:white !important;
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
  
      
        }
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
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
   <nav id="nav1" class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="index.php" style="text-decoration:none;"><h4 style="padding:10px;color:#2F363F;"><b><i style="font-size:50px;color:#FAC42F;" class="fas fa-crown"></i> <span style="color:black;" id="brd">ROYALS DECK</span></b></h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars" id="toggler" aria-hidden="true" style="color:black;font-size:30px;"></i></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow-x:hidden;">
     <!--<ul class="navbar-nav ml-auto" style="margin-left:950px;">
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
        </ul>-->
        <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" id="nav-link1" style="color:black;text-decoration:none;" href="startupstories.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link3"  style="color:black;text-decoration:none;" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link4" style="color:black;text-decoration:none;" href="courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link4" style="color:black;text-decoration:none;" href="products.php">Products</a>
          </li>
          
        </ul>
      </div>
    </nav> 
  </head>
  <body style="padding-top:120px;">
<br>
<!--
<div class="container-fluid"">
   <div class="row">
   <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card" id="productdiv" style="height:280px;width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:0px;">
            <img id="desktop" src="https://images.pexels.com/photos/1749303/pexels-photo-1749303.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:280px;height:200px;border-radius:10px;position:absolute;left:-50px;top:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
             <img id="mobile" src="https://images.pexels.com/photos/1749303/pexels-photo-1749303.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top"/>
            <div class="container" id="productdetails">
            
                <h4>ITSM Platform</h4>
                <ul>
                    <li>Manage Stories</li>
                    <li>Analyse ticket load by region or month.</li>
                    <li>Generate reports.</li>
                </ul>
                <a href="#" class="btn btn-primary" style="background-image: linear-gradient(to right, red , yellow)!important;border-radius:20px;border:none;"/>Coming Soon</a>
            </div><br><br>
        </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card" id="productdiv2" style="height:280px;width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:0px;">
            <img id="desktop" src="https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:280px;height:200px;border-radius:10px;position:absolute;left:-50px;top:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
             <img id="mobile" src="https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top"/>
            <div class="container" id="productdetails">
            
                <h4>School 360</h4>
                <ul>
                    <li>Notification</li>
                    <li>Staff Management</li>
                    <li>Student Management</li>
                    <li>Fee Payment</li>
                </ul>
                <a href="#" class="btn btn-primary" style="background-image: linear-gradient(to right, red , yellow)!important;border-radius:20px;border:none;"/>Coming Soon</a>
            </div><br><br>
        </div>
    </div>
       <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card" id="productdiv2" style="height:280px;width:100%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border:0px;">
            <img id="desktop" src="https://images.pexels.com/photos/3167310/pexels-photo-3167310.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="width:280px;height:200px;border-radius:10px;position:absolute;left:-50px;top:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
             <img id="mobile" src="https://images.pexels.com/photos/3167310/pexels-photo-3167310.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top"/>
            <div class="container" id="productdetails">
            
                <h4>Inventory 360</h4>
                <ul>
                    <li>Manage Resources</li>
                    <li>Profit and Loss Statement</li>
                    <li>Reports</li>
                </ul>
                <a href="#" class="btn btn-primary" style="background-image: linear-gradient(to right, red , yellow)!important;border-radius:20px;border:none;"/>Coming Soon</a>
            </div><br><br>
        </div>
    </div>
   </div>
</div>-->
<div class="container" style="padding:20px;margin-top:40px;">
    
    <img class="card-img-top" src="img/royalsclinicnew.jpg"/><br><br>
    <h3 style="color:#5B2C6F;"><b>Clinic Management Software</b></h3></center><br>
    <img class="card-img-top" src="img/hms1.PNG"/><br><br>
    <img class="card-img-top" src="img/hms2.PNG"/><br><br>
    <img class="card-img-top" src="img/hms3.PNG"/><br><br>
    <img class="card-img-top" src="img/hms4.PNG"/><br><br>
    <img class="card-img-top" src="img/hms5.PNG"/><br><br>
    <img class="card-img-top" src="img/hms6.PNG"/><br><br>
    <img class="card-img-top" src="img/hms7.PNG"/><br><br>
    <img class="card-img-top" src="img/hms8.PNG"/><br><br>
    <img class="card-img-top" src="img/hms9.PNG"/><br><br>
    <img class="card-img-top" src="img/hms10.PNG"/>
<br><br><hr><br>
    
 </div>
<br><br><br><br><br><br><br><br><br><br>
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
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
    <!--************Javascript Libraries***************-->
<!--<script type = "text/javascript"
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>-->
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
