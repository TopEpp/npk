<table class="table">
    <thead>
    <tr>
        <th>ครั้งที่</th>
        <th class="text-left">วันที่แจ้งเตือน</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $key => $value) {?>
        <tr>
            <th scope="row"><?=$value->alert_order;?></th>
            <td><?=$this->mydate->date_eng2thai($value->alert_date, '', 'S');?></td>
            <td><div class="btn-group">
                    <a class="btn btn-info btn-sm" target="_blank" href='<?php echo base_url('export/alert_tax') . '/' . $value->alert_id; ?>' type="button">พิมพ์</a>
                </div>
            </td>
        </tr>
    <?php }?>


    </tbody>
</table>