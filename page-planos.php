<?php get_header(); ?>

 		<section class="space-default no-pad-top dashboard">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Planos</a></li>
			</ul>
 				<h2 class=" title-descr tab-bottom font-poppins">Planos</h2>
	 			<form class="mg-bottom form form-plan" method="post">
					<table class="table table-stripped" cellpadding="0" >
						<thead>
							<tr>
								<th></th>
								<th>Plano 1</th>
								<th>Plano 2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Blog com textos, imagens e vídeos</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Responsivo p/ celular, tablet, computador</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Albuns de fotos Ilimitados</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Save the date</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Contagem Regressiva/Progressiva</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Mural de recados p/ convidados</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Online por 1 ano</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Suporte e manutenção</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>História do Casal</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Proteção do site com senha</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Confirmação de presença/RSVP com alerta de e-mail</td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Local da cerimônia, festa, chá de cozinha, etc</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Lista de presentes virtual</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Contribuição p/ lua de mel</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Pagamento pelo site com cartão, boleto, transferência</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Recebimento do valor em dinheiro</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-check" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Banner com multiplas fotos</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Compartilhamento em redes sociais e whatsapp</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Atualização do modelo do site</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td>Contador de Acessos</td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
								<td class="a-center"><i class="fa fa-times" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="a-center"><input type="radio" value="1" class="radio radio-plan" name="radio-plan"></td>
								<td class="a-center"><input type="radio" value="2" checked class="radio radio-plan" name="radio-plan"></td>
							</tr>
						</tbody>
					</table>
					<div class="input-group">
						<label class="label" for="periodo">Pelo período de</label>
						<select name="periodo" id="periodo" class="input">
							<option value="3">3 meses</option>
							<option value="6">6 meses</option>
							<option value="1">1 ano</option>
						</select>
					</div>
					<p>Valor: R$<span class="span-value">00</span>,00</p>
					<input type="hidden" name="save_plan" value="1">
					<button type="submit" class="btn btn-theme float-right btn-uppercase">Salvar</button>
				</form> 		
 			</div>
 		</section>

<?php get_footer(); ?>