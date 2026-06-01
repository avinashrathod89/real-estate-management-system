<?php include('header.php'); ?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2><?= $property[0]->title; ?></h2>
      <p><a href="<?= base_url(); ?>">Home</a> &nbsp; / &nbsp; <?= $property[0]->title; ?></p>
    </div>
  </div>
</section>

<section class="w3l-contacts-2" id="contact">
  <div class="contacts-main container">
    <div class="row mt-5 mb-5">
      <div class="col-md-8 mb-3">
        <img src="<?= base_url('uploads/' . $property[0]->photo_main); ?>" width="100%" alt="">

        <div class="row mt-5">
          <div class="col-md-3">
            <img src="<?= base_url('uploads/' . $property[0]->photo_main); ?>" width="100%" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('uploads/' . $property[0]->photo_main); ?>" width="100%" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('uploads/' . $property[0]->photo_main); ?>" width="100%" alt="">
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('uploads/' . $property[0]->photo_main); ?>" width="100%" alt="" class="mb-5">
          </div>

          <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item">Address: <?= $property[0]->address ?? ''; ?></li>
              <li class="list-group-item">Plot Size: <?= $property[0]->plot_size ?? ''; ?></li>
              <li class="list-group-item">Price: <?= $property[0]->price ?? ''; ?></li>
              
            </ul>
          </div>

          <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item">SQFT: <?= $property[0]->sqft ?? ''; ?></li>
              <li class="list-group-item">Bedrooms: <?= $property[0]->bedrooms ?? ''; ?></li>
              <li class="list-group-item">Bathrooms: <?= $property[0]->bathrooms ?? ''; ?></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-center">

        <img src="<?=base_url('uploads/'.$property[0]->photo_main);?>" width="100%" alt="">

        <h6>Broker Name: <?=$property[0]->fullname;?></h6>

        <h6>Email ID: <?=$property[0]->email;?></h6>

        <h6>Mobile No: <?=$property[0]->mobile;?></h6>

        <button class="btn btn-primary mt-3"  data-toggle="modal" data-target="#enquiryModal">Send Enquiry</button>

      </div>

    </div>
  </div>
</section>

<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content w3l-contacts-2">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel">Send Enquiry</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body contacts-main p-4">
        <form method="post" class="main-input">
          <input type="hidden" name="property_id" value="<?= $property[0]->property_id; ?>">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Fullname</label>
              <input type="text" class="form-control" name="fullname" value="<?= $session->get('fullname'); ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?= $session->get('email'); ?>" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Mobile</label>
              <input type="text" class="form-control" name="mobile" value="<?= $session->get('mobile'); ?>" required>
            </div>
            <div class="form-group col-md-6">
              <label>Subject</label>
              <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message" rows="4" placeholder="Write your message..." required></textarea>
          </div>

          <div class="text-right">
            <button type="submit" class="btn btn-primary px-4">Send Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
