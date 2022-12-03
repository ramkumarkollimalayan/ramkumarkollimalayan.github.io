<?php
    $utm_source = ($_GET["utm_source"])?$_GET["utm_source"]:"google";
    $utm_medium = ($_GET["utm_medium"])?$_GET["utm_medium"]:"direct";
    $utm_campaign = ($_GET["utm_campaign"])?$_GET["utm_campaign"]:"none";
    $utm_term = ($_GET["utm_term"])?$_GET["utm_term"]:"none";
    $utm_content = ($_GET["utm_content"])?$_GET["utm_content"]:"none";

    switch($utm_source){
        case "google":
        $phone = "077-9967134";
        break;
        case "instagram":
        $phone = "077-9967134";
        break;
        case "facebook":
        $phone = "077-9967134";
        break;
        default:
        $phone = "077-9967134";
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand mob-only" href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a>
                    </div>
                
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#acquainted">בואו נכיר</a></li>
                            <li><a href="#howitworks">איך זה עובד?</a></li>
                            <li><a href="#benefits" >יתרונות</a></li>
                            <li><a href="#recommend">ממליצים</a></li>
                            <li><a href="#contact">צור קשר</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-left desktop-only">
                            <li><a href="#"><img src="images/logo.png" alt="logo" class="img-responsive"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="header_content" id="acquainted">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-xs-12 col-sm-9 col-md-4 col-lg-4 pr-0">
                            <div class="header_desc">
                                <h3>נעים להכיר,</h3>
                                <h2>אנחנו מוח מצוין!</h2>
                                <p>החברה היחידה בעלת פלטפורמה לאימון המוח <strong>ושיפור בעיות קשב והיפראקטיביות</strong> אצל ילדים בשיטת הנוירופידבק המשלבת משחקי מחשב סוחפים</p>
                            </div>
                            <div class="header_form desktop-only">
                                <form>
                                    <div class="form-group">
                                        <label>להתנסות</label>
                                        <input type="text" name="name" placeholder="שם מלא">
                                    </div>
                                    <div class="form-group">
                                        <label>ללא</label>
                                        <input type="tel" name="phone" placeholder="טלפון">
                                    </div>
                                    <div class="form-group">
                                        <label>התחייבות!</label>
                                        <input type="email" name="email" placeholder="דוא”ל">
                                    </div>
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <input type="submit" value="שליחה">
                                    </div>
                                </form>
                            </div>
                        </div>					
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="header_video desktop-only">
                                <iframe width="100%" height="350" src="https://www.youtube.com/embed/oQlws8F5lTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="mob-contact mob-only">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_form">
                            <h2>!להתנסות ללא התחייבות</h2>
                            <form>
                                <div class="form-group">
                                    <label>להתנסות</label>
                                      <input type="text" name="name" placeholder="שם מלא">
                                </div>
                                <div class="form-group">
                                    <label>ללא</label>
                                    <input type="tel" name="phone" placeholder="טלפון">
                                </div>
                                <div class="form-group">
                                    <label>!התחייבות</label>
                                    <input type="email" name="email" placeholder="דוא”ל">
                                </div>
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <input type="submit" value="שליחה">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mob-video mob-only">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 px-0">
                        <div class="header_video">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/oQlws8F5lTQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_one" id="howitworks">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-1 col-md-2 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                        <div class="sec_one_quote">
                            <h2>"המורה הייתה מדברת איתי וזה כאילו היא מדברת לקיר, <strong>לא הבנתי מה היא אומרת"</strong></h2>
                            <p>.אגם אדה בת ה-11 בוגרת תכנית מוח מצוין</p>
                        </div>
                        <div class="sec_one_title">
                            <h2>"עכשיו אני יותר מרוכזת והציונים שלי עלו"</h2>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-1 col-md-2 col-lg-3"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
                    <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 how_works_title">
                        <h2>איך זה<br>עובד?</h2>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-7 how_works_desc">
                        <p>הערכה הביתית של מוח מצוין מהווה למעשה תכנית אימונים רב–שלבית למוח. והיא פועלת בשיטת הנוירופידבק. באמצעותה ניתן לאמן את הפעילות החשמלית של המוח בהתאם למטרת הטיפול. הערכה כוללת חיישן אותו המטופל מניח על ראשו, בזמן שהוא משחק במשחק מחשב שהוגדר לו מראש כחלק מתכנית האימונים שלו. תוך כדי משחק, החיישן דוגם את גלי המוח בזמן אמת, ומעדכן את התכנית בהתאם לקצב התקדמות המשתמש. ככל שהמתאמן ממשיך לשחק, המוח לומד לשמור על ריכוז ולחזק את מיומנות הקשב</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "></div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/004.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>חובשים את החיישן</h4>
                                        <p>המתאמן מניח על ראשו את החיישן אשר<br>דוגם את גלי המוח בזמן אמת</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/005.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>משחקים עם המוח</h4>
                                        <p>בשונה ממשחק מחשב רגיל, המשחק לא מתנהל <br>באמצעות עכבר או מקלדת אלא, באמצעות המוח</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="work-wrap">
                                    <div class="work-img">
                                        <img src="images/006.png" alt="image" class="img-responsive">
                                    </div>
                                    <div class="work-text">
                                        <h4>חזרתיות והתמדה</h4>
                                        <p>ככל שהמתאמן ממשיך לשחק המוח לומד<br>לשמור על ריכוז ולחזק את מיומנות הקשב</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
                </div>
            </div>
        </section>

        <section class="sec_two">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sec_two_image mob-only">
                            <img src="images/007.png" alt="img" class="img-responsive">
                        </div>
                        <div class="sec_two_desc">
                            <h2>להתנסות ללא התחייבות!</h2>
                            <form action="#" method="POST">
                            <input type="text" name="name" placeholder="שם מלא">
                            <input type="tel" name="phone" placeholder="טלפון">
                            <input type="email" name="email" placeholder="דוא”ל">
                            <input type="submit" value="שליחה">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_three" id="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3"></div>
                    <div class="col-xs-12 col-sm-10 col-md-9 col-lg-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sec_three_title">
                                <h2>היתרונות</h2>
                                <p>לאחר שתסיימו את תוכנית האימונים תדעו על מה כולם מדברים ותראו<br>איך חייכם משתנים</p>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>נשאר לתמיד</h3>
                                            <p>לאחר סיום תכנית האימונים ההתקדמות <br>והשינויים מוטמעים אצלכם לתמיד</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>אין כמו בבית</h3>
                                            <p>אין צורך לנסוע לקליניקה, לחפש חניה ולהיות בלחץ <br>ניתן לבצע את האימונים בנוחות ביתכם ובזמנכם החופשי</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>מוכח מחקרית</h3>
                                            <p>נוירופידבק היא שיטה הקיימת עשרות שנים <br>ומבוססת על מחקרים רבים שנעשו ברחבי העולם</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>טבעי לחלוטין</h3>
                                            <p>ההתקדמות והשיפור נעשים אך ורק ע"י המתאמן <br>תחשבו על החיישן כמשקולת בחדר כושר <br>והמוח הוא השריר שמאמנים</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>מערכת החינוך הבינה</h3>
                                            <p>גם במשרד החינוך מוח מצוין מוכרת כתוכנית פעילה <br>ומספר בתי ספר כבר משתתפים בתוכנית</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="sec_three_desc">
                                            <h3>אימון ע"י משחק</h3>
                                            <p>אין דבר יותר טוב מלשחק, להנות ובו זמנית <br>גם לאמן את המוח בתוכנית האימונים <br>תוכלו לשחק משחקים וגם להתאמן</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_four" id="recommend">
            <div class="container">
                <div class="row vcenter">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sec_four_title">
                        <h2>ממליצים</h2>
                        <p>אל תסמכו על המילה שלנו, ראו מה לקוחות שכבר<br>.עשו את תכנית האימונים אומרים</p>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div id="recommend_slide" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/011.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>ניסיתי את כל המשחקים והשיטות בעולם שאולי יעזרו לי להתרכז וסוף סוף מצאתי את מוח מצוין שיטה מדהימה שנותנת לי ולדור ההמשך דרך שבה נצעד מרוכזים יותר<span>רני קאוצ'ינסקי</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/012.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>פניתי למוח מצוין אחרי שראיתי את התסכול של ביתי בכיתה, הקשיים שהיו לה להתרכז ולעקוב אחרי החומר. אני חייבת להגיד שלאחר מספר אימונים הרגשנו את השינוי בהתנהגות שלה<span>סופי ועינב יונס</span></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recommend-wrap">
                                    <div class="recommend-img">
                                        <img src="images/013.png" alt="image" class="img-responsive">
                                    </div>
                                    <p>לאחר שהבת שלי השלימה את הטיפול, הרגשנו שחל שיפור ניכר בריכוז שלה, במסוגלות שלה, משהו השתנה לטובה כל כך! עקב ההצלחה, אחותה הקטנה גם עברה את התהליך<span>ליאת מנדל גור</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec_five" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11">
                        <div class="sec_five_desc">
                            <h2>להתנסות ללא התחייבות!</h2>
                            <form action="#" method="POST">
                            <input type="text" name="name" placeholder="שם מלא">
                            <input type="tel" name="phone" placeholder="טלפון">
                            <input type="email" name="email" placeholder="דוא”ל">
                            <input type="submit" value="שליחה">
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
	      <script type="text/javascript">
            var actionLink = 'ajax.php';
            $("form").submit(function(e) {
                var postData = $(this).serializeArray();

                postData[postData.length] = {
                    name: "utm_source",
                    value: "<?=$utm_source?>"
                };
                postData[postData.length] = {
                    name: "utm_campaign",
                    value: "<?=$utm_campaign?>"
                };
                postData[postData.length] = {
                    name: "utm_term",
                    value: "<?=$utm_term?>"
                };
                postData[postData.length] = {
                    name: "utm_content",
                    value: "<?=$utm_content?>"
                };
                postData[postData.length] = {
                    name: "mobile",
                    value: "<?=$mobile?>"
                };
                postData[postData.length] = {
                    name: "fullip",
                    value: "<?=$fullip?>"
                };

                $.ajax({
                    url: actionLink,
                    type: "POST",
                    data: postData,
                    success: function(data, textStatus, jqXHR) {
                        if (data == "error") {
                            window.alert("ישנה בעיה עם מערכת ההודעות, אנא התקשר.");
                        } else {
							//SendLead();
                            $('form').fadeOut().html('<h3 style="text-align:center;color:#000;font-size:20px;">הטופס נשלח בהצלחה</h3>').fadeIn();
							window.location = "thankyou.php";
                        }
                    },
                    error: function(request, error) {
                        console.log(error);
						
                    }
                });
                e.preventDefault();
                return false;
            });
			
			</script>				
    </body>
</html>
