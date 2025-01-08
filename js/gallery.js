document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.btn[data-bs-toggle="collapse"]');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            const targetId = button.getAttribute('data-bs-target');
            const targetDiv = document.querySelector(targetId);

            // Remove active class from all buttons
            buttons.forEach(function (btn) {
                btn.classList.remove('active-button');
            });

            // Add active class to the clicked button
            button.classList.add('active-button');

            // Collapse all other divs except the target div
            const otherDivs = document.querySelectorAll('.collapse:not(' + targetId + ')');
            otherDivs.forEach(function (div) {
                div.classList.remove('show');
            });
        });
    });
});

