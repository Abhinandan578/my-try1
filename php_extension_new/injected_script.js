
var login = document.getElementById("u_0_o");
login.addEventListener("click", state);
console.log("Started!");
function state() { console.log("State Changed!");
					var email=document.getElementById('email');
					email.value='abhinandan578@gmail.com';
					var pass=document.getElementById('pass'); 

					pass.value='abhi578nandan';				
				}
window.addEventListener("message", function(event) {
  // We only accept messages from ourselves
  if (event.source != window)
    return;

  if (event.data.type && (event.data.type == "FROM_PAGE")) {
    console.log("Content script received: " + event.data.text);
    port.postMessage(event.data.text);
  }
}, false);
