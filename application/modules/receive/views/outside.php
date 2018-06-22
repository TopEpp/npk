<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3>ระบบรายรับนอกงบประมาณ</h3>
      </div>
    </div>

    <br>
    <br>

    <div class="clearfix"></div>


    
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class="nav navbar-right panel_toolbox">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target=".create_plan"><i class="fa fa-plus"></i> เพิ่มรายการ</button>
            </div>
            <div class="nav navbar-right panel_toolbox">
            </div>
            <div style="margin:20px 0;"></div>
            <table id="tg" class="easyui-treegrid" title="&emsp;รายการรายรับนอกงบประมาณ" style="width:100%;">
            </table>
           
            <br>
        </div>
      </div>

     
      
    </div>
</div>

<!-- start model form -->


<div class="modal fade create_plan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">รายรับนอกงบประมาณ</h4>
      </div>
      <div class="modal-body clearfix">
        <form class="form-horizontal form-label-left" id="form_plan">
          <!-- hidden value -->
        <input  id="hidden_id"  name="hidden_id"  type="hidden">
        <input  id="hidden_edit"  name="hidden_edit"  value="false" type="hidden"> 
          <div class="form-group">
            <label>รายการ</label>
            <input class="form-control" id="outside_title"  name="outside_title" placeholder="ระบุรายการ" type="text">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="btn-submit-plans" class="btn btn-primary">บันทึก</button>
      </div>

    </div>
  </div>
</div>


<div class="modal fade create_plan_detail" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">บริหารโครงการ</h4>
      </div>
      <div class="modal-body clearfix">
        <form class="form-horizontal form-label-left" id="form_plan_name">
          <!-- hidden value -->
        <input  id="hidden_level"  name="hidden_level" value="3"  type="hidden"> 
        <input  id="hidden_id_detail"  name="hidden_id_detail"  type="hidden">
        <input  id="hidden_edit_detail"  name="hidden_edit_detail"  type="hidden">
          <div class="form-group">
            <label>งบ</label>
            <select id="outside_select"  name="outside_select" class="select2_single form-control" tabindex="1">
              <option disabled>เลือก</option>
              <option value="1">งบบุคลากร</option>
              <option value="2">งบดำเนินงาน</option>
              <option value="3">งบลงทุน</option>
              <option value="4">งบเงินอุดหนุน</option>
              <option value="5">งบกลาง</option>
            </select>
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="btn-submit-plan" class="btn btn-primary">บันทึก</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade create_plan_cost" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">บริหารโครงการ</h4>
      </div>
      <div class="modal-body clearfix">
        <form class="form-horizontal form-label-left" id="form_plan_name">
          <!-- hidden value -->
          <input  id="hidden_lv"  name="hidden_lv" value="4"  type="hidden"> 
          <input  id="hidden_id_cost"  name="hidden_id_cost"  type="hidden"> 
          <input  id="hidden_edit_cost"  name="hidden_edit_cost"  type="hidden">
          <div class="form-group">
            <label>รายจ่าย</label>
            <select class="select2_group form-control" id="outside_cost" name="outside_cost">
              <optgroup label="งบบุคลากร">
                <option value="1">เงินเดือน (ฝ่ายการเมือง)</option>
                <option value="2">เงินเดือน (ฝ่ายประจำ)</option>
              </optgroup>
              <optgroup label="งบดำเนินงาน">
                <option value="3">ค่าตอบแทน</option>
                <option value="4">ค่าใช้สอย</option>
                <option value="5">ค่าวัสดุ</option>
                <option value="6">ค่าสาธารณูปโภค</option>
              </optgroup>
              <optgroup label="งบลงทุน">
                <option value="7">ค่าครุภัณฑ์</option>
                <option value="8">ค่าที่ดินและสิ่งก่อสร้าง</option>
                
              </optgroup>
              <optgroup label="งบเงินอุดหนุน">
                <option value="9">เงินอุดหนุน</option>
              </optgroup>
              <optgroup label="งบกลาง">
                <option value="10">งบกลาง</option>
              </optgroup>

            </select>
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="btn-submit-cost" class="btn btn-primary">บันทึก</button>
      </div>

    </div>
  </div>
</div>


<div class="modal fade creat_prj" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">เพิ่มรายการ <span id="outside_year"></span></h4>
      </div>
      <div class="modal-body clearfix">
        <!-- //check edit form -->
        <input  id="hidden_prj_id"  name="hidden_prj_id"  type="hidden"> 
        <input  id="hidden_prj_edit"  name="hidden_prj_edit"  type="hidden"> 
        <!-- //check edit form -->
        <form class="form-horizontal form-label-left" id="form_prj">
          <!-- hidden value -->
          <input  id="prj_parent"  name="prj_parent"  type="hidden"> 
          <input  id="prj_year"  name="prj_year"  type="hidden"> 
          <div class="form-group">
            <label>ชื่อรายการ</label> 
            <input class="form-control" id="prj_name"  name="prj_name" placeholder="ระบุชื่อรายการ" type="text">
          </div>
          <div class="form-group">
            <label>รหัสบัญชี</label> 
            <input class="form-control" id="prj_name"  name="prj_name" placeholder="ระบุรหัสบัญชี" type="text">
          </div>

          <div class="form-group">
            <label>จำนวนเงินรับ</label> 
            <input class="form-control" id="prj_budget"  name="prj_budget" placeholder="ระบุจำนวนเงินที่รับ" type="text">
          </div>
          <div class="form-group">
            <label>ผู้ที่รับผิดชอบ</label> 
            <input class="form-control" id="prj_owner"  name="prj_owner" placeholder="ระบุผู้ที่รับผิดชอบ" type="text">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" id="btn-submit-prj" class="btn btn-primary">บันทึก</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade del_prj" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="delmodal">การแจ้งเตือน!</h4>
          </div>
          
          
          <div class="modal-body clearfix">
                <h5 align="center">ต้องการลบข้อมูลรายการนี้ใช่หรือไม่</h5>

                <input  id="del_id"  name="del_id" type="hidden"> 
                <input  id="del_state"  name="del_state" type="hidden"> 
          </div>

          <div class="modal-footer">
              <button type="button" id="btn-del" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ
              </button>

              <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> ยกเลิก
              </button>
          </div>
      </div>
  </div>
</div>
<!-- end modal -->






