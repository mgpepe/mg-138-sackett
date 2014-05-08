<?php
App::uses('AppController', 'Controller');
/**
 * Statics Controller
 *
 * @property Static $Static
 * @property PaginatorComponent $Paginator
 */
class StaticsController extends AppController {

public $uses = array('Openhouse');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function home() {
		$oh = $this->Openhouse->findById(1);
		$this->set('oh',$oh);
		$this->set('page', 'home');
	}
	public function availability() {
		$this->set('page', 'availability');
	}
	public function locale() {
		$this->set('page', 'locale');
	}
	public function passiv_standard() {
		$this->set('page', 'passiv_standard');
	}
	public function residences() {
		$this->set('page', 'residences');
	}
	public function floorplans($id=null) {
		$this->set('page', 'floorplans');
		$this->set('subpage', $id);
		$this->render('floorplans/'.$id);
	}
}
