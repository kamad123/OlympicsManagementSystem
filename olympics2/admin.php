<?php
session_start();
if (isset($_SESSION['username'])) {
      header("Location: ./addathelete.php"); /* Redirect browser */
exit();
}
?>
<html>
<style>
.image{
height :auto;
width:100%;
}
.login { 
	position: absolute;
	top: 40%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	
}
button {
 position : relative;
 left: 8em;
background-color: red;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border: 2px solid ff0000;
  padding: 5px;
}

</style>


<body>
<img class="image" src="img/3.jpg"> 
 <div class="login">
 <form id="f2orm1" name="form1" method="post" action="login.php" >
  
	<h1>Login</h1>
    	<input type="text"  name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" >Log in</button>
    </form>
</div>
</body>
</html>
