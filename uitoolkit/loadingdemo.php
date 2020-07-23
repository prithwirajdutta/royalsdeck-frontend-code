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
