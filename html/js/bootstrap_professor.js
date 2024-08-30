const alertPlaceholder = document.getElementById('liveAlertPlaceholder_professor')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn_professor')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert ( 'Campos com * devem ser preenchidos obrigatoriamente!', 'warning')
  });
};