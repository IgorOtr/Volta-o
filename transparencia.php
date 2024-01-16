<?php
    require 'Admin/src/db/connect.php';
    include 'includes/head.php';
?>

<body>
    <?php include 'includes/nav.php'?>

    <section class="p-5 section_title_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Portal da Transparência</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="p-3 sec_history">

        <?php include 'includes/banner_quick.php'?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-3" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Estrutura</h1>
                    <div class="row mb-5">
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Organograma-Finalizado-31-05.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Organograma</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/estatuto-social.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Estatudo Social</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/AUDITORIA-Revisao-Analitica-das-Receitas-de-Contribuicoes-de-Associados.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Auditoria Específica</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Perguntas-Frequentes-1.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Perguntas Frequentes</h3>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h1 class="mb-3" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Passivo Trabalhista e Fiscal</h1>
                    <div class="row mb-5">
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Provisao-Execucoes.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Previsão de Execuções Dez. 2022</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Relacao-de-Processos-Fase-de-Conhecimento.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Processos em Fase de Conhecimento</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Projecao-de-Receitas-2022-2024.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Projeção de Receitas</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Transparencia-Ato-Trabalhista.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Ato Trabalhista</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Termo-de-Compromisso-de-Controle-Orcamentario.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Termo de Compromisso de Controle Orçamentário</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/PROFUT.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Profut</h3>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h1 class="mb-3" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Editais</h1>
                    <div class="row mb-5">
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Edital-Energia-Solar.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Edital Energia Solar</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Edital-Registro-de-Precos-001-2019-Servicos-de-Transporte.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Edital de Transportes</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Edital-Franquias.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Edital de Franquias</h3>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h1 class="mb-3" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Relatório de Gestão</h1>
                    <div class="row mb-5">
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Relatorio-de-Gestao-Orcamentaria-2022.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Relatório de Gestão Orçamentária</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Relatorio-de-Atividades-Futebol-2022.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-fi  le'></i>
                                    <h3>Relatório de Atividades</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-4">
                            <a class="file_link" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Relatorio-de-Gestao-Tecnica-Voltaco.pdf'?>">
                                <div class="card_file">
                                    <i class='bx bx-file'></i>
                                    <h3>Relatório de Gestão Técnica</h3>
                                </div>
                            </a>
                        </div>
                    </div>


                    <h1 class="mb-4" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Demonstrações Financeiras</h1>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2023</h3>
                            <a class="btn btn-file-disabled w-100 mb-2">Orçamento 2023</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-de-Aprovacao-Orcamento-2023.pdf'?>">Ata
                                de Aprovação de Contas - 2023</a>
                        </div>
                        <div class="col-md-6 mb-5">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2022</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Doc.-18-Ata-de-Aprovacao-de-Contas-2022.pdf'?>">Ata
                                de Aprovação de Contas - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Auditoria-Independente-2022.pdf'?>">Parecer
                                Auditoria Independente - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Doc.-16-Parecer-Conselho-Fiscal-2022.pdf'?>">Parecer
                                Conselho Fiscal - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracoes-Financeiras-2022-DEFINITIVO_230425_221557.pdf'?>">Demonstrações
                                Financeiras - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Balanco-Patrimonial-2022.pdf'?>">Balanço
                                Patrimonial - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracao-de-Resultado-do-Exercicio-2022.pdf'?>">Demonstrativo
                                de Resultado do Exercício - 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Orcamento-2022.pdf'?>">Orçamento 2022</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-de-aprovacao-orcamento-2022.pdf'?>">Ata
                                de Aprovação do Orçamento 2022</a>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2021</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-aprovacao-de-Contas-2021.pdf'?>">Ata de
                                Aprovação de Contas - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Auditoria-Independente-2021.pdf'?>">Parecer
                                Auditoria Independente - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Conselho-Fiscal-2021.pdf'?>">Parecer
                                Conselho Fiscal - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracoes-Financeiras-2021.pdf'?>">Demonstrações
                                Financeiras - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Balanco-Patrimonial-2021.pdf'?>">Balanço
                                Patrimonial - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstrativo-de-Resultado-do-Exercicio-2021.pdf'?>">Demonstrativo
                                de Resultado do Exercício - 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Orcamento-2021.pdf'?>">Orçamento 2021</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-de-Aprovacao-do-Orcamento-2021.pdf'?>">Ata
                                de Aprovação do Orçamento 2021</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2020</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-da-Aprovacao-de-Contas-2020.pdf'?>">Ata
                                de Aprovação de Contas - 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/PARECER-VOLTACO-2020-definitivo-1-1.pdf'?>">Parecer
                                Auditoria Independente - 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Conselho-Fiscal-2020.pdf'?>">Parecer
                                Conselho Fiscal - 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracoes-Financeiras-2022-DEFINITIVO_230425_221557.pdf'?>">Demonstrações
                                Financeiras - 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Balanco-Patrimonial-2022.pdf'?>">Balanço
                                Patrimonial - 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/DRE-2020-Volta-Redonda.pdf'?>">Demonstrativo
                                de Resultado do Exercício - 2020</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Orçamento 2020</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-Aprovacao-Orcamento-2020.pdf'?>">Ata de
                                Aprovação do Orçamento 2020</a>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2019</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-Aprovacao-de-Contas-2019.pdf'?>">Ata de
                                Aprovação de Contas - 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Auditoria-Independente-2019.pdf'?>">Parecer
                                Auditoria Independente - 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Parecer-Conselho-Fiscal-2019.pdf'?>">Parecer
                                Conselho Fiscal - 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracoes-Financeiras-2019.pdf'?>">Demonstrações
                                Financeiras - 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Balanco-Patrimonial-2019.pdf'?>">Balanço
                                Patrimonial - 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracao-de-Resultado-do-Exercicio-2019.pdf'?>">Demonstrativo
                                de Resultado do Exercício - 2019</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Orçamento 2019</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-Aprovacao-Orcamento-2019.pdf'?>">Ata de
                                Aprovação do Orçamento - 2019</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2018</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-Aprovacao-de-Contas-2018.pdf'?>">Ata de
                                Aprovação de Contas - 2018</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Parecer Auditoria Independente - 2018</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/AUDITORIA-Demonstracoes-Financeiras-2018.2017.pdf'?>">Demonstrações
                                Financeiras - 2018</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Balanco-Patrimonial-2018.pdf'?>">Balanço
                                Patrimonial - 2018</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Demonstrativo de Resultado do Exercício -
                                2018</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Ata de Aprovação do Orçamento - 2018</a>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 style="color: #000000; font-weight: 500;">2017</h3>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Ata-Aprovacao-de-Contas-2018.pdf'?>">Ata de
                                Aprovação de Contas - 2017</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Parecer Auditoria Independente - 2017</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/Demonstracoes-Financeiras-31-de-dezembro-2017.pdf'?>">Demonstrações
                                Financeiras - 2017</a>
                            <a class="btn btn-file w-100 mb-2" target="_blank"
                                href="<?php echo SITE_URL.'Admin/documents/BALANCO-ATUALIZADO-1.pdf'?>">Balanço
                                Patrimonial - 2017</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Demonstrativo de Resultado do Exercício -
                                2017</a>
                            <a class="btn btn-file-disabled w-100 mb-2">Ata de Aprovação do Orçamento - 2017</a>
                        </div>
                    </div>

                    <h1 class="mb-3 mt-5" style="color: #000000; font-weight: 600 ; border-bottom: 4px solid #ffc800;">
                        Recursos Públicos</h1>
                    <div class="row mb-5">
                        <div class="col-md-12 mb-4">
                            <div class="alert alert-warning" role="alert">
                                O Clube não recebeu Recursos Públicos no exercício 2022
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">

                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>