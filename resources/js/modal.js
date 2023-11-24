
    document.addEventListener("DOMContentLoaded", function () {
    let openModalBtn = document.getElementById("openModalBtn");
    let myModal = document.getElementById("myModal");
    let closeModalBtn = myModal.querySelector('.modal-footer button[data-dismiss="modal"]');


    let modalState = localStorage.getItem("modalState");
    if (modalState === "open") {
    myModal.classList.add("show");
    myModal.style.display = "block";
    document.body.classList.add("modal-open");
}

    openModalBtn.addEventListener("click", function () {
    myModal.classList.add("show");
    myModal.style.display = "block";
    document.body.classList.add("modal-open");

    localStorage.setItem("modalState", "open");
});

    closeModalBtn.addEventListener("click", function () {

    myModal.classList.remove("show");
    myModal.style.display = "none";
    document.body.classList.remove("modal-open");
    localStorage.removeItem("modalState");
});
});

