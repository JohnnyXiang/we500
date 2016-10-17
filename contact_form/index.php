<?php 
if(!empty($_POST)): 
?>
<?php 
$requiredFields = array(
		"name"=>"Name",
		"email"=>"Email",
		"content"=>"Content"
); //associated array

//loop
$errorMsg = "";
foreach($requiredFields as $key=>$value) {
	if(empty($_POST[$key])) {
		$errorMsg .=$value." is requred.<br/>";
	}
}


if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$errorMsg .="Invalid emailaddress<br/>";
}


$to      = 'jxiang@olivetuniversity.edu';
$subject = 'Contact From '.$_POST["email"];

$message = "Name: ".$_POST["name"];
$message .= "\nEmail: ".$_POST["email"];
$message .= "\nContent: ".$_POST["content"];


$headers = 'From: '.$_POST["email"] . "\r\n" .
		'Reply-To: '.$_POST["email"] . "\r\n" ;

mail($to, $subject, $message, $headers);
?>
<?php endif?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contact Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    

    <div class="container">

      <div class="starter-template">
        <h1>Contact Form</h1>
       
      </div>
      <br/><br/><br/>
      <div class="col-xs-6">
     <p><?php echo $errorMsg?></p>
      <form class="form-horizontal" id="contact-form" method="POST" action="">
        <div class="form-group">
          <label for="inputName" >Name (required, at least 2 characters)</label>
         
            <input name="name" type="text" class="form-control" id="inputName" placeholder="Name" value="<?php echo $_POST["name"]?>"  >
          
        </div>
        <div class="form-group">
          <label for=>Email</label>
        
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" required value="<?php echo $_POST["email"]?>">
          
        </div>
        <div class="form-group">
          <label for="inputcontent" >Content</label>
         
            <textarea rows="10" cols=""   class="form-control"  name="content" required><?php echo $_POST["content"]?></textarea>
         
        </div>

        <div class="form-group">
          <div >
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
    
    </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
  
    <script>
    $().ready(function() {
		// validate the comment form when it is submitted
		//$("#contact-form").validate();
    })
       
    </script>
  </body>
</html>