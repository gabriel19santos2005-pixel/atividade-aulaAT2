<?php

abstract class Usuario
{
    private string $senha;

    public function __construct(string $senha)
    {
        $this->setSenha($senha);
    }

    public function setSenha(string $senha): void
    {
        if (strlen($senha) < 8) {
            throw new InvalidArgumentException('A senha deve ter pelo menos 8 caracteres.');
        }

        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha(string $senha): bool
    {
        return password_verify($senha, $this->senha);
    }

    /** @return string[] */
    abstract public function listarPermissoes(): array;
}

$admin = new Admin('Admin123!');
$cliente = new Cliente('Cliente123!');
foreach ([$admin, $cliente] as $usuario) {
    echo get_class($usuario) . ': ' . implode(', ', $usuario->listarPermissoes()) . "\n";
}
echo 'Senha do admin válida: ' . ($admin->verificarSenha('Admin123!') ? 'sim' : 'não') . "\n";

class Admin extends Usuario
{
    public function listarPermissoes(): array
    {
        return ['gerenciar_usuarios', 'gerenciar_conteudo', 'visualizar_relatorios'];
    }
}

class Cliente extends Usuario
{
    public function listarPermissoes(): array
    {
        return ['visualizar_perfil', 'editar_perfil', 'realizar_compras'];
    }
}
