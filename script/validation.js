function validateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!inputText.match(mailformat)) {
        $("#email").removeClass("valid-input");
        $("#email").addClass("error-input");
        $("#eemail").css("display", "block");
        return false;
    } else {
        $("#email").addClass("valid-input");
        $("#email").removeClass("error-input");
        $("#eemail").css("display", "none");
        return true;
    }
}

function validateName(inputText) {
    if (inputText == "") {
        $("#name").removeClass("valid-input");
        $("#name").addClass("error-input");
        $("#ename").css("display", "block");
        return false;
    } else {
        $("#name").addClass("valid-input");
        $("#name").removeClass("error-input");
        $("#ename").css("display", "none");
        return true;
    }
}

function validatePan(inputText) {
    panformat = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    if (!inputText.match(panformat)) {
        $("#pan").removeClass("valid-input");
        $("#pan").addClass("error-input");
        $("#epan").css("display", "block");
        return false;
    } else {
        $("#pan").addClass("valid-input");
        $("#pan").removeClass("error-input");
        $("#epan").css("display", "none");
        return true;
    }
}

function validatePhone(inputText) {
    var phoneformat = /^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/;
    if (!inputText.match(phoneformat)) {
        $("#phone").removeClass("valid-input");
        $("#phone").addClass("error-input");
        $("#ephone").css("display", "block");
        return false;
    } else {
        $("#phone").addClass("valid-input");
        $("#phone").removeClass("error-input");
        $("#ephone").css("display", "none");
        return true;
    }
}

function validateComment(inputText) {
    if (inputText == "") {
        $("#comment").removeClass("valid-input");
        $("#comment").addClass("error-input");
        $("#ecomment").css("display", "block");
        return false;
    } else {
        $("#comment").addClass("valid-input");
        $("#comment").removeClass("error-input");
        $("#ecomment").css("display", "none");
        return true;
    }
}

function validate() {
    validateName($("#name").val());
    validatePhone($("#phone").val());
    validateEmail($("#email").val());
    validatePan($("#pan").val());
}

function validateQuery() {
    validateName($("#name").val());
    validateEmail($("#email").val());
    validateComment($("#comment").val());
}