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
    let storage = sessionStorage;
    let itemKey = 0;
    let data = [];

    name.on("keypress", function (e) {
        if (e.which === 13) {
            return false;
        }
    });

    $("#select-submit-btn").one("click", function() {

        storage.clear();

        setTimeout(function(){
            $("#select-submit-btn").prop("disabled", true);
        },1);

        storage.setItem('select', document.getElementById('year-select').value);
    });

    name.on("click", function() {

        let id =  $(this).attr("id");

        {{-- チェックボックスがtrue状態かつ選択されたチェックボックスの値がdataに格納されていなければ、dataに追加する --}}
        if(document.getElementById(id).checked && !(data[itemKey-1] === document.getElementById(id).value)){
            data[itemKey] = document.getElementById(id).value;
            itemKey++;
            console.log(data);
        }
    });

    freshmanSubmitBtn.one("click", function() {

        freshmanSubmitBtn.removeClass('submit-btn');
        freshmanSubmitBtn.addClass('submit-btn-disabled');

        storage.setItem('freshman', data);
    });

    sophomoreSubmitBtn.one("click", function() {

        sophomoreSubmitBtn.removeClass('submit-btn');
        sophomoreSubmitBtn.addClass('submit-btn-disabled');

        storage.setItem('sophomore', data);
    });

    juniorSubmitBtn.one("click", function() {

        juniorSubmitBtn.removeClass('submit-btn');
        juniorSubmitBtn.addClass('submit-btn-disabled');

        storage.setItem('junior', data);
    });

    $("#confirmation-freshman-submit-button").on("click", function() {

        storage.setItem('freshman', data);

        let element = document.getElementById('check-form');
        element.insertAdjacentHTML('beforeend', '<input type="hidden" name="freshman" value="'+storage.getItem('freshman')+'">');

    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    })


</script>

</body>
</html>
