const cadastrarAluno = document.getElementById("btnsalvar");

async function insert() {
    const form = document.getElementById("form");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData


    }
    const response = fetch('aluno.php', opt);
    


}
cadastrarAluno.addEventListener('click',async() => {
    await insert();
    

});
