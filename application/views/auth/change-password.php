<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-md-5">

			<div class="card o-hidden border-0 shadow-lg my-5 ">
				<div class="card-body p-0">

					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashdata'); ?>">

					</div>
					<?php if ($this->session->flashdata('flashdata')) :  ?>

					<?php endif; ?>

					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-md">
							<div class="p-5">
								<div class="text-center">
									<strong class="h4 text-info my-5 text-bold"> Change Password </strong>
                                    <h5 class="mt-3"><?= $this->session->userdata('reset_email'); ?></h5>
								</div>

								<?= $this->session->flashdata('massage'); ?>

								<form class="user" method="post" action="<?= base_url('auth/changePassword'); ?>">
 
								4<div class="form-group">
                    				<input type="password" class="form-control form-control-user" name="pass1" id="pass1" placeholder="New Password..." autocomplete="off" >
                    				<?= form_error('pass1', '<small class="form-text text-danger">', '</small>');?>
                  				</div>

				  				<div class="form-group">
                  				  <input type="password" class="form-control form-control-user" name="pass2" id="pass2" placeholder="Repeat Password..." autocomplete="off" >
                  				  <?= form_error('pass1', '<small class="form-text text-danger">', '</small>');?>
                  				</div>

									<button href="index.html" class="btn btn-info btn-user btn-block">
										Reset Password
									</button>
                                    
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>