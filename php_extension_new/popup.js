document.addEventListener('DOMContentLoaded', function() {
    var checkPageButton = document.getElementById('checkPage');
    checkPageButton.addEventListener('click', function() {
        chrome.tabs.query({currentWindow: true, active: true}, function(tab){
            doc = document;
            var form = doc.createElement('form');
            form.action = 'https://127.0.0.1/php_extension_new/ABC.php/';
            form.method = 'post';
            var input = doc.createElement('input');
            input.type = 'hidden';
            input.name = 'url';
            input.value = tab[0].url;
            form.appendChild(input);
            doc.body.appendChild(form);
            form.submit();
        });
    }, false);
}, false);