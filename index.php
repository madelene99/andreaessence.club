 <link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "dabe8111-35fc-47f8-8a02-d7ec0dc36c2a",
       autoRegister: true,
        notifyButton: {
          enable: true,
        },
    });
  });
</script>
<?php

 ini_set( "display_errors", true );
$url=$_SERVER['REQUEST_URI'];

$resulturl=substr($url,1);
 
//echo $resulturl;

$Pages = array(
'land1.html' ,
'land2.html' ,
'index1.html' ,
'index3.html',
'index4.html'
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