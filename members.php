<?php
session_start();
include("includes/banned.php");
include("includes/database.php");
require("steam/steamauth/steamauth.php");
include("steam/steamauth/userInfo.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <body style="background:url('img/background.png'); background-size: cover;">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            
            <title>Gits Gaming Clan</title>
            
            <!--Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="css/stylish-portfolio.css" rel="stylesheet">
            
            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            
            <link href="css/member.css" rel="stylesheet">
            <link href="css/members.css" rel="stylesheet">
        </head>
        <style>
        #sidebar-wrapper{
        margin-top: -20px;
        }
        </style>
        <!-- Navigation -->
        <?php include("includes/navigation.php"); ?>
        <center>
        <h1 style="font-size:2.2em;">
        <font color="#FF0000">|</font><font color="#006cff">GITS</font><font color="#FF0000">|</font> Members
        </h1>
        </center>
        <div class="padder"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="GENERAL"></a>
                        <img src="img/avatars/gen.png" alt="gen">
                        <h3>GENERAL<small>Founder</small></h3>
                        <p>General founded <font color="#FF0000">|</font><font color="#006cff">GITS</font><font color="#FF0000">|</font> in March of 2006 Starting with the Call of Duty series. Moving onwards hosting Arma 3, Battlefield and other games. <br> Kid's and server bills are expensive, donations... Always Welcome.</p>
                        <div class="staff-social">
                            <a href="http://www.gitsclan.co.uk/donating.html"><i class="fa fa-paypal" aria-hidden="true"></i></a>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="N@@B"></a>
                        <img src="img/avatars/nab.png" alt="N@@B">
                        <h3>N@@B <small>Poepnoob</small></h3>
                        <p>I Enjoy a little wasteland, mainly Epoch. Root is my god and i cannot handle legitimate kills.<br> Poepnoob Poepnoob Poepnoob <br><br> "I'm Naked" </p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Rick"></a>
                        <img src="img/avatars/rick.png" alt="Rick">
                        <h3>Rick<small>Poepnoob</small></h3>
                        <p>In house developer <br>My opinions. Not necessarily shared by reasonable-minded people nor my benevolent corporate overlords<br><br> "You are all retards."</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Root"></a>
                        <img src="img/avatars/root.png" alt="Root">
                        <h3>Root <small>Poepnoob</small></h3>
                        <p>Our very own in house Developer and Gay, My blood is made of tea. I'm about the only person on Twitter who doesn't claim to be a social media guru. <br><br>Awaiting next cup of tea <i class="fa fa-spinner fa-spin" aria-hidden="true"></i> </p>
                        <div class="staff-social">
                            <a href="mailto:root@gitsclan.co.uk"><i class="fa fa-envelope" aria-hidden="true"></i></a>&nbsp;
                            <a href="https://twitter.com/thatsowen4u"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;
                            <a href="https://www.youtube.com/channel/UCcqvQPCSnrOAxCfqH47ZyVQ/featured"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>&nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Shanings"></a>
                        <img src="img/avatars/shanings.png" alt="Shanings">
                        <h3>Shanings<small>Administrator<br> Head of Retards</small></h3>
                        <p>Shanings is our lead Psychologist (unlicensed) he joined GITS as they were the only place that would except his expectational skill-set. Specialising in being a Specialist of Special Squads he works tirelessly to get out his weekly content. If you havent realised hes pretty sarcastic.</p>
                        <div class="staff-social">
                            <a href="https://www.youtube.com/channel/UC8vq2JKdZp3CYez2U-4f1cQ"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>&nbsp;
                            <a href="https://twitter.com/Shanings1"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Chasin"></a>
                        <img src="img/avatars/chasin.png" alt="Chasin">
                        <h3>Chasin <small>Administrator</small></h3>
                        <p>Chasin is just an absolute orgy of indecency. <br><br> "If you're gonna be a smartass, first you have to be smart. Otherwise you're just an ass."</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Smoke"></a>
                        <img src="img/avatars/smoke.png" alt="Smoke">
                        <h3>Smoke <small>Administrator</small></h3>
                        <p>One of the three great Welshman of the clan. Smoke is one of the happiest, jollyest and strangest people you will meet. Just don't ask him about his past stories.</p>
                        <div class="staff-social">
                            <a href="https://twitter.com/Welsh_Infidel"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Killer Epin"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/a9/a9527f88cbd87f45aa8171acfe02804ba4fa844d_full.jpg" alt="Killer Epin">
                        <h3>Killer Epin <small>Administrator</small></h3>
                        <p>Another great Welshman of GITS Killer sometimes comes up for air when he takes his daily break from Eve, he has a problem but is in denial.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Inctrl"></a>
                        <img src="img/avatars/inctrl.png" alt="Inctrl">
                        <h3>Inctrl <small>Administrator</small></h3>
                        <p>Inctrl is the most mellow of us all, away roving and pillaging the world seas for most of it but always Inctrl. He regularly forgets to disable his swag when he signs off, always waking up covered in bitches.<br><br>"God created earth, and as a finishing touch he created the dutch."</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Sidjj"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/c2/c2d65bcaa6eca14547324b497dcebd1909364651_full.jpg" alt="Sidjj">
                        <h3>Sidjj <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Milo"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/d1/d17a31963855fd0447ba00bb73d398b51cc439a7_full.jpg" alt="Milo">
                        <h3>Milo <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Mazza"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/03/03b3dd79391094b53401e53e99b80d36bbc5bc40_full.jpg" alt="Mazza">
                        <h3>Mazza <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Ransacker"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/eb/ebdafa4c942009d583f8409952323fcf880ec214_full.jpg" alt="Ransacker">
                        <h3>Ransacker <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Charlie"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/d2/d27043f6d10855ae2f9044b5fb78e7b54d479073_full.jpg" alt="Charlie">
                        <h3>Charlie <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Bash"></a>
                        <img src="img/avatars/bash.png" alt="Bash">
                        <h3>Bash<small>Administrator</small></h3>
                        <p>Our Professional CSGO player, our very own child. We teach him the way's of life, put him on the right path. He's also completely obsessed with his penis. (We have all seen it) <br><br>"The R stands for Loyal"</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Javi"></a>
                        <img src="img/avatars/javi.png" alt="Javi">
                        <h3>Javi <small>Administrator</small></h3>
                        <p>Our beloved Javier, absolute stoner... too stoned to write his own description. He's our professional showgirl, you need help crossing the border? he's got you covered. <br><br>"Fuck, I wish I had a joint man."</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Nathan"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/af/af1bbf5777decc4247afaaa05926a8faf2321ccb_full.jpg" alt="Nathan">
                        <h3>Nathan<small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Combatdude"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/6b/6bcc94df860e8be8a493c9c2e92037906a7b1a82_full.jpg" alt="Combatdude ">
                        <h3>Combatdude  <small>Administrator</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Make76"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/df/dff5786e20c3cfc062daa14671afbfb5cfdf8cc1_full.jpg" alt="Make76">
                        <h3>Make76 <small>Member</small></h3>
                        <p>Awaiting Text.</p>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Jackal"></a>
                        <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/88/88bb7821587e54f6c19a2fdf8b47806a857d65fe_full.jpg" alt="Jackal">
                        <h3>Jackal<small>Member</small></h3>
                        <p>Pro GTA player, what he lacks in real life cash is the opposite when it comes to online shark cards. <br><br> "Quality! I'm currently writing my guide on how to be great at GTA Javi"</p>
                    </div>
                </div>              
            </div>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-3 col-md-offset-0">
                    <div class="staff-profile" data-fit-for=".staff-profile in .row" data-department="">
                        <a name="Felix"></a>
                        <img src="img/felix.jpg" alt="Jackal">
                        <h3>Felix<small>Assistant Web Developer</small></h3>
                        <p>I'm not actually a GITS member but I felt like putting myself here, 100% not gay (stay away Root)</p>
                    </div>
                </div> 
            </div>
            
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme JavaScript -->
<script>
// Closes the sidebar menu
$("#menu-close").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});
// Opens the sidebar menu
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});
// Scrolls to the selected menu item on the page
$(function() {
$('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
if (target.length) {
$('html,body').animate({
scrollTop: target.offset().top
}, 1000);
return false;
}
}
});
});
//#to-top button appears after scrolling
var fixed = false;
$(document).scroll(function() {
if ($(this).scrollTop() > 250) {
if (!fixed) {
fixed = true;
// $('#to-top').css({position:'fixed', display:'block'});
$('#to-top').show("slow", function() {
$('#to-top').css({
position: 'fixed',
display: 'block'
});
});
}
} else {
if (fixed) {
fixed = false;
$('#to-top').hide("slow", function() {
$('#to-top').css({
display: 'none'
});
});
}
}
});
</script>
</html>