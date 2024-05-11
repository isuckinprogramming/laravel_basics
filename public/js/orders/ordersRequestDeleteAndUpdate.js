$(".delete-trigger").on(
    "click",
    function(){
        const entryId =  $(this).data("entry-id")
        window.location = "delete-order-entry?id=" + entryId;
    }
)

$(".update-trigger").on(
    "click",
    function () {
        console.log(this);
        const entryId = $(this).data("entry-id")
        console.log("entry id : " + entryId);

        $.ajax({
            method: "GET",
            url: "request-update-order-entry",
            data: { id: entryId },
            dataType: "JSON",
            success: function (response) {
                console.log("\nentry update start: " + entryId, response)
                window.location = "load-update-page?session_data_key=" + response.session_data_key;
            },
            error: function (e) {
                // case wherein the data does not exist in the database
                // or some error occurs. IDK if it is possible to use this function
                console.log(e);
            }
        });
    }
);
