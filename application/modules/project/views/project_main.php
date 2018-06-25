<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>ระบบบริหารโครงการ</h3>
              </div>
            </div>

              <br>
              <br>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  

                    <div style="margin:20px 0;"></div>
                    <table id="tg" class="easyui-treegrid" title="&emsp;บริหารแผนงาน / โครงการ" style="width:1040px;height:450px" data-options="
                          
                          rownumbers: true,
                          animate: true,
                          collapsible: false,
                          fitColumns: true,
                          url: '<?php echo base_url() ?>assets/plugins/easyui/demo/treegrid/treegrid_data2.json',
                          method: 'get',
                          idField: 'id',
                          treeField: 'name',
                          onContextMenu: onContextMenu
                        ">
                      <thead>
                        <tr>
                          <th data-options="field:'name',width:260">แผนงาน / โครงการ </th>                      
                          <th data-options="field:'begin',width:60,align:'right'">งบประมาณ</th>
                        </tr>
                      </thead>
                    </table>
                    <br>
                    <div id="mm" class="easyui-menu" style="width:120px;">
                      <div onclick="append()" data-options="iconCls:'icon-add'">เพิ่มโครงการ</div>
                      <div onclick="removeIt()" data-options="iconCls:'icon-remove'">ลบ</div>
                      <div class="menu-sep"></div>
                      <div onclick="collapse()">ซ่อนรายการ</div>
                      <div onclick="expand()">แสดงรายการ</div>
                    </div>
                </div>
              </div>
            </div>
</div>




