function openAside(){
    document.getElementById("aside").classList.add("active")
}

function closeAside(){
    document.getElementById("aside").classList.remove("active")
}

function toggle(){
    document.getElementById("menuAside").classList.add("active")
}

function menuClose(){
    document.getElementById("menuAside").classList.remove("active")
}

function closeForm(){
    document.getElementById("aside").classList.remove("active")
}

function toggleCollapse(e){
    if(e.target.classList[e.target.classList.length - 1] === "active"){
        e.target.classList.remove("active")
        e.target.nextElementSibling.style.height = 0
    }
    else{
        e.target.classList.add("active")
        e.target.nextElementSibling.style.height = e.target.nextElementSibling.scrollHeight + "px"
    }

}