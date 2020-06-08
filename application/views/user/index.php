<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-grey-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">

            </div>
            <?php if ($this->session->flashdata('flash')) :  ?>
                
            <?php endif; ?>
            <?= $this->session->flashdata('massage'); ?>

        </div>
    </div>

    <div class="card mb-3 bg-dark" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-light">
                    <h5 class="card-title "><?= $user['name']; ?></h5>
                    <p class="card-text"> Email : <?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since of <?= date('d F Y', $user['date_created']); ?></small></p>
                    <a href="<?= base_url('user/edit'); ?>">
                        <i class="fas fa-sign-in-alt text-info float-right" data-toggle="tooltip" data-placement="bottom" title="Edit Profile" ></i>
                    </a>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->