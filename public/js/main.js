let url = $('.apiTarget').data('url');
console.log(url);
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
                        <a href="#" class="btn btn-sm btn-dark edit-btn" data-id="${data.id}">Edit</a> </td>
                        <td><button type="submit" class="btn btn-sm btn-danger delete-btn text-dark" data-deleteid="${data.id}">Delete</button> </td>


            </tr> `;
        });

       target.html(output);
    }
})
let targetCompany = $('#companyTable');
let outputCompany = '';
let urlC = $('.apiCompany').data('url');

$.ajax({

    method:'get',
    url:urlC,
    dataType:'json',
    success:function (data){
        data.forEach(function (data){
            outputCompany += `            <tr>

                <td>${data.name}</td>
                <td>${data.email}</td>
                <td>${data.website}</td>
                        <td>
                        <a href="#" class="btn btn-sm btn-dark" data-id="${data.id}">Edit</a> </td>
                        <td><button type="submit" class="btn btn-sm btn-danger delete-btn text-dark" data-deleteid="${data.id}">Delete</button> </td>


            </tr> `;
        });

        targetCompany.html(outputCompany);
    }
})

$(document).on('click','.delete-btn',function (e){
    let id = e.target.dataset.deleteid;
    $.ajax({
        url:`${url}/${id}`,
        method:'POST',
        success:function (){
            console.log('deleted');
        }
    })
})


$(document).on('click','#submitId',function(e){
                var data= $( "#formsubmit" ).serialize();
                console.log(data);
                var form = $("#formsubmit");
                $.ajax({
                    url: jsform,
                    type: "POST",
                    data: data,
                    success: function (response) {
                        $("#test").modal('hide');
                    },
                });
            // }
    //     })
    // }
});

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
    // }
    //     })
    // }
});
