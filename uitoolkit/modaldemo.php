<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
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
 #close:hover{
     cursor: pointer;
 }
</style>
    <body style="padding-top:150px;">
       <center>
            <button id="viewmodal" class="btn btn-outline-info" style="border-radius:20px;">View Modal</button>
       </center>
       <div id="modal" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);z-index:10;position:absolute;top:20px;left:250px;width:900px;height:550px;background-color:#3498DB;border-radius:20px;">
            <span id="close" style="position:absolute;top:10px;right:10px;color:white;font-size:30px;"><i class="lni-close"></i></span>
            <div>
                <!-- Your content here ... -->
            <span style="font-size:100px;color:white;position:absolute;top:50px;left:100px;"><i class="lni-bi-cycle"></i></span>
            <h1 style="color:white;position:absolute;top:150px;left:100px;">Your content goes here.</h1>
            </div>
       </div>   
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script>
        $(document).ready(function(){
          $("#modal").hide();
          $("#viewmodal").click(function(){
            $("#modal").show();
          });
          $("#close").click(function(){
            $("#modal").hide();
          });
        });
    </script>
</html>