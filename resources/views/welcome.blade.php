<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
  </head>

<body>
  <!-- Logo arquivo e São Paulo  -->
    <header class="md:mt-3 md:flex md:flex-row-reverse md:items-center md:justify-between">
      <img class="md:mr-40 md:w-80 md:h-7 h-5 mt-4 pl-32 " src="/img/logo-gov.png" alt="">
      <img class="md:ml-40 mt-8 pl-16 " src="/img/logo_apesp_horizontal_250x60.png" alt="">
    </header>

  <!-- Barra de navegação  -->
  <div class=" md:flex md:flex-nowrap md:justify-evenly  md:m-10 mb-1 mt-4 ">
    <div x-data="{ open: false }" class=" md:p-3 py-4 pl-4">
      <div class="md:mx-auto md:w-auto flex justify-center">
        <!-- Dropdown Button -->
        <button @mouseenter="open = !open" class="dropdown-button md:w-auto text-md md:px-5 md:py-2  hover:text-orange-600 font-bold ">INSTITUCIONAL <i class="fa fa-chevron-down hover:text-orange-600 "></i></button>
        <!-- Dropdown Content -->
        <div x-show="open" @mouseleave.away="open = false" class="dropdown-content flex flex-col mt-10  bg-acesso text-white rounded-md md:w-auto p-2 md:ml-4 absolute  " x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <!-- Dropdown Items -->
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/quem_somos" class="dropdown-item hover:font-bold">Quem Somos</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/quem_somos/estrutura" class="dropdown-item hover:font-bold">Estrutura</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/servicos" class="dropdown-item hover:font-bold">Serviços</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/legislacao" class="dropdown-item hover:font-bold">Legislação</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/relatorios/atividades" class="dropdown-item hover:font-bold">Relatórios</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/publicacoes/livros" class="dropdown-item hover:font-bold">Publicações</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/assessoria_imprensa" class="dropdown-item hover:font-bold">Assessoria de Imprensa</a>
          <a href="https://ead.arquivoestado.sp.gov.br/login/index.php" class="dropdown-item hover:font-bold">APESP - Ambiente Virtual de Aprendizagem (AVA)</a>
        </div>
      </div>
    </div>
    <div x-data="{ open: false }" class=" md:p-3 py-4 pl-4 ">
      <div class="md:mx-auto md:w-auto flex justify-center">
        <!--Título-->
        <button @click="open = !open" class="dropdown-button md:w-auto md:h-full text-md md:px-5 md:py-2  hover:text-orange-600 font-bold">SERVIÇO AO CIDADÃO <i class="fa fa-chevron-down hover:text-orange-600 "></i> </button>
        <!--Conteúdo-->
        <div x-show="open" @click.away="open = false" class="dropdown-content flex  mt-10 flex-col bg-acesso text-white rounded-md md:w-auto p-2 absolute" x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <!-- Items -->
          <a href="https://www.arquivoestado.sp.gov.br/web/acervo/consulte" class="dropdown-item hover:font-bold">Consulte nosso Acervo</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/acervo/solicitacao_certidoes" class="dropdown-item hover:font-bold">Certidões</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/acervo/ajuda" class="dropdown-item hover:font-bold">Apoio à Pesquisa</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/gestao/sistema/spdoc" class="dropdown-item hover:font-bold">SPdoc Cidadão</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/acesso_informacao" class="dropdown-item hover:font-bold">Acesso à Informação</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/transparencia" class="dropdown-item hover:font-bold">Transparência Ativa</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/eventos" class="dropdown-item hover:font-bold">Eventos e Capacitações</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/exposicoes" class="dropdown-item hover:font-bold">Exposições e Galerias</a>
        </div>
      </div>
    </div>


    <div x-data="{ open: false }" class=" md:p-3 py-4 pl-3 ">
      <div class="md:mx-auto md:w-full flex justify-center">
        <!-- Título-->
        <button @click="open = !open" class="dropdown-button md:w-full text-md md:px-5 md:py-2  hover:text-orange-600 font-bold">ADMINISTRAÇÃO PÚBLICA <i class="fa fa-chevron-down hover:text-orange-600 "></i> </button>
        <!-- Conteúdo -->
        <div x-show="open" @click.away="open = false" class="dropdown-content flex flex-col mt-10  bg-acesso text-white rounded-md md:w-auto p-2 md:ml-4 absolute" x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <!-- Items -->
          <a href="https://www.arquivoestado.sp.gov.br/web/gestao" class="dropdown-item hover:font-bold">Gestão Documental</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/gestao/assistencia_orgaos_saesp" class="dropdown-item hover:font-bold">Orientação aos Orgãos do SAES</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/orientacoes_sic" class="dropdown-item hover:font-bold">Orientação aos SICs</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/gestao/assistencia_municipios" class="dropdown-item hover:font-bold">Assistência aos Municípios</a>
          <a href="https://www.arquivoestado.sp.gov.br/web/gestao/sistema/plano_tabela" class="dropdown-item hover:font-bold">Planos e Tabelas</a>

        </div>
      </div>
    </div>

    <div x-data="{ open: false }" class=" md:p-3 py-4 pl-3 ">
      <div class="md:mx-auto md:w-auto flex justify-center">
        <!-- Título -->
        <button @click="open = !open" class="dropdown-button md:w-auto text-md md:px-5 md:py-2  hover:text-orange-600 font-bold"> FALE CONOSCO <i class="fa fa-chevron-down hover:text-orange-600 "></i></button>
        <!-- Conteúdo -->
        <div x-show="open" @click.away="open = false" class="dropdown-content flex  flex-col mt-10  bg-acesso text-white rounded-md md:w-auto p-2 md:ml-4 absolute" x-transition:enter="transition-opacity ease-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <!--  Items -->
          <a href="https://www.arquivoestado.sp.gov.br/web/institucional/fale_conosco/faq" class="dropdown-item hover:font-bold">Perguntas Frequentes</a>
        </div>
      </div>
    </div>
    <!-- Buscar e gov -->
    <div class="rounded-3xl md:ml-0 mx-8 md:mb-4 mb-10 mt-3 border h-1/6 border-black hover:border-none ">
      <i class="fas fa-search ml-3 text-orange-600"></i>
      <input class=" md:w-52 h-16 w-72 p-1 mb-0 rounded-3xl cursor-pointer focus:outline-none" type="text" placeholder="Busque o serviço desejado">
    </div>
    <a href="#" class=" bg-gov text-white mt-4 p-3 h-1/6 md:ml-2 ml-28 font-semibold rounded-3xl">
      <i class="fas fa-user-alt"></i> Entrar com gov.br
    </a>
  </div>
  <!-- Carrossel -->
  <div class="md:p-16 flex pt-5 pb-5">
    <div class="md:w-9/12 md:ml-48 ml-5 " x-data="{
      activeSlide: 1,
      slides:[
        {id: 1, title: 'Eventos', body: 'Difundir a pesquisa do palestrante Bruno Lima em nossa hemeroteca, destacando Luiz Gama, um dos personagens do Projeto', image: '/img/tela_projecao_do_auditorio.jpg'},
        {id: 2, title: 'Noticias', body: 'O “28º Encontro Paulista sobre Gestão Documental e Acesso à Informação” trouxe experiências de municípios paulistas com arquivos públicos já instalados e com instrumentos de gestão formalizados. O evento, realizado no dia 30 de novembro no APESP, também apresentou para gestores e servidores municipais o Sistema Eletrônico de Informações (SEI) adotado pelo governo estadual e como alguns municípios aderiram ao Sistema.', image: '/img/camcapa.jpg'},
        {id: 3, title: 'Publicações', body: 'A Revista do Arquivo é o periódico eletrônico do Arquivo Público do Estado de São Paulo, anteriormente denominada Revista Histórica. A Revista do Arquivo pretende, além da abordagem historiográfica, divulgar temas que circundem os eixos centrais que articulam as instituições arquivísticas (gestão, preservação, acesso à informação, difusão); a produção do conhecimento realizada cotidianamente na instituição; assim como a publicação de artigos de qualquer natureza, que divulguem conhecimentos produzidos a partir do nosso acervo ou de outros arquivos do mundo.', image: '/img/capa_13.jpg'},
      ],
      loop(){

        setInterval(() => {this.activeSlide = this.activeSlide === 3 ? 1 : this.activeSlide + 1}, 3000)
    }
    }" x-init="loop">
      <template x-for="slide in slides" :key="slide.id">
        <div class="md:justify-between" x-show="activeSlide === slide.id" class="md:p-16  h-full  md:items-center bg-green-600 text-black rounded-lg">
          <h2 class="font-bold text-2xl " x-text="slide.title"></h2>
          <div class="flex flex-wrap items-center">
            <p x-text="slide.body" class="text-base md:w-1/2 md:mt-10 md:ml-20 mt-4 h-auto w-80 "></p>
            <img :src="slide.image" class="md:w-72 md:h-72 md:ml-52 w-56 h-56 mt-4 ">
          </div>
        </div>
      </template>
      <div class="absolute md:w-44 flex md:items-center md:justify-center px-4">
        <template x-for="slide in slides" :key="slide.id">
          <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg" :class="{
            'bg-orange-600' : activeSlide === slide.id,
            'bg-gray-300' : activeSlide !== slide.id,

        }" x-on:click="activeSlide = slide.id"></button>
        </template>
      </div>
    </div>
  </div>
  <!-- Conheça Nossos Serviços -->
  <div class="bg-servico pt-10 pb-10">
    <h2 class="text-3xl font-bold md:ml-32 ml-10 border-l-4 border-orange-600 pl-6"> Conheça Nossos Serviços</h2>
    <div class=" md:ml-32 ml-10 md:mt-10 mt-4">
      <h2 class="text-2xl font-bold md:ml-4 md:mb-2"> Cidadão</h2><br>
      <div class="flex md:justify-evenly flex-wrap m-4">
        <a href="https://www.arquivoestado.sp.gov.br/web/institucional/servicos" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl p-4 rounded-xl font-semibold mb-2">Atendimento Presencial </a>
        <a href="https://www.arquivoestado.sp.gov.br/web/acervo" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl p-4 rounded-xl font-semibold mb-2"> Consulta ao Acervo</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/acervo/solicitacao_certidoes" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl p-4 rounded-xl font-semibold mb-2">Certidões</a>
        <a href="https://ead.arquivoestado.sp.gov.br/login/index.php" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl p-4 rounded-xl font-semibold mb-2">Ambiente Virtual de Apredizagem (AVA)</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/acesso_informacao" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Acesso à Informações</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/exposicoes/galerias" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Exposições e Galerias</a>
      </div>
    </div>
    <div class=" md:ml-32 md:mt-10 ml-10 mt-4">
      <h2 class="text-2xl font-bold md:ml-5 mb-2"> Administração Pública</h2><br>
      <div class="flex md:justify-evenly flex-wrap m-4">
        <a href="https://www.arquivoestado.sp.gov.br/web/gestao" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Gestão Documental </a>
        <a href="https://www.arquivoestado.sp.gov.br/web/gestao/assistencia_orgaos_saesp" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2"> Orientação aos Órgãos do SAESP</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/orientacoes_sic" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Orientação aos SICs</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/gestao/assistencia_municipios" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Assistência aos Municípios</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/gestao/sistema/plano_tabela" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Normativas, Planos e Tabelas</a>
        <a href="https://www.arquivoestado.sp.gov.br/web/gestao/documentos_digitais" class=" bg-white hover:scale-105 transition hover:text-orange-600 shadow-xl  p-4 rounded-xl font-semibold mb-2">Documentos Digitais</a>
      </div>
    </div>
  </div>
  <!-- Acesso Rápido  -->
  <h2 class="text-3xl font-bold md:ml-32 ml-10 border-l-4 border-orange-600 pl-6 mt-10 mb-10"> Acesso Rápido</h2>
  <div class="flex flex-wrap relative ">
    <a href="#">
      <div class=" md:ml-96 ml-10 inline-block md:mb-20 mb-10 w-80">
        <img src="/img/340x190_Foto_Acervo.jpg" class="w-5/6 ml-8 h-40 rounded-xl mb-4 ">
        <div class="">
          <h2 class="m-0 text-center p-2 font-bold text-lg hover:text-xl ">Acervo</h2>
          <p class=" m-0 p-2">Quer consultar documentos de nossos fundos e coleções e conhecer o que temos digitalizado? Clique aqui para saber como pesquisar no arquivo e entender como funciona nosso atendimento. Acesse o Guia do Acervo e outros instrumentos de pesquisa!</p>
        </div>
      </div>
    </a>
    <div class=" md:ml-32 ml-10 inline-block md:mb-20 mb-10 w-80 ">
      <img src="/img/Arquivo_publico_digital.jpg" class="w-5/6 h-40 ml-8 rounded-xl">
      <div class="">
        <h2 class="m-0 text-center p-2 font-bold text-lg hover:text-xl">Arquivo Público Digital</h2>
        <p class="m-0 p-2">Arquivo Público Digital. Projeto de lançamento da Plataforma ATOM do APESP</p>
      </div>
    </div>
    <div class=" md:ml-32 ml-10 inline-block md:mb-20 mb-10 w-80 ">
      <img src="/img/hotsite.jpg" class="w-5/6 h-40  rounded-xl">
      <div class="">
        <h2 class="m-0 text-center p-2 font-bold text-lg hover:text-xl ">Hotsite</h2>
        <p class=" m-0 p-2">Projeto de Avaliação da Massa Documental Acumulada: Acesse o Guia, as Réguas e mais informações importantes para avaliação da MDA nos órgãos e entidades da Administração Pública Estadual</p>
      </div>
    </div>

    <div class=" md:ml-96 ml-10 md:mb-20 mb-10 inline-block w-80">

      <img src="/img/acesso_informacao.jpg" class="w-5/6 h-40 ml-8 rounded-xl">
      <div class="">
        <h2 class="m-0 text-center p-2 font-bold text-lg hover:text-xl ">Acesso à informação</h2>
        <p class=" m-0 p-2">O Observatório de Acesso à Informação (OAI/APESP) é uma ferramenta de pesquisa de dados sobre os pedidos de informações encaminhados ao governo do Estado de São Paulo via SIC -SP.</p>
      </div>
    </div>
    <div class=" md:ml-32 ml-10 md:mb-20 mb-10 inline-block w-80">
      <img src="/img/340x190_340x190_Mapa_SP.jpg" class="w-5/6 h-40 ml-8 rounded-xl">
      <div class="">
        <h2 class="m-0 text-center p-2 font-bold text-lg hover:text-xl ">Mapa da Gestão Documental</h2>
        <p class="m-0 p-2">Acompanhe a gestão documental das 645 prefeituras e câmaras paulistas! Clique aqui para saber quais possuem Arquivo Público e quais regulamentaram a LAI, além de ter acesso aos atos referentes à implementação destas políticas municipais.</p>
      </div>
    </div>
    <div class=" md:ml-32 ml-10 md:mb-20 mb-10 inline-block w-80 ">
      <img src="/img/340x190_thumbnail_Card_visita.jpg" class="w-5/6 h-40 ml-8 rounded-xl">
      <div class="">
        <h2 class="m-0 text-center font-bold p-2 text-lg hover:text-xl ">Conheça o arquivo</h2>
        <p class=" m-0 p-2">Quer conhecer melhor os trabalhos que realizamos e aprender como se cuida de documentos? Clique aqui para conhecer o Arquivo, agendar uma visita ou saber como participar de nossos eventos e exposições!</p>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Footer  -->
  <footer class="bg-black text-white  mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg">
          <div class="row">
            <div class="col-10 md:mt-20 md:ml-10 md:mr-0 mt-4">
              <h4 class="md:mb-10 mb-4">
                <a class="font-bold text-2xl" href="/wps/portal/poupatempoTaOn/servicosCarta">Venha nos Visitar!</a>
              </h4>
              <ul class="">
                <li>
                  <a href="/wps/portal/poupatempoTaOn/o-poupatempo/historia-principios">Rua Volunt&aacute;rios da P&aacute;tria, 596, Santana<br> S&atilde;o Paulo - SP</a>
                  <span>(Ao lado da esta&ccedil;&atilde;o PORTUGUESA-TIET&Ecirc; do Metr&ocirc;)</span><br>
                  <span>CEP: 02010-000</span><br>
                  <span>Tel: (11) 2868-4500 / 2868-4451</span><br><br>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col md:mt-20 mt-4 ">
          <h4 class="">
            <a class="font-bold text-2xl " href="/wps/portal/poupatempoTaOn/o-poupatempo">Funcionamento</a>
            <p class="md:mt-10 mt-4">Segunda a Sexta<br>9h &agrave;s 17h</p>
          </h4>
        </div>
        <div class="col md:mt-20 md:mb-10 mt-4 ">
          <h4 class="">
            <a class="font-bold text-2xl" href="/wps/portal/poupatempoTaOn/o-poupatempo">Contato</a>
            <p>
              <a class="mt-10 " href="mailto:faleconosco@arquivoestado.sp.gov.br">faleconosco@arquivoestado.sp.gov.br</a></p>   
          </h4>
        </div>
        <div class="col-lg  md:pl-32 ">
          <div class="row">
            <div class="col-12 md:mt-20 md:mb-20 mb-3 mt-4">
              <h4>
                <a class="font-bold md:text-2xl text-xl" href="https://www.ouvidoria.sp.gov.br/Portal/Default.aspx">Ouvidoria</a>
              </h4>
            </div>
            <div class="col-12 md:mb-20 mb-3">
              <h4>
                <a class="font-bold md:text-2xl text-xl" href="http://www.transparencia.sp.gov.br/">Transparência</a>
              </h4>
            </div>
            <div class="col-12">
              <h4>
                <a class="font-bold md:text-2xl text-xl" href="http://www.sic.sp.gov.br/">SIC</a>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <!-- Newsletter -->
      <!-- Modal Inscrição Newsletter -->
      <p class="md:m-10 mt-6 text-2xl mb-4 font-bold">Newsletter</p>

      <a class="badge badge-dark md:ml-10 hover:border hover:border-red-600" id="abrir_modal_newsletter" href="#" data-toggle="modal" data-target="#modal_newsletter">Clique aqui</a>
      para cadastrar-se em nossa Newsletter e receba as novidades do APESP!

      <div class="row align-items-center md:p-18 p-14 text-center text-md-left ">
        <div class="col-12 col-md">
          <a href="https://www.saopaulo.sp.gov.br/">
            <img src="/img/logo-footer.png" alt="Logo São Paulo - Governo do Estado">
          </a>
        </div>
        <div class="col-12 col-md-auto mt-5">
          <ul>
            <li class="list-inline-item w-10 bg-red-600 rounded-full p-2  hover:bg-black hover:border">
              <a href="https://www.facebook.com/arquivoestadosp" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item w-10 bg-red-600 rounded-full p-2  hover:bg-black hover:border">
              <a href="https://twitter.com/arquivoestadosp" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item w-10 bg-red-600 rounded-full p-2  hover:bg-black hover:border">
              <a href="https://www.instagram.com/arquivoestadosp/" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item w-10 bg-red-600 rounded-full p-2  hover:bg-black hover:border">
              <a href="https://www.linkedin.com/company/arquivoestadosp/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item w-10 bg-red-600 rounded-full p-2  hover:bg-black hover:border">
              <a href="https://www.youtube.com/user/arquivopublicosp" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    </div>
  </footer>
</body>
</html>