let timerInput = document.getElementById("time");
let buttonRun = document.getElementById("button");
let timerShow = document.getElementById("timer");
let fin = document.getElementById("end")
timeMinut = 0;
buttonRun.addEventListener('click', function () {
    timeMinut = 30;//parseInt(timerInput.value)
    step = -1;
})

fin.addEventListener('click', function () {
    fin.style.display = "none";
    timeMinut = 1;
    step = 1;
})

timer = setInterval(function () {
    seconds = timeMinut % 60
    minutes = timeMinut / 60 % 60
    hour = timeMinut / 60 / 60 % 60
    if (timeMinut <= 0) {
        //clearInterval(timer);
        timeMinut = 1
        step = 1;
        fin.style.display = "block"
    } 
    else {
        let strTimer = `${Math.trunc(hour)}:${Math.trunc(minutes)}:${seconds}`;
        timerShow.innerHTML = strTimer;
    }
    timeMinut += step;
}, 1000)

