const clock = () => {
    let date = new Date();
    const clockLIne = document.getElementById("clockLine");
    const dateLine = document.getElementById("dateLine");
    const monthArray = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];

    const dayArray = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY"];

    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    let day = date.getDay();
    let dt = date.getDate();
    let mt = date.getMonth();
    let yr = date.getFullYear();


    let ampm = "AM";
    

    if(h < 12){
        ampm = "PM";
    }else{
        ampm = "PM";
    }

    if(h > 12){
        h = h - 12;
    }

    if(h < 10){
        h = `0${h}`;
    }

    if(m < 10){
        m = `0${m}`;
    }

    if(s < 10){
        s = `0${s}`;
    }

    clockLIne.innerHTML = `${h} : ${m} : ${s} ${ampm}, ${dayArray[day]}`;
    dateLine.innerHTML = `${dt} ${monthArray[mt]} ${yr}`
    setInterval(clock, 1000)

}

clock()