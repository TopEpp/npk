$(function () {

    $('#prj_type_connect').select2();

    $("#prj_budget_inside").on("ifChanged", function(){
        if ($('#prj_budget_inside').is(':checked')){
            $('#budget_inside').toggle(true);
        }else{
            $('#budget_inside').toggle(false);
        }
     
    });

    $("#prj_budget_outside").on("ifChanged", function(){
        if ($('#prj_budget_outside').is(':checked')){
            $('#budget_outside').toggle(true);
        }else{
            $('#budget_outside').toggle(false);
        }
     
    });

    $("#prj_budget_convert").on("ifChanged", function(){
        if ($('#prj_budget_convert').is(':checked')){
            $('#budget_convert').toggle(true);
        }else{
            $('#budget_convert').toggle(false);
        }
     
    });

    $("#prj_type1").on("ifChanged", function(){
        if ($('#prj_type1').is(':checked')){
            $('#type_connect').toggle(true);
        }else{
            $('#type_connect').toggle(false);
        }
     
    });

    
    
    
    // $('#prj_budget_inside').click(function(){
    //     alert('asd');
    // })


});

