// Parte 1:
    let vazio = {};
    // Objeto Vazio, utiliza-se as chaves para criar um objeto.

    let vazioa = ["John", 35, "Rua das Marias"];
    // Isso é uma array.

    let objetoSimples = { x:1, y:2 };
    // Duas propriedades.

    let objetoComplexo = { x:objetoSimples.x, y:objetoSimples.y };
    // Valores complexos.

    let livro = {
        autor: "Márcio Teodoro",
        titulo: "Aonde posso chegar",
        ano: "2010",
        volume2: {
            ano: 2023,
            atualizacao: ["Revisão do texto mediante novas perspectivas.", "Mudança em frase sem sentido", "Nova capa"]
        }
    };

    console.log (objetoSimples.x);

    console.log (objetoSimples.x+objetoSimples.y);
    console.log (objetoComplexo.y+16);
    /* Execute o arquivo atual no console de depuração, depois de selecionar node js, para que ele seja atualizado, conforme você for mudando coisas no arquivo. */

    console.log (livro.autor);
    // Acessando o objeto.

    console.log (livro.volume2.atualizacao[0]);
    // Acessando um objeto dentro do objeto.

    console.log ( livro["titulo"] );
    // Outra forma de acessar um objeto.

// Parte 2:
    let pessoa = {nome: "Márcio", idade: 15, cidade: "Pinhais", aposentado: false};

    console.log (pessoa.nome + ", " + pessoa.idade);

    console.log ( pessoa["cidade"] );

    let pais = {nome: "Brazil", nome_oficial: "Império do Brazil", ano_fundacao: 1822, imperador: "Dom Bertrand I", primeiro_ministro: "Aldo Rebelo"};

    console.log (pais.nome+ "\n" +pais.nome_oficial+ "\n" + pais.ano_fundacao+ "\n" +pais.imperador+ "\n" + pais.primeiro_ministro);
    console.log ( pais["nome"], pais["ano_fundacao"] );

// Parte 3:
    let dados = '{"nome":"Márcio", "idade": 15, "endereco": "Rua Justiliano"}';
    console.log (dados);

    let objeto = JSON.parse(dados);
    // Covertendo uma string de um objeto JSON em um objeto JS através do parse.

    console.log (objeto);
    console.log (objeto.endereco);

    let nomes = { nome1: "Márcio", nome2: "John", nome3: "Bruna", nome4: "Paulo", nome5: "Heitor" };
    let objJSON = JSON.stringify(nomes);
    // Convertendo um objeto JavaScript em string através do stringfy.

    console.log (objJSON);

    let objNomes = JSON.parse(objJSON);
    // Convertendo em objeto JavaScript um objeto JSON que era originalmente um objeto JavaScript e foi convertido em JSON.

    console.log (objNomes.nome1);

// Parte 4:
let objetoNormal = {
    nome: "Márcio",
    idade: 15+9
}

let objetoJSON = {
    "nome":"Bruna",
    "idade": 19
}

console.log (objetoJSON.nome);
/* Você pode encontrar um valor de um objeto JSON se ele não estiver numa string */

let JSONstring = '{"nome": "Bruna", "idade": 19 }'

console.log ( JSONstring );

let JSONdata = '{"nome": "Maria Joaquina", "idade": 11, "cidade": "São Paulo"}'

let JSONdata_convertido = JSON.parse(JSONdata);

console.log ("Nome: "+JSONdata_convertido.nome+ "\nIdade: " +JSONdata_convertido.idade+ "\nCidade: " +JSONdata_convertido.cidade);