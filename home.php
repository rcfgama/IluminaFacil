<div class="home">
	<form action="processa.php" method="post">
		<p><label>Tipo do ambiente:</label><br>
		<select name="ambiente">
			<option value="1">1 - AMBIENTES COMUNS</option>
			<option value="2">2 - BANCADAS</option>
			<option value="3">3 - ÁREAS DE MENOR CIRCULAÇÃO</option>
			<option value="4">4 - HOME OFFICE</option>
			<option value="5">5 - ESCREVER, LER, TECLAR</option>
		</select></p>
		<br>
		<p><label>Comprimento do ambiente (m):</label><br>
		<input type="text" name="comprimento" placeholder="m"></p>
		<br>
		<p><label>Largura do ambiente (m):</label><br>
		<input type="text" name="largura" placeholder="m"></p>
		<br>
		<p><label>Quantidade de lâmpadas:</label><br>
		<input type="text" name="quantidade" placeholder="nº"></p>
		<br>
		<p><label>Distâcia em metros até o quadro (m):</label><br>
		<input type="text" name="distancia" placeholder="m"></p>
		<br>
		<p><label>Quantidade de tomadas:</label><br>
		<input type="text" name="tomadas" placeholder="nº"></p>
		<br>
		<p><label>Quantidade de tomadas para eletro-domésticos especiais:</label><br>
		<input type="text" name="especiais" placeholder="nº"></p>
		<br>
		<p><input type="submit" value="CALCULAR" name="submit"></p>
	</form>
</div>