<?php
	 define("PAGE_TITLE", 'Hole');
	 include("template/header.php");
        if(isset($_POST['hole'])){
            switch($_POST['hole']){
                case 1:
                    include("Hole1.php");
                    break;
                case 2:
                    include("Hole2.php");
                    break;
                case 3:
                    include("Hole3.php");
                    break;
                case 4:
                    include("Hole4.php");
                    break;
                case 5:
                    include("Hole5.php");
                    break;
                case 6:
                    include("Hole6.php");
                    break;
                case 7:
                    include("Hole7.php");
                    break;
                case 8:
                    include("Hole8.php");
                    break;
                case 9:
                    include("Hole9.php");
                    break;
                case 10:
                    include("Hole10.php");
                    break;
                case 11:
                    include("Hole11.php");
                    break;
                case 12:
                    include("Hole12.php");
                    break;
                case 13:
                    include("Hole13.php");
                    break;
                case 14:
                    include("Hole14.php");
                    break;
                case 15:
                    include("Hole15.php");
                    break;
                case 16:
                    include("Hole16.php");
                    break;
                case 17:
                    include("Hole17.php");
                    break;
                case 18:
                    include("Hole18.php");
                    break;
            }
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