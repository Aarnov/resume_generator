function addNewWeField(){
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("weField");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Enter here");


    let weOb=document.getElementById("we");
    let weAddButtonOb=document.getElementById("weAddButton");
    weOb.insertBefore(newNode,weAddButtonOb);
}

function  addNewAqField(){
    let newNode=document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("aqField");
    newNode.setAttribute("rows",3);
    newNode.setAttribute("placeholder","Enter here");

    let aqOb=document.getElementById("aq");
    let aqAddButtonOb=document.getElementById("aqAddButton");

    aqOb.insertBefore(newNode,aqAddButton);
}
//generating CV
function generateCV(){
    //name
    let nameField=document.getElementById("nameField").value;
    let nameT1=document.getElementById("nameT1");
    nameT1.innerHTML=nameField;
    document.getElementById("nameT2").innerHTML=nameField;

//    contact
    document.getElementById("contactT").innerHTML=document.getElementById("contactField").value;

//    address
    document.getElementById("addressT").innerHTML=document.getElementById("addressField").value;


    //links
    document.getElementById("fbT").innerHTML=document.getElementById("fbField").value;
    document.getElementById("instaT").innerHTML=document.getElementById("instaField").value;
    document.getElementById("linkedT").innerHTML=document.getElementById("linkedField").value;

//    objective
    document.getElementById("objectiveT").innerHTML=document.getElementById("objectiveField").value;

//    for we
   let wes= document.getElementsByClassName('weField');
let str="";
for(let e of wes){
    str=str+`<li>${e.value}</li>`
}
document.getElementById("weT").innerHTML=str;

    //for aq
    let aqs= document.getElementsByClassName('aqField');
    let str1="";
    for(let e of aqs){
        str1=str1+`<li>${e.value}</li>`
    }
    document.getElementById("aqT").innerHTML=str1;

    //code for setting image
    let file= document.getElementById("imgField").files[0];
    console.log(file);
    let reader=new FileReader();
    console.log(reader);

    reader.readAsDataURL(file);

    reader.onload=function(){
        document.getElementById("imageT").src=reader.result;
    }

    document.getElementById("cv-form").style.display="none";
    document.getElementById("cv-template").style.display="block";
}
//printing CV
function printCV(){
    document.getElementById("print").style.display="none";
    window.print();
}
