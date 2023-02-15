      <table class="table table-bordered" id="usertable">
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
            <td scope="row">Picture 1</td>
            <td>John Doe</td>
            <td>johndoe@gmail.com</td>
            <td>123456789</td>
            <td class="text-center">
              <a href="#" class="me-3 profile" data-bs-target='#userViewModal' data-bs-toggle='modal' title="View Profile"><i class="fas fa-eye text-success" ></i></a>
              <a href="#" class="me-3 edituser" title="Edit" data-bs-target="#usermodal" data-bs-toggle='modal'><i class="fas fa-edit text-primary"></i></a>
              <a href="#" class="mr-3 deleteuser" title="Delete"><i class="fas fa-trash-alt text-danger"></i></a>
            </td>
          </tr>
        </tbody>
      </table>