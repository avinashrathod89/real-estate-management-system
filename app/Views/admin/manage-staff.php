<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Staff</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('staff'); ?>">Staff</a></li>
          <li class="breadcrumb-item active" aria-current="page">Manage</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url('staff/add'); ?>" class="btn btn-success float-end">+ Add Staff</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Join Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($staff)): $i = 1; foreach ($staff as $row): ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td>
                      <?php if ($row->photo): ?>
                        <img src="<?= base_url('uploads/staff/' . $row->photo); ?>" width="50">
                      <?php else: ?>
                        N/A
                      <?php endif; ?>
                    </td>
                    <td><?= esc($row->fullname); ?></td>
                    <td><?= esc($row->email); ?></td>
                    <td><?= esc($row->mobile); ?></td>
                    <td><?= esc($row->join_date); ?></td>
                    <td>
                      <a href="<?= base_url('staff/edit/' . $row->staff_id); ?>" class="btn btn-sm btn-primary me-1">Edit</a>
                      <a href="<?= base_url('staff/delete/' . $row->staff_id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this staff?')">Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; else: ?>
                    <tr><td colspan="7" class="text-center">No records found.</td></tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
