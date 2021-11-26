// object

let students = [
    {
        name: "Mukhit",
        age: 19,
        gpa: 3.71,
        address: {
            country: "kz",
            city: "Almaty"
        },
        decode : true
    },
    {
        name: "Dimash",
        age: 19,
        gpa: 3.8,
        address: {
            country: "kz",
            city: "Almaty"
        },
        decode : true
    },
    {
        name: "Askar",
        age: 16,
        gpa: 2,
        address: {
            country: "ru",
            city: "Moscow"
        },
        decode : false
    },
    {
        name: "Ira",
        age: 35,
        gpa: 2.5,
        address: {
            country: "ru",
            city: "Piter"
        },
        decode : false
    },
]


const students_div = document.getElementById("students")



function showStudents() {
    
    students_div.innerHTML =   students.map((elem, index ) => 
    `
    <div class=student-item>
        <div>${index + 1}</div>
        <div>${elem.name}</div>
        <div>${elem.age}</div>
        <div>${elem.gpa}</div>
        <div><span onclick="editStudent(${index})">Edit</span> <span onclick="deleteStudent(${index})">Delete</span></div>
    </div>
    `
    ).join("")
}

students_div.innerHTML =   students.map((elem, index ) => 
    `
    <div class=student-item>
        <div>${index + 1}</div>
        <div>${elem.name}</div>
        <div>${elem.age}</div>
        <div>${elem.gpa}</div>
        <div><span onclick="editStudent(${index})">Edit</span> <span onclick="deleteStudent(${index})">Delete</span></div>
    </div>
    `
).join("")

const name = document.querySelector("#name")
const age = document.querySelector("#age")
const gpa = document.querySelector("#gpa")


function addStudent() {
    students.push({
        name: name.value,
        age: age.value,
        gpa: gpa.value
    })

    name.value = ""
    age.value = ""
    gpa.value = ""
    showStudents()
}



function deleteStudent(i){
    students.splice(i,1)
    showStudents();
}

// HOMEWORK

let index_of_edit;
function editStudent(i){
    const e = document.getElementById("form").classList.add("active")
    index_of_edit = i    
}
let ename = document.querySelector("#ename")
let eage = document.querySelector("#eage")
let egpa = document.querySelector("#egpa")

function edit(){
    
    students[index_of_edit].name = ename.value;
    students[index_of_edit].age = eage.value;
    students[index_of_edit].gpa = egpa.value;
    document.getElementById("form").classList.remove("active")
    showStudents();
}

