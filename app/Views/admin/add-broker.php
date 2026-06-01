<?php include('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Brokers </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('brokers'); ?>">Brokers</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                  <input type="text" class="form-control" name="fullname" placeholder="Username">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Mobile</label>
                  <input type="text" class="form-control" name="mobile" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Join Date</label>
                  <input type="date" class="form-control" name="join_date" placeholder="Email">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">About</label>
                  <textarea class="form-control" name="about" placeholder="About"></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Photo</label>
                  <input type="file" class="form-control" name="photo">
                </div>
              </div>

              <a href="<?= base_url('brokers'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Submit</button>
            </form>

          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

  <?php include('footer.php'); ?>