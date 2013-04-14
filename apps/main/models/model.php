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
class b extends TModel{
public $id;
public $category;



function get_last(){
//$this->where(array('5'=>'id', '3'=>'id'),'or');

//$this->id='';
//$this->category='Intencionalmente';
//$this->set('category');

//$this->id='99';
//$this->category='kolo';
//$this->where();
//$this->update('article');

//$this->delete('category',array('12'=>'id'));


/*
$this->get('category',3);
print_r($this->id);echo '<br>';
print_r($this->category);
*/


return $this->get('category',10);



}

}



?>