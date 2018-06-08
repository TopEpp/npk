<div class="right_col" role="main">
          
          <div class="page-title">
            <div class="title_left">
              <h3>ระบบบัญชีรายจ่าย</h3>
            </div>
          </div>

            <br>
            <br>

          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                      <div class="col-xs-12 text-right">
                          <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#paymodal" title="เบิกจ่าย"><i class="fa fa-paypal"></i>
                          </button>
                      </div>
                  <div class="clearfix"></div>
                </div>

              

               <div class="x_content">
                  <table id="myTable" class="display" style="width:100%">
                      <thead>
                        <tr>
                          <th>วันที่ชำระ</th>
                          <th>เลขที่เช็ค / ฎีกา</th>
                          <th>แผนงาน / โครงการ</th>
                          <th>จำนวนเงินที่เบิกจ่าย</th>
                          <th>ผู้ดำเนินการ</th>
                          <th style="width: 120px;">เครื่องมือ</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td align="center">29/04/2560</td>
                          <td align="center">56030011132010000017</td>
                          <td>แผนงานอุโมงค์ลดโลกร้อน</td>  
                          <td align="right">300,000.00</td>
                          <td>ไพโรจน์ สุริยะ</td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>

                        <tr>
                          <td align="center">14/03/2560</td>
                          <td align="center">46008004635080130550</td>
                          <td>แผนงานการบริหารทรัพยากรบุคคล</td>  
                          <td align="right">20,000.00</td>
                          <td>ไพโรจน์ สุริยะ</td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>
                        
                        <tr>
                          <td align="center">4/03/2559</td>
                          <td align="center">18777972531266493433</td>
                          <td>แผนงานจัดการขยะมูลฝอยแบบบูรณาการสามระบบ</td>  
                          <td align="right">150,000.00</td>
                          <td>ไพโรจน์ สุริยะ</td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>

                        <tr>
                          <td align="center">19/02/2559</td>
                          <td align="center">23413714512731653114</td>
                          <td>แผนงานอ่างเก็บน้ำสวนสาธารณะ</td>  
                          <td align="right">650,000.00</td>
                          <td>ไพโรจน์ สุริยะ</td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>

                        <tr>
                          <td align="center">15/02/2558</td>
                          <td align="center">19082392162368593912</td>
                          <td>แผนงานส่งเสริมคุณภาพสิ่งแวดล้อม</td>  
                          <td align="right">50,000.00</td>
                          <td>ไพโรจน์ สุริยะ</td>
                          <td>
                            <center>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-success btn-sm" title="แก้ไข">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delmodal" title="ลบ">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </div>
                            </center>               
                          </td>
                        </tr>
                      <tbody>
                    </table>
                </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

        <!-- Modal Popup -->

          <div class="modal fade" id="paymodal" tabindex="-1" role="dialog" aria-labelledby="paymodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <?php $this->load->view('expenditure/expenditure_pay_popup.php'); ?>
            </div>
          </div>

          
          <div class="modal fade" id="delmodal" tabindex="-1" role="dialog" aria-labelledby="delmodal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <?php $this->load->view('receive/del_popup.php'); ?>
            </div>
          </div>


<style>
th{
text-align: center;
}
</style>
      


