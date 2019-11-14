var buttons = {
    init: function(){
        // page has to have the buttons in order to continue
        if (!$('.btn.btn-danger').length) return;

        $(".btn-danger").on('click', function(){
            buttons.helpers.delete($(this));
        });
    },
    helpers: {
        delete: function(elem) {
            // build the ajax request to delete from DB
            var route = "/ct-laravel/ct-laravel/public/api/task/delete/" + $(elem).data('id');

            $.get({
                url: route,
                success: function() {
                    // remove the record from the browser
                    elem.parent().parent().remove();
                },
            });
        }
    }
};


$(document).ready(function(){
    buttons.init();
});
