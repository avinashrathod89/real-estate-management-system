<?php include('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Properties </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('properties'); ?>">Properties</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('properties'); ?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="form-group col-md-6">
                  <label>Broker ID</label>
                  <input type="text" class="form-control" name="broker_id" placeholder="Broker ID">
                </div>
                <div class="form-group col-md-6">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Property Title">
                </div>
                <div class="form-group col-md-12">
                  <label>Address</label>
                  <textarea class="form-control" name="address" placeholder="Address"></textarea>
                </div>
                <div class="form-group col-md-4">
                  <label>City</label>
                  <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group col-md-4">
                  <label>State</label>
                  <input type="text" class="form-control" name="state" placeholder="State">
                </div>
                <div class="form-group col-md-4">
                  <label>Pincode</label>
                  <input type="text" class="form-control" name="pincode" placeholder="Pincode">
                </div>
                <div class="form-group col-md-12">
                  <label>Description</label>
                  <textarea class="form-control" name="description" placeholder="Property Description"></textarea>
                </div>
                <div class="form-group col-md-4">
                  <label>Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="form-group col-md-4">
                  <label>Bedrooms</label>
                  <input type="number" class="form-control" name="bedrooms" placeholder="Bedrooms">
                </div>
                <div class="form-group col-md-4">
                  <label>Bathrooms</label>
                  <input type="number" class="form-control" name="bathrooms" placeholder="Bathrooms">
                </div>
                <div class="form-group col-md-6">
                  <label>Sqft</label>
                  <input type="number" class="form-control" name="sqft" placeholder="Sqft Area">
                </div>
                <div class="form-group col-md-6">
                  <label>Plot Size</label>
                  <input type="text" class="form-control" name="plot_size" placeholder="Plot Size">
                </div>

                <!-- Photo Uploads -->
                <div class="form-group col-md-6">
                  <label>Main Photo</label>
                  <input type="file" class="form-control" name="photo_main">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 2</label>
                  <input type="file" class="form-control" name="photo2">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 3</label>
                  <input type="file" class="form-control" name="photo3">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo 4</label>
                  <input type="file" class="form-control" name="photo4">
                </div>

                <div class="form-group col-md-6">
                  <label>Is Published</label>
                  <select class="form-control" name="is_published">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
              </div>

              <a href="<?= base_url('properties'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>