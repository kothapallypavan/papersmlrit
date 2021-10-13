function displaynoteform(){
    var x = document.getElementsByClassName('notes_container')[0];
    document.getElementById('paperbuttonclass').style.display="none";
    if(x.style.display =="block"){
        x.style.display="none";
        document.getElementById('paperbuttonclass').style.display="block";
    }
    else{
        x.style.display="block";
    }
}

function displaypaperform(){
    var x = document.getElementsByClassName('papers_container')[0];
    document.getElementById('notesbuttonclass').style.display="none";
    if(x.style.display =="block"){
        x.style.display="none";
        document.getElementById('notesbuttonclass').style.display="block";
    }
    else{
        x.style.display="block";
    }
}