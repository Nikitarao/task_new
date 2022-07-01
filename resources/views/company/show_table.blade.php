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
        <tbody id="companyTable">


        </tbody>
    </table>
    <div class=" d-flex justify-content-md-end mt-2" >
        {!! $company_details->links() !!}
    </div>
</div>
<script>
    var jstable = '<?php echo route('company.index'); ?>';
</script>
