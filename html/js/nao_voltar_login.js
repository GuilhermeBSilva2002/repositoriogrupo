function checkAuthentication() {
    const isAuthenticated = localStorage.getItem('authenticated'); 

    // Se o usuário não estiver autenticado, redireciona para login.html
    if (!isAuthenticated) {
        window.location.href = '#'; 
    } else {
        // Se o usuário estiver autenticado e estiver na página de login, redireciona para inicio.php
        if (window.location.pathname.endsWith('login')) {
            window.location.href = 'inicio'; 
        }
    }
}

function preventBack() {
    window.history.pushState(null, document.title, window.location.href);
    window.addEventListener('popstate', function () {
        window.history.pushState(null, document.title, window.location.href);
    });
}

window.onload = function() {
    checkAuthentication();
    preventBack(); // Impede o usuário de voltar
};
