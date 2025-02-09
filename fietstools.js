function calcChainLength() {
    let cassetteInputCM = document.getElementById("input-chainlength__cassetteCm").value;
    let cogFrontInput = document.getElementById("input-chainlength__cogFront").value;
    let cogBackInput = document.getElementById("input-chainlength__cogBack").value;

    let inchFactor = 0.393701;
    let cassetteInputCMRounded = (parseFloat(cassetteInputCM)).toFixed(2);
    let cassetteInputInch = (cassetteInputCM * inchFactor).toFixed(2);
    let doubledInches = (cassetteInputInch * 2).toFixed(2);
    let cogFrontDivided = (cogFrontInput / 4).toFixed(2);
    let cogBackDivided = (cogBackInput / 4).toFixed(2);
    let subtotal = (parseFloat(doubledInches) + parseFloat(cogFrontDivided) + parseFloat(cogBackDivided)).toFixed(2);
    let addToSubtotal = 1;
    let totalInches = (parseFloat(subtotal) + addToSubtotal).toFixed(2);
    let totalCM = (parseFloat(totalInches) / inchFactor).toFixed(2);

    document.getElementById("form-result__value--cassette-crank-cm").innerHTML = cassetteInputCMRounded;
    document.getElementById("form-result__value--cassette-crank-inches").innerHTML = cassetteInputInch;
    document.getElementById("form-result__value--doubled-inches").innerHTML = doubledInches;
    document.getElementById("form-result__value--cog-large-front--divided").innerHTML = cogFrontDivided;
    document.getElementById("form-result__value--cog-large-back--divided").innerHTML = cogBackDivided;
    document.getElementById("form-result__value--subtotal").innerHTML = subtotal;
    document.getElementById("form-result__value--added-one-inch").innerHTML = addToSubtotal;
    document.getElementById("form-result__value--total-inches").innerHTML = totalInches;
    document.getElementById("form-result__value--total-cm").innerHTML = totalCM;
}

function cmToInches() {
    let cmInput = document.getElementById("cm").value.trim();

    if (cmInput === "") {
        document.getElementById("inches").value = "";
    } else {
        let cm = parseFloat(cmInput);
        if (!isNaN(cm)) {
            document.getElementById("inches").value = (cm * 0.393701).toFixed(2);
        }
    }
}

function inchesToCm() {
    let inchesInput = document.getElementById("inches").value.trim();

    if (inchesInput === "") {
        document.getElementById("cm").value = "";
    } else {
        let inches = parseFloat(inchesInput);
        if (!isNaN(inches)) {
            document.getElementById("cm").value = (inches / 0.393701).toFixed(2);
        }
    }
}
