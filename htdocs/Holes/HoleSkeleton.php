<?php
	 define("PAGE_TITLE", 'Home');
	 include("template/header.php");?>

	 <main class="Hole">
	    <h2>Hole Skeleton</h2>

	    <article>
			<p style="display:flex;justify-content:space-evenly;">
				
				<img style="max-height:100px;display:inline-block;" src="img/logo-big.png"> <!--HOLE IMAGE GOES HERE-->
				<table width="150" style="padding: 3px; border: 1px solid #000000; font-family: Century Gothic; font-size: 12pt; font-weight: bold;" border="0" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
							<td valign="top" colspan="2"><p align="center">&nbsp;Hole 1</p></td>
						</tr>
						<tr>
							<td>Par</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Tournament</td>
							<td>422</td>
						</tr>
						<tr>
							<td>Back</td>
							<td>403</td>
						</tr>
						<tr>
							<td>Middle</td>
							<td>378</td>
						</tr>
						<tr>
							<td>Intermediate</td>
							<td>353</td>
						</tr>
						<tr>
							<td>Forward</td>
							<td>321</td>
						</tr>
					</tbody>
				</table>
			</p>
	      	<p> (HOLE DESCRIPTION GOES HERE)</p>

	    </article>
	</main>

<?php include("template/footer.php");?>