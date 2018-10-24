//多物体任意值运动框架****************************************************

//获取对象的css属性值
function getStyle(obj,name){
    if(obj.currentStyle){
        return obj.currentStyle[name];
    }else{
        return getComputedStyle(obj,null)[name];
    }
}

/*
说明：
    obj:运动的对象

	 json:{width:200px,height:400px}	键值对 存放运动变化的属性和值 可传多个
	 fnEnd:回调函数 运动结束后 可选参数
*/
function startMove(obj,json,fnEnd){
    clearInterval(obj.timer);
    var nur = null;
    obj.timer = setInterval(function(){
        var bStop = true;
        for(var attr in json){
            if(attr == 'opacity'){
                nur = Math.round(parseFloat(getStyle(obj,attr)*100));
            }else{
                nur = parseInt(getStyle(obj,attr));
            }

            var speed = (json[attr]-nur)/6;
            speed = speed>0?Math.ceil(speed):Math.floor(speed);
            if(nur != json[attr]){
                bStop = false;
            }
            if(attr == 'opacity'){
                obj.style.opacity = (nur+speed)/100;
                obj.style.filter = 'Alpha(opacity:'+(nur+speed)+')';
            }else if(attr == 'background-position-x' || attr == 'background-position-y'){
                obj.style[attr] = nur+speed+'%';
            }else{
                obj.style[attr] = nur+speed+'px';
            }	  
        }
        if(bStop){
            clearInterval(obj.timer);
            if(fnEnd) fnEnd();
        }

    },30);

}