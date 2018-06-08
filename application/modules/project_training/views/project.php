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
                    <table id="tg" class="easyui-treegrid" title="&emsp;บริหารแผนงาน / โครงการ" style="width:100%;" data-options="
                          
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
                      <div data-options="iconCls:'icon-add'">เพิ่ม</div>
                      <div data-options="iconCls:'icon-remove'">ลบ</div>
                      <div data-options="iconCls:'icon-edit'">แก้ไข</div>
                      
                    </div>
                   
                </div>
              </div>
            </div>
</div>



                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">เพิ่มแผนงาน / โครงการ</h4>
                        </div>
                        <div class="modal-body">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">แผนงาน
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ชื่อโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">สถานะโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ยังไม่ได้ดำเนินการ</option>
                                                  <option>อยู่ระหว่างดำเนินการ</option>
                                                  <option>ดำเนินการเสร็จสิ้น</option>
                                                  <option>ยกเลิก</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ใหม่</option>
                                                  <option>ต่อเนื่อง</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้รับผิดชอบ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                              <button onclick="window.location.replace('<?php echo site_url('project/project_main'); ?>');"type="button" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>

                              <button type="button" class="btn btn-warning" data-dismiss="modal"> ยกเลิก
                              </button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade bs-edit-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">แก้ไขแผนงาน / โครงการ</h4>
                        </div>
                        <div class="modal-body">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">แผนงาน
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ชื่อโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">สถานะโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ยังไม่ได้ดำเนินการ</option>
                                                  <option>อยู่ระหว่างดำเนินการ</option>
                                                  <option>ดำเนินการเสร็จสิ้น</option>
                                                  <option>ยกเลิก</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ใหม่</option>
                                                  <option>ต่อเนื่อง</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้รับผิดชอบ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                              <button onclick="window.location.replace('<?php echo site_url('project/project_main'); ?>');"type="button" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>

                              <button type="button" class="btn btn-warning" data-dismiss="modal"> ยกเลิก
                              </button>
                        </div>

                      </div>
                    </div>
                  </div>






<!-- <div class="right_col" role="main">
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
                      <div data-options="iconCls:'icon-add'">เพิ่ม</div>
                      <div data-options="iconCls:'icon-remove'">ลบ</div>
                      <div data-options="iconCls:'icon-edit'">แก้ไข</div>
                      
                    </div>
                   
                </div>
              </div>
            </div>
</div>



                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">เพิ่มแผนงาน / โครงการ</h4>
                        </div>
                        <div class="modal-body">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">แผนงาน
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ชื่อโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">สถานะโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ยังไม่ได้ดำเนินการ</option>
                                                  <option>อยู่ระหว่างดำเนินการ</option>
                                                  <option>ดำเนินการเสร็จสิ้น</option>
                                                  <option>ยกเลิก</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ใหม่</option>
                                                  <option>ต่อเนื่อง</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้รับผิดชอบ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                              <button onclick="window.location.replace('<?php echo site_url('project/project_main'); ?>');"type="button" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>

                              <button type="button" class="btn btn-warning" data-dismiss="modal"> ยกเลิก
                              </button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="modal fade bs-edit-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">แก้ไขแผนงาน / โครงการ</h4>
                        </div>
                        <div class="modal-body">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">แผนงาน
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ชื่อโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">สถานะโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ยังไม่ได้ดำเนินการ</option>
                                                  <option>อยู่ระหว่างดำเนินการ</option>
                                                  <option>ดำเนินการเสร็จสิ้น</option>
                                                  <option>ยกเลิก</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ประเภทโครงการ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                              <select class="form-control" type="text" id="type_tax">
                                                  <option>ใหม่</option>
                                                  <option>ต่อเนื่อง</option>
                                              </select>
                                            </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-3 col-xs-12" for="id_tax">ผู้รับผิดชอบ
                                        </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" id="id_tax" class="form-control col-md-7 col-xs-12">
                                            </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                              <button onclick="window.location.replace('<?php echo site_url('project/project_main'); ?>');"type="button" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                              </button>

                              <button type="button" class="btn btn-warning" data-dismiss="modal"> ยกเลิก
                              </button>
                        </div>

                      </div>
                    </div>
                  </div>


 -->
