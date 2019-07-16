$(document).ready(function () {
    $('.total').html('<p> 0 /year</p>');

    $('#calculate').on('click', refreshTotal);

    function refreshTotal(e) {
        e.preventDefault();
        var building_value = $('input[name="building_amount"]', '#form').val();
        var building_value = +numeral(building_value).value();
        if (isNaN(building_value)) building_value = 0;
        var content_value = $('input[name="content_amount"]', '#form').val();
        var content_value = +numeral(content_value).value();
        if (isNaN(content_value)) content_value = 0;
        var all_risk = $('input[name="risk_amount"]', '#form').val();
        var all_risk = +numeral(all_risk).value();
        if (isNaN(all_risk)) all_risk = 0;
        var domestic_value = $('input[name="domestic_amount"]', '#form').val();
        var domestic_value = +numeral(domestic_value).value();
        if (isNaN(domestic_value)) domestic_value = 0;
        var liability_value = $('input[name="liability_amount"]', '#form').val();
        var liability_value = +numeral(liability_value).value();
        if (isNaN(liability_value)) liability_value = 0;
        if (liability_value > 500000) {
            liability_value = liability_value - 500000
            liability_value = 0.0005 * liability_value
        } else {
            liability_value = 0;
        }

        var total = '';
        if (all_risk > 0) {
            if (building_value == 0 && content_value == 0 && domestic_value == 0 && liability_value == 0) {
                swal.fire('Error', 'All risk can\'t be the only cover.', 'error');
            }
        } else if (building_value == 0 && content_value == 0 && domestic_value == 0 && all_risk == 0 && liability_value == 0) {
            swal.fire('Error', 'Please choose a cover', 'error');
        } else {
            total = (0.0015 * building_value) + (0.01 * content_value) + (0.015 * all_risk) + (0.02253 * domestic_value) + (liability_value);
            console.log(total);
        }

        $('.total').html('<p>' + numeral(total).format('0,0') + '</p>');
        if (total) {
            $('html,body').animate({
                    scrollTop: $('.box-container1').offset().top
                },
                1000);
        }
    }
});
$('.row-section').hide();
$(function () {
    $('#property').change(function () {
        $('.row-section').hide();
        $('.' + $(this).val()).show();
        $.each($('.row-section'), function () {
            if ($(this).is(':hidden')) {
                $('.row-section input[type="number"]').val('');
                $('.row-section input[type="checkbox"]').prop("checked", false);
                $('.row-section input[type="text"],input[type="number"]').prop("disabled", true);
            }
        });
    });
});