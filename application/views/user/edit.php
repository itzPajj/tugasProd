<div class="container-fluid">

    <h1 class="h3 mb-4 text-grey-800">
        <?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('user/edit'); ?>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" readonly value="<?= $user['email']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<small class="form-text text-danger">', '</small>');?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image ">Choose file</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-dark text-info shadow">Edit</button>
                </div>
            </div>


        </div>
    </div>

</div>