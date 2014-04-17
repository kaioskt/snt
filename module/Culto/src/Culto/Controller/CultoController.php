<?php
namespace Culto\Controller;

use Zend\File\Transfer\Adapter\FilterPluginManager;

use Zend\Filter\File\Rename;

use Zend\Http\PhpEnvironment\Request;
use Culto\Controller\Plugin\Mkdir;
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
			
			//	$imageAdapter->setDestination('./data/upload');
				$pieces = explode("/", $post['cultoData']);
				$pasta = $pieces[2].'-'.$pieces[1].'-'.$pieces[0];
				
				$diretorio = $this->getRequest()->getServer('DOCUMENT_ROOT', false) . '/public/upload/'.$pasta.'/';
				
				//print_r($diretorio); exit;
				
	
				if ($this->Mkdir()->verifica($diretorio)) {
				} else {
					 $this->Mkdir()->criarDiretorio($diretorio); 
					 $imageAdapter->setDestination($diretorio);
				}
				
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