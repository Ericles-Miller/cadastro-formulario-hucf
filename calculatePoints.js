const formacao_academicaInput = document.getElementById("form_academica");
const tempo_servicoInput = document.getElementById("tempo_servico");
const experienciaInput = document.getElementById("experiencia");

function calcularPontos(firstInput, campoTexto, maxPoints, nextInput) {
  if (firstInput.value <= maxPoints && firstInput.value >= 0)
    campoTexto.value = firstInput.value;
  else if (firstInput.value > maxPoints) campoTexto.value = maxPoints;
  else campoTexto.value = 0;

  if (nextInput) nextInput.focus();
}

function calcularFormacaoPontos(targetInput) {
  let pontos_formacao;

  if (formacao_academicaInput.value === "pos-graduacao") 
    pontos_formacao = 20;
  else if (formacao_academicaInput.value === "mestrado")  
    pontos_formacao = 25;
  else if (formacao_academicaInput.value === "doutorado") 
    pontos_formacao = 30;
  else 
    pontos_formacao = 0;

  targetInput.value = pontos_formacao;
}
