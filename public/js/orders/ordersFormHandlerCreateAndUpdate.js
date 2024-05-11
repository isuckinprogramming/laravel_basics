
function presentErrorMessage(inputId, errorMessage) {

}
function checkIfInputEmpty(inputId) {

    if ($("#" + inputId).val() == "") {

    }

}
const bootstrapDangerAlert= (message) => {
    return `<div class="fade show alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>${message}</strong>
    </div>`;
};
const errorAlertHtml = bootstrapDangerAlert("input is empty");
const notNumberAlertHtml = bootstrapDangerAlert("input must be a number");
const numberMustBeGreaterThanZero = bootstrapDangerAlert("input must be greater than 0");
function checKFormDataBeforeSubmission(nameOfInput,isNumber=false,isFloat=false) {

    const currentInputValue = $(`#input-${nameOfInput}`).val();
    if ( currentInputValue == "") {
        $(`#warning-message-container-${nameOfInput}`).html(errorAlertHtml);
        return;
    }

    if (isFloat || isNumber) {
        if (!typeof +currentInputValue == "number") {
            $(`#warning-message-container-${nameOfInput}`).html(notNumberAlertHtml);
        }
    }
    if(isNumber) {

    }
}
function checkIfNumber(nameOfInput) {

    if ( typeof $(`#input-${nameOfInput}`).val() == number  ) {
        $(`#warning-message-container-${nameOfInput}`).html(errorAlertHtml);
    } else {
        $(`#warning-message-container-${nameOfInput}`).html("");
    }
}
function serverResponseToFormData() {

}

$("#button-submit-update-data").on(
    "click",
    function (e) {
        e.preventDefault();

        checKFormDataBeforeSubmission("order-name");
        checKFormDataBeforeSubmission("order-price");
        checKFormDataBeforeSubmission("order-quantity");
        checKFormDataBeforeSubmission("order-category-id");

        setTimeout(
            function () {
                $(".warning-container-order-input").empty();
            },
            3000
        );

        const formData = new

    }
)
