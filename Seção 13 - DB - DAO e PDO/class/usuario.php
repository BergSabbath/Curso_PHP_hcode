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

            $this->setData($results[0]);
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

            $this->setData($results[0]);

        } else {
            throw new Exception("Login e/ou senha inválidos.");
        }
    }

    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDescadastro(new DateTime($data['descadastro']));
    }

    public function insert()
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN' => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha()
        ));
        
        if (count($results) > 0){
            
            $this->setData($results[0]);

        }
    }

    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();
        
        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN' =>$this->getDeslogin(),
            ':PASSWORD' =>$this->getDessenha(),
            ':ID' => $this->getIdusuario()
        ));
    }

    //pode-se utilizar o metodo construct tbm.. dessa forma quando instanciar a classe Usuario
    //tem que passa logo os paramentos.

    // forma se passar os paramentos ok, senão passar fica vazio e nao da erro
    public function __construct($login = "", $password = "") 
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);
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

