<?php
namespace Culto\Controller;

use Zend\File\Transfer\Adapter\FilterPluginManager;

use Zend\Filter\File\Rename;

use Zend\Http\PhpEnvironment\Request;

use Zend\View\Model\ViewModel;

class CultoController extends CrudController{
	
	public function __construct(){
		$this->entity = 'Culto\Entity\CultoEntity';
		$this->service = 'Culto\Service\CultoService';
		$this->form = 'Culto\Form\CultoForm';
		$this->route = 'culto';
		$this->controller = 'CultoController';	
	}
	public function addAction(){
		$form = new $this->form();
		$form->get('submit')->setValue('Salvar');
	
		$request = $this->getRequest();
	
		if ($request->isPost()) {
			$post    = array_merge_recursive(
					$this->getRequest()->getPost()->toArray(),
					$this->getRequest()->getFiles()->toArray()
			);
			$form->setData($post);
				
		if ($form->isValid()) {
				
				//UPLOAD***
				$imageAdapter = new \Zend\File\Transfer\Adapter\Http(); 
				
				/*$filter = new Rename(array(
						"target"    => "./data/uploads/newfile.txt",
						"randomize" => true,
				));*/
				//print_r(__FILE__); exit;
				$imageAdapter->setDestination('D:\xampp\htdocs\container-root\public\img\upload\docs');
							//->setFilters($filter)
				
				
				if ($imageAdapter->isValid()) {
					$imageAdapter->receive();
					$fileTranfer = true;
						
				}else {
					$fileTranfer = false;
					}
				//FIMUPLOAD***
				$service = $this->getServiceLocator()->get($this->service);				
				$service->insert($post);
				
				$this->flashMessenger()->addSuccessMessage("Tranferência concluída,
															Culto criado com sucesso");	
					
				return $this->redirect()->toRoute($this->route);
			}
			else {
				$this->flashMessenger()->addErrorMessage("	Erro ao adicionar culto,
															Erro ao enviar arquivo!");
			}
		}
		return new ViewModel(
				array(	'form' => $form)
		);
	
	
	}
	
}