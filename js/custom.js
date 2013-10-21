$(function () {
    $("[rel='tooltip']").tooltip();
});

$(function () {
    if(navigator.userAgent.toLowerCase().indexOf('windows') > -1) {
        $('form input#paypal').attr('value', '7TAQE4SM2FH6L');
    }
    else {
        $('form input#paypal').attr('value', '4914397');
    }
});
