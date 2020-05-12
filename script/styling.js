new WOW().init();

function toggleRegprocessContent1() {
    if ($("#cont1").css("display") == "flex") {
        $("#cont1").css("display", "none");
        $("#expicon1").css("transform", "rotate(360deg)");
    } else {
        $("#cont1").css("display", "flex");
        $("#expicon1").css("transform", "rotate(180deg)");
    }
}

function toggleRegprocessContent2() {
    if ($("#cont2").css("display") == "flex") {
        $("#cont2").css("display", "none");
        $("#expicon2").css("transform", "rotate(360deg)");
    } else {
        $("#cont2").css("display", "flex");
        $("#expicon2").css("transform", "rotate(180deg)");
    }
}

function toggleRegprocessContent3() {
    if ($("#cont3").css("display") == "flex") {
        $("#cont3").css("display", "none");
        $("#expicon3").css("transform", "rotate(360deg)");
    } else {
        $("#cont3").css("display", "flex");
        $("#expicon3").css("transform", "rotate(180deg)");
    }
}

function toggleRegprocessContent4() {
    if ($("#cont4").css("display") == "flex") {
        $("#cont4").css("display", "none");
        $("#expicon4").css("transform", "rotate(360deg)");
    } else {
        $("#cont4").css("display", "flex");
        $("#expicon4").css("transform", "rotate(180deg)");
    }
}

function toggleMenu() {
    if ($(".menu").css("visibility") == "visible") {
        $(".menu").css("visibility", "hidden");
        $(".menu").css("left", "-100%");
        $("html").css("overflow-y", "scroll");
    } else {
        $(".menu").css("visibility", "visible");
        $(".menu").css("left", "0");
        // prevent scrolling the body
        $("html").css("overflow-y", "hidden");
    }
}

function closeModal() {
    $(".regmodal").css("transform", "translateY(270%)");
    // $(".regmodal").css("display", "none");
    $(".mask").css("display", "none");
    $("html").css("overflow-y", "scroll");
}

// $(document).ready(function(){
//     let value, val1 = "Full Name", val2 = "Email", val3 = "Your query", val4 = "PAN Number", val5 = "Phone";
//     $("input, textarea").click(function() {
//         value = $(this).val();
//         if ($(this).val() == val1 || $(this).val() == val2 || $(this).val() == val3 || $(this).val() == val4 || $(this).val() == val5) {
//             $(this).val("");
//         }
//     });
//     $("input, textarea").focusout(function() {
//         if ($(this).val() == "") {
//             $(this).val(value);
//         }
//     });
// });