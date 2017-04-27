<?php

include('entity/Usuario.class.php');

session_start();
if(!isset ($_SESSION['usuario']))
{
    unset($_SESSION['usuario']);
    header('location:index.php');
}


$usuarioRecebido = $_SESSION['usuario'];


?>

<div class="pages">
  <div data-page="form" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
			<div class="logo_text"><a href="index.html"><span>porto</span>classroom</a></div>
		</div>			
		<a href="#" data-panel="left" class="open-panel">
			<div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
		</a>					
	</div>
	
     <div id="pages_maincontent">
     
<!--              <h2 class="page_title">CUSTOM FORM</h2> -->
     
     <div class="page_single layout_fullwidth_padding">

                <div class="contactform">






                    <form method="post" action="controller/fichaController.php">

                        <div class="form_row">
                        <label>Avaliador(a):</label>
                            <h4><?php echo $usuarioRecebido->getNome(); ?></h4>
                        <input type="hidden" name="nome" value="<?php echo $usuarioRecebido->getNome();?>" class="form_input" di />
                        </div>

                    <div class="form_row">
                        <label>Câmpus:</label>
                        <div class="selector_overlay">
                            <select  name="campus"  id="selectoptions">
                                <option value="" disabled="disabled" selected>Selecione o câmpus abaixo</option>
                                <option value="campusMorumbi">Câmpus Morumbi</option>
                                <option value="campusValinhos">Câmpus Valinhos</option>
                                <option value="campusPanamby">Câmpus Panamby</option>

                            </select>
                        </div>
                    </div>


                <div class="form_row">
                <label>Disciplina:</label>
			<div class="selector_overlay">
				<select name="disciplina" id="selectoptions">
					<option value="" disabled="disabled" selected>Selecione a disciplina abaixo</option>
					<option value="alemao">Alemão</option>
					<option value="portugues">Português</option>
					<option value="matematica">Matemática</option>
					<option value="ciencias">Ciências</option>
					<option value="fisica">Fisica</option>
                    <option value="quimica">Ciências</option>
                    <option value="geografia">Geográfia</option>
                    <option value="historia">História</option>
                    <option value="edfisica">Ed. Fisica</option>
				</select>
			</div>	
                </div>



                    <div class="form_row">
                        <label>Nível:</label>
                        <div class="selector_overlay">
                            <select name="nivel"  id="selectoptions">
                                <option value="" disabled="disabled" selected>Selecione abaixo o nível</option>
                                <option value="fundamental1">Fundamental I</option>
                                <option value="fundamental2">Fundamental II</option>
                                <option value="ensinoMedio">Ensino Médio</option>

                            </select>
                        </div>
                    </div>

                <div class="form_row">
                    <p>&nbsp;</p>
                </div>

                <!--QUESTÃO 01-->
                <div  class="form_row">
                        <label>1) Criação de ambiente de aprendizagem (espaços e recursos)</label>
                        <p>Como o professor deixa o espaço e a preparação da sala de aula ou outros espaços ?</p>

                    <div class="form_row_right">
                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="excelente" checked="checked">
                            <div class="item-inner">
                                <div class="item-title">Excelente</div>
                            </div>
                        </label>

                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="satisfatorio">
                            <div class="item-inner">
                                <div class="item-title">Satisfatório</div>
                            </div>
                        </label>

                        <label class="label-radio item-content">
                            <!-- Checked by default -->
                            <input type="radio" name="questao01" value="ensinomedio">
                            <div class="item-inner">
                                <div class="item-title">Insatisfatório</div>
                            </div>
                        </label>
                    </div>
                </div>

                    <!--QUESTÃO 02-->
                    <div  class="form_row">
                        <label>2) Organização da aula (coerência)</label>
<!--                        <p>Como o professor deixa o espaço e a preparação da sala de aula ou outros espaços ?</p>-->

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="satisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao02" value="insatisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>



                    <!--QUESTÃO 03-->
                    <div  class="form_row">
                        <label>3) Interações na aula  </label>
                        <p>(participação/produção do aluno, metodologia)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="satisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao03" value="insatisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 04-->
                    <div  class="form_row">
                        <label>4) Motivação da aula </label>
                        <p>(entusiasmo professor x aluno)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="satisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao04" value="insatisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 05-->
                    <div  class="form_row">
                        <label>5) Relação aluno x professor </label>
                        <p>(vínculos estabelecidos)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="satisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao05" value="insatisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!--QUESTÃO 06-->
                    <div  class="form_row">
                        <label>6) Conteúdos </label>
                        <p>( aprofundamento, estimula a pesquisa - extrapola “contexto de mundo”)</p>

                        <div class="form_row_right">
                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="excelente" checked="checked">
                                <div class="item-inner">
                                    <div class="item-title">Excelente</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="satisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Satisfatório</div>
                                </div>
                            </label>

                            <label class="label-radio item-content">
                                <!-- Checked by default -->
                                <input type="radio" name="questao06" value="insatisfatorio">
                                <div class="item-inner">
                                    <div class="item-title">Insatisfatório</div>
                                </div>
                            </label>
                        </div>
                    </div>





                    <div class="form_row">
               <label>Parecer Observador:</label>
                <textarea name="parecer" class="form_textarea" rows="20" cols="" placeholder="Digite aqui o seu parecer"></textarea>
                </div>


                <input type="submit" name="submit" class="form_submit open-indicator" id="submit" value="Enviar" />
                </form>
                </div>

              
              
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>