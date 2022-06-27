
{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-10">--}}
{{--            <div class="card">--}}
                <form action="{{route('company.update',$company_details->id)}}" method="Post">
                    @csrf
                    @method('PATCH')
                    <input type="text" class="form-control mb-4" name="name" placeholder="First Name" value="{{ $company_details->name }}"><br>
                    <input type="text"  class="form-control mb-2" name="website" placeholder="Last Name" value="{{ $company_details->website }}"><br>
                    <input type="email"  class="form-control mb-2" name="email" placeholder="Email" value="{{ $company_details->email }}"><br>
{{--                    <input type="file"  class="form-control mb-2" name="image" placeholder="" value="{{ $company_details->phone }}"><br>--}}
                    <button    class="btn btn-primary text-dark">Save</button>
                </form>
{{--   </div>--}}
{{--        </div></div></div>--}}
