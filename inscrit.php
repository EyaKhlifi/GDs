
<?php
    session_start();
    include('connexion.php');
    if(isset($_POST['ajouter']))
    {
        $username = $_POST['username']; 
        $email = $_POST['email'];  
        $password = $_POST['password'];
       
  
        $sql="INSERT INTO `users`(`username`, `email`, `password`) VALUES (:username,:email,:password)";
        $res = $dbh->prepare($sql);

        $exec = $res->execute(array
          ( ":username"=>$username,
            ":email"=>$email,
            ":password"=>$password,
            
            ));
           

            if($exec){
                header("location:index.php");
              }else{
                echo "Échec de l'opération d'insertion";
              }   
      }

         
        
         
        

     

?>

