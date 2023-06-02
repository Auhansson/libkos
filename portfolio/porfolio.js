let list_comment = []

function coment_users() {


    document.getElementById("impression").disabled = true;
    document.getElementById("name").disabled = true;
    document.getElementById("submitBtn").disabled = true;
    document.getElementById("selec").disabled = true;
    
    var overlay = document.createElement("div");
    overlay.setAttribute("id", "overlay");
    document.body.appendChild(overlay);

    var impression = document.getElementById("impression").value;
    var name = document.getElementById("name").value;
    let newRow = [impression, name];
    list_comment.push(newRow);


    document.getElementById("impression").disabled = false;
    document.getElementById("name").disabled = false;
    document.getElementById("submitBtn").disabled = false;
    document.getElementById("selec").disabled = false;
    overlay.parentNode.removeChild(overlay);
}

function clearTextarea() {
    document.getElementById('impression').value = '';
}
