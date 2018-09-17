
<?php

function createTable_estado($estados){

foreach($estados as $estado){
     
    echo '<tr>
    <td>'.$estado['fecha'].'</td> 
    <td>'.$estado['pieza_46'].'</td>		
    <td>'.$estado['pieza_85'].'</td>
    <td>	
   
     
     <input type="submit"  name="delete_estado['.$estado['id'].']" value="&#xf014; " class="fa btn-dark btn-xm" />	
     </td> 
     </tr>
    ';

    
}	
}


function createTable_alteracion($alteraciones){

    foreach($alteraciones as $alteracion){
         
        echo '<tr>
        <td>'.$alteracion['fecha'].'</td> 
        <td>'.$alteracion['pieza_46'].'</td>		
        <td>'.$alteracion['pieza_85'].'</td>
        <td>	
      
         
         <input type="submit"  name="delete_alteracion['.$alteracion['id'].']" value="&#xf014; " class="fa btn-dark btn-xm" />	
         </td> 
         </tr>
        ';
    
        
    }	
    }
    function createTable_peridontal($peridontales){

        foreach($peridontales as $peridontal){
             
            echo '<tr>
            <td>'.$peridontal['fecha'].'</td> 
            <td>'.$peridontal['17/16'].'</td>
            <td>'.$peridontal['pieza11'].'</td>
            <td>'.$peridontal['26/27'].'</td>   
            <td>'.$peridontal['36/37'].'</td> 	
            <td>'.$peridontal['pieza31'].'</td>
            <td>'.$peridontal['47/46'].'</td>
            <td>	
             <input type="submit"  name="delete_peridontal['.$peridontal['id'].']" value="&#xf014; " class="fa btn-dark btn-sm" />	
             </td> 
             </tr>
            ';
        
            
        }	
        }

?>
