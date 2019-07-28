<?php require_once( "template/header.php" ); ?>
<!--gallery heading-->
<h2 class="gallery-title">Gallery</h2>    
<h4 class="text-center">Browse by Country</h4> 
<!--responsive container for the button filters-->   
<div class="container-fluid bg-3 text-center"> 
  <button class="btn btn-default filter-button" data-filter="all">All</button>
  <button class="btn btn-default filter-button" data-filter="america">America</button>
  <button class="btn btn-default filter-button" data-filter="africa">Africa</button>
  <button class="btn btn-default filter-button" data-filter="south_america">South America</button>
  <button class="btn btn-default filter-button" data-filter="asia">Asia</button>
</div>

  <br/><br/>
  <!--3 responsive columns with images and captions, filter tag words are inside the class="gallery_product" tag-->
<section class="container">     
 <div class="gallery_product col-sm-4 filter asia">
  <figure>
    <img src="snippets/religious_ceremony" class="img-responsive gallery-picture" style="width:100%" alt="Image"><figcaption><p>We went to the Chinese New Years Festival.</p></figcaption>
  </figure>
  </div>
  <div class="gallery_product col-sm-4 filter america">
   <figure>
     <img src="snippets/light_show" class="img-responsive gallery-picture" style="width:100%" alt="Image">
     <figcaption><p>Today was a very rewarding day...</p></figcaption>
    </figure>
    </div>
  <div class="gallery_product col-sm-4 filter africa"> 
    <figure> 
     <img src="snippets/african_missions" class="img-responsive gallery-picture" style="width:100%" alt="Image">
     <figcaption><p>The school year has already started. We need more supplies, please check our website for a list of items that we need.</p></figcaption>
   </figure>
   </div>
   <div class="gallery_product col-sm-4 filter asia">
     <figure>
       <img src="snippets/child_dance" class="img-responsive gallery-picture" style="width:100%" alt="Image">
      <figcaption><p>The children danced to the music.</p></figcaption>      
     </figure>
     </div>
     <div class="gallery_product col-sm-4 filter america">
     <figure>
      <img src="snippets/baptism_ceremony" class="img-responsive gallery-picture" style="width:100%" alt="Image">
    <figcaption><p>We helped with a baptism ceremony today.</p></figcaption>
     </figure>     
     </div>
     <div class="gallery_product col-sm-4 filter africa"> 
     <figure>
     <img src="snippets/african_class" class="img-responsive gallery-picture" style="width:100%" alt="Image">
      <figcaption><p>I finally feel that we are making a significant difference...</p></figcaption>
      </figure>      
      </div>
      <div class="gallery_product col-sm-4 filter asia"> 
      <figure>
      <img src="snippets/african_missions_trip" class="img-responsive gallery-picture" style="width:100%" alt="Image">
      <p>Tonight I witnessed a symbolic lantern ceremony.</p>
      </figure>
      </div>
      <div class="gallery_product col-sm-4 filter south_america">
      <figure> 
      <img src="snippets/candle_light_ceremony" class="img-responsive gallery-picture" style="width:100%" alt="Image">
       <p>A young girl takes the sacred vows.</p>
       </figure>
       </div>
       <div class="gallery_product col-sm-4 filter south_america">
      <figure> 
      <img src="snippets/catholic_missions" class="img-responsive gallery-picture" style="width:100%" alt="Image">
       <figcaption>
       <p>I spent 1 hour at Adoration in the Missions Chapel.</p>
       </figcaption>
       </figure>
     </div>
    </section>
<br><br>
   <!--footer-->
<footer class="container-fluid text-center">
  <p>&copy; Missionary Notebook</p>  
  <form class="form-inline">Get the Latest Posts:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
    <!--jQuery Script-->
<script src="animation.js"></script>
</body>
</html>