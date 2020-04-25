<?php
		
		function addBusiness(){ 
		 require "conn.php";

			
			$Barber_Services= "0"; 
			 $Hair_Color= "0";
			$braid_twist= "0";
			$extensions_weaving= "0";
			 $hair_replace= "0";
			$hair_topup= "0";
			$skincare= "0";
			 $nail_care= "0";
			$makeup= "0";


			   
			    	$name = $_POST['business_name'];
			   		    
			
			    	$phone = $_POST['business_phone'];	
			    
				
			    	 $add = $_POST['business_add'];
			   
			    
			    if(isset($_POST['Barber_Services'])){
			   		 $Barber_Services = $_POST['Barber_Services'];
			    		
			    }
			    if(isset( $_POST['Hair_Color'])){
			    	 $Hair_Color = $_POST['Hair_Color'];
			    }
			    if(isset($_POST['braid_twist'])){
			    	$braid_twist = $_POST['braid_twist'];	
			    }
			    if(isset($_POST['extensions_weaving'])){
			    	 $extensions_weaving = $_POST['extensions_weaving'];
			    }
				 if(isset($_POST['hair_replace'])){
			    	 $hair_replace = $_POST['hair_replace'];
			    }
			    if(isset($_POST['hair_topup'])){
			    	  $hair_topup = $_POST['hair_topup'];
			    }
			    if(isset($_POST['skincare'])){
			    	  $skincare = $_POST['skincare'];
			    }
			    if(isset($_POST['nail_care'])){
			    	   $nail_care = $_POST['nail_care'];
			    }
			    if(isset($_POST['makeup'])){
			    	   $makeup = $_POST['makeup'];
			    }
			    
			   			   
			   $image = addslashes($_FILES['image']['tmp_name']);
  				$image = mysqli_real_escape_string($conn, file_get_contents($image));

			   
			  
			    $owners_id =  $_SESSION['id'];
			
			// to prevent SQL injection
			    $sql = "INSERT INTO `business` (`owner's id`, `businessName`, `phone`, `address`, `Barber Services`, `Hair Color and Other`, `Braids and Twists`, `Extensions and Weaving`, `Hair Replacement`, `Hair Touch-up and Other`, `Skincare`, `Nail Care`, `Makeup`, `image`) VALUES ('$owners_id', '$name', '$phone', '$add', '$Barber_Services', '$Hair_Color', '$braid_twist', '$extensions_weaving', '$hair_replace', '$hair_topup', '$skincare', '$nail_care', '$makeup', '$image')";
			    $fetch=mysqli_query($conn, $sql);
			   

 
		}
		


function getImageSizi(){
		 require "conn.php";
    
    if ($_FILES['image']['tmp_name'] == TRUE){
    $fileinfo = getimagesize($_FILES['image']['tmp_name']);
    $filewidth = $fileinfo[0];
    $fileheight = $fileinfo[1];
    $image = addslashes($_FILES['image']['tmp_name']);
    $name = addslashes($_FILES['image']['name']);
    $image = mysqli_real_escape_string($conn, file_get_contents($image));

      addBusiness();
 

  }
}


?>