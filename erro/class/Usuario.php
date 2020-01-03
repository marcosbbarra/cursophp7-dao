<?php

	class Usuario {
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario(){
			return $this->idusuario;
		}
		public function setIdusuario($val){
			$this->idusuario = $val;
		}

		public function getDeslogin(){
			return $this->deslogin;
		}
		public function setDeslogin($val){
			$this->deslogin = $val;
		}

		public function getDessenha(){
			return $this->dessenha;
		}
		public function setDessenha($val){
			$this->dessenha = $val;
		}

		public function getDtcadastro(){
			return $this->dtcadastro;
		}
		public function setDtcadastro($val){
			$this->dtcadastro = $val;
		}						

		public function loadById($id){
			
			$sql = new Sql();
			$id = (int)$id;
			$result = $sql->select("select * from tb_usuarios where idusuario = $id", array(
				':ID'=>$id
			));

			if (count($result) > 0) {
				$row = $result[0];
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));

			} 
		}

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()
			));
		}
			
	}



?>