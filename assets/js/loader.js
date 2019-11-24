var myLoader;
myLoader = myLoader || (function () {
    var pleaseWaitDiv = $('<div class="modal" id="pleaseWaitDialog" data-backdrop="false" data-keyboard="false"><div class="modal-body"><object type="image/svg+xml" data="./assets/img/loading.svg"> Your browser does not support SVG</object></div></div>');
    return {
        showPleaseWait: function() {
            pleaseWaitDiv.modal();
        },
        hidePleaseWait: function () {
            pleaseWaitDiv.modal('hide');
        },

    };
})();