<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Staff </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('staff') ?>">Staff</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
      </nav>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('staff') ?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="<?= base_url('staff/update/'.$staff->staff_id) ?>">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="fullname">Full Name</label>
                  <input type="text" name="fullname" class="form-control" value="<?= $staff->fullname ?>" placeholder="Full Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" value="<?= $staff->email ?>" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="mobile">Mobile</label>
                  <input type="text" name="mobile" class="form-control" value="<?= $staff->mobile ?>" placeholder="Mobile">
                </div>
                <div class="form-group col-md-6">
                  <label for="password">New Password (optional)</label>
                  <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                </div>
                <div class="form-group col-md-6">
                  <label>Photo</label><br>
                  <img src="<?= base_url('uploads/staff/'.$staff->photo) ?>" width="100px">
                  <input type="hidden" name="oldphoto" value="<?= $staff->photo ?>">
                  <input type="file" name="photo" class="form-control mt-2">
                </div>
              </div>

              <a href="<?= base_url('staff') ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
