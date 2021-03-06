<?php
namespace Pragma\Forms;

class LayeredFormBlock{
	const DEFAULT_HEADER_LEVEL = 2;
	protected $fields = [];
	protected $label = '';
	protected $id = '';
	protected $headerLevel = self::DEFAULT_HEADER_LEVEL;

	protected $layout = null;

	public function __construct($id, $label = '', $hlevel = self::DEFAULT_HEADER_LEVEL){
		$this->id = $id;
		$this->label = $label;
		$this->headerLevel = $hlevel;
		$this->layout = __DIR__ . '/Views/default_block_layout.tpl.php';
	}

	public function getId(){
		return $this->id;
	}

	public function setLayout($path){
		$this->layout = $path;
	}

	public function getLayout(){
		return $this->layout;
	}

	public function setLabel($label){
		$this->label = $label;
	}

	public function getLabel(){
		return $this->label;
	}

	public function setHeaderLevel($hlevel){
		$this->headerLevel = $hlevel;
	}

	public function getHeaderLevel(){
		return $this->headerLevel;
	}

	public function addField($field, $label){
		$this->fields[] = ['label' => $label, 'field' => $field];
	}

	public function getFields(){
		return $this->fields;
	}


}
