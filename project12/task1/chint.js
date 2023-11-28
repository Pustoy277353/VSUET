var xmlHttp;
function showHint(str) {
    if (str.lengh == 0) {
        document.getElementById('txtHint').innerHTML = "";
        return;
    }
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser does not support AJAX!");
        return;
    }
    var url = "ghint.php";
    url = url + "?q=" + str;
    url = url + "&sid" + Math.random;
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("get", url, true);
    xmlHttp.send(null);
}
function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP")
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP")
        }
    }
    return xmlHttp;
}