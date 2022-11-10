<?php
class Contato {
    protected $table='contato';
    private $idcontato;
    private $nome;
    private $telefone;
    private $email;
        public function getIdcontato() {
            return $this->idcontato;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setIdcontato($idcontato): void {
            $this->idcontato = $idcontato;
        }

        public function setNome($nome): void {
            $this->nome = $nome;
        }

        public function setTelefone($telefone): void {
            $this->telefone = $telefone;
        }

        public function setEmail($email): void {
            $this->email = $email;
        }
        // MÉTODOS
        public function cadastrar(){
            //abrir uma conexão
        }
        public function excluir($id){
            //conectar
            $conexao = mysqli_connect('localhost', 'root', '123456', 'agenda');
            
            //excluir
            mysqli_query($conexao, "delete from $this->table where idcontato=$id;");
            //mysqli_query($conexao, "insert into contato(nome,telefone,email) values('Carlos Eduardo Guedes','89999244419','teste@gmail.com');");
            echo 'Excluido com Sucesso!';
            
            //fecha conexão
            mysqli_close($conexao);
        }
}