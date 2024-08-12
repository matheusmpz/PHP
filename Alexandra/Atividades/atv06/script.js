document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form');
    const resetButton = document.getElementById('reset');
    const infosDiv = document.getElementById('infos');
    const valueElement = document.getElementById('value');
    const descriptionElement = document.getElementById('description');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o recarregamento da página

        // Enviar os dados do formulário via AJAX para o PHP
        const formData = new FormData(form);

        fetch('script.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.IMC) {
                // Atualizando a interface com os resultados
                valueElement.textContent = data.IMC;
                valueElement.className = data.classe; // Aplicando a classe ao valor
                descriptionElement.textContent = data.description;

                // Mostrando a div do resultado e o botão de reset
                infosDiv.classList.remove('hidden');
                resetButton.classList.remove('hidden');
            } else {
                alert('Erro ao calcular o IMC. Por favor, tente novamente.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro ao enviar os dados. Por favor, tente novamente.');
        });
    });

    // Função para resetar os valores e esconder os elementos ao clicar no botão de reset
    resetButton.addEventListener('click', function() {
        console.log('Botão de reset clicado'); // Verificando se o clique está sendo capturado

        // Resetando o formulário
        form.reset();

        // Limpando a interface
        infosDiv.classList.add('hidden'); // Escondendo a div do resultado
        resetButton.classList.add('hidden'); // Escondendo o botão de reset
        valueElement.textContent = ''; // Limpando o valor do IMC
        descriptionElement.textContent = ''; // Limpando a descrição
        valueElement.className = ''; // Removendo qualquer classe adicionada
    });
});