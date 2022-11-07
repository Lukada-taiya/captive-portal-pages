<!doctype html>

<html>
	<head>
		<title>Dashboard</title>
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
				color: <?php echo $data[1] ?>;
				text-decoration:none;
			}
			
			/*li > a:hover {
				color: #eee
			}*/
			
			.content {
				height: 100vh;
				text-align: center;
				position: relative;
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
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="settings.php">Settings</a></li>
					<li><a href="#">Logout</a></li>					
				</ul>
			</div>
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
			<div class="welcome">
				<h1>Welcome!</h1>
			</div>
		</div>
	</body>
</html>
