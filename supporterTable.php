<?php
$headername = 'Supporters Table';

$links = array('index','recurringsupporterTable','cancelledsupporterTable');

foreach($links as $names)
{

   $linkname .= "<a  href='{$names}.php' type='button' class='dropdown-item '>{$names}</a>";
   
}

$linkname;


require_once('src/components/header.php');

require_once('src/pages/supporters.php');

require_once('src/components/footer.php');
?>