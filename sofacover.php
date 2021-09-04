<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Sofa Slipcover
      </div>
      <div id="author">
        Joseph Lewis | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="../img/Splash-Image-CarTrash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>	My husband likes to pretend like he’s the big bad man of the house, and he struts around with a bunch of swagger. When his buddies come over, in between their insulting each other and laughing while they watch the game, I have noticed that they appreciate a clean house, and my husband most of all. He’s nice enough not to take credit for it (let’s be honest, there’d be a BIG problem if he took the pretending game to THAT level), but my chief complaint is how messy they are.</p>

      <p>If you have kids (or five or six grown men at your house, watching sports and eating all of their preferred snack foods) you know exactly the kind of mess I’m talking about. Add our two cats and the dog into that mix, and things can accumulate and get to disaster-area levels pretty quickly, so I have to stay on top of that constantly, and I swear our couch is a high-powered magnet for just about everything you don’t want to stick to it.</p>

      <p>No one wants to sit on a couch that’s covered in pet fur and food debris.</p>

      <div class="articleImgsmall">
      <img src="../img/CarTrash2-1.jpg" width="100%" />
      </div>

      <p>I don’t know about your house, but in mine, no one wants to clean that couch, either. </p>

      <p>As a stay at home mom, I take pride in the cleanliness of my home.</p>

      <p>I’ve been battling the lint and pet fur on the couch for years. It takes a serious amount of time to brush and vacuum that couch, not to mention if there’s a beer spill or a dropped chicken wing (happens all the time in football season…and baseball season…basketball and hockey, too…yeah, it’s a constant problem for us), and the thing that worries me most is getting a stain on my beautiful couch.</p>

      <p>Yes, it’s a hassle, and up until a few weeks ago, I thought that was just how things had to be. That was, until I discovered the [Product Name].</p>

      <p>I was catching up with an old friend I went to high school with when I was complaining about the dumpster fire—I mean, the aftermath, of a baseball game that went into extra innings—when she told me about this new couch cover she found.</p>

      <p>“It’s great, Monica,” she was saying, “and it’s not like those cheap ones you can find at Walmart or Target. I heard about it from a coworker of mine who actually knows the guy who designed it. You know how some people can just go on and on about nothing, so I was kind of only half-listening as she gave me the whole spiel about how it’s a new fabric blend that’s real stretchy and oh, you know, it’s so stylish and blah blah blah. She went on about it for so long I actually started to get interested in it, and when I researched it on the website, I was surprised at how it looked. I got one a few weeks ago, and I have to confess, Monica, it’s incredible.”</p>

      <p>“Wow, Sherry, that’s crazy. What is it that makes this so great?”</p>

      <div class="blockQuote">
         <i>“It fits my couch great, it’s comfortable, and it’s durable. Oh, the best part is if it gets soiled with anything like pizza sauce or if one of your kids spills a drink on it or something, you just pull it off and throw it in the wash. I love mine! You should look it up and see what you think.”
		</i>
      </div>

      <p>My curiosity was piqued, but I was concerned something like this would be expensive. I promised Sherry I’d take a look at it.</p>

      <p>I was glad I did.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="../img/CarTrash1.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is the new hotness—a quality slipcover in a world of thin, cheap couch covers that do little to actually protect your couch. Made with our Superior Fabric blend (15% spandex and 85% polyester), [Product Name] is our softest blend yet; the perfect amount of stretch without sacrificing your comfort. Stretches to cover a sitting area up to 81 inches in length and 35 inches in width, dimensions which accommodate 83% of standard couches on the market.</p>

      <p>[Product Name] was created with a single goal: to prevent any troublesome lint, fuzz, pet hair and food debris from your garments and furniture, and to make clean up quicker and easier. The [Product Name] is the perfect shield against life’s little undesirables that always seem to camp out on our furniture. Simply stretch the fabric and release to clear off most debris—for the really stubborn things like pet hair and moisture, just remove the slipcover and machine wash/dry. It’s that easy!</p>

      <p>Stretching and lining up this cover with your couch is as simple as it gets, too. Cleverly placed tag labels on the underside of the slipcover show you where to place the slipcover: FRONT or BACK, and one each for the ARMs of the couch. Lining up the slipcover with the appropriate areas of your couch, stretch and tuck. In less than five minutes, you have a premium debris barrier for your couch—and just look at that smooth, pristine look!</p>
    </div>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>"> [Product Name]</a> has sold over 9 million units directly to consumers, even without the help of being sold in stores. The [Product Name] has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on Instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The [Product Name] has started to develop a cult following, and with over 7,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Luke L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        The product was larger than I expected, in a good way ;). The materials are solid and the interior looks like it could definitely handle a few spills. The support sticks used to hold it open seem like they could fall out since there is no sleeve, but otherwise everything looks good.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Anne A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/30/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         Love this car trashcan! Fits my 2008 Toyota Corolla. Both passenger and driver can easily reach it. Can use a regular plastic bag from Walmart to fit inside. I especially like the Velcro strip on the underside that sticks to the carpet to secure it in place. Highly Recommend! Great price!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kim C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
          I was pleasantly surprised by the quality. It might sound silly but I wanted something that would stand up to a fair amount of use as the kids and I spend a LOT of time driving and often eat on the go, creating all kinds of garbage.
			This was perfect for my needs. Good size and well designed.

      </div>
    </div>
    <div class="articleText">
      <p>After seeing the incredible reception this product was getting in such a short time, and with the recommendation from my girlfriend Sherry, I knew I had to try it for myself. I logged on to the company’s official website and ordered one the moment it came back in stock.</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
    <div class="articleText">
      <p>The [Product Name] arrived in just 2 days. I was actually excited to try it, so I unboxed it first thing and…wow. It was soft and stretchy in my hands, completely alleviating my worry that it would cover up my comfy couch cushions with something less than desirable.</p>

      <div class="articleImgsmall">
      <img src="../img/CarTrash1.jpg" width="100%" />
    </div>

	  <p>Let me just say this: slipping the cover over my couch was much easier than I thought it would be. The helpful position labels on the inside of the cover told me exactly where to place the slipcover, so there was no confusion on how to get it set up, and it slipped right over without me having to fight it.</p>
      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>Tucking it in was a breeze, and it didn’t require any finagling to get a tight, clean look over my couch, either. I had the [Product Name] over my couch in less than five minutes, and I will admit right now I was amazed at what a difference it made. My couch actually looked clean and inviting.</p>

      <p>The real test came two days later, when my husband and his buddies came over for the game. First of all, they were impressed with the [Product Name], which says a lot, because this is the most sarcastic, back-biting and insulting group of men you’ve ever known. If they thought it was comfortable, you know it was.</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>Yes, these boys can do a number on a couch. But now, I don’t have to stew in anxiety and invest the time and elbow grease into bringing my couch back from the brink of food and beverage spill-induced death. I just removed the couch cover, threw it in the wash and ran a cycle in the dryer—good as new.</p>

      <p>Talk about a problem solver!</p>

    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their <a class="articleLink" href="<?=$exitLink;?>">official website</a> for just $15.97!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	Of course! I can’t recommend [Product Name] enough. I’ll be honest, a couch cover is a couch cover, but this isn’t about the couch cover. Not exactly. It’s the fabric! There’s something about the stretchy, comfy, durability factor in this blend that I just can’t say enough good things about it. It works great to defend my couch against food and my pets’ shedding, and it’s also super easy to maintain (being washer/dryer safe), and it was a VERY reasonable price.</p>

      <p>What more could I ask for?</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 9 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
