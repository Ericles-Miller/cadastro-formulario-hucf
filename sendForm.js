const form = document.querySelector("form");
const nomeInput = document.postElementById("nome");
const cpfInput = document.postElementById("cpf");
const data_nascimentoInput = document.postElementById("nasc");
const cargoInput = document.postElementById("cargo");
const emailInput = document.postElementById("email");
const telefoneInput = document.postElementById("phone");
const complementoInput = document.postElementById("complemento");
const formacao_academicaInput = document.postElementById("form_academica");
const tempo_servicoInput = document.postElementById("tempo_servico");
const experienciaInput = document.postElementById("experiencia");

let dataObject = {};

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const data = {
    nome_candidato: nomeInput.value,
    cpf: cpfInput.value,
    data_nascimento: data_nascimentoInput.value,
    nome_cargo: cargoInput.value,
    email: emailInput.value,
    telefone: telefoneInput.value,
    cep: cepInput.value,
    cidade: cidadeInput.value,
    rua: ruaInput.value,
    numero: numeroInput.value,
    bairro: bairroInput.value,
    tipo_formacao: formacao_academicaInput.value,
    time_de_servico_area_saude: tempo_servicoInput.value,
    time_experiencia_profis_area_hospitalar: experienciaInput.value,
  };
  dataObject = data;
  console.log(dataObject); 

  module.exports = dataObject;
  console.log(dataObject)// tirar 
});

