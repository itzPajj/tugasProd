<div class="container-fluid">

    <h1 class="h3 mb-4 text-grey-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('massage'); ?>
            
            <form action="<?= base_url('user/change'); ?>" method="post">

                <div class="form-group">
                    <label for="current_pass">Curent Password</label>
                    <input type="text" class="form-control" name="current_pass" id="current_pass" placeholder="Current Password">
                    <?= form_error('current_pass', '<small class="form-text text-danger">', '</small>'); ?>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="new_pass1">New Password</label>
                        <input type="text" class="form-control" name="new_pass1" id="new_pass1" placeholder="New Password">
                        <?= form_error('new_pass1', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="new_pass2">Repeat New Password</label>
                        <input type="text" class="form-control" name="new_pass2" id="new_pass2" placeholder="Repeat New Password">
                        <?= form_error('new_pass2', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col">
                        <button type="submit" class="btn btn-dark text-info shadow">Change Password</button>
                    </div>

                </div>

            </form>



        </div>
    </div>

</div>