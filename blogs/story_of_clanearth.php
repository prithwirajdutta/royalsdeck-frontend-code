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
  #steve:hover{
      cursor: pointer;
      top:-20px!important;
      left:0px!important;
       transition: left 1s;
       transition-timing-function: linear;
  }
   @media only screen and (max-width: 600px) {
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
        .button {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #F21152;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
          }

          .button:hover {background-color: #F62964}

          .button:active {
            background-color: #F21152;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
   <nav id="nav1" class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="../index.php" style="text-decoration:none;"><h4 style="padding:10px;color:#2F363F;"><b><i style="font-size:50px;color:#FAC42F;" class="fas fa-crown"></i> <span style="color:black;" id="brd">ROYALS DECK</span></b></h4></a>
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
            <a class="nav-link" id="nav-link1" style="color:black;text-decoration:none;" href="../startupstories.php">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link3"  style="color:black;text-decoration:none;" href="../portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link4" style="color:black;text-decoration:none;" href="../courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-link5" style="color:black;text-decoration:none;" href="../products.php">Products</a>
          </li>
        </ul>
      </div>
    </nav> 
  </head>
  <body style="padding-top:90px;">
<br>
<div class="container" style="padding:20px;margin-top:40px;">
   <img id="productimg" src="blogimg/clanearth5.png" style="width:100%;min-height:600px;"/><br><br><br><br>
   <center><a href="https://www.clanearth.com" target="_blank" style="text-decoration: none;color:white;" class="button"/>Buy Now</a></center>
   <br><br><br><br>
   <center><h1 style="color:#5B2C6F;">Story of Clan Earth</h1></center>
   <br>
   <p style="font-size:25px;text-align:justify;">
    Clan Earth, a startup which not only makes India's first plastic-free backpacks in Kolkata thus supporting Make in India but also plants 5 trees per bag bought from them. They make these beautiful, highly functional bags out of sustainable fabrics. 
Most of the bags in India are made out of polyester, which is a kind of plastic and then leather, which comes out of a cruel, chemical dependent industry. There's also PU Leather, which has been in trend but it is as harmful or even more than leather because it is made out of Poly-Utherane (PU) or PVC, which is touted to be the worst kind of plastic that there is. Polyester/Plastic is not just a menace because of the massive pollution it causes but because it is made out of crude oil, a non-renewable resource & also causes micro-plastic pollution, which is affecting all animals in the food chain including us humans.<br><br>
Clan Earth fights against this plastic menace by carefully replacing each plastic element of a bag with sustainable materials. They use canvas for their outer body fabrics, high quality cotton interlinings as their inner fabric, antique brass metal fittings, YKK branded metal chains & cotton webbing. But not just that, they have also made these bags thoughtfully with tons of pockets and classy looks. They are bringing together style and sustainability.
Talking about how they make their bags, the founders said that they didn't want to just brand and sell bags but create a company that solves social & environmental issues. They work with highly experienced craftsmen here in Kolkata to manufacture their bags & are also training college dropouts from underprivileged communities to become skilled craftsmen. They want to fight poverty with their social enterprise. <br><br>
Their initiative, 'Models of Clan Earth' is unique & highly creative. So, when they thought about modelling their bags, they chose to model with the young adults in the slums of Kolkata in the gullies of Kolkata. so as to boost their confidence, give them a new avenue. It is an initiative to create more and diverse opportunities for them too.<br><br>
They even name their backpacks after Endangered & Vulnerable animals such as Koala and Amur so that while using them through the day, people get reminded of the animals and stay a bit more connected to nature.
Even with all these innovation things in place, the best thing about them is that to restore the planet, they plant 5 trees per product sold and are India's first company to do so. Planting is extremely close to their heart and also at the core of their start-up and hence they took care to do it in the most responsible manner. They work with some of the oldest and a few new Reforestation Organizations to help plant and nurture the trees. They have planted 500 trees already.
 They have just launched their website and are active on Instagram. Check them out here:
 <br><br>
<b>Website:</b> <a href="https://www.clanearth.com" target="_blank">www.clanearth.com</a><br><br>
<b>Instagram: </b><a href="https://www.instagram.com/clanearth" target="_blank">www.instagram.com/clanearth</a>

   
    <br></p>
</div>
<br>
<!--************Footer***************-->
<footer style="margin:0px;background-image:linear-gradient(to left,#288FF5,#7957E7,#401FA7);height:350px;width:100%;">
      <img src="../img/wave.png" width="100%" height="120px"/><br> 
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
<script>
  var images = new Array ('blogimg/clanearth5.png','blogimg/clanearth4.png', 'blogimg/clanearth2.png', 'blogimg/clanearth3.png');
  var index = 1;

  function rotateImage()
  {
    $('#productimg').fadeOut('fast', function()
    {
      $(this).attr('src', images[index]);

      $(this).fadeIn('fast', function()
      {
        if (index == images.length-1)
        {
          index = 0;
        }
        else
        {
          index++;
        }
      });
    });
  }
  $(document).ready(function(){
   setInterval(rotateImage,4500);
  })

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

