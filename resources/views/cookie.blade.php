
<div class="cookie-panel" style=" position: fixed; bottom: 0; left: 0; width: 100%; background-color: #0d6efd; color: #fff; padding: 10px; display: none;" id="cookiePanel">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                Этот сайт использует куки для улучшения вашего опыта.
            </div>
            <div class="col-md-4 text-right">
                <button class="cookie-btn" style="background-color: #fff; color: #0d6efd;  border: none;  padding: 5px 10px;  cursor: pointer;" onclick="acceptCookies()">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Проверяем, были ли куки уже приняты
        if (getCookie('cookiesAccepted') !== 'true') {
            // Если нет, показываем панель
            document.getElementById('cookiePanel').style.display = 'block';
        }
    });

    function acceptCookies() {
        // Устанавливаем куку с именем 'cookiesAccepted' и значением 'true' на 30 дней
        setCookie('cookiesAccepted', 'true', 30);

        // Скрываем панель
        document.getElementById('cookiePanel').style.display = 'none';
    }

    // Функция для установки куки
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    // Функция для получения значения куки по имени
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
</script>
