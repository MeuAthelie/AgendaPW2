let listaContatos = $(".contacts-container");

let leitura = new XMLHttpRequest();

leitura.onreadystatechange = function() {
    if (leitura.readyState == 4 && leitura.status == 200) {
        let contatos = JSON.parse(this.responseText);
        let html = '';

       contatos.forEach(contato => {
        html += `
                <div class="contact">
                    <div class="contact-name">
                        <p>${contato.nome}</p>
                    </div>
                <div>
                    <button type="button">
                        <i class="fa-solid fa-pen fa-lg"></i>
                    </button>
                    <button type="button" id="${contato.id}" onClick="excluir(this)">
                        <i class="fa-solid fa-trash fa-lg red"></i>
                    </button>
                </div>
              </div>
            `
        });

        listaContatos.html(html);
    }
}
leitura.open('GET', 'http://localhost/AgendaPW2/get-nomes.php', true);
leitura.send();

function excluir(elemento) {
    let id = `id=${elemento.id}`;

    let exclusao = new XMLHttpRequest();
    exclusao.open('POST', 'http://localhost/AgendaPW2/delete.php');
    exclusao.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    exclusao.onreadystatechange = function () {
        if (exclusao.readyState === 4 && exclusao.status === 200) {
            console.log(this.responseText);

            leitura.open('GET', 'http://localhost/AgendaPW2/get-nomes.php');
            leitura.send();
        }
    }

    exclusao.send(id);
}

function inserir() {
    let entrada = $('#pesquisa');

    let nome = `nome=${entrada.val().replace(" ", "_")}`;

    let inserir = new XMLHttpRequest();
    inserir.open('POST', 'http://localhost/AgendaPW2/insert.php');
    inserir.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    inserir.onreadystatechange = function () {
        if (inserir.readyState === 4 && inserir.status === 200) {
            console.log(this.responseText);

            leitura.open('GET', 'http://localhost/AgendaPW2/get-nomes.php');
            leitura.send();
        }
    }

    inserir.send(nome);
}