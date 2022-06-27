
{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-10">--}}
{{--            <div class="card">--}}
                <form action="{{route('employee.update',$employee->id)}}" method="Post">
                    @csrf
                    @method('PATCH')
                    <input type="text" class="form-control mb-4" name="f_name" placeholder="First Name" value="{{ $employee->f_name }}"><br>
                    <input type="text"  class="form-control mb-2" name="l_name" placeholder="Last Name" value="{{ $employee->l_name }}"><br>
                    <select class="form-control  mb-2" aria-label="Default select example" name="company" >
                        @foreach($company_details as $company)
                            <option  value="{{ $company->id }}">{{$company->name}}</option>
                        @endforeach
                    </select><br>
                    <input type="email"  class="form-control mb-2" name="email" placeholder="Email" value="{{ $employee->email }}"><br>
                    <input type="number"  class="form-control mb-2" name="phone_number" placeholder="Phone no." value="{{ $employee->phone }}"><br>
                    <button    class="btn btn-primary text-dark">Save</button>
                </form>
{{--   </div>--}}
{{--        </div></div></div>--}}
