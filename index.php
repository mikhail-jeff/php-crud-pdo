<!-- <?php 

  require_once 'partials/connect.php';
  $dbonj = new Database();
  var_dump($dbonj);

?> -->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Advance CRUD</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <h1 class="bg-dark text-light text-center p-3">PHP Advance CRUD</h1>
    
    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" role="dialog">
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
      <!-- Input Search -->
      <div class="row mb-3">
        <div class="col-10">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text bg-dark">
                <i class="fas fa-search text-light p-1"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search...">
          </div>
        </div>
        <div class="col-2">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add New
          </button>
        </div>
      </div>

      <!-- Table Start-->
      <table class="table" id="usertable">
        <thead class="table-dark">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Picture 1</th>
            <td>John Doe</td>
            <td>johndoe@gmail.com</td>
            <td>123456789</td>
            <td>
              <span>Edit</span>
              <span>Profile</span>
              <span>Delete</span>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- Table Start-->

      <!-- Pagination Start -->
      <nav aria-label="Page navigation example" id="pagination">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
      <!-- Pagination End -->

    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Bootstrap Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- * JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </body>
</html>