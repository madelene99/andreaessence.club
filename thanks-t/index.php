<!DOCTYPE html>
 
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adrian</title>
 
<!-- Assets -->
<link rel="stylesheet" href="./index_files/tilda-grid-3.0.min.css" type="text/css" media="all">
<link rel="stylesheet" href="./index_files/tilda-blocks-2.12.css" type="text/css" media="all">
<link rel="stylesheet" href="./index_files/tilda-animation-1.0.min.css" type="text/css" media="all">



<!-- Facebook Pixel Code -->
<script>
 !function(f,b,e,v,n,t,s)
 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
 n.queue=[];t=b.createElement(e);t.async=!0;
 t.src=v;s=b.getElementsByTagName(e)[0];
 s.parentNode.insertBefore(t,s)}(window, document,'script',
 'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '443679236153510');
 fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
 src="https://www.facebook.com/tr?id=443679236153510&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --> 


<script>
 fbq('track', 'Lead');
</script>


<script>
 fbq('track', 'Purchase', {
   value: 8,
   currency: '$',
 });
</script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122876136-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122876136-1');
</script>


</head>
<body class="t-body" style="margin: 0px;" onload="gtag('event', 'click', {'event_category': 'spasibo-t','event_label': 'spasibo-t'});">

<!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="134091" data-tilda-page-id="2101658" data-tilda-page-alias="andreasuccess" data-tilda-formskey="0f23d082d005967ce9e43896cae7614d">
<div id="rec41279316" class="r t-rec" style=" " data-animationappear="off" data-record-type="213">
<!-- cover -->
<div class="t-cover" id="recorddiv41279316" bgimgfield="img" style="height:100vh; background-image:url(&#39;before_vitamin.PNG&#39;);">
<div class="t-cover__carrier loaded" id="coverCarry41279316" data-content-cover-id="41279316" data-content-cover-bg="before_vitamin1.PNG" data-content-cover-height="100vh" data-content-cover-parallax="" style="background-image: url(&quot;before_vitamin1.PNG&quot;); height: 100vh; background-attachment: scroll;" src="">
</div> <div class="t-cover__filter" style="height:100vh;background-color:#000;filter:alpha(opacity:40);KHTMLOpacity:0.4;MozOpacity:0.4;opacity:0.4;">
</div>
<div class="t-container"> <div class="t-col t-col_7">
<div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index: 1;"> <div class="t189"> <div data-hook-content="covercontent"> <div class="t189__wrapper"> <div class="t189__title t-title" style="" field="title">Thank you for order! Our Couriers will contact your to schedule delivery time</div>     </div> </div> </div> </div> </div> </div> </div> </div>
</div>
<!--/allrecords-->
  
</body>
</html>





<?php
// ----------------------------конфигурация-------------------------- // 
 

$date=date("d.m.y"); // число.месяц.год 

$time=date("H:i"); // часы:минуты:секунды 

//---------------------------------------------------------------------- // 
 
 

// Принимаем данные с формы 




$name=$_GET['name'];  
$email=$_GET['email'];
$number=$_GET['phone'];
$city=$_GET['city']; 
$adress1=$_GET['adress1']; 
$building1=$_GET['building1']; 
$adress2=$_GET['adress2']; 
$quantity=$_GET['quantity']; 
$quantity=$_GET['quantity']; 
$aq=$_GET['affsub1'];
$aw=$_GET['affsub2'];
$ae=$_GET['affsub3'];
$ar=$_GET['affsub4'];
$at=$_GET['affsub5'];
$cid=$_GET['cid'];
$best=$_GET['best'];
$version=$_GET['version'];
if ($version=="version-t1") {
   if ($quantity=="1") {
       $totalprice=117;
   }
   if ($quantity=="2") {
       $totalprice=199;
   }
   if ($quantity=="3") {
       $totalprice=250;
   }
   if ($quantity=="4") {
       $totalprice=299;
   }
   $delivery=0;
}
if ($version=="version-t2") {
  if ($quantity=="1") {
       $totalprice=107;
   }
   if ($quantity=="2") {
       $totalprice=199;
   }
   if ($quantity=="3") {
       $totalprice=250;
   }
   if ($quantity=="4") {
       $totalprice=299;
   }
   $delivery=0;
}

if ($version=="version-t3") {
   if ($quantity=="1") {
       $totalprice=97;
   }
   if ($quantity=="2") {
       $totalprice=187;
   }
   if ($quantity=="3") {
       $totalprice=237;
   }
   if ($quantity=="4") {
       $totalprice=287;
   }
   $delivery=0;
}

if ($version=="version-t4") {
  if ($quantity=="1") {
       $totalprice=107;
   }
   if ($quantity=="2") {
       $totalprice=199;
   }
   if ($quantity=="3") {
       $totalprice=250;
   }
   if ($quantity=="4") {
       $totalprice=299;
   }
   $delivery=15;
}

if ($version=="version-t5") {
   if ($quantity=="1") {
       $totalprice=97;
   }
   if ($quantity=="2") {
       $totalprice=187;
   }
   if ($quantity=="3") {
       $totalprice=237;
   }
   if ($quantity=="4") {
       $totalprice=287;
   }
   $delivery=15;
}

if ($version=="version-t6") {
   if ($quantity=="1") {
       $totalprice=87;
   }
   if ($quantity=="2") {
       $totalprice=177;
   }
   if ($quantity=="3") {
       $totalprice=227;
   }
   if ($quantity=="4") {
       $totalprice=277;
   }
   $delivery=15;
}



 
 


?>


<form action="https://docs.google.com/forms/d/e/1FAIpQLSe-AnZGPLijityDPQpY5Z1vxCYk4dcrGB7WGYzqydPJrqABZw/formResponse" method="POST">
  
<input type="hidden" name="entry.1535079834" value="<?php echo $name ?>">
 
<input type="hidden" name="entry.1244083462" value="<?php echo $number ?>">
<input type="hidden" name="entry.2103639942" value="<?php echo $city ?>">
 
<input type="hidden" name="entry.950353033" value="<?php echo $adress1 ?>">
<input type="hidden" name="entry.85930695" value="<?php echo $building1 ?>">
<input type="hidden" name="entry.1885593633" value="<?php echo $adress2 ?>">
<input type="hidden" name="entry.1521518812" value="<?php echo $quantity ?>">
<input type="hidden" name="entry.206129407" value="<?php echo $totalprice ?>">

<input type="hidden" name="entry.1783846341"  value="<?php echo $aq ?>" >
<input type="hidden" name="entry.126313629"  value="<?php echo $aw ?>"  >
<input type="hidden" name="entry.1581583934"  value="<?php echo $ae ?>" >
<input type="hidden" name="entry.1113228003"  value="<?php echo $ar?>"  >
<input type="hidden" name="entry.422240260"  value="<?php echo $at ?>"  >
<input type="hidden" name="entry.848866374"  value="<?php echo $best ?>"  >
 
<input type="hidden" name="entry.428198398"  value="<?php echo $version ?>"  >
<input type="hidden" name="entry.1730223636"  value="<?php echo $cid ?>"  >
<input type="hidden" name="entry.1377893156"  value="<?php echo $delivery ?>"  >
 
  
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
  $(document).ready(function() {

    window.history.pushState(null, null, "https://andreaessence.club/thanks/");

a="<?php echo $name ?>";
if (a.length<1) { console.log("why you renew page?")} 
  else
    {good();}

function good(){

    //    urls="https://mazl.trackthis.pw/postback?cid=<?php echo $cid ?>";
      urls="https://trackb.space/click.php?cnv_id=<?php echo $cid ?>";
         $.ajax({
        url:     urls,  
        type:     "GET",  
        dataType: "html",  
        data: $("form").serialize(),  
        success: function(response) {  
              console.log(response);
         //     window.location.href = "https://mens-mane.com/thanks/";

        },
        error: function(response) {  
       //     window.location.href = "https://mens-mane.com/thanks/";
        }
    });

     $.ajax({
        url:     "https://docs.google.com/forms/d/e/1FAIpQLSe-AnZGPLijityDPQpY5Z1vxCYk4dcrGB7WGYzqydPJrqABZw/formResponse",  
        type:     "GET",  
        dataType: "html",  
        data: $("form").serialize(),  
        success: function(response) {  
              console.log(response);
             // window.location.href = "https://mens-mane.com/thanks/";

        },
        error: function(response) {  
          //  window.location.href = "https://mens-mane.com/thanks/";
        }
    });

}


    //document.location.href="https://mens-mane.com/thanks/";
  });
</script>



