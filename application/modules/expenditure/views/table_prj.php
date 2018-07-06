<table class="table table-bordered jambo_table">
	<thead>
		<tr>
			<th>โครงการ</th>
			<th>งบประมาน</th>
			<th>บันทึกรายจ่าย</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($prj as $key => $value) { ?>
		<tr>
			<td><?php echo str_replace($keyword, '<span style="color: red;">'.$keyword.'</span>', $value->prj_name);?></td>
			<td style="text-align: right;"><?php echo number_format($value->prj_budget,2);?></td>
			<td style="text-align: center;"><button class="btn btn-default" type="button" onclick="window.location.href='<?php echo base_url('expenditure/expenditure_form/'.$value->prj_id)?>'">จ่าย</button></td>
		</tr>
	<?php } ?>
	</tbody>
</table>