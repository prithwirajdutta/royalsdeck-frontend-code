<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
</head>
<style>
#pop1{
    position:relative;
    top:50px;left:50px;
    margin:10px;
    padding:20px;
    float: left;
    width:200px;
    height:200px;
    background-color:#5499C7;
    border-radius:20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 #pop1::before{
     z-index: 10;
     content:'';
     position:absolute;
     top:-30px;
     left:85px;
     border-top:15px solid transparent;
     border-left:15px solid transparent;
     border-right:15px solid transparent;
     border-bottom:15px solid #5499C7;
 }
 #pop2{
     position:relative;
     top:0px;left:50px;    
     margin:10px;
     padding:20px;
     width:200px;
     height:200px;
     background-color:#48C9B0;
     float: left;
     border-radius:20px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 #pop2::before{
     z-index: 10;
     content:'';
     position:absolute;
     top:80px;
     left:200px;
     border-top:15px solid transparent;
     border-left:15px solid #48C9B0;
     border-right:15px solid transparent;
     border-bottom:15px solid transparent;
 }
 #pop3{
     position:relative;
     top:-30px;left:50px;    
     margin:40px;
     padding:20px;
     width:200px;
     height:200px;
     background-color:#EB984E;
     float: left;
     border-radius:20px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 #pop3::before{
     z-index: 10;
     content:'';
     position:absolute;
     top:80px;
     left:-30px;
     border-top:15px solid transparent;
     border-left:15px solid transparent;
     border-right:15px solid #EB984E;
     border-bottom:15px solid transparent;
 }
 #pop4{
     position:relative;
     top:-30px;left:50px;    
     margin:40px;
     padding:20px;
     width:200px;
     height:200px;
     background-color:#AF7AC5;
     float: left;
     border-radius:20px;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }
 #pop4::before{
     z-index: 10;
     content:'';
     position:absolute;
     top:200px;
     left:80px;
     border-top:15px solid #AF7AC5;
     border-left:15px solid transparent;
     border-right:15px solid transparent;
     border-bottom:15px solid transparent;
 }
</style>
    <body style="padding:150px;">
       <center>
           <div id="pop1">
               <!-- Your content goes here -->
               <center>
                   <h3 style="color:white;">Your content goes here...</h3>
               </center>
           </div><br><br>
            <div id="pop2">
               <!-- Your content goes here -->
               <center>
                   <h3 style="color:white;">Your content goes here...</h3>
               </center>
           </div>
           <div id="pop3">
               <!-- Your content goes here -->
               <center>
                   <h3 style="color:white;">Your content goes here...</h3>
               </center>
           </div>
           <div id="pop4">
               <!-- Your content goes here -->
               <center>
                   <h3 style="color:white;">Your content goes here...</h3>
               </center>
           </div>
       </center>
       
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script>
        $(document).ready(function(){
        
        });
    </script>
</html>