<div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>บันทึกรายรับภาษีอื่น</h3>
                    </div>
                </div>

                    <br>
                    <br>

                    <div class="clearfix"></div>

       
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                            <br />

                                <?php echo form_open('Receive/update_other_tax') ?>
                                        <div class="form-horizontal form-label-left">
                                                <input type="hidden" name="receive_id"  value="<?php echo $other_tax[0]['receive_id'] ?>">


                                                <div class="form-group">
                                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="first">
                                                                <span class="required" style="color:red">*</span> หมวดรายได้
                                                            </label>
                                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                                    <select id="colorselector" name="tax_id" class="form-control selectpicker" data-hide-disabled="true" data-live-search="true" >
                                                                        <optgroup label="หมวดภาษีจัดสรร">
                                                                            <?php foreach ($tax_allocate as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดค่าธรรมเนียม ค่าปรับ และใบอนุญาต">
                                                                            <?php foreach ($tax_fine as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้จากทรัพย์สิน">
                                                                            <?php foreach ($tax_asset as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้สาธารณูปโภคและสาธารณสุขฯ">
                                                                            <?php foreach ($tax_health as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        </optgroup>
                                                                        <optgroup label="หมวดรายได้เบ็ดเตล็ด">
                                                                            <?php foreach ($tax_miscellaneous as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        
                                                                        </optgroup>
                                                                        <optgroup label="หมวดเงินอุดหนุน">
                                                                            <?php foreach ($tax_subsidy as $key) : ?>

                                                                                <?php if ($other_tax[0]['tax_id'] == $key['tax_id']) : ?>
                                                                                    <option  selected value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php else : ?>   
                                                                                    <option  value="<?php echo $key['tax_id'] ?>"><?php echo $key['tax_name'] ?></option>
                                                                                <?php endif; ?>

                                                                            <?php endforeach; ?>
                                                                        </optgroup> 
                                                                    </select>
                                                                </div>
                                                </div>

                                                <div class="form-group" style="margin-bottom: 0px;">
                                                        <label for="second" class="control-label col-md-4 col-sm-3 col-xs-12" for="">
                                                            <span class="required" style="color:red">*</span> วันที่รับ
                                                        </label>
                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <div class='input-group date col-md-12 col-xs-12' id='inputdatepicker'>
                                                            <input type='text' name="receive_date" value="<?php echo $other_tax[0]['receive_date'] ?>" class="form-control datepicker" />
                                                        </div>                        
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-4 col-sm-3 col-xs-12">
                                                        <span class="required" style="color:red">*</span> จำนวนภาษี
                                                    </label>
                                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="text" name="receive_amount" value="<?php echo $other_tax[0]['receive_amount'] ?>" placeholder="0.00" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                </div>

                                                <hr>

                                                <div class="form-group">
                                                    <div class="text-center">
                                                        <button type="submit" value="Submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก
                                                        </button>
                                                        
                                                        <button onclick="window.location.replace('<?php echo site_url('receive/other_tax'); ?>');" type="button" class="btn btn-warning"><i class="fa fa-close"></i> ยกเลิก
                                                        </button>
                                                    </div>
                                                </div>   
                                        </div>

                                <?php echo form_close('') ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


