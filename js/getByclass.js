//获取布局复杂的页面中的元素 结果为一个数组 [0]
function getByClass(oParent,sClass){
    var aEle = oParent.getElementsByTagName('*');
    var aResult = [];
    for(var i=0;i<aEle.length;i++){
        if(aEle[i].className == sClass){
            aResult.push(aEle[i]);
        }
    }
    return aResult;
}