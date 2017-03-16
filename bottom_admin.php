            

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal');

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }

                        // Closes the model automatically after a few seconds
                        setTimeout(function () {
                              modal.style.display = "none";
                            }, 2000000);
                        }
                    </script>
                    <script>
                    var close = document.getElementsByClassName("closebtn");
                    var i;

                    for (i = 0; i < close.length; i++) {
                        close[i].onclick = function(){
                            var div = this.parentElement;
                            div.style.opacity = "0";
                            setTimeout(function(){ div.style.display = "none"; }, 600);
                        }
                    }
                    </script>
				</div>

                
                
                

                <div id="bottom_body_wrapper">
                        <footer>
                            <div class="pull-right hidden-xs">
                                <b>Version</b> 0.7.3 beta 2
                            </div>
                            <strong>Copyright © 2015 - 2017</strong>
                        </footer>
                </div>

			</div>

			<script src="plugins/lightbox2-master/lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>
			<script type="text/javascript">
			var jQuery_2_1_4 = $.noConflict(true);
		</script>
		</body>
	</html>
