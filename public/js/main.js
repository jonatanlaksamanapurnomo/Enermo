$(document).ready(function () {
    //------- Mobile Nav  js --------//
    if ($("#nav-menu-container").length) {
        var $mobile_nav = $("#nav-menu-container").clone().prop({
            id: "mobile-nav",
        });
        $mobile_nav.find("> ul").attr({
            class: "",
            id: "",
        });
        $("body").append($mobile_nav);
        $("body").prepend(
            '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>'
        );
        $("body").append('<div id="mobile-body-overly"></div>');
        $("#mobile-nav")
            .find(".menu-has-children")
            .prepend('<i class="lnr lnr-chevron-down"></i>');

        $(document).on("click", ".menu-has-children i", function (e) {
            $(this).next().toggleClass("menu-item-active");
            $(this).nextAll("ul").eq(0).slideToggle();
            $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
        });

        $(document).on("click", "#mobile-nav-toggle", function (e) {
            $("body").toggleClass("mobile-nav-active");
            $("#mobile-nav-toggle i").toggleClass("fa-bars fa-times");
            $("#mobile-body-overly").toggle();
        });

        $(document).click(function (e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $("#mobile-nav-toggle i").toggleClass("fa-bars fa-times");
                    $("#mobile-body-overly").fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    $("#contact").submit(function (e) {
        e.preventDefault();
        let name = $("input[name=name]").val();
        let email = $("input[name=email]").val();
        let phone = $("input[name=phone]").val();
        let subject = $("input[name=subject]").val();
        let message = $("textarea[name=message]").val();
        let _token = $('meta[name="csrf-token"]').attr("content");
        console.log(phone);
        Swal.fire({
            title: "Loading..",
            html: "Processing Your Inquiry..",
            allowOutsideClick: false,
        });
        Swal.showLoading();
        $.ajax({
            url: "/contact",
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                message: message,
                _token: _token,
            },
            error: function (response) {
                console.log(response)
                Swal.close();
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong! Try again later!",
                });
            },
            success: function (response) {
                console.log(response);
                Swal.close();
                Swal.fire(
                    "Success!",
                    "Thank you for your interest in our products. We will proceed your inquiry.",
                    "success"
                );
                $("#contact")[0].reset();
            },
        });
    });
});
