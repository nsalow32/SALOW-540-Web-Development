function getImages() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("make".value = xhr.responseText;
        }
    }

    xhr.open("GET", "index.php?result=" + result, true);
    xhr.send(null);
}

xhr.addEventListener("click", scroll, false);
