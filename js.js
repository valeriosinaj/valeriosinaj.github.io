document.addEventListener("DOMContentLoaded", _start);

function _start()
{
    var countDownDate = new Date("August 12, 2023 14:00:00").getTime();

    var x = setInterval(() => {
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math. floor (distance / (1000 * 60 * 60 * 24)) ;
        var hours = Math. floor ((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor ((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math. floor ( (distance % (1000 * 60)) / 1000) ;
    
        document.getElementById("giorni").textContent = days;
        document.getElementById("ore").textContent = hours;
        document.getElementById("minuti").textContent = minutes;
        document.getElementById("secondi").textContent = seconds;

        if(distance < 0){
            clearInterval(x);
            document.getElementById("launch").innerHTML = "Terminato";
        }
    }, 1000);
}