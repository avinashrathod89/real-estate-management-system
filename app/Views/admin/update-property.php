<?php include('header.php');?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Properties </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url('properties');?>">Properties</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?=base_url('properties');?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="<?=$property[0]->title;?>" placeholder="Property Title">
                </div>
                <div class="form-group col-md-6">
                  <label for="broker_id">Broker ID</label>
                  <input type="text" class="form-control" name="broker_id" value="<?=$property[0]->broker_id;?>" placeholder="Broker ID">
                </div>
                <div class="form-group col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" name="city" value="<?=$property[0]->city;?>" placeholder="City">
                </div>
                <div class="form-group col-md-6">
                  <label for="state">State</label>
                  <input type="text" class="form-control" name="state" value="<?=$property[0]->state;?>" placeholder="State">
                </div>
                <div class="form-group col-md-6">
                  <label for="pincode">Pincode</label>
                  <input type="text" class="form-control" name="pincode" value="<?=$property[0]->pincode;?>" placeholder="Pincode">
                </div>
                <div class="form-group col-md-6">
                  <label for="price">Price</label>
                  <input type="number" class="form-control" name="price" value="<?=$property[0]->price;?>" placeholder="Price">
                </div>
                <div class="form-group col-md-6">
                  <label for="bedrooms">Bedrooms</label>
                  <input type="number" class="form-control" name="bedrooms" value="<?=$property[0]->bedrooms;?>" placeholder="Bedrooms">
                </div>
                <div class="form-group col-md-6">
                  <label for="bathrooms">Bathrooms</label>
                  <input type="number" class="form-control" name="bathrooms" value="<?=$property[0]->bathrooms;?>" placeholder="Bathrooms">
                </div>
                <div class="form-group col-md-6">
                  <label for="sqft">Sqft</label>
                  <input type="text" class="form-control" name="sqft" value="<?=$property[0]->sqft;?>" placeholder="Sqft">
                </div>
                <div class="form-group col-md-6">
                  <label for="plot_size">Plot Size</label>
                  <input type="text" class="form-control" name="plot_size" value="<?=$property[0]->plot_size;?>" placeholder="Plot Size">
                </div>
                <div class="form-group col-md-12">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" rows="3"><?=$property[0]->description;?></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="is_published">Is Published</label>
                  <select name="is_published" class="form-control">
                    <option value="1" <?=$property[0]->is_published ? 'selected' : '';?>>Yes</option>
                    <option value="0" <?=$property[0]->is_published == 0 ? 'selected' : '';?>>No</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Main Photo</label><br>
                  <?php if (!empty($property[0]->photo_main)): ?>
                    <img src="<?=base_url('uploads/'.$property[0]->photo_main);?>" width="100px" alt="Main Photo"><br>
                  <?php endif; ?>
                  <input type="hidden" name="oldphoto_main" value="<?=$property[0]->photo_main;?>">
                  <input type="file" name="photo_main" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 2</label><br>
                  <?php if (!empty($property[0]->photo2)): ?>
                    <img src="<?=base_url('uploads/'.$property[0]->photo2);?>" width="100px" alt="Photo 2"><br>
                  <?php endif; ?>
                  <input type="hidden" name="oldphoto2" value="<?=$property[0]->photo2;?>">
                  <input type="file" name="photo2" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 3</label><br>
                  <?php if (!empty($property[0]->photo3)): ?>
                    <img src="<?=base_url('uploads/'.$property[0]->photo3);?>" width="100px" alt="Photo 3"><br>
                  <?php endif; ?>
                  <input type="hidden" name="oldphoto3" value="<?=$property[0]->photo3;?>">
                  <input type="file" name="photo3" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 4</label><br>
                  <?php if (!empty($property[0]->photo4)): ?>
                    <img src="<?=base_url('uploads/'.$property[0]->photo4);?>" width="100px" alt="Photo 4"><br>
                  <?php endif; ?>
                  <input type="hidden" name="oldphoto4" value="<?=$property[0]->photo4;?>">
                  <input type="file" name="photo4" class="form-control">
                </div>
              </div>

              <a href="<?=base_url('properties');?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Update</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

<?php include('footer.php');?>