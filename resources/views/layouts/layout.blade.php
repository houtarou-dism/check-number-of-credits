<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <title>単位取得数チェック</title>

    <!-- CSS-->
    <link rel="stylesheet" href="{{ asset('//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,700') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-5.13.0/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>

@yield('content')

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>

    const name = $("input[name='item']");
    const freshmanSubmitBtn = $("#freshman-submit-btn");
    const sophomoreSubmitBtn = $("#sophomore-submit-btn");
    const juniorSubmitBtn = $("#junior-submit-btn");
    const checkSubmitBtn = $("#check-submit-btn");
    const freshmanConfirmationSubmitBtn = $("#confirmation-freshman-submit-button");
    const sophomoreConfirmationSubmitBtn = $("#confirmation-sophomore-submit-button");
    const juniorConfirmationSubmitBtn = $("#confirmation-junior-submit-button");
    const seniorConfirmationSubmitBtn = $("#confirmation-senior-submit-button");
    let storage = sessionStorage;

    name.on("keypress", function (e) {
        if (e.which === 13) {
            return false;
        }
    });

    $("#select-submit-btn").on("click", function() {

        storage.clear();        //storageの全削除

        setTimeout(function(){
            $("#select-submit-btn").prop("disabled", true);
        },1);

        setTimeout(function(){
            $("#select-submit-btn").prop("disabled", false);
        },3000);
    });

    function checkboxData(select_year) {

        let data = [];
        let keyData = 0;
        let frm = document.getElementById(select_year);

        for(let i=0; i<frm.item.length; i++){
            if(frm.item[i].checked){
                data[keyData] = frm.item[i].value;
                keyData++;
            }
        }

        storage.setItem(select_year,  JSON.stringify(data));
    }

    freshmanSubmitBtn.one("click", function() {

        freshmanSubmitBtn.removeClass('submit-btn');
        freshmanSubmitBtn.addClass('submit-btn-disabled');

        checkboxData('freshman');
    });

    sophomoreSubmitBtn.one("click", function() {

        sophomoreSubmitBtn.removeClass('submit-btn');
        sophomoreSubmitBtn.addClass('submit-btn-disabled');

        checkboxData('sophomore');
    });

    juniorSubmitBtn.one("click", function() {

        juniorSubmitBtn.removeClass('submit-btn');
        juniorSubmitBtn.addClass('submit-btn-disabled');

        checkboxData('junior');
    });

    freshmanConfirmationSubmitBtn.on("click", function() {

        checkboxData('freshman');

        let data = {
            data: {
                'freshman': JSON.parse(storage.getItem('freshman')),
            },
        }

        $('#check-form-freshman').val(JSON.stringify(data));
    });

    sophomoreConfirmationSubmitBtn.on("click", function() {

        checkboxData('sophomore');

        let data = {
            data: {
                'freshman': JSON.parse(storage.getItem('freshman')),
                'sophomore': JSON.parse(storage.getItem('sophomore')),
            },
        }

        $('#check-form-sophomore').val(JSON.stringify(data));
    });

    juniorConfirmationSubmitBtn.on("click", function() {

        checkboxData('junior');

        let data = {
            data: {
                'freshman': JSON.parse(storage.getItem('freshman')),
                'sophomore': JSON.parse(storage.getItem('sophomore')),
                'junior': JSON.parse(storage.getItem('junior')),
            },
        }

        $('#check-form-junior').val(JSON.stringify(data));
    });

    seniorConfirmationSubmitBtn.on("click", function() {

        checkboxData('senior');

        let data = {
            data: {
                'freshman': JSON.parse(storage.getItem('freshman')),
                'sophomore': JSON.parse(storage.getItem('sophomore')),
                'junior': JSON.parse(storage.getItem('junior')),
                'senior': JSON.parse(storage.getItem('senior')),
            },
        }

        $('#check-form-senior').val(JSON.stringify(data));
    });

    checkSubmitBtn.one('click', function () {

        setTimeout(function(){
            checkSubmitBtn.prop("disabled", true);
        },1);

        storage.clear();
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    })


</script>

</body>
</html>
