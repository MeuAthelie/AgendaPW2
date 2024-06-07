let listaContatos = $(".contacts-container");

let request = new XMLHttpRequest();

request.onreadystatechange = function() {
    if (request.readyState == 4 && request.status == 200) {
        let contatos = JSON.parse(this.responseText);

       contatos.forEach(contato => {
            listaContatos.append(`
                <div class="contact">
                    <div class="contact-name">
                        <p>${contato.id}</p>
                        <p>${contato.nome}</p>
                    </div>
                <div>
                    <button type="button">
                        <i class="fa-solid fa-pen fa-lg"></i>
                    </button>
                    <button type="button">
                        <i class="fa-solid fa-trash fa-lg red"></i>
                    </button>
                </div>
              </div>
            `);
        });
    }
}
request.open('GET', 'http://localhost:3000/get-nomes.php', true);
request.send();

// for (let itgo = 0; itgo < 10; itgo++) {
//     listaContatos.append(`
//         <div class="contact" id="contact${itgo}">
//             <p class="contact-name">Contato #${itgo}</p>
//             <div>
//                 <button type="button">
//                     <i class="fa-solid fa-pen fa-lg"></i>
//                 </button>
//                 <button type="button">
//                     <i class="fa-solid fa-trash fa-lg red"></i>
//                 </button>
//             </div>
//         </div>
//     `);
// }