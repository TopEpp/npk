<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3>โครงการ</h3>
      </div>
    </div>

    <br>
    <br>

    <div class="clearfix"></div>



    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="nav navbar-left panel_toolbox">
            <h4>แผนงานบริหารงานทั่วไป / งานบริหารทั่วไป / งบบุคลากร</h4>
        </div>
        <div class="nav navbar-right panel_toolbox">
          <h4> ปีงบประมาณ : <?php echo $this->session->userdata('year') + 543; ?> </h4>
        </div>

        <br/>
        <br/>
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">โครงการ</a>
            </li>
            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">ข้อมูลโครงการ</a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <!-- <tab1> -->
            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ชื่อโครงการ<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control" id="prj_name"  name="prj_name" placeholder="ระบุชื่อโครงการ" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">กรอบงบประมาณ<span class="required">*</span>
                  </label>

                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="checkbox" style="border:none;">
                          <label>
                            <input type="checkbox"  name="prj_budget" class="flat" > งบประมาณที่ได้รับ
                          </label>
                        </div>
                      </div>
                    </div>
                    <br/>
                    <div class="row ">
                      <div class="col-sm-8 well">
                        <div class="row">
                          <div class="col-md-3 col-sm-3 col-xs-6 ">
                            <div class="checkbox" style="border:none;">
                              <label>
                              ระบุจำนวนเงิน
                              </label>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6">
                            <input class="form-control" id="prj_name"  name="prj_name" placeholder="จำนวน" type="text"> 
                          </div>
                          <div class="col-md-1 col-sm-1 col-xs-12">
                            บาท
                          </div>
                        </div>
                      </div>
                    
                    </div>

                    <div class="row">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="checkbox" style="border:none;">
                          <label>
                            <input type="checkbox"  name="prj_budget" class="flat" > งบประมาณภายนอก
                          </label>
                        </div>
                      </div>
                    </div>
                    <br/>
                    <div class="row well">
                      <div class="col-md-2 col-sm-2 col-xs-4 text-center">
                        <div class="checkbox" style="border:none;">
                          <label>
                          ระบุจำนวนเงิน
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-6">
                      <input class="form-control" id="prj_name"  name="prj_name" placeholder="จำนวน" type="text"> 
                      </div>
                      <div class="col-md-1 col-sm-1 col-xs-12">
                        บาท
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        แหล่งที่มา
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" id="prj_name"  name="prj_name" placeholder="ที่มา" type="text"> 
                      </div>
                    </div>
                    <div class="row well">
                      <div class="col-md-2 col-sm-2 col-xs-4 text-center">
                        <div class="checkbox" style="border:none;">
                          <label>
                          ระบุจำนวนเงิน
                          </label>
                        </div>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-6">
                      <input class="form-control" id="prj_name"  name="prj_name" placeholder="จำนวน" type="text"> 
                      </div>
                      <div class="col-md-1 col-sm-1 col-xs-4">
                        บาท
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        แหล่งที่มา
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <input class="form-control" id="prj_name"  name="prj_name" placeholder="ที่มา" type="text"> 
                      </div>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="checkbox" style="border:none;">
                            <label>
                              <input type="checkbox" name="prj_budget" class="flat"> แปลงงบประมาณ
                            </label>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class="row well">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="">
                              <input type="text" >
                              <a style="cursor:pointer" onclick="alert('asd')"><i class="fa fa-search"></i></a>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_content">

                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>ชื่อโครงการ</th>
                                          <th>งบเหลือจ่าย</th>
                                          <th>&nbsp;</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>เงินเดือน</td>
                                          <td>1000</td>
                                          <td><div class="btn-group">
                                                <button class="btn btn-warning" type="button">เลือก</button>
                                              </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                  </div>
                                </div>
                                <hr/>
                                <h4>รายละเอียด</h4>
                                <div class="x_panel">
                                  <div class="x_content">

                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>โครงการที่เลือก</th>
                                          <th>&nbsp;</th>
                                          <th>&nbsp;</th>
                                          <th>&nbsp;</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>เงินเดือน (งบเหลือจ่าย 1000)</td>
                                          <td><input type="text"></td>
                                          <td>บาท</td>
                                          <td><div class="btn-group">
                                                <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                              </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>

                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <br>
                   
                
                   
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ผู้รับผิดชอบ
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="prj_owner"  name="prj_owner" class="select2_single form-control" tabindex="1">
                      <option disabled>เลือก</option>
                      <?php foreach ($user as $key => $value) {?>
                        <option value="<?=$value->user_id?>"><?=$value->user_firstname.' '.$value->user_lastname.' '.$value->tel_no;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ประเภทโครงการ
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>
                      <input type="radio" class="flat" name="prj_type" id="prj_type0" value="0" /> ใหม่ &nbsp;
                      <input type="radio" class="flat" name="prj_type" id="prj_type1" value="1" /> ต่อเนื่อง &nbsp;

                      </p>
                    </p>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button class="btn btn-primary" type="button">Cancel</button>
                
                  </div>
                </div>
              </form>
            </div>

            <!-- tab2 -->
            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
              <div class="form-group">
                  <label>สถานะโครงการ</label>
                  <p>
                    <input type="radio" class="flat" name="prj_status" id="prj_status0" value="0" /> ยังไม่ได้ดำเนินการ &nbsp;
                    <input type="radio" class="flat" name="prj_status" id="prj_status1" value="1" /> อยู่ระหว่างดำเนินการ &nbsp;
                    <input type="radio" class="flat" name="prj_status" id="prj_status2" value="2" /> ดำเนินการเสร็จสิ้น &nbsp;
                    <input type="radio" class="flat" name="prj_status" id="prj_status3" value="3" /> ยกเลิก &nbsp;
                  </p>

              </div>
              <hr/>
              <h4>ตารางเบิกจ่าย</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>วันที่</th>
                      <th>รายการ</th>
                      <th>ผู้ที่เบิกจ่าย</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>27 มิถุนายน 2561</td>
                      <td>เงินเดือน</td>
                      <td>admin</td>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              <h4>ปรับปรุงข้อมูลล่าสุดเมื่อไหร่</h4>
               <table class="table">
                  <thead>
                    <tr>
                      <th>อัพเดทเมื่อ</th>
                      <th>ผู้ที่อัพเดท</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>27 มิถุนายน 2561</td>
                      <td>admin</td>
                    </tr>
                  </tbody>
                </table>


            </div>
          </div>
        </div>


          <br>
        </div>
      </div>



    </div>
</div>
