<?php $this->load->view('login/admin/layouts/includes/navbar'); ?>

<?php $this->load->view('login/admin/layouts/includes/siderbar'); ?>
	<div style="background-image: url('assets/img/oxford.png');">
	<main style="margin-top:100px;" role="role" class="col-sm-10 ml-sm-auto">
		<?php $this->load->view($main_content);?>
	</main>
	
<?php $this->load->view('login/admin/layouts/includes/footer'); ?>