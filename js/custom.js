$(function () {
    $("[rel='tooltip']").tooltip();
});

$(function () {
    if(navigator.userAgent.toLowerCase().indexOf('windows') != -1) {
        $('form input#paypal').attr('value', '7TAQE4SM2FH6L');
        $('form input#platform').attr('value', 'Windows');
    }
    else if(navigator.userAgent.toLowerCase().indexOf('mac') != -1) {
        $('form input#paypal').attr('value', '4914397');
        $('form input#platform').attr('value', 'Mac');
    }
    else {
        $('form input#paypal').attr('value', '4914397');
        $('form input#platform').attr('value', 'Mac');
    }
});
