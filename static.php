<?php
$page_title = "Indexbeheer";
$page_name = "Statistieken";
$local_page = "<i class='fa fa-bar-chart'></i>&nbsp;Statistieken /";
include "top_admin.php";

if($_SESSION['user_level'] == 1){
	
?>
		<div class="alert">
						  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span> 
						  <strong>Gevaar!</strong> Deze informatie klopt nog niet, niet gebruiken!.
						</div>

        <div class="col-md-3 col-sm-6 col-xs-12" style="padding:0px; padding-right:3%;">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

       <div class="col-md-3 col-sm-6 col-xs-12" style="padding:0px; padding-right:3%;">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12" style="padding:0px; padding-right:3%;">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Sales</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>

        <div class="col-md-3 col-sm-6 col-xs-12" style="padding:0px; padding-right:3%;">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

		<div class="box col col-50" id="welcome_message">
					<div class="box-header with-border">
						<p> Bandbreedte :</p>
						
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

            <div class="box col col-50 red-border right" id="welcome_message">
					<div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
					  <div id="world-map" style="width: 85%; height: 450px; margin-left:20px; margin-top:-40px;"></div>
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

                <div class="box col col-25 aqua-border left" id="welcome_message">
				    <div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
                        <P>Hello ik ben daan en wie bent u, dit is een test, want de collums doen een beetje raar vandaag, nog een testje want als de tekst meer word blijkt alles op te gaan schuiven.</P>
                        <br/>
                        <p>Nu nog met een lege regel er tussen, wat een werk zeg!</p>
                        <br/>
                        <p>Dat lijkt hij te doen jippie, volgens mij zijn de problemen nu wel eventjes op gelost, hop en weer verder met het volgende probleem, ruimte tussen de collums :(</p>
                    </div>
				</div>	

                  <div class="box col col-25 grey-border" id="welcome_message">
					<div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
                        <P>Hello ik ben daan en wie bent u, dit is een test, want de collums doen een beetje raar vandaag, nog een testje want als de tekst meer word blijkt alles op te gaan schuiven.</P>
                        <br/>
                        <p>Nu nog met een lege regel er tussen, wat een werk zeg!</p>
                        <br/>
                        <p>Dat lijkt hij te doen jippie, volgens mij zijn de problemen nu wel eventjes op gelost, hop en weer verder met het volgende probleem, ruimte tussen de collums :(</p>
                        <br />
                        <p>Eventjes een copietje</p>
                    </div>
				</div>

                <div class="box col col-25 yellow-border" id="welcome_message">
					<div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
                        <P>Hello ik ben daan en wie bent u, dit is een test, want de collums doen een beetje raar vandaag, nog een testje want als de tekst meer word blijkt alles op te gaan schuiven.</P>
                        <br/>
                        <p>Nu nog met een lege regel er tussen, wat een werk zeg!</p>
                        <br/>
                        <p>Dat lijkt hij te doen jippie, volgens mij zijn de problemen nu wel eventjes op gelost, hop en weer verder met het volgende probleem, ruimte tussen de collums :(</p>
                        <br />
                        <p>Eventjes een copietje</p>
                    </div>
				</div>

                <div class="box col col-25 blue-border" id="welcome_message">
					<div class="box-header with-border">
						<p>Sessies</p>
				 
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					
					<div id="text_welcome_message" class="box-body">
                        <P>Hello ik ben daan en wie bent u, dit is een test, want de collums doen een beetje raar vandaag, nog een testje want als de tekst meer word blijkt alles op te gaan schuiven.</P>
                        <br/>
                        <p>Nu nog met een lege regel er tussen, wat een werk zeg!</p>
                        <br/>
                        <p>Dat lijkt hij te doen jippie, volgens mij zijn de problemen nu wel eventjes op gelost, hop en weer verder met het volgende probleem, ruimte tussen de collums :(</p>
                        <br />
                        <p>Eventjes een copietje</p>
                    </div>
				</div>

                <div class="box col col-25 green-border" id="welcome_message">
				    <div class="progress">
                      <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar"
                      aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80%
                      </div>
                    </div>
				</div>

                 <div class="box col col-75 red-border" id="welcome_message">
                     
				 
                         
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					
					
					
                     
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#menu1">Menu 1</a></li>
                            <li><a href="#menu2">Menu 2</a></li>
                            <li><a href="#menu3">Menu 3</a></li>
                          </ul>
                        
                    <div id="text_welcome_message" class="box-body">
                          <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus ultricies lorem, sed sollicitudin arcu maximus at. Pellentesque suscipit risus id turpis porttitor auctor. Donec viverra nibh orci, quis gravida odio eleifend id. Suspendisse potenti. Quisque pharetra quam eget nunc laoreet, ut volutpat nunc vestibulum. Proin justo turpis, luctus at maximus eget, elementum quis lorem. Sed massa nulla, vulputate at aliquet et, lacinia in odio. Nulla sit amet diam in odio tempus congue. Morbi tortor nisi, tristique in purus nec, venenatis venenatis sapien. Phasellus ut velit sem. Proin faucibus mattis metus in interdum. In molestie finibus arcu vel iaculis. Quisque sollicitudin erat nec maximus dictum.</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Vestibulum sollicitudin lorem justo, non faucibus odio rhoncus ac. Donec facilisis ligula a volutpat euismod. Mauris ullamcorper sagittis porta. Sed congue justo augue, sit amet sollicitudin dui lobortis at. Aenean lobortis ex a sem pulvinar suscipit. Proin porta tincidunt ornare. Quisque congue neque et velit tristique mattis. Nam semper facilisis est, a convallis metus sollicitudin ac. Quisque volutpat nisi at viverra consequat. Suspendisse dignissim volutpat dictum. Vivamus eu aliquet tortor, at consectetur massa. Duis finibus libero libero. Ut sagittis justo ac varius placerat. Aenean lacinia, arcu eu sagittis dignissim, nunc orci porta est, eget tempor arcu ligula non libero. Suspendisse rutrum eros ex, nec pharetra est commodo consequat.

In a tellus sodales, tincidunt lectus volutpat, finibus mi. Integer cursus est id hendrerit dapibus. Fusce finibus nunc vitae faucibus aliquam. Vivamus venenatis laoreet ex, in lacinia dolor sodales eget. Pellentesque mollis, nibh vel aliquam mattis, neque tortor ornare nisi, commodo posuere est velit quis elit. Nullam et purus ex. Nullam dictum vestibulum velit, non suscipit eros consequat a.</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                          </div>
                        
                     </div>

                    <script>
                    $(document).ready(function(){
                        $(".nav-tabs a").click(function(){
                            $(this).tab('show');
                        });
                        $('.nav-tabs a').on('shown.bs.tab', function(event){
                            var x = $(event.target).text();         // active tab
                            var y = $(event.relatedTarget).text();  // previous tab
                            $(".act span").text(x);
                            $(".prev span").text(y);
                        });
                    });
                    </script>
				</div>

                <!--<div class="box col col-25 green-border" id="welcome_message">
                    <a class='fancybox-thumbs' data-fancybox-group='thumb' href='http://www.denieuweschepenvandoeksen.nl/wp-content/uploads/2017/01/7247-1-7122-A-3D-Exterior-Rendering-1-NO-LOGO.jpg'><img src="http://www.denieuweschepenvandoeksen.nl/wp-content/uploads/2017/01/7247-1-7122-A-3D-Exterior-Rendering-1-NO-LOGO.jpg" style="width:auto; height:180px;"></a>
				</div>-->

                <div class="box col col-25 green-border" id="welcome_message">
					<div id="text_page_static">
						<p> Op dit moment zijn er :</p>
					</div>
					<div id="page_static_aantal">
						<p>6 pagina's</p>
						<p>1 home-pagina</p>
					</div>	
					<br>
					<br>
					<br>
					<a href="pages.php"> bekijk meer </a>
				</div>

                <div class="box col col-80 green-border" id="welcome_message">
                    <p>Test</p>
                </div>

				
<?php

include "bottom_admin.php"

?>
				
<?php
}else{

include "forbidden.php"
?>

<?php
}
?>