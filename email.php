
<?php
if(isset($_POST['submit'])){
   mail("stephenkindred100@gmail.com",$_POST["subject"],$_POST["message"]. From:$_POST['emailsub']);

   echo "sent to management";
    

}

?>





<!DOCTYPE html>
<html>
<head>
    <title>www.kindredresources.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	    body{
	        background: lavender;
	    }
	    .h1{
	        font-family: fantasy;
	        font-size:40px;
	        color: firebrick;
	        
	       
	    }
	    .box{
	       display:flex;
	       flex-direction:column;
	        
	    }
	    .box input{
	        width: 200px;
	        height: 40px;
	        
	        border-radius:5px;
	        
	    }
	    label{
	        font-family:Arial;
	        font-size:20px;
	        color:#95a2ff;
	        
	        
	            
	        
	        
	    }
	    .txt{
	        width: 260px;
	        background: #55c1ff;
	        height: 120px;
	        border: 1px solid yellow;
	        margin-top:0;
	    }
	    .submit{
    background: red;
    color: white;
    border-radius:5px;
    width: 120px;
    height: 30px;
    box-shadow:  2px 3px 2px rgb(100,100,100);
    font-size:28px;
    padding:0;
    margin-left:100px;
     color: #eeff40;
    font-family: fantasy;
    margin-top:30px;
   
}
input{
	color: firebrick;
	font-size: 20px;
	font-family: cursive;
}
.txt{
	color: darkblue;
	font-size: 20px;
	font-family: cursive;
}
  input::placeholder{
    font: Fantasy;
    color: ;
    font-size:20px;
    
}

	    
	</style>

</head>
<body>
    <form name="form2" method="post" action="" onsubmit="return validation()">
    <h1 class="h1">Send us an email</h1>
    <section class="box">
        <label>Your email</label>
        <input type="email"name="emailsub" placeholder="input your email">
        <label>Subject</label>
        <input type="text" name="subject" placeholder="subject"><br>
        <label>Message</label>
        <textarea name="message"class="txt" placeholder="Input message"></textarea>
            
        </text>
        <button type="submit" class="submit" name="submit">Submit</button>
        
    </section>
    </form>
    
  <script>
        function validation(){
       var em= document.form2.emailsub.value;
       var msg = document.form2.message.value;
       
       if(em.length==""){
       alert("Email field is empty!");
       return false;       
       }else{
           if(msg.length==""){
               alert("Message field is empty!");
               return false;
           }  } }
    </script>  
    
    
    
    
    </body>
    </html>
