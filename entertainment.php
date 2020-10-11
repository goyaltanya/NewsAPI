<!DOCTYPE html>
<html>
<head>
    <title>Inclick News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Gayathri:wght@100;400&family=Kumbh+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <link rel="icon" href="website.svg" type="image/x-icon" media="none"> 
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="header.css" rel="stylesheet"/>	
    <link href="style.css" rel="stylesheet"/>
	<link href="footer.css" rel="stylesheet"/>	

</head>
<body onload="myFunction()">

    <header>
    
        <ul class="menu1">
        <input type="checkbox"  id="chk">
            <label for="chk" class="show-btn">
                <i class="fa fa-bars"></i>
            </label>
            <label for="chk" class="hide-btn">
                <i class="fa fa-times"></i>
            </label>
            <li><a href="news1.php">Home</a></li>
            <li><a href="#">Buisness</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Health</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Technology</a></li>
            <div class="sidebar">
            <ul class="menu">
                <li><a href="news1.php"><img src="https://img.icons8.com/color/48/000000/top-menu.png"/>Home</a></li>
                <li><a href="buisness.php"><img src="https://img.icons8.com/color/48/000000/refund.png"/>Buisness</a></li>
                <li><a href="entertainment.php"><img src="https://img.icons8.com/color/48/000000/movie-projector.png"/>Entertainment</a></li>
                <li><a href="health.php"><img class="health"src="https://img.icons8.com/plasticine/100/000000/hospital-room.png"/>Health</a></li>
                <li><a href="science.php"><img src="https://img.icons8.com/color/48/000000/physics.png"/>Science</a></li>
                <li><a href="sports.php"><img src="https://img.icons8.com/color/48/000000/tennis.png"/>Sports</a></li>
                <li><a href="technology.php"><img src="https://img.icons8.com/color/48/000000/development-skill.png"/>Technology</a></li>
            </ul>
        </div>
        </ul>



    </header>


	<div id="loader"></div>	
	<div id="container">
		<h1><img src="website.svg" class="icon">InClick</h1>        
        <div style="border-top:0.2rem solid gray;margin:1rem 7rem;border-radius:1rem;box-shadow:0 3px 5px 0 rgba(0,0,0,0.2);"></div>
        <h1>Today's Headlines</h1>
		<?php
		$url=file_get_contents
		("http://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=f40e1c479f594c28abc16970483dffc6");
		$newsArray=json_decode($url,true);		
				foreach ($newsArray['articles'] as $news)
					{					
			?>
			<div class='news-row'>
                    <div class="news-card-image">
                    <img alt="Image" src="<?php echo $news['urlToImage']?>">   
                    </div>
                    <div class="content">                        
                        <a href="<?php echo $news['url']?>" target="_blank"><p class="title"><?php echo $news['title']?></p></a>
                        <p><?php echo $news['description']?></p>
                        <small><?php echo $news['publishedAt']?></small>
                    </div>
			</div>

			<?php
				}
					
			?>
		</div>
		<footer>
        <section class="sec-1">
            <section class="about">
                <h2>About</h2>
                <p>We understand you don’t have time to go through newspaper everyday.
                    
                </p>
            </section>
            <section class="link1">
                <h2>categories</h2>
                <ul>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#">Hybrid Apps</a></li>
                </ul>
            </section>
            <section class="link2">
                <h2>quick links</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </section>
            <section class="link3">
                <h2>contact us</h2>
                <ul>
                <li><i class="fa fa-home"></i><span>GLA University, Uttar Pradesh, India</span></li>
                <li><a href="https://icons8.com/icon/1iF9PyJ2Thzo/home">Icon by Icons8</a></li>
                <li>Icons made by <a href="https://www.flaticon.com/authors/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></li>
                    <li><i class="fa fa-envelope"></i><span>inclicknews@gmail.com</span></li>
                    <li><i class="fa fa-phone-square"></i><span>Mobile: 9*********</span></li>
                    <li><i class="fa fa-facebook-official"></i><a href="#">inclicknews</a></li>
                </ul>
            </section>
        </section>
        <hr width="100%">
        <section class="sec-3">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
        </section>
        
        <section class="sec-4">
            <p>Copyright &#169; 2020 All Rights Reserved by
				Inclick
            </p>
        </section>
    </footer>

	</div>
<script>
	var myVar;
	function myFunction() {
	myVar = setTimeout(showPage,000);
	}
	function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("container").style.display = "block";
	}
</script>
</body>
</html>