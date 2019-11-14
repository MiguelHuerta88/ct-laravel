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
                }
            });
        }
    }
};


$(document).ready(function(){
    buttons.init();

    $( "#sortable" ).sortable({
        update: function(event, ui) {
            // we will send an api request to update priority
            var newOrder = $("#sortable").sortable("toArray");
            var apiEndpoint = "/ct-laravel/ct-laravel/public/api/task/update/priority/";
            for(i = 0; i< newOrder.length; i++) {
                currentVal = newOrder[i];
                $.post({
                    url: apiEndpoint + newOrder[i],
                    data: {priority: (i+1)},
                });

                //console.log(newOrder[i]);
                var id = "tr#" + currentVal;
                $(id).find('td:first-child').text((i + 1));
            }
        }
    });
});
