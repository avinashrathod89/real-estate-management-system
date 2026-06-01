<?php include('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Brokers </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Brokers</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('add-broker'); ?>" class="btn btn-success float-end">+ Add Broker</a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Brokers</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Broker Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Join Date</th>
                    <th>About</th>
                    <th>Photo</th>
                    <th>Action</th> <!-- ✅ Added Action column -->
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($brokers as $broker) { ?>
                    <tr>
                      <th scope="row"><?= $broker->broker_id; ?></th>
                      <td><?= $broker->fullname; ?></td>
                      <td><?= $broker->email; ?></td>
                      <td><?= $broker->mobile; ?></td>
                      <td><?= $broker->join_date; ?></td>
                      <td><?= $broker->about; ?></td>
                      <td><img src="<?= base_url('uploads/' . $broker->photo) ?>" width="100px"></td>
                      <td>
                        <a href="<?= base_url('update-broker/' . $broker->broker_id); ?>" class="btn btn-sm btn-primary me-1">
                          <i class="mdi mdi-pencil"></i> Edit
                        </a>
                        <a href="<?= base_url('delete-broker/' . $broker->broker_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this broker?')">
                          <i class="mdi mdi-delete"></i> Delete
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

<?php include('footer.php'); ?>
