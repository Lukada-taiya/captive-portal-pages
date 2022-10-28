<!doctype html>

<html>
	<head>
		<title>Login To Network</title>
		<?php	
			$file = 'settings.txt';
			$file_stream = fopen($file,'r');
			$data = fread($file_stream,filesize($file));	
			$data = explode('.',$data);
		?>
		<style>
			body {
				margin: 0;
				padding: 0; 
				font-family: <?php echo $data[0] ?>, sans-serif;
				color: <?php echo $data[1] ?>;
				background-color: <?php echo $data[2] ?>;
			}
			
			h4 {
				margin: 0;
			}
			.nav {
				height: 3rem;
				background-color: <?php echo $data[5] ?>;
				padding: 0.7rem;
				position: relative; 
			}
			
			.brand { 
				color: <?php echo $data[4] ?>;
				font-weight: bold;
				font-size: 1.3em; 
				position: absolute;
				top: 1.4rem;
				left: 1.7rem;
			}			
			
			.content {
				height: 100vh;
				text-align: center; 
			}
			
			.form-container {
				border-radius: 12px;
	  			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); 
				margin-top: 8rem;
				width: 25rem;
				height:  15rem;
				padding: 1rem;
				background-color: <?php echo $data[10] ?>;;
				display: inline-block; 
			}
			
			form {
				margin-top: 2rem;
			}
			.form-element {
				margin-bottom: 1rem;
			}
			
			.form-title {
				color: <?php echo $data[7] ?>;
				font-size: 1.4rem;
			}
			
			input {
				width: 20rem;
				font-size: 1rem;
				padding: 0.8rem;
				border-radius: 0.4rem;
				/*border: 2px solid #888; */
				border: none;
			}
			
			/*input:focus {
				border-color: #333;
			}
			*/
			
			button {
				width: 8rem;
				 text-decoration: none;
				 padding: 0.75rem 1.5rem;
				 font: inherit;
				 background-color: <?php echo $data[9] ?>;
				 border: 1px solid <?php echo $data[9] ?>;
				 color: #555;
				 cursor: pointer;
				 border-radius: 8px; 
		  }
 
		  /*button:hover,
		  button:active {
			 background-color: #ddd;
			 border-color: #eee;
		  }*/

		  /*.flat {
			 background-color: transparent;
			 color: #3a0061;
			 border: none;
		  }

		  .outline {
			 background-color: transparent;
			 border-color: #270041;
			 color: #270041;
		  }

		  .flat:hover,
		  .flat:active,
		  .outline:hover,
		  .outline:active {
			 background-color: #edd2ff;
		  }*/
			
		</style>
	</head>
	<body>
		<div class="nav">
			<div class="brand"><?php echo $data[3] ?></div>  
		</div>
		<div class="content">
			<div class="form-container">
				<div class="form-title"><h4><?php echo $data[6] ?></h4></div>
				<form method="post" action="login.php">
					<div class="form-element">  
						<input type="text" name="username" placeholder="Name..."/>
					</div>
					<div class="form-element">  
						<input type="password" name="password" placeholder="Password..."/>
					</div>
					<button type="submit"><?php echo $data[8] ?></button>
				</form>
			</div>
		</div>
	</body>
</html>
