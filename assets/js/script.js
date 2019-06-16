jQuery(document).ready(function (t) {
    var formid = t('form').attr('id');
    if (formid == 'submit-job-form') {
        addClass("li:nth-child(1)");
        removeLi("li:nth-child(1)");
    }if (formid == 'job_preview') {
        addClass("li:nth-child(2)");
        removeLi("li:nth-child(1)");
        removeLi("li:nth-child(2)");

        t(".afterFormUl li:nth-child(2)").css("display", "none");
    } else if (formid == 'job_package_selection') {
        addClass("li:nth-child(2), li:nth-child(3)");
        removeLi("li:nth-child(1)");
        removeLi("li:nth-child(2)");
        removeLi("li:nth-child(3)");
    } else if (t('form').attr('class') == 'checkout_coupon woocommerce-form-coupon') {
        addClass("li");
        removeLi("li");
    }

    function addClass(elem) {
        t("ul " + elem).addClass("active").css("display", "block");
    }

    function removeLi(elem) {
        t(".afterFormUl " + elem).css("display", "none");
    }
});