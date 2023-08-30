<?php  include "../header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
      
        $query= "INSERT INTO users(username, email, password) VALUES('{$user}','{$email}','{$pass}')";
        $add_user = mysqli_query($conn,$query);
    
        // mesaj utilizatorului daca a fost executat corect inserarea 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Utilizator adaugat cu succes!')</script>";
              }         
    }
?>

<h1 class="text-center">Introduceti informatiile utilizatorului </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" name="email"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- butonul pentru returnarea la pagina initiala -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
<?php include "../footer.php" ?>