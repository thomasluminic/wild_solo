const stepNextButton = document.getElementById('buttonNextStep');
const stepPreviousButton = document.getElementById('buttonPreviousStep')
const arrayClassStep = document.getElementsByClassName('step');
const stepTitle = document.getElementById('stepTitle');
let step = 1;
stepNextButton.addEventListener('click', (event) => {
    let hideThisStep = step - 1;
    let showThisStep = step;
    arrayClassStep[hideThisStep].setAttribute('class', 'step show-off');
    arrayClassStep[showThisStep].setAttribute('class', 'step show-on step-flex');
    step++;
    stepTitle.textContent = 'étape ' + step + ' / 7';
    if (step === 7) {
        stepNextButton.setAttribute('class', 'show-off');
    }
    if (step === 2) {
        stepPreviousButton.setAttribute('class', 'show-on next-button');
    }
    console.log(step);
})
stepPreviousButton.addEventListener('click', () => {
    let hideThisStep = step - 1;
    let showThisStep = step - 2;
    arrayClassStep[hideThisStep].setAttribute('class', 'step show-off');
    if (step === 2) {
        stepPreviousButton.setAttribute('class', 'show-off next-button');
    }
    if (step === 7) {
        stepNextButton.setAttribute('class', 'show-on next-button');
    }
    arrayClassStep[showThisStep].setAttribute('class', 'step show-on step-flex');
    step--;
    stepTitle.textContent = 'étape ' + step + ' / 7';
})