$(function () {

    //grid tree
    $('#tg').treegrid({
        url: domain + 'receive/getOutsideJson',
        rownumbers: false,
        animate: false,
        collapsible: false,
        fitColumns: true,
        idField: 'id',
        treeField: 'name',
        onContextMenu: onContextMenu,
        columns: [
            [{
                    title: 'รายการ',
                    field: 'name',
                    width: 50
                },
                {
                    title: 'รหัสบัญชี',
                    field: 'account_id',
                    width: 20
                },
                {
                    field: 'budget',
                    title: 'งบประมาณ',
                    width: 30,
                    align: 'right'
                },
                {
                    field: 'tools',
                    title: '&nbsp;',
                    width: 20,
                    align: 'right'
                },
                // {field:'end',title:'End Date',width:80}
            ]
        ],
        onLoadSuccess: function (row) {
            $(this).treegrid('enableDnd', row ? row.id : null);
        }


    }).treegrid('enableFilter', [{
            field: 'name',
            type: 'text',
        },
        {
            field: 'budget',
            type: 'text',
            options: {
                precision: 1
            },
        },
        {
            field: 'tools',
            type: 'label',
        }
    ]);


    //add plan data
    $('#btn-submit-plans').click(function () {

        if ($('#outside_title').val() == '') {
            return false;
        }
        var data = $('#outside_title').val();
        var id = $('#hidden_id').val();
        var edit = $('#hidden_edit').val();
        $.ajax({
            method: "POST",
            url: domain + 'receive/insertOutsidePlan',
            data: {
                data: data,
                id: id,
                edit: edit
            }
        }).done(function (msg) {
            if (msg) {
                $('.create_plan').modal('hide');
                $('#tg').treegrid('reload');
            }
        })
    });
    //end plan
    //add plan data
    $('#btn-submit-plan').click(function () {

        if ($('#outside_select').val() == '') {
            return false;
        }
        var data = $('#outside_select').val();
        var id = $('#hidden_id_detail').val();
        var level = $('#hidden_level').val();
        var edit = $('#hidden_edit_detail').val();
        $.ajax({
            method: "POST",
            url: domain + 'receive/insertOutsidePlan',
            data: {
                data: data,
                id: id,
                level: level,
                edit: edit
            }
        }).done(function (msg) {
            if (msg) {
                $('.create_plan_detail').modal('hide');
                $('#tg').treegrid('reload');
            }
        })
    });
    //end plan

    //add plan data
    $('#btn-submit-cost').click(function () {

        if ($('#outside_cost').val() == '') {
            return false;
        }
        var data = $('#outside_cost').val();
        var id = $('#hidden_id_cost').val();
        var level = $('#hidden_lv').val();
        var edit = $('#hidden_edit_cost').val();

        $.ajax({
            method: "POST",
            url: domain + 'receive/insertOutsidePlan',
            data: {
                data: data,
                id: id,
                level: level,
                edit: edit
            }
        }).done(function (msg) {
            if (msg) {
                $('.create_plan_cost').modal('hide');
                $('#tg').treegrid('reload');
            }
        })
    });
    //end plan


    //add prj data to controller
    $('#btn-submit-out').click(function () {

        if ($('#out_name').val() == '') {
            return false;
        }
        var data = $('#form_out').serializeArray();
        var edit = $('#hidden_out_edit').val();
        var id = $('#hidden_out_id').val();

        $.ajax({
            method: "POST",
            url: domain + 'receive/insertOutside',
            data: {
                data: data,
                edit: edit,
                id: id
            }
        }).done(function (msg) {
            if (msg) {
                $('.creat_out').modal('hide');
                $('#tg').treegrid('reload');
            }

            // window.location.href = domain+'project_training/project';
        })
    });
    //end plan

    //del project or 
    $('#btn-del').click(function () {
        var id = $('#del_id').val();
        var state = $('#del_state').val();
        window.location.href = domain + 'receive/delOut/' + id + '/' + state;
    });

});



// create project
function outside_add_plan(id, value) {
    $('#hidden_edit').val(false);
    if (value != null) {
        $('#hidden_edit').val(true);
        $('#outside_title').val(value);
    }

    $('#hidden_id').val(id);
    $('.create_plan').modal();
}

function outside_add(id, value) {
    $('#hidden_edit_detail').val(false);
    if (value != null) {
        $('#hidden_edit_detail').val(true);
        $('#outside_select').val(value);
    }
    $('#hidden_id_detail').val(id);
    $('.create_plan_detail').modal();
}

function outside_add_cost(id, value) {

    $('#hidden_edit_cost').val(false);
    if (value != null) {
        $('#hidden_edit_cost').val(true);
        $('#outside_cost').val(value);
    }
    $('#hidden_id_cost').val(id);
    $('.create_plan_cost').modal();

}

//prj create detail
function add_out(value) {

    //clear data
    $("input[type='text']").val('');
    $(".flat").parents('div').removeClass('checked');


    var year = $('.selectpicker').val();
    $('#outside_year').text(parseInt(year) + 543);
    $('#hidden_out_edit').val(false);
    $('#out_year').val(year);
    $('#out_parent').val(value);
    $('.creat_out').modal();
}
//edit prj
function edit_out(value) {
    //clear radio
    $(".flat").parents('div').removeClass('checked');

    var year = $('.selectpicker').val();
    $('#outside_year').text(parseInt(year) + 543);
    $('#hidden_out_edit').val(true);
    $('#out_year').val(year);
    $.ajax({
        method: "POST",
        url: domain + 'receive/getOut',
        data: {
            data: value
        }
    }).success(function (msg) {
        $('#hidden_out_id').val(msg[0]['out_id']);
        $('#out_name').val(msg[0]['out_name']);
        $('#out_budget').val(msg[0]['out_budget']);
        $('#out_owner').val(msg[0]['out_owner']);
        $('#out_parent').val(msg[0]['out_parent']);

        $("input[name='out_status']").each(function (index) {
            if ($(this).val() == msg[0]['out_status']) {
                $('#out_status' + index).prop("checked", true);
                $('#out_status' + index).parents('div').addClass('checked');
            }
        });
        $("input[name='out_type']").each(function (index) {
            if ($(this).val() == msg[0]['out_type']) {
                $('#out_type' + index).prop("checked", true);
                $('#out_type' + index).parents('div').addClass('checked');
            }
        });

        $('.creat_out').modal();

    })
}

//del all project or prj
function del_out(value, state = '') {
    $('#del_id').val(value);
    $('#del_state').val(state);
    $('.del_out').modal();
}