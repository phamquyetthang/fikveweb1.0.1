
//hàm tạo một màn đen mờ khi mở các tabs
var manche = document.getElementById("manChanAll");

function addManche(el, classname){
   el.setAttribute('class', classname);
}
function delManche(el, classname){
   el.setAttribute('class', classname)
}

//ham mo nhung tab an
 function showMyinfo(idinfo){
     document.getElementById(idinfo).style.display='block';
   //   document.getElementById("content").style.display='none';
    addManche(manche, 'manChanAll');
 }
 function openAny(idtabsop){
   document.getElementById(idtabsop).style.display='block';
   // document.getElementById("content").style.display='none';
   console.log("222222");
   addManche(manche, 'manChanAll');
}
function openLit(idlit, idsk2){
   document.getElementById(idlit).style.display='block';
   document.getElementById(idsk2).style.display='block';
}

//ham dong những tab ẩn
function closeAny(idtabscl){
   document.getElementById(idtabscl).style.display='none';
   document.getElementById("content").style.display='block';
   delManche(manche, '');
}

 function exitButton(){
    document.getElementById("myinfomation").style.display='none';
    // document.getElementById("myinfomation").style.backgroundColor='#00a1f2';
    delManche(manche, '');
 }
 function closeLit(idlit, idsk2){
   document.getElementById(idlit).style.display='none';
   document.getElementById(idsk2).style.display='none';
}



 function showBoloc(){
    var sex =  document.querySelectorAll(".sexisms2");
    var i = 0;
    for(i=0; i<sex.length;i++){
      sex[i].style.display='block';
    }
}
function openTabs(tabname){
   var x = document.getElementsByClassName("tabcontents");
   // var y = document.getElementsByClassName("setcons");
   for(var i=0; i<x.length; i++){
       x[i].style.display ="none";
      //  y[i].style.backgroundColor ="#F0EBF4";
   }
   
   document.getElementById(tabname).style.display="block";
}
function openTabrank(tabsexs){
   var x=document.getElementsByClassName("rankdisplay");
   for(var i=0; i<x.length; i++){
       x[i].style.display="none";
   }
   document.getElementById(tabsexs).style.display="block";
}

document.getElementById("btncomment").onclick=function(){
   document.getElementById("commenttus").style.display="block";
   addManche(manche, 'manChanAll');
};