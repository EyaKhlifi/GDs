
<?php
    session_start();
    include('connexion.php');
    if(isset($_POST['login']))
    {

        $email = $_POST['email'];  
        $password = $_POST['password'];
       
    $sql = "select * from users where email=:email AND password=:password";
    $sth = $dbh->prepare($sql);
    $sth->execute(array(':email'=>$email,':password'=>$password));
    $row = $sth->rowCount();
    $fetch = $sth->fetch();
    if($row > 0)
    {
        $_SESSION["user"]=$fetch['username'];
        
        header("location: home.php");
        
    }

        

    else 
    {
        header('Location:index.php');
        exit();
    }
    
    
        
}  
    
        

?>