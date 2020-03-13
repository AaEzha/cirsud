<div class="flex">
	<div class="f-col-7 f-float-round pad-sm">
		<h6>Pelayanan Hari Ini</h6>

		<div class="row mb-3">
			<div class="col-12">
				<div id="dashboard-info"></div>
			</div>
		</div>

	</div>

	<div class="f-col-5 f-float-round pad-sm">
		<h6>Lapor Cepat</h6>

		<?=form_open('#');?>

          <div class="label">
            <input type="text" class="form-control mt-3" name="nama" value="CSIT_1231312">
          </div>

          <div class="label">
            <input type="text" class="form-control mt-3" name="email" value="<?=$this->session->nama;?>">
          </div>

          <!-- <input type="submit" class="btn btn-primary rounded mt-3 pull-right" value="Terbitkan Tiket"> -->
          <a href="#" class="btn btn-primary rounded mt-3 pull-right">Terbitkan Tiket</a>

          <?=form_close();?>

	</div>
</div>

<div class="flex">
	<div class="f-col"><h6>Aktifitas Pelayanan</h6></div>
	<div class="f-col"><span class="pull-right"><a href="<?=base_url('csunitit/dashboard/perbaikan');?>">Perbaikan</a> | <a href="<?=base_url('csunitit/dashboard/maintenance');?>">Maintenance</a></span></div>
</div>

<div class="flex">
	<div class="f-col f-float-round pad-sm">
		<table class="table table-bordered">
			<tr>
				<td>No</td>
				<td>Jenis</td>
				<td>Tiket</td>
				<td>Waktu</td>
				<td>Status Pelayanan</td>
				<td>Status Tiket</td>
				<td>Aksi</td>
			</tr>

			<?php $no=1; foreach($datas as $data): ?>
			<tr>
				<td><?=$no++;?></td>
				<td><?=$data->jenis;?></td>
				<td><?=$data->tiket;?></td>
				<td><?=date_indo($data->waktu);?> / <?=time_indo($data->waktu);?></td>
				<td><?=$data->status_pelayanan;?></td>
				<td><?=$data->status_ticket;?></td>
				<td>
					<a href="#" class="btn btn-primary rounded btn-sm">Detail</a>
				</td>
			</tr>
			<?php endforeach; ?>

		</table>
	</div>
</div>