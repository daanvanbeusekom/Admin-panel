<?php

$actual_link = "$_SERVER[REQUEST_URI]";

?>




<h1>Forbidden</h1>
<p>You don't have permission to access <?php echo str_replace('www.','', $actual_link);?> 
on this server.</p>
<hr>
<address>Apache/2.4.1 Server at www.onmyway.tk Port 80</address>
