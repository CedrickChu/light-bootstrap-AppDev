document.addEventListener('DOMContentLoaded', function() {
    const themeToggleBtns = document.querySelectorAll('#theme-toggle');
    const sidebar = document.querySelector('.sidebar');

    themeToggleBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            // Toggle background color of .sidebar
            if (sidebar) {
                sidebar.style.backgroundColor = (sidebar.style.backgroundColor === '#AA8B56') ? '' : '#AA8B56';
            }
        });
    });
});
