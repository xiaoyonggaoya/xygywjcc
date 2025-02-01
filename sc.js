var t = null;
    t = setTimeout(time, 1000); 
function time() {
    clearTimeout(t); 
    dt = new Date();
    var y = dt.getFullYear();
    document.querySelector(".copyrighttime").innerHTML =
    y +
    "";
    t = setTimeout(time, 86400000); 
}

fetch('/fwl.php')
.then(response => response.json())
.then(data => {
document.getElementById('fwltj').innerText = data.visitCount;
})
.catch(error => console.error('0:', error));