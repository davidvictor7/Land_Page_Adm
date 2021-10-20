<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Informática - ADM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css"/>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
    <link rel="stylesheet" type="text/css" href="css/icon.min.css"/>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/semantic.min.js" ></script>
    <script type="text/javascript" src="js/app.js" ></script>
    <script>
        function openModal(janela) {
            switch (janela) {
                case "addTimeline":
                    $("#modalCadastro").load("modals/addTimeline.php");
                    $('#modalCadastro').modal('show');
                    break;
                case "addSystem":
                    $("#modalCadastro").load("modals/registerSystem.php");
                    $('#modalCadastro').modal('show');
                    break;
                default:
            }
            /* $('#' + janela).transition('scale');
             $('#' + janela + '_s').transition('scale');
             //$(window).bind('scroll', setTopo(0));*/

        }
    </script>
</head>
<body>
<div class="ui container fluid">
    <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow-x:  auto !important;" id="sibebarMaior">
        <div class="item logo">
            <i class="openbtn icon content" id="btnDevices"></i>
            <img src="../../One_page/src/img/logoNav.png" />
        </div>
        <div class="ui accordion" id="accordionSidebar">
            <div class="title activeAccordion" id="home">
                <p class="pContent"><i class="home layout icon"></i><span>Home</span></p>
            </div>
            <div class="title" id="timeLine">
                <p class="pContent"><i class="history icon"></i><span>Linha Do Tempo</span></p>
            </div>

            <div class="title" id="systems">
                <p class="pContent"><i class="desktop icon active"></i><span>Sistemas</span></p>
            </div>

            <div class="title" id="attendance">
                <p class="pContent"><i class="phone volume icon"></i><span>Atendimentos </span></p>
            </div>

            <div class="title" id="portfolio">
                <p class="pContent"><i class="images icon"></i><span>Portifólio <span></span></span></p>
            </div>

            <div class="title" id="fac">
                <p class="pContent"><i class="question icon"></i><span>FAC<span></i></span></span></p>
            </div>

            <div class="title" id="ourTeam">
                <p class="pContent"><i class="users icon"></i><span>Nosso Time</span></p>
            </div>

        </div>
        <div class="iconsSidebarFix">
            <div class="ui dropdown item displaynone iconShort">
                <i class="home layout icon" id="home"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="history icon" id="timeLine"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="desktop icon active" id="systems"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="phone volume icon" id="attendance"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="images icon" id="portfolio"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="question icon" id="fac"></i>
            </div>
            <div class="ui dropdown item displaynone iconShort">
                <i class="users icon" id="ourTeam"></i>
            </div>
        </div>
    </div>

    <div class="pusher">
        <div class="ui menu asd borderless">
            <div class="left menu" id="leftMenuToMobile">
                <div class="iconSibebar">
                    <i class="icon content" id="iconSidebarMobile"></i>
                </div>
            </div>
            <div class="right menu" id="iconsAndInformationsUser">
                <div class="iconsAccount">
                    <!--<img src="img/th.png">-->
                    <i class="th icon big openDivNone" id="system"></i>
                    <div class="arrow displaynone" id="system"></div>
                    <div class="divMae" id="system">
                        <ul class="ulGeral" id="system">
                            <li class="liGeral" id="system">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                            <li class="liGeral">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                            <li class="liGeral">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                            <li class="liGeral">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                            <li class="liGeral">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                            <li class="liGeral">
                                <a class="aGeral" id="system">
                                    <img src="img/logo_sysreserva.png" class="imgSys">
                                    <span>SysReserva</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <i class="bell icon big openDivNone" id="notifications"></i>
                    <div class="arrow displaynone" id="notifications"></div>
                    <div class="divMae" id="notifications">
                        <div class="ui comments">
                            <h3 class="ui dividing header">Notificações</h3>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="img/matt.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Emerson Henrique</a>
                                    <div class="metadata">
                                        <span class="date">Hoje as 09:40AM</span>
                                    </div>
                                    <div class="text">
                                        Termo de compromisso de estágio disponível para download
                                    </div>
                                    <!--                                            <div class="actions">
                                                                                    <a class="reply">Reply</a>
                                                                                </div>-->
                                </div>
                            </div>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="img/matt.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Emerson Henrique</a>
                                    <div class="metadata">
                                        <span class="date">Hoje as 09:40AM</span>
                                    </div>
                                    <div class="text">
                                        Termo de compromisso de estágio disponível para download
                                    </div>
                                    <!--                                            <div class="actions">
                                                                                    <a class="reply">Reply</a>
                                                                                </div>-->
                                </div>
                            </div>
                            <div class="comment">
                                <a class="avatar">
                                    <img src="img/matt.jpg">
                                </a>
                                <div class="content">
                                    <a class="author">Emerson Henrique</a>
                                    <div class="metadata">
                                        <span class="date">Hoje as 09:40AM</span>
                                    </div>
                                    <div class="text">
                                        Termo de compromisso de estágio disponível para download
                                    </div>
                                    <!--                                            <div class="actions">
                                                                                    <a class="reply">Reply</a>
                                                                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="ui avatar image openDivNone" id="informationsUser" src="img/teste.jpg" style="cursor: pointer;">
                    <div class="arrow displaynone" id="informationsUser"></div>
                    <div class="divMae" id="informationsUser">
                        <!--<div class="gb_tb"></div>-->
                        <!--<div class="gb_sb"></div>-->
                        <div class="ui cards">
                            <div class="card" id="cardUser">
                                <div class="content">
                                    <div class="header">
                                        Seja Bem Vindo, Anderson
                                    </div>
                                    <div class="meta">
                                        Administrador
                                    </div>
                                    <div class="description">
                                        Último acesso: 15/03/2018 10:50:23 <br/>Sessão: 05:31
                                    </div>
                                </div>
                                <div class="extra content">
                                    <div class="ui two buttons">
                                        <div class="ui button">Conta</div>
                                        <div class="ui red button">Sair</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui form standard small modal scrolling transition hidden" id="modalCadastro"></div>
        <div class="ui form standard small modal scrolling transition hidden" id="edit"></div>
        <div class="ui form standard small modal scrolling transition hidden" id="remove"></div>
        <div class="teste" id="centralScreen">
            <?php
            include "telas/home.php";
            ?>
        </div>
    </div>
</div>
</body>
</html>
