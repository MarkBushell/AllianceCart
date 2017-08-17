Stripe.setPublishableKey('pk_test_123456789123456789');

var $aiform = $('#aicheckout-form');

$aiform.submit(function(event) {
    $('#aicharge-error').addClass('hidden');
    $aiform.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#aicharge-error').removeClass('hidden');
        $('#aicharge-error').text(response.error.message);
        $aiform.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $aiform.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $aiform.get(0).submit();
    }
}
