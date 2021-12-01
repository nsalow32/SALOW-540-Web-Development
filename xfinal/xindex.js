function getImages() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("background".value = xhr.responseText).addEventListener("click", getImages)
        }
    }

    xhr.open("GET", "index.php?result=" + result, true);
    xhr.send(null);
}


var something = JSON.parse(xhr.responseText)
// for loop
function gotData(giphy) {
    for (var i = 0; i < giphy.data.length; i++) {
        createImg(giphy.data[i].images.original.url);
    }
}
$("body").append('<iframe src="'+ something[i] +'" blablathe rest of the iframe')



//xhr.addEventListener("click", scroll);
