document.addEventListener('DOMContentLoaded', function() {
    var checkPageButton = document.getElementById('checkPage');
    checkPageButton.addEventListener('click', function() {
        chrome.tabs.query({currentWindow: true, active: true}, function(tab){
            doc = document;
            var form = doc.createElement('form');
<<<<<<< HEAD
            form.action = 'https://localhost/php_extension_new/ABC.php/';
=======
            form.action = 'https://127.0.0.1/php_extension_new/ABC.php/';
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
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