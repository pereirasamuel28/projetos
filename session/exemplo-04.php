<?php

session_id('p604b949sb7oblfr78h0nf0kid');

require_once ("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>