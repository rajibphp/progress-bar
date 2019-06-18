jQuery(document).ready(function (t) {
    var formid = t('form').attr('id');
    if (formid == 'submit-job-form') {
        addClass("li:nth-child(1)");
    }
    if (formid == 'job_preview') {
        addClass("li:nth-child(2)");
        addClassSpan("span:nth-child(2)", "Vorschau");

    } else if (formid == 'job_package_selection') {
        addClass("li:nth-child(2), li:nth-child(3)");
        addClassSpan("span:nth-child(2), span:nth-child(3)", "Paketauswahl");
    } else if (t('form').attr('class') == 'checkout_coupon woocommerce-form-coupon') {
        addClass("li");
        addClassSpan("span", "Checkout");
    }

    function addClass(elem) {
        t("ul " + elem).addClass("active");
    }

    function addClassSpan(elem, innerText) {
        t("li " + elem).addClass("active");
        t('li .progressBarTitle').html( innerText);
    }

});