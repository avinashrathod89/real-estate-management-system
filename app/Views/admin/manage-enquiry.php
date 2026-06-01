<?php include('header.php'); ?>

<div class="main-panel d-flex flex-column" style="min-height: 100vh;">
  <div class="content-wrapper flex-grow-1">
    <div class="page-header">
      <h3 class="page-title"> Enquiries </h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Enquiries</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Property</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($enquiries as $e): ?>
            <tr>
                <td><?= $e->enquiry_id; ?></td>
                <td><?= $e->user_id; ?></td>
                <td><?= $e->property_id; ?></td>
                <td><?= $e->fullname; ?></td>
                <td><?= $e->email; ?></td>
                <td><?= $e->mobile; ?></td>
                <td><?= $e->subject; ?></td>
                <td><?= $e->message; ?></td>
                <td><?= $e->date; ?></td>
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

  <!-- Footer bottom stick fix -->
  <?php include('footer.php'); ?>
</div>
