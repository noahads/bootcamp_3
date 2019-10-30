<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html>

<head>
    <script src='<?= base_url(); ?>assets/js/jquery.js'></script>

    <script>
        $(document).ready(function() {
            // Search btn click
            $('#btn_search').click(function() {
                let search = $('#input_search').val();
                let gender = $('#select_gender').val();

                $.post('/bootcamp/jquery_controller/search',
                {
                    src: search,
                    gndr: gender
                }, function(hasil) {
                    $('#result').html(hasil);
                });
            });

            // Table row clicked
            $('body').delegate('.table_row', 'click', function() {
                let user_pid = $(this).data('user_pid');
                
                $.post('/bootcamp/jquery_controller/get_detail',
                {
                    pid: user_pid
                }, function(result) {
                    console.log(result);

                    let obj = JSON.parse(result);
                    $('#detail_name').html(obj.user_name);
                    $('#detail_age').html(obj.user_age);
                });
            });
        });
    </script>
</head>

<body>

    <div
        class='container_filter'
    >
        <input 
            type='text'
            placeholder='Name / Address'
            id='input_search'
        />

        <select id='select_gender'>
            <option value=''>Please Select</option>
            <option value='0'>Female</option>
            <option value='1'>Male</option>
        </select>

        <button
            id='btn_search'
        >
            Search
        </button>
    </div>

    <div 
        id='result'
        style='
            border: 1px solid #e0e0e0;
            width: 600px;
            height: 400px;
            margin-left: 150px;
            margin-top: 20px;
        '
    >
        <!-- Table.php akan di dalam sini -->
    </div>

    <div
        id='detail_name'
        style='
            background: blue;
            color: white;
            width: 100px;
            height: 50px;
        '
    ></div>

    <div
        id='detail_age'
        style='
            background: green;
            color: white;
            width: 100px;
            height: 50px;
        '
    ></div>

</body>

</html>