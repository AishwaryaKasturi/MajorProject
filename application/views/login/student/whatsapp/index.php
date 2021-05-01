
<?php if($this->session->flashdata('sendmsg_user')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('sendmsg_user') . '</p>'; ?>
<?php endif; ?>
<h1 class="display-3 mt-4 text-center">Recently Registerd Students</h1>
<div class="table table-responsive">
	<table width="95%" class="table-striped">
		<thead>
			<th>Id</th>
			<th>First Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>UID</th>
			<th>Degree</th>
			<th>Stream</th>
			<th>WhatsApp</th>
		</thead>
		<tbody>
			<?php foreach($student as $students) : ?>
			<tr>
				<td><?= $students->id ?></td>
				<td><?= $students->first_name ?></td>
				<td><?= $students->email ?></td>
				<td><?= $students->mobile ?></td>
				<td><?= $students->uid ?></td>
				<td><?= $students->degree ?></td>
				<td><?= $students->stream ?></td>
				<td>
					<a href="<?= base_url('student/whatsapp/add_whatsapp/'.$students->mobile)?>" class="btn btn-primary">Send</a>
						
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>