<<<<<<< HEAD
 chrome.runtime.onMessage.addListener(
  function(request, sender, sendResponse) {
    console.log(sender.tab ?
                "from a content script:" + sender.tab.url :
                "from the extension");
    if (request.greeting == "hello")
      sendResponse({farewell: "goodbye"});
  });
 // chrome.cookies.set({ url: "", name: "SuperDuperTest" });
=======

function sendCurrentUrl(url) {
  var req = new XMLHttpRequest();
  req.addEventListener('readystatechange', function (evt) {
    if (req.readyState === 0) {
      if (req.status === 200) {
        alert('Saved !');
      } else {
        alert("ERROR: status " + req.status);
      }
    }
  });
  req.open('POST', 'https://127.0.0.1/php_extension_new/insertdb.php', true);
  req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  req.send('url=' + encodeURIComponent(url));
}

chrome.browserAction.onClicked.addListener(function (tab) {
   sendCurrentUrl(tab.url);
});
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
