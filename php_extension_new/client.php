
<html>
  <head>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
  </head>
  <body>
  <h2> Client example </h2>
  <h3>Output: </h3>
  <button id="click_button">Click here to get url</button>
  <div id="output">this element will be accessed by jquery and this text will be replaced</div>

  <script id="source" language="javascript" type="text/javascript">


  $('#click_button').click(function()
  {
    
    $.ajax({   
      
      url: 'api.php',                  //the script to call to get data      
      data: "",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var id = data[0];              //get id
        var vname = data[1]; 
        $('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);     //Set output element html
        //recommend reading up on jquery selectors they are awesome http://api.jquery.com/category/selectors/
      } 
    });
  
  }); 
  </script>
   
  </body>
</html>  
<!-- document.getElementById("theButton").addEventListener("click",
    function() {
  window.postMessage({ type: "FROM_PAGE", text: "Hello from the webpage!" }, "*");
}, false); -->