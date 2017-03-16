<?php
include "vars.php";
include "sessions.php";
include "functions.php";
include "database_connect.php";

if($_SESSION['user_level'] == 1){
?>

<!DOCTYPE html>

<html>
	<head>
	
		<!-- Basic page -->
		<title><?php echo $page_title; ?> | OMW ADMIN</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/main_stylesheet_admin.css" type="text/css" rel="stylesheet" media='screen  and (min-width: 1000px)'>
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/wide_stylesheet_admin.css" type="text/css" rel="stylesheet" media='screen  and (min-width: 1000px)'>
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/table_stylesheet.css" type="text/css" rel="stylesheet">
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/form_stylesheet.css" type="text/css" rel="stylesheet">
		<link href='CSS/font_stylesheet.css' type="text/css" rel="stylesheet">
		<link href="CSS/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="CSS/col_classes.css" type="text/css" rel="stylesheet">
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/classes.css" type="text/css" rel="stylesheet">
		
		
		<!-- Mobile Page -->
		<link href="CSS/<?php echo ''. $_SESSION['user_theme'] .'' ; ?>/small_stylesheet_admin.css" type="text/css" rel="stylesheet" media='screen and (max-width: 999px)'>
		<meta name="viewport" content="user-scalable=no, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<script type="text/javascript" src="../JS/mobile.js"></script>
		<meta charset="UTF-8">
		
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="../IMG/FAVICON/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../IMG/FAVICON/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../IMG/FAVICON/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../IMG/FAVICON/apple-touch-icon-76x76.png">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/android-chrome-72x72.png" sizes="72x72">
		<link rel="icon" type="image/png" href="../IMG/FAVICON/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../IMG/FAVICON/manifest.json">
		<link rel="mask-icon" href="../IMG/FAVICON/safari-pinned-tab.svg" color="#4f0f0f">
		<meta name="apple-mobile-web-app-title" content="Thom Underground">
		<meta name="application-name" content="Thom Underground">
		<meta name="msapplication-TileColor" content="#bc1f1f">
		<meta name="theme-color" content="#ffffff">
		
		<!-- Photo -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
		<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<script type="text/javascript">
				$('.fancybox-thumbs').fancybox({
				  padding: 0,
				  helpers: {
					overlay: {
					  locked: false,
					}
				  }
				});
				
				$('.fancybox-thumbs').fancybox({
					prevEffect : 'none',
					nextEffect : 'none',

					closeBtn  : true,
					arrows    : true,
					nextClick : true,

					helpers : {
						thumbs : {
							width  : 50,
							height : 50
						}
					}
				});
				
				
		</script>
		
		<!-- scripts -->	
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			var jQuery_1_8_2 = $.noConflict(true);
		</script>
		<style type="text/css">
			${demo.css}
		</style>
		<script src="JS/table.js"></script>
		<script src="JS/jquery-2.2.3.min.js"></script>
		<script src="JS/bootstrap.min.js"></script>
		<script src="JS/app.min.js"></script>
        <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=81aoftnoi12moashjwz6tqxfh5fzwd62rqqr2xceo2a3ynwr"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
		
		<!-- Plugins -->
		<!-- Date Pricker -->
		<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
		<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
		<!-- jvectormap-->
		<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
		<script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
		<script src="JS/gdp-data.js"></script>
		<!-- Photo Light-Box -->
		<link href="plugins/lightbox2-master/lightbox2-master/dist/css/lightbox.css" type="text/css" rel="stylesheet">
		<script src="plugins/lightbox2-master/lightbox2-master/dist/js/lightbox.js"></script>

		<!--[if lt IE 9]>
		<script src="JS/html5shiv.js"></script>
		<![endif]-->
		
		
		
		<!-- Info
			Theme naam: 	 Daan van Beusekom Theme
			version:		 admin_v. 0.7.3 beta 2
			Description:  	 Deze site is gemaakt voor Daan van Beusekom
			made by:		 Daan van Beusekom
			site:			 daanvanbeusekom.tk
		-->
		

	
	</head>
	
	<script>

		var myVar=setInterval(function(){myTimer()},500);



		function myTimer()

			{

				var d=new Date();

				var t=d.toLocaleTimeString();

				var y=d.getDate();

				var m=d.getMonth()+1;

				var j=d.getFullYear();

				document.getElementById("footer-2").innerHTML=" <b>"+y+"/"+m+"/"+j+" "+t+"</b>";

			}

	</script>
	
	<body>
		<div id="body_wrapper">
			<div id="top_body_wrapper">
				<a id="logo_button" href="admin.php" ><h3 style="margin-top:4px">On My Way </h3></a> 
					<nav>
						<ul id="menu" class="menu" style="margin-left:10px;">
							<li>
								<a href="admin.php">Home</a>
							</li>
							<li>
								<a href="../index.php"><i class="fa fa-home"></i> On My Way</a>
							</li>
						</ul>
					</nav>
                
					
					<div id="user_info">
                        
						<div id="profile_photo">
							<img src="<?php echo ''. $_SESSION['user_img'] .'' ; ?>">
						</div>
						<div id="nav_admin">
							<ul>
								<li>
									<a href="#" onClick="return true" ><?php echo '' . $_SESSION['user_name'] . ''; ?></a>
										<ul>
											<div id="drop_image"><img src="<?php echo ''. $_SESSION['user_img'] .'' ; ?>" id="profile_photo_drop"></div>
											<li><a href="user.php?user=<?php echo ''. $_SESSION['user_id'] .'' ; ?>" id="drop"><?php echo '' . $_SESSION['user_name'] . ''; ?></a>
											<li><a href="user-edit.php?user=<?php echo ''. $_SESSION['user_id'] .'' ; ?>" id="drop">Profiel wijzigen</a></li>
											<li><a href="sign_out.php" id="drop">Uitloggen</a></li>
										</ul>
								</li>
							</ul>
						</div>
                    </div>
            
                    <!--<div id="notifications">
                    <ul>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                    <?php 
                                        $amount = noti_count($connection, $_SESSION['user_id']);
                                        if($amount > 0){
                                    ?>
                                    <span class="label label-warning"><?php echo $amount;?></span>
                                    <?php
                                        }
                                    ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Je hebt 
                                    <?php 
                                        echo $amount; 
                                        if($amount == 1){
                                            echo " melding";
                                        }else{
                                            echo " meldingen";
                                        }
                                    ?>
                                </li>
                                    <?php  
                                        if($amount > 0){
                                    ?> 
                                <li>
                                    
                                    <ul class="menu">
                                            <?php  
                                                $user_id = $_SESSION['user_id'];
                                                $SQL = "SELECT * FROM notifications WHERE noti_user='$user_id' ORDER BY noti_id DESC";

                                                $result = $connection->query($SQL);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    $noti_cat = $row['noti_cat'];
                                                    $noti_title = $row['noti_title'];
                                                    $noti_link = $row['noti_link'];

                                                    echo "<li>";
                                                    echo "<a href='$noti_link'>";
                                                    echo "<i class='" . noti_cat_to_class($connection, $noti_cat) . "'></i>" . $noti_title;
                                                    echo "</a>";
                                                    echo "</li>";

                                                }
                                            ?> 
                                        </ul>
                                    </li>
                                    <?php
                                        }
                                    ?> 
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>-->
            </div>
		
			<div id="left_body_wrapper">
				<section class="sidebar">
					<menu id="side_menu">
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
						  <input type="text" name="q" class="form-control" placeholder="Search...">
							  <span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
					<ul>
					<?php
						$full_name = $_SERVER['PHP_SELF'];
						$name_array = explode('/',$full_name);
						$count = count($name_array);
						$page_name_menu = $name_array[$count-1];
					?>
						<li class="<?php echo ($page_name_menu=='admin.php')?'active':'';?>">
							<a href="admin.php"><i class="fa fa-tachometer"></i>&nbsp; Dashboard</a>
						</li>
						<li class="treeview <?php echo ($page_name_menu=='static.php')?'active':'';?>">
							<a href="#"><i class="fa fa-bar-chart"></i>&nbsp; Statistieken
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="static.php"><i class="fa fa-caret-right"></i> Statistieken</a></li>
								<li><a href="index2.html"><i class="fa fa-caret-right"></i> Google Zoek</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page_name_menu=='pages.php')?'active':'';?>"><a href="pages.php"><i class="fa fa-clone"></i>&nbsp; Pagina's</a></li>
						<li class="treeview <?php echo ($page_name_menu=='media.php')?'active':'';?>">
							<a href="#"><i class="fa fa-picture-o"></i>&nbsp; Media
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="media.php"><i class="fa fa-caret-right"></i> Media</a></li>
								<li><a href="media.php"><i class="fa fa-caret-right"></i> Upload</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page_name_menu=='messages.php')?'active':'';?>"><a href="messages.php"><i class="fa fa-commenting-o"></i>&nbsp; Berichten</a></li>
						<li class="<?php echo ($page_name_menu=='theme.php')?'active':'';?>"><a href="theme.php"><i class="fa fa-paint-brush"></i>&nbsp; Weergave</a></li>
						<li class="treeview <?php echo ($page_name_menu=='users.php')?'active':'';?> <?php echo ($page_name_menu=='new_user.php')?'active':'';?> <?php echo ($page_name_menu=='user.php')?'active':'';?>">
							<a href="#"><i class="fa fa-user"></i>&nbsp; Gebruikers
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="users.php"><i class="fa fa-caret-right"></i> Gebruikers</a></li>
								<li><a href="new_user.php"><i class="fa fa-caret-right"></i> New user</a></li>
								<li><a href="user.php?user=<?php echo ''. $_SESSION['user_name'] .'' ; ?>"><i class="fa fa-caret-right"></i> Profiel</a></li>
							</ul>
						</li>
						<li class="treeview <?php echo ($page_name_menu=='recent.php')?'active':'';?> <?php echo ($page_name_menu=='recent_new.php')?'active':'';?>">
							<a href="#"><i class="fa fa-clock-o"></i>&nbsp; Recent
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="recent.php"><i class="fa fa-caret-right"></i> Recent</a></li>
								<li><a href="recent_new.php"><i class="fa fa-caret-right"></i> New recent</a></li>
							</ul>
						</li>
						<li class="treeview <?php echo ($page_name_menu=='extra.php')?'active':'';?>">
							<a href="#"><i class="fa fa-wrench"></i>&nbsp; Extra
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="extra.php?page=extra"><i class="fa fa-caret-right"></i> Extra</a></li>
								<li><a href="extra.php?page=functions"><i class="fa fa-caret-right"></i> Functies</a></li>
								<li><a href="extra.php?page=editor"><i class="fa fa-caret-right"></i> File editor</a></li>
								<li><a href="extra.php?page=social"><i class="fa fa-caret-right"></i> Sociaal</a></li>
								<li><a href="extra.php?page=plugins"><i class="fa fa-caret-right"></i> Plugins</a></li>
							</ul>
						</li>
						<li class="treeview <?php echo ($page_name_menu=='settings.php')?'active':'';?> <?php echo ($page_name_menu=='all_settings.php')?'active':'';?> <?php echo ($page_name_menu=='user-edit.php')?'active':'';?>">
							<a href="#"><i class="fa fa-cogs"></i>&nbsp; Instellingen
							<span class="pull-right-container">
								<i class="fa fa-angle-left"></i>
							</span>
							</a>
							<ul class="treeview-menu" style="display:none;">
								<li><a href="settings.php"><i class="fa fa-caret-right"></i> Instellingen</a></li>
								<li><a href="all_settings.php"><i class="fa fa-caret-right"></i> Alle Instellingen</a></li>
								<li><a href="user-edit.php?user=<?php echo ''. $_SESSION['user_id'] .'' ; ?>"><i class="fa fa-caret-right"></i> Persoonlijk</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page_name_menu=='chat.php')?'active':'';?>">
						  <a href="chat.php">
							<i class="fa fa-envelope"></i> <span>Chat</span>
							<span class="pull-right-container">
							  <small class="label pull-right bg-green">new</small>
							</span>
						  </a>
						</li>
						<li class="<?php echo ($page_name_menu=='contact.php')?'active':'';?>"><a href="contact.php"><i class="fa fa-phone"></i>&nbsp; Contact Maker </a></li>
					</ul>
				</section>
				</menu>
			</div>
			
			<div id="middle_body_wrapper">
			
				<h1><?php echo $page_name; ?></h1>
			
				<div id="local_page">
					<p><?php echo $local_page; ?></p>
				</div>
							
<?php
}else{
?>

<html>
	<head>
	</head>
</html>
<?php
}
?>