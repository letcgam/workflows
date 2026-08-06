class UsuarioController {
    constructor() {
        console.log('UsuarioController initialized');

        $(document).ready(this.setEventListeners.bind(this));
    }

    setEventListeners() {
        $("#formCadastroUsuario").on("submit", (e) => {
            e.preventDefault();

            this.store();
        });
    }

    store() {
        const name = $("#name").val();

        const parametros = {
            name
        };

        console.log(parametros);

        $.ajax({
            url: BASE_URL + 'usuario/store',
            dataType: 'json',
            method: 'POST',
            data: parametros,
            success: function (data) {
                console.log('sucesso');
            },
            error: function (e) {
                console.error(e);
            }
        })
    }
}

globalThis.UsuarioController = new UsuarioController();