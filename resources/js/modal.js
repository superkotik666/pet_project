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
