<?php
// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jetflow_cadastro";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Query para selecionar todos os registros da tabela "cadastro"
$sql = "SELECT * FROM cadastro";
$result = $conn->query($sql);

// Verifica se há registros retornados pela query
if ($result->num_rows > 0) {
    // Exibe os dados em uma tabela HTML
    echo '<div class="table-responsive">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Nome</th>';
    echo '<th>Telefone</th>';
    echo '<th>Email</th>';
    echo '<th>Marca/Modelo</th>';
    echo '<th>Ano/Fabricação</th>';
    echo '<th>Data do Ccadastro</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    // Loop através dos resultados e exibe cada registro na tabela
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["telefone"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["marca_modelo"] . '</td>';
        echo '<td>' . $row["ano_fabricacao"] . '</td>';
        echo '<td>' . $row["Data_cadastro"] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "Não há registros na tabela.";
}

// Fecha a conexão com o banco de dados
$conn->close();
                                                    // Exibir dados na tabela
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>{$row['nome']}</td>";
                                                        echo "<td>{$row['telefone']}</td>";
                                                        echo "<td>{$row['email']}</td>";
                                                        echo "<td>{$row['marca_modelo']}</td>";
                                                        echo "<td>{$row['ano_fabricacao']}</td>";
                                                        echo "<td>{$row['Data_cadastro']}</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                