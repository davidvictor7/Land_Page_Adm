<script>
    $(document).ready(function () {
        $("#script_registro").remove();
    });
</script>
<div class="ui container containerPrincipal segment" id="containerToInformations" style="">
    <div class="ui secondary menu">
        <div class="left menu">
            <h1 class="ui header">
                <i class="images icon"></i>Portifólio
            </h1>
        </div>
        <div class="right menu">
            <button onclick="openModal('adicionarTimeline');" class="ui teal icon button">Novo</button>
        </div>
    </div>

    <div class="ui divider"></div>
    <div class="ui form">
        <div class="two fields">
            <div class="field">
                <label>Pesquisar:</label>
                <div class="ui fluid action input">
                    <input id='pesquisa_chave_cadastro' placeholder="Procurar por número" type="text">
                    <div onclick="pesquisar_chave();" class="ui button">&nbsp;&nbsp;<i class="search icon"></i></div>
                </div>

            </div>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>&nbsp;&nbsp;Nomes:</label>
                        <select name="blocos"  class="ui fluid dropdown" id="filtro_pesquisa">
                            <option value="0">Todos</option>
                            <?php
                            ?>
                            <script>
                                $('#filtro_pesquisa').dropdown();
                            </script>

                        </select>
                    </div>
                    <!--                    <div class="field">-->
                    <!--                        <label>&nbsp;&nbsp;Situação:</label>-->
                    <!--                        <select name="situacao_p" class="ui fluid dropdown" id="filtro_pesquisa2">-->
                    <!--                            <option value="todos">Todas</option>-->
                    <!--                            <option value="1">Disponíveis</option>-->
                    <!--                            <option value="0">Indisponíveis</option>-->
                    <!--                            <option value="2">Esquecidas</option>-->
                    <!--                            <script>$('#filtro_pesquisa2').dropdown();</script>-->
                    <!---->
                    <!---->
                    <!---->
                    <!--                        </select>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <table class="ui green table" id="tabela_datable">
        <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody id="tabela_chave_cadastro">
        </tbody>
    </table>

</div>
<script>
    $(document).ready(function () {
        pesquisar_chave();
    });

</script>