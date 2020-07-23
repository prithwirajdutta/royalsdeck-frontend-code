<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107498769-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-107498769-1');
</script>
</head>
<style>
    #sidenav{
        position:absolute;
        top:0px;
        left:0px;
    }
    #menu:hover,#close:hover{
        cursor:pointer;
    }
    #navigate{
        list-style: none;
        position:absolute;
        top:80px;
        left:-15px;
        width:250px;
    }
    #navigate li{
        padding:15px 20px;     
        border-bottom:1px solid white;
        color:white;
    }
    #navigate li:hover{
        background-color:#85C1E9;
        cursor:pointer;
        color:black;
    }
</style>
    <body>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
        <span id="menu" style="color:#3498DB;font-size:50px;position:fixed;top:10px;left:10px;"><i class="lni-menu"></i></span>
                
        <nav id="sidenav" style="width:300px;height:100%;background-color:#3498DB;">
            <span id="close" style="color:white;font-size:50px;position:absolute;top:10px;right:10px;"><i class="lni-cross-circle"></i></span>
            <ul id="navigate">
               <li>Home</li>
               <li>About</li>
               <li>Products</li>
               <li>Calendar</li>
               <li>Weather</li> 
               <li>Games</li>
               <li>Gallery</li>
               <li>Use Cases</li> 
            </ul>
        </nav>
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    <script>
        $(document).ready(function(){
            $("#menu").click(function(){
                $("#sidenav").animate({left: "0px"},2000);
            });
            $("#close").click(function(){
                $("#sidenav").animate({left: "-400px"},2000);
            });
        });
    </script>
</html>