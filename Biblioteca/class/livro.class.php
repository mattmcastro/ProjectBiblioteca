<?php

/* Arquivo livro.class.php */

class Livro {
		private $idLivro;
        private $titulo;
        private $autor;
        private $dataLancamento;



		/**
		 * Get the value of idLivro
		 */ 
		public function getIdLivro()
		{
				return $this->idLivro;
		}

		/**
		 * Set the value of idLivro
		 *
		 * @return  self
		 */ 
		public function setIdLivro($idLivro)
		{
				$this->idLivro = $idLivro;

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
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of dataLancamento
     */ 
    public function getDataLancamento()
    {
        return $this->dataLancamento;
    }

    /**
     * Set the value of dataLancamento
     *
     * @return  self
     */ 
    public function setDataLancamento($dataLancamento)
    {
        $this->dataLancamento = $dataLancamento;

        return $this;
    }

    //////////////////////////////////////////
    public function cadastrar() {
      include "class/Acessa.class.php";
      $titulo = $this->titulo;
      $autor = $this->autor;
      $dataLancamento = $this->dataLancamento;
      $stmt = $conn->prepare("INSERT INTO livro (
      idLivro, titulo,autor,dataLancamento) VALUES ('',?,?,?)");
      $stmt->bind_param("sss",$titulo,$autor,$dataLancamento);///////////////////////////////
      if ($stmt->execute()) {
          $this->idLivro=$stmt->insert_id;
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
      $idLivro = $this->idLivro;
      $titulo = $this->titulo;
      $autor = $this->autor;
      $dataLancamento = $this->dataLancamento;
      $stmt = $conn->prepare("UPDATE livro set
      titulo=?, autor=?, dataLancamento=? where idLivro = ?");
      $stmt->bind_param("sssi",$titulo,$autor,$dataLancamento,$idLivro);////////////////////////
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

  public function listar($ordem = "idLivro", $qt=30) {////////////////nomeCliente?
      include "class/Acessa.class.php";
      $sql = "SELECT * from livro order by $ordem limit $qt";
      $resultado = $conn->query($sql);

      if ($resultado->num_rows > 0) {

          while($linha = $resultado->fetch_assoc()) {
              $dados[] =
              array ("idLivro"=>$linha["idLivro"],
              "titulo"=>$linha["titulo"],
              "autor"=>$linha["autor"],
              "dataLancamento"=>$linha["dataLancamento"]
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
      $idLivro = $this->idLivro;
      $titulo = $this->titulo;
      $autor = $this->autor;
      $dataLancamento = $this->dataLancamento;

      $sql = "DELETE from livro where idLivro = ".$idLivro;

      if ($conn->query($sql)) {
          return 0;
      }
      else {
          return 1;
      }

  }

public function contagem(){

include "class/Acessa.class.php";



      $sql = "SELECT count(idLivro) as total from livro";

      $resultado = $conn->query($sql);


      while($linha = $resultado->fetch_assoc()) {
          return $linha["total"];
      }

      $conn->close();
  }

public function buscar($idLivro){

include "class/Acessa.class.php";
      $sql = "SELECT * from livro
       where idLivro = ".$idLivro;

      $resultado = $conn->query($sql);


      while($linha = $resultado->fetch_assoc()) {
          self::setIdLivro($linha["idLivro"]);
          self::setTitulo($linha["titulo"]);
          self::setAutor($linha["autor"]);
          self::setDataLancamento($linha["dataLancamento"]);
      }

      $conn->close();
  }
}

?>


