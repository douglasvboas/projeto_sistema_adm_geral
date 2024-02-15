<?php
                      // Conectar ao banco de dados
                      $conexao = new mysqli("localhost", "root", "", "jetflow_cadastro");

                      // Verifica se houve algum erro na conexão
                      if ($conexao->connect_error) {
                        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
                      }

                      // Consulta SQL para selecionar todos os registros da tabela "cadastro"
                      $sql = "SELECT cpf, data_cadastro, nome, telefone, email, marca_modelo, ano_fabricacao FROM cadastro";
                      $resultado = $conexao->query($sql);

                      // Verifica se a consulta retornou algum registro
                      if ($resultado->num_rows > 0) {
                        // Loop através de todos os registros e exibe-os na tabela
                        while($linha = $resultado->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $linha["cpf"] . "</td>";
                          echo "<td>" . $linha["data_cadastro"] . "</td>";
                          echo "<td>" . $linha["nome"] . "</td>";
                          echo "<td>" . $linha["telefone"] . "</td>";
                          echo "<td>" . $linha["email"] . "</td>";
                          echo "<td>" . $linha["marca_modelo"] . "</td>";
                          echo "<td>" . $linha["ano_fabricacao"] . "</td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='7'>Nenhum cliente encontrado</td></tr>";
                      }

                      // Fecha a conexão com o banco de dados
                      $conexao->close();
                    ?>