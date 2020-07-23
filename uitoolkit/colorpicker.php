<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107498769-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107498769-1');
</script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2daac97524.js"></script>
   

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
        <span style="background-color:#00AAB8;width:200px;height:200px;float:left;padding:50px;"><p>#00AAB8</p></span>
        <span style="background-color:#06D1E1;width:200px;height:200px;float:left;padding:50px;"><p>#06D1E1</p></span>
         <span style="background-color:#07C34E;width:200px;height:200px;float:left;padding:50px;"><p>#07C34E</p></span>
          <span style="background-color:#1EF36F;width:200px;height:200px;float:left;padding:50px;"><p>#1EF36F</p></span>
           <span style="background-color:#5E06A8;width:200px;height:200px;float:left;padding:50px;"><p>#5E06A8</p></span>
           <span style="background-color:#870BEF;width:200px;height:200px;float:left;padding:50px;"><p>#870BEF</p></span>
           <span style="background-color:#FEFE76;width:200px;height:200px;float:left;padding:50px;"><p>#FEFE76</p></span>
           <span style="background-color:#FAFA00;width:200px;height:200px;float:left;padding:50px;"><p>#FAFA00</p></span>
           <span style="background-color:#0526B9;width:200px;height:200px;float:left;padding:50px;"><p>#0526B9</p></span>
           <span style="background-color:#6581FF;width:200px;height:200px;float:left;padding:50px;"><p>#6581FF</p></span>
           <span style="background-color:#FF5277;width:200px;height:200px;float:left;padding:50px;"><p>#FF5277</p></span>
           <span style="background-color:#B52141;width:200px;height:200px;float:left;padding:50px;"><p>#B52141</p></span>
    </div>
          </div>
        
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>