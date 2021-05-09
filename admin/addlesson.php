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
                            <li class="breadcrumb-item"><a href="lessons.php">Lessonss</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Lessons</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6 addlesson">
    <div class="from-group">
        <label>Select category:</label>
        <select id="category" class="form-control">
            <option value="">Select Category</option>
        </select>
        <br />
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Enter English Content</h3>
            <div class="from-group">
                <label>Lesson Name:</label>
                <input class="form-control" type="text" id="name" name="name">

            </div>
            <div class="form-group">
                <label>Problem Statement :</label>
                <input class="form-control" type="text" id="problem_statement">
            </div>
            <div class="form-group">
                <label>Day Identifier :</label>
                <input class="form-control" type="text" id="day_identifier">
            </div>
            <div class="form-group">
                <div class="image-box lesson-image">
                </div>
                <label>Lesson Image :</label>
                <input class="form-control upload-image" type="file" accept="image/*" id="image" name="image">
            </div>
            <div class="form-group">
                <label>Description :</label>
                <input class="form-control" type="text" name="description" id="description">
            </div>
            <label>Text One :</label>
            <div class="text_one editor">

            </div>
            <label>Text Two :</label>
            <div class="text_two editor">

            </div>
            <h3>Audio Clips</h3>
            <div class="audio-group">
                <div class="audio-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control audio-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box audio-image">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control audio-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box audio-file">
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control audio-file upload-audio" type="file">
                    </div>
                </div>
            </div>
            <button type="button" class="btn  btn-warning add-audio">Add New</button>
            <br />
            <br />
            <h3>Video Clips</h3>
            <div class="video-group">
                <div class="video-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control video-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box video-image">
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control video-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box video-file">
                        </div>
                        <label>Video File :</label>
                        <input class="form-control video-file upload-video" type="file">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-warning add-video">Add New</button>
        </div>

        <div class="col-lg-6">
            <h3>Enter Russian Content</h3>
            <div class="from-group">
                <label>Lesson Name:</label>
                <input class="form-control" type="text" id="rs-name" name="name">
                </select>
            </div>
            <div class="form-group">
                <label>Problem Statement :</label>
                <input class="form-control" type="text" id="rs-problem_statement">
            </div>
            <div class="form-group">
                <label>Day Identifier :</label>
                <input class="form-control" type="text" id="rs-day_identifier">
            </div>
            <div class="form-group">
                <div class="image-box rs-image">
                </div>
                <label>Lesson Image :</label>
                <input class="form-control upload-image" type="file" accept="image/*" id="rs-image" name="image">
            </div>
            <div class="form-group">
                <label>Description :</label>
                <input class="form-control" type="text" name="description" id="rs-description">
            </div>
            <label>Text One :</label>
            <div class="rs-text_one editor">

            </div>
            <label>Text Two :</label>
            <div class="rs-text_two editor">

            </div>
            <h3>Audio Clips</h3>
            <div class="rs-audio-group">
                <div class="rs-audio-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control rs-audio-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-audio-image">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control upload-image rs-audio-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-audio-file">
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control rs-audio-file upload-audio" type="file">
                    </div>
                </div>
            </div>
            <button type="button" class="btn  btn-warning rs-add-audio">Add New</button>
            <br />
            <br />
            <h3>Video Clips</h3>
            <div class="rs-video-group">
                <div class="rs-video-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control rs-video-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-video">
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control upload-image rs-video-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-video-file">
                        </div>
                        <label>Video File :</label>
                        <input class="form-control rs-video-file upload-video" type="file">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-warning rs-add-video">Add New</button>
            <br />
            <br />

            <div class="form-group check-group">

                <input type="checkbox" id="same_as_eng">
                <label>Same as English</label>

            </div>

        </div>


    </div>

    <div class="text-center">
        <button type="button" id="add-lesson" class="btn btn-success">Submit</button>
        <br />
        <br /><br />
    </div>
</div>


</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<?php include 'footer.php' ?>

<script type="text/javascript">
var url = 'http://18.222.14.240/qlab/public/api/admin';


var query = new URLSearchParams(window.location.search)
var editid = query.get('id');






$(document).ready(function() {
    $('.loader').addClass("active");

    $.ajax({
        url: url + '/category',
        type: 'GET',
        success: function(data) {
            console.log(data)
            //renderLessons(data.data);
            data.data.map(item => {
                $('select#category').append(
                    `<option value="${item.id}">${item.name}</option>`);
            });

            if (editid !== null) {
                $.ajax({
                    url: url + '/lesson/' + editid,
                    type: 'GET',
                    success: function(data) {

                        var enData = data.data.en
                        var rsData = data.data.ru
                        $('.addlesson').append(
                            '<input id="enid" type="hidden" value="' + enData
                            .lession_id +
                            '"/>');

                        $('.addlesson').append(
                            '<input id="rsid" type="hidden" value="' + rsData
                            .lession_id +
                            '"/>');
                        $('select#category').val(enData.category_id)
                        console.log(data)
                        $('.loader').removeClass("active");

                        $('#name').val(enData.lesson_name);
                        $('#problem_statement').val(enData.problem_statement);
                        $('#description').val(enData.description);
                        $('.lesson-image').append('<img src="' + enData
                            .lesson_image + '" width="50"/>');
                        $('#day_identifier').val(enData.day_identifier);
                        $('.text_one .ql-editor').html(enData.text_one)
                        $('.text_two .ql-editor').html(enData.text_two)
                        var audios = JSON.parse(enData.audio_clips);
                        $('.audio-group').empty()
                        audios.map(item => {
                            $('.audio-group').append(`<div class="audio-item js-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control audio-name" value="${item.name}" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box audio-image">
                        <img src="${item.image}" width="50">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control audio-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box audio-file">
                        <div class="file-item" data-src="${item.file}">
                <span>${item.file}</span>
                <audio controls="">
  <source src="${item.file}" type="audio/mpeg">
Your browser does not support the audio element.
</audio></div>
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control audio-file upload-audio" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>

                </div>`)
                        })

                        var videos = JSON.parse(enData.video_clips);
                        $('.video-group').empty()
                        videos.map(item => {
                            $('.video-group').append(`<div class="video-item js-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control video-name" value="${item.name}" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box video-image">
                        <img src="${item.image}" width="50">
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control video-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box video-file">
                        <div class="file-item" data-src="${item.file}">
                <span>${item.file}</span><video width="300" controls="">
  <source src="${item.file}">
Your browser does not support the video element.
</video></div>
                        </div>
                        <label>Video File :</label>
                        <input class="form-control video-file upload-video" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`)
                        })

                        $('#rs-name').val(rsData.lesson_name);
                        $('#rs-problem_statement').val(rsData.problem_statement);
                        $('#rs-description').val(rsData.description);
                        $('.rs-image').append('<img src="' + rsData
                            .lesson_image + '" width="50"/>');;
                        $('#rs-day_identifier').val(rsData.day_identifier);
                        $('.rs-text_one .ql-editor').html(rsData.text_one)
                        $('.rs-text_two .ql-editor').html(rsData.text_two)

                        var rsaudios = JSON.parse(rsData.audio_clips);
                        $('.rs-audio-group').empty()
                        JSON.parse(rsaudios).map(item => {
                            $('.rs-audio-group').append(`<div class="rs-audio-item js-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control rs-audio-name" value="${item.name}" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-audio-image">
                        <img src="${item.image}" width="50">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control upload-image rs-audio-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-audio-file">
                        <div class="file-item" data-src="${item.file}">
                <span>${item.file}</span>
                <audio controls="">
  <source src="${item.file}" type="audio/mpeg">
Your browser does not support the audio element.
</audio></div>
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control rs-audio-file upload-audio" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`)
                        })

                        var rsvideos = JSON.parse(rsData.video_clips);
                        console.log(rsvideos)
                        $('.rs-video-group').empty();
                        JSON.parse(rsvideos).map(item => {
                            $('.rs-video-group').append(`<div class="rs-video-item js-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control rs-video-name" value="${item.name}" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-video">
                        <img src="${item.image}" width="50">   
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control upload-image rs-video-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-video-file">
                        <div class="file-item" data-src="${item.file}">
                <span>${item.file}</span><video width="300" controls="">
  <source src="${item.file}">
Your browser does not support the video element.
</video></div>
                        </div>
                        <label>Video File :</label>
                        <input class="form-control rs-video-file upload-video" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`)
                        })

                    },
                    error: function(data) {
                        alert('Something went wrong');
                        $('.loader').removeClass("active");
                    }
                })
            } else {
                $('.loader').removeClass("active");
            }

        },
        error: function(data) {
            alert('Something went wrong');
            $('.loader').removeClass("active");
        }
    });
});

var audioElemnt = `<div class="audio-item js-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control audio-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box audio-image">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control audio-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box audio-file">
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control audio-file upload-audio" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>

                </div>`;

$('.add-audio').on('click', function() {
    var error = false;

    $(this).prev('.audio-group').find('.audio-item').each(function() {

        if ($(this).find('.audio-name').val() == '') {
            $(this).find('.audio-name').css('border-color', 'red');
            error = true;
            return
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.audio-image').css('border-color', 'red');
            error = true;
            return;
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.audio-file').css('border-color', 'red');
            error = true;

        }



    });

    if (!error) {
        $('.audio-group').append(audioElemnt)
    }

})
var rsaudioElemnt = `<div class="rs-audio-item js-item">
                    <div class="form-group">
                        <label>Audio Name :</label>
                        <input class="form-control rs-audio-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-audio-image">
                        </div>
                        <label>Audio Image :</label>
                        <input class="form-control upload-image rs-audio-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-audio-file">
                        </div>
                        <label>Audio File :</label>
                        <input class="form-control rs-audio-file upload-audio" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`;




$(document).on('click', '.rs-add-audio', function() {
    var error = false;

    $('.rs-audio-item').each(function() {
        if ($(this).find('.rs-audio-name').val() == '') {
            $(this).find('.rs-audio-name').css('border-color', 'red');
            error = true;
            return
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.rs-audio-image').css('border-color', 'red');
            error = true;
            return
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.rs-audio-file').css('border-color', 'red');
            error = true;

        }


    });

    if (!error) {
        $('.rs-audio-group').append(rsaudioElemnt)
    }

});

var videoElemnt = `<div class="video-item js-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control video-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box video-image">
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control video-image upload-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box video-file">
                        </div>
                        <label>Video File :</label>
                        <input class="form-control video-file upload-video" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`;

$('.add-video').on('click', function() {
    var error = false;

    $(this).prev('.video-group').find('.video-item').each(function() {

        if ($(this).find('.video-name').val() == '') {
            $(this).find('.video-name').css('border-color', 'red');
            error = true;
            return
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.video-image').css('border-color', 'red');
            error = true;
            return;
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.video-file').css('border-color', 'red');
            error = true;

        }



        // });

        if (!error) {
            $('.video-group').append(videoElemnt)
        }

    })
});

var rsvideoElemnt = `<div class="rs-video-item js-item">
                    <div class="form-group">
                        <label>Video Name :</label>
                        <input class="form-control rs-video-name" type="text">
                    </div>
                    <div class="form-group">
                        <div class="image-box rs-video">
                        </div>
                        <label>Video Image :</label>
                        <input class="form-control upload-image rs-video-image" type="file" accept="image/*">
                    </div>
                    <div class="form-group">
                        <div class="file-box rs-video-file">
                        </div>
                        <label>Video File :</label>
                        <input class="form-control rs-video-file upload-video" type="file">
                    </div>
                    <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                </div>`;

$('.rs-add-video').on('click', function() {
    var error = false;


    $(this).prev('.rs-video-group').find('.rs-video-item').each(function() {

        if ($(this).find('.rs-video-name').val() == '') {
            $(this).find('.rs-video-name').css('border-color', 'red');
            error = true;
            return
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.rs-video-image').css('border-color', 'red');
            error = true;
            return;
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.rs-video-file').css('border-color', 'red');
            error = true;

        }



        // });

        if (!error) {
            $('.rs-video-group').append(rsvideoElemnt)
        }

    })
});




$(document).on('change', '.upload-image', function() {
    $('.loader').addClass('active')
    var formData = new FormData();
    var file = $(this).prop('files');
    formData.append("file", file[0]);
    var el = $(this);
    $.ajax({
        url: url + '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data) {

            el.closest('.form-group').find('.image-box').empty();
            el.closest('.form-group').find('.image-box').append('<img src="' + data.data
                .image + '" width="50"/>')
            $('.loader').removeClass('active')
        },
        error: function(data) {
            alert('Something went wromg');
            $('.loader').removeClass('active')
        }
    });
});

$(document).on('change', '.upload-audio', function() {
    $('.loader').addClass('active')
    var formData = new FormData();
    var file = $(this).prop('files');
    formData.append("file", file[0]);
    var el = $(this);
    $.ajax({
        url: url + '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data) {
            console.log(data)

            el.closest('.form-group').find('.file-box').empty();
            el.closest('.form-group').find('.file-box').append(`<div class="file-item" data-src="${data.data
                .image}">
                <span>${data.data
                .image}</span>
                <audio controls>
  <source src="${data.data
                .image}" type="audio/mpeg">
Your browser does not support the audio element.
</audio></div>`)
            $('.loader').removeClass('active');

        },
        error: function(data) {
            alert('Something went wromg');
            $('.loader').removeClass('active')
        }
    });
})

$(document).on('change', '.upload-video', function() {
    $('.loader').addClass('active')
    var formData = new FormData();
    var file = $(this).prop('files');
    formData.append("file", file[0]);
    var el = $(this);
    $.ajax({
        url: url + '/upload-image',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        enctype: 'multipart/form-data',
        success: function(data) {
            console.log(data)

            el.closest('.form-group').find('.file-box').empty();
            el.closest('.form-group').find('.file-box').append(`<div class="file-item" data-src="${data.data
                .image}">
                <span>${data.data
                .image}</span><video width="300" controls>
  <source src="${data.data
                .image}" >
Your browser does not support the video element.
</video></div>`);
            $('.loader').removeClass('active');

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
            $('.russian_image-box').append('<img src="' + data.data.image +
                '" width="50"/>')
            $('.loader').removeClass('active')
        },
        error: function(data) {
            alert('Something went wromg');
            $('.loader').removeClass('active')
        }
    });
})

$('#add-lesson').click(function() {

    $('.form-control').removeAttr('style')
    $(window).scrollTop(0);
    var category = $('select#category').val();
    var name = $('#name').val();
    var problem_statement = $('#problem_statement').val();
    var description = $('#description').val();
    var image = $('.lesson-image img').attr('src');
    var day = $('#day_identifier').val();
    var audios = [];
    var videos = [];
    var error = false
    var russianname = $('#rs-name').val();
    var russianproblem_statement = $('#rs-problem_statement').val();
    var russiandescription = $('#rs-description').val();
    var russianimage = $('.rs-image img').attr('src');
    var russinaday = $('#rs-day_identifier').val();
    var rsaudios = [];
    var rsvideos = [];
    var textOne = $('.text_one .ql-editor').html()
    var textTwo = $('.text_two .ql-editor').html()
    var rstextOne = $('.rs-text_one .ql-editor').html()
    var rstextTwo = $('.rs-text_two .ql-editor').html()

    if (category == '') {
        $('#category').css('border-color', 'red');
        return;
    }

    if (name == '') {
        $('#name').css('border-color', 'red');
        return;
    }
    if (problem_statement == '') {
        $('#problem_statement').css('border-color', 'red');
        return;
    }

    if (day == '') {
        $('#day_identifier').css('border-color', 'red');
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

    $('.audio-group').find('.audio-item').each(function() {

        var audioItem = {

        }

        if ($(this).find('.audio-name').val() == '') {
            $(this).find('.audio-name').css('border-color', 'red');
            error = true;
            return;
        } else {
            audioItem.name = $(this).find('.audio-name').val()
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.audio-image').css('border-color', 'red');
            error = true;
            return

        } else {
            audioItem.image = image
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.audio-file').css('border-color', 'red');
            error = true;
            return

        } else {
            audioItem.file = audio

        }
        audios.push(audioItem)
    });



    $('.video-group').find('.video-item').each(function() {
        var videoItem = {}
        if ($(this).find('.video-name').val() == '') {
            $(this).find('.video-name').css('border-color', 'red');
            error = true;
            return
        } else {
            videoItem.name = $(this).find('.video-name').val()
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.video-image').css('border-color', 'red');
            error = true;
            return;
        } else {
            videoItem.image = image
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.video-file').css('border-color', 'red');
            error = true;

        } else {
            videoItem.file = audio
        }

        videos.push(videoItem)
    });






    if (russianname == '') {
        $('#rs-name').css('border-color', 'red');
        return;
    }
    if (russianproblem_statement == '') {
        $('#rs-problem_statement').css('border-color', 'red');
        return;
    }
    if (russiandescription == '') {
        $('#rs-description').css('border-color', 'red');
        return;
    }
    if (!russianimage) {
        $('#rs-image').css('border-color', 'red');
        return;
    }

    if (russinaday == '') {
        $('#rs-day_identifier').css('border-color', 'red');
        return;
    }



    $('.rs-audio-group').find('.rs-audio-item').each(function() {

        var audioItem = {

        }

        if ($(this).find('.rs-audio-name').val() == '') {
            $(this).find('.rs-audio-name').css('border-color', 'red');
            error = true;
            return;
        } else {
            audioItem.name = $(this).find('.rs-audio-name').val()
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.rs-audio-image').css('border-color', 'red');
            error = true;
            return

        } else {
            audioItem.image = image
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.rs-audio-file').css('border-color', 'red');
            error = true;
            return

        } else {
            audioItem.file = audio

        }
        rsaudios.push(audioItem)
    });



    $('.rs-video-group').find('.rs-video-item').each(function() {
        var videoItem = {}
        if ($(this).find('.rs-video-name').val() == '') {
            $(this).find('.rs-video-name').css('border-color', 'red');
            error = true;
            return
        } else {
            videoItem.name = $(this).find('.rs-video-name').val()
        }
        var image = $(this).find('.image-box img').attr('src');

        if (!image) {
            $(this).find('.rs-video-image').css('border-color', 'red');
            error = true;
            return;
        } else {
            videoItem.image = image
        }

        var audio = $(this).find('.file-item span').text();

        if (!audio) {

            $(this).find('.rs-video-file').css('border-color', 'red');
            error = true;

        } else {
            videoItem.file = audio
        }

        rsvideos.push(videoItem)
    });






    var data = {
        category_id: category,
        "en": {
            "lesson_name": name,
            "problem_statement": problem_statement,
            "description": description,
            "lesson_image": image,
            "day_identifier": day,
            "text_one": textOne,
            "audio_clips": audios,
            "video_clips": videos,
            "text_two": textTwo
        },
        "ru": {

            "lesson_name": russianname,
            "problem_statement": russianproblem_statement,
            "description": russiandescription,
            "lesson_image": russianimage,
            "day_identifier": russinaday,
            "text_one": rstextOne,
            "audio_clips": rsaudios,
            "video_clips": rsvideos,
            "text_two": rstextTwo
        }

    }
    if (editid !== null) {
        data.id = $('input#enid').val()

    }

    if (error == false) {
        $('.loader').addClass('active')
        $.ajax({
            url: url + '/lesson',
            type: 'POST',
            data: data,
            success: function(data) {
                alert('Lesson model added');
                if (window.location.href.includes('localhost')) {
                    window.location.pathname = "admin/admin/lessons.php"
                } else {
                    window.location.pathname = "admin/admin/lessons.php"
                }
                $('.loader').removeClass('active')
            },
            error: function(data) {
                $('.loader').removeClass('active')
                alert('Something went wromg');
            }
        });
    }

    console.log(data)

});

$('#same_as_eng').change(function() {
    if ($(this).is(":checked")) {

        $('#rs-name').val($('#name').val());
        $('#rs-problem_statement').val($('#problem_statement').val());
        $('#rs-description').val($('#description').val());
        $('.rs-image').empty()
        if ($('.lesson-image img').attr('src')) {
            $('.rs-image').append('<img src="' + $('.lesson-image img').attr('src') +
                '" width="50"/>');
        }
        $('#rs-day_identifier').val($('#day_identifier').val());
        $('.rs-text_one .ql-editor').html($('.text_one .ql-editor').html())
        $('.rs-text_two .ql-editor').html($('.text_two .ql-editor').html())

        var audios = [];
        $('.audio-group').find('.audio-item').each(function() {

            var audioItem = {}

            if ($(this).find('.audio-name').val() == '') {} else {
                audioItem.name = $(this).find('.audio-name').val()
            }
            var image = $(this).find('.image-box img').attr('src');

            if (!image) {


            } else {
                audioItem.image = image
            }

            var audio = $(this).find('.file-item span').text();

            if (!audio) {



            } else {
                audioItem.file = audio

            }
            audios.push(audioItem)
        });
        var videos = [];


        $('.rs-audio-group').empty()
        audios.map(item => {
            $('.rs-audio-group').append(`<div class="rs-audio-item js-item">
                            <div class="form-group">
                                <label>Audio Name :</label>
                                <input class="form-control rs-audio-name" value="${item.name}" type="text">
                            </div>
                            <div class="form-group">
                                <div class="image-box rs-audio-image">
                                <img src="${item.image}" width="50">
                                </div>
                                <label>Audio Image :</label>
                                <input class="form-control upload-image rs-audio-image" type="file" accept="image/*">
                            </div>
                            <div class="form-group">
                                <div class="file-box rs-audio-file">
                                <div class="file-item" data-src="${item.file}">
                        <span>${item.file}</span>
                        <audio controls="">
          <source src="${item.file}" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio></div>
                                </div>
                                <label>Audio File :</label>
                                <input class="form-control rs-audio-file upload-audio" type="file">
                            </div>
                            <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                        </div>`)
        })


        $('.video-group').find('.video-item').each(function() {
            var videoItem = {}
            if ($(this).find('.video-name').val() == '') {


            } else {
                videoItem.name = $(this).find('.video-name').val()
            }
            var image = $(this).find('.image-box img').attr('src');

            if (!image) {

            } else {
                videoItem.image = image
            }

            var audio = $(this).find('.file-item span').text();

            if (!audio) {



            } else {
                videoItem.file = audio
            }

            videos.push(videoItem)
        });



        $('.rs-video-group').empty();
        videos.map(item => {
            $('.rs-video-group').append(`<div class="rs-video-item js-item">
                            <div class="form-group">
                                <label>Video Name :</label>
                                <input class="form-control rs-video-name" value="${item.name}" type="text">
                            </div>
                            <div class="form-group">
                                <div class="image-box rs-video">
                                <img src="${item.image}" width="50">   
                                </div>
                                <label>Video Image :</label>
                                <input class="form-control upload-image rs-video-image" type="file" accept="image/*">
                            </div>
                            <div class="form-group">
                                <div class="file-box rs-video-file">
                                <div class="file-item" data-src="${item.file}">
                        <span>${item.file}</span><video width="300" controls="">
          <source src="${item.file}">
        Your browser does not support the video element.
        </video></div>
                                </div>
                                <label>Video File :</label>
                                <input class="form-control rs-video-file upload-video" type="file">
                            </div>
                            <button type="button" class="btn  btn-danger remove_btn">Remove</button>
                        </div>`)
        })

    } else {
        $('#rs-name').val('');
        $('#rs-problem_statement').val('');
        $('#rs-description').val('');
        $('.rs-image').empty()

        $('#rs-day_identifier').val('');
        $('.rs-text_one .ql-editor').html('')
        $('.rs-text_two .ql-editor').html('')
        $('.rs-audio-group').empty()
        $('.rs-audio-group').append(rsaudioElemnt);
        $('.rs-video-group').empty();
        $('.rs-video-group').append(rsvideoElemnt)


    }
});





$(document).on('click', '.remove_btn', function() {
    $(this).closest('.js-item').remove();
});
var quill = new Quill('.text_one', {
    theme: 'snow'
});
var quill = new Quill('.text_two', {
    theme: 'snow'
});

var quill = new Quill('.rs-text_one', {
    theme: 'snow'
});
var quill = new Quill('.rs-text_two', {
    theme: 'snow'
});
</script>