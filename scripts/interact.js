const API_URL =
  "https://eth-goerli.g.alchemy.com/v2/2ZhLfy8PV7QNzlFGW2iz8MMfdaRc_CkI";
const API_KEY = "2ZhLfy8PV7QNzlFGW2iz8MMfdaRc_CkI";
const PRIVATE_KEY =
  "a8635bad8c7779a7b1147c3fc225211814441460dbc8fca12471aff900fe3fe8";
const OLD_CONTRACT_ADDRESS = "0x7294C57D48Ee4582b88367B97828c9D982E0cb4E";
const CONTRACT_ADDRESS = "0xf12a1D03718244A9B24461116D4525Df455Fe2cc";
// import { ethers, network } from "ethers";

import contract from "../artifacts/contracts/Crud.sol/Crud.json" assert { type: "json" };

// const { ethers, network } = require("ethers");
// const contract = require("../artifacts/contracts/Crud.sol/Crud.json");

const provider = new ethers.providers.AlchemyProvider("goerli", API_KEY);
const signer = new ethers.Wallet(PRIVATE_KEY, provider);
const CRUD = new ethers.Contract(CONTRACT_ADDRESS, contract.abi, signer);
const BACKUP = new ethers.Contract(OLD_CONTRACT_ADDRESS, contract.abi, signer);

// console.log(CRUD);
export async function display() {

  //   const deletee = await CRUD.del(5)
  //   let criar = await CRUD.create('Eliezer', 'Eliezer@gmail.com', 002, '30/03/90', 4655)
  // const deletados = await CRUD.deletedClients(1)
  let ler = await CRUD.read();
  console.log("sizeof the blockchain: ", ler);

  //   let criar = await CRUD.clients(0);

  //   console.log("->>>>>>>>>", criar["name"]);
  //   console.log("->>>>>>>>>", criar["email"]);
  //   console.log("->>>>>>>>>", criar["cpf"]);
  //   console.log("->>>>>>>>>", criar["cel"]);
  //   console.log("->>>>>>>>>", criar["date"]);
  //   console.log("sizeof the blockchain: ", await CRUD.read());
  //   console.log("--=======================================--");

  $("#table_body").empty();
  for (let i = 0; i < (await CRUD.read()); i++) {
    let criar = await CRUD.clients(i);
    console.log("old ----->", await CRUD.clients(i))
    console.log("<------------------------------>")
    // console.log(criar);
    $("#table_body").append(`
      <tr>
            <td>${criar["name"]} </td>
            <td>${criar["email"]}</td>
            <td>${criar["cpf"]} </td>
            <td>${criar["cel"]} </td>
            <td>${criar["date"]} </td> 
            <td><a id="delete${i}" data-id="${i}">
                    <i class="fa fa-close"></i>
                </a>  

                <a href="#" id="alter${i}"><i class="fa fa-edit"></i>
            </td>
        </tr>
      `);

    // Deletar
    $(`#delete${i}`).click(() => {
      remove(i);
    });

    // Alterar
    $(`#alter${i}`).click(() => {
      // console.log("Irei alterar o elemento da posição: ", i)
      alter(i);
    });

    //     const cel = criar["cel"];
    //     // const deletados = await CRUD.deletedClients().lenght
    //     // console.log("->>>>>>>>>", criar[Object.keys(criar)[6]])}
    //     // for (j = 0; j < deletados; j++)  {
    //     //   if(await CRUD.deletedClients(j) == i){
    //     // console.log("deletado");
    //     // } else {
    //     // if (i == deletados) {
    //     //   console.log("deletado");
    //     //   console.log("--=======================================--");
    //     // } else {
    //       console.log("->>>>>>>>>", criar["name"]);
    //       console.log("->>>>>>>>>", criar["email"]);
    //       console.log("->>>>>>>>>", criar["cpf"]);
    //       console.log("->>>>>>>>>", cel);
    //       console.log("->>>>>>>>>", criar["date"]);
    //       console.log("sizeof the blockchain: ", await CRUD.read());
    //       console.log("--=======================================--");
    //     // }
    //     // }
  }

  // for(let i=0; i< await CRUD.read(); i++){
  //   console.log($(`#delete${i}`).attr("data-id"))
  //   $(`#delete${i}`).click(()=>{
  //     console.log("Irei deletar o elemento da posição: ", i)
  //     remove(i)
  //   })
  // }
}

export async function signUp(nome, email, date, cpf, cel) {
  nome = String(nome);
  email = String(email);
  cel = parseInt(cel);
  cpf = parseInt(cpf);
  let criar = await CRUD.create(nome, email, date, cpf, cel);
  alert("sucesso!");
  window.location.href = "tables_dynamic.php";
}

export async function alter(id) {
  const client = await CRUD.clients(id);

  let nome = $("#name");
  let date = $("#date");
  let email = $("#email");
  let cel = $("#cel");
  let cpf = $("#cpf");

  nome.attr("value", client["name"]);
  date.attr("value", client["date"]);
  email.attr("value", client["email"]);
  cel.attr("value", client["cel"]);
  cpf.attr("value", client["cpf"]);

  $("#alterModal").modal("show");
  $("#btnAlter").click(async () => {
    nome = String(nome.val());
    email = String(email.val());
    date = $("#date").val();
    cel = parseInt(cel.val());
    cpf = parseInt(cpf.val());
    console.log("KATSU")
    console.log(nome, email, date, cel, cpf)
    await CRUD.create(nome, email, date, cpf, cel);
    await CRUD.alter(id);
    alert("sucesso")
    window.location.href = "tables_dynamic.php"
  });
}

export async function remove(i) {
  console.log("Irei deletar o elemento da posição: ", i);
  // const deletar = await CRUD.remove(i)
  $("#deleteModal").modal("show");
  $("#btnDelete").click(async () => {
    await CRUD.remove(i);
    window.location.href = "tables_dynamic.php";
  });
}

// display();
