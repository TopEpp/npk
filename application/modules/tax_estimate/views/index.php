<div class="right_col" role="main">
  <section class="row">
          <div class="col-md-6 col-sm-4 col-xs-4">
              <h3>ประมาณการรายรับ</h3>
          </div>
  </section>
  <div class="row">
   <div class="x_content">
     <div class="x_panel">
     <br>
     <div class="">
     <form method="post" action="<?php echo base_url('Tax_estimate/saveEstimate') ?>">
          <table class="table table-bordered jambo_table">
              <thead>
                <tr>
                  <th width="80%">หมวดรายได้</th>
                  <th>ประมาณการ</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($tax[0] as $key => $value) { ?>
                <tr>
                  <td><span style="font-weight: bolder;"><?php echo $value->tax_name; ?></span></td>
                  <td></td>
                </tr>
                <?php foreach ($tax[$value->tax_id] as $key => $value2) { ?>
                  <tr>
                    <td><span style="padding-left: 15px;"><?php echo $value2->tax_name; ?></span></td>
                    <td><input type="text" class="numeric form-control" name="estimate_tax[<?php echo $value2->tax_id ?>]" value="<?php echo $value2->tax_estimate ?>" ></td>
                  </tr>
                <?php 
              } ?>
              <?php 
            } ?>
              </tbody>
            </table>

            <div style="text-align: right;">
              <button type="submit" class="btn btn-default">บันทึก</button>
            </div>
    </from>
    
    </div>

    </div>
  </div>
</div>



