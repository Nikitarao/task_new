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
        <tbody id="employeeList">


        </tbody>
    </table>
    <div class=" d-flex justify-content-md-end mt-2" >
        {!! $employees->links() !!}
    </div>
</div>
<div class="apiTarget" data-url="{{route('employee.index')}}"></div>

