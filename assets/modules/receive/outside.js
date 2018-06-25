$(function () {

<<<<<<< HEAD
=======

>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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
<<<<<<< HEAD
                    title: 'รายการ',
=======
                    title: 'แผนงาน',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
                    field: 'name',
                    width: 50
                },
                {
<<<<<<< HEAD
                    title: 'รหัสบัญชี',
                    field: 'account_id',
                    width: 20
                },
                {
                    field: 'budget',
                    title: 'งบประมาณ',
=======
                    field: 'account_id',
                    title: 'รหัสบัญชี',
                    width: 30,
                    align: 'right'
                },
                {
                    field: 'budget',
                    title: 'จำนวนเงิน',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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


<<<<<<< HEAD
    //add plan data
    $('#btn-submit-plans').click(function () {

        if ($('#outside_title').val() == '') {
            return false;
        }
        var data = $('#outside_title').val();
=======
    // project state
    $('input.js-switch').change(function () {
        if ($(this).is(':checked')) {

            $.ajax({
                method: "POST",
                url: domain + 'project_training/updateState',
                data: {
                    data: false
                },
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 

                },
            })

        } else {

            $.ajax({
                method: "POST",
                url: domain + 'project_training/updateState',
                data: {
                    data: true
                },
                success: function (response) {
                    // you will get response from your php page (what you echo or print)                 
                    // console.log(response)
                },
            })

        }

    });


    //add plan data
    $('#btn-submit-plans').click(function () {

        if ($('#project_title').val() == '') {
            return false;
        }
        var data = $('#project_title').val();
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        var id = $('#hidden_id').val();
        var edit = $('#hidden_edit').val();
        $.ajax({
            method: "POST",
<<<<<<< HEAD
            url: domain + 'receive/insertOutsidePlan',
=======
            url: domain + 'project_training/insertProjectPlan',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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

<<<<<<< HEAD
        if ($('#outside_select').val() == '') {
            return false;
        }
        var data = $('#outside_select').val();
=======
        if ($('#project_select').val() == '') {
            return false;
        }
        var data = $('#project_select').val();
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        var id = $('#hidden_id_detail').val();
        var level = $('#hidden_level').val();
        var edit = $('#hidden_edit_detail').val();
        $.ajax({
            method: "POST",
<<<<<<< HEAD
            url: domain + 'receive/insertOutsidePlan',
=======
            url: domain + 'project_training/insertProjectPlan',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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

<<<<<<< HEAD
        if ($('#outside_cost').val() == '') {
            return false;
        }
        var data = $('#outside_cost').val();
=======
        if ($('#project_cost').val() == '') {
            return false;
        }
        var data = $('#project_cost').val();
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        var id = $('#hidden_id_cost').val();
        var level = $('#hidden_lv').val();
        var edit = $('#hidden_edit_cost').val();

        $.ajax({
            method: "POST",
<<<<<<< HEAD
            url: domain + 'receive/insertOutsidePlan',
=======
            url: domain + 'project_training/insertProjectPlan',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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
<<<<<<< HEAD
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
=======
    $('#btn-submit-prj').click(function () {

        if ($('#prj_name').val() == '') {
            return false;
        }
        var data = $('#form_prj').serializeArray();
        var edit = $('#hidden_prj_edit').val();
        var id = $('#hidden_prj_id').val();

        $.ajax({
            method: "POST",
            url: domain + 'project_training/insertProject',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
            data: {
                data: data,
                edit: edit,
                id: id
            }
        }).done(function (msg) {
            if (msg) {
<<<<<<< HEAD
                $('.creat_out').modal('hide');
=======
                $('.creat_prj').modal('hide');
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
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
<<<<<<< HEAD
        window.location.href = domain + 'receive/delOut/' + id + '/' + state;
=======
        window.location.href = domain + 'project_training/delPrj/' + id + '/' + state;
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    });

});



// create project
<<<<<<< HEAD
function outside_add_plan(id, value) {
    $('#hidden_edit').val(false);
    if (value != null) {
        $('#hidden_edit').val(true);
        $('#outside_title').val(value);
=======
function project_add_plan(id, value) {
    $('#hidden_edit').val(false);
    if (value != null) {
        $('#hidden_edit').val(true);
        $('#project_title').val(value);
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    }

    $('#hidden_id').val(id);
    $('.create_plan').modal();
}

<<<<<<< HEAD
function outside_add(id, value) {
    $('#hidden_edit_detail').val(false);
    if (value != null) {
        $('#hidden_edit_detail').val(true);
        $('#outside_select').val(value);
=======
function project_add(id, value) {
    $('#hidden_edit_detail').val(false);
    if (value != null) {
        $('#hidden_edit_detail').val(true);
        $('#project_select').val(value);
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    }
    $('#hidden_id_detail').val(id);
    $('.create_plan_detail').modal();
}

<<<<<<< HEAD
function outside_add_cost(id, value) {
=======
function project_add_cost(id, value) {
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"

    $('#hidden_edit_cost').val(false);
    if (value != null) {
        $('#hidden_edit_cost').val(true);
<<<<<<< HEAD
        $('#outside_cost').val(value);
=======
        $('#project_cost').val(value);
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    }
    $('#hidden_id_cost').val(id);
    $('.create_plan_cost').modal();

}

//prj create detail
<<<<<<< HEAD
function add_out(value) {
=======
function add_prj(value) {
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"

    //clear data
    $("input[type='text']").val('');
    $(".flat").parents('div').removeClass('checked');


    var year = $('.selectpicker').val();
<<<<<<< HEAD
    $('#outside_year').text(parseInt(year) + 543);
    $('#hidden_out_edit').val(false);
    $('#out_year').val(year);
    $('#out_parent').val(value);
    $('.creat_out').modal();
}
//edit prj
function edit_out(value) {
=======
    $('#project_year').text(parseInt(year) + 543);
    $('#hidden_prj_edit').val(false);
    $('#prj_year').val(year);
    $('#prj_parent').val(value);
    $('.creat_prj').modal();
}
//edit prj
function edit_prj(value) {
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    //clear radio
    $(".flat").parents('div').removeClass('checked');

    var year = $('.selectpicker').val();
<<<<<<< HEAD
    $('#outside_year').text(parseInt(year) + 543);
    $('#hidden_out_edit').val(true);
    $('#out_year').val(year);
    $.ajax({
        method: "POST",
        url: domain + 'receive/getOut',
=======
    $('#project_year').text(parseInt(year) + 543);
    $('#hidden_prj_edit').val(true);
    $('#prj_year').val(year);
    $.ajax({
        method: "POST",
        url: domain + 'project_training/getPrj',
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        data: {
            data: value
        }
    }).success(function (msg) {
<<<<<<< HEAD
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
=======
        $('#hidden_prj_id').val(msg[0]['prj_id']);
        $('#prj_name').val(msg[0]['prj_name']);
        $('#prj_budget').val(msg[0]['prj_budget']);
        $('#prj_owner').val(msg[0]['prj_owner']);
        $('#prj_parent').val(msg[0]['prj_parent']);

        $("input[name='prj_status']").each(function (index) {
            if ($(this).val() == msg[0]['prj_status']) {
                $('#prj_status' + index).prop("checked", true);
                $('#prj_status' + index).parents('div').addClass('checked');
            }
        });
        $("input[name='prj_type']").each(function (index) {
            if ($(this).val() == msg[0]['prj_type']) {
                $('#prj_type' + index).prop("checked", true);
                $('#prj_type' + index).parents('div').addClass('checked');
            }
        });

        $('.creat_prj').modal();
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"

    })
}

//del all project or prj
<<<<<<< HEAD
function del_out(value, state = '') {
    $('#del_id').val(value);
    $('#del_state').val(state);
    $('.del_out').modal();
=======
function del_prj(value, state = '') {
    $('#del_id').val(value);
    $('#del_state').val(state);
    $('.del_prj').modal();
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
}