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
<?php
include 'header.php'
?>

<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6 bg-additional">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">

                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="../admin"><i class="fas fa-home"></i></a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Opportunitiess</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Opportunities</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right with-search">




                    <a href="#" class="btn btn-sm btn-neutral new_modal">Add New</a>

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
              <h3 class="mb-0">Opportunities List</h3>
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
                <div class="card-header bg-transparent border-0 list-language">
                    <h3 class="text-dark mb-0">Opportunities List</h3>
                    <div class="dropdown dropdown-language">
                        <a class="btn btn-sm text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <!-- <i class="fas fa-ellipsis-v"></i> -->
                          Language
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">English</a>
                          <a class="dropdown-item" href="#" id="language_arabic">Arabic</a>
                          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                      </div>
                    <!-- <button>Select Language</button> -->
                  </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-light table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="sr">Sr.NO</th>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort min-width-400" data-sort="budget">Description</th>
                                <th scope="col" class="sort min-width-400" style="width:400px" data-sort="budget">More
                                    Details</th>

                                <th scope="col" class="sort" data-sort="status">Subject</th>
                                <th scope="col" class="sort" data-sort="status">Project Type</th>
                                <th scope="col" class="sort min-width-400" data-sort="budget">Other details</th>

                                <!-- <th scope="col" class="sort" data-sort="completion">Completion</th> -->
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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Opportunity</h4>
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                </div>

                <!-- Modal body -->

                <div class="modal-adjust">
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group language-content" >
                                  <label>Enter English Content</label>
                              </div>
                              <div class="form-group">
                                  <label>Name :</label>
                                  <input class="form-control" type="text" id="name" placeholder="Select Name">
                              </div>
                              <div class="from-group">
                                  <label>Project Type:</label>
                                  <select class="form-control" id="category_id">
                                      <option value="">Select Type</option>
                                      <option value="1">E-commerce</option>
                                      <option value="2">On Demand</option>
                                      <option value="3">Travel</option>
                                      <option value="4">Taxi</option>
                                      <option value="5">Food</option>
                                      <option value="6">POS</option>
                                      <option value="7">Payment Gateway</option>
                                      <option value="8">Game</option>
                                      <option value="9">Social Networking</option>
                                      <option value="10">Meditation</option>
                                      <option value="11">Medical</option>
                                      <option value="12">Finance</option>
                                      <option value="13">Health & Fitness</option>
                                      <option value="14">Education</option>
                                      <option value="15">Others</option>
                                  </select>
                              </div>
                              <br />
                              <div class="form-group">
                                  <label>Subject :</label>
                                  <input class="form-control" type="text" id="subject" placeholder="Select Subject">
                              </div>

                              <div class="form-group">
                                  <label>Description :</label>
                                  <textarea class="form-control" type="text" name="description"
                                      id="description" placeholder="Select Description"></textarea>
                              </div>
                              <div class="form-group">
                                  <label>More Details :</label>
                                  <textarea class="form-control" type="text" name="description"
                                      id="more_details" placeholder="Select More Details"></textarea>
                              </div>
                              <div class="form-group">
                                  <label>Other Details :</label>
                                  <textarea class="form-control" type="text" name="description" id="usp" placeholder="Select Other Details"></textarea>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group language-content" >
                              <label>Enter Arabic Content</label>
                          </div>
                            <div class="form-group">
                                <label>Name :</label>
                                <input class="form-control" type="text" id="arabic_name" placeholder="Select Name">
                            </div>
                            <div class="from-group">
                                <label>Project Type:</label>
                                <select class="form-control" id="arabic_category_id">
                                    <option value="">Select Type</option>
                                    <option value="1">E-commerce</option>
                                    <option value="2">On Demand</option>
                                    <option value="3">Travel</option>
                                    <option value="4">Taxi</option>
                                    <option value="5">Food</option>
                                    <option value="6">POS</option>
                                    <option value="7">Payment Gateway</option>
                                    <option value="8">Game</option>
                                    <option value="9">Social Networking</option>
                                    <option value="10">Meditation</option>
                                    <option value="11">Medical</option>
                                    <option value="12">Finance</option>
                                    <option value="13">Health & Fitness</option>
                                    <option value="14">Education</option>
                                    <option value="15">Others</option>
                                </select>
                            </div>
                            <br />
                            <div class="form-group">
                                <label>Subject :</label>
                                <input class="form-control" type="text" id="arabic_subject" placeholder="Select Subject">
                            </div>

                            <div class="form-group">
                                <label>Description :</label>
                                <textarea class="form-control" type="text" name="description"
                                    id="arabic_description" placeholder="Select Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>More Details :</label>
                                <textarea class="form-control" type="text" name="description"
                                    id="arabic_more_details" placeholder="Select More Details"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Other Details :</label>
                                <textarea class="form-control" type="text" name="description" id="arabic_usp" placeholder="Select Other Details"></textarea>
                            </div>
                        </div>
                    </div>

                  </div>     
                  <!-- </form>            -->
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="add-company-model" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>



        </div>
    </div>
</div>

</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<?php include 'footer.php' ?>

<script type="text/javascript">


var url = 'http://18.219.3.68/api.php/';

$(document).ready(function() {
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            var output = JSON.parse(data);
            console.log(output);
            renderOpportunitiesEnglish(output.result);
            $('.table-responsive > table').DataTable();
            $('.dataTables_wrapper .dataTables_filter input').attr('placeholder', 'Search')
            $('.dataTables_wrapper .dataTables_filter input').addClass('form-control')
        },
        error: function(data) {
            alert('Something went wrong');
        }
    })
});

function renderOpportunitiesEnglish(data) {
    var render = '';

    for (var i = 0; i < data.length; i++) {
        var catname = data[i].project_type !== "" ? $('#category_id option[value="' + data[i].project_type + '"]')
            .text() : ""
        if (data[i].status == 0) {
            var action =
                `<a class="dropdown-item active" data-id="${data[i].category_id}" href="javascript:void(0)">Active</a>`
            var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-warning status-icon"></i>
                        <span class="status">Inactive</span>
                      </span>`
        } else {
            var action =
                `<a class="dropdown-item delete" data-id="${data[i].category_id}" href="javascript:void(0)">Delete</a><a class="dropdown-item edit" 
                data-name="${data[i].name}"
                data-description="${data[i].description}"
                data-project_type="${data[i].project_type}"
                data-subject="${data[i].subject}"
                data-usp="${data[i].usp}"
                data-more_details="${data[i].more_details}"
                data-id="${data[i].id}" 

                href="javascript:void(0)">Edit</a>`
            var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-success status-icon"></i>
                        <span class="status">Active</span>
                      </span>`
        }
        render += `<tr>
                  <td class="budget">
                                ${i+1}
                              </td>
                    <td scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="cat-name mb-0 text-sm">${data[i].name} </span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">
                      ${data[i].description}
                    </td>
                    <td class="budget desrition">
                      ${data[i].more_details}
                    </td>
                    <td>
                    ${data[i].subject}
                    </td>
                    <td>
                    ${catname}
                    </td>
                    <td class="budget">
                    ${data[i].usp}
                    </td>
                    
                    
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

function renderOpportunitiesArabic(data) {
  var render = '';

  for (var i = 0; i < data.length; i++) {
        var catname = data[i].project_type !== "" ? $('#arabic_category_id option[value="' + data[i].project_type + '"]')
            .text() : ""
        if (data[i].status == 0) {
            var action =
                `<a class="dropdown-item active" data-id="${data[i].arabic_category_id}" href="javascript:void(0)">Active</a>`
            var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-warning status-icon"></i>
                        <span class="status">Inactive</span>
                      </span>`
        } else {
            var action =
                `<a class="dropdown-item delete" data-id="${data[i].arabic_category_id}" href="javascript:void(0)">Delete</a><a class="dropdown-item edit" 
                data-name="${data[i].arabic_name}"
                data-description="${data[i].arabic_description}"
                data-project_type="${data[i].project_type}"
                data-subject="${data[i].arabic_subject}"
                data-usp="${data[i].arabic_usp}"
                data-more_details="${data[i].arabic_more_details}"
                data-id="${data[i].id}" 

                href="javascript:void(0)">Edit</a>`
            var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-success status-icon"></i>
                        <span class="status">Active</span>
                      </span>`
        }
        render += `<tr>
                  <td class="budget">
                                ${i+1}
                              </td>
                    <td scope="row">
                      <div class="media align-items-center">
                        
                        <div class="media-body">
                          <span class="cat-name mb-0 text-sm">${data[i].arabic_name} </span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">
                      ${data[i].arabic_description}
                    </td>
                    <td class="budget desrition">
                      ${data[i].arabic_more_details}
                    </td>
                    <td>
                    ${data[i].arabic_subject}
                    </td>
                    <td>
                    ${catname}
                    </td>
                    <td class="budget">
                    ${data[i].arabic_usp}
                    </td>
                    
                    
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

$('#language_arabic').click(function() {
  $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            var output = JSON.parse(data);
            console.log(output);
            renderOpportunitiesArabic(output.result);
            $('.table-responsive > table').DataTable();
            $('.dataTables_wrapper .dataTables_filter input').attr('placeholder', 'Search')
            $('.dataTables_wrapper .dataTables_filter input').addClass('form-control')
        },
        error: function(data) {
            alert('Something went wrong');
        }
    })
})


$(document).on('click', '.delete', function() {
    var con = confirm('Are you sure! you want to delete this category?')
    if (con == false) {
        return
    }
    $(this).removeClass('inactive');
    $(this).addClass('active');
    $(this).text('Active');
    var id = $(this).attr('data-id');
    $.ajax({
        url: url + '/category/' + id,
        type: 'DELETE',
        success: function(data) {
            $('.status').text('Inactive');
            $('.status-icon').removeClass('bg-success');
            $('.status-icon').addClass('bg-warning');
            window.location.reload()
        },
        error: function(data) {
            alert('Something went wrong');
        }
    });
})

$(document).on('click', '.active', function() {
    var con = confirm('Are you sure!')
    if (con == false) {
        return
    }
    $(this).removeClass('active');
    $(this).addClass('inactive');
    $(this).text('Inactive');
    var id = $(this).attr('data-id');
    $.ajax({
        url: url + '/Opportunities/update-Opportunities/' + id,
        type: 'GET',
        success: function(data) {
            $('.status').text('Active');
            $('.status-icon').removeClass('bg-warning');
            $('.status-icon').addClass('bg-success');
        },
        error: function(data) {
            alert('Something went wrong');
        }
    });


})
$(document).on('click', '.new_modal', function() {

    $('.modal-body .form-control').removeAttr('style')
    $('body').removeClass('is_editing')
    $('#myModal').removeAttr('data-id');


    var name = $('#name').val('');
    var subject = $('#subject').val('');
    var description = $('#description').val('');
    var more_details = $('#more_details').val('');
    var category = $('#category_id').val('');
    var usp = $('#usp').val('');

    var arabicName = $('#arabic_name').val();
    var arabicCategory = $('#arabic_category_id').val();
    var arabicSubject = $('#arabic_subject').val();
    var arabicDescription = $('#arabic_description').val();
    var arabicMoreDetails = $('#arabic_more_details').val();
    var arabicOtherDetails = $('#arabic_usp').val();

    // $('input#model-name').val('')
    $('#myModal').modal('show');
});



$('#add-company-model').click(function() {
    var name = $('#name').val();
    var category = $('#category_id').val();
    var subject = $('#subject').val();
    var description = $('#description').val();
    var more_details = $('#more_details').val();
    var usp = $('#usp').val();

    var arabicName = $('#arabic_name').val();
    var arabicCategory = $('#arabic_category_id').val();
    var arabicSubject = $('#arabic_subject').val();
    var arabicDescription = $('#arabic_description').val();
    var arabicMoreDetails = $('#arabic_more_details').val();
    var arabicOtherDetails = $('#arabic_usp').val();


    if (name == '') {
        $('#name').css('border-color', 'red');
        return;
    }
    if (subject == '') {
        $('#subject').css('border-color', 'red');
        return;
    }
    if (description == '') {
        $('#description').css('border-color', 'red');
        return;
    }
    if (more_details == '') {
        $('#more_details').css('border-color', 'red');
        return;
    }
    if (usp == '') {
        $('#usp').css('border-color', 'red');
        return;
    }
    if (category == '') {
        $('#category_id').css('border-color', 'red');
        return;
    }
    if (arabicName == '') {
        $('#arabic_name').css('border-color', 'red');
        return;
    }
    if (arabicCategory == '') {
        $('#arabic_category_id').css('border-color', 'red');
        return;
    }
    if (arabicSubject == '') {
        $('#arabic_subject').css('border-color', 'red');
        return;
    }
    if (arabicDescription == '') {
        $('#arabic_description').css('border-color', 'red');
        return;
    }
    if (arabicMoreDetails == '') {
        $('#arabic_more_details').css('border-color', 'red');
        return;
    }
    if (arabicOtherDetails == '') {
        $('#arabic_usp').css('border-color', 'red');
        return;
    }










    var data = {

        "name": name,
        "subject": subject,
        "description": description,
        "more_details": more_details,
        "usp": usp,
        "category_id": category,

        "arabic_name": arabicName,
        "arabic_category_id": arabicCategory,
        "arabic_subject": arabicSubject,
        "arabic_description": arabicDescription,
        "arabic_more_details": arabicMoreDetails,
        "arabic_usp": arabicOtherDetails


    }



    if ($('#myModal').attr('data-id')) {
        data.id = $('#myModal').attr('data-id')

    }

    $.ajax({
        url: 'http://18.219.3.68/saveData.php',
        type: 'POST',
        data: data,
        dataType: "json",
        enctype: 'application/json',
        success: function(data) {
            alert('Category model added');
            window.location.reload();
        },
        error: function(data) {
            alert('Something went wrong');
        }
    });

});



$(document).on('click', '.edit', function() {
    $('.modal-body .form-control').removeAttr('style')
    var dataId = $(this).attr('data-id');
    var name = $(this).attr('data-name');
    var description = $(this).attr('data-description');
    var category = $(this).attr('data-project_type');
    var moreDetails = $(this).attr('data-more_details');
    var usp = $(this).attr('data-usp');
    var subject = $(this).attr('data-subject');




    $('#myModal').attr('data-id', dataId);







    $('body').addClass('is_editing')

    var name = $('#name').val(name);
    var subject = $('#subject').val(subject);
    var description = $('#description').val(description);
    var more_details = $('#more_details').val(moreDetails);
    var category = $('#category_id').val(category);
    var usp = $('#usp').val(usp);
    // $('input#model-name').val('')
    $('#myModal').modal('show');
})


function auto_grow(element) {
  element.style.height = "6px";
  element.style.height = (element.scrollHeight) + "px";
}

</script>