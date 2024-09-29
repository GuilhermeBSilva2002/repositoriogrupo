const salvar = document.getElementById('confirmarCadastro');
salvar.addEventListener('click', async () => {
    const form = document.getElementById('form');
    if (!form) {
        throw new Error("Formulário não encontrado.");
    }
    const formData = new FormData(form);
    const options = {
        method: "POST",
        headers: new Headers({
            'Accept': 'application/json',

        }),
        body: formData
    };
    try {
        const response = await fetch(`/usuario/insert`, options);
        return await response.json();
    } catch (error) {
        throw new Error(error); // Propaga o erro para ser tratado por quem chamou a função
    }
});