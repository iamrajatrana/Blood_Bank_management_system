
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>NIT Hamirpur Blood Bank Info</title>
		<link rel="stylesheet" type="text/css" href="css/data.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link rel="stylesheet" type="text/css" href="css/head.css" />
           <link rel="stylesheet" type="text/css" href="css/footer.css" />

	
	</head>
	
	<body id="page">
<header class="head-top">

          <div class="head-ka-beech">

    <h1><a href="#"><img src="images/ACMOriginal.png"></a></h1>

    <nav>
      <a href="index.php" class="selected">Home</a>
            <a href="login-admin.php">Admin Login</a>
            <a href="nith.ac.in">NIT-H Website</a>
            <a href="acm.html">ACM Website</a>
    </nav>
  </div>
</header>
        <div class="header"> 
          <h1 align="center">National Institute of Technology, Hamirpur<span>Online Blood bank management System</span></h1>
        </div>
        
         
         <div  class="form">

        <form id="ajaxform"> 

          

          

               <p><label for="bg">Make Selection<span id="bgsel"></span></label></p>
                <select id="bg" name="Name" class=select-style>
                                               <option value="">Select Blood Group</option>
                                               <option value="A pos">A positive</option>
                                               <option value="A neg">A negative</option>
                                               <option value="B pos">B positive</option>
                                               <option value="B neg">B negative</option>
                                               <option value="O pos">O positive</option>
                                               <option value="O neg">O negative</option>
                                               <option value="AB pos">AB positive</option>
                                               <option value="AB neg">AB negative</option>
                </select><br><br><br>
                <p><label for="bg">Gender</label></p>
                <select id="gen" name="gender" class=select-style>
                                              <option value="">Both</option>
                                               <option value="m">Male </option>
                                               <option value="f">Female</option>
                </select><br><br><br>
                <p><label for="bg">Select Branch</label></p>
                <select name="branch" id="branch" class="select-style">
                                         <option value="">Select Branch</option>
                                         <option value="arc">Architecture</option>
                                         <option value="chem">Chemical Engg.</option>
                                         <option value="cse">Computer Science & Engg.</option>
                                         <option value="civ">Civil Engg.</option>
                                         <option value="eee">Electrical Engg.</option>
                                         <option value="ece">Electronics and Communication Engg.</option>
                                         <option value="mec">Mechanical Engg.</option>
                </select><br><br><br>

                    <input type="button" value="SHOW" name="show" onclick = "show_records()"/> 
                 
                
                  </form>
</div>      
       


      <div class="data">
        
        <p id="p">
      </div>
                    
		
			
      <footer class="foots">

      <div class="footer-left">

        <h3><span>ACM NITH</span></h3>

        <p class="footer-links">
          <a href="index.php" class="selected">Home.</a>
            <a href="login-admin.php">.Admin Login.</a>
            <a href="nith.ac.in">.NIT-H Website.</a>
            <a href="update_record.php">.ACM Website</a>
        </p>

        <p class="foot-acm">acm &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>NIT Hamirpur</span> Anu, Hamirpur </p>

        </div>

        <div>
          <i class="fa fa-phone"></i>
         <p>Pin Code : 177005</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:acm.efie.com">acmnith@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the Page</span>
          This is an initiative by ACM NIT-H Student Chapter to help those in need.
        </p>

        <div class="footer-icons">
                <p id="like">Like Us on Facebook
          </p>
          <a href="#"> <i class="fa fa-facebook"></i></a>

        </div>

      </div>

    </footer>

		
		<script type="text/javascript" src = "index.js"></script>
	</body>
</html>