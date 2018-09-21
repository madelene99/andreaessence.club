 
<?php

 ini_set( "display_errors", true );
$url=$_SERVER['REQUEST_URI'];

$resulturl=substr($url,1);
 
echo $resulturl;

$Pages = array(
'?version=1', 
'?version=2' 

);

$MaxRandom = getrandmax();
$RandomValue = intval( rand( 0 , count( $Pages ) - 1 ) );
$pagevar=$Pages[ $RandomValue ];
//echo "string";
$pagevar="index1.html".$pagevar;
//$realurl=$pagevar.$resulturl;
//echo $realurl;
//echo "sd";

//header( 'Location: '.$Pages[ $RandomValue ] );
//header( 'Location: '.$realurl );

include "index1.html?version=2";
?>

<script type="text/javascript">
	console.log("<?php echo $pagevar ?>")
</script>