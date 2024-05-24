let timeRemaining = 180;
let timerInterval = null;
let isRunning = false;

function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${minutes.toString().padStart(2)}:${secs.toString().padStart(2, '0')}`;
}

function updateDisplay() {
    document.getElementById('timer').textContent = formatTime(timeRemaining);
}

function toggleTimer() {
    if (isRunning) {
        clearInterval(timerInterval);
        document.getElementById('controlButton').textContent = 'Start';
    } else {
        timerInterval = setInterval(countdown, 1000);
        document.getElementById('controlButton').textContent = 'Stop';
    }
    isRunning = !isRunning;
}

function countdown() {
    if (timeRemaining > 0) {
        timeRemaining--;
        updateDisplay();
    } else {
        clearInterval(timerInterval);
        document.getElementById('timer').textContent = "Time's up!";
        document.getElementById('controlButton').style.display = 'none';
    }
}

updateDisplay();