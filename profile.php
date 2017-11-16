<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/index_style.css" rel="stylesheet" type="text/css">
  <link href="css/img_modal.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
  <script src="fileupload.js"></script>
</head>
<body class="body">
<?php

  require 'Oracle_connect.php';
 
  if(!isset($_SESSION['uname'])){//若使用者尚未登入
	  header('Location:login.php');
  }
  else{
	   echo '<td align="center">'.$_SESSION['uname'].'您好!'.'<a href="logout.php" >登出</a>' ;
  }
?>


<form id="uploadForm" action="upload.php" method="post">
<label>Upload Image File:</label><br/>
<input name="fileToUpload" type="file" class="inputFile"  id="fileToUpload"  accept="image/*"/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>

<img id="img" src="">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/index_style.css" rel="stylesheet" type="text/css">
  <link href="css/img_modal.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
  <script src="fileupload.js"></script>
</head>
<body class="body">
<?php

  require 'Oracle_connect.php';
 
  if(!isset($_SESSION['uname'])){//若使用者尚未登入
	  header('Location:login.php');
  }
  else{
	   echo '<td align="center">'.$_SESSION['uname'].'您好!'.'<a href="logout.php" >登出</a>' ;
  }
?>


<form id="uploadForm" action="upload.php" method="post">
<label>Upload Image File:</label><br/>
<input name="fileToUpload" type="file" class="inputFile"  id="fileToUpload"  accept="image/*"/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>

<img id="img" src="">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

</body>
</html>
>>>>>>> b836e0d8e157d567e689866cda14a110b9350d6e
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/index_style.css" rel="stylesheet" type="text/css">
  <link href="css/img_modal.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
  <script src="fileupload.js"></script>
</head>
<body class="body">
<?php

  require 'Oracle_connect.php';
 
  if(!isset($_SESSION['uname'])){//若使用者尚未登入
	  header('Location:login.php');
  }
  else{
	   echo '<td align="center">'.$_SESSION['uname'].'您好!'.'<a href="logout.php" >登出</a>' ;
  }
?>


<form id="uploadForm" action="upload.php" method="post">
<label>Upload Image File:</label><br/>
<input name="fileToUpload" type="file" class="inputFile"  id="fileToUpload"  accept="image/*"/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>

<img id="img" src="">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

</body>
</html>
>>>>>>> b836e0d8e157d567e689866cda14a110b9350d6e
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/index_style.css" rel="stylesheet" type="text/css">
  <link href="css/img_modal.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
  <script src="fileupload.js"></script>
</head>
<body class="body">
<?php

  require 'Oracle_connect.php';
 
  if(!isset($_SESSION['uname'])){//若使用者尚未登入
	  header('Location:login.php');
  }
  else{
	   echo '<td align="center">'.$_SESSION['uname'].'您好!'.'<a href="logout.php" >登出</a>' ;
  }
?>


<form id="uploadForm" action="upload.php" method="post">
<label>Upload Image File:</label><br/>
<input name="fileToUpload" type="file" class="inputFile"  id="fileToUpload"  accept="image/*"/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>

<img id="img" src="">

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

</body>
</html>
>>>>>>> b836e0d8e157d567e689866cda14a110b9350d6e
