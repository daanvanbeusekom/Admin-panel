<?php

$page_title = "Uitloggen";
include "top.php";

session_destroy();
header('Refresh: 2; url=index.php');
?>
<div class="modal-content"><div class="modal-body"><span class="close">&times </span><p>Je bent succesvol uitgelogd.</p></div></div>
<?php

$_SESSION['no_aside'] = true;
?>

<?php

include "bottom.php";
?>