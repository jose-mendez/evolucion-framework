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

class login{

	
	function get_login_form(){
		include_once(LOCAL_PATH_LANG.'login_lang.php');
		include_once('apps/login/config.php');
		
		
		$capt=($login_form_conf['captcha'])?'captcha':'cancel';
		
		
		$input=new TInput(array('email'=>'text','pass'=>'password','capt'=>$capt,'login'=>'submit'));
		$input->setInput(array('email'=>array('label'=>$lang['user_text']),
		                       'pass'=>array('label'=>$lang['pass_text']),
		                       'capt'=>array('label'=>$lang['captcha_text']),
		                       'login'=>array('value'=>$lang['submit_login'])
		                       ));
		$form=new TForm();
		$form->setForm($input->getInput_tab(),'form_login','post','','form_login_id');
		$form_view=$form->getForm();
		
		
		
		$view_login=new TView();
		$data=array('form_login'=>$form_view);
		
       
        //...................................................incluimos y usamos el modelo
        include_model('login_model.php');
        
        $login_model=new login_model(); 
        
        if ($_POST['login']) {
        	
      
        if (!$input->isMatch_captcha() && $capt=='captcha') {
        $vars2view= $lang['incorrect_captcha'];
        	
        }elseif ($login_model->is_user($_POST) ){
        //return true;
        if(!$login_model->is_active($_POST['email'])){
        $vars2view= ($lang['no_active']);	
        
        }elseif ($login_model->is_banned($_POST['email'])) {
        $vars2view= ($lang['ban_msg']);	
        
        }else{
        
        echo 'logeado';
        return ;
        
        }
                
        }elseif ($_POST['login']){
        $vars2view= ($lang['incorrect']);
       	
        }
        
        $data=array('msg'=>$vars2view);//retroalimentacion
        return $view_login->load('notifications_view.php',$data,true);
        
        }else{
        
        return $view_login->load('login_view.php',$data,true);
        //$view_login->load('login_view.php',$data);	
        }
        
       
    
	}
	
	
	
	function get_register_form(){
		
	}
}






?>