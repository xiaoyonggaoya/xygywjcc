if (window.location.href.endsWith("?i=1")) {
  var newUrl = window.location.href.replace("?i=1", "");
  window.location.href = newUrl;
}
if (window.location.href.endsWith("&i=1")) {
  var newUrl = window.location.href.replace("&i=1", "");
  window.location.href = newUrl;
}