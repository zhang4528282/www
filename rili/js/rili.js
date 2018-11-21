//表格区域鼠标触动效果
var oMainWrap = document.getElementById('mainWrap');
var oTab = getByClass(oMainWrap,'tab')[0];
var aTabLi = oTab.getElementsByTagName('li');
var aDayNum = getByClass(oMainWrap,'dayNum');
var oDayNum = null;
var normalIndex = null;

var oLogoWrap = document.getElementById('logoWrap');
var oDay = getByClass(oLogoWrap,'day')[0]
var oDayBig = oDay.getElementsByTagName('img')[0];

for(var i=0;i<aTabLi.length;i++){
    aTabLi[i].index = i;
    if(aTabLi[i].className == "tabNormal"){
        normalIndex = i;
    }
    console.log(normalIndex);
    aTabLi[i].onmouseover = function(){
        aTabLi[this.index].style.backgroundColor = 'rgba(166,203,250,0.35)';
        
        //鼠标移动左侧跟随改变
        oDayNum = aDayNum[this.index].innerHTML;
        oDayBig.src = "images/"+oDayNum+".png";
    }
    aTabLi[i].onmouseout = function(){
        aTabLi[this.index].style.backgroundColor = 'rgba(166,203,250,0)';
        aTabLi[normalIndex].style.backgroundColor = 'rgba(255,209,0,0.35)';
    }
}


//导航下拉菜单
var oNav = getByClass(oMainWrap,'nav')[0];
var oNavBar = getByClass(oNav,'navBar')[0];
var aRili = oNavBar.getElementsByTagName('li');
var oSelectWrap = getByClass(oMainWrap,'selectWrap')[0];
var aSelect =  getByClass(oMainWrap,'select');

oSelectWrap.style.height = "0px";
oNav.onmouseover = function(){
    startMove(oSelectWrap,{height:60});
}

oNav.onmouseout = function(){
    startMove(oSelectWrap,{height:0});
}

for(var k=0;k<aRili.length;k++){
    aRili[k].index = k;
    
    aRili[k].onmouseover = function(){
        for(var j=0;j<aSelect.length;j++){
            aSelect[j].style.display = "none";
        }
        aSelect[this.index].style.display = "block";
    }
//    aRili[k].onmouseout = function(){
//        aSelect[this.index].style.display = "none";
//    }
}