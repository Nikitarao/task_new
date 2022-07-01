

<!-- Modal -->
<div class="modal fade" id="companyedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" name="editCompany" id="editCompany" method="POST">
                    @csrf
                    <input type="text" class="form-control mb-2 name" name="name" placeholder="First Name"><br>
                    <input type="email"  class="form-control mb-2 email" name="email" placeholder="Email"><br>

                    <input type="text"  class="form-control mb-2 website" name="website" placeholder=" Enter website"><br>
                    <input type="file" class="form-control mb-3 image" name="image">
                    <input type="hidden" name="id" id="editidCompany">

                    <a href="" id="subIdCompany">save</a>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    var editCompany = '<?php echo route('editCompany'); ?>';
    var editComapnySave = '<?php echo route('editCompanySave'); ?>';
</script>
