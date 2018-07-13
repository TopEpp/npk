$(function () {
    // //load id to modal
    $('#delmodal').on('show.bs.modal', function (e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-del').attr('del', data.id);
    });

    // check delete on click
    $('#btn-del').on('click', function (e) {
        e.preventDefault();


        var id = $(this).attr('del');
        window.location.replace(domain + 'receive/' + 'receive_notice_delete' + '/' + id);
    });

    var table = $('#tax_table').DataTable({
        pageLength: 100,
        serverSide: true,
        processing: true,
        lengthChange: false,
        ajax: {
            url: domain + 'receive/getAjaxReceivedashborad',
        },
        "columnDefs": [{
            "name": "",
            "targets": 0
        }, ],

        "order": [
            [1, 'asc'],
        ],

        'columns': [{
                data: 'notice_id',
                "className": "text-center",
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },

            },
            {
                data: null,
                render: function (data, type, row) {
                    return row.notice_number + "/" + row.tax_year;
                    // return row.tax_year;
                },
                "className": "text-center",
            },
            {
                data: 'sum_notice_estimate',
                "className": "text-right",
            },
            {
                data: 'individual_number',
                "className": "text-center",
            },
            // {
            //     data: null,
            //     render: function (data, type, row) {

            //         return row.individual_prename + " " + row.individual_fullname;
            //     },
            // },
            {
                data: 'individual_fullname',
            },
            {
                data: 'tax_name',
            },
            // {
            //     data: 'tax_amount',
            // },

            {
                data: 'notice_id',
                render: function (data, type, row) {
                    var form = '';
                    if (row['tax_name'] == 'ภาษีป้าย') {
                        form = '<a href=\'' + domain + 'export/gat1/' + '' + data + '\'" id="" target="_blank" class="btn btn-success btn-sm  btn-sm" title="พิมพ์ใบแจ้งการประเมิน" style="width: 47px;">พิมพ์</a>';
                    } else if (row['tax_name'] == 'ภาษีโรงเรือนและที่ดิน') {
                        form = '<a href=\'' + domain + 'export/gat2/' + '' + data + '\'" id="" target="_blank" class="btn btn-success btn-sm  btn-sm" title="พิมพ์ใบแจ้งการประเมิน" style="width: 47px;">พิมพ์</a>';
                    } else {
                        form = '<a href=\'' + domain + 'export/gat1/' + '' + data + '\'" id="" target="_blank" class="btn btn-success btn-sm  btn-sm" title="พิมพ์ใบแจ้งการประเมิน" style="width: 47px;">พิมพ์</a>';
                    }
                    var btn =
                        '<div class="btn-group ">' + form +
                        '<button type="button" onclick="window.location.href=\'' + domain + 'receive/receive_tax_pay_add_house/' + '' + data + '\'" id="notice-id" class="btn btn-success btn-sm" title="จ่ายภาษี" style="width: 47px;">จ่าย</button>' +
                        '<button type="button" onclick="window.location.href=\'' + domain + 'receive/receive_notice/' + row['individual_id'] + '/' + row['tax_id'] + '\'" id="edit-notice" class="btn btn-success btn-sm" title="แก้ไข" style="width: 47px;">แก้ไข</button>' +
                        '<button type="button" class="btn btn-danger btn-sm " id="' + data + '" data-id="' + data + '" data-toggle="modal" data-target="#delmodal" title="ลบ" style="width: 47px;">ลบ</button>'
                    '</div>';
                    return btn;
                },
                "className": "text-center",
                orderable: false

            },
        ],
        // "bSort": false,
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

    //search data
    $('#search_receive').click(function () {
        table.columns(1).search($('#type_tax').val()).draw();
        table.columns(2).search($('#number_tax').val()).draw();
        table.columns(3).search($('#name_tax').val()).draw();
        table.columns(4).search($('#tax_type_id').val()).draw();
    });

});