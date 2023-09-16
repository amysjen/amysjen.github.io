<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tucson Web Developer and Designer | Amy Jen</title>
<meta name="description" content="Amy Jen is a web designer and developer in the region of Tucson, Arizona.">
<link rel="shortcut icon" href="favicon.ico" >
<link rel="stylesheet" type="text/css" href="/css/main.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/main.js"></script>
</head>

<body>
<header>
	<div class="content">
		<img src="/images/logo-white.png" alt="Amy Jen" class="logo">
		<span class="occupation">Web <span class="em">Designer</span> | <span class="em">Developer</span></span>
	</div>
	<a href="#skills" class="arrow">&rsaquo;</a>
</header>

<div id="skills">
	<div class="content">
		<div id="spotlight">
			<div class="skill">
				<img src="/images/ic-responsive.png" class="icon" alt="Responsive design icon">
				<span>Responsive Design</span>
			</div>
			<div class="skill">
				<img src="/images/ic-ux.png" class="icon" alt="user experience icon">
				<span>User Experience</span>
			</div>
			<div class="skill">
				<img src="/images/ic-ui.png" class="icon" alt="user interface icon">
				<span>User Interface</span>
			</div>
		</div>
		<span class="intro">Coding Proficiency</span>
		<ul class="list">
			<li>HTML5</li>
			<li>CSS3</li>
			<li>Javascript</li>
			<li>jQuery</li>
		</ul>
	</div>
</div>

<div id="about">
	<img src="/images/amy-jen.jpg" alt="Amy Jen" class="profile">
	<h1 class="intro">Hello! I'm Amy.</h1>
	<span class="bio">I'm a web designer and front-end developer residing in Arizona, United States. I love and enjoy creating for the desktop and mobile web.</span>
	<!-- <a href="#portfolio" class="arrow">&rsaquo;</a> -->
</div>

<div class="intro">Portfolio</div>
<div id="portfolio" class="carousel slide">
	<div class="carousel-inner">
		<div class="item active">
			<div class="info">
				<span class="title">Tucson Natural Medicine Center</span>
				<span class="detail">
					The goal for this website is to educate the visitors on the different styles of acupuncture and other Eastern natural medicine. The main call-to-action is to have visitors call in for consultations and appointments. 
				</span>
				<a href="http://tucsonnaturalmedicine.com" target="_blank" class="link">View Website</a>
			</div>
			<img src="/images/img-tnmc.jpg" alt="Tucson Natural Medicine Center">
		</div>
		<div class="item">
			<div class="info">
				<span class="title">Mars Artwork</span>
				<span class="detail">
					This was built as a portfolio to display this artist's best work of illustrations.
				</span>
				<a href="http://marsartwork.com" target="_blank" class="link">View Website</a>
			</div>
			<img src="/images/img-marsartwork.jpg" alt="Mars Artwork">
		</div>
	</div>
	<a class="carousel-control left" href="#portfolio" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#portfolio" data-slide="next">&rsaquo;</a>
    <ol class="carousel-indicators">
    	<li data-target="#portfolio" data-slide-to="0" class="active"></li>
	    <li data-target="#portfolio" data-slide-to="1" ></li>
    </ol>
</div>

<div id="contact">
	<div class="content">
		<span class="title">Hit Me Up!</span>
		Email: <a href="mailto:amysuejen@gmail.com">amysuejen@gmail.com</a>
		<div class="social_media">
			<a href="https://twitter.com/itsamyjen" target="_blank" class="btn"><img src="/images/ic-twitter.png" alt="Twitter"></a>
			<a href="https://www.linkedin.com/in/amyjen" target="_blank" class="btn"><img src="/images/ic-linkedin.png" alt="Linkedin"></a>
			<a href="https://instagram.com/itsamyjen" target="_blank" class="btn"><img src="/images/ic-instagram.png" alt="Instagram"></a>
		</div>
	</div>
</div>

</body>
</html>