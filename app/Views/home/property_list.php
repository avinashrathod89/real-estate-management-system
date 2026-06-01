<?php include('header.php'); ?>

<style>
  /* Image Thumbnail - photo column bigger */
  .property-thumb {
    width: 90px;
    height: 65px;
    object-fit: cover;
    border-radius: 4px;
    transition: transform 0.2s ease-in-out;
  }
  .property-thumb:hover {
    transform: scale(1.05);
  }

  /* Table Header */
  .table thead th {
    background-color: #f4f6f9;
    color: #333;
    font-weight: 600;
    vertical-align: middle;
    text-align: center;
    white-space: nowrap;
    font-size: 16px;
    padding: 14px;
  }

  /* Table Body */
  .table td {
    vertical-align: middle;
    text-align: center;
    font-size: 15px;
    padding: 12px;
    white-space: nowrap;
  }

  /* Specific column widths */
  .table th:nth-child(10), .table td:nth-child(10) { /* Photo column */
    width: 110px;
  }
  .table th:nth-child(11), .table td:nth-child(11) { /* Actions column */
    width: 110px;
  }

  /* Edit Button */
  .btn-edit {
    background-color: #a569bd;
    color: white;
    padding: 3px 6px;
    border-radius: 5px;
    font-weight: 500;
    font-size: 11px;
    display: inline-flex;
    align-items: center;
  }
  .btn-edit:hover {
    background-color: #8e44ad;
    color: white;
  }

  /* Delete Button */
  .btn-delete {
    background-color: #ec7063;
    color: white;
    padding: 3px 6px;
    border-radius: 5px;
    font-weight: 500;
    font-size: 11px;
    display: inline-flex;
    align-items: center;
  }
  .btn-delete:hover {
    background-color: #cb4335;
    color: white;
  }

  /* Icon spacing */
  .btn i {
    margin-right: 4px;
  }

  /* Mobile view adjustments */
  @media (max-width: 767px) {
    .btn-edit, .btn-delete {
      display: block;
      width: 100%;
      margin: 3px 0;
      justify-content: center;
    }
    .table td, .table th {
      font-size: 12px;
      padding: 4px;
    }
    .property-thumb {
      width: 70px;
      height: 50px;
    }
  }
</style>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header d-flex justify-content-between align-items-center flex-wrap">
      <div class="mb-2">
        <h3 class="page-title mb-1">🏠 Properties List</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Properties</li>
          </ol>
        </nav>
      </div>
      <a href="<?= base_url('add-property'); ?>" class="btn btn-success btn-sm">
        <i class="mdi mdi-plus"></i> Add Property
      </a>
    </div>

    <div class="card mt-3">
      <div class="card-body">
        <h4 class="card-title mb-3">All Properties</h4>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>City</th>
                <th>State</th>
                <th>Price</th>
                <th>Sqft</th>
                <th>Beds</th>
                <th>Baths</th>
                <th>Published</th>
                <th>Photo</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($properties)) : ?>
                <?php foreach ($properties as $property) : ?>
                  <tr>
                    <td><?= $property->property_id; ?></td>
                    <td><?= esc($property->title); ?></td>
                    <td><?= esc($property->city); ?></td>
                    <td><?= esc($property->state); ?></td>
                    <td>₹<?= number_format($property->price); ?></td>
                    <td><?= esc($property->sqft); ?></td>
                    <td><?= esc($property->bedrooms); ?></td>
                    <td><?= esc($property->bathrooms); ?></td>
                    <td>
                      <?php if ($property->is_published): ?>
                        <span class="badge bg-success">Yes</span>
                      <?php else: ?>
                        <span class="badge bg-danger">No</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php if (!empty($property->photo_main)) : ?>
                        <img src="<?= base_url('uploads/' . $property->photo_main) ?>" class="property-thumb">
                      <?php else: ?>
                        <span class="text-muted">No Photo</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?= base_url('update-property/' . $property->property_id); ?>" 
                         class="btn btn-edit">
                        <i class="mdi mdi-pencil"></i> Edit
                      </a>
                      <a href="<?= base_url('delete-property/' . $property->property_id); ?>" 
                         class="btn btn-delete"
                         onclick="return confirm('Are you sure you want to delete this property?')">
                        <i class="mdi mdi-delete"></i> Delete
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="11" class="text-muted">No properties found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
