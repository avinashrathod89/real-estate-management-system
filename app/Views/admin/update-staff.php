<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Update Staff </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('staff'); ?>">Staff</a></li>
          <li class="breadcrumb-item active" aria-current="page">Update</li>
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
            <form class="forms-sample" method="post" enctype="multipart/form-data" action="<?= base_url('staff/edit/' . $staff->staff_id); ?>">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Fullname</label>
                  <input type="text" class="form-control" name="fullname" value="<?= esc($staff->fullname); ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?= esc($staff->email); ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="<?= esc($staff->mobile); ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Join Date</label>
                  <input type="date" class="form-control" name="join_date" value="<?= esc($staff->join_date); ?>" required>
                </div>
                <div class="form-group col-md-12">
                  <label>About</label>
                  <textarea class="form-control" name="about" rows="3"><?= esc($staff->about); ?></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label>Photo</label>
                  <input type="file" class="form-control" name="photo">
                  <?php if (!empty($staff->photo)): ?>
                    <img src="<?= base_url('uploads/staff/' . $staff->photo); ?>" width="80" class="mt-2">
                  <?php endif; ?>
                </div>
              </div>
              <a href="<?= base_url('staff'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
