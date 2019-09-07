//auto count string input
function countTxt(id,idd,num){

    var output = document.getElementById(idd);
    
    var limit = num;
    
    var input = document.getElementById(id).value;
    
    input = input.length;
    
    var left = (limit - input);
    
    if(left < 0){
    
    output.innerHTML = "<b class='fa fa-danger'></b> Maximum characters allowed exceeded!";    
        
    }else{
    
    output.innerHTML = "Characters left "+left;
    
    }

}

function hideShow(id){
        var x = document.getElementById(id);
        if(x.style.display == "block"){
            x.style.display = "none";
        }else{
            x.style.display = "block";
        }
    }
    

function hide(id){
        var x = document.getElementById(id);
        
            x.style.display = "none";
    }    


function setDraft(id){
    var xyz = confirm("Are you sure you want to unpublish this story?");
    if(xyz === true){
        location.assign("?set_draft="+id);
    }
}    

function getImgSrc(id){

    var image = document.getElementById(id).getAttribute("src");

    //var txt = document.getElementById("text").contentWindow.document;

    var txt = document.getElementById("text");

    var i = "<img src='";
    var j = "' style='width: 100px; height: 100px; float: left; max-width: 100%; max-height: 100%; padding: 5px'>";

    //txt.write(i+image+j);

    txt.innerHTML += i+image+j; 


}
    
function delPost(id){
    var s = confirm("Are you sure you want to delete this story?");
    if(s === true){
        location.assign("?delete_story="+id);
    }
}

//delete category
function delCat(id){
    var s = confirm("Are you sure you want to delete this category?");
    if(s === true){
        location.assign("?delete_category="+id);
    }
}