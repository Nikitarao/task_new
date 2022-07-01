

    <!-- Modal -->
    <div class="modal fade" id="employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="" method="POST" id="formsubmit" name="submitform">@csrf
                        <input type="text" class="form-control mb-2" name="f_name" placeholder="First Name"><br>
                        <input type="text"  class="form-control mb-2" name="l_name" placeholder="Last Name"><br>

                        <select class="form-control  mb-2" aria-label="Default select example" name="company" >
                            @foreach($company_details as $company)
                            <option  value="{{ $company->id }}">{{$company->name}}</option>
                            @endforeach
                        </select>
{{--                        <input type="text"  class="form-control mb-2" name="company_name"placeholder="Company Name"><br>--}}

                        <input type="email"  class="form-control mb-2" name="email" placeholder="Email"><br>
                        <input type="number"  class="form-control mb-2" name="phone_number" placeholder="Phone no."><br>

                        <a href="" id="submitId">save</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        var jsform = '<?php echo route('employee.store'); ?>';
    </script>
