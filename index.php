<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<style>
		
		.container{
			width: 100%;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.calculator{
			border-radius: 10px;
			background-color: black;
			padding: 20px;
		}

		.calculator form .buttons input{
			
			
			width: 60px;
			height: 60px;
			
			box-shadow: -8px -8px 15px rgba(255,255,255,0.1)  5px 5px 15px rgba(255,255,255,0.1);
			background: transparent;
			font-size: 20px;
			color:#fff;
			cursor: pointer;
			margin: 10px;
		}

		form .input{
			
			display: flex;
			justify-content: flex-end;
			margin: 20px 0;

		}

		.input input{
			height: 50px;

			width = 100px;
			text-align: right;
			flex: 1;
			font-size: 25px;
			box-shadow: none;

		}
		#equal{
			width: 145px;
		}
		
		#sidebtn{
			color:lightskyblue;
		}

		
	</style>
</head>
<body>
		<div class="container">
			<div class="calculator">

			<form action="#">
				<div class="input">
					<input type="text" class='display' id="screen">
				</div>
				<div class="buttons">
					<input type="button" value="AC" class="btns" id='sidebtn'>
					<input type="button" value="DE" class="btns" id='sidebtn'>
					<input type="button" value="." class="btns" id='sidebtn'>
					<input type="button" value="/" class="btns" id='sidebtn'>
				</div>
				<div class="buttons">
					<input type="button" value="7" class="btns">
					<input type="button" value="8" class="btns">
					<input type="button" value="9" class="btns">
					<input type="button" value="*" class="btns" id='sidebtn'>
				</div>
				<div class="buttons">
					<input type="button" value="4" class="btns">
					<input type="button" value="5" class="btns">
					<input type="button" value="6" class="btns">
					<input type="button" value="-" class="btns" id='sidebtn'>
				</div>
				<div class="buttons">
					<input type="button" value="1" class="btns">
					<input type="button" value="2" class="btns">
					<input type="button" value="3" class="btns">
					<input type="button" value="+" class="btns"  id='sidebtn'>
				</div>
				<div class="buttons">
					<input type="button" value="00" class="btns" >
					<input type="button" value="0" class="btns">
					<input type="button" value="="  id="equal" class="btns">
					
				</div>
				</form>
			</div>
		</div>

</body>
	<script src="process.js"> </script>

	
</html>