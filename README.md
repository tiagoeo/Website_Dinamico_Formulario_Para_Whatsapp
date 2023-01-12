<hr><h2 align="left">APRESENTAÇÃO</h2>

<h3 align="left">
  Site dinâmico com front-end no framework Bootstrap 5.3.0a, back-end em PHP utilizando POO (programação orientada a objetos) e arquitetura MVC (model, view e controller) com formulário que direciona o usuário para o Whatsapp.
</h3>

<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_formulario_para_Whatsapp/blob/main/static/img/pagina_principal.png" alt="Website PHP POO MVC" height="501" width="432">
</p>

<hr><h2 align="left">SOBRE</h2>

<p align="left">
  Este projeto de código aberto é uma versão gratuita e livre com pequenas funcionalidades do sistema proprietário GDPMD (Gerenciador de divulgação de produtos por meios digitais) do qual sou autor e desenvolvedor. Tendo como público alvo pequenos comerciantes e/ou MEIs que atuam de forma regional e não necessitam de sistemas caros e complicados, mas de um site que divulgue e facilite o cadastro e alteração de seus serviços e/ou produtos, com a funcionalidade de encaminhar os clientes ao aplicativo popular Whatsapp para um atendimento imediato e humanizado.
</p>
<p align="left">
  O sistema no qual este projeto se baseia, inicialmente foi elaborado para atender a uma demanda de empreendedores e comerciantes da região metropolitana de Belém-Pa, que publicam seus produtos e serviços por meio das redes sociais, mas desejam de atuar de forma profissional na internet, tendo um site com o próprio nome do empreendimento para captar clientes nos diversos buscadores da internet e em anúncios patrocinados. A atribuição de utilizar o Whatsapp partiu destes empreendedores, assim como a simplicidade das funções do sistema, outro ponto crucial foi o custo do sistema e da sua hospedagem, que não demanda necessidade de muitos recursos.
</p>
<p align="left">
  O GDPMD atualmente está migrando o back-end para Laravel.
</p>

<hr><h2 align="left">FUNCIONALIDADES</h2>
<p align="left">
  <ul>
    <li>Site dinâmico, as informações são resgatas do banco de dados antes de apresentar ao usuário;</li>
    <li>Conexão com o banco de dados MySQL via PDO;</li>
    <li>Modo manutenção: em caso de erros no banco de dados ou se o usuário habilitar essa função. Evita erros críticos na página;</li>
    <li>Caso não exista o esquema de bancos de dados e o usuario e senha estejam corretos, será criado automaticamento;</li>
    <li>Framework do front-end Bootstrap 5.3.0a, carousel com informações preenchidas do db;</li>
    <li>Direcionamento para Whatsapp, de acordo com o número de telefone cadastrado no banco de dados;
      <p align="center">
        <img src="https://github.com/tiagoeo/website_dinamico_formulario_para_Whatsapp/blob/main/static/img/direcionamento.png" alt="Diagrama EER" height="218" width="364">
      </p>
    </li>
  </ul>
</p>

<hr><h2 align="left">DIAGRAMA DO BANCO DE DADOS</h2>
<h4 align="left">TABELA WEBSITE</h4>
<p align="left">
  <ul>
    <li>nome: O nome do site que será apresentado no título da página e no navbar.</li>
    <li>telefone: Telefone no qual o site direcionará para o Whatsapp.</li>
    <li>manutencao: Valor 0 (zero) site funcionará normalmente, valor 1 (um) é o modo manutenção.</li>
  </ul>
</p>
<h4 align="left">TABELA PAGINA</h4>
<p align="left">
  <ul>
    <li>titulo: Informação em destaque no carousel.</li>
    <li>descricao: Descrição do título do carousel.</li>
  </ul>
</p>
<p align="center">
  <img src="https://github.com/tiagoeo/website_dinamico_formulario_para_Whatsapp/blob/main/static/img/EER_Diagrama.png" alt="Direcionamento ao WhatsApp" height="189" width="322">
</p>

<hr><h2 align="left">FICHEIROS</h2>
<p align="left">
  <ul>
    <li>Pasta DAO (data acess object): Contém arquivos php de acesso ao banco de dados (local que altera o host, usuário e senha do db).</li>
    <li>Pasta Static: Possui arquivos necessários a construção da página front-end.</li>
    <li>Pasta VO (value object): Controle de regras e o transporte de objetos para o DAO.</li>
  </ul>
</p>

<hr><h2 align="left">REQUERIMENTOS</h2>
<p align="left">
  <ul>
    <li>Servidor compatível com PHP 7 ou superior e banco de dados MySQL.</li>
  </ul>
</p>

<hr><h2 align="left">LINGUAGENS E FERRAMENTAS</h2>
<p align="center">
  <a href="https://git-scm.com/" target="_blank" rel="noreferrer">
    <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/>
  </a>
  <a href="https://www.php.net" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/>
  </a>
  <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40"/>
  </a>
  <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/>
  </a>
  <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/>
  </a>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> 
  </a> 
  <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> 
    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/>
  </a> 

</p>

