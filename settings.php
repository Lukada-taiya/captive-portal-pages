<!doctype html>
<?php	
	if(isset($_POST["main-style"]) || isset($_POST["main-color"]) || isset($_POST["page-color"]) || isset($_POST["brand-name"]) ||
	isset($_POST["brand-color"]) || isset($_POST["nav-color"]) || isset($_POST["center-title"]) || isset($_POST["center-color"]) ||
	isset($_POST["center-b-text"]) || isset($_POST["center-b-color"]) || isset($_POST["center-box-color"]) || 
	isset($_POST["welcome-style"]) || isset($_POST["welcome-color"]) || isset($_POST["welcome-size"]) ||
	isset($_POST['desc']) || isset($_POST['image']) || isset($_POST['link']) || isset($_POST['desc2']) ||
	isset($_POST['link2']) || isset($_POST['image2']) || isset($_POST['side-color']) || isset($_POST['side-bgcolor']) ||
	isset($_POST['facebook']) || isset($_POST['instagram']) || isset($_POST['whatsapp']) || isset($_POST['twitter'])) 
	{ 
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
			$prev_data = explode('_',$prev_data);				
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
			$side_color = empty(trim($_POST['side-color'])) ? $prev_data[14]:trim($_POST['side-color']);
			$side_bgcolor = empty(trim($_POST['side-bgcolor'])) ? $prev_data[15]:trim($_POST['side-bgcolor']);
			$desc = empty(trim($_POST['desc'])) ? $prev_data[16]:trim($_POST['desc']);			
			$link = empty(trim($_POST['link'])) ? $prev_data[17]:trim($_POST['link']);			 
			if(!empty($_FILES['image'])) { 
				$image = $_FILES['image']["name"];
				$image_loc = "resources/".basename($image);
				move_uploaded_file($_FILES['image']['tmp_name'], $image_loc);
			}else {				 
				$image = $prev_data[18]; 
				//die($prev_data[21]); 				
			}
			$desc2 = empty(trim($_POST['desc2'])) ? $prev_data[19]:trim($_POST['desc2']);
			$link2 = empty(trim($_POST['link2'])) ? $prev_data[20]:trim($_POST['link2']);			
			if(!empty($_FILES['image2']['name'])) {		 
				$image2 = $_FILES['image2']["name"]; 
				$image2_loc = "resources/".basename($image2);
				move_uploaded_file($_FILES['image2']['tmp_name'], $image2_loc);
			}else {
				$image = $prev_data[21]; 
			}
			$facebook = empty(trim($_POST['facebook'])) ? $prev_data[22]:trim($_POST['facebook']);
			$instagram = empty(trim($_POST['instagram'])) ? $prev_data[23]:trim($_POST['instagram']);
			$whatsapp = empty(trim($_POST['whatsapp'])) ? $prev_data[24]:trim($_POST['whatsapp']);
			$twitter = empty(trim($_POST['twitter'])) ? $prev_data[25]:trim($_POST['twitter']);
						
			$file = 'settings.txt';
			$file_stream = fopen($file,'w');				
			
			fwrite($file_stream, $main_style."_\n");
			fwrite($file_stream, $main_color."_\n");
			fwrite($file_stream, $page_color."_\n");
			fwrite($file_stream, $brand_name."_\n");
			fwrite($file_stream, $brand_color."_\n");
			fwrite($file_stream, $nav_color."_\n");
			fwrite($file_stream, $center_title."_\n");
			fwrite($file_stream, $center_color."_\n");
			fwrite($file_stream, $center_b_text."_\n");
			fwrite($file_stream, $center_b_color."_\n");
			fwrite($file_stream, $center_box_color."_\n");
			fwrite($file_stream, $welcome_style."_\n");
			fwrite($file_stream, $welcome_color."_\n");
			fwrite($file_stream, $welcome_size."_\n");
			fwrite($file_stream, $side_color."_\n");
			fwrite($file_stream, $side_bgcolor."_\n");
			fwrite($file_stream, $desc."_\n");
			fwrite($file_stream, $link."_\n");
			fwrite($file_stream, $image."_\n");
			fwrite($file_stream, $desc2."_\n");
			fwrite($file_stream, $link2."_\n");
			fwrite($file_stream, $image2."_\n");
			fwrite($file_stream, $facebook."_\n");
			fwrite($file_stream, $instagram."_\n");
			fwrite($file_stream, $whatsapp."_\n");
			fwrite($file_stream, $twitter."_\n");
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
			$data_str = fread($file_stream,filesize($file));	
			$data = explode('_',$data_str); 
			fclose($file_stream);  
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
			
			.note {
				width: 23rem;
			 	margin-left: 5.7rem;
			 	margin-bottom: 1rem;
			}
			
			.side-items {
				margin-top: 2rem;
				text-align:center;
			}
			
			.side-item {
				display: inline-block;
				width: 30rem;
				text-align: left;
			}
			
			.side-item input {
				margin-left: 0.6rem;
				width: 17rem; 
				padding: 0.5rem;
				border-radius: 0.2rem; 
				border: none;
			} 
			
			.side-items .addbutton {
				padding: 0.5rem 0.3rem;
				width: 10rem;
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
				/**$rfile = 'settings.txt';
				$file_stream = fopen($rfile, 'r');
				$file_str = fread($file_stream, filesize($rfile));
				$file_content = explode('_', $file_str); 
				fclose($file_stream);  */
			?>
				<div class="form-title"><h4>Settings</h4></div>
				<form method="post" action="settings.php" enctype="multipart/form-data">
					<div class="section">
						<div class="section-title"><em>#General</em></div>
						<input name="data" type="text" hidden value="<?php echo $data_str ?>"/>
						<div class="form-element">  
							<label for="main-style">Font Style:</label>
							<input class="textfield" value="<?php echo $data[0] ?>" type="text" name="main-style" placeholder="Font Style..."/>							
						</div>
						<div class="note"><small>NB: Enter font style like Raleway, Arial,etc. Any font style
							not valid or not installed on the system will default to the default system font.</small>
						</div>
						<div class="form-element">  
							<label for="main-color">Font Color:</label>
							<input class="textfield" value="<?php echo $data[1] ?>" type="text" name="main-color" placeholder="Font Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change the color of text of the page. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="page-color">Page Color:</label>
							<input class="textfield" value="<?php echo $data[2] ?>" type="text" name="page-color" placeholder="Page Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change the background color of the page. Hex code can also
						be used.</small>
						</div>
					</div> 					
					<div class="section">
						<div class="section-title"><em>#Navigation Bar</em></div>
						<div class="form-element">  
							<label for="brand-name">Company Name:</label>
							<input class="textfield" value="<?php echo $data[3] ?>" type="text" name="brand-name" placeholder="Company Name..."/>							
						</div>
						<div class="note" style="margin-left: 8rem;"><small>NB: Specify your company name here.</small>
						</div>
						<div class="form-element">  
							<label for="brand-color">Company Text Color:</label>
							<input class="textfield" value="<?php echo $data[4] ?>" type="text" name="brand-color" placeholder="Company Text Color..."/>							
						</div>
						<div class="note" style="margin-left: 9.8rem;"><small>NB: Enter a color to change the text color of your 
						company name. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="nav-color">Navigation Bar Color:</label>
							<input class="textfield" value="<?php echo $data[5] ?>" type="text" name="nav-color" placeholder="Navigation Bar Color..."/>							
						</div>
						<div class="note" style="margin-left: 9.8rem;"><small>NB: Enter a color to change the navigation bar color. 	
						Hex code can also
						be used.</small>
						</div>	
					</div>
					<div class="section">
						<div class="section-title"><em>#Side Bar</em></div>
						<div class="form-element">  
							<label for="side-color">Text Color:</label>
							<input class="textfield" value="<?php echo $data[14] ?>" type="text" name="side-color" placeholder="Text Color..."/>							
						</div>
						<div class="note" style="margin-left: 8rem;"><small>NB: Change the color of the text on the sidebar. Hex code can also be used.</small>
						</div>
						<div class="form-element">  
							<label for="side-bgcolor">Background Color:</label>
							<input class="textfield" value="<?php echo $data[15] ?>" type="text" name="side-bgcolor" placeholder="Background Color..."/>							
						</div>
						<div class="note" style="margin-left: 9.8rem;"><small>NB: Enter a color to change background color of sidebar. Hex code can also be used.</small>
						</div>
						<div class="side-items" id="sideitems">
							<div class="note" style="margin-left: 9.8rem;">Add and remove display items on the sidebar 
							below.
							</div>
							<div class="side-item">
								<p><em>Item 1</em></p>
								<div class="item-element form-element">									
									<label for="desc">Description:</label>
									<input value="<?php echo $data[16] ?>" name="desc" type="text" placeholder="Enter 
									description..."/>
								</div>
								<div class="item-element form-element">									
									<label for="link">Link</label>
									<input value="<?php echo $data[17] ?>" name="link" type="text" placeholder="Enter link..."/>
								</div>
								<div class="item-element form-element">									
									<label for="image">Image</label>
									<input name="image" type="file"/>
								</div>
							</div>
							<div class="side-item">
								<p><em>Item 2</em></p>
								<div class="item-element form-element">									
									<label for="desc2">Description:</label>
									<input value="<?php echo $data[19] ?>" name="desc2" type="text" placeholder="Enter description..."/>
								</div>
								<div class="item-element form-element">									
									<label for="link2">Link</label>
									<input value="<?php echo $data[20] ?>" name="link2" type="text" placeholder="Enter link..."/>
								</div>
								<div class="item-element form-element">									
									<label for="image2">Image</label>
									<input name="image2" type="file"/>
								</div>
							</div>
							<!--<div class="additem">
								<button class="addbutton">Add Item</div>
							</div> -->
							<div class="form-element">  
							<label for="facebook">Facebook:</label>
							<input value="<?php echo $data[22] ?>" class="textfield" value="<?php echo $data[4] ?>" type="text" name="facebook" placeholder="Enter link..."/>							
						</div>
						<div class="form-element">  
							<label for="instagram">Instagram:</label>
							<input value="<?php echo $data[23] ?>" class="textfield" value="<?php echo $data[4] ?>" type="text" name="instagram" placeholder="Enter link..."/>							
						</div>
						<div class="form-element">  
							<label for="whatsapp">Whatsapp:</label>
							<input value="<?php echo $data[24] ?>" class="textfield" value="<?php echo $data[4] ?>" type="text" name="whatsapp" placeholder="Enter link..."/>							
						</div>
						<div class="form-element">  
							<label for="twitter">Twitter:</label>
							<input value="<?php echo $data[25] ?>" class="textfield" value="<?php echo $data[4] ?>" type="text" name="twitter" placeholder="Enter link..."/>							
						</div>
					</div>
					<div class="section">
						<div class="section-title"><em>#Center Box</em></div>
						<div class="form-element">  
							<label for="center-title">Center Box Title:</label>
							<input class="textfield" value="<?php echo $data[6] ?>" type="text" name="center-title" placeholder="Center Box Title..."/>							
						</div>
						<div class="note" style="margin-left: 8rem;"><small>NB: Set the title of the center box. On the login page 		
						the default is
						Login</small>
						</div>
						<div class="form-element">  
							<label for="center-color">Center Box Text Color:</label>
							<input class="textfield" value="<?php echo $data[7] ?>" type="text" name="center-color" placeholder="Center Box Text Color..."/>							
						</div>
						<div class="note" style="margin-left: 10.5rem;"><small>NB: Enter color to change center text color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="center-b-text">Center Box Button Text:</label>
							<input class="textfield" value="<?php echo $data[8] ?>" type="text" name="center-b-text" placeholder="Center Box Button Text..."/>							
						</div>
						<div class="note" style="margin-left: 10.8rem;"><small>NB: Change the center box button text.</small>
						</div>					
						<div class="form-element">  
							<label for="center-b-color">Center Box Button Color:</label>
							<input class="textfield" value="<?php echo $data[9] ?>" type="text" name="center-b-color" placeholder="Center Box Button Color..."/>							
						</div>
						<div class="note" style="margin-left: 11.3rem;"><small>NB: Enter a color to change the center box button color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="center-box-color">Center Box Color:</label>
							<input class="textfield" value="<?php echo $data[10] ?>" type="text" name="center-box-color" placeholder="Center Box Color..."/>							
						</div>
						<div class="note" style="margin-left: 8.4rem;"><small>NB: Enter a color to change the center box color. Hex code can also
						be used.</small>
						</div>										
					</div> 
					<div class="section">
						<div class="section-title"><em>#Welcome Text</em></div>
						<div class="form-element">  
							<label for="welcome-style">Font Style:</label>
							<input class="textfield" value="<?php echo $data[11] ?>" type="text" name="welcome-style" placeholder="Font Style..."/>							
						</div>
						<div class="note"><small>NB: Enter font style like Raleway, Arial,etc. Any font style
							not valid or not installed on the system will default to the default system font.</small>
						</div>
						<div class="form-element">  
							<label for="welcome-color">Font Color:</label>
							<input class="textfield" value="<?php echo $data[12] ?>" type="text" name="welcome-color" placeholder="Font Color..."/>							
						</div>
						<div class="note"><small>NB: Enter a color to change welcome text color. Hex code can also
						be used.</small>
						</div>
						<div class="form-element">  
							<label for="welcome-size">Font Size:</label>
							<input class="textfield" value="<?php echo $data[13] ?>" type="text" name="welcome-size" placeholder="Font Size..."/>							
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
	<script>				
		function addItem() {
			const sideItems = document.getElementById("sideitems");
			const newNode = document.createElement("div");
			newNode.className = "set-item";
			newNode.innerHTML= `<p><em>Item 1</em></p>`;
			setItems.appendChild(newNode);
			console.log("successful");			
		}	
	</script>
</html>
