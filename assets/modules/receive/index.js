$(function(){
    //load id to modal
    $('#delmodal').on('show.bs.modal', function(e) {
        var data = $(e.relatedTarget).data();
        $(this).find('#btn-del').attr('del', data.id);
        });
    
    // check delete on click
        $('#btn-del').on('click',function(e){
        e.preventDefault();
        
            var id = $(this).attr('del');
            window.location.replace(domain+'receive/'+'receive_tax_delete'+'/'+id);
        });


        var table = $('#tax_table').DataTable({
            pageLength: 10,
            serverSide: true,
            processing: true,
            ajax: {
              url: domain+'receive/getAjaxReceiveTax',
            },
            "columnDefs": [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            } ],
            "order": [[ 1, 'DESC' ]],
            'columns':[
            {
                data:'individual_id',
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                
            },
            {
              data:'individual_number',
              "className": "text-center",
            },
            {
              data:'individual_fullname'
            },
            {
              data:'individual_type',
              render: function(data, type, row){
                  var type = ['', 'บุคคลธรรมดา', 'นิติบุคคล'];
                return type[data];
              }
            },
            {
              data:'individual_id',
              render:function(data,type,row){              
                var btn = 
                '<div class="btn-group ">'+
                '<button type="button" onclick="window.location.href=\''+domain+'receive/receive_add/'+'\'"id="" class="btn btn-success btn-sm" title="เพิ่มการประเมินรายรับ"><i class="fa fa-plus-square"></i></button>'+
                '<button type="button" onclick="window.location.href=\''+domain+'receive/receive_taxadd_popup/'+''+data+'\'" id="edit-individual" class="btn btn-success btn-sm" title="แก้ไข"><i class="glyphicon glyphicon-edit"></i></button>'+
                '<button type="button" class="btn btn-danger btn-sm " id="'+data+'" data-toggle="modal" data-target="#delmodal" title="ลบ"><i class="glyphicon glyphicon-trash"></i></button>'
                '</div>';
                     
                return btn;
              },
              "className": "text-right",
              orderable: false
            }
            ],
         
           
          });
          
});
