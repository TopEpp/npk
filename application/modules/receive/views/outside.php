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
            <div style="margin:20px 0;"></div>
            <table id="tg" class="easyui-treegrid" title="&emsp;รายรับนอกงบประมาณ" style="width:100%;">
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
        <h4 class="modal-title" id="myModalLabel2">เพิ่มรายรับนอกงบประมาณ</h4>
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
        <button type="button" id="btn-submit-plans" class="btn btn-primary">บันทึก</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">ยกเลิก</button>
      </div>

    </div>
  </div>
</div>




<div class="modal fade creat_out" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2">เพิ่มรายรับนอกงบประมาณ <span id="outside_year"></span></h4>
      </div>
      <div class="modal-body clearfix">
        <!-- //check edit form -->
        <input  id="hidden_out_id"  name="hidden_out_id"  type="hidden"> 
        <input  id="hidden_out_edit"  name="hidden_out_edit"  type="hidden"> 
        <!-- //check edit form -->
        <form class="form-horizontal form-label-left" id="form_out">
          <!-- hidden value -->
          <input  id="out_parent"  name="out_parent"  type="hidden"> 
          <input  id="out_year"  name="out_year"  type="hidden"> 
          <div class="form-group">
            <label>รายการ</label> 
            <input class="form-control" id="out_name"  name="out_name" placeholder="ระบุรายการ" type="text">
          </div>
          <!-- <div class="form-group">
            <label>รหัสบัญชี</label> 
            <input class="form-control" id="prj_budget"  name="prj_budget" placeholder="ระบุรหัสบัญชี" type="text">
          </div>
 -->
          <div class="form-group">
            <label>จำนวนเงินที่รับ</label> 
            <input class="form-control" id="out_budget"  name="out_budget" placeholder="ระบุจำนวนเงินที่รับ" type="text">
          </div>
          <div class="form-group">
            <label>ผู้ที่รับผิดชอบ</label> 
            <input class="form-control" id="out_owner"  name="out_owner" placeholder="ระบุผู้ที่รับผิดชอบ" type="text">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-submit-out" class="btn btn-primary">บันทึก</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">ยกเลิก</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade del_out" tabindex="-1" role="dialog" aria-hidden="true">
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




