<?php
   if(isset($_FILES['f_name'])){
      $errors= array();
      $file_name = $_FILES['f_name']['name'];
      $file_size = $_FILES['f_name']['size'];
      $file_tmp = $_FILES['f_name']['tmp_name'];
      $file_type = $_FILES['f_name']['type'];
      $errors = $_FILES['f_name']['error'];

      #All the calls needed to get data
      $explode = explode('.',$_FILES['f_name']['name']);
      $big_bang = end($explode);

      $file_ext=strtolower($big_bang);
      
      $extensions= array("jpeg","jpg","png");
      

      #Cases for data
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      #Move Data if No Errors exist.
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "f_name" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['f_name']['name'];  ?>
            <li>File size: <?php echo $_FILES['f_name']['size'];  ?>
            <li>File type: <?php echo $_FILES['f_name']['type'] ?>
         </ul>
			
      </form>
      
   </body>
</html>