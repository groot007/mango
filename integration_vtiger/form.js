$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var data = {};

        form.find("input").each(function() {
            if ($(this).val() == "") {
                console.log("err");
            }
        })


    form.find('input').not('input[type=checkbox]').each(function() {
        var $el = $(this);
        var key = $el.attr('name');
        if (key) {
            data[key] = $el.val();
        }
    });
    form.find('input[type=checkbox]').each(function() {
        if ($(this).prop("checked")) {
            var key = $(this).attr('name');
            if (!data[key]) {
                data[key] = [];
            }
            if (key && $(this).val()) {
                data[key].push($(this).val());
            }
        }
    });
    var yaCounter = new Ya.Metrika();
    var yaCounterVal = yaCounter.getClientID();
    data['ClientidYM'] = yaCounterVal;
    var formURL = 'integration_vtiger/post.php';
    formURL = formURL.replace('//', '/');


    $.post(formURL, data).done(function(done) {
        form.find('input').not('input[type=hidden], input[type=checkbox]').each(function() {
            $(this).val('');
        });
    })
    .fail(function() {
        alert('not good');
    });

    return false;
    });
});