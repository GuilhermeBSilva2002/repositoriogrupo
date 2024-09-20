
const abrirModal = (modal) => {
    modal.style.display = "block";
};

const fecharModal = (modal) => {
    modal.style.display = "none";
};


const esqueceuSenhaModal = document.getElementById("esqueceu_senha-modal");
const criarContaModal = document.getElementById("criar_conta-modal");
const esqueceuSenhaBtn = document.getElementById("esqueceu_senha-btn");
const criarContaBtn = document.getElementById("criar_conta-btn");
const fecharEsqueceuSenha = document.getElementById("fechar_esqueceu_senha");
const fecharCriarConta = document.getElementById("fechar_criar_conta");


esqueceuSenhaBtn.onclick = () => abrirModal(esqueceuSenhaModal);
criarContaBtn.onclick = () => abrirModal(criarContaModal);


fecharEsqueceuSenha.onclick = () => fecharModal(esqueceuSenhaModal);
fecharCriarConta.onclick = () => fecharModal(criarContaModal);


document.getElementById("confirma_senha-btn").onclick = () => {
    const newPassword = document.getElementById("nova_senha").value;
    const confirmPassword = document.getElementById("confirma_senha").value;
    
    if (newPassword === confirmPassword) {
        alert("Senha redefinida com sucesso!");
        fecharModal(esqueceuSenhaModal);
    } else {
        alert("As senhas não coincidem");
    }
};


document.getElementById("confirma_senha-btn").onclick = () => {
    const email = document.getElementById("email").value;
    const password = document.getElementById("conta_senha").value;
    
    alert(`Conta criada com sucesso para ${email}!`);
    fecharModal(criarContaModal);
};


window.onclick = (event) => {
    if (event.target === esqueceuSenhaModal) {
        fecharModal(esqueceuSenhaModal);
    }
    if (event.target === criarContaModal) {
        fecharModal(criarContaModal);
    }
};
