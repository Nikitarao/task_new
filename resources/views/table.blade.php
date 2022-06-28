<h2 class="sub-header">All Employees</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
{{--            <th>Sno.</th>--}}
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
{{--                <th>{{$loop->index+1}}</th>--}}
                <td>{{$employee -> f_name}} {{ $employee -> l_name }}</td>
{{--                <td><img src="{{ asset('uploads/gallery/' . $employee->image) }}" width="80px" height="80px" alt="Image"> </td>--}}
                <td>{{$employee -> email}}</td>
                <td>{{ $company_details[$employee -> company]->name}}</td>

                    <form action="{{ route('employee.destroy',$employee->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td>
                        <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-sm btn-dark">Edit</a> </td>
                        <td><button type="submit" class="btn btn-sm btn-danger text-dark">Delete</button> </td>
                    </form>

            </tr>
        @endforeach

        </tbody>
    </table>
    <div class=" d-flex justify-content-md-end mt-2" >
        {!! $employees->links() !!}
    </div>
</div>
