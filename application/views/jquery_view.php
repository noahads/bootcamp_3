<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE HTML>
<html>

<head>
    <script src='<?= base_url(); ?>assets/js/jquery.js'></script>

    <script>
        $(document).ready(function() {
            let name1; let name2;

            $('#test').click(function() {
                let name = $('.input_nama').val();
                let gender = $(this).data('gender');
                alert(gender);

                if(name == '1') {
                    name = 'william';
                } else {
                    name = 'rizky';
                }

                $('.result').html('Nama adalah: ' + name);
            });

            $('.operator_old').click(function() {
                let num1 = parseInt($('.input_1').val());
                let num2 = parseInt($('.input_2').val());

                let opt = $(this).data('opt');
                let result;

                switch(opt) {
                    case '*':
                        result = num1 * num2;
                        break;
                    case '/':
                        result = num1 / num2;
                        break;
                    case '+':
                        result = num1 + num2;
                        break;
                    case '-':
                        result = num1 - num2;
                        break;
                }

                $('.result').html(result);

                $(this).css({
                    'background': 'red',
                    'color': 'white',
                    'display': 'hidden'
                });

                $(this).hide();
                $(this).show();

                $('.result').fadeToggle(2000);
            });

            $('.operator').click(function() {
                let number1 = parseInt($('.input_1').val());
                let number2 = parseInt($('.input_2').val());
                let operator = $(this).data('opt');

                $.post('/bootcamp/jquery_controller/post_ajax',
                {
                    num1: number1,
                    num2: number2,
                    opt: operator
                }, function(hasilapapu) {
                    $('.result_ajax').html(hasilapapu);
                });

                // Client side
                switch(operator) {
                    case '*':
                        result = number1 * number2;
                        break;
                    case '/':
                        result = number1 / number2;
                        break;
                    case '+':
                        result = number1 + number2;
                        break;
                    case '-':
                        result = number1 - number2;
                        break;
                }

                $('.result').html('This is client side result: ' + result);
            });

        });
    </script>

    <style>
    </style>
</head>

<body>
    <input 
        type='text'
        class='input_1'
        id='inputtest'
    />

    <input 
        type='text'
        class='input_2'
        id='inputtest2'
    />

    <div>
        <button 
            class='operator'
            data-opt='*'
        >
            X
        </button>

        <button 
            class='operator'
            data-opt='/'
        >
            /
        </button>

        <button 
            class='operator'
            data-opt='+'
        >
            +
        </button>

        <button 
            class='operator'
            data-opt='-'
        >
            -
        </button>
    </div>

    <button
        class='load_ajax'
    >
        Ajax
    </button>

    <div
        class='result'
        style='
            width: 200px;
            height: 200px;
            background: red;
            display: inline-block;
            color: white;
        '
    ></div>

    <div
        class='result_ajax'
        style='
            width: 200px;
            height: 200px;
            background: blue;
            display: inline-block;
            color: white;
        '
    ></div>

</body>
</html>