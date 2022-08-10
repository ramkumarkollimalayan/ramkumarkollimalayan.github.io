<?php
    $utm_source = ($_GET["utm_source"])?$_GET["utm_source"]:"google";
    $utm_medium = ($_GET["utm_medium"])?$_GET["utm_medium"]:"direct";
    $utm_campaign = ($_GET["utm_campaign"])?$_GET["utm_campaign"]:"none";
    $utm_term = ($_GET["utm_term"])?$_GET["utm_term"]:"none";
    $utm_content = ($_GET["utm_content"])?$_GET["utm_content"]:"none";

    switch($utm_source){
        case "google":
        $phone = "077-2303455";
        break;
        case "instagram":
        $phone = "077-8040197";
        break;
        case "facebook":
        $phone = "077-8040197";
        break;
        default:
        $phone = "077-2303455";
        break;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    $fullip = $ip." - ".$details->city.", ".$details->region.", ".$details->country; // -> "Mountain View"

    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $mobile = ($detect->isMobile())?1:0;

?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Excellent Brain</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-rtl.min.css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand mob-only" href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
                    </div>
                </div>
            </nav>
            <div class="header_content" id="acquainted">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-xs-12 col-sm-9 col-md-4 col-lg-4 pr-0">
                            <div class="header_form">
                                הטופס נשלח בהצלחה!
                            </div>
                        </div>					
                    </div>
                </div>
            </div>
        </header>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>			
    </body>
</html>
