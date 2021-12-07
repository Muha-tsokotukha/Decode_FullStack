let playground = document.getElementById("playground")
let cell = document.getElementsByClassName("cell")

let player = "X"
let win_condition = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [1,5,9],
    [3,5,7],
    [2,5,8],
    [1,4,7],
    [3,6,9]
]

for(let i=1; i<= 9; i++){
    playground.innerHTML += "<div class='cell' pos=" + i + "></div>"
}

for(let i = 0; i < cell.length; i++){
    cell[i].addEventListener("click", tik, false)
}

function tik(){

    let taken = []

    if( this.innerHTML == false ){
        this.innerHTML = player;
    }
    for(let i in cell  ){
        if( cell[i].innerHTML == player ){
            taken.push(parseInt(cell[i].getAttribute("pos")))
        }
    }
    
    if(player == "X")player = "O"
    else player = "X"

    let decisive= false;
    for(let i in win_condition) {
        let win = true;
        for(let j in win_condition[i]) {
            let id = win_condition[i][j];
            let ind = taken.indexOf(id);

            if(ind == -1) {
                win = false
            }
        }

        if(win){
            if( player == 'X')
            alert("Player 2 have won!(o)")
            else alert("Player 1 have won!(x)")
            decisive = true; 
            restart();
        }else{
            let draw = true;
            for(let i in cell) {
                if(cell[i].innerHTML == '') draw = false;
            }
            if(draw) {
                alert("Draw!")
                restart();
            }
        }
    } 

}

function restart(){
    for(let i =0; i < cell.length; i++){
        cell[i].innerHTML = "";
    }
}