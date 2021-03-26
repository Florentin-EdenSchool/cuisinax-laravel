$("form").hide();

$(".btn-success").click(function(event) {
    $("form").hide();
    event.target.nextElementSibling.style.display = "block";
});