<?php include('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Properties </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Properties</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-header d-flex justify-content-end">
            <a href="<?= base_url('add-property'); ?>" class="btn btn-success">+ Add Property</a>
          </div>
          <div class="card-body">
            <h4 class="card-title">Properties</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Price</th>
                    <th>Sqft</th>
                    <th>Bedrooms</th>
                    <th>Bathrooms</th>
                    <th>Published</th>
                    <th>Photo</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($properties as $property) { ?>
                    <tr>
                      <th scope="row"><?= $property->property_id; ?></th>
                      <td><?= $property->title; ?></td>
                      <td><?= $property->city; ?></td>
                      <td><?= $property->state; ?></td>
                      <td>₹<?= $property->price; ?></td>
                      <td><?= $property->sqft; ?> sqft</td>
                      <td><?= $property->bedrooms; ?></td>
                      <td><?= $property->bathrooms; ?></td>
                      <td>
                        <?php if ($property->is_published): ?>
                          <span class="badge bg-success">Yes</span>
                        <?php else: ?>
                          <span class="badge bg-danger">No</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($property->photo_main): ?>
                          <img src="<?= base_url('uploads/' . $property->photo_main) ?>" class="img-thumbnail property-thumb">
                        <?php else: ?>
                          N/A
                        <?php endif; ?>
                      </td>
                      <td>
                       <a href="<?= base_url('update-property/' . $property->property_id); ?>" class="btn btn-sm btn-primary me-1">
                        <i class="mdi mdi-pencil"></i> Edit
                       </a>
                       <a href="<?= base_url('delete-property/' . $property->property_id); ?>" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this property?')">
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
