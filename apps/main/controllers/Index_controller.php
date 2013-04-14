
<?php

/*Evolucion_Framework v1, is a framework developed in object-oriented php

Copyright (C) 2011 <Jose Mendez Perez>

This file is part of Evolucion_Framework v1.

Evolucion_Framework v1 is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License.

Evolucion_Framework v1 is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Evolucion_Framework v1; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA or
see <http://www.gnu.org/licenses/>.

Contact us in evolucionweb.co.cc@gmail.com */










//echo 'ytr';
/*
$a=new b();

$tab= new TTable();

$a->get_last();



$tab->setTable(fetchrow2arr(),'','','');
$lele=$tab->getTable();


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*


*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                /////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                            /////////////////////////////////////////////////////////




////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
//$login= new Tlogin('','');
//$login->setLoginform('');
//$login->setRegisterform('');



class Index_controller{//la clase se tiene que llamar igual que el nombre del archivo
	
       public function index(){ //el metodo index sera ejecutado por defecto cuando en la uri no se especifique el metodo a ejecutar, los metodos deben ser public

$time= new Benchmark();//esta clase es para saber el tiempo que se demora el framework en general el codigo 
$time->mark('inicio');//hacemos una marca de inicio
       
$a=new TView();
$time->mark('fin');//hacemos una marca de fin

$vars= array(
			 'timeElapsed' => $time->elapsed_time('inicio','fin')
			);


$a->load("Index.php", $vars);//le pasamos las variables a la vista.

	}
	
	
//-----------------------------------------------------------------------------------------------------------------------------	
    public function EjemploAjax(){
		global $config;
		
			$time= new Benchmark();
			$time->mark('inicio');
		
			$ajax= new Tajax();
			
			$get_head=$ajax->get_head();//esta linea es para incluir el archivo .js necesario para que el Ajax funcione.
			$ajax->setAjax('idcontenedor','idparaimagen');//esta linea es para definir los id de los div del contenedor y el contenedor de la imagen de cargando.
			$getAjax1=$ajax->get_fromAjax($config->site_url."apps/main/AjaxFiles/unit.php");
			$getAjax2=$ajax->get_fromAjax($config->site_url."apps/main/AjaxFiles/unit2.php");
			$sendAjax=$ajax->send_toAjax("form1",$config->site_url."apps/main/AjaxFiles/recivir.php?");//tener en cuenta que al final de la url si no se incluyeron parametros debe usarse un ? o & si ya se usan parametros
			echo $ajax->get_iframe();//con este metodo obtenemos el iframe necesario para la compatibilidad con IE (para que funcione el boton "atras")
			$img_loadin= $ajax->setAjaxContainer_img('Aqui se cargara la imagen',"style='border:solid 1px #ccc'");
			$contenido= $ajax->setAjaxContainer_html("Aqui se cargara el Contenido Ajax...","style='border:solid 1px #ccc'");
			
			$time->mark('fin');
			$data=array(
						  'get_head' => $get_head, 
						  'getAjax1'=>$getAjax1,
						  'getAjax2'=>$getAjax2,
						  'sendAjax'=>$sendAjax,
						  'img_loading'=>$img_loadin,
						  'contenido'=>$contenido,
						  'timeElapsed' => $time->elapsed_time('inicio','fin')
						  
						  );

			$a=new TView();
			
			
			$a->load("EjemploAjax.php",$data);
		
	}


//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
	
	public function EjemploCrud(){
		
				$time= new Benchmark();
			$time->mark('inicio');

$a=new TCrud();
$a->num_row_per_page=4;
$a->setCrud('test');
$a->display_as(array('id'=>'identificador','field1'=>'campo custom','field2'=>'otro campo custom'));

$a->define_input(array('field1'=>'select','field2'=>'date'));

//$a->omit_field('img');
//$a->omit_field('txt');
//$a->omit_field('precio');
//$a->omit_field('id');

$a->disallow_edit('id');
//$a->disallow_edit('titulo');

$a->setOptions('field1',array('opc1','opc2','opc3'));
//$a->setOptions('txt',array('opcion1','opcion2','opcion3'));

$get_head = $a->getScript_code();


function bold($val){
		return "<b>$val</b>";
	}
//$a->format_field_with_function('md5','txt');
$a->format_field_with_function('bold','id');

$a->setDesign_table("width='800' border=1 ","bgcolor='#ff0000'");

//echo $a->setForm_insert();

/*$e=new TWindowbox();
$e->setWindowbox($a->setForm_insert(),'header text','',array('width'=>'400'));
$e->renderWindowbox();
*/
$table = $a->getTable(true,'advanced');
$numPag = $a->num_pag();


//echo $a->get_tiny_script();



$time->mark('fin');
			$data=array(
						  'get_head' => $get_head, 
						  'table'=>$table,
						  'numPag'=>$numPag,
						  'timeElapsed' => $time->elapsed_time('inicio','fin')
						  
						  );

			$a=new TView();
			
			
			$a->load("EjemploCrud.php",$data);
		
		}
}






?>