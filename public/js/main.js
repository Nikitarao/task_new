let url = $('.apiTarget').data('url');
let target = $('#employeeList');
let output = '';
$.ajax({
    url:url,
    method:'get',
    dataType:'json',
    success:function (data){
        data.forEach(function (data){
            output += `            <tr>

                <td>${data.f_name} ${data.l_name}</td>
                <td>${data.email}</td>
                <td>${data.company}</td>


                        <td>
                        <a href="" class="btn btn-sm btn-dark edit-btn" data-id="${data.id}">Edit</a> </td>
                        <td><a href="" class="btn btn-sm btn-danger delete-btn text-dark" data-id="${data.id}">Delete</a> </td>


            </tr> `;
        });

       target.html(output);
    }
})


//register employee

$(document).on('click','#submitId',function(e){
                var data= $( "#formsubmit" ).serialize();
                var form = $("#formsubmit");
                $.ajax({
                    url: jsform,
                    type: "POST",
                    data: data,
                    success: function (response) {
                        $("#employee").modal('hide');

                        $('#msg').html(response).fadeIn('slow');
                        //$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message
                        $('#msg').delay(5000).fadeOut('slow')
                    },
                });
});
//edit-employee
$(document).on('click','.edit-btn',function(e){
    let id = $(this).data('id');
    $.ajax({
        url: editid,
        type: "GET",
        data: {id:id},
        success: function (response) {
            $('#employeeedit').modal('show');
            $('.fname').val(response.f_name);
            $('.lname').val(response.l_name);
            $('.email').val(response.email);
            $('.mobile').val(response.phone);
            $('#editidinput').val(response.id);
        },
    });
});

$(document).on('click','#editid',function(e){
    var data= $( "#editform" ).serialize();
    $.ajax({
        url: editidsave,
        type: "GET",
        data: data,
        success: function (response) {
            $('#employeeedit').modal('hide');
        },
    });
});
//delete-employee
$(document).on('click','.delete-btn',function(e){
    let id = $(this).data('id');
    $.ajax({
        url: deleteid,
        type: "GET",
        data: {id:id},
        success: function (response) {
            $('#deleteEmployeeModal').modal('hide');
        },
    });
});


//company-table
let targetCompany = $('#companyTable');
let outputCompany = '';
let urlC = $('.apiCompany').data('url');

$.ajax({

    method:'get',
    url:jstable,
    dataType:'json',
    success:function (data){
        data.forEach(function (data){
            outputCompany += `            <tr>

                <td>${data.name}</td>
                <td>${data.email}</td>
                <td>${data.website}</td>
                        <td>
                        <a href="" class="btn btn-sm btn-dark edit-btnC" data-id="${data.id}">Edit</a> </td>
                        <td><a href="" class="btn btn-sm btn-danger delete-btnC text-dark" data-id="${data.id}">Delete</a> </td>


            </tr> `;
        });

        targetCompany.html(outputCompany);
    }
})

//register company

$(document).on('click','#subIdCompany',function(e){
    var data= $( "#submitCompany" ).serialize();
    $.ajax({
        url: jsCompany,
        type: "POST",
        data: data,
        success: function (response) {
            $("#company").modal('hide');
        },
    });
});
//edit company
$(document).on('click','.edit-btnC',function(e){
    let id = $(this).data('id');
    $.ajax({
        url: editCompany,
        type: "GET",
        data: {id:id},
        success: function (response) {
            $('#companyedit').modal('show');
            $('.name').val(response.name);
            $('.website').val(response.website);
            $('.email').val(response.email);
            $('.image').val(response.image);
            $('#editidCompany').val(response.id);
        },
    });
});

$(document).on('click','#subIdCompany',function(e){
    var data= $( "#editCompany" ).serialize();
    $.ajax({
        url: editComapnySave,
        type: "GET",
        data: data,
        success: function (response) {
            $('#companyedit').modal('hide');
        },
    });
});
$(document).on('click','.delete-btnC',function(e){
    let id = $(this).data('id');
    $.ajax({
        url: deleteidCom,
        type: "GET",
        data: {id:id},
        success: function (response) {
            $('#deleteEmployeeModal').modal('hide');
        },
    });
});
