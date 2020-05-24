<?php

/* Arquivo cliente.class.php */

class Cliente {
		private $idCliente;
        private $nomeCliente;
        private $emailCliente;
        private $telefone;

		/**
		 * Get the value of idCliente
		 */
		public function getIdCliente()
		{
				return $this->idCliente;
		}

		/**
		 * Set the value of idCliente
		 *
		 * @return  self
		 */
		public function setIdCliente($idCliente)
		{
				$this->idCliente = $idCliente;

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
         * Get the value of emailCliente
         */
        public function getEmailCliente()
        {
                return $this->emailCliente;
        }

        /**
         * Set the value of emailCliente
         *
         * @return  self
         */
        public function setEmailCliente($emailCliente)
        {
                $this->emailCliente = $emailCliente;

                return $this;
        }

        /**
         * Get the value of telefone
         */
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }
        //////////////////////////////////////////
        public function cadastrar() {
            include "class/Acessa.class.php";
            $nomeCliente = $this->nomeCliente;
            $emailCliente = $this->emailCliente;
            $telefone = $this->telefone;
            $stmt = $conn->prepare("INSERT INTO cliente (
            idCliente, nomeCliente,emailCliente,telefone) VALUES ('',?,?,?)");
            $stmt->bind_param("sss",$nomeCliente,$emailCliente,$telefone);
            if ($stmt->execute()) {
                $this->idCliente=$stmt->insert_id;
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
			$nomeCliente = $this->nomeCliente;///////////////////////
            $idCliente = $this->idCliente;
            $emailCliente = $this->emailCliente;
            $telefone = $this->telefone;
            $stmt = $conn->prepare("UPDATE cliente set
            nomeCliente=?, emailCliente=?, telefone=? where idCliente = ?");
            $stmt->bind_param("sssi",$nomeCliente,$emailCliente,$telefone,$idCliente);
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

        public function listar($ordem = "idCliente", $qt=50) {////////////////nomeCliente?
            include "class/Acessa.class.php";
            $sql = "SELECT * from cliente order by $ordem limit $qt";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {

                while($linha = $resultado->fetch_assoc()) {
                    $dados[] =
                    array ("idCliente"=>$linha["idCliente"],
                    "nomeCliente"=>$linha["nomeCliente"],
                    "emailCliente"=>$linha["emailCliente"],
                    "telefone"=>$linha["telefone"]
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
            $idCliente = $this->idCliente;
            $emailCliente = $this->emailCliente;
            $telefone = $this->telefone;

            $sql = "DELETE from cliente where idCliente = ".$idCliente;

            if ($conn->query($sql)) {
                return 0;
            }
            else {
                return 1;
            }

        }

		public function contagem(){

			include "class/Acessa.class.php";



            $sql = "SELECT count(idCliente) as total from cliente";///total?

            $resultado = $conn->query($sql);


            while($linha = $resultado->fetch_assoc()) {
                return $linha["total"];
            }

            $conn->close();
        }

		public function buscar($idCliente){

			include "class/Acessa.class.php";
            $sql = "SELECT * from cliente
             where idCliente = ".$idCliente;

            $resultado = $conn->query($sql);


            while($linha = $resultado->fetch_assoc()) {
                self::setIdCliente($linha["idCliente"]);
                self::setnomeCliente($linha["nomeCliente"]);
                self::setemailCliente($linha["emailCliente"]);
                self::settelefone($linha["telefone"]);
            }

            $conn->close();
        }
}

?>
