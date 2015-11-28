<?php
                    include('conexao.php');
                    $id = $_GET['id'];
                    $result=mysql_query("DELETE FROM livro WHERE id='$id'");

                ?>

                    <script type="text/javascript">
		            alert("LIVRO EXCLUIDO COM SUCESSO ");
                            window.location.href = "../exibelivros.php";
		     </script>
