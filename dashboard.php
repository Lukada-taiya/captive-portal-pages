<!doctype html>

<html>
	<head>
		<title>Dashboard</title>
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
				color: white;
			}
			
			.brand { 
				color: <?php echo $data[4] ?>;
				font-weight: bold;
				font-size: 1.3em; 
				position: absolute;
				top: 1.4rem;
				left: 1.7rem;
			}	
			
			.nav-items { 
				position: absolute;
				top: 1.8rem;
				right: 1.7rem;
			}
			ul {
				margin: 0;
				list-style-type: none;
			}
			li {
				display: inline-block;
				margin-left: 1rem;
			}
			
			li > a {
				color: white;
				text-decoration:none;
			}
			
			li > a:hover {
				color: #eee
			}
			
			.content {
				height: 100vh;
				text-align: center;
				position: relative;
			}
			
			.welcome {
				font-family: <?php echo $data[11] ?>;
				color: <?php echo $data[12] ?>;
				font-size: <?php echo $data[13] ?>px;
				position: relative;
				top: 2rem;
				display: inline-block;
			}
		</style>
	</head>
	<body>
		<div class="nav">
			<div class="brand"><?php echo $data[3] ?></div>
			<div class="nav-items">
				<ul>
					<li><a href="settings.php">Settings</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="welcome">
				<h1>Welcome!</h1>
			</div>
		</div>
	</body>
</html>
