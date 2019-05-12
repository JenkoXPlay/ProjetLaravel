$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(event, "#main");
});