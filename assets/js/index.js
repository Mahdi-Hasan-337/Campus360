document.addEventListener('DOMContentLoaded', function() {
    var alertContainer = document.querySelector('.alert-container');
    if (alertContainer) {
        alertContainer.classList.add('show');
        setTimeout(function() {
            alertContainer.classList.remove('show');
        }, 3000);
    }
});