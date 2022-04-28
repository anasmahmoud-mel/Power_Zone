<?php include ('./header.php') ?>


<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Admin table
            </h3>
            <li class="nav-item d-none d-lg-flex">
                        <a class="nav-link" href="create_admin.php">
                            <span class="btn btn-primary">+ Create new</span>
                        </a>
                    </li>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin table</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Admin table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                          
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>anas</td>
                            <td>anas@jmail.com</td>
                           
                            <td>
                              <label class="badge badge-info">Edit</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">Delete</button>
                            </td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include ('./footer.php') ?>