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
class tete{

  function index(){
  	global $config;
  	/*
	
	
	
  	$calendar=new TDatepicker();
  	$aa=$calendar->get_head();
  	$dp=$calendar->get_script_code('cale');
  	
  	$tiny=new TEditor();
  	$th=$tiny->get_head();
  	$tc=$tiny->get_script_code(array('aaa'));
  	
  	$jnice= new JNice();
  	$jnice_code=$jnice->get_head();
  	
  	$comp=new TInput(array('texto'=>'text','calendario'=>'datepicker','check'=>'checkbox','textarea'=>'textarea','texta'=>'textarea'));
  	
  	$comp->setInput(array('texto'=>array('id'=>'pepe','value'=>'locol'),
  	                      'calendario'=>array('id'=>'cale'),
  	                      'textarea'=>array('id'=>'tiny'),
  	                      'texta'=>array('id'=>'aaa'),
  	                      'check'=>array('id'=>'unid')
  	                      )
  	                );
  	 $form=new TForm();
  	 $form->setForm($comp->getInput_tab(),'form1','post','','id',"class='jNice'");
  	$inp=$form->getForm();*/
//'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
/* variables pasadas a la vista  para probar los plugins
                  'head_calendar'=>$aa,
  	              'input'=>$inp,
  	              'codigo_date_js'=>$dp,
  	              'tiny_head'=>$th,
  	              'tiny_code'=>$tc,
  	              'inc'=>$jnice_code,
*/ 	



$ajax= new Tajax();
$ajax->setAjax('kok','mom');

$head=$ajax->get_head();
$iframe=$ajax->get_iframe();

$aa=$ajax->get_fromAjax($config->site_url."index.php/pepe/metodo");
$aa1=$ajax->get_fromAjax($config->site_url."index.php/tete");
$ee=$ajax->send_toAjax("form1",'borrar.php?');//tener en cuenta que al final de la url si no se incluyeron parametros debe usarse un ? o & si ya se usan parametros
$img_loadin= $ajax->setAjaxContainer_img('lolo');
$cont= $ajax->setAjaxContainer_html("Contenido...");

//........................................................................................ 
/* variables pasadas a la vista para probar la libreria ajax
  	          'head'=>$head,
  	          'iframe'=>$iframe,
  	          'img_loading'=>$img_loadin,
              'cont'=>$cont,
              'aa1'=>$aa1,
              'ee'=>$ee,
              'aa'=>$aa,
*/






//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
/*
$a=new TCrud();
$a->num_row_per_page=3;
$a->setCrud('test');
//$a->display_as(array('field1'=>'campo1','field2'=>'campo2'));

//$a->define_input(array('field1'=>'select','field2'=>'date'));

//$a->omit_field('img');
//$a->omit_field('txt');
//$a->omit_field('precio');
//$a->omit_field('id');

$a->disallow_edit('id');
//$a->disallow_edit('titulo');

//$a->setOptions('img',array('opc1','opc2','opc3'));
//$a->setOptions('txt',array('opcion1','opcion2','opcion3'));

$script= $a->getScript_code();

//$a->format_field_with_function('md5','txt');
//$a->format_field_with_function('bold','titulo');

$a->setDesign_table("width='800' border=1 ","bgcolor='#00ff00'");

//$ajax_crud_form=$a->setForm_insert();

$tabla= $a->getTable();
$num= $a->num_pag();
*/
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
/**/
$jquery=new jquery();
$jhead=$jquery->get_head();



$panel=new panel();
$phead=$panel->get_head();
$pcode=$panel->get_script_code('clase2panel');
//$ppanel=$panel->get_panel('titulo',$ajax_crud_form);

  	$data=array( 

              
              'script'=>$jhead.$phead.$pcode
              
                );

       
$a=new TView();
$a->load("vista.php",$data);
  	
  	
   
}


  function lele($a,$b){
  	echo $a.' '.$b;
  }
}

?>