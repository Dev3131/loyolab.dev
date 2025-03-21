document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function () {
        document.getElementById('contact-modal').style.display = 'block';
    }, 5000); // 10 seconds delay (10000 milliseconds)
});

document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('contact-modal').style.display = 'none';
});

