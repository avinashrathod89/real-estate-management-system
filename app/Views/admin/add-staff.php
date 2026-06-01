<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Staff </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('staff'); ?>">Staff</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('staff'); ?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?= base_url('staff/add'); ?>">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Fullname</label>
                  <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Join Date</label>
                  <input type="date" class="form-control" name="join_date" required>
                </div>
                <div class="form-group col-md-12">
                  <label>About</label>
                  <textarea class="form-control" name="about" rows="3" placeholder="About"></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Photo</label>
                  <input type="file" class="form-control" name="photo">
                </div>
              </div>
              <a href="<?= base_url('staff'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
