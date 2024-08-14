const cadastrarDisciplina = document.getElementById("btnsalvarDisciplina");

async function insert() {
    const form = document.getElementById("formDisciplina");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData


    }
    const response = fetch('disciplinaInserir.php', opt);
    


}
cadastrarDisciplina.addEventListener('click',async() => {
    await insert();
    

});
