<?php
declare(strict_types=1);

class ClienteCadastrar {

    private string $nome;
    private string $sobreNome;
    private string $cpf;
    private string $email;
    private string $dataNascimento;
    private string $telefone;
    
    public function __construct (
        string $nome,
        string $sobreNome,
        string $cpf,
        string $email,
        string $dataNascimento,
        string $telefone
    )

    {
        $this-> nome = $nome;
        $this-> sobreNome = $sobreNome;
        $this-> cpf = $cpf;
        $this-> email = $email;
        $this-> dataNascimento = $dataNascimento;
        $this-> telefone = $telefone;
    }

    public function verDados(){ 
        return 
        $this-> nome .
        '<br>'.
        $this-> sobreNome .
        '<br>'.
        $this-> cpf .
        '<br>'.
        $this-> email .
        '<br>'.
        $this-> dataNascimento .
        '<br>'.
        $this-> telefone;
    }
    

}

$cliente1 = new ClienteCadastrar(
    'Patrick',
    'Marcel',
    '555555555',
    'patrick15k@hotmail.com',
    '2020-05-02',
    '999999999'
);


echo '<br>';
echo $cliente1 -> verDados();