jQuery(document).ready(function (t) {
    var formid = t('form').attr('id');
    if (formid == 'job_preview') {
        addClass("li:nth-child(2)");
    } else if (formid == 'job_package_selection') {
        addClass("li:nth-child(2), li:nth-child(3)");
    } else if (t('form').attr('class') == 'checkout_coupon woocommerce-form-coupon') {
        addClass("li");
    }

    function addClass(elem) { console.log(elem);
        t("ul " + elem).addClass("active").css("display", "block");
    }
});