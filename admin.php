<?php
$page_title = "Indexbeheer";
$page_name = "Dashboard";
$local_page = "<i class='fa fa-tachometer'>&nbsp;</i>Dashboard /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
$SQL = "SELECT COUNT(*) AS NumberOfUrders FROM users;";
$result = $connection_WB->query($SQL);
	
$row = $result->fetch_assoc();{
?>

				<div class="box" id="welcome_message">
					<div class="box-header with-border">
						<h2>Welkom op de Administrator pagina van On My Way.</h2>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
						<p> Hier vind je alle functies die aan het Administratorschap zijn verbonden.</p>
						<br />
						<p>Het Dashboard is het centrale punt van de indexbeheer hier zie je in een oogopslag wat er aan de hand is en zie je de statestieken.</p>
					</div>
				</div>
				

				<div class="box" id="statics_static" style="width:72%">
					<div class="box-header with-border">
						<p> Statistieken :</p>
						
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="statics_static_statics" class="box-body">
						<br />
						<br />
							<script src="JS/highcharts.js"></script>
							<script src="https://code.highcharts.com/modules/exporting.js"></script>

							<div id="container" style=" height: 400px; margin: 0 auto"></div>					
					</div>
				</div>
					
				<div id="page_static" style="width:22%">
					<div id="text_page_static">
						<p> Op dit moment zijn er :</p>
					</div>
					<div id="page_static_aantal">
						<p>6 pagina's</p>
						<p>1 home-pagina</p>
					</div>	
					<br />
					<br />
					<br />
					<a href="pages.php"> bekijk meer </a>
				</div>
				
				<div id="time_static" style="width:22%">
					<div id="txt_time_static">
						<p> Het is op dit moment :</p>
					</div>
					<div id="time_static_time">
						<div id="footer-2">
						
						</div>
					</div>
				</div>
				
				<div id="users_static" style="width:22%">
					<div id="txt_users_static">
						<p> Op dit moment zijn er :</p>
					</div>
					<div id="users_static_aantal">
						<p> <?php echo $row['NumberOfUrders'] ?> gebruikers</p>
					</div>
					<br />
					<br />
					<br />
					<a id="more_users" href="users.php"> bekijk meer </a>
				</div>
				
				<div id="recent_static" style="width:22%">
					<div id="txt_recent_static">
						<p> Recent gebeurt :</p>
					</div>
					<div id="recent_static_info">
						<?php
							include "admin_recent.php"
						?>
					</div>
					<br />
					<a href="recent.php"> bekijk meer</a>
				</div>
				
				<div class="box" id="welcome_message_2">
					<div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
					  <div id="world-map" style="width: 1000px; height: 600px; margin-left:20px;"></div>
					  <script>
						$(function(){
						  $('#world-map').vectorMap({
							map: 'world_mill',
							series: {
							  regions: [{
								values: gdpData,
								scale: ['#C8EEFF', '#0071A4'],
								normalizeFunction: 'polynomial'
							  }]
							},
							onRegionTipShow: function(e, el, code){
							  el.html(el.html()+' (GDP - '+gdpData[code]+')');
							}
						  });
						});
					  </script>
					</div>
				</div>
				
<?php
}
include "bottom_admin.php"

?>

					

				
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>