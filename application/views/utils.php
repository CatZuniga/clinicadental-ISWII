<?php

function createTable($pacientes){

	foreach($pacientes as $paciente){
		 
		echo '<tr>
		<td>'.$paciente['nombre'].'</td> 
		<td>'.$paciente['cedula'].'</td>
		<td> <input  type="button" value="&#xf2b9; Ir"  id='.$paciente['id'].' class="fa btn-info btn-sm view_perfil" /></td>  		
		 
		 <td> 
		 <input type="submit"  name="verExp_med['.$paciente['id'].']" value=" &#xf0f6; Ir" class="fa btn-info btn-sm" />	
		 </td> 
		 <td> 
		 <input type="submit"  name="verExp_dental['.$paciente['id'].']" value="&#xf15c; Ir" class="fa btn-info btn-sm" />	
		 </td> 
		 </tr>
		';

		
}	
}



function createTableUser($rides){

	foreach($rides as $ride){
		
	   echo '	<tr>
	   <td>'.$ride['name'].'</td>
	   <td>'.$ride['start'].'</td>
	   <td>'.$ride['end'].'</td>			
	   <td>  

	   <input type="submit"  name="delete['.$ride['id'].']" value=" &#xf1f8; Delete" class="fa btn-in btn-sm" />	
	   <input type="submit"  name="update['.$ride['id'].']" value=" &#xf040; Edit" class=" fa btn-in btn-sm" /> 
			 </td>
		</tr>
	   ';   
}	
}


?>