<div class="right_col" role="main">
  <section class="row">
    <div class="col-md-6 col-sm-4 col-xs-4">
        <h3>ระบบจัดการปีงบประมาณ</h3>
    </div>
  </section>          
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel" style="top: 10px;">
            <div class="nav navbar-right panel_toolbox">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target=".create_year"><i class="fa fa-plus"></i> เพิ่มปีงบประมาณ</button>
            </div>
            <table class="table table-bordered jambo_table">
              <thead>
                <tr>
                  <th>ปีงบประมาณ</th>
                  <th>งบประมาณโครงการ</th>
                  <th>ประมาณการรายรับ</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($year as $key => $value) { $maxYear=$value->year_label;?>
                <tr>
                  <td><?php echo $value->year_label;?></td>
                  <td align="right"><?php echo number_format($value->prj_budget,2);?></td>
                  <td align="right"><?php echo number_format($value->tax_estimate,2);?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>
<style>
th{
  text-align: center;
  background-color:#2A3F54;
  color: #FFF;
}


</style>


<div class="modal fade create_year" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">สร้างปีงบประมาณ</h4>
      </div>
      <div class="modal-body clearfix">
        ยืนยันสร้างปีงบประมาณ : <?php echo $maxYear+1;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="btn-submit-plans" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('admin/create_year');?>'">บันทึก</button>
      </div>

    </div>
  </div>
</div>
      


