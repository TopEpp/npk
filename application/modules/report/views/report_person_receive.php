<div class="right_col" role="main">
        <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานลูกหนี้ค้างชำระ</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                          <!-- <button type="button" class="btn btn-success" title="กรองข้อมูล"><i class="glyphicon glyphicon-filter"> </i> ตัวกรอง
                          </button> -->
                          <button onclick="window.open('<?php echo base_url('export_report/report_person_receive?type=pdf');?>');" type="button" class="btn btn-success" title="ส่งออก pdf"> <i class="fa fa-file-pdf-o"> </i> ส่งออก pdf
                          </button>
                          <button onclick="window.open('<?php echo base_url('export_report/report_person_receive');?>');" type="button" class="btn btn-success" title="ส่งออก excel"> <i class="fa fa-file-excel-os"> </i> ส่งออก excel
                          </button>
                      </div>
                  </div>
        </section>          
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="top: 10px;">
                    <div class="col-xs-12 ">
                          <h5 class="inline text-right">ข้อมูล ณ วันที่ <?php echo $this->mydate->date_eng2thai(date('Y-m-d'), 543, 'S') ?></h5> 
                    </div>

              
              <div class="conteiner-fluid ">
                     
              
               <div class="x_content">
                 <br>
                    <table class="table table-bordered jambo_table">
                        <thead>
                          <tr>
                              <th >ลำดับ</th>
                              <th >เลขประจำตัวผู้เสียภาษี</th>
                              <th >ชื่อ - สกุล</th>
                              <th >เลขรับ</th>
                              <th >จำนวนที่จ่าย</th>
                              <!-- <th >วันที่</th> -->
                              <th >ภาษี</th>
                              <th>เล่มที่/เลขที่ ใบเสร็จ</th>
                              <th>วันที่ชำระ</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $int =1;
                            foreach ($person as $key => $value) { ?>
                            <tr>
                              <td><?php echo $int++;?></td>
                              <td><?php echo $value->individual_number;?></td>
                              <td><?php echo $value->individual_prename.$value->individual_fullname;?></td>
                              <td><?php echo $value->notice_number;?></td>
                              <td align="right"><?php echo number_format($value->receive_amount,2);?></td>
                              <!-- <td></td> -->
                              <td><?php echo $value->tax_name;?></td>
                              <td><?php echo $value->receipt_no.'/'.$value->receipt_number;?></td>
                              <td><?php echo $this->mydate->date_eng2thai($value->receive_date,543,'S');?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                  </table>
                </div>
                    
                    
                  </div>
                </div>
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
      


