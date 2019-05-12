$(document).ready(function () {
    $("#search").submit(function (e) {
        e.preventDefault();
        if ($.support.pjax) {
            $.pjax({url: "/recherche/" + e.target.elements[0].value, container: "#main"});
        } else {
            window.location.href = "/recherche/" + e.target.elements[0].value;
        }
    });
});


$(document).pjax('a[data-pjax]', '#main');
