// Navbar Scroll
$(function () {
    let str = window.location.href;
    if (str.match(/form.php|edit.php/)) {
        let get_navbar = document.querySelector(".fixed-top");
        get_navbar.style.backgroundColor = "#007bff";
    }
    else {
        $(document).scroll(function () {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    }
});