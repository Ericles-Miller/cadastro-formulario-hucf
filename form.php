<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Formulário Processo Seletivo</title>
  </head>

  <body>
    
    <header>
      <div class="row">
        <h1>Processo Seletivo</h1>
        <img src="Logo-Unimontes-white.svg" alt="Logo Unimontes" />
      </div>
    </header>

    <div class="row">
      <form action="insert_dad.php" method="POST">
        <fieldset>
          <legend>Informações Básicas</legend>
          <div class="line">
            <div>
              <label for="nome">Nome completo : </label>
              <input type="text" name="f_nome" id="nome" />
            </div>

            <div>
              <label for="cpf">CPF: </label>
              <input
                type="text"
                id="cpf"
                name="f_cpf"
                onfocus="retirarFormatacao(this);"
                onblur="formatarCampoCpf(this);"
                maxlength="11"
                placeholder="Apenas números"
              />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="nasc">Data de Nascimento: </label>
              <input type="date"  name ="f_data_nascimento" id="nasc" />
            </div>
            <div>
              <label for="cargo">Cargo: </label>
              <select id="cargo" name="f_cargo">
                <option value="assistente_social">Assistente Social</option>
                <option value="bioquimico">Bioquímico</option>
                <option value="contador">Contador</option>
                <option value="enfermeiro">Enfermeiro</option>
                <option value="enfermeiro_auditor">Enfermeiro Auditor</option>
                <option value="enfermeiro_obstetra">Enfermeiro Obstetra</option>
                <option value="enfermeiro_risco">Enfermeiro Classificador de Risco</option>
                <option value="farmaceutico">Farmacêutico</option>
                <option value="fisioterapeuta">Fisioterapeuta</option>
                <option value="fonoaudiologo">Fonoaudiólogo</option>
                <option value="nutricionista">Nutricionista</option>
                <option value="psicologo">Psicólogo</option>
                <option value="tecnico_farmacia">Técnico de Farmácia</option>
                <option value="tecnico_laboratorio">
                  Técnico de Laboratório
                </option>
                <option value="tecnico_radiologia" >
                  Técnico de Radiologia
                </option>
                <option value="tecnico_enfermagem">
                  Técnico em Enfermagem
                </option>
              </select>
            </div>
          </div>

          <div class="line">
            <div>
              <label for="email">Email: </label>
              <input type="email" name= "f_email" id="email" />
            </div>
            <div>
              <label for="phone">Telefone: </label>
              <input
                type="text"
                id="phone"
                name="f_telefone"
                onfocus="retirarFormatacao(this);"
                onblur="formatarCampoTelefone(this);"
                maxlength="11"
                placeholder="Apenas números"
              />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="cep">CEP: </label>
              <input type="number" name="f_cep" id="cep" placeholder="Apenas números" />
            </div>
            <div>
              <label for="cidade">Cidade: </label>
              <input type="text" name="f_cidade" id="cidade" readonly />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="rua">Rua: </label>
              <input type="text" name="f_rua" id="rua" readonly />
            </div>
            <div>
              <label for="numero">Número: </label>
              <input type="number" name="f_numero" id="numero" />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="bairro">Bairro: </label>
              <input type="text"  name="f_bairro" id="bairro" readonly />
            </div>
            <div>
              <label for="complemento">Complemento:</label>
              <input type="text" name="f_complemento" id="complemento" />
            </div>
          </div>
        </fieldset>
        <fieldset class="lastFieldset">
          <legend>Análise Curricular</legend>
          <div class="line">
            <input type="checkbox" name="f_analise_curricular" id="requisitos_minimos" />
            <label for="requisitos_minimos"
              >Possuo todos os requisitos mínimos para submissão do
              <embed src=' target="_blank">edital</a>
            </label>
          </div>
          <div class="line">
            <div>
              <label for="form_academica">Formação Acadêmica: </label>
              <select id="form_academica" name="f_formacao_academica" onchange="calcularFormacaoPontos(document.getElementById('pontos_form'))">
                <option value="sem_pos_graduacao">Sem Pós-Graduação</option>
                <option value="pos-graduacao">Pós-Graduação Latu Sensu</option>
                <option value="mestrado">
                  Pós-Graduação Stricto Sensu (Mestrado)
                </option>
                <option value="doutorado">
                  Pós-Graduação Stricto Sensu (Doutorado)
                </option>
              </select>
            </div>
            <div>
              <label for="pontos_form">Pontuação: </label>
              <input type="number" id="pontos_form" name="f_pontuacao_academica" value="0" readonly />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="tempo_servico"
                >Tempo de Serviço na Área da Saúde (meses):
              </label>
              <input
                type="number"
                id="tempo_servico"
                name="f_tempo_servico"
                onblur="calcularPontos(tempo_servicoInput, document.getElementById('pontos_tempo'), 25, experienciaInput)"
                placeholder="Máximo de 25 meses"/>
            </div>

            <div>
              <label for="pontos_tempo">Pontuação: </label>
              <input type="number" name="f_pontuacao" id="pontos_tempo" readonly />
            </div>
          </div>

          <div class="line">
            <div>
              <label for="experiencia">Experiência Profissional na Área Hospitalar (meses):</label>
              <input
                type="number"
                id="experiencia"
                name="f_experiencia_profissional"
                onblur="calcularPontos(experienciaInput, document.getElementById('pontos_exp'), 45)"
                placeholder="Máximo de 45 meses"/>
            </div>

            <div>
              <label for="pontos_exp">Pontuação: </label>
              <input type="number" name="f_pontuacao_2" id="pontos_exp" readonly />
            </div>
          </div>
        </fieldset>
        <div class="full-line">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </body>
  
  <!-- <script src="sendForm.js"></script> -->
  <script src="formatting.js"></script>
  <script src="search-cep.js"></script>
  <script src="calculatePoints.js"></script>

</html>
