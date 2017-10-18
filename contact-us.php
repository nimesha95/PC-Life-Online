<?php /* require_once('connection.php'); */ ?>
<?php
include('header.inc.php');

?>
<?php
/*
	if(isset($_POST['Submit'])){
		$errors=array();
		if(strlen(trim($_POST['Name']))<1||strlen(trim($_POST['email']))<1||strlen(trim($_POST['message']))<1){
			$errors[]='Please fill these feileds';
		}
		if(empty($errors) ){
			$Name=mysqli_real_escape_string($connection,$_POST['Name']);
			$email=mysqli_real_escape_string($connection,$_POST['email']);
			$message=mysqli_real_escape_string($connection,$_POST['message']);
			$query="INSERT INTO contact_us_details (name,email,message) VALUES ('{$Name}','{$email}','{$message}')" ;
    $result=mysqli_query($connection,$query);
    	if ($result){
    		echo "Successful";
    	}else{
    		echo "Error";
    	}
		}
	}

    
  */
?>

<!-- Carousel
================================================== -->
<header>
    <div class="header">
        <h1 align="center"
            style="font-size: 80px; font-color:red; font-style:serif; font-family: all; font-weight: bolder;"> Contact
            Us </h1>

    </div>

</header>
<div class="row">
    <div class="col-sm-6">
        <div class="detail" style="height: 1000px" ;>
            <form action="contact-us.php" method="post">
                <fieldset>
                    <p style="padding-top: 100px;">
                    <center>
                        <input style="background:#c8c2c2;  border-radius: 4px;border:none;  font-size: 20px; padding-left: 10px; width: 500px; height: 30px;"
                               type="text" name="Name" id="" placeholder="Your Name">
                    </center>
                    </p>
                    <p>
                    <center>
                        <input style="background:#c8c2c2;border-radius: 4px;border:none;  font-size: 20px; padding-left: 10px; width: 500px; height: 30px;"
                               type="text" name="email" id="" placeholder="email">
                    </center>
                    </p>
                    <p>
                    <center>
                        <textarea
                                style="background:#c8c2c2;border-radius: 4px;border:none;  font-size: 20px; padding-left: 10px; width: 500px; height: 150px; resize: none;"
                                type="textarea" name="message" id="" placeholder="Your Message"></textarea>
                    </center>
                    </p>
                    <p>
                    <center>
                        <button style="background: red;border:none; font-weight: bolder;color: white; text-align: center; width:150px;height: 40px; font-size: 20px;border-radius: 4px;"
                                type="Submit" name="Submit" ;>
                            Submit
                        </button>
                    </center>

                    </p>
                </fieldset>
            </form>
        </div><!--class="detail"-->
    </div><!--class="col-sm-6"-->
    <div class="col-sm-6" style="background-color:white;">

    </div>
</div>


</body>
</html>