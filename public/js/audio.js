$(document).ready(function() {
    $("#main").on("click", "a.chanson", function (e) {
        e.preventDefault();
        let audio = $("#audio");
        let f = $(this).attr('data-file');
        console.log(f);
        audio[0].src = f;
        audio[0].load();
        audio[0].play();
    });
});