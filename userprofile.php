<?php
include('session.php');
?>
<?php
include('cookie.php');
?>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("lib1");
?>
	
<html xmlns="http://www.w3.org/1999/xhtml">>
<head>
<title>Education Time | Full Width</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style2 {
            width: 22%;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style3 {
            width: 91px;
        }
        .auto-style4 {
            width: 70%;
            border-style: solid;
            border-width: 3px;
        }
        .auto-style7 {
            width: 91px;
            height: 23px;
        }
        .auto-style8 {
            font-family: "Wide Latin";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
        .auto-style9 {
            width: 100%;
            border-style: solid;
            border-width: 2px;
        }
        .auto-style10 {
            width: 204px;
            height: 4px;
        }
        .auto-style11 {
            font-family: "Microsoft Sans Serif";
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
        .auto-style12 {
            width: 10%;
            float: right;
            border-style: solid;
            border-width: 1px;
        }
    </style>
</head>
<body id="top">
    <form  method="POST" action="">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">Reader's Resource</a></h1>
      
    </div>
      <fieldset>
        <legend>Student Login</legend>
        <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">LOG OUT </a>
      

</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
       <li ><a href="../homepage.php">Homepage</a></li>
      
      <li ><a href="viewbooks.php">BOOKS</a></li>
	  <li ><a href="viewfavrit1.php">My Books</a></li>
     
      <li><a href="news.php">News Feeds</a></li>
	  <li ><a href="addbooks2.php">Upload Book</a></li>
      <li class=" active last" ><a href="userprofile.php">Profile</a></li>
	  
	  
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <table class="auto-style1">
          <tr>
              <td>
                  <table align="left" class="auto-style2">
                      <tr>
                          <td class="auto-style3">
                              <table class="auto-style9">
                                  <tr>
                                      <td class="auto-style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style11">&nbsp;<a><strong> PROFILE- PANEL</strong></a></span></td>
                                  </tr>
                              </table>
                          </td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp; </td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userprofile.php"> MY PROFILE&nbsp;&nbsp;</a></td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update.php"> UPDATE PROFILE</a>&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
                      <tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr><tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr><tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr><tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr><tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr><tr>
                          <td class="auto-style3">&nbsp;</td>
                      </tr>
					 
                  </table>
				  <?php
						include('db.php');
						$sql="SELECT  *  FROM  member1  where  uid=$loggedin_id";
									$result=mysqli_query($db,$sql);
				?>
				<?php
					while($rows=mysqli_fetch_array($result)){
						$photo=$rows['image'];
				?>
                  <table align="right" class="auto-style4">
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> <span class="auto-style8">USER - PROFILE</span></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a><image src="../<?php echo($photo); ?>" height="118px" width="217px" /></a>
                          </td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
					  <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>Readers-ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> <?php  echo  $rows['uid'];  ?></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> USER -ID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> <?php  echo  $rows['id'];  ?></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> PASSWORD</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><?php  echo  $rows['password'];  ?></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> EMAIL</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> :</a>&nbsp;&nbsp;&nbsp;&nbsp;<a><?php  echo  $rows['email'];  ?></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a> CONTACT-NO.</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a>:</a>&nbsp;&nbsp;&nbsp;&nbsp;<a><?php  echo  $rows['phno'];  ?></a></td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                      <tr>
                          <td>&nbsp;</td>
                      </tr>
                   
					    <?php } ?>
							  <?php
//  close  connection;
						mysqli_close($db);
											?>
                  </table>
              </td>
          </tr>
      </table>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>University Name Here</h2>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      Town/City<br />
      Postcode/Zip
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Semester Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Block 2</h2>
      <ul>
        <li><a href="#">Schools and Colleges</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li><a href="#">International Students</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Link Block 3</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential Colleges</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
    </form>
</body>
</html>


