document.addEventListener('DOMContentLoaded', function() {
    var checkPageButton = document.getElementById('checkPage');
    checkPageButton.addEventListener('click', function(event) {
        console.log("Done");
        chrome.tabs.executeScript( null, {code:"var x = 10; x"},
   function(tab){ console.log(tab.url); } );
      },false);
  },false);