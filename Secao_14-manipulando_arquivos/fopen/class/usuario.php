<?php

class Usuario 
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $descadastro;

//metodos Getters
    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function getDeslogin()
    {
        return $this->deslogin;
    }
    public function getDessenha()
    {
        return $this->dessenha;
    }
    public function getDescadastro()
    {
        return $this->descadastro;
    }

//metodos Setters
    public function setIdusuario($id)
    {
        $this->idusuario = $id;
    }
    public function setDeslogin($login)
    {
        $this->deslogin = $login;
    }
    public function setDessenha($senha)
    {
        $this->dessenha = $senha;
    }
    public function setDescadastro($cadastro)
    {
        $this->descadastro = $cadastro;
    }

//carregar o ID
    public function loadById($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", 
                                array(":ID"=> $id
                                ));

        if(count($results) > 0 ){

            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDescadastro(new DateTime($row['descadastro']));
        }
    }

    public static function getList()
    {//sendo estatico pode chamar direto
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login)
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE 
        :SEARCH ORDER BY deslogin", array(
            ':SEARCH' => "%".$login."%"
        ));
    }

    public function login($login, $password)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND
                                dessenha = :PASSWORD", 
                                array(
                                    ":LOGIN"=> $login,
                                    "PASSWORD" =>$password
                                ));

        if(count($results) > 0 ){
        $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDescadastro(new DateTime($row['descadastro']));
        } else {
            throw new Exception("Login e/ou senha inválidos.");
        }
    }


    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "descadastro" => $this->getDescadastro()->format("d/m/Y H:i:s")
        ));
    }

}

