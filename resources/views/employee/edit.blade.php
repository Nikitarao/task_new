

<!-- Modal -->
<div class="modal fade" id="employeeedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST" id="editform" name="editform">@csrf
                    <input type="text" class="form-control mb-2 fname " name="f_name" placeholder="First Name"><br>
                    <input type="text"  class="form-control mb-2 lname" name="l_name" placeholder="Last Name"><br>

                    <select class="form-control  mb-2" aria-label="Default select example" name="company" >
                        @foreach($company_details as $company)
                            <option  value="{{ $company->id }}">{{$company->name}}</option>
                        @endforeach
                    </select>
                    {{--                        <input type="text"  class="form-control mb-2" name="company_name"placeholder="Company Name"><br>--}}

                    <input type="email"  class="form-control mb-2 email" name="email" placeholder="Email"><br>
                    <input type="number"  class="form-control mb-2 mobile" name="phone_number" placeholder="Phone no."><br>
                    <input type="submit" id="real-submit" style="visibility: hidden;display: none"/>
                    <input type="hidden" name="id" id="editidinput">
                    <a href="#" id="editid">edit</a>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    var editid = '<?php echo route('editdata'); ?>';
    var editidsave = '<?php echo route('editdatasave'); ?>';
</script>
