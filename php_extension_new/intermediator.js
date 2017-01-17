document.addEventListener('DOMContentLoaded', function() {
    var checkPageButton = document.getElementById('checkPage');
    checkPageButton.addEventListener('click', function(event) {
        console.log("Done");
<<<<<<< HEAD
        // event.preventDefault();
=======
        event.preventDefault();
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
        chrome.tabs.query({currentWindow: true, active: true}, function(tab){
            doc = document;
            var form = doc.createElement('form');
            form.action = 'http://localhost/php_extension_new/login_confirm.php';
            form.method = 'post';
            var input1 = doc.createElement('input');
            input1.type = 'hidden';
            input1.name = 'username';
            input1.value = document.getElementById('username').value;
            var input2 = doc.createElement('input');
            input2.type = 'hidden';
            input2.name = 'password';
            input2.value = document.getElementById("password").value;
<<<<<<< HEAD
            var input3 = doc.createElement('input');
            input3.type = 'hidden';
            input3.name = 'url';
            input3.value = tab[0].url
            form.appendChild(input1);
            form.appendChild(input2);
            form.appendChild(input3);
=======
            form.appendChild(input1);
            form.appendChild(input2);
>>>>>>> 3f2bc179fa748918c4e83fca192bc615c2c8c146
            console.log(form);
            doc.body.appendChild(form);
            form.submit();
        });
    }, false);
}, false);