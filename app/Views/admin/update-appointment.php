<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Update Appointment</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('appointments'); ?>">Appointments</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Appointment</li>
        </ol>
      </nav>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('appointments'); ?>" class="btn btn-success float-end">Manage</a>
          </div>
          <div class="card-body">
            <form class="forms-sample" method="post" action="<?= base_url('appointments/edit/' . $appointment['appointment_id']); ?>">
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Client Name</label>
                  <input type="text" class="form-control" name="client_name" value="<?= esc($appointment['client_name']) ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="<?= esc($appointment['mobile']) ?>" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" value="<?= esc($appointment['email']) ?>">
                </div>
                <div class="form-group col-md-6">
                  <label>Appointment Date</label>
                  <input type="date" class="form-control" name="appointment_date" required>
                </div>
                <div class="form-group col-md-12">
                  <label>Message</label>
                  <textarea class="form-control" name="message" rows="3"><?= esc($appointment['message']) ?></textarea>
                </div>
              </div>
              <a href="<?= base_url('appointments'); ?>" class="btn btn-light float-start ps-3 pe-3">Cancel</a>
              <button type="submit" class="btn btn-gradient-primary me-2 float-end ps-3 pe-3">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
