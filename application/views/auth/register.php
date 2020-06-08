

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-md-6 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-md">
            <div class="p-5">
              <div class="text-center">
              <strong class="h4 text-info mb-4 text-bold">Create an Account!</strong>
                <!-- <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1> -->
              </div>
              <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                <div class="form-group ">
                    <input type="text" class="form-control form-control-user mt-3" name="name" id="name" placeholder= "Enter Your Name" autocomplete="off" value="<?= set_value('name'); ?>" >  
                    <?= form_error('name', '<small class="form-text text-danger">', '</small>');?>
                  </div>


                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" autocomplete="off" value="<?= set_value('email'); ?>" > 
                  <?= form_error('email', '<small class="form-text text-danger">', '</small>');?>
                </div>


                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="pass1" id="pass1" placeholder="Password" autocomplete="off" >
                    <?= form_error('pass1', '<small class="form-text text-danger">', '</small>');?>
                  </div>


                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="pass2" id="pass2" placeholder="Repeat Password" autocomplete="off" >
                  </div>
                </div>
                <button type="submit" class="btn btn-info btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/forgotPassword') ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


