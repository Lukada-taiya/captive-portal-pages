<!doctype html>

<html>
	<head>
		<title>Login To Network</title>
		<?php	
			$file = 'settings.txt';
			$file_stream = fopen($file,'r');
			$data = fread($file_stream,filesize($file));	
			$data = explode('_',$data);
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
			}
			
			.sidebar {
				width: 17rem;
				height: 100%;
				padding: 1rem 0.5rem 0.5rem 0.5rem;
				background-color: <?php echo $data[15]; ?>;
				float: left;
				color: <?php echo $data[14]; ?>;				
			}
			
			.side-item {
				font-size: 13px;
				margin-bottom: 1rem;
			}
			
			.side-item img {
				border-radius: 2px;
			}
				
			.desc, .side-item .link {
				padding: 0 0.3rem;
			}
			
			.side-item .link a{
				text-decoration: none;
			}			 
			
			.social-links .link {
				display: inline-block; 
			}
			
			.form-content {
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
			
		</style>
	</head>
	<body>
		<div class="nav">
			<div class="brand"><?php echo $data[3] ?></div>  
		</div>
		<div class="content">
			<div class="sidebar">
				<div class="side-item">
					<?php if(!empty($data[18])) { ?>
					<div class="image">
						<img src="resources/<?php echo $data[18]; ?>" width="100%"/>
					</div>
					<?php } ?>
					<div class="desc">
						<?php echo $data[16]; ?>
					</div>
					<div class="link">
						<a href="<?php echo $data[17]; ?>" target="_blank">Click here</a>
					</div>
				</div>
				<div class="side-item">
					<?php if(!empty($data[21])) { ?>
					<div class="image">
						<img src="resources/<?php echo $data[21]; ?>" width="100%"/>
					</div>
					<?php } ?>
					<div class="desc">
						<?php echo $data[19]; ?>
					</div>
					<div class="link">
						<a href="<?php echo $data[20]; ?>" target="_blank">Click here</a>
					</div>
				</div>
				<div class="social-links">
					<div class="title">Get in touch with us on...</div>
					<div class="link">
						<a target="_blank" href="<?php echo $data[22]; ?>"><img src="resources/facebook.png"/></a>
					</div>
					<div class="link">
						<a target="_blank" href="<?php echo $data[23]; ?>"><img src="resources/instagram.png"/></a>
					</div>
					<div class="link">
						<a target="_blank" href="<?php echo $data[24]; ?>"><img src="resources/whatsapp.png"/></a>
					</div>
					<div class="link">
						<a target="_blank" href="<?php echo $data[25]; ?>"><img src="resources/twitter.png"/></a>
					</div>
				</div>
			</div>
			<div class="form-content">
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
