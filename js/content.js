jQuery(function () {
    var slider;
    var output;

    slider = $('#myRange0, #myRange1, #myRange2');
    output = $('#demo0, #demo1, #demo2');

    for (let i = 0; i < slider.length; i++) {
        $("#" + output[i]['id']).text($('#' + slider[i]['id']).val());
    }

    slider.on('input', function () {
        var id = $(this)[0]['attributes']['vls']['value'];
        $("#" + output[id]['id']).text($(this).val());
    });
});