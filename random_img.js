sha = function(){
return Math.floor(Math.random() * 102); 
}

document.getElementById("yobaimg").innerHTML = '<img src="yobas/yoba'+sha()+'.jpg" style="max-width:100%; max-height:100%;"/>';
