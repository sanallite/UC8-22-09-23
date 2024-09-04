use quitanda
/* Usar ou criar um banco de dados */

show dbs
/* Exibir banco de dados */

db.createCollection("frutas")
/* Criar coleções */

db.frutas.insertOne({"nome":"Márcio", "idade":15})
/* Inserir um registro (documento) na coleção */
db.frutas.insertOne({"nome":"Laranja", "Vencimento":"2 meses"})

/* db.frutas.find() */
/* Encontrar um registro */

db.frutas.insertOne({"nome":"Márcio", "idade":15, "cpf":"12200011122"})
/* db.frutas.find() */

db.frutas.insertMany( [
        {"nome":"Luiz","idade":40},
        {"nome":"Maria","idade":25},
        {"nome":"Bruna","idade":19}
    ] )
/* Nessa versão para inserir mais de um registro, deve-se fazer em forma de vetor, utilizando os colchetes. */

db.frutas.updateOne( {"_id":ObjectId("65410864c0f23906837b9158")}, { $set:{"nome":"Márcio Teodoro","idade":24} } )
/* Atualizar um registro buscando pela chave unica "_id" */

db.frutas.updateOne({"nome":"Márcio"},{$set:{"nome":"Márcio Teodoro"}})

db.frutas.updateOne ({},{ $set:{"status":"Ativo"} },{multi:true})

db.frutas.deleteOne({"nome":"Márcio"})
/* db.frutas.find() */