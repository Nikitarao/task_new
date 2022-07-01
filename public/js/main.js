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
                        <a href="#" class="btn btn-sm btn-dark" data-deleteid="${data.id}">Edit</a> </td>
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
                        <a href="#" class="btn btn-sm btn-dark" data-deleteid="${data.id}">Edit</a> </td>
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
let saveDisBtn1 = $('#sumbitId');
console.log(saveDisBtn1);
saveDisBtn1.on('click',function(e){
    console.log("inside");
    var $formValidate = $("#formsubmit");
    // if ($formValidate.length){
    //     $formValidate.validate({
            // errorClass: "error fail-alert",
            //validClass: "valid success-alert",
            // rules : {
            //     disCode: {
            //         required : true,
            //     },
            //     disPercent: {
            //         required : true
            //     },
            // },
            // messages : {
            //     disCode: {
            //         required: "This field is required"
            //     },
            //     disPercent: {
            //         required : "This field is required"
            //     },
            // },
            // submitHandler: function(form) {
                var data= $( "#formsubmit" ).serialize();
                console.log(data);
                var form = $("#formsubmit");
                $.ajax({
                    type: "POST",
                    url: jsform,
                    data: form.serialize(),
                    success: function (response) {
                        alert(response);
                        if (response=='Code must be unique. Please try a different code.'){
                            $('#not_found').text('Code must be unique');
                            $('#not_found').css('color','red');
                        }
                    },
                    error: function(data,xhr){
                        $("#test").modal('hide');
                        cozyNoty('Discount has been created.', 'fa-check', 'success');
                    }
                });
            // }
    //     })
    // }
});
