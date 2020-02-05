<?php include 'config/config.php'; 
      include 'functions/functions.php';
      include 'includes/header.php';
      ?>



<div class="container">
  <input class = "btn btn-primary"type="submit" name="submit" value = "Spanish Town">
</div>
<div>
<div class="container text-center">
  <div class="col-sm-6 text-center">
    <a href="#"><h1 class="text-center">Search for a Justice of the Peace</h1></a> 
    <form action="index.php" method = "get">
      <div class="form-group">
        <label for = "keyword">Name</label>
        <input type="text" name = "keyword" class="form-control"></input>
      </div>
     
      <input class = "btn btn-primary"type="submit" name="submit" value = "Search">
    </form>

  </div>
</div>
</div>

<div class="container"></div>

<div class="container">
<div class=" table">
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




</body>
</html>