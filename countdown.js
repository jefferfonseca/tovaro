const getRemainTime = deadline => {

    let now = new Date(),
    //se le suma 1000 ms ya que es el tiempo que se demora en actualziar y se divide en mil para pasarlo a segundos
    remainTime = (new Date(deadline) - now + 1000) /1000,

    //saca los segundo slice truco para poner el 0 a los numeros de un solo digito
    remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
    remainMinutes = ('0' + Math.floor(remainTime /60 % 60)).slice(-2),
    remainHours = ('0' + Math.floor(remainTime /3600 % 24)).slice(-2),
    remainDays = Math.floor(remainTime / (3600 * 24));

    return {
        remainTime,
        remainSeconds,
        remainMinutes,
        remainHours,
        remainDays
    }
};

const countdown =  (deadline, elem) =>{
    //elemento para imprimir el countdown
    const el = document.getElementById(elem);

    const timeUpdate = setInterval( () => {
        let t = getRemainTime(deadline);
        el.innerHTML = `Contador hasta publicación:     ${t.remainDays} Días  ${t.remainHours} h  ${t.remainMinutes} m ${t.remainSeconds} s`
        if(t.remainTime <= 1){
            clearInterval(timeUpdate)
            //direccion a la se ve a a dirigir
            window.location='index1.php';
            //el.innerHTML = finalMessage;
        }
    }, 1000)
};

countdown('Sat Nov 17 2020 09:00:00 GMT-0500', 'clock');