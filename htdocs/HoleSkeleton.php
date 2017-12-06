<?php
	 define("PAGE_TITLE", 'Hole');
	 include("template/header.php");?>
	 <section class="content">
	 <main class="Hole">
         <form action="HoleSkelton.php" method="POST" name="holeForm">
            <select form="holeForm" name="holeSelect">
                <option value="hole1">Hole 1</option>
                <option value="hole2">Hole 2</option>
                <option value="hole3">Hole 3</option>
                <option value="hole4">Hole 4</option>
                <option value="hole5">Hole 5</option>
             </select>
         </form>
	    <?php
         $requested_page = $_POST['holeSelect'];
         switch($requested_page) {
             case "hole1":
                 header("Location: hole1.php");
                 break;
             case "hole2":
                 header("Location: hole2.php");
                 break;
            case "hole3":
                 header("Location: hole3.php");
                 break;
            case "hole4":
                 header("Location: hole4.php");
                 break;
            case "hole5":
                 header("Location: hole5.php");
                 break;
             default :
                 echo "No page was selected";
                 break;
         }
         ?>
	</main>
</section>
<?php include("template/footer.php");?>