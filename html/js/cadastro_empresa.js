const cadastrarEmpresa = document.getElementById("btnsalvarEmpresa");

async function insert() {
    const form = document.getElementById("formEmpresa");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData


    }
    const response = fetch('empresaInserir.php', opt);
    


}
cadastrarEmpresa.addEventListener('click',async() => {
    await insert();
    

});
