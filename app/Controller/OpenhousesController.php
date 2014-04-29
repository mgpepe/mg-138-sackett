<?php
App::uses('AppController', 'Controller');
/**
 * Openhouses Controller
 *
 * @property Openhouse $Openhouse
 * @property PaginatorComponent $Paginator
 */
class OpenhousesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$oh = $this->Openhouse->findById(1);
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Openhouse->save($this->request->data)) {
				$this->Session->setFlash(__('The openhouse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The openhouse could not be saved. Please, try again.'));
			}
		}
		$this->request->data['Openhouse']=$oh['Openhouse'];
		$this->set('page', 'openhouses');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Openhouse->exists($id)) {
			throw new NotFoundException(__('Invalid openhouse'));
		}
		$options = array('conditions' => array('Openhouse.' . $this->Openhouse->primaryKey => $id));
		$this->set('openhouse', $this->Openhouse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Openhouse->create();
			if ($this->Openhouse->save($this->request->data)) {
				$this->Session->setFlash(__('The openhouse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The openhouse could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Openhouse->exists($id)) {
			throw new NotFoundException(__('Invalid openhouse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Openhouse->save($this->request->data)) {
				$this->Session->setFlash(__('The openhouse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The openhouse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Openhouse.' . $this->Openhouse->primaryKey => $id));
			$this->request->data = $this->Openhouse->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Openhouse->id = $id;
		if (!$this->Openhouse->exists()) {
			throw new NotFoundException(__('Invalid openhouse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Openhouse->delete()) {
			$this->Session->setFlash(__('The openhouse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The openhouse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
