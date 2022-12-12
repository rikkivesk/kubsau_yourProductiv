const timeShow = document.getElementsByTagName('h2')[0];
const timeShow2 = document.getElementsByTagName('h2')[1];
const btnStart = document.querySelectorAll('.btn-start')[0]
const btnStart2 = document.querySelectorAll('.btn-start')[1]
const btnStop2 = document.querySelectorAll('.btn-stop')[0]
const btnReset = document.querySelectorAll('.btn-reset')[0]
const btnReset2 = document.querySelectorAll('.btn-reset')[1]
const pomidoroCount = document.querySelector('.pomidoro-count')
let sec = 0
let hrs = 0
let min = 25
let sec2 = 0
let hrs2 = 0
let min2 = 10
let t
let t2
let pomidor = 0
btnReset.disabled = true
btnStop2.disabled = true;
function tick(){
    if (pomidor < 7){
        sec--
    }
    if (sec < 0) {
        sec = 59;
        min--;
        if (min < 0) {
            min = 59;
            hrs--;
        }
    }
    if (sec == 0 & min == 0 & hrs == 0){
        min = 5; sec = 0; hrs = 0 // первый помидор окончен
        pomidor = pomidor + 1
        pomidoroCount.textContent = "Отдых"
        console.log(pomidor);
        if (pomidor == 2){
            pomidoroCount.textContent = "Второй помидор"
            min = 25; sec = 0; hrs = 0 // второй помидор начат
        }
        if (pomidor == 3){
            min = 5; sec = 0; hrs = 0 // второй помидор закончен
        }
        if (pomidor == 4){
            pomidoroCount.textContent = "Третий помидор"
            min = 25; sec = 0; hrs = 0 // третий помидор начат
        }
        if (pomidor == 5){
            min = 5; sec = 0; hrs = 0 // третий помидор окончен
        }
        if (pomidor == 6){
            pomidoroCount.textContent = "Четвертый помидор"
            min = 25; sec = 0; hrs = 0 // четвертый помидор начат
        }
        if (pomidor == 7){
            timeShow.textContent = "00:25:00"
            min = 25; sec = 0; hrs = 0
            clearTimeout(t)
            btnStart.disabled = false
            pomidoroCount.textContent = "Первый помидор"
        }
    }
}
function tick2(){
    sec2--;
    if (sec2 < 0) {
        sec2 = 59;
        min2--;
        if (min2 < 0) {
            min2 = 59;
            hrs2--;
        }
    }
}
function add() {
    tick();
    timeShow.textContent = (hrs > 9 ? hrs : "0" + hrs) 
        	 + ":" + (min > 9 ? min : "0" + min)
       		 + ":" + (sec > 9 ? sec : "0" + sec);
    timer();
}
function add2() {
    tick2();
    timeShow2.textContent = (hrs2 > 9 ? hrs2 : "0" + hrs2) 
        	 + ":" + (min2 > 9 ? min2 : "0" + min2)
       		 + ":" + (sec2 > 9 ? sec2 : "0" + sec2);
    timer2();
}
function timer() {
    t = setTimeout(add, 1000);
}
function timer2() {
    t2 = setTimeout(add2, 1000);
}   
btnStart.onclick = function(){
    pomidor = 0
    clearTimeout(t)
    btnReset.disabled = false
    add();
    btnStart.disabled = true
}
btnStart2.onclick = function(){
    add2();
    btnStart2.disabled = true
    btnStop2.disabled = false;
}
btnStop2.onclick = function() {
    clearTimeout(t2);
    btnStop2.disabled = true;
    btnStart2.disabled = false;
}
btnReset.onclick = function(){
    timeShow.textContent = "00:25:00"
    sec = 0; min = 25; hrs = 0
    clearTimeout(t)
    btnStart.disabled = false
    btnReset.disabled = true
    pomidoroCount.textContent = "Первый помидор"

}
btnReset2.onclick = function(){
    timeShow2.textContent = "00:10:00"
    sec2 = 0; min2 = 10; hrs2 = 0
    clearTimeout(t2)
    btnStart2.disabled = false
}