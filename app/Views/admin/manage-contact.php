<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Contacts </h3>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Contact Messages</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($contacts as $row): ?>
                  <tr>
                    <td><?= $row->contact_id; ?></td>
                    <td><?= $row->fullname; ?></td>
                    <td><?= $row->email; ?></td>
                    <td><?= $row->mobile; ?></td>
                    <td><?= $row->subject; ?></td>
                    <td><?= $row->message; ?></td>
                    <td><?= $row->date; ?></td>
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
