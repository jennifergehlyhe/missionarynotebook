<?php require_once( "template/homeheader.php" ); ?>

<!--Carousel-->  
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="snippets/candle_procession" alt="Image">
          <div class="carousel-caption">
            <h3>Night Vigil</h3>
          </div>      
        </div>

        <div class="item">
          <img src="snippets/lightinthedark" alt="Image">
          <div class="carousel-caption">
            <h3>Taking vows</h3>
          </div>      
        </div>
        <div class="item">
          <img src="snippets/artwork" alt="Image">
          <div class="carousel-caption">
            <h3>Arts and Crafts</h3>
          </div>      
        </div>
        <div class="item">
          <img src="snippets/cards" alt="Image">
          <div class="carousel-caption">
            <h3>Card Games</h3>
          </div>      
        </div>
         <div class="item">
          <img src="snippets/bycandlelight" alt="Image">
          <div class="carousel-caption">
            <h3>Candle Light Procession</h3>
          </div>      
         </div>
         <div class="item">
          <img src="snippets/anotherbaptism" alt="Image">
          <div class="carousel-caption">
            <h3>Baptism</h3>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>`
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>    
    
<!--Content sections, right side-->
  <section class="col-sm-4">
    <div class="well">
      <h3>About the Missionary Notebook</h3>
      <p class="medium-font">The Missionary Notebook is a website that features content uploaded from Missionaries around the world. Run by the Missions Church, we strive to promote Missionary work, by hosting events, offering financial support to Missionaries through money raised in the online store, and encouraging donations.</p>
    </div>
    <div class="well">
      <h3>Help Improve the Website!</h3>
       <p class="medium-font">Please fill out our <a href="survey.php">Online Survey </a> to help us improve your experience on the Missionary Notebook Website. Thank you!</p>
    </div>
  </section>
<hr/>
</div>
</div>  
<!--Section for image gallery, posts from missionaries-->    
<section class="container bg-3 text-center">  
    <h3>Recent Posts from the Missionaries</h3>
  <br/>
  <div class="row">
    <div class="col-sm-3">
    <figure><img src="snippets/african_medicine" class="img-responsive gallery-picture" style="width:100%" alt="Image">
        <figcaption><q>Medical treatment is improving.</q></figcaption></figure>    
    </div>
    <div class="col-sm-3"> 
      <figure><img src="snippets/fresh_water" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>Clean water is a major goal.</q></figcaption></figure>
    </div>
    <div class="col-sm-3"> 
      <figure><img src="snippets/african_women" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>The women of the community...</q></figcaption></figure>
    </div>
    <div class="col-sm-3">
        <figure><img src="snippets/black_white" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>Some photos of my work so far...</q></figcaption></figure>
    </div>
    </div>  
  </section> 
<section class="container bg-3 text-center">  
  <div class="row">
    <div class="col-sm-3">
      <figure><img src="snippets/europe" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>This is the land where I'll be staying.</q></figcaption></figure> 
    </div>
    <div class="col-sm-3"> 
        <figure><img src="snippets/holding_hands" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>A couple of recent updates...</q></figcaption></figure> 
    </div>
    <div class="col-sm-3"> 
        <figure><img src="snippets/bonding" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>Making a difference...</q></figcaption></figure> 
    </div>
    <div class="col-sm-3">
        <figure><img src="snippets/children_africa" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><q>Counting our blessings...</q></figcaption></figure> 
    </div>
  </div>    
  </section>    
    <br/>
    <br/>
    <br/>
    <br/>
<?php require_once( "template/footer.php" ); ?>