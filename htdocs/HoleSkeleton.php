<?php
    define("PAGE_TITLE", 'Hole');
    require("db_credentials.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
	 include("template/header.php");
        if(isset($_POST['hole'])){
            switch($_POST['hole']){
                case 1:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='1'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 2:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='2'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 3:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='3'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 4:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='4'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 5:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='5'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 6:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='6'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 7:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='7'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 8:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='8'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 9:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='9'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 10:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='10'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 11:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='11'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 12:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='12'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 13:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='13'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 14:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='14'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 15:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='15'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 16:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='16'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 17:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='17'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
                case 18:
                    $results = mysqli_query($conn,"SELECT * FROM `holes` WHERE id='18'");
                    $row = mysqli_fetch_array($results);
                    buildTable($row);
                    break;
            }
        }
    function buildTable($row){
        ?>
        <article>
			<p style="display:flex;justify-content:center;">
				
				<img src="img/Golf Images/hole<?php echo $row['id'];?>.jpg"> <!--HOLE IMAGE GOES HERE-->
				<table style="width: 25%; margin-left: 10%;">
					<tbody>
						<th align="center" valign="top" colspan="2">Hole <?php echo $row['id'];?></th>
						<tr>
							<td>Par</td>
							<td><?php echo $row['par'];?></td>
						</tr>
						<tr>
							<td>Tournament</td>
							<td><?php echo $row['tournament'];?></td>
						</tr>
						<tr>
							<td>Back</td>
							<td><?php echo $row['back'];?></td>
						</tr>
						<tr>
							<td>Middle</td>
							<td><?php echo $row['middle'];?></td>
						</tr>
						<tr>
							<td>Intermediate</td>
							<td><?php echo $row['intermediate'];?></td>
						</tr>
						<tr>
							<td>Forward</td>
							<td><?php echo $row['forward'];?></td>
						</tr>
					</tbody>
				</table>
			</p>
	      	<p><?php echo $row['description'];?></p>
<?php
    }
    
?>
	 <section class="content">
	 <main class="Hole">
         <form method="post" enctype="multipart/form-data">
             <select name="hole" onchange="this.form.submit()">
                 <option value="">Pick hole...</option>
                 <option value="1">Hole 1</option>
                 <option value="2">Hole 2</option>
                 <option value="3">Hole 3</option>
                 <option value="4">Hole 4</option>
                 <option value="5">Hole 5</option>
                 <option value="6">Hole 6</option>
                 <option value="7">Hole 7</option>
                 <option value="8">Hole 8</option>
                 <option value="9">Hole 9</option>
                 <option value="10">Hole 10</option>
                 <option value="11">Hole 11</option>
                 <option value="12">Hole 12</option>
                 <option value="13">Hole 13</option>
                 <option value="14">Hole 14</option>
                 <option value="15">Hole 15</option>
                 <option value="16">Hole 16</option>
                 <option value="17">Hole 17</option>
                 <option value="18">Hole 18</option>
             </select>
         </form>
	</main>
</section>
<?php include("template/footer.php");?>