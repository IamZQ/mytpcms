/**
 * Created by Administrator on 2017-3-23.
 */

function prepareGallery(){ //需要在文档加载完成之后才执行
    if(!document.getElementsByTagName) return false;
    if(!document.getElementsByClassName) return false;
    var imagegallery = document.getElementById("imagegallery");
    if(!imagegallery) return false;
    //var support = document.getElementsByTagName  && document.getElementsByClassName ; //或者也可以写成这种形式
    //if(!support)  return false;
    links = imagegallery.getElementsByTagName("a");
    for(var i=0;i<links.length;i++){
        links[i].onclick = function(){
           return !showPic(this);//传递给showPic方法的参数是this , 它代表着此时此刻与onclick 方法相关联的 那个元素;
            //return false 是当元素对象收到这个false时候，会停止执行元素本身默认的行为。
        }
    }

}

function showPic(whichpic){
    var source = whichpic.getAttribute('href');
    var placeholder = document.getElementById('placeholder');
    placeholder.setAttribute('src',source);//或者可以用  placeholder.src=source;  但是尽量严格遵守"第一级DOM" 能够让你避免与兼容性有关的任何问题
    var description;
    if((description = document.getElementById('description'))){ //如果有此元素对象则在执行赋值操作
        //var text  = whichpic.getAttribute('title') ? whichpic.getAttribute('title') : "";//取出节点属性title
        description.firstChild.nodeValue = whichpic.getAttribute('title') ? whichpic.getAttribute('title') : "";
    }
    return true;
}

function countBodyChildren(){
    var body_element = document.getElementsByTagName("div")[0];
    console.log(body_element.childNodes);
    console.log(body_element.childNodes.length);
}
function prepareLinks(){
    if(!document.getElementsByTagName) return false;//向后兼容，检测对象。
    var links = document.getElementsByTagName("a");
    for(var i=0;i<links.length;i++){
        if(links[i].getAttribute("class") == "popup"){
            links[i].onclick=function(){
                popUp(this.getAttribute("href"));return false;
            }
        }
    }
}
function popUp(winURL){
    window.open(winURL,"popUp","width:320,height=480");
}
//可以用addLoadEvent代替 window.onload
function addLoadEvent(func){
    var oldonload  = window.onload;
    if(typeof window.onload != 'function'){
        window.onload = func;
    }else{
        window.onload = function(){
            oldonload();
            func();
        }
    }

}

function testNodeName(){
    var p = document.createElement("p");
    var info = "nodeName:"+ p.nodeName+"nodeType:"+ p.nodeType;
    var div = document.getElementById("testdiv");//ById()返回的是一个对象元素，其他返回的是一组数组
    div.appendChild(p);
    var p_text = document.createTextNode("hello JavaScript!");
    p.appendChild(p_text);
}
//<img id="placeholder" src="/Template/mobile/new/Static/images/image_list/placeholder.jpg" alt="my image gallery" />
//    <p id="description">Choose an image...</p>
function preparePlaceholder(){
    if(!document.createElement) return false;
    if(!document.createTextNode) return false;
    if(!document.getElementById) return false;
    var default_img =  "/Template/mobile/new/Static/images/image_list/placeholder.jpg";
    var placeholder = document.createElement("img");
    placeholder.setAttribute("id","placeholder");
    placeholder.setAttribute("src",default_img);
    placeholder.setAttribute("alt","my image gallery");
    var description =document.createElement("p");
    description.setAttribute("id","description");
    var desctext = document.createTextNode("Choose an image...");
    description.appendChild(desctext);
    var imagegallery  = document.getElementById("imagegallery");
   /* imagegallery.parentNode.insertBefore(placeholder,imagegallery);
    imagegallery.parentNode.insertBefore(description,imagegallery);
    // 目标元素的父节点  把元素插入到目标元素之前
    //但是我们这里是要插入到后面，js没有insertAfter()函数，所以我们自己封装一个*/
    insertAfter(placeholder,imagegallery);
    insertAfter(description,imagegallery);
}
function insertAfter(newElement,targetElement){
    var parent = targetElement.parentNode;//获取目标元素的父元素节点
    if(parent.lastChild == targetElement){//如果目标元素的父元素节点的最后一个元素节点是目标元素
        parent.appendChild(newElement);
    }else{//如果不是 就把新元素插入到目标元素的下一个兄弟元素之前
        parent.insertBefore(newElement,targetElement.nextSibling);
    }

}
function styleHeaderSiblings(){
    if(!document.getElementsByTagName) return false;
    var headers = document.getElementsByTagName("h1");
    var elem;
    for(var i=0;i<headers.length;i++){
        elem = getNextElement(headers[i].nextSibling);
        //elem.setAttribute('class','font_type');//或者可以使用 elem.className = 'font_type'; 或者使用封装方法
        addClass(elem,'font_type');

    }
}
//封装函数
function getNextElement(node){
    if(node.nodeType==1){
        return node;
    }
    if(node.nextSibling){
        return getNextElement(node.nextSibling);
    }
    return null;
}
//封装函数 添加dom元素的Class
function addClass(element,value){
    if(!element.className){
        element.className = value;
    }else{
        var  newClassName = element.className ;
        newClassName += " ";
        newClassName +=value;
        element.className = newClassName;
    }
}
//设置表格中的行 各行样式不一样
function stripeTables(){
    if(!document.getElementsByTagName) return false;
    var tables = document.getElementsByTagName("table");
    var odd,rows;
    for(var i=0;i<tables.length;i++){
        odd =false;
        rows = tables[i].getElementsByTagName("tr");//table下所有的tr元素数组
        for(var j=0;j<rows.length;j++){
            if(odd){
                rows[j].style.backgroundColor = "#ffc";
                odd=false;
            }else{
                odd =true;
            }
        }
    }
}
function positinoMessage(){
    var elem = document.getElementById("message");
    elem.style.position = "absolute";
    elem.style.left = "50px";
    elem.style.top = "100px";
    moveElement("message","300","100","10")
}
//js让元素的动画效果
function moveElement(elementId,final_x,final_y,interval){
    if(!document.getElementById)  return false;
    if(!document.getElementById(elementId)) return false;
    var element = document.getElementById(elementId);
    var xpos = parseInt(element.style.left);
    var ypos = parseInt(element.style.top);
    if(xpos == final_x && ypos ==final_y) return true;
    if(xpos < final_x){
        xpos++;
    }
    if(xpos > final_x){
        xpos--;
    }
    if(ypos > final_y){
        ypos--;
    }
    if(ypos < final_y){
        ypos++;
    }
    element.style.left = xpos +"px";
    element.style.top  = ypos +"px";
    var repeat = "moveElement('"+elementId+"',"+final_x+","+final_y+","+interval+")";
    movement = setTimeout(repeat,interval);
}












































