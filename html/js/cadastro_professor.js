const cadastrarProfessor = document.getElementById("btnsalvarprofessor");

async function insert() {
    const form = document.getElementById("formProfessor");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData


    }
    const response = fetch('professorInserir.php', opt);
    


}
cadastrarProfessor.addEventListener('click',async() => {
    await insert();
    

});
