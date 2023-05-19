document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Formun otomatik gönderilmesini engelle

    var username = document.getElementsByName('username')[0].value;
    var password = document.getElementsByName('password')[0].value;

    // AJAX ile PHP'ye POST isteği gönder
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                window.location.href = 'anasayfa.html?username=' + response.username;
            } else {
                document.getElementById('message').innerHTML = 'Kullanıcı adı veya şifre yanlış!';
            }
        }
    };
    var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
    xhr.send(data);
});
