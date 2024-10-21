function validateInput(input) {
    const errorMessageSpan = document.getElementById(`error-${input.name}`);
    errorMessageSpan.textContent = '';
    errorMessageSpan.style.display = 'none';
    errorMessageSpan.style.color = 'red';
    input.style.border = '';

    if (input.value.trim() === '') {
        errorMessageSpan.textContent = 'Este campo no puede estar vacío';
        errorMessageSpan.style.display = 'block';
        input.style.border = '2px solid red';
        return false; 
    }

    if (isNaN(input.value)) {
        errorMessageSpan.textContent = 'Por favor, introduce un número válido';
        errorMessageSpan.style.display = 'block';
        input.style.border = '2px solid red';
        return false; 
    }

    if (Number(input.value) <= 0) {
        errorMessageSpan.textContent = 'El número debe ser mayor que 0';
        errorMessageSpan.style.display = 'block';
        input.style.border = '2px solid red';
        return false; 
    }

    input.style.border = ''; 
    return true;
}
