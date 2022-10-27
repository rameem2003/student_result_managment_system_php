let roll = document.getElementById("roll");
let regi = document.getElementById("regi");


// validation
let board_roll = document.getElementById("board_roll");
let regi_number = document.getElementById("regi_number");

console.log(roll);



roll.addEventListener("input", () => {
    if(roll.value.length < 6){
        board_roll.classList.replace("d-none", "d-block")
    }else{
        board_roll.classList.replace("d-block", "d-none")
    }
})

regi.addEventListener("input", () => {
    if(regi.value.length < 10){
        regi_number.classList.replace("d-none", "d-block")
    }else{
        regi_number.classList.replace("d-block", "d-none")
    }
})