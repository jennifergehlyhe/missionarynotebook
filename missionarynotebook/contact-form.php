<?php require_once( "template/header.php" ); ?>    
<!--gallery heading-->
<h2 class="gallery-title">Contact Us</h2>    

  <br/><br/>
<div class="container">
 <!--Main content Contact Form-->
      <main>
        <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="name" placeholder="Enter Name:">
     <br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" placeholder="Enter Email:">
      <br/>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5">Comments:</textarea><br>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default button">Submit</button>
    </div>
  </div>
</form>
</main>
</div>
<br/>
<br><br>

  <?php require_once( "template/footer.php" ); ?>