//app.use(bodyParser.urlencoded({extended:false}));
//app.use(bodyParser.json());
const express = require("express")
const app = express();
const handlebars = require("express-handlebars");

//configurando o body-parser para receber os dados do formulario
const bodyParser = require('body-parser');


app.engine('handlebars', handlebars({defaultLayout: 'main'}))
app.set('view engine, handlebars');



///criando a rota pra conexao com o formulario
app.post('/cad', function(req,res){
    //res.send('conectando como o formulario');
    res.render('main')
});

app.post('/form',function(req,res){
    res.render('form');
});

//teste de importa a var  do java

let obj_form = require('send_form.js');
console.log(dataObject);








//craindo conexao com o banco de dados mysql --nao mexe pois esta funcionando
const  mysql = require('mysql'); //importa a biblioteca do mysql
const dataObject = require("./sendForm");

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'EMILLER',
    password:'adlo895020',
    database:'mydb'
});
connection.connect(function(err){
    if (err)
    {
        console.error('error connecting:'+ err.stack);
        return;
    }

    console.log('connected as id' + connection.threadID);
});



let constumer = {
    data_nascimento:'1997-12-18', //valor vindo do html
    cpf: '13098812605',//
    telefone:38991928653 ,//valor vindo do html
    nome_candidato: 'palmeiras nao tem mundial' , //valor vindo do html
    tipo_formacao: 'estagiario',//valor vindo do html
    time_de_servico_area_saude: 1 ,//valor vindo do html
    time_experiencia_profis_area_hospitalar: 1, //valor vindo do html
    nome: 'qualq coisa' ,//valor vindo do html
    nome_cargo: 'a definir', //valor vindo do html
    rua: 'olegario',
    cep:39402351,
    bairro:'jose',
    numero:58,
    cidade:'moc',
    complemento:'conjunto',
    formacao_academica_idFormacao_cademica : 1,
    idCargos_social: 13,
    idCargo_candidato: 1,
    idDados_academicos: 1,
    idEndereco:1
}//criando objeto para testar dados 

async function insert_endereco(connection,constumer)
{
    //const cursor = await connect();
    const sql = 'insert into endereco(rua,cep,bairro,numero,cidade,complemento) values (?,?,?,?,?,?);';
    const values = [constumer.rua, constumer.cep,constumer.bairro,constumer.numero,constumer.cidade,constumer.complemento];
    connection.query(sql,values);
}

async function insert_cargo_social(connection,constumer)
{
    //const cursor = await connect();
    const sql = 'insert into Cargo_social(nome) values(?);';
    const values = [constumer.nome];
    connection.query(sql,values);
}

async function  insert_Cargo_candidato(connection,constumer)
{
    //const cursor = await connect();
    const sql = 'insert into Cargo_candidato(nome_cargo) values(?);';
    const values = [constumer.nome_cargo];
    return await connection.query(sql, values);
}

async function insert_Formacao_academica (connection,constumer)
{
    //const cursor = await connect();
    const sql = 'insert into Formacao_academica(tipo_formacao,time_de_servico_area_saude,time_experiencia_profis_area_hospitalar) values(?,?,?);';
    const values = [constumer.tipo_formacao, constumer.time_de_servico_area_saude, constumer.time_experiencia_profis_area_hospitalar];
    return await connection.query(sql, values);
}

async function insert_dados_academicos(connection,constumer)
{
    //const cursor= await connect();
    const sql = 'insert into Dados_academicos(Formacao_academica_idFormacao_academica,Cargo_social_idCargo_social,Cargo_candidato_idCargo_candidato) values (?,?,?);';
    const values = [constumer.formacao_academica_idFormacao_cademica,constumer.idCargos_social,constumer.idCargo_candidato];
    return await connection.query(sql, values);
}

async function insert_cadastro_candidato(connection,constumer)
{
    //const cursor = await connect();
    const sql = 'insert into Candidato(nome_candidato,data_nascimento,cpf,telefone,endereco_idEndereco,Daddos_academicos_idDados_academicos) values(?,?,?,?,?,?);'; //colocar o comando sql
    const values = [constumer.nome_candidato, constumer.data_nascimento, constumer.cpf, constumer.telefone, constumer.idEndereco, constumer.idDados_academicos];
    return await connection.query(sql, values);
}

//module.exports = {insert_endereco,insert_cargo_social,insert_Cargo_candidato,insert_Formacao_academica,insert_dados_academicos,insert_cadastro_candidato}

//-----------------------------------------------------
(async() =>{

    const mysql  = require("./db");
    console.log('vai da');

    const grave_end = await db.insert_endereco(constumer);
    console.log(grave_end);

    const grave_from = await db.insert_Formacao_academica(constumer);
    console.log(grave_from);

    const grave_social = await db.insert_cargo_social(constumer);
    console.log(grave_social);

    const grave_candidato = await db.insert_Cargo_candidato(constumer);
    console.log(grave_candidato);

    const grave_academico = await db.insert_dados_academicos(constumer);
    console.log(grave_academico);

    const grave_candidato_cadastro = await db.insert_cadastro_candidato(constumer);
    console.log(grave_candidato_cadastro);
})();


insert_endereco(connection,constumer);
insert_cargo_social(connection,constumer);
insert_Cargo_candidato(connection,constumer);
insert_Formacao_academica(connection,constumer);
insert_dados_academicos(connection,constumer);
insert_cadastro_candidato(connection,constumer);
connection.query('select * from endereco;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});
//select cargo social
connection.query('select * from Cargo_social;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});

connection.query('select * from Cargo_candidato;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});

connection.query('select * from Formacao_academica;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});

connection.query('select * from Dados_academicos;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});

connection.query('select * from candidato;', function(err, rows, fields){
    if(!err){
        console.log('resultado:',rows);
    }
    else{
        console.log('erro');
    }
});*/


app.listen(8288, function(){
    console.log("servidor rodando na porta 8085"); //criando funcao de callback
}); //sevidor localhost 