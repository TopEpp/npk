
<div class="right_col" role="main">
          <section class="row">
                  <div class="col-md-6 col-sm-4 col-xs-4">
                      <h3>รายงานยุทธศาสตร์</h3>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-8 text-right" style="margin-top: 7px;">
                      <div class="btn-group">
                          <!-- <button type="button" class="btn btn-success" title="กรองข้อมูล"><i class="glyphicon glyphicon-filter"> </i> ตัวกรอง
                          </button> -->
                          <button type="button" class="btn btn-success" title="ส่งออกข้อมูล"> <i class="fa fa-upload"> </i> ส่งออกข้อมูล
                          </button>
                          <button type="button" class="btn btn-success" title="พิมพ์"> <i class="glyphicon glyphicon-print"> </i> พิมพ์
                          </button>
                      </div>
                  </div>
          </section>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="top: 10px;">
                  <div class="col-xs-12 ">
                      <h5 class="inline text-right">ข้อมูล ณ วันที่ 
                        <?php echo $this->mydate->date_eng2thai(date('Y-m-d'),543,'S')?></h5> 
                  </div>

              
          
               <div class="x_content">
                 <div style="text-align: center;">
                   <h2>รายงานเปรียบเทียบ ยุทธศาสตร์ปี <?php echo $this->session->userdata('year')+543-1?> - <?php echo $this->session->userdata('year')+543?></h2>
                 </div>
                 <br>
                 <table class="table table-bordered jambo_table">
                      <thead>
                        <tr>
                          <th rowspan="2">แผนงาน</th>
                          <th colspan="4">ประมาณการงบประมาณ</th>
                        </tr>
                        <tr>
                          <th width="10%">ปี <?php echo $this->session->userdata('year')+543-1?></th>
                          <th width="10%">ปี <?php echo $this->session->userdata('year')+543?></th>
                          <th width="10%">เปลี่ยนแปลง </th>
                          <th width="10%">ยอดต่าง (%) </th>
                        </tr>
                      </thead>
                      <?= $project; ?>
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

