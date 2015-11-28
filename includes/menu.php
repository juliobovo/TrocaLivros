          <div id="content">
            <div class="container-fluid">
                <div class="row">
                    
                  <div id="menu-principal"  class="col-md-6 col-md-offset-3">
                        <ul class="list-inline">
                            <li class="menu-iten"><a class="menu_a" href="principal.php">Meus Livros</a></li>
                            <li class="menu-iten"><a class="menu_a" href=cadastrolivro.php>Adicionar novo livro    </a></li>
                            <li class="menu-iten"><a class="menu_a" href="solicitacoes.php">Solicitações</a></li>
                            <?php if($_SESSION['admin']==1){ 
                                echo "<li class='menu-iten'><a class='menu_a' href='exibelivros.php'>Admin</a></li>";
                            } ?>
                                        </ul>
                    </div>
                    
                    
                    
                    </div>
            </div>
        </div>