window.addEventListener("load",function(){
var editor = document;
//editor.designMode="on";

bold.addEventListener("click", function(){
	editor.execCommand("Bold", false, null);
},false);

italic.addEventListener("click", function(){
	editor.execCommand("italic", false, null);
},false);

underline.addEventListener("click", function(){
	editor.execCommand("underline", false, null);
},false);

orderedList.addEventListener("click", function(){
	editor.execCommand("InsertOrderedList", false, "newOL" + Math.round(Math.random()*1000));
},false);

unOrderedList.addEventListener("click", function(){
	editor.execCommand("InsertUnorderedList", false, "newOL" + Math.round(Math.random()*1000));
},false);

color.addEventListener("change", function(event){
	editor.execCommand("ForeColor", false, event.target.value);
},false);

bgcolor.addEventListener("change", function(event){
	editor.execCommand("BackColor", false, event.target.value);
},false);

font.addEventListener("change", function(event){
	editor.execCommand("FontName", false, event.target.value);
},false);

fontSize.addEventListener("change", function(event){
	editor.execCommand("FontSize",false,event.target.value);
},false);

link.addEventListener("click", function(){
	var url=prompt("Enter a URL", "http://");
	editor.execCommand("CreateLink",false, url);
},false);

/*img.addEventListener("click", function(){
	var imgSrc=prompt("Enter img URL", "");
	//var imgProp = imgSrc+"style='width: 100%;' alt='image'";
	editor.execCommand("insertimage",false, imgSrc);
},false);*/

img.addEventListener("click", function(){
	var image = document.getElementById("img").getAttribute("src");

	var txt = document.getElementById("text");

	var i = "<img src='";
	var j = "' style='width: 50%; height: 300px; float: left; max-width: 100%; max-height: 100%'>";

	txt.contentWindow += i+image+j;

},false);	

unlink.addEventListener("click",function(){
	editor.execCommand("UnLink",false,null);
},false);

undo.addEventListener("click",function(){
	editor.execCommand("Undo",false,null);
},false);

redo.addEventListener("click",function(){
	editor.execCommand("redo",false,null);
},false);

leftalign.addEventListener("click", function(){
	editor.execCommand("justifyLeft",false,null);
},false);

rightalign.addEventListener("click", function(){
	editor.execCommand("justifyRight",false,null);
},false);

centeralign.addEventListener("click", function(){
	editor.execCommand("justifyCenter",false,null);
},false);

justify.addEventListener("click", function(){
	editor.execCommand("justifyFull", false, null);
},false);

},false);


function submitform(){
var theform = document.getElementById("myform");
//theform.elements["myTextArea"].value = window.frames['text'].document.body.innerHTML;
theform.elements["myTextArea"].value = document.getElementById("text").innerHTML;
document.myform.submit();
}