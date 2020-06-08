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
									<strong class="h4 text-info my-5 text-bold"> Forgot Your Password ? </strong>
								</div>
								<?= $this->session->flashdata('massage'); ?>
								<form class="user" method="post" action="<?= base_url('auth/forgotPassword'); ?>">
 
									<div class="form-group mt-3 ">
										<input type="text" class="form-control form-control-user " name="email" id="email" placeholder="Enter Email Address..." autofocus autocomplete="off" value="<?= set_value('email'); ?>">
										<?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
									</div>

									<button href="index.html" class="btn btn-info btn-user btn-block">
										Reset Password
									</button>
									<hr>
								</form>
								<div class="text-center">
									<a class="small" href="<?= base_url('auth'); ?>">Back to login</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>