function loadDoc() 
{
    var current_count,total_count;
    //get the values to be sent to the server.
     current_count = document.getElementById("currItems").innerHTML;
    
     total_count   = document.getElementById("totItems").innerHTML;
    
    if (window.XMLHttpRequest) 
    {
        //modern browsers
        var xhttp = new XMLHttpRequest();
    }

    xhttp.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
          $("#product-container").append(this.responseText);
          new_count = parseInt(current_count)+8;
          document.getElementById("currItems").innerHTML = new_count;
          
          //check if all products are displayed
          if(new_count >= total_count)
          {
              //then hide load more button
              $('#loadmore').hide();
          }
      }
    };

    //sends the request to the server
    xhttp.open('GET', 'php/loadmore.php?&current_count='+current_count, true);
    xhttp.send();
}