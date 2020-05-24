<?php

/* Arquivo cliente.class.php */

class Aluga {
		private $idAluguel;
        private $nomeCliente;
        private $titulo;
        private $dataRetirada;
        private $dataEntregue;


		/**
		 * Get the value of idAluguel
		 */ 
		public function getIdAluguel()
		{
				return $this->idAluguel;
		}

		/**
		 * Set the value of idAluguel
		 *
		 * @return  self
		 */ 
		public function setIdAluguel($idAluguel)
		{
				$this->idAluguel = $idAluguel;

				return $this;
		}

        /**
         * Get the value of nomeCliente
         */ 
        public function getNomeCliente()
        {
                return $this->nomeCliente;
        }

        /**
         * Set the value of nomeCliente
         *
         * @return  self
         */ 
        public function setNomeCliente($nomeCliente)
        {
                $this->nomeCliente = $nomeCliente;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of dataRetirada
         */ 
        public function getDataRetirada()
        {
                return $this->dataRetirada;
        }

        /**
         * Set the value of dataRetirada
         *
         * @return  self
         */ 
        public function setDataRetirada($dataRetirada)
        {
                $this->dataRetirada = $dataRetirada;

                return $this;
        }

        /**
         * Get the value of dataEntrega
         */ 
        public function getDataEntregue()
        {
                return $this->dataEntregue;
        }

        /**
         * Set the value of dataEntrega
         *
         * @return  self
         */ 
        public function setDataEntregue($dataEntregue)
        {
                $this->dataEntregue = $dataEntregue;

                return $this;
        }
          //////////////////////////////////////////
          public function cadastrar() {
            include "class/Acessa.class.php";
            
            $nomeCliente = $this->nomeCliente;
            $titulo = $this->titulo;
            $dataRetirada = $this->dataRetirada;
            $dataEntregue= $this->dataEntregue;

            $stmt = $conn->prepare("INSERT INTO aluga (
            idAluguel,nomeCliente,titulo, dataRetirada,dataEntregue) VALUES ('',?,?,?,?)");
            $stmt->bind_param("ssss",$nomeCliente, $titulo, $dataRetirada, $dataEntregue);
            if ($stmt->execute()) {
                $this->idAluguel=$stmt->insert_id;
                return 0;
            }
            else {
                return 1;
            }

            $stmt->close();
            $conn->close();


        }
        public function alterar() {
            include "class/Acessa.class.php";
            
            $nomeCliente = $this->nomeCliente;
            $titulo = $this->titulo;
			$dataRetirada = $this->dataRetirada;
            $dataEntregue = $this->dataEntregue;
            $idAluguel = $this->idAluguel;
            
            $stmt = $conn->prepare("UPDATE aluga set
           nomeCliente =?, titulo =?, dataRetirada=?, dataEntregue=? where idAluguel = ?");
            $stmt->bind_param("ssssi", $nomeCliente,$titulo,$dataRetirada,$dataEntregue,$idAluguel);
            $stmt->execute();

            if (!$stmt->errno)
            {
                return 0;
            }
            else {
                return 1;
            }
            $stmt->close();
            $conn->close();
        }

        public function listar($ordem = "idAluguel", $qt=40) {////////////////nomeCliente?
            include "class/Acessa.class.php";
            $sql = "SELECT * from aluga order by $ordem limit $qt";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {

                while($linha = $resultado->fetch_assoc()) {
                    $dados[] =
                    array ("idAluguel"=>$linha["idAluguel"],
                    "nomeCliente"=>$linha["nomeCliente"],
                    "titulo"=>$linha["titulo"],
                    "dataRetirada"=>$linha["dataRetirada"],
                    "dataEntregue"=>$linha["dataEntregue"],
                   
                    );
                }
                return $dados;
            }
            else {
                return 1;
            }
            $conn->close();
        }
		public function excluir() {
            include "class/Acessa.class.php";
            $idAluguel = $this->idAluguel;
            $nomeCliente = $this->nomeCliente;
            $titulo = $this->titulo;
            $dataRetirada = $this->dataRetirada;
            $dataEntregue = $this->dataEntregue;

            $sql = "DELETE from aluga where idAluguel = ".$idAluguel;

            if ($conn->query($sql)) {
                return 0;
            }
            else {
                return 1;
            }

        }

		public function contagem(){

			include "class/Acessa.class.php";



            $sql = "SELECT count(idAluguel) as total from aluga";///total?

            $resultado = $conn->query($sql);


            while($linha = $resultado->fetch_assoc()) {
                return $linha["total"];
            }

            $conn->close();
        }

		public function buscar($idAluguel){

			include "class/Acessa.class.php";
            $sql = "SELECT * from aluga
             where idAluguel = ".$idAluguel;

            $resultado = $conn->query($sql);


            while($linha = $resultado->fetch_assoc()) {
                self::setIdAluguel($linha["idAluguel"]);
                self::setNomeCliente($linha["nomeCliente"]);
                self::setTitulo($linha["titulo"]);
                self::setDataRetirada($linha["dataRetirada"]);
                self::setDataEntregue($linha["dataEntregue"]);
            }

            $conn->close();
        }
}

?>
