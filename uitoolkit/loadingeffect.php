<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <li><a href="nikediv.php">Nike Style Card</a></li>
                <li><a href="cards.php">Cards</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="buttons.php">Buttons</a></li>
                <li><a href="colorpicker.php">Color Picker</a></li>
                <li><a href="navbar.php">Navbar</a></li>
                <li><a href="progressbar.php">Progressbar</a></li>
                <li><a href="talk.php">Chat Window</a></li>
                 <li><a href="modal.php">Modal</a></li>
                  <li><a href="popup.php">Pop Up</a></li>
            </ul>
           </center>
        </div>
            
    
    <div class="container" style="position:absolute;top:30px;right:10px;width:1000px;">
        <center>
            <a href="../uitoolkit/loadingdemo.php" class="btn btn-outline-info" target="_blank" style="border-radius:20px;margin-top:50px;">View Demo</a><br>
        </center>
    </div>
          </div>
        <br>
        <xmp style="background-color:#2C3E50;color:white;padding:20px;width:1000px;height:400px;overflow:scroll;position:absolute;top:200px;right:40px;">
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
	div{
    	background-color:#D6DBDF;
        width:400px;height:15px;
        animation:pulse 1s infinite ease-in-out;
    }
    div:nth-child(1){
    width:200px;
    }
     div:nth-child(2){
    width:230px;
    }
     div:nth-child(3){
    width:290px;
    }
     div:nth-child(4){
    width:350px;
    }
    @keyframes pulse{
    	0%{
        background-color:#F2F4F4;
        }
        50%{
        background-color:#D6DBDF;
        }
    	100%{
        background-color:#F2F4F4;
        }
    }
    #box{
    	width:200px;height:200px;
        background-color:#D6DBDF;
    }
</style>
<body style="padding:20px;">
<div id="box"></div>
<br>
<div></div>
<br>
<div></div>
<br>
<div></div>
<br>
<div></div>
<br>
<div></div>
<br>
<div></div>
<br>

</body>
</html>

        </xmp>
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>