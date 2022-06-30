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
