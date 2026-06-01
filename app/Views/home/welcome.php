<?php include('header.php');?>
<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Welcome</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Welcome</p>
    </div>
  </div>
</section>
<!---728x90--->
<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
  <div class="contacts-main container">
    <div class="row mt-5 mb-5">
      <div class="col-md-2 mb-3">
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Enquiries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="changepassword-tab" data-toggle="tab" href="#changepassword" role="tab" aria-controls="changepassword" aria-selected="false">Change Password</a>
          </li>
        </ul>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-10">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php if (!empty($profile) && isset($profile[0]->fullname)): ?>
            <h2>Welcome <?= $profile[0]->fullname; ?></h2>
            <?php else: ?>
            <h2>Welcome Guest</h2>
            <?php endif; ?>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h4 class="mb-3">Your Enquiries</h4>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Property Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Enquiry Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($enquiries as $enquiry) { ?>
                    <tr>
                        <th scope="row"><?= $enquiry->enquiry_id?></th>
                        <td><?= $enquiry->title?></td>
                        <td><?= $enquiry->subject?></td>
                        <td><?= $enquiry->message?></td>
                        <td><?= $enquiry->date?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

          <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
            <form method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" value="<?=$profile[0]->fullname;?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?=$profile[0]->email;?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" value="<?=$profile[0]->mobile;?>">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
          </div>

          <div class="tab-pane fade" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
            <form method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Old Password</label>
                <input type="password" class="form-control" name="oldpassword">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">New Password</label>
                <input type="password" class="form-control" name="newpassword">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confpassword">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
          </div>


        </div>
      </div>
      <!-- /.col-md-8 -->
    </div>
  </div>
  <!---728x90--->
</section>
<!-- //contact form -->
<?php include('footer.php');?>