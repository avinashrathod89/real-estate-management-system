<?php include('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Brokers </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('brokers'); ?>">Brokers</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('brokers'); ?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputUsername1">Fullname</label>
                  <input type="text" class="form-control" name="fullname" value="<?= $broker[0]->fullname; ?>"
                    placeholder="Username">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" value="<?= $broker[0]->email; ?>"
                    placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="<?= $broker[0]->mobile; ?>"
                    placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Join Date</label>
                  <input type="date" class="form-control" name="join_date" value="<?= $broker[0]->join_date; ?>"
                    placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">About</label>
                  <textarea class="form-control" name="about" placeholder="About"><?= $broker[0]->about; ?></textarea>
                </div>
                <div class="form-group col-md-6">
                  <img src="<?= base_url('uploads/' . $broker[0]->photo); ?>" width="100px" alt="">
                  <input type="hidden" name="oldphoto" value="<?= $broker[0]->photo; ?>">
                  <label for="exampleInputPassword1">Photo</label>
                  <input type="file" class="form-control" name="photo">
                </div>
              </div>

              <a href="<?= base_url('brokers'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Update</button>
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

  <?php include('footer.php'); ?>