chrome.runtime.sendMessage({greeting: "hello"}, function(response) {
  console.log(response.farewell);
});
var s = document.createElement('script');
// TODO: add "script.js" to web_accessible_resources in manifest.json
s.src = chrome.extension.getURL('injected_script.js');
s.onload = function() {
    this.remove();
};
(document.head || document.documentElement).appendChild(s);

// var port = chrome.runtime.connect();
//text copy;

