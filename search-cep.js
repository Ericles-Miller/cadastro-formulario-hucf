const cepInput = document.getElementById("cep");
const bairroInput = document.getElementById("bairro");
const cidadeInput = document.getElementById("cidade");
const ruaInput = document.getElementById("rua");
const numeroInput = document.getElementById("numero");

cepInput.addEventListener("blur", () => {
  fetch(`https://viacep.com.br/ws/${cepInput.value}/json/`)
    .then((response) => response.json())
    .then((data) => {
      bairroInput.value = data.bairro;
      cidadeInput.value = data.localidade;
      ruaInput.value = data.logradouro;
      numeroInput.focus();
    });
});


