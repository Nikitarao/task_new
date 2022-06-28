<h2 class="sub-header">All Company</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            {{--            <th>Sno.</th>--}}
            <th>Name</th>
            <th>Email</th>
            <th>Website</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($company_details as $company_detail)
            <tr>
                {{--                <th>{{$loop->index+1}}</th>--}}
                <td>{{$company_detail -> name}}</td>
                {{--                <td><img src="{{ asset('uploads/gallery/' . $employee->image) }}" width="80px" height="80px" alt="Image"> </td>--}}
                <td>{{$company_detail -> email}}</td>
                <td>{{$company_detail -> website}}</td>

                <form action="{{ route('company.destroy',$company_detail->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td>
                        <a href="{{ route('company.edit',$company_detail->id) }}" class="btn btn-sm btn-dark">Edit</a> </td>
                    <td><button type="submit" class="btn btn-sm btn-danger text-dark">Delete</button> </td>
                </form>

            </tr>
        @endforeach

        </tbody>
    </table>
    <div class=" d-flex justify-content-md-end mt-2" >
        {!! $company_details->links() !!}
    </div>
</div>
