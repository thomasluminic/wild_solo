const stepButton = document.getElementById('buttonStep');
const stepTitle = document.getElementById('stepTitle');
const tryArray = document.getElementsByClassName('step');
let step = 1;

stepButton.addEventListener('click', (event) => {
    let hideStep = tryArray[step];
    hideStep.setAttribute('class', 'show-on step-flex');
    step++
    let showStep = tryArray[step];
    showStep.setAttribute('class', 'show-off step-flex');
    stepTitle.textContent = 'étape ' + step + ' / 7';
})