function mascaraCpf(valor) {
  return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, "$1.$2.$3-$4");
}

function mascaraTelefone(valor) {
  return valor.replace(/(\d{2})(\d{5})(\d{4})/g, "($1) $2-$3");
}

function validar_cpf(cpf) {
  const wrongChars = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z",
    ".",
    ",",
    ":",
    ";",
  ];
  let valido = true;

  for (char of wrongChars) {
    if (
      cpf.includes(char) ||
      cpf.length < 11 ||
      cpf == "00000000000" ||
      cpf == "11111111111" ||
      cpf == "22222222222" ||
      cpf == "33333333333" ||
      cpf == "44444444444" ||
      cpf == "55555555555" ||
      cpf == "66666666666" ||
      cpf == "77777777777" ||
      cpf == "88888888888" ||
      cpf == "99999999999"
    )
      valido = false;
  }
  valido = TestaCPF(cpf);

  return valido;
}

function validar_telefone(tel) {
  const wrongChars = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z",
    ".",
    ",",
    ":",
    ";",
  ];
  let valido = true;

  for (char of wrongChars) {
    if (
      tel.includes(char) ||
      tel.length < 11 ||
      tel == "00000000000" ||
      tel == "11111111111" ||
      tel == "22222222222" ||
      tel == "33333333333" ||
      tel == "44444444444" ||
      tel == "55555555555" ||
      tel == "66666666666" ||
      tel == "77777777777" ||
      tel == "88888888888" ||
      tel == "99999999999"
    )
      valido = false;
  }
  return valido;
}

function retirarFormatacao(campoTexto) {
  campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g, "");
}

function formatarCampoCpf(campoTexto) {
  if (validar_cpf(campoTexto.value))
    campoTexto.value = mascaraCpf(campoTexto.value);
  else {
    alert("Favor digitar um CPF válido.");
    campoTexto.value = "";
  }
}

function formatarCampoTelefone(campoTexto) {
  if (validar_telefone(campoTexto.value))
    campoTexto.value = mascaraTelefone(campoTexto.value);
  else {
    alert("Favor digitar um telefone válido.");
    campoTexto.value = "";
  }
}

function TestaCPF(strCPF) {
  let Soma;
  let Resto;
  Soma = 0;
  if (strCPF == "00000000000") return false;

  for (i = 1; i <= 9; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(9, 10))) return false;

  Soma = 0;
  for (i = 1; i <= 10; i++)
    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
  Resto = (Soma * 10) % 11;

  if (Resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(strCPF.substring(10, 11))) return false;
  return true;
}
