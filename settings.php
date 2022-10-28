<!doctype html>
<?php	
	if(isset($_POST["main-style"]) || isset($_POST["main-color"]) || isset($_POST["page-color"]) || isset($_POST["brand-name"]) ||
	isset($_POST["brand-color"]) || isset($_POST["nav-color"]) || isset($_POST["center-title"]) || isset($_POST["center-color"]) ||
	isset($_POST["center-b-text"]) || isset($_POST["center-b-color"]) || isset($_POST["center-box-color"]) || 
	isset($_POST["welcome-style"]) || isset($_POST["welcome-color"]) || isset($_POST["welcome-size"])) { 
		if(isset($_POST['default'])) {
			$dfile = fopen('settings_default.txt','r');
			$ddata = fread($dfile, filesize('settings_default.txt'));
			fclose();
			$file = fopen('settings.txt', 'w');
			$data = fwrite($file, $ddata);
			fclose();
			header('Location:settings.php');
		}else {
			$prev_data = $_POST['data'];
			$prev_data = explode('\n',$prev_data);	 
			$main_style = empty(trim($_POST['main-style'])) ? $prev_data[0]:trim($_POST['main-style']); 
			$main_color = empty(trim($_POST['main-color'])) ? $prev_data[1]:trim($_POST['main-color']);
			$page_color = empty(trim($_POST['page-color'])) ? $prev_data[2]:trim($_POST['page-color']);
			$brand_name = empty(trim($_POST['brand-name'])) ? $prev_data[3]:trim($_POST['brand-name']);
			$brand_color = empty(trim($_POST['brand-color'])) ? $prev_data[4]:trim($_POST['brand-color']);
			$nav_color = empty(trim($_POST['nav-color'])) ? $prev_data[5]:trim($_POST['nav-color']);
			$center_title = empty(trim($_POST['center-title'])) ? $prev_data[6]:trim($_POST['center-title']);
			$center_color = empty(trim($_POST['center-color'])) ? $prev_data[7]:trim($_POST['center-color']);
			$center_b_text = empty(trim($_POST['center-b-text'])) ? $prev_data[8]:trim($_POST['center-b-text']);
			$center_b_color = empty(trim($_POST['center-b-color'])) ? $prev_data[9]:trim($_POST['center-b-color']);
			$center_box_color = empty(trim($_POST['center-box-color'])) ? $prev_data[10]:trim($_POST['center-box-color']);
			$welcome_style = empty(trim($_POST['welcome-style'])) ? $prev_data[11]:trim($_POST['welcome-style']);
			$welcome_color = empty(trim($_POST['welcome-color'])) ? $prev_data[12]:trim($_POST['welcome-color']);
			$welcome_size = empty(trim($_POST['welcome-size'])) ? $prev_data[13]:trim($_POST['welcome-size']);
			$file = 'settings.txt';
			$file_stream = fopen($file,'w');				
			
			fwrite($file_stream, $main_style.".\n");
			fwrite($file_stream, $main_color.".\n");
			fwrite($file_stream, $page_color.".\n");
			fwrite($file_stream, $brand_name.".\n");
			fwrite($file_stream, $brand_color.".\n");
			fwrite($file_stream, $nav_color.".\n");
			fwrite($file_stream, $center_title.".\n");
			fwrite($file_stream, $center_color.".\n");
			fwrite($file_stream, $center_b_text.".\n");
			fwrite($file_stream, $center_b_color.".\n");
			fwrite($file_stream, $center_box_color.".\n");
			fwrite($file_stream, $welcome_style.".\n");
			fwrite($file_stream, $welcome_color.".\n");
			fwrite($file_stream, $welcome_size.".\n");
			fclose($file_stream);
			header('Location:settings.php');	
		}							
	} 

?>
<html>
	<head>
		<title>Settings</title>
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
			
			/*.active {
				color: #eee;
			}*/
			
			.content {
				height: 100vh;
				text-align: center;
				position: relative; 
				height: 100vh;
				text-align: center;
			}						
			
			.form-container {
				border-radius: 5px;
	  			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26); 
				margin-top: 3rem;
				margin-bottom: 3rem;
				width: 45rem;
				/*height:  13rem;*/
				padding: 1.3rem;
				background-color: <?php echo $data[10] ?>;
				display: inline-block; 
			} 
			.form-title {
				color: <?php echo $data[7] ?>;
				font-size: 1.4rem;
			}	
			
			.section {
				margin-bottom: 3rem;
			}
			
			.section-title {
				font-size: 18px;
				margin-bottom: 1rem;
			}					
			
			form {
				margin-top: 2rem;
				text-align: left;
				color: white;
			}
			.form-element {
				margin-bottom: 1rem;	 	 
				font-size: 15px;
			}									
			
			.textfield {
				margin-left: 0.6rem;
				width: 23rem; 
				padding: 0.5rem;
				border-radius: 0.2rem;
				/*border: 2px solid #888; */
				border: none;
			}
			
			/*input:focus {
				border-color: #333;
			}
			*/
			
			.note {
				width: 23rem;
			 	margin-left: 5.7rem;
			 	margin-bottom: 1rem;
			}
			
			.btn {
				text-align: center;
			}
			
			button {
				width: 15rem;
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
		</style>
	</head>
	<body>
		<div class="nav">
			<div class="brand"><?php echo $data[3] ?></div>
			<div class="nav-items">
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a class="active" href="settings.php">Settings</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="form-container">
			<?php
				$rfile = 'settings.txt';
				$file_stream = fopen($rfile, 'r');
				$file_str = fread($file_stream, filesize($rfile));
				$file_content = explode('.', $file_str); 
				fclose($file_stream);  
			?>
				<div class="form-title"><h4>Settings</h4></div>
				<form method="post" action="settings.php">
					<div class="section">
						<div class="section-title"><em>#General</em></div>
						<input name="data" type="text" hidden value="<?php echo $file_str ?>"/>
						<div class="form-element">  
							<label for="main-style">Font Style:</label>
							<input class="textfield" value="<?php echo $file_content[0] ?>" type="text" name="main-style" placeholder="Font Style..."/>							
						</div>
						<div class="note"><small>NB: Enter font style like Raleway, Arial,etc. Any font style
							not valid or not installed on the system will default to the default system font.</small>
						</div>
						<div class="form-element">  
							<label for="main-color">Font Color:</label>
							<input class="textfield" value="<?php echo $file_content[1] ?>" type="text" name="main-color" placeholder="Font Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change the color of text of the page. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="page-color">Page Color:</label>
							<input class="textfield" value="<?php echo $file_content[2] ?>" type="text" name="page-color" placeholder="Page Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change the background color of the page. Hex code can also
						be used.</small>
						</div>
					</div> 					
					<div class="section">
						<div class="section-title"><em>#Navigation Bar</em></div>
						<div class="form-element">  
							<label for="brand-name">Company Name:</label>
							<input class="textfield" value="<?php echo $file_content[3] ?>" type="text" name="brand-name" placeholder="Company Name..."/>							
						</div>
						<div class="note" style="margin-left: 8rem;"><small>NB: Specify your company name here.</small>
						</div>
						<div class="form-element">  
							<label for="brand-color">Company Text Color:</label>
							<input class="textfield" value="<?php echo $file_content[4] ?>" type="text" name="brand-color" placeholder="Company Text Color..."/>							
						</div>
						<div class="note" style="margin-left: 9.8rem;"><small>NB: Enter a color to change the text color of your 
						company name. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="nav-color">Navigation Bar Color:</label>
							<input class="textfield" value="<?php echo $file_content[5] ?>" type="text" name="nav-color" placeholder="Navigation Bar Color..."/>							
						</div>
						<div class="note" style="margin-left: 9.8rem;"><small>NB: Enter a color to change the navigation bar color. 	
						Hex code can also
						be used.</small>
						</div>	
					</div>
					<div class="section">
						<div class="section-title"><em>#Center Box</em></div>
						<div class="form-element">  
							<label for="center-title">Center Box Title:</label>
							<input class="textfield" value="<?php echo $file_content[6] ?>" type="text" name="center-title" placeholder="Center Box Title..."/>							
						</div>
						<div class="note" style="margin-left: 8rem;"><small>NB: Set the title of the center box. On the login page 		
						the default is
						Login</small>
						</div>
						<div class="form-element">  
							<label for="center-color">Center Box Text Color:</label>
							<input class="textfield" value="<?php echo $file_content[7] ?>" type="text" name="center-color" placeholder="Center Box Text Color..."/>							
						</div>
						<div class="note" style="margin-left: 10.5rem;"><small>NB: Enter color to change center text color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="center-b-text">Center Box Button Text:</label>
							<input class="textfield" value="<?php echo $file_content[8] ?>" type="text" name="center-b-text" placeholder="Center Box Button Text..."/>							
						</div>
						<div class="note" style="margin-left: 10.8rem;"><small>NB: Change the center box button text.</small>
						</div>					
						<div class="form-element">  
							<label for="center-b-color">Center Box Button Color:</label>
							<input class="textfield" value="<?php echo $file_content[9] ?>" type="text" name="center-b-color" placeholder="Center Box Button Color..."/>							
						</div>
						<div class="note" style="margin-left: 11.3rem;"><small>NB: Enter a color to change the center box button color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="center-box-color">Center Box Color:</label>
							<input class="textfield" value="<?php echo $file_content[10] ?>" type="text" name="center-box-color" placeholder="Center Box Color..."/>							
						</div>
						<div class="note" style="margin-left: 8.4rem;"><small>NB: Enter a color to change the center box color. Hex code can also
						be used.</small>
						</div>										
					</div> 
					<div class="section">
						<div class="section-title"><em>#Welcome Text</em></div>
						<div class="form-element">  
							<label for="welcome-style">Font Style:</label>
							<input class="textfield" value="<?php echo $file_content[11] ?>" type="text" name="welcome-style" placeholder="Font Style..."/>							
						</div>
						<div class="note"><small>NB: Enter font style like Raleway, Arial,etc. Any font style
							not valid or not installed on the system will default to the default system font.</small>
						</div>
						<div class="form-element">  
							<label for="welcome-color">Font Color:</label>
							<input class="textfield" value="<?php echo $file_content[12] ?>" type="text" name="welcome-color" placeholder="Font Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change welcome text color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="welcome-size">Font Size:</label>
							<input class="textfield" value="<?php echo $file_content[13] ?>" type="text" name="welcome-size" placeholder="Font Size..."/>							
						</div>
						<div class="note"><small>NB: Enter a number to change the welcome text size size. Unit used is pixels</small>
						</div>						
					</div>
					<div class="section"> 
						<div style="margin-left: 5.7rem" class="default">
								<input id="default" type="checkbox" value="1" name="default"/>	
								<label for="default">Reset Default Settings</label>												
						</div>
						<div class="note"><small>NB: Checking this box will reset all values to their default settings</small>
						</div>
					</div>					
					<div class="btn">
						<button type="submit">Save</button>	
					</div>			
				</form>
			</div>
		</div>
	</body>
</html>
