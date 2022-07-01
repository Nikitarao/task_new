

    <!-- Modal -->
    <div class="modal fade" id="company" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" name="submitCompany" id="submitCompany" method="POST">
                        @csrf
                        <input type="text" class="form-control mb-2" name="name" placeholder="First Name"><br>
                        <input type="email"  class="form-control mb-2" name="email" placeholder="Email"><br>

                        <input type="text"  class="form-control mb-2" name="website" placeholder=" Enter website"><br>
                        <input type="file" class="form-control mb-3" name="image">
                        <a href="" id="subIdCompany">save</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        var jsCompany = '<?php echo route('company.store'); ?>';
    </script>
