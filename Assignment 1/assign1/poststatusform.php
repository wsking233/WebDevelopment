<!DOCTYPE html>
<!--
	Name: William Wang
	Student ID: 18017970
	email:xwg1585@autuni.ac.nz
-->

<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>COMP721 Web Development</title>

  <!-- icons -->
  <link rel="shortcut icon" href="https://www.aut.ac.nz/__data/assets/file/0018/747/favicon.ico" />

  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="container">
    <div class="header">
      <div style="float: left; margin-right: 20px">
        <img src="./img/AUTLogo.jpg" alt="AUTLogo" style="width: 100px" />
      </div>
      <div>
        <h1 class="header-heading">COMP721 Web Development - Assignment 1</h1>
      </div>
    </div>
    <div class="nav-bar">
      <ul class="nav">
        <li><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/poststatusform.php">Post a new tatus</a></li>
        <li><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/searchstatusform.html">Search status</a></li>
        <li><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/about.html">About this assignment</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="main">
        <h1>Status Posting System</h1>
        <hr />

        <!-- Heading levels -->
        <form action="./poststatusprocess.php" method="post" name="postform">
          <p>Status Code(required): <input type="text" name="statuscode"></p>
          <p>Status(required): <input type="text" name="status"></p>
          <p>Share: <input type="radio" name="share" value="public">Public
            <input type="radio" name="share" value="friends">Friends
            <input type="radio" name="share" value="only me">Only Me
          </p>
          <p>Date: <input type="text" name="date" value="<?php echo date("d/m/Y") ?>"></p>
          <p>Permission Type: <input type="checkbox" name="permission[]" value="like">Allow Like
            <input type="checkbox" name="permission[]" value="comments">Allow Comments
            <input type="checkbox" name="permission[]" value="share">Allow Share
          </p>
          <p><input type="submit" value="Post"> <input type="reset" value="Resst"></p>
        </form>
        <hr />

        <p><a href="http://xwg1585.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a></p>


      </div>
    </div>

    <!--footer-->
    <div class="footer">
      <div style="float: left; margin-right: 20px">
        <img src="./img/AUTLogo.jpg" alt="AUTLogo" style="width: 100px" />
      </div>
      <div>
        <p>
          I declare that this assignment is my individual work. I have not
          worked collaboratively nor have I copied from any other student's
          work or from any other source.
        </p>
      </div>
    </div>
  </div>
</body>

</html>