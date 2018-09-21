 
<?php

 ini_set( "display_errors", true );
$url=$_SERVER['REQUEST_URI'];

$resulturl=substr($url,1);
 
//echo $resulturl;

$Pages = array(
'land1.html' ,
'land2.html',
'land1-95.html',
'land2-95.html'
);

$MaxRandom = getrandmax();
$RandomValue = intval( rand( 0 , count( $Pages ) - 1 ) );
$pagevar=$Pages[ $RandomValue ];
//$realurl=$pagevar.$resulturl;
//echo $realurl;
//echo "sd";

//header( 'Location: '.$Pages[ $RandomValue ] );
//header( 'Location: '.$realurl );

include $pagevar;
?>

<script type="text/javascript">
	console.log("<?php echo $pagevar ?>")
</script>