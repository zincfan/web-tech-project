<?php
include "config.php";




$username=$_SESSION['username'];

?>
<!-- saved from url=(0037)http://127.0.0.1:5500/repository.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Repository</title><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "stylesheet"
   type = "text/css"
   href = "Repository-2_files/Repository.css" />

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    
    

   
   
   

    <body>

        <header id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
             
            <a class="navbar-brand" href="index.html"><img id="bubbles-homepage" src="./Repository-2_files/bubbles-homepage-icon.png">REPO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mr-auto">
                      
                      <a class="nav-item nav-link" href="index.html">Home</a>
                      <a class="nav-item nav-link" href="about-us2.html">Features</a>
                      <a class="nav-item nav-link" href="networks.php">Network</a>
                      
                    </div>
            <!--<a id="bar-what-is-this" href="#">What is this?</a>
            <i id="profile-icon"></i>-->
                     <button type="button" id="bar-sign-out" class="btn btn-outline-primary" onclick="window.location.href = 'signout.php';">SIGN OUT</button>
            </div>
        </nav></header>
        <nav class="navbar navbar-light bg-light">
                <form class="form-inline" action="search.php" method="post">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='key'>
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  >Search</button>
                </form>
        </nav>
        <div class="jumbotron" style="padding: 1rem 1rem;">
                <h1 class="display-4">What more from repo</h1>
                <p class="lead">Repo is a place to explore. It is a place to try, to make mistakes, to be appreciated. Repo offers star rating which is given by others who see your project. Climb up the star ratings for higher benefits. The benefits include being moderator in the community, to earn badges and many more</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="http://127.0.0.1:5500/repository.html#" role="button">Learn more</a>
        </div>
          <div id="addprojct" style="padding-left:4%;">
            <input type="button" class="btn btn-primary" value="Add Project" style="padding-left: 10%; padding-right: 10%;" onclick="location.href='addProj.html'">
            </div>
        <div name="left-profile">
        <?php 
        include "config.php";

// Check user login or not
$name=$_SESSION['username'];
$password=$_SESSION['password'];

$sql="SELECT image FROM user_data where username='$name'";
$result = mysqli_query($con, $sql);
        $image='default_profile_image_male.jpg';

if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);
if($row['image'])
{
$image=$row['image'];
}

}
        
        
        ?>
            <i id="user-profile-image"style="position:relative; top:105px;left:68;"><img src="<?php echo $image ?>" id="img"/></i>
            <span id="profile-name">USERNAME: <?php  echo "$username";?></span>
            <span id="programmer-student" style="position:relative; top:214px; left:116px;">Programmer/Student</span>

            <a id="report-user" href="mailto:admin@gmail.com">Report!</a>
        </div>
        <div id="user-repo">

            
            <div class="rectangle" id="overview-of-repo" style="border-top: 1px"><iframe id="proj" src="proj_iframe.php"></iframe> </div>
        </div>
    <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body></html>
