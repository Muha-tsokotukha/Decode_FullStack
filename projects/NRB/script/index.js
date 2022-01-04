
function showMenu(){
    document.getElementById("menu").classList.add("active");
    document.getElementById("as").classList.add("active");
    document.getElementById("as2").classList.add("active");
}
function closeMenu(){
    document.getElementById("menu").classList.remove("active");
    document.getElementById("as").classList.remove("active");
    document.getElementById("as2").classList.remove("active");
}
function showInfo(){
    alert(this);
}

document.querySelectorAll('.menu-icons--icon').forEach(item => {
    item.addEventListener('click',showInfo);
});