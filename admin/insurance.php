<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<style>

.zoom {
  padding: 0px;
  background-color: transparent;
  transition: transform .2s; /* Animation */
  width: 50;
  height: 50;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(10.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<?php include 'header.php' ?>
  
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../admin"><i class="fas fa-home"></i></a></li>
                  <!-- <li class="breadcrumb-item"><a href="#">users</a></li> -->
                  <li class="breadcrumb-item active" aria-current="page">Insurance</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            
            <div class="card-header border-0">
              <h3 class="mb-0">User List</h3>
            </div>
           
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Email</th>
                    <th scope="col" class="sort" data-sort="budget">Phone</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col">Vehicle</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Argon Design System</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $2500 USD
                    </td>
                    <td class="budget">
                      8448804534
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                    </td>
                    <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                          <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                          <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                          <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                        </a>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card  shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-dark mb-0">Insurance List</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Owner name</th>
                    <th scope="col" class="sort" data-sort="name">Insurance name</th>
                    <th scope="col" class="sort" data-sort="name">Policy number</th>
                    <th scope="col" class="sort" data-sort="name">Agent name</th>
                    <th scope="col" class="sort" data-sort="name">Agent phone</th>
                    <th scope="col" class="sort" data-sort="name">Company</th>
                    <th scope="col" class="sort" data-sort="name">Due date</th>
                    <th scope="col" class="sort" data-sort="name">Payment date</th>
                    <!--<th scope="col" class="sort" data-sort="status">RC Image.</th> -->
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <!-- <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer> -->
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php include 'footer.php' ?>

  <script type="text/javascript">
  
    var url = 'http://15.206.153.73/api/admin';

    $(document).ready(function(){
      $.ajax({
        url : url+'/insurance',
        type: 'GET',
        success:function(data){
          renderUser(data.result);
        },
        error:function(data){
          alert('Something went wrong');
        }
      })
    }); 
    function renderUser(data){
      console.log(data);
      var render = '';
      for (var i = 0; i < data.length; i++) {
        if(data[i].status == 0){
          var action = `<a class="dropdown-item active" data-id="${data[i].id}" href="javascript:void(0)">Active</a>`
          var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-warning status-icon"></i>
                        <span class="status">Inactive</span>
                      </span>`
        } else {
          var action = `<a class="dropdown-item inactive" data-id="${data[i].id}" href="javascript:void(0)">InActive</a>`
          var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-success status-icon"></i>
                        <span class="status">Active</span>
                      </span>`
        }
        render += `<tr>
                    <td>${data[i].user.name} ${data[i].user.surname}</td>
                    <td>${data[i].insurance.insurance_name}</td>
                    <td>${data[i].insurance.policy_number}</td>
                    <td>${data[i].insurance.agent_name}</td>
                    <td>${data[i].insurance.agent_phone}</td>
                    <td>${data[i].insurance.company}</td>
                    <td>${data[i].insurance.due_date}</td>
                    <td>${data[i].insurance.payment_date}</td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          ${action}
                          <!-- <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a> !-->
                        </div>
                      </div>
                    </td>
                  </tr>`
      }
      console.log(data);
      $('.list').append(render);
    }

    $(document).on('click','.inactive',function(){
      var con = confirm('Are you sure!')
      if(con == false){
        return
      }
      $(this).removeClass('inactive');
      $(this).addClass('active');
      $(this).text('Active');
      var id = $(this).attr('data-id');
      $.ajax({
        url: url+'/user/update-user/'+id,
        type: 'GET',
        success:function(data){
          $('.status').text('Inactive');
          $('.status-icon').removeClass('bg-success');
          $('.status-icon').addClass('bg-warning');
        },
        error:function(data){
          alert('Something went wromg');
        }
      });
    })

    $(document).on('click','.active',function(){
      var con = confirm('Are you sure!')
      if(con == false){
        return
      }
      $(this).removeClass('active');
      $(this).addClass('inactive');
      $(this).text('Inactive');
      var id = $(this).attr('data-id');
      $.ajax({
        url: url+'/user/update-user/'+id,
        type: 'GET',
        success:function(data){
          $('.status').text('Active');
          $('.status-icon').removeClass('bg-warning');
          $('.status-icon').addClass('bg-success');
        },
        error:function(data){
          alert('Something went wromg');
        }
      });
    })
  </script>