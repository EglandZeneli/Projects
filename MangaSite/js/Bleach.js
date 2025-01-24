let page=1;
var manga="Bleach";
let totalchap=3;
function pageset1(){
    document.getElementById("Page").src="img/"+manga+"/"+chap+"/"+page+".jpg";
document.getElementById("Header").innerHTML=manga;
document.getElementById("dropper").innerHTML="Chapter "+chap;
document.getElementById("dropper1").innerHTML="Page "+page;
document.getElementById("Title").innerHTML="Chapter "+chap+" "+manga;
    for(let c=1;c<=totalchap;c++){
    if(c!=chap){{const para = document.createElement("a");
    const node = document.createTextNode("Chapter "+c);
    para.appendChild(node);
    para.href=manga+c+".php";
    const element=document.getElementById("pagesetter");
    const child = document.getElementById("p1");
    element.insertBefore(para, child)
    }
    }
  }
        for(let c=1;c<=totalp;c++){
    const para = document.createElement("a");
    const node = document.createTextNode("Page "+c);
    para.appendChild(node);
    para.setAttribute( "onClick","(function(){ document.getElementById('Page').src='img/"+manga+"/"+chap+"/"+c+".jpg'; page="+c+"; document.getElementById('dropper1').innerHTML='Page "+c+"';})();");
    const element=document.getElementById("pagesetter1");
    const child = document.getElementById("p1");
    element.insertBefore(para, child)
    }
}

function pageset() {
    page = document.getElementById("txtInp").value
    if(page<=totalp && page>=1){
    document.getElementById("Page").src="img/"+manga+"/"+chap+"/"+page+".jpg";
    }
    else if(page<1){
    document.getElementById("txtInp").value='';   
    }
    else if(page>totalp){
        document.getElementById("txtInp").value=totalp;
        document.getElementById('Page').src="img/"+manga+"/"+chap+"/"+totalp+".jpg";   
        }
    }
function next(){
if(page<totalp){
    page++
document.getElementById('Page').src="img/"+manga+"/"+chap+"/"+page+".jpg";
document.getElementById("dropper1").innerHTML="Page "+page;
}
else if(page=totalp){
if(chap+1>totalchap){
window.open(manga+".php","_self");
}
else{
window.open(manga+(chap+1)+".php","_self");
}
}
}
function nextc(){
    if(chap<totalchap){
        page++
        window.open(manga+(chap+1)+".php","_self")
    }
    if(chap+1>totalchap){
        window.open(manga+".php","_self");
    }
    }
    function prevc(){
        if(chap>1){
            page++
            window.open(manga+(chap-1)+".php","_self")
        }
        if(chap==1){
            window.open(manga+".php","_self");
        }
        }    
function prev(){
if(page==1){
    if(chap-1==0){
    window.open(manga+".php","_self");
    }
    else{
    window.open(manga+(chap-1)+".php","_self");
    }
    }
else{
    page--
document.getElementById("Page").src="img/"+manga+"/"+chap+"/"+page+".jpg";
document.getElementById("dropper1").innerHTML="Page "+page;
}
}


var addEvent = document.addEventListener ? function(target,type,action){
if(target){
    target.addEventListener(type,action,false);
}
} : function(target,type,action){
if(target){
    target.attachEvent('on' + type,action,false);
}
}
addEvent(document,'keydown',function(e){
e = e || window.event;
var key = e.which || e.keyCode;
if(key===39){
    next();
}
});
addEvent(document,'keydown',function(e){
e = e || window.event;
var key = e.which || e.keyCode;
if(key===37){
    prev();
}
});
function myFunction() {
    document.getElementById("pagesetter").classList.toggle("show");
}
    addEvent(document,'click',function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
});
  function myFunction1() {
    document.getElementById("pagesetter1").classList.toggle("show");
  }
  function library(){
window.open(manga+".php","_self");
  
  }
