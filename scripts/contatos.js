let listaContatos = $(".contacts-container");

for (let itgo = 0; itgo < 10; itgo++) {
    listaContatos.append(`
        <div class="contact" id="contact${itgo}">
            <p class="contact-name">Contato #${itgo}</p>
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
}