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

// // Hiding scroll to top button
// window.onscroll = () => {
//     const scrollToTop = document.getElementById('BtnScrollToTop');
//     if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
//         scrollToTop.style.display = "flex";
//     }
//     else {
//         scrollToTop.style.display = "none";
//     }
// }

// //Jquery
// $('document').ready(function () {

//     // ScrollToTop
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 500) {
//             $('#BtnScrollToTop').fadeIn();
//         } else {
//             $('#BtnScrollToTop').fadeOut();
//         }
//     });

//     $('#BtnScrollToTop').click(function () {
//         $('html, body').animate({ scrollTop: 0 }, 300);
//         return false;
//     });
// });
