<?php
	require 'flag.php';
	if(isset($_POST['submit'])){
		$user = $_POST['username'];
		$password = $_POST['password'];
		$usrmd5 = md5($user);
		$pwmd5 = md5($password);
		if($usrmd5 == $pwmd5){
			if($user == $password){
				echo("nice try");
			}
			else{
				echo($flag);
			}
		}
	}
?>
<html>
  <head>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      body {
        display: flex;
        height: 100%;
      }
      .formdiv {
        width: 70%;
      }
      .loginDiv {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .loginCont {
        display: flex;
        flex-direction: column;
        margin-bottom: 2vh;
        width: 80%;
      }
	  .parah{
		color: gray;
		font-size: 14px;
		font-weight: 600;
	  }
	  .input{
		margin-top: 4px;
		height: 24px;
	  }
      .heading {
        margin-bottom: 4vh;
      }
      .coloredDiv {
        width: 50%;
		display: contain;
      }
	  .img{
		height: 100%;
		width:100%;
	  }
      .button {
		margin-top: 10px;
		background-color: white;
        border: 2px solid black;
		font-weight: 600;
        padding: 6px 12px;
        border-radius: 8px;
      }
	  .button:hover {
		color: white;
		background-color: black;
      }
    </style>
  </head>
  <body>
    <div class="loginDiv">
      <form action="" method="post" class="formdiv">
        <h1 class="heading">Login</h1>
        <div>
          <div class="loginCont">
            <p class="parah">username:</p>
            <input type="text" name="username" class="input"/>
          </div>
          <div class="loginCont">
            <p class="parah">password:</p>
            <input type="password" name="password" class="input"/>
          </div>
          <td><input type="submit" name="submit" class="button" /></td>
        </div>
      </form>
    </div>
    <div class="coloredDiv">
		<img src="./background.jpg" class="img"/>
	</div>
  </body>
</html>
