let stepButton = document.getElementById('buttonStep');
let stepTitle = document.getElementById('stepTitle');
let step = 0;
stepButton.addEventListener('click', (event) => {
    let step1 = document.getElementById('step1');
    let step2 = document.getElementById('step2');
    let step3 = document.getElementById('step3');
    let step4 = document.getElementById('step4');
    let step5 = document.getElementById('step5');
    step++
    if (step === 1) {
        step1.setAttribute('class', 'show-off step-flex');
        step2.setAttribute('class', 'show-on step-flex');
        stepTitle.textContent = 'étape 2 / 5'
        document.body.style.backgroundImage = "url('./img/backgroundStep2.jpg')";
    }
    if (step === 2) {
        step2.setAttribute('class', 'show-off step-flex');
        step3.setAttribute('class', 'show-on step-flex');
        stepTitle.textContent = 'étape 3 / 5'
        document.body.style.backgroundImage = "url('./img/backgroundStep3.jpg')";
    }
    if (step === 3) {
        step3.setAttribute('class', 'show-off step-flex');
        step4.setAttribute('class', 'show-on step-flex');
        stepTitle.textContent = 'étape 4 / 5'
        document.body.style.backgroundImage = "url('./img/bassin.jpg')";
    }
    if (step === 4) {
        step4.setAttribute('class', 'show-off step-flex');
        step5.setAttribute('class', 'show-on step-flex');
        stepTitle.textContent = 'étape 5 / 5';
        stepButton.setAttribute('class', 'show-off');
        document.body.style.backgroundImage = "url('./img/backgroundStep2.jpg')";
    }
})