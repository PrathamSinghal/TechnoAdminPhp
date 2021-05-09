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
<?php include 'header.php' ?>

<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">

                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="../admin"><i class="fas fa-home"></i></a></li>
                            <!-- <li class="breadcrumb-item"><a href="#">Lessonss</a></li> -->
                            <li class="breadcrumb-item active" aria-current="page">Lessons</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right with-search">




                    <a href="addlesson.php" class="btn btn-sm btn-neutral">Add New</a>

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
              <h3 class="mb-0">Lessons List</h3>
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
                    <div class="row">
                        <div class="col-lg-6 col-5 ">
                            <h3 class="text-dark mb-0 lesson-header">Lessons List</h3>
                        </div>
                        <div class="col-lg-6 col-5 text-right with-search bottom">
                            <select id="category" class="form-control">
                                <option value="">Select Category</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-light table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="sr">Sr.NO</th>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="budget">Problem statement</th>
                                <th scope="col" class="sort" data-sort="budget">Description</th>

                                <th scope="col" class="sort" data-sort="status">Image</th>

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
        <div class="modal-dialog double-form">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Lesson</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Enter English Content</h3>
                            <div class="from-group">
                                <label>Lesson Name:</label>
                                <input class="form-control" type="text" id="name" name="name">
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Problem Statement :</label>
                                <input class="form-control" type="text" id="problem_statement">
                            </div>
                            <div class="form-group">
                                <label>Problem Statement :</label>
                                <input class="form-control" type="text" id="problem_statement">
                            </div>
                            <div class="form-group">
                                <div class="image-box">
                                </div>
                                <label>Lesson Image :</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label>Description :</label>
                                <input class="form-control" type="text" name="description" id="description">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h3>Enter Russian Content</h3>
                            <div class="from-group">
                                <label>Lesson Name:</label>
                                <input class="form-control" type="text" id="russian_name" name="name">
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Problem Statement :</label>
                                <input class="form-control" type="text" id="russian_problem_statement">
                            </div>
                            <div class="form-group">
                                <div class="russian_image-box">
                                </div>
                                <label>Lesson Image :</label>
                                <input class="form-control" type="file" id="russian_image" name="image">
                            </div>
                            <div class="form-group">
                                <label>Description :</label>
                                <input class="form-control" type="text" name="russian_description"
                                    id="russian_description">
                            </div>
                            <div class="form-group check-group">

                                <input type="checkbox" id="same_as_eng">
                                <label>Same as English</label>

                            </div>
                        </div>

                    </div>
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
<!-- Argon Scripts -->
<!-- Core -->
<?php include 'footer.php' ?>

<script type="text/javascript">
var url = 'http://18.222.14.240/qlab/public/api/admin';
$(document).ready(function() {
    $.ajax({
        url: url + '/category',
        type: 'GET',
        success: function(data) {
            console.log(data)
            //renderLessons(data.data);
            data.data.map(item => {
                $('select#category').append(
                    `<option value="${item.id}">${item.name}</option>`);
            })
        },
        error: function(data) {
            alert('Something went wrong');
        }
    })
});

function getLessons(catid = "") {
    $(document).ready(function() {
        $('tbody.list').empty()
        $.ajax({
            url: url + '/lesson?category_id=' + catid,
            type: 'GET',
            success: function(data) {
                console.log(data)
                renderLessons(data.data);

            },
            error: function(data) {
                alert('Something went wrong');
            }
        })
    });
}
getLessons()


function renderLessons(data) {
    var render = '';
    for (var i = 0; i < data.length; i++) {
        if (data[i].status == 0) {
            var action =
                `<a class="dropdown-item active" data-id="${data[i].lession_id}" href="javascript:void(0)">Active</a>`
            var status = `<span class="badge badge-dot mr-4">
                        <i class="bg-warning status-icon"></i>
                        <span class="status">Inactive</span>
                      </span>`
        } else {
            var action =
                `<a class="dropdown-item delete" data-id="${data[i].lession_id}" href="javascript:void(0)">Delete</a>
                <a class="dropdown-item" 
               
                data-id="${data[i].id}" href="addlesson.php?id=${data[i].id}">Edit</a>`
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
                          <span class="cat-name mb-0 text-sm">${data[i].lesson_name} </span>
                        </div>
                      </div>
                    </td>
                    <td class="budget">
                      ${data[i].problem_statement}
                    </td>
                    <td class="budget">
                      ${data[i].description}
                    </td>
                    <td>
                      <img src="${data[i].lesson_image}" />
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

    $('.list').append(render);
    $(".table-responsive > table").dataTable({
        'destroy': true
    })

    $('.table-responsive > table').DataTable();
    $('.dataTables_wrapper .dataTables_filter input').attr('placeholder', 'Search')
    $('.dataTables_wrapper .dataTables_filter input').addClass('form-control')
}

$(document).on('click', '.delete', function() {
    var con = confirm('Are you sure!')
    if (con == false) {
        return
    }
    $(this).removeClass('inactive');
    $(this).addClass('active');
    $(this).text('Active');
    var id = $(this).attr('data-id');
    $.ajax({
        url: url + '/lesson/' + id,
        type: 'DELETE',
        success: function(data) {
            $('.status').text('Inactive');
            $('.status-icon').removeClass('bg-success');
            $('.status-icon').addClass('bg-warning');
            window.location.reload()
        },
        error: function(data) {
            alert('Something went wromg');
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
        url: url + '/Lessons/update-Lessons/' + id,
        type: 'GET',
        success: function(data) {
            $('.status').text('Active');
            $('.status-icon').removeClass('bg-warning');
            $('.status-icon').addClass('bg-success');
        },
        error: function(data) {
            alert('Something went wromg');
        }
    });


})
$(document).on('click', '.new_modal', function() {

    $('.modal-body .form-control').removeAttr('style')
    $('body').removeClass('is_editing')
    $('#myModal').removeAttr('data-id');
    $('#myModal').removeAttr('data-ru-id');

    $('input#name').val('');
    $('input#problem_statement').val('');
    $('input#description').val('');


    // $('input#model-name').val('')
    $('#myModal').modal('show');
});

$('input#image').on('change', function() {
    $('.loader').addClass('active')
    var formData = new FormData();
    var file = $('#image').prop('files');
    formData.append("file", file[0]);

    $.ajax({
        url: url + '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data) {

            $('.image-box').empty()
            $('.image-box').append('<img src="' + data.data.image + '" width="50"/>')
            $('.loader').removeClass('active')
        },
        error: function(data) {
            alert('Something went wromg');
            $('.loader').removeClass('active')
        }
    });
})

$('input#russian_image').on('change', function() {
    $('.loader').addClass('active')
    var formData = new FormData();
    var file = $('#russian_image').prop('files');

    formData.append("file", file[0]);

    $.ajax({
        url: url + '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data) {

            $('.russian_image-box').empty()
            $('.russian_image-box').append('<img src="' + data.data.image + '" width="50"/>')
            $('.loader').removeClass('active')
        },
        error: function(data) {
            alert('Something went wromg');
            $('.loader').removeClass('active')
        }
    });
})

$('#add-company-model').click(function() {
    var name = $('#name').val();
    var problem_statement = $('#problem_statement').val();
    var description = $('#description').val();
    var image = $('.image-box img').attr('src');


    var russianname = $('#russian_name').val();
    var russianproblem_statement = $('#russian_problem_statement').val();
    var russiandescription = $('#russian_description').val();
    var russianimage = $('.russian_image-box img').attr('src');

    if (name == '') {
        $('#name').css('border-color', 'red');
        return;
    }
    if (problem_statement == '') {
        $('#problem_statement').css('border-color', 'red');
        return;
    }
    if (!image) {
        $('#image').css('border-color', 'red');
        return;
    }
    if (description == '') {
        $('#description').css('border-color', 'red');
        return;
    }
    if (russianname == '') {
        $('#russian_name').css('border-color', 'red');
        return;
    }
    if (!$('#same_as_eng').is(":checked")) {
        if (russianproblem_statement == '') {
            $('#russian_problem_statement').css('border-color', 'red');
            return;
        }
        if (!russianimage) {
            $('#russian_image').css('border-color', 'red');
            return;
        }

        if (russiandescription == '') {
            $('#russian_description').css('border-color', 'red');
            return;
        }
    } else {
        russianname = name;
        russianproblem_statement = problem_statement;
        russiandescription = description
        russianimage = image
    }





    var data = {
        "en": {
            "name": name,
            "problem_statement": problem_statement,
            "description": description,
            "image": image
        },
        "ru": {
            "name": russianname,
            "problem_statement": russianproblem_statement,
            "description": russiandescription,
            "image": russianimage
        }
    }



    if ($('#myModal').attr('data-id')) {
        data.en.id = $('#myModal').attr('data-id')
        data.ru.id = $('#myModal').attr('data-ru-id')
    }

    $.ajax({
        url: url + '/category',
        type: 'POST',
        data: data,
        success: function(data) {
            alert('Lesson model added');
            window.location.reload('');
        },
        error: function(data) {
            alert('Something went wromg');
        }
    });

});

$(document).on('click', '.edit', function() {
    $('.modal-body .form-control').removeAttr('style')
    var dataId = $(this).attr('data-id');
    // var dataName = $(this).attr('data-name');
    // var dataproblem = $(this).attr('data-problem_statement');
    // var datadescription = $(this).attr('data-description');
    // var dataimage = $(this).attr('data-image');
    // var datarsName = $(this).attr('data-rs-name');
    // var datarsproblem = $(this).attr('data-rs-problem_statement');
    // var datarsdescription = $(this).attr('data-rs-description');
    // var datarsimage = $(this).attr('data-image');

    $.ajax({
        url: url + '/category/' + dataId,
        type: 'GET',
        success: function(data) {
            console.log(data)
            var endata = data.data.en
            var rudata = data.data.ru
            //renderLessons(data.data);
            $('input#name').val(endata.name);
            $('input#problem_statement').val(endata.problem_statement);
            $('input#description').val(endata.description);
            $('#myModal').attr('data-id', endata.id)
            $('.image-box').empty()
            $('.image-box').append('<img src="' + endata.image + '" width="50"/>')
            $('input#russian_name').val(rudata.name);
            $('input#russian_problem_statement').val(rudata.problem_statement);
            $('input#russian_description').val(rudata.description);
            $('#myModal').attr('data-ru-id', rudata.id)
            $('.russian_image-box').empty()
            $('.russian_image-box').append('<img src="' + rudata.image + '" width="50"/>')

        },
        error: function(data) {
            alert('Something went wrong');
        }
    })



    $('body').addClass('is_editing')




    // $('input#model-name').val('')
    $('#myModal').modal('show');
})

$("#search").on('keyup', function(e) {
    console.log(e.target.value);
    var search = e.target.value

    $('.table-responsive .cat-name').each(function() {
        if ($(this).text().toLowerCase().includes(search.toLowerCase())) {
            $(this).closest('tr').show();
        } else {
            $(this).closest('tr').hide();
        }
    });


});

$("#category").on('change', function(e) {
    getLessons($(this).val())


});
</script>