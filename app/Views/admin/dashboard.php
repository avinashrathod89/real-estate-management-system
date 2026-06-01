<?php include('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('brokers'); ?>" class="text-white text-decoration-none">
          <div class="card bg-primary text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Brokers:</strong> <?= $total_brokers ?></div>
              <i class="mdi mdi-account-multiple mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('properties'); ?>" class="text-white text-decoration-none">
          <div class="card bg-success text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Properties:</strong> <?= $total_properties ?></div>
              <i class="mdi mdi-home-city-outline mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('enquiries'); ?>" class="text-dark text-decoration-none">
          <div class="card bg-warning text-dark">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Enquiries:</strong> <?= $total_enquiries ?></div>
              <i class="mdi mdi-email-outline mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('contacts'); ?>" class="text-white text-decoration-none">
          <div class="card bg-info text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Contacts:</strong> <?= $total_contacts ?></div>
              <i class="mdi mdi-phone-outline mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('staff'); ?>" class="text-white text-decoration-none">
          <div class="card bg-secondary text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Staff:</strong> <?= $total_staff ?></div>
              <i class="mdi mdi-account-tie mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="<?= base_url('appointments'); ?>" class="text-white text-decoration-none">
          <div class="card bg-danger text-white">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div><strong>Appointments:</strong> <?= $total_appointments ?></div>
              <i class="mdi mdi-calendar-check-outline mdi-24px"></i>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <?php include('footer.php'); ?>
</div>
