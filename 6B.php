<?php
require "libno6.php";
$datab = query("SELECT users.name, group_concat(skills.name) from users,skills where users.id = skills.user_id group by user_id ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Programmer</title>    
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
	<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
      <!-- jumbotron -->
	<div class="jumbotron text-center">
		
		<h1>Data Programmer</h1>
		
	</div>
    <!-- akhir jumbotron -->
    

    <section class='data'>
        <div class="contain">
            <div class="addProgrammer">
                <input type='text' placeholder='Tambahkan User' class='tAddProgrammer'>
                <button type='submit' class='tButton'>Add</button>
            </div>

            <div class="view">
                <div class="listUserSkills">
                    <form action="6B.php" method="post" name="form1">
                        <?php $no = 1?>	
                            <?php foreach($datab as $row) :?>					
                                <span class="nameUser"><?php echo $row[0];?></span>
                                <span class="nameSkills"><?php echo $row[1]; ?></span>        		
                                <div class="addSkills">
                                    <input type='text' name='skillT' placeholder='Tambahkan skill'>
                                    <button type='submit' name='kirim'>Add</button>
                                </div>
                            <?php endforeach; ?>    
                    </form>
                    <?php
                    if (isset($_POST['kirim'])) {
                        $skillT = $_POST['skillT'];
                        echo "$skillT";
                        $conn = mysqli_connect("localhost","root","","arkademy");        
                        mysqli_query($conn," INSERT INTO skills(name) VALUES('$skillT') ");
                        // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=6B.php">';
                    }	
                    ?>
                </div>
            </div>
        </div>
    </section>




    <footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; built with Hamdan Hamdani</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- akhir footer -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>