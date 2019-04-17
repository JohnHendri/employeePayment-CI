<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables Employees</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
	<h6 class="m-2 font-weight-bold text-primary">DataTables Employees</h6>
	<div class="box-header">
			<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url('employee/add') ?>" class="btn btn-outline-success">Add <i class="fas fa-plus"></i></a>
		<a href="<?php echo base_url('employee/exp_excel') ?>" class="btn btn-outline-info">Exp <i class="fas fa-file-excel"></i></a>
		<a href="<?php echo base_url('employee/exp_word') ?>" class="btn btn-outline-primary">Exp <i class="fas fa-file-word"></i></a>
		
            </div>
  </div>
  <div class="card-body">
	<div class="table-responsive">
	  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama Karyawan</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama Karyawan</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
		<tbody>
			<?php $no = 1;
			 foreach ($karyawan as $k) { ?>
				 <tr>
						<td><?= $no++ ?></td>
						<td><?= $k->NIP ?></td>
						<td><?= $k->Nama_Karyawan?></td>
						<td><?= $k->Tgl_Lahir?></td>
						<td><?= $k->Jenis_Kelamin?></td>
						<td><?= $k->Alamat?></td>
						<td>
						<a href="<?=base_url('employee/edit/'.$k->NIP)?>" class="btn btn-success"><i class="far fa-edit"></i></a> &nbsp;
			      <a href="<?=base_url('employee/delete/'.$k->NIP)?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						</td>
				 </tr>
				 
			<?php } ?> 
		  
		</tbody>
	  </table>
	</div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
