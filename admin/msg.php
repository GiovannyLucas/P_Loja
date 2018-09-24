 <?php 
            include("config.php");

                $sqlLer = "SELECT * FROM notificacoes WHERE status = '0' ORDER BY id DESC";
                $queryLer = mysqli_query($conexao, $sqlLer);

            while ($dadosNot = mysqli_fetch_assoc($queryLer)) {

              echo '
                
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/mensagem-icon.png" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          '.$dadosNot['nome'].'
                          
                        </h4>
                        <p>'.$dadosNot['assunto'].'</p>
                      </a>
                    </li>
              
              ';  
            
            }
 ?>