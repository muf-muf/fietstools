<h4>Kettinglengte berekenen</h4>
<form class="row g-3">
    <span>Geef de lengte vanaf <b>midden van de cassette</b> tot het <b>midden van het crankstel</b> in <b><u>centimeters</u></b>:</span>
    <div class="input-group">
        <span class="input-group-text" id="form__cassette-tot-crankstel--cm"><span><b>Centimeters:</b></span></span>
        <input type="number" class="form-control text-end" id="input-chainlength__cassetteCm" placeholder=0 min=0 oninput="calcChainLength()" required aria-label="Tanden tandwiel voor" aria-describedby="form__cassette-tot-crankstel--cm">
    </div>

    <span>Geef het aantal tanden van de <b><u>grote</u></b> tandwielen:</span>
    <div class="input-group">
        <span class="input-group-text" id="form__tandwiel--groot-voor"><span><b>Voor:</b></span></span>
        <input type="number" class="form-control text-end" id="input-chainlength__cogFront" placeholder=0 min=0 step=1 oninput="calcChainLength()" required aria-label="Tanden tandwiel voor" aria-describedby="form__tandwiel--groot-voor">
        <span class="input-group-text" id="form__tandwiel--groot-achter"><span><b>Achter:</b></span></span>
        <input type="number" class="form-control text-end" id="input-chainlength__cogBack" placeholder=0 min=0 step=1 oninput="calcChainLength()" required aria-label="Tanden tandwiel achter" aria-describedby="form__tandwiel--groot-achter">
    </div>
</form>
<hr>

<div class="container form-results text-end">
    <div class="row">
        <div class="col-8 text-end">Lengte midden cassette tot midden crankstel:</div>
        <div class="col text-end text-end"><span id="form-result__value--cassette-crank-cm">0</span>cm</div>
    </div>
    <div class="row">
        <div class="col-8 text-end">=</div>
        <div class="col text-end"><span id="form-result__value--cassette-crank-inches">0</span>in</div>
    </div>
    <br>
    <div class="row">
        <div class="col-8 text-end">Aantal inches x 2</div>
        <div class="col text-end"><span id="form-result__value--doubled-inches">0</span>in</div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-6"><hr></div>
    </div>
    <div class="row">
        <div class="col-9 text-end">Tanden groot tandwiel voor / 4</div>
        <div class="col text-end"><span id="form-result__value--cog-large-front--divided">0</span>in</div>
    </div>
    <div class="row">
        <div class="col-9 text-end">Tanden groot tandwiel achter / 4</div>
        <div class="col text-end"><span id="form-result__value--cog-large-back--divided">0</span>in</div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-6"><hr></div>
    </div>
    <div class="row">
        <div class="col-8 text-end">Subtotaal</div>
        <div class="col text-end"><span id="form-result__value--subtotal">0</span>in</div>
    </div>
    <br>
    <div class="row"><div class="col-8 text-end">+1 inch</div>
        <div class="col text-end"><span id="form-result__value--added-one-inch">0</span>in</div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-6"><hr></div>
    </div>
    <div class="row">
        <div class="col-8 text-end">Totaal inch</div>
        <div class="col text-end"><span id="form-result__value--total-inches">0</span>in</div>
    </div>
    <div class="row">
        <div class="col-8 text-end">Totaal cm</div>
        <div class="col text-end form-result__highlight"><span id="form-result__value--total-cm">0</span>cm</div>
    </div>
    <br>
    <div class="row">
        <div class="col text-end form-result__highlight">Rond het aantal schakels af naar boven!</div>
    </div>
</div>

<hr>

<h4>Reken cm naar inch en andersom</h4>
<form>
    <div class="input-group">
        <span class="input-group-text" id="cm-label"><span><b>cm:</b></span></span>
        <input type="number" class="form-control text-end" id="cm" placeholder=0 aria-label="centimeters" aria-describedby="cm-label" oninput="cmToInches()" required>
        <span class="input-group-text" id="inches-label"><span><b>inch:</b></span></span>
        <input type="number" class="form-control text-end" id="inches" placeholder=0 aria-label="inches" aria-describedby="inches-label" oninput="inchesToCm()" required>
    </div>
</form>

<hr>

<div class="card text-bg-info">
    <div class="card-body">
        <h6 class="card-title">Let op!</h6>
        <p class="card-text">Het is mogelijk dat deze pagina niet (altijd) goed functioneert. Het is je eigen verantwoordelijkheid om ervoor te zorgen dat je de juiste kettinglengte gebruikt.</p>
    </div>
</div>
