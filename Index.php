<!doctype html>
<html>
<head>
    <title>Movie Enquiry System</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

 <link rel="stylesheet" href="CSS/Basic.css">
    <style>
#menu{
    background-color: yellow;
    border: 2px solid blue;

}
#menu ul li{
    float: left;
    font-size: 1.6em;
    margin-top:-7px;
    font-weight:bold;
    font-family: bitter,georgia,times,"Times New Roman",serif;

}

#menu ul{
    list-style: none;
    margin-bottom: 0px;

    height: 30px;
    border-bottom: 1px solid #000;
}

#menu ul li a{

    display: block;
    color: #000;
    text-decoration: none;
    padding: 0 20px;
    line-height: 30px;
}

#menu ul li a:hover,#menu ul li a.selected
{
    background: url("images/pattern.png");
    background-color: #5D0580;
    color: #fff;
}

    #social{


}

#social ul li{
    float: left;
    margin-left: 10px;
    margin-top: 15px;
    list-style: none;
}
section.links h3{
    background: rgba(255, 0, 0, 0.5) url("images/pattern.png");
    color: white;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    font-size: 1.9em;
    font-weight: 100;
    line-height: 45px;
   display: block;

}
section.links{
height: 300px;
}
section.links ul{
    margin-left: -30px;

}
section.links li{
    list-style: none;
    padding-top: 10px;

}
section.links li a{
    background-color: #fbae2c;
    display: block;
    list-style: none;
    font-size: 1.1em;

    line-height: 30px;
    text-decoration: none;
    color: white;

    }
section.links li a:hover{
    background: url("images/pattern.png");
    display: block;
    list-style: none;
    font-size: 1.3em;
    font-weight: bold;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px;
    color: white;
   border-bottom-left-radius: 15px;
   border-bottom-right-radius: 15px;
   border-top-left-radius: 15px;
   border-top-right-radius: 15px;
   background-color:#5D0580;/*rgba(168,88,163,1);*/
    }


h2,legend{
    color: White;
    font-size: 1.6em;
background: url("images/pattern.png");
font-family: Bitter,Georgia,Times,"Times New Roman",serif;
text-align: center;
background-color:#5D0580;

}

#request{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 3.0em;
    line-height: 1.9em;
    font-weight: bold;


}
.req{
     font-size: 1.2em;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


</style>

</head>
<body>
    <div id="wrap">
        <div id="header">
            <div id="logo">
	<!--	<img id="mainImage" src="images/bournelegacy.jpg" width="990" height="400" alt="image"/> -->
	    </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="Index.php?PageName=About" >About Us </a></li>
                <li><a href="Index.php?PageName=Contact">Contact Us</a></li>
		<li><a href="Index.php?PageName=ShareWithFriend">Tell a friend</a></li>
                <li><a href="Index.php?PageName=Home">Coming Soon</a></li>
		<li><a href="https://www.movieforums.com/community/">Forum</a></li>
            </ul>
            <div class="clear"></div>

        </div>
        <!-- Main Area Content Area -->
        <div id="main">
                      <div id="content"> <!-- all whitespace belong to the content div.-->


                        <?php

                            $PagesDirectory='Pages Folder';
                            if(!empty($_GET['PageName']))
                            {
                              $PagesFolder=scandir($PagesDirectory,0);// start from beginning of PagesDirectory and scan all the files in Pages Folder
                              unset($PagesFolder[0],$PagesFolder[1]);
                              $PageName=$_GET['PageName'];
                              //print_r($PagesFolder);  //Array ( [0] => . [1] => .. [2] => About.inc.php [3] => Contact.inc.php [4] => Home.inc.php [5] => ShareWithFriend.inc.php )
                              if(in_array($PageName.'.inc.php',$PagesFolder))
                              {
                                include($PagesDirectory.'/'.$PageName.'.inc.php');
                              }
                              else
                              {
                                echo '<h1 id="request">You are Lost...</h1>';
                                echo '<img src="Images/Lost.gif" width="680" height="430">';
                                echo '<h2>Sorry Page not found</h2>';
                              }
                            }
                            else {
                              include($PagesDirectory.'/Home.inc.php');
                            }

                         ?>


	  <div class="clear"></div>

	    </div>

         <!-- Side Area -->
            <div id="side">
    <section class="links">
	    <h3 >Latest Movie Links</h3>
	    <ul>
		<li><a href="http://movieweb.com/movies/2017/action/">Action Movies</a></li>
		<li><a href="https://www.moviefone.com/movies/2017/august/animated/">Animated Movies</a></li>
		<li><a href="http://www.imdb.com/list/ls068755127/">Comedy Movies</a></li>
		<li><a href="http://www.ign.com/upcoming/movies?genre=drama">Drama Movies</a></li>
		<li><a href="http://www.imdb.com/list/ls068064076/">Horror Movies</a></li>

	    </ul>
	     </section>
	   <h2 style="background: url(images/pattern.png);">Today's Top Movies</h2>
	    <section class="sideimage">
	    <img src="images/golmal.jpg" width="270" height="120" alt=""/>

	    <h4 style="background: url(images/pattern.png);">Golmaal Again</h4>
	   <p>Golmaal Again is yet another fun filled ride about two gangs who are unable to stand each other since their childhood and how they repulse each other even after they grow up. <a href="https://en.wikipedia.org/wiki/Golmaal_Again">More</a>
	   </p></section>
	    <br>
	   <div class="clear"></div>
	   <section class="sideimage">
	    <img src="images/secretsuperstar.jpg" width="270" height="120" alt=""/>

	    <h4 style="background: url(images/pattern.png);">Secret Superstar</h4>
	   <p>Secret Superstar is a 2017 Indian musical drama film, written and directed by Advait Chandan and produced by Aamir Khan and Kiran Rao. The film features Zaira Wasim, Meher Vij, Raj Arjun and Aamir Khan in lead roles, and tells the story of a child who aspires to be a singer. <a href="https://en.wikipedia.org/wiki/Secret_Superstar">More</a>
	   </p>
	 </section>

	   </p><br><br><br><br><br></section>
	   <div class="clear"></div>
	   <br>
	    </div>

            <div class="clear"></div>
        </div>
        <!-- Footer Area -->
        <div id="footer"><hr><p>Theme By Anisha,Bhagyashree and Vishal | &copy;2017-2018 All right reserved.
	      </div>


       <div style="height: 20px; background: rgb(200, 200, 200);"></div>
    </div>
<script src="Script/Myscript.js"></script>
</body>
</html>
