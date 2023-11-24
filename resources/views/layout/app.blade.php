<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

<title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


</head>
<body>
@yield('content')



<script>
    document.addEventListener("DOMContentLoaded", function () {
        var openModalBtn = document.getElementById("openModalBtn");
        var myModal = document.getElementById("myModal");
        var closeModalBtn = myModal.querySelector('.modal-footer button[data-dismiss="modal"]');

        openModalBtn.addEventListener("click", function () {
            // Показываем модальное окно
            myModal.classList.add("show");
            myModal.style.display = "block";

            // Добавляем класс "modal-open" к body
            document.body.classList.add("modal-open");
        });

        closeModalBtn.addEventListener("click", function () {
            // Скрываем модальное окно
            myModal.classList.remove("show");
            myModal.style.display = "none";

            // Удаляем класс "modal-open" из body
            document.body.classList.remove("modal-open");
        });
    });
</script>




</body>
</html>
