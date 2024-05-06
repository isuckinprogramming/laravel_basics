

// $(document).on(
//     ".update-trigger",
//     "click",
// );
function passDataForCRUDRequest (){
    console.log(this);
    const entryId =  $(this).data("entry-id")
    console.log("entry id : " + entryId);

    $.ajax({
        method: "POST",
        url:"update-order-start",
        data: { id: entryId },
        dataType: "JSON",
        success: function (response) {

            console.log( response + "\nentry update start: " + entryId)
        },
        error: function (e) {
            console.log(e);
        }
    });
}

$(".update-trigger").on(
    "click",
    passDataForCRUDRequest
)

// $(".delete-trigger").on(
//     "click",
//     // passDataForCRUDRequest
// )
