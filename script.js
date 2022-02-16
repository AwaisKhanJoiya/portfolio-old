$(document).ready(function() {
    $(window).scroll(function() {
        if (this.scrollY > 30) {
            $(".navbar").addClass("active-nav");
            $(".main_alert").addClass("none");
        } else {
            $(".navbar").removeClass("active-nav");
        }
        if (this.scrollY > 400) {
            $(".scroll-up-btn").addClass("show");
        } else {
            $(".scroll-up-btn").removeClass("show");
        }
    });
    var typed = new Typed(".typing", {
        strings: [
            "Freelancer",
            "Web Developer",
            "Wordpress Developer",
            "SEO Expert",
        ],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
    });
    var typed = new Typed(".typing-2", {
        strings: [
            "Freelancer",
            "Web Developer",
            "Wordpress Developer",
            "SEO Expert",
        ],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true,
    });
    $(".list-menu").click(function() {
        $(".navbar .menu").toggleClass("active-btn");
        $(".list-menu i").toggleClass("active-btn");
    });
    $("i").click(function() {
        $(".main_alert").addClass("none");
    });
    $(".btn-2").click(function() {
        $("section").toggleClass("active");
        $("nav").toggleClass("active");
        $(".more-info").toggleClass("active");
    });
});