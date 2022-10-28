let roll = document.getElementById("roll");
let regi = document.getElementById("regi");
let uploadBtn = document.getElementById("uploadBtn");


// validation
let board_roll = document.getElementById("board_roll");
let regi_number = document.getElementById("regi_number");

console.log(uploadBtn);



roll.addEventListener("input", () => {
    if(roll.value.length < 6){
        board_roll.classList.replace("d-none", "d-block");
        uploadBtn.classList.add("disabled");
    }else{
        board_roll.classList.replace("d-block", "d-none");
        uploadBtn.classList.remove("disabled");
    }
})

regi.addEventListener("input", () => {
    if(regi.value.length < 10){
        regi_number.classList.replace("d-none", "d-block");
        uploadBtn.classList.add("disabled");
    }else{
        regi_number.classList.replace("d-block", "d-none");
        uploadBtn.classList.remove("disabled");
    }
})