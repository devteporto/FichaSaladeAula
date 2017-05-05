


<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="logado.php"><span>techporto</span>classroom</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>

        <?php

        include('entity/Ficha.class.php');
        include_once "dao/DAO.class.php";
        include_once "connection/conexao.php";
        include('entity/Usuario.class.php');


        session_start();

        $usuarioLogado = $_SESSION['usuario'];
        $fichaConection = FichaDAO::getInstance(Conexao::getInstance());



        ?>
     <div id="pages_maincontent">
     
              <h2 class="page_title">FICHAS DE ACOMPANHAMENTO</h2>
     
     <div class="page_single layout_fullwidth_padding">

         <div class="mensagem" id="mensagem"></div>
         <div class="error" id="error"></div>




                 <ul style="margin-top: 35px" class="responsive_table">
                     <li class="table_row">
                         <div class="table_section_14">Profº Avaliado</div>
                         <div class="table_section_14">Nivel</div>
                         <div class="table_section_14">Disciplina</div>
                         <div class="table_section_14"></div>
                     </li>


                <?php
                        //RECUPERA A LISTA DE FICHAS CADASTRADAS USANDO A FUNCAO LISTAR DA DAO
                       $fichas = $fichaConection->listar($usuarioLogado->getNome());



                        if (count($fichas) > 0){


                        foreach ($fichas as  $ficha) {

                          $nomeSobrenome = $fichaConection->nome_sobrenome($ficha->getUser());

                        ?>



                        <li class="table_row">
                            <div class="table_section_14"><?php echo $nomeSobrenome?></div>
                            <div class="table_section_14"><?php echo $ficha->getNivel()?></div>
                            <div class="table_section_14"><?php echo $ficha->getDisciplina()?></div>

                            <div style="width: 50px" class="table_section_small">

                                <a href="#" onclick="excluir(<?php echo $ficha->getId()?>)"><b>Excluir</b></a>

                            </div>
                            <div class="table_section_small">

                                <a href="editar.php?id=<?=$ficha->getId()?>"><b>Editar</b></a>

                            </div>


                        </li>



                <?php }?>

                </ul>


                <?php }else{?>


                    <h3 style="text-align: center"><?=$usuarioLogado->getNome()?>, você ainda não cadastrou nenhuma ficha :(</h3>

                <?php } ?>
              </div>




      </div>
      
      
    </div>
  </div>

</div>



