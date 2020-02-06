<?php include 'config/config.php'; 
      include 'functions/functions.php';
      include 'includes/header.php';
      ?>

<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">St Catherine</li>
    </ol>
  </nav>
</div>

<div class="container">


  <div class="container text-center">
    
        <a href="#"><h1 class="text-center">Search for a Justice of the Peace</h1></a> 
          <form action="landing.php" method = "get">
            <div class="form-group">
              <label for = "keyword">Enter the Last Name of the Justice of the Peace</label>
              <input type="text" name = "keyword" class="form-control"></input>
          </div>
       
            <input class = "btn btn-primary"type="submit" name="submit" value = "Search">
        </form>

      
    </div>
  </div>
</div>



<div class="container text-center">
<div class="table text-center">
      <table class="text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone Number</th>
          </tr>
        </thead>

        <tbody>
       
       <?php SearchDB(); ?>

        </tbody>
      </table>
    </div>
  </div>
</div>




</body>
</html>