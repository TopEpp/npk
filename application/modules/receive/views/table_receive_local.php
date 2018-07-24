<br>
<div class="panel">
<table class="table table-bordered jambo_table">
	<thead>
		<tr>
			<th style="text-align: center;" width="8%">เลขที่รับ/ปี</th>
			<th style="text-align: center;" width="20%">เลขประจำตัวผู้เสียภาษี</th>
			<th style="text-align: center;" width="20%">ชื่อผู้เสียภาษี</th>
			<th style="text-align: center;" width="10%">จำนวนค่าภาษี</th>
			<th style="text-align: center;" width="10%">เงินเพิ่ม</th>
			<th style="text-align: center;" width="10%">ชำระแล้ว</th>
			<th style="text-align: center;" width="10%">คงเหลือ</th>
			<th style="text-align: center;" width="10%">เครื่องมือ</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($receive as $key => $value) { ?>
		<tr>
			<td style="text-align: center;"><?php echo str_replace($keyword, '<span style="color: red;">' . $keyword . '</span>', $value['notice_number']); ?>/<?php echo $value['tax_year'] + 543 ?></td>
			<td style="text-align: center;"><?php echo str_replace($keyword, '<span style="color: red;">' . $keyword . '</span>', $value['individual_number']); ?></td>
			<td ><?php echo str_replace($keyword, '<span style="color: red;">' . $keyword . '</span>', $value['individual_prename'] . $value['individual_fullname']); ?></td>
			<td style="text-align: right;"><?php echo number_format($value['sum_notice_estimate'], 2); ?></td>
			<td style="text-align: right;"><?php echo number_format($value['tax_interest'], 2); ?></td>
			<td style="text-align: right;"><?php echo number_format($value['tax_amount'], 2); ?></td>
			<td style="text-align: right;"><?php echo number_format($value['sum_notice_estimate'] - $value['tax_amount'], 2); ?></td>
			<td style="text-align: center;">
			<?php if (($value['sum_notice_estimate'] - $value['tax_amount']) > 0) : ?>
                 <a title="จ่าย" class="btn btn-success btn-sm" href="<?php echo base_url('receive/receive_tax_pay_add_local/' . $value['individual_id'] . '/' . $value['tax_id']) ?>">ชำระภาษี</a>
			<?php endif; ?>
			</td>

		</tr>
	<?php 
} ?>
	</tbody>
</table>
</div>
<br>
