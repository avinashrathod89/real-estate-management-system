 <?php include('header.php');?>
<section class="form-12" id="home">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				<div class="column2">
					</div>
				<div class="column1">
						<form action="<?=base_url('search');?>">
							<div class="blog-search form d-flex search-form">
								<input type="search" class="form-control" placeholder="Enter Location, Property, Landmark" name="keyword" required="required">
								<button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>
</section>

<section class="grids-4" id="properties">
    <div id="grids4-block" class="py-5">
       <div class="container py-md-3">
			<div class="heading text-center mx-auto">
      <h3 class="head">Properties For sale</h3>
      </div>
            <div class="row mt-5 pt-3">

                <?php foreach($properties as $property){ ?>
                <div class="grids4-info  col-lg-4 col-md-6">
                        <a href="<?=base_url('detail/'.$property->property_id);?>">
                          <img src="<?=base_url('uploads/'.$property->photo_main);?>" class="w-100" height="250px" alt="">
                        </a>
                        <ul class="location-top">
                            <li class="rent">For Rent</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="<?=base_url('detail/'.$property->property_id);?>"><?=ucwords($property->title);?></a></h5>
                            <p> <?=$property->price;?> / sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> <?=$property->sqft;?> sq ft</li>
                            </ul>
                        </div>
                    </div>
                  <?php } ?>

                </div>
           </div>
    </div>
</section>
 <?php include('footer.php');?>