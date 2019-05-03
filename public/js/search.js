$(document).ready(function () {
    $("#search").submit(function (e) {
        e.preventDefault();
        window.location.href = "/recherche/" + e.target.elements[0].value;
    });
});


$(document).pjax('[data-pjax] a, a[data-pjax]', '#main');
