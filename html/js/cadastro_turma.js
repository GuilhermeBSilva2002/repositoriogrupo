const cadastrarTurma = document.getElementById("btnsalvarTurma");

async function insert() {
    const form = document.getElementById("formTurma");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData


    }
    const response = fetch('turmaInserir.php', opt);
    


}
cadastrarTurma.addEventListener('click',async() => {
    await insert();
    

});
