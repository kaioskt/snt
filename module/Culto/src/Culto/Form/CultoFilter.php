<?php
namespace Culto\Form;

use Zend\InputFilter\InputFilter;
class CultoFilter extends InputFilter{

	public function __construct(){
			
		$this->add(array(
				'name' => 'id',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'cultoData',
				'required' => true,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'nomePastor',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'preletor',
				'required' => true,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
				'validators' => array(
						array(
								'name' => 'NotEmpty',
								'options' => array(
										'messages' => array(
												'isEmpty' => 'Não pode estar em branco'
										),
								),
						),
				),
		));

		$this->add(array(
				'name' => 'reuniao',
				'required' => true,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
				'validators' => array(
						array(
								'name' => 'NotEmpty',
								'options' => array(
										'messages' => array(
												'isEmpty' => 'Não pode estar em branco'
										),
								),
						),
				),
		));

		$this->add(array(
				'name' => 'tema',
				'required' => true,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
				'validators' => array(
						array(
								'name' => 'NotEmpty',
								'options' => array(
										'messages' => array(
												'isEmpty' => 'Não pode estar em branco'
										),
								),
						),
				),
		));

		$this->add(array(
				'name' => 'txtBiblico',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'numPessoas',
				'required' => true,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
				'validators' => array(
						array(
								'name' => 'NotEmpty',
								'options' => array(
										'messages' => array(
												'isEmpty' => 'Não pode estar em branco'
										),
								),
						),
				),
		));
		$this->add(array(
				'name' => 'numLideres',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'numConsolid',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));



		$this->add(array(
				'name' => 'dnhDizimos',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'chqDizimos',
				'required' => false,
				'filters' => array(
						//array('name' => 'Digits'),
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'moeDizimos',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'dnhOfertas',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'chqOfertas',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'moeOfertas',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'dnhParcDeus',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'chqParcDeus',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));

		$this->add(array(
				'name' => 'moeParcDeus',
				'required' => false,
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
		));
		
				
		$this->add(array(
				'name' => 'anexos',
				'required' => true,
				/*'validators' => array(
						array(	'name' => 'filesize',
								'options' => array(
										'max' => 1000000, //1MB
								)
						),
				),
				/*'filter' =>(array(
				    array(
				        "source"    => "*",
				        "target"    => "./public/img/upload/doc/",
				        "randomize" => true,
				    ),
				))*/
		));
	}


}