
# Cadastro de Endereços de Clientes

Este projeto é uma aplicação web simples para o cadastro, exibição, edição e exclusão de endereços de clientes. Ele foi desenvolvido utilizando HTML, CSS, JavaScript, PHP e JSON para armazenamento dos dados, com a possibilidade de migrar para MySQL no futuro.

## Funcionalidades

- **Cadastro de Clientes**: Possibilidade de adicionar novos clientes, incluindo nome completo, endereço, telefone e ponto de referência.
- **Exibição dos Dados**: Listagem dos clientes cadastrados em uma tabela, com a opção de busca.
- **Edição de Dados**: Permite editar os dados dos clientes existentes.
- **Exclusão de Clientes**: Opção de deletar clientes da base de dados.
- **Pesquisa**: Função de busca para filtrar os clientes pela tabela.
- **Modais de Cadastro e Edição**: Utiliza janelas modais para inserção e edição de dados, proporcionando uma experiência de usuário mais fluida.

## Tecnologias Utilizadas

- **Frontend**: 
  - HTML5
  - CSS3
  - JavaScript
  - jQuery e jQuery Mask Plugin
  
- **Backend**: 
  - PHP
  
- **Banco de Dados**:
  - JSON (planejamento de migração para MySQL)

## Estrutura do Projeto

- `index.html`: Página principal da aplicação, contendo a estrutura da interface do usuário.
- `get_data.php`: Arquivo responsável por buscar os dados dos clientes armazenados em JSON.
- `save.php`: Responsável por salvar os dados dos clientes no arquivo JSON.
- `delete_data.php`: Gerencia a exclusão de registros dos clientes.

## Futuras Implementações

- Migração dos dados para um banco de dados MySQL.
- Implementação de autenticação para controle de acesso.
- Melhorias na interface e experiência do usuário.

## Autor

Desenvolvido por Diego Barbosa.
