  <!-- Modal -->
  <div class="modal fade" id="usermodal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" id="addform" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- Username -->
            <div class="form-group mb-2">
              <label for="">Name:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-dark">
                    <i class="fas fa-user-alt text-light fa-1x p-1"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off" required id="username" name="username">
              </div>
            </div>
            
            <!-- Email -->
            <div class="form-group mb-2">
              <label for="">Email:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-dark">
                    <i class="fas fa-envelope-open text-light fa-1x p-1"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" required id="email" name="email">
              </div>
            </div>

            <!-- Mobile -->
            <div class="form-group mb-2">
              <label for="">Mobile:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-dark">
                    <i class="fas fa-phone text-light fa-1x p-1"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Enter your mobile" autocomplete="off" required id="mobile" name="mobile" maxlength="10" minlength="10">
              </div>
            </div>

            <!-- Photo -->
            <div class="form-group mb-2">
              <label for="">Photo:</label>
              <div class="input-group">
                <label for="userphoto" class="custom-file-label"></label>
                <input type="file" class="custom-file-input" name="photo" id="userphoto">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-dark">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>