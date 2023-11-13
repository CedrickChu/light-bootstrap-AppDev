
document.addEventListener("DOMContentLoaded", function () {
fetch('./template/sidebar.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('sidebarContainer').innerHTML = data;

    });
    });
