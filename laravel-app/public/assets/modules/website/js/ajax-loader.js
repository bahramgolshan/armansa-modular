/* events */
$(document).ajaxSend(function (event, jqxhr, settings) {
    showAjaxLoader();
});

$(document).ajaxSuccess(function (event, jqxhr, settings) {
    hideAjaxLoader();
});

/* functions */
function showAjaxLoader() {
    $("#ajax-loading").show();
}

function hideAjaxLoader() {
    $("#ajax-loading").hide();
}
