
$(document).ready(function(){  
        $('.view_perfil').click(function(){ 
                
                 var id = $(this).attr("id");  
                 console.log( ".---");  console.log(id ); 
               
                 var  url= 'http://localhost/clinica/assets/get_perfil.php';
               submitStates(url,id);
        
        }); 


        $('.view_ride').click(function(){ 
            
            var id = $(this).attr("id");  
            console.log( ".---");  console.log(id ); 
          
            var  url= 'http://localhost/ticorides/assets/getride.php';
          submitStates(url,id);
   
        });  
        




        function submitStates(url,id)
        { 
            console.log( "I"); 
          
            console.log(id); 
          xhr= new XMLHttpRequest();
         
          var xhr = new XMLHttpRequest();
          xhr.open("POST", url, true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send(id);
          xhr.onreadystatechange=function() 
          {
            if (xhr.readyState == 4) 
            {
             
              if (xhr.status == 200) 
              {
               
        console.log(xhr.responseText);
        $('#datos').html(xhr.responseText);  
                           $('#view-modal').modal("show"); 
              } 
              else 
              {
                alert("Error " + xhr.status);
              }
            }
            else
            {
            }
          }
        }
        
        });  

     

    
