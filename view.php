html 
<div>
  <ul>
    <li>SORT HREF</li>
  </ul>
</div>
<?php
$act=$empty($_GET['t']) ? $_GET['t'] :false;
if($act){
  include 'path/'.$act.'.html';
  //<div data="tid"><h2></h2><uid>,<refid>,</div>
}
?>
