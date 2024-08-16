document.addEventListener('DOMContentLoaded', function () {
    const cadastrarAluno = document.getElementById('btnsalvar');
    const confirmarAluno = document.getElementById('confirmationBalloon');

    async function insert() {
        
    
    const form = document.getElementById("form");
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    }
    const response = fetch('aluno.php', opt);



    }
    cadastrarAluno.addEventListener('click', async() => {
        await insert();

    })
    cadastrarAluno.addEventListener('click', function () {
        // Mostra o balão de confirmação
        confirmarAluno.classList.remove('hidden');
        confirmarAluno.add('show');

        // Oculta o balão após 3 segundos
        setTimeout(function () {
            confirmarAluno.classList.remove('show');
            confirmarAluno.add('hidden');
        }, 3000);
    });
});
