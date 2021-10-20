
<div class="header"><i class="history icon"></i>Cadastrar Linha Do Tempo</div>
<div class="content">
    <div class="field">
        <div class="ui equal width grid">
            <div class="equal width row">
                <div class="column">
<!--                    <img onclick="$('#imagemTimeline').trigger('click');" class="ui medium circular image" src="img/addImagem.png" title="Adicionar Imagem"> <input type="file" id="imagemTimeline" style="display: none;">-->
                    <div class="ui cards">
                        <div class="card">
                            <div class="content">
                                <img class="ui medium circular image" src="../../../land_page_informatica/src/img/about/3.jpg" title="Adicionar Imagem"> <input type="file" id="imagemTimeline" style="display: none;">
                            </div>
                            <div onclick="$('#imagemTimeline').trigger('click');" class="ui bottom attached button">
                                <i class="add icon"></i>
                                Adicionar Imagem
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column" style="margin-top: 5%;">
                    <div class="ui form">
                        <div class="field">
                            <label>Intervalo de tempo</label>
                            <input type="text" rows="2" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;">
                        </div>
                    </div>
                    <div class="ui dividing header"></div>
                    <div class="ui form">
                        <div class="field">
                            <label>Título</label>
                            <input type="text" rows="2" style="margin-top: 0px; margin-bottom: 0px; max-height: 41px;">
                        </div>
                    </div>
                    <div class="ui dividing header"></div>
                    <div class="ui form">
                        <div class="field">
                            <label>Descrição</label>
                            <textarea rows="2" style="margin-top: 0px; margin-bottom: 0px; min-height: 90px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="actions">
      <div class="ui black deny button">
        Cancelar
      </div>
      <div id="botao_cadastro_chave" class="ui positive right labeled icon button" onclick="cadastrar_chave()">
        Cadastrar
        <i class="play icon"></i>
      </div>
    </div>
