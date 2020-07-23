
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="prism.css"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2daac97524.js"></script>
   <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107498769-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107498769-1');
</script>

    <title>Royals Deck UI Library</title>
  </head>
  <style>
    ul{
        position:absolute;
        left:-30px;
        top:120px;
        width:100%;
    }
    ul li{
        padding:10px;
        border-bottom:1px solid white;
        color:white;
        width:100%;
        list-style: none;
    }
    ul li a{
        text-decoration:none;
        color:white;    
    }
      ul li a:hover{
        text-decoration:none;
        color:white;    
    }
    ul li:hover{
        background-color:rgba(255, 255, 255, 0.2);
        cursor:pointer;
    }
    ::-webkit-scrollbar {
        width: 20px;
        background-color:#288FF5;
        }
        /* Track */
    ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: white; 
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    #details{
        position:absolute;
        right:0px;
        top:0px;
        padding-left:100px;
        padding-top:30px;
        width:100%;
        height:100%;
        overflow-y:scroll;
    }
     
  #phone{
                display:none;
            }    
            #desktop{
                display:block;
            }
  @media only screen and (max-width: 600px) {
 #phone{
                display:none;
            }    
            #desktop{
                display:block;
            }
     @media only screen and (max-width: 600px) {
            #phone{
                display:block;
            }    
            #desktop{
                display:none;
            }
      
        }
   }
   .card{
    	position:relative;
    	width:400px;
        height:500px;
        margin:50px;
        background-color:#273746;
        border-radius:20px;
        overflow:hidden;
    }
	.card:before{
    	content:'';
    	background-image:linear-gradient(to right,#15FC0A,#38A832);
        position:absolute;
        top:-100px;
        right:-100px;
        width:100%;
        height:100%;
        clip-path: circle(40%);
        transition:.5s ease-in-out;
        z-index:1;
    }
    .card:hover:before{
    	cursor:pointer;
    	top:-250px;
        right:-250px;
        clip-path: circle(30%);
    }
    .card:after{
    	content:'NIKE';
        font-size:10em;
        position:absolute;
        bottom:50px;
        left:20px;
        font-style:italic;
        font-weight:1000;
        color:rgb(128, 139, 150 ,0.1);
    }
    #img1{
        position:absolute;
        top:50px;
        right:20px;
        width:330px;
        height:300px;
        z-index:2;
        transition:.5s ease-out;
    }
    #img1:hover{
    cursor:pointer;
    }
     .card:hover > #img1{
        transform:translateY(-10%);
     }
     #n1{
     	position:absolute;
        left:50px;bottom:50px;
     	color:white;
        z-index:10;
        transition:1s ease-in;
     }
     img1:hover > #n1{
     	color:black;
     }
     #size{
     	padding:5px;
        background-color:white;
        color:black;
        border-radius:20px;
        margin:2px;
     }
       #color{
     	padding:8px;
        margin:3px;
        clip-path:circle(30%);
     }
     #button{
     	background-color:white;
        padding:10px 20px;
        border-radius:30px;
        color:black;
        text-decoration:none;
     }
  </style>
  <body>
   <div id="phone" style="margin-top:50px;">
        <center>
            <h3>This page is for Desktop Only</h3><br>
            <a href="../index.php" class="btn btn-outline-info" style="border-radius:20px;">Return</a>
        </center>
    </div>
    <div id="desktop">
        <div style="overflow-y:scroll;background-image:linear-gradient(to left,#288FF5,#7957E7);height:100%;width:300px;position:fixed;left:0px;top:0px;padding-top:40px;">
           <center>
              
                <h3 style="color:white;"><i style="font-size:40px;color:#FAC42F;" class="fas fa-crown"></i> Royals Deck</h3><span style="color:white;font-size:10px;line-height:0px;">UI ToolKit</span>
                <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="uitoolkit.php">Getting Started</a></li>
                <li><a href="floatingeffect.php">Floating Effect</a></li>
                <li><a href="cards.php">Cards</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="buttons.php">Buttons</a></li>
                <li><a href="colorpicker.php">Color Picker</a></li>
                <li><a href="navbar.php">Navbar</a></li>
                <li><a href="progressbar.php">Progressbar</a></li>
                <li><a href="talk.php">Chat Window</a></li>
                 <li><a href="modal.php">Modal</a></li>
                 <li><a href="popup.php">Pop Up</a></li>
                 <li><a href="loadingeffect.php">Loading Effect</a></li>
            </ul>
           </center>
        </div>
            
    
    <div class="container" style="position:absolute;top:30px;right:10px;width:1000px;">
     
<div class="card">
	<img id="img1" src="https://img.pngio.com/newton-running-newton-running-company-athletic-shoe-png-1346_1112.png"/>
  	<br>
    	<div id="n1">
    	<h1>Nike Shoes</h1>
        <label><b style="color:white;">Size : </b><span id="size"><b>6</b></span><span id="size"><b>7</b></span><span id="size"><b>8</b></span></label>
       <br> <br><label><b style="color:white;">Color : </b><span id="color" style="background-color:#00A2FF;"></span><span id="color" style="background-color:#FC0AD7;"></span>
       <span id="color" style="background-color:#B6FF00;"></span>
       <span id="color" style="background-color:#FFE000;padding:8px;border-radius:50%"></span>
       </label>
       <br><br><br>
        <a href="#" id="button">Buy Now</a>
        </div>
</div>

     <br><br>
        <div style="background-color:#273746;width:100%;padding:20px;border-radius:20px;">
             <pre>
        <xmp style="color:white;">
       <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<style>
	.card{
    	position:relative;
    	width:400px;
        height:500px;
        margin:50px;
        background-color:#273746;
        border-radius:20px;
        overflow:hidden;
    }
	.card:before{
    	content:'';
    	background-image:linear-gradient(to right,#15FC0A,#38A832);
        position:absolute;
        top:-100px;
        right:-100px;
        width:100%;
        height:100%;
        clip-path: circle(40%);
        transition:.5s ease-in-out;
        z-index:1;
    }
    .card:hover:before{
    	cursor:pointer;
    	top:-250px;
        right:-250px;
        clip-path: circle(30%);
    }
    .card:after{
    	content:'NIKE';
        font-size:10em;
        position:absolute;
        bottom:50px;
        left:20px;
        font-style:italic;
        font-weight:1000;
        color:rgb(128, 139, 150 ,0.1);
    }
    #img1{
        position:absolute;
        top:50px;
        right:20px;
        width:330px;
        height:300px;
        z-index:2;
        transition:.5s ease-out;
    }
    #img1:hover{
    cursor:pointer;
    }
     .card:hover > #img1{
        transform:translateY(-10%);
     }
     #n1{
     	position:absolute;
        left:50px;bottom:50px;
     	color:white;
        z-index:10;
        transition:1s ease-in;
     }
     img1:hover > #n1{
     	color:black;
     }
     #size{
     	padding:5px;
        background-color:white;
        color:black;
        border-radius:20px;
        margin:2px;
     }
       #color{
     	padding:8px;
        margin:3px;
        clip-path:circle(30%);
     }
     #button{
     	background-color:white;
        padding:10px 20px;
        border-radius:30px;
        color:black;
        text-decoration:none;
     }
</style>
<body>

<div class="card">
	<img id="img1" src="https://img.pngio.com/newton-running-newton-running-company-athletic-shoe-png-1346_1112.png"/>
  	<br>
    	<div id="n1">
    	<h1>Nike Shoes</h1>
        <label><b style="color:white;">Size : </b><span id="size"><b>6</b></span><span id="size"><b>7</b></span><span id="size"><b>8</b></span></label>
       <br> <br><label><b style="color:white;">Color : </b><span id="color" style="background-color:#00A2FF;"></span><span id="color" style="background-color:#FC0AD7;"></span>
       <span id="color" style="background-color:#B6FF00;"></span>
       <span id="color" style="background-color:#FFE000;padding:8px;border-radius:50%"></span>
       </label>
       <br><br><br>
        <a href="#" id="button">Buy Now</a>
        </div>
</div>

</body>
</html>

        </xmp>
      </pre>
        </div>
    </div>
          </div>
        
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="prism.js"></script>
  </body>
</html>