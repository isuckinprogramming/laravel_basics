

// $(document).on(
//     ".update-trigger",
//     "click",
// );
function passDataForCRUDRequest (){
    console.log(this);
    const entryId =  $(this).data("entry-id")
    console.log("entry id : " + entryId);

    window.location = "update-entry-start?id=" + entryId;
    // $.ajax({
    //     method: "GET",
    //     url:"update-entry-start",
    //     data: { id: entryId },
    //     dataType: "JSON",
    //     success: function (response) {

    //         console.log(response + "\nentry update start: " + entryId)

    //         // document.getElementsByTagName("body").innerHtml = response.reponseText;
    //     },
    //     error: function (e) {
    //         console.log(e);
    //     }
    // });
}

$(".update-trigger").on(
    "click",
    passDataForCRUDRequest
)

$(".delete-trigger").on(
    "click",
    function(){
        const entryId =  $(this).data("entry-id")
        window.location = "delete-order-entry?id=" + entryId;
    }
)
// $(".delete-trigger").on(
//     "click",
//     // passDataForCRUDRequest
// )
