<!DOCTYPE html>

  
<html lang="en">
 
<head>
    <meta charset="UTF-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>PHP Code</title> 
</head>
     
     
   <body> 
        
     <ul> 
        <li><a href="index.html"> Home </a> </li>
          
    </ul> 

    <style>
       
       ul {
         list-style-type: none; 
         margin: 0;  
         padding: 0;
         background-color: #e8e9eB;
         overflow: hidden;
         postiton: fixed;
         top: 0;
         width: 100%;
         left: 0;
       }
       
       li {
         float: left;
       } 
       
       li a {
         display: block;
         color: #f7cacd; 
         text-align: center; 
         padding: 14px 16px;
         text-decoration: none;
       }
       
       li a:hover:not(.active) {
         background-color: #f7fff7; 
       }
       
       .active {
         background-color: #f7fff7;
       }
       
    </style>

       <h1> Testing PHP embedded in HTML </h1>
 
        	<?php 
            
	   $starter = "Hello World";

            echo $starter 
        ?>
    </body>
    
    <style>
        
        body {
          background-color: white;
        }
        
        h1 {
          color: #f7cacd;
          text-align: center;
          font-size: 50ppx;
        }    
        
    </style>


</html>
