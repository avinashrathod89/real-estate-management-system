<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Appointments</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Manage Appointments</li>
        </ol>
      </nav>
    </div>
    
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('appointments/add'); ?>" class="btn btn-success float-end">+ Add Appointment</a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Appointments</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Client Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Appointment Date</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($appointments as $apt): ?>
                  <tr>
                    <td><?= $apt->appointment_id ?></td>
                    <td><?= $apt->client_name ?></td>
                    <td><?= $apt->mobile ?></td>
                    <td><?= $apt->email ?></td>
                    <td><?= date('d-m-Y h:i A', strtotime($apt->appointment_date)) ?></td>
                    <td><?= $apt->message ?></td>
                    <td>
                      <a href="<?= base_url('appointments/edit/'.$apt->appointment_id); ?>" class="btn btn-sm btn-primary me-1">
                          <i class="mdi mdi-pencil"></i> Edit
                      <a href="<?= base_url('appointments/delete/'.$apt->appointment_id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
