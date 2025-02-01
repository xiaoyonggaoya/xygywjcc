document.getElementById("ym").innerHTML = `localhost:8080`;
function upload(fileInputId, fileIndex)
{
var file = document.getElementById(fileInputId).files[fileIndex];
var blob;
var reader = new FileReader();
reader.readAsArrayBuffer(file);
reader.onloadend  = function(evt)
{
xhr = new XMLHttpRequest();
xhr.open("POST", "upload.php?f=" + file.name, true);
XMLHttpRequest.prototype.mySendAsBinary = function(text){
var ui8a = new Uint8Array(new Int8Array(text));
if(typeof window.Blob == "function")
{
blob = new Blob([ui8a]);
}
else{
var bb = new (window.MozBlobBuilder || window.WebKitBlobBuilder || window.BlobBuilder)();
bb.append(ui8a);
blob = bb.getBlob();
}
this.send(blob);
}
var eventSource = xhr.upload || xhr;
eventSource.addEventListener("progress", function(e) {
var position = e.position || e.loaded;
var total = e.totalSize || e.total;
var percentage = Math.round((position/total)*100);
});
xhr.onreadystatechange = function()
{
if(this.readyState == 4 && this.status == 200)
{
document.getElementById("tishi").innerHTML = `<b>文件上传成功</b>`;
}
};
xhr.mySendAsBinary(evt.target.result);
};
}
function pre_upload(){
var inp = document.getElementById('file');
for (var i = 0; i < inp.files.length; ++i) {
upload("file", i);
}
var file = document.getElementById('file');
var wjname = document.getElementById('wjname');
if (file.files.length > 0) {
var file = file.files[0];
var fileName = file.name;
var domain = 'https://localhost:8080/f/';
var url = domain + fileName;
wjname.value = url;
}
var file = document.getElementById('file');
var imglink = document.getElementById('imglink');
if (file.files.length > 0) {
var file = file.files[0];
var fileName = file.name;
var domain = 'https://i1.wp.com/localhost:8080/f/';
var url1 = domain + fileName;
imglink.value = url1;
}
var file = document.getElementById('file');
var player = document.getElementById('player');
if (file.files.length > 0) {
var file = file.files[0];
var fileName = file.name;
var domain = 'https://localhost:8080/player.php?filename=';
var url2 = domain + fileName;
player.value = url2;
}
var file = document.getElementById('file');
var imgview = document.getElementById('imgview');
if (file.files.length > 0) {
var file = file.files[0];
var fileName = file.name;
var domain = 'https://localhost:8080/imgview.html?filename=f/';
var url3 = domain + fileName;
imgview.value = url3;
}
}