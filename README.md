# Avaliação inicial CCI

### Bem vindo,
Este é o teste inicial avaliativo do departamento de tecnologia da CCI. O objetivo é entender as suas habilidades atuais e conhecer as stacks da Área Restrita, praticando a manipulação de dados e estrutura da aplicação.

## Descrição do desafio

**Objetivo:** Implemente funcionalidades neste repositório CodeIgniter para receber, validar, persistir e listar registros de usuários (ou um recurso similar existente). O desafio avalia validação de dados de tipos variados, clareza no retorno ao usuário e criação de uma nova página para exibir os registros salvos.

**Contexto:** Use a estrutura já presente no repositório (`application/controllers`, `application/models`, `application/views`, `application/config/database.php`). As implementações devem seguir a arquitetura MVC do projeto.

**Requisitos obrigatórios:**
1) **Validação de dados recebidos**

    A página e estrutura básica estão no controller ```Usuário.php``` e páginas em ```views/usuario/```. Você deve implementar validações para gerir os dados recebidos no formulário e salvar os dados recebidos no banco de dados.

    Observação: as configurações do banco estão em ```application/config/database.php```.

2) **Retorno explícito ao usuário**

    O cadastro deve retornar explicitamente se houve sucesso ou erro e, em caso de erro, o que precisa ser alterado.

3) **Geração de uma nova página para listar os registros salvos**
   
    Crie uma nova view para visualizar os registros já salvos no banco de dados. A listagem deve ser tabelada e paginada.

4) **Dados a serem recebidos no cadastro:**

    O objetivo de cadastro não é relevante. O importante é que haja no *mínimo*:
    - 1 dado de texto;
    - 1 dado de seleção controlada (campos select, radio, checkbox);
    - 1 dado numérico;
    - 1 dado de data/hora;
    - 1 arquivo (imagem, pdf, etc);

**Entrega mínima esperada:**
- Endpoints funcionais para cadastro e listagem de registros de usuário usando a estrutura MVC.
- Persistência: registro criado e listado na página de listagem.
- UX mínimo: mensagens claras e status HTTP corretos.
- Validação completa e tratamento de possíveis erros.

**Observações**
- Priorize correção, clareza das mensagens de erro e robustez das validações.
- Documente decisões estruturais no código e/ou em arquivo a parte.

Boa sorte!

## Links úteis

- CodeIgniter docs<br>
https://codeigniter.com/userguide3/general/welcome.html
- Bootstrap docs<br>
https://getbootstrap.com/docs/3.4/components/
- JQuery docs<br>
https://api.jquery.com/