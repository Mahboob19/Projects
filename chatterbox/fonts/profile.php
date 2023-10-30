<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel="stylesheet" href="bootstrap/css/glyphicons.css">
     <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700|Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
     <style>
   #profile {
	background:#cf455c;
	background-image: url(images/header-shadow.png);
	background-position: center bottom;
	background-repeat: repeat-x;
	overflow: hidden;
}
.about {
	float: left;
	margin-top: 30px;
	width: 490px;
	margin-left: 20px;
}
.about .photo-inner {
    float: left;
    background: url(images/photo-inner.png) no-repeat;
    width: 214px;
    height: 212px;
    padding: 12px 0 0 19px;
}
.about .photo-inner img {
	background-color: #FFF;
}
.about h1 {
	font-weight: 900;
	color: #FFF;
	line-height: 34px;
	margin-top: 8px;
}
.about h3 {
	margin-top: 5px;
	font-size: 18px;
	color: #FFF;
	line-height: 18px;
    font-family: 'Roboto Condensed', sans-serif;
}
      h3.main-heading .now{
            background: #cf455c !important;
        }
.about p {
	font-size: 14px;
	margin-top: 15px;
	color:#fff;
	font-weight: 400;
	line-height: 24px;
    font-family: 'Roboto Condensed', sans-serif;
}
.personal-info {
    float: left;
    margin-top: 30px;
    width: 310px;
    min-height: 230px;
    margin-left: 10px;
    background: url(images/personal-info-sep.png) no-repeat left top;
    padding: 20px 0 19px 20px;
}
span.word-wrap a {
    color: #fff;
}
.personal-info li {
    line-height: 12px;
    font-size: 14px;
    margin-bottom: 10px;
    overflow: hidden;
    float: left;
    width: 293px;
}
.personal-info li label {
	color:#fff;
	float: left;
	padding: 4px 7px;
	font-weight: 550;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
    text-transform: uppercase;
    font-family: 'Roboto Condensed', sans-serif;
}
.personal-info li span {
	float: right;
	width: 220px;
	padding-top: 4px;
	font-weight: 400;
	color:#fff;
    font-family: 'Roboto Condensed', sans-serif;
    text-transform: uppercase;
}
 #resume {
    padding: 0px 0px;
    overflow: hidden;
}

.skills-section, .timeline-section {
	float: left;
}
.timeline-section {
    width: 100%;
}
.timeline {
	margin-bottom: 30px;
}

.timeline li {
	margin-bottom: 20px;
}
.timeline li .timelineUnit {
	line-height: 17px;
	margin-left: 0px;
	color: #444;
	font-size: 13px;
	border-left: 1px solid #cf455c;
	padding-left: 15px;
}
.timeline li .timelineUnit .timelineDate {
	line-height: 17px;
	color:#cf455c;
	font-size: 14px;
	margin-left: 10px;
	font-weight: normal;
	padding: 2px 6px;
	float: right;
}
.timeline li .timelineUnit h4 {
	line-height: 24px;
	font-size: 15px;
	color: #444;  
}
.timeline li .timelineUnit h5 {
	line-height: 18px;
	font-size: 13px;
	color: #999;
}
.timeline li .timelineUnit p {
	color: #666;
	font-size: 12px;
	margin-top: 5px;
}
.skills-section {
	width: 270px;
}
.skills {
	margin-bottom: 25px;
	overflow: hidden;
}
.skills li {
	margin-bottom: 15px;
	float: left;
	padding-left: 0px;
}
.skills li h4 {
	width: 140px;
	float: left;
	font-size: 15px;
	color: #444;
}
.skills li .rating {
	width: 123px;
	height: 14px;
	float: left;
}
.skills li .rating > span {
	opacity: 0.3;
	height: 12px;
	width: 12px;
	background-color: #cf455c;
	display: block;
	float: left;
	margin-right: 1px;
	border: 2px solid #eeeeee;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	border-radius: 20px;
}
#resume .button {
	width: 250px;
	padding: 10px;
	background-color: #cf455c;
	overflow: hidden;
	font-size: 14px;
	font-weight: 300;
	line-height: 20px;
	margin: 20px 0px 0px -20px;
	color: #fff;
	display: block;
	text-align: center;
	-webkit-border-radius: 0px 4px 4px 0px;
	-moz-border-radius: 0px 4px 4px 0px;
	border-radius: 0px 4px 4px 0px;
}
#resume .button:hover {
	background-color:#cf455c;
}
.row > .column {
  padding: 0 8px;
}
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    width: 572px;
    max-width: 100%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}
.close {
    opacity: .7;
}
.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff!important;
}

.modal {
  display: none;
  position: fixed;
  z-index: 999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.8);
}

.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#portfolio {
	padding: 20px 20px 20px 20px;
}

#portfolio-list {
	width: 820px;
	overflow: hidden;
}

#portfolio-list li {
	float: left;
	margin-right: 25px;
	text-align: center;
	background-color: #fbfbfb;
	border-bottom: 1px solid #e5e5e5;
	height: 185px;
	margin-bottom: 30px;
	width: 180px;
}

#portfolio-list li:hover {
	border-bottom: 1px solid #cf455c;
	height: 185px;
}

#portfolio-list img {
	background-color: #FFF;
	height: 120px;
	width: 180px;
}

#portfolio-list li:hover .title {
	color:#cf455c;
}

#portfolio-list li .title {
	font-size: 14px;
	margin-top: 15px;
	font-weight: 400;
	color: #3A3A3A;
}

#portfolio-list li .categorie {
	font-size: 11px;
	line-height: 25px;
	color: #999;
}


.cats-filter {
	border-bottom: 1px solid #ededed;
	overflow: hidden;
	padding: 15px 0;
}

.cats-filter li a {
	float: left;
	margin-right: 7px;
	color: #fff;
	background-color: #666;
	padding: 10px 10px;
	margin-bottom: 5px;
    text-transform: uppercase;
    font-size: 13px;
    font-family: 'Roboto Condensed', sans-serif;
     
    border-radius: 50px;
}

.cats-filter li a:hover {
	background-color:#cf455c;
    text-decoration: none;
}

.cats-filter li a.current {
	background-color:#cf455c;
}
#contact {	 
	overflow: hidden;
    font-family: 'Roboto Condensed', sans-serif;
}

.contact-info, .contact-form {
	float: left;
	padding: 0 20px;
}

.contact-info {
	width: 250px;
    font-family: 'Roboto Condensed', sans-serif;
}

.contact-form {
	width: 530px;
}


.contact-info ul {
	float: left;
	border-left: 1px solid #cf455c;
	padding-left: 18px;
    
}

.contact-info ul li {
	font-size: 13px;
	line-height: 20px;
	color: #666;
	overflow: hidden;
    font-family: 'Roboto Condensed', sans-serif;
}
.glyphicon
    {
      color:pink;
    }
.glyphicon a
{
  color:black;
}
#map {
    height: 300px;
    margin-bottom: 25px;
    width: 100%;
    border-bottom: 1px solid #CCC;
    border-top: 1px solid #CCC;
	width:100%;
}
#map iframe {
    width: 100%;
}
form .input, form textarea {
    -moz-box-shadow: inset 0 5px 16px -13px #333;
    background-color: #FDFDFD;
    border: 1px solid #ced4da;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    color: #666;
    font-size: 12px;
    height: 30px;
    outline: none;
    padding: 6px 10px;
    resize: none;
    width: 96%;
}

form textarea {
	height: 112px;
	line-height: 18px;
	margin-bottom: 0;
	padding-top: 8px;
}

form p {
	margin-bottom: 15px;
}

form p label {
	display: block;
	color: #999;
	margin-bottom: 8px;
	font-size: 13px;
}

.button {
	color: #fff;
	background-color: #cf455c;
	padding: 8px;
	border: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	cursor: pointer;
	font-size: 13px;
}

.button:hover {
	background-color:#cf455c;
}
  footer{
         font-family: 'Roboto Condensed', sans-serif;
            text-transform: uppercase;
            font-size: 15px;
        }
       </style>
</head>
<body>
 <br><br>
  <section id="container">

   <header> 
    	<div id="logo">
        	<h2>MAHBOOB HASAN</h2>
            <h4>JAVA & WEB DEVELOPER</h4>
            
        </div>
        
    </header>
    <section id="content">
    <div id="profile"> 
        	<div class="about">
            	<div class="photo-inner">
                    <ul>
                        <li><img src="images/photo.jpeg" height="186" width="153" /></li>
                        <li><img src="images/photo1.jpeg" height="186" width="153" /></li>
                    </ul>
                </div>
                <h1>MAHBOOB HASAN</h1>
                <h3>JAVA & WEB DEVELOPER</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem itaque repudiandae cupiditate pariatur doloremque  </p>
            </div>
        	<ul class="personal-info">
				<li><label>Name</label><span>Mahboob Hasan</span></li>
                <li><label>Birthday</label><span>November 5, 1998</span></li>
                <li><label>Address</label><span>A 25/78 A Saleempura, Koyala Bazar Varanasi</span></li>
                <li><label>Email</label><span class="word-wrap">machasan786@gmail.com</span></li>
                <li><label>Phone</label><span>+91-6394603713</span></li>
                <li><label>Website</label><span class="word-wrap"><a href="#">www.chatterbox.com</a></span></li>
            </ul>
        </div> 
         <nav class="menu">
        	<ul class="tabs">
                <li class="tmenu"><a href="#profile" class="tab-profile"><i><i class="fa fa-user" aria-hidden="true"></i></i>Profile</a></li>
                <li class="tmenu"><a href="#resume"><i><i class="fa fa-wpexplorer" aria-hidden="true"></i></i>Resume</a></li>
                <li class="tmenu"><a href="#portfolio"><i><i class="fa fa-eercast" aria-hidden="true"></i></i>Portfolio</a></li>
                <li class="tmenu"><a href="#contact"><i><i class="fa fa-telegram" aria-hidden="true"></i></i>Contact</a></li>
            </ul>
        </nav>
        <section id="resume">
             <div class="container">
        	  <h1>Resume comes here</h1>
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, eos, iste? Qui ipsa, quidem. Veritatis voluptates aliquid possimus voluptate dolores, obcaecati ea voluptatum sunt at perferendis doloribus reprehenderit, ut amet, saepe praesentium tempore.
        	  <br>
        	  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam tenetur modi commodi similique, provident facere facilis necessitatibus enim eligendi, ex natus labore consectetur qui cupiditate iure veritatis iusto et. Amet voluptatum quisquam omnis.
        	  <br><br>
            </div>
        </section> 
        <section id="portfolio">
           <div class="container">
            <h1>Portfolio comes here</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sit voluptatibus numquam vitae eius quis accusantium deserunt accusamus, tenetur sequi sunt officia nostrum minus ex, dolorem in qui cupiditate non. Officiis, nam, minima.
            <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, ab temporibus minima rem odio quam exercitationem assumenda! Hic consequatur vero excepturi odit sed et cum, placeat non impedit eum inventore, repudiandae deleniti maxime alias accusantium adipisci dolor! Consequatur iste odit officiis, labore assumenda minima!
            </div>
        </section><!-- /Portfolio -->
        <section id="contact">
            <div class="container">
        	 <h1>Contact Details</h1>
               <ul>
                 <li><a href="#" class="nav-link">
              <span class="glyphicon glyphicon-envelope">&nbsp</span>machasan786@gmail.com 
             </a> </li>
             <li><a href="#" class="nav-link">
              <span class="glyphicon glyphicon-earphone">&nbsp</span>machasan786@gmail.com 
             </a> </li>
             <i class="fa fa-map-marker-alt"></i>
             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

               </ul>
               <br>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nulla perspiciatis laborum laudantium dolorem, nihil accusamus tempore porro, eveniet natus dolores, sit quod. Tempore, dicta ex reiciendis sequi doloremque? Labore, minus dolores laudantium provident perferendis. Adipisci quos blanditiis sed explicabo, aliquam, dolores earum necessitatibus, omnis praesentium doloremque porro autem dolorum nihil. Iure nisi, qui maiores?
                </div>
                <br>
        </section><!-- /contact -->
    </section><!-- /Content -->
     <footer>
    	<div class="copyright">Copyright &copy; 2019 Mahboob Hasan</div>
    </footer>
	<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  
</div> 

    </section>
    
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.easytabs/3.2.0/jquery.easytabs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.caroufredsel/6.1.0/jquery.carouFredSel.packed.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script>
    
    $(document).ready(function() {
  $("#portfolio").magnificPopup({
      delegate: 'a',
      type:'image',
      gallery: {
          enabled: true
      }
  });
});
    
</script>
</body>
</html>