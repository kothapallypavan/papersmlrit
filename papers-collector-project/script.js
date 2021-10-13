function displaynoteform(){
    var x = document.getElementsByClassName('notes_container')[0];
    document.getElementById('paperbutton').style.display="none";
    if(x.style.display =="block"){
        x.style.display="none";
        document.getElementById('paperbutton').style.display="block";
    }
    else{
        x.style.display="block";
    }
}

function displaypaperform(){
    var x = document.getElementsByClassName('papers_container')[0];
    document.getElementById('notesbutton').style.display="none";
    if(x.style.display =="block"){
        x.style.display="none";
        document.getElementById('notesbutton').style.display="block";
    }
    else{
        x.style.display="block";
    }
}