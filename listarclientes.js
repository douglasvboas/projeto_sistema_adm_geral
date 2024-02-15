function searchClients() {
    var searchTerm = document.getElementById("searchInput").value;
    var currentPage = getCurrentPage(); // Função para obter o número da página atual
    var url = "listar_clientes.php?page=" + currentPage + "&search=" + searchTerm;
    
   
    $.ajax({
        url: url,
        type: "GET",
        success: function(response) {
            // Atualiza a tabela com os resultados da pesquisa
            // Você precisará implementar esta função com base na resposta do servidor.
            updateTable(response);
        },
        error: function(xhr, status, error) {
            console.error("Erro ao processar a pesquisa:", error);
        }
    });
}

function getCurrentPage() {
    
}
