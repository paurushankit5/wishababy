 
<section id="fh5co-home" data-section="home" style=" height:600px;" >
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height:600px;">
      
      <div class="item active"  style="background-image: url(<?= base_url();?>img/2.jpg);background-size:cover;height:600px;" data-stellar-background-ratio="0.5">
         
      </div>
    
      <div class="item"  style="background-image: url(<?= base_url();?>img/3.jpg);background-size:cover;height:600px;" data-stellar-background-ratio="0.5">
         
      </div>
	  <div class="item "  style="background-image: url(<?= base_url('img/5.jpg');?>);background-size:cover;height:600px;" data-stellar-background-ratio="0.5">
			 
      </div>

	  <div class="col-sm-10 col-sm-offset-1" style="margin-top:-550px;">
	  <?php include('searchbar.php');?>
	  </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
 
