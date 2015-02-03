<?php include './head.php' ?>
		<style>
			.about-us-banner {
				margin:auto;
				margin-top:100px;	
				
			}
			.about-us-banner img {
				width:auto;
				height:auto;
				margin:auto;	
			}
			
			.about-us-banner .navigation {
				height: 50px;
				margin: auto;
				margin-left:43%;
			}
			.about-us-banner .navigation ul {
				font-size:18px;
				margin:auto;
				display:inline;
			}
			
			.about-us-banner .navigation a:hover {
  				border-bottom: 3px solid #000000;
			}
        	
			.showlogo {
				width: 100%;
				height:200px;
				margin: auto;
			}
			
			.showlogo img {
				margin: 0px auto;
				margin-top: 50px;
				margin-left: 280px;
			}
			
			/* Objective Starts*/
			.objective-box {
				width:90%;
				margin:auto;
			}
			.objective-box h1 {
				margin:auto;	
			}
			
			.objective-box p {
				font-weight:bold;
				vertical-align:top;
			}
			
			
			/*Objective Ends*/
			
			.our-story-box {
				width:90%;
				margin:auto;
				margin-top;100px;
			}
			
			/*Developer Starts*/
			.developer-info-box {
				width:90%;
				margin:auto;
				margin-top:50px;
				margin-bottom:50px;
			}
			.personal-info {
				width: 95%;
				margin : auto;
				margin-top:30px;	
			}
			.personal-info img {
				width: 200px;
				display:inline-block;
			}
			.text-info {
				display:inline-block;
				vertical-align:top;
				margin-left:50px;
			}
			
			.content {
				height: 2000px;
			}
			/*Developer Ends*/
        </style>
		<?php include './header.php' ?>
		<div class = "about-us-banner">
        	<nav class ="navigation">
            	<ul>
                	<li><a href="./info.php">Objective</a></li>
                    <li><a href="./info_members.php">Members</a></li>
                </ul>
            </nav>
        	<img src = "./img/about_us_what_is_malcha.png">
        </div>  
        <div class="content">
			<div class="inner">
				<div class="bodyframe">	
                	<div class = "showlogo">
                    	<img src="./img/logo1.jpg" alt="LOGO"; width= 240px;">
                    </div>
					<div class="objective-box">
						<h1>Objective
						</h1>
						<p>
							Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here
                            Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here 
							Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here
							Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here
							Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here
							Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here Objective Goes Here<br>
						</p>
						
					</div>
                    
                    <div class="our-story-box">
                    	<h1>Our Story
                        </h1>
                    </div>
				</div>
			</div>
		</div>
	<?php include './footer.php' ?>