$(function () {



    $('#outside_pay_vat_val').prop('disabled', true);
    $('#outside_pay_vat').prop('disabled', true);
    $('#amount_vat').on("ifChanged", function () {
        var outside_pay_amount = $('#outside_pay_budget').val();
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;

        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
            $('#outside_pay_vat_val').prop('disabled', false);
			$('#outside_pay_vat').prop('disabled', false);
        }
        else{
			$('#outside_pay_vat_val').prop('disabled', true);
			$('#outside_pay_vat').prop('disabled', true);
        }
        
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });

    $('#outside_pay_tax_val').prop('disabled', true);
    $('#outside_pay_tax').prop('disabled', true);
    $('#amount_tax').on("ifChanged", function () {
        var outside_pay_amount = $('#outside_pay_budget').val();
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;
        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
        }
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
            $('#outside_pay_tax_val').prop('disabled', false);
			$('#outside_pay_tax').prop('disabled', false);
        }else{
			$('#outside_pay_tax_val').prop('disabled', true);
			$('#outside_pay_tax').prop('disabled', true);
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });

    $('#outside_pay_budget').keyup(function () {
        var outside_pay_amount = this.value;
        outside_pay_amount = parseFloat(outside_pay_amount.replace(',', ''));


        var outside_pay_amount_vat = 0;
        var outside_pay_amount_tax = 0;
        if ($('input#amount_vat').is(':checked')) {
            vat = $('#outside_pay_vat_val').val();
            outside_pay_amount_vat = outside_pay_amount * vat / 100;
        }
        if ($('input#amount_tax').is(':checked')) {
            tax = $('#outside_pay_tax_val').val();
            outside_pay_amount_tax = outside_pay_amount * tax / 100;
        }

        $('#outside_pay_vat').val(outside_pay_amount_vat);
        $('#outside_pay_tax').val(outside_pay_amount_tax);
        $('#outside_pay_budget_sum').val(outside_pay_amount + outside_pay_amount_vat - outside_pay_amount_tax);
    });
    // //load id to modal
    // $('#delmodal').on('show.bs.modal', function (e) {
    //     var data = $(e.relatedTarget).data();
    //     $(this).find('#btn-del').attr('del', data.id);
    // });

    // // check delete on click
    // $('#btn-del').on('click', function (e) {
    //     e.preventDefault();
    //     var id = $(this).attr('del');
    //     window.location.replace(domain + 'expenditure/' + 'expenditure_del' + '/' + id);
    // });


    //load id to modal
    $('#delpay_modal').on('show.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-delpay').attr('del', data.id);
    });

    // check delete on click
    $('#btn-delpay').on('click', function (e) {

        e.preventDefault();
        var id = $(this).attr('del');
        window.location.replace(domain + 'receive_outside/' + 'outSidePayDel' + '/' + id);
    });

    //load id to modal
    $('#paymodal').on('show.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-pay').attr('pay', data.id);
    });

    // check delete on click
    $('#btn-pay').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('pay');
        var number = $("input[name='expenses_number']").val();
        var date = $("input[name='expenses_date_disburse']").val();
        $.ajax({
            method: "POST",
            url: domain + 'expenditure/saveExpenditureNumber',
            data: {
                id: id,
                expenses_number: number,
                expenses_date_disburse: date
            }
        }).success(function (msg) {
            if (msg)
                window.location.reload();
        });
    });

    $('#search-btn').click(function () {
        $.ajax({
            method: "POST",
            url: domain + 'receive_outside/getPrj',
            data: {
                keyword: $('#search').val(),
            }
        }).done(function (msg) {
            if (msg) {
                console.log(msg);
                $('#div_table').html(msg);
            }
        });

    });


    // check potection outside in
    $('#btn-submit').click(function () {
        if ($("input[name='outside_pay_create']").val() == '') {
            alertify.error('กรุณาระบุวันที่จัดทำ');
            $("input[name='outside_pay_create']").focus();
            return false;
        }
        if ($("input[name='outside_pay_budget']").val() == '') {
            alertify.error('กรุณาระบุจำนวนเงิน');
            $("input[name='outside_pay_budget']").focus();
            return false;
        }
    });

    // check potection outside in
    $('#btn-submit_pay').click(function () {
        if ($("input[name='outside_pay_create']").val() == '') {
            alertify.error('กรุณาระบุวันที่จัดทำ');
            $("input[name='outside_pay_create']").focus();
            return false;
        }
        if ($("input[name='outside_pay_budget']").val() == '') {
            alertify.error('กรุณาระบุจำนวนเงิน');
            $("input[name='outside_pay_budget']").focus();
            return false;
        }

        if ($('#amount_vat').is(':checked')) {
            var outside_pay_vat = $("input[name='outside_pay_vat']").val();
            if (outside_pay_vat == '') {
                alertify.error('กรุณาระบุ จำนวนภาษีมูลค่าเพิ่ม');
                $("input[name='outside_pay_vat']").focus();
                return false;
            }
        }
        if ($('#amount_tax').is(':checked')) {
            var outside_pay_tax = $("input[name='outside_pay_tax']").val();
            if (outside_pay_tax == '') {
                alertify.error('กรุณาระบุ จำนวนภาษีหัก ณ ที่จ่าย');
                $("input[name='outside_pay_tax']").focus();
                return false;
            }
        }
    });

          // load ajax
          var collapsedGroups = {};
          var table = $('#table_outside_pay').DataTable({
            pageLength: 100,
            serverSide: true,
            processing: true,
            lengthChange: false,
            ajax: {
              url: domain + 'receive_outside/getOutsideAjax',
            },
            orderFixed: [0, 'DESC'],
            rowGroup: {
                dataSrc: "outside_pay_create",
                startRender: function (rows, group) {
                   var collapsed = !!collapsedGroups[group];
       
                   rows.nodes().each(function (r) {
                       r.style.display = collapsed ? 'none' : '';
                   });    
       
                   // Add category name to the <tr>. NOTE: Hardcoded colspan
                   return $('<tr/>')
                       .append('<td colspan="6">' + group + '</td>')
                       .attr('data-name', group)
                       .toggleClass('collapsed', collapsed);
               }
            },
            "columnDefs": [{
              "name": "",
              "targets": 0
            }, ],
        
        
            // "order": [
            //   [5, 'DESC']
            // ],
            'columns': [{
                data: 'outside_pay_create',
                "className": "text-center",
                // render: function (data, type, row, meta) {
                //   return meta.row + meta.settings._iDisplayStart + 1;
                // },
        
              },
              {
                data: 'out_name',
                "className": "text-center",
              },
              {
                data: 'outside_detail',
                "className": "text-center",
              },
        
              {
                data: 'outside_pay_budget_sum',
                "className": "text-right",
              },
              {
                data: 'user_firstname',
                render: function (data, type, row) {
                  return row['user_firstname']+' '+row['user_lastname']
                }
              },
              {
                data: 'outside_id',
                render: function (data, type, row) {
                  var btn =
                    '<div class="btn-group ">' +
                    '<button type="button" onclick="window.location.href=\'' + domain + 'receive_outside/outside_form/' + '' + data +'/'+row['outside_pay_id']+ '\'"  class="btn btn-warning btn-sm"  title="แก้ไข" >แก้ไข</button>' +
                    '<button type="button" class="btn btn-danger btn-sm"  id="' + row['outside_pay_id'] + '" data-id="' + row['outside_pay_id'] + '" data-toggle="modal" data-target="#delpay_modal" title="ลบ" >ลบ</button>' +
                    '</div>';
                  return btn;
                },
                "className": "text-center",
                orderable: false
              }
            ],
            // "bSort" : false,
            "bLengthChange": false,
            "bFilter": true,
            "responsive": true,
            "language": {
              "sProcessing": "กำลังดำเนินการ...",
              "sLengthMenu": "แสดง _MENU_ แถว",
              "sZeroRecords": "ไม่พบข้อมูล",
              // "sInfo":         "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว / รายการทั้งหมด จำนวน _TOTAL_ รายการ (แบ่งออกเป็น _PAGES_ หน้า หน้าละ 50 รายการ)",
              "sInfo": "รายการทั้งหมด จำนวน _TOTAL_ รายการ (แบ่งออกเป็น _PAGES_ หน้า หน้าละ 25 รายการ)",
              // "sInfoEmpty":    "แสดง 0 ถึง 0 จาก 0 แถว",
              "sInfoEmpty": "รายการทั้งหมด จำนวน 0 รายการ (แบ่งออกเป็น _PAGES_ หน้า หน้าละ 25 รายการ)",
              // "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
              "sInfoFiltered": "",
              "sInfoPostFix": "",
              "sSearch": "ค้นหา: ",
              "sUrl": "",
              "oPaginate": {
                "sFirst": '<i class="fa fa-step-backward" style="font-size: 12px;" aria-hidden="true"></i>',
                "sPrevious": '<i class="fa fa-backward" style="font-size: 12px;" aria-hidden="true"></i>',
                "sNext": '<i class="fa fa-forward" style="font-size: 12px;" aria-hidden="true"></i>',
                "sLast": '<i class="fa fa-step-forward" style="font-size: 12px;" aria-hidden="true"></i>'
              }
            }
        
        
        
          });
          table.on('click', 'tr.group-start', function () {
            var name = $(this).data('name');
            collapsedGroups[name] = !collapsedGroups[name];
            table.draw();
        });
        
          //search data 
          $('#search_pay').click(function () {
    
            table.columns(1).search($('#outside_name').val()).draw();
            table.columns(0).search($('#outside_date').val()).draw();
            table.columns(2).search($('#outside_detail').val()).draw();
            // table.columns(2).search($('#pay_date_tax').val()).draw();
          });

  



});

//del all project or prj
function pay_out(value) {
    $('#out_id').val(value);

    $('.pay_out').modal();
}