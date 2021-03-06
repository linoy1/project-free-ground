<?php 
    include "db.php";
    include "config.php";
	$query  = "SELECT * FROM tbl_grounds_215";
    $result = mysqli_query($connection , $query);
?>

<!DOCTYPE html>
<html dir="rtl" lang="he">

<head>
	<?php include "includes/in_header.php"; ?>
	<script src="js/find_ground.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

</head>

<body>
<?php include "includes/header.php"; ?>

    <div id="wrapper">
        <main>
            <h2 id="headline"> חיפוש מגרש </h2>
            <div id="myBtnContainer">
                <!-- material-icons md-inactive md-28 -->
                <button class="btn active bold" onclick="filterSelection('all')">הכל</button>
                <button class="btn md-inactive material-icons md-28 " onclick="filterSelection('soccer')">sports_soccer</button>
                <button class="btn md-inactive material-icons md-28 " onclick="filterSelection('basketball')">sports_basketball</button>
                <button class="btn md-inactive material-icons md-28 " onclick="filterSelection('tennis')">sports_tennis</button>
                <button class="btn md-inactive material-icons md-28 " onclick="filterSelection('fitness')">fitness_center</button>
            </div>
            <section class="groundsList">
				<?php while($row = mysqli_fetch_assoc($result)){ ?>
					<div class="filterDiv <?php if($row['football']){ echo 'soccer'; } if($row['basketball']){ echo 'basketball'; } if($row['tennis']){ echo 'tennis'; } if($row['gym']){ echo 'fitness'; } ?>">
						<a href="ground.php?id=<?php echo $row['id'] ?>">
							<h4><?php echo $row['name'] ?></h4>
							<h6><?php echo $row['address'].', '.$row['city']; ?></h6>
							<span id="icons">
								<?php if($row['football']){ ?>
								<span class="material-icons md-48 sm-24">sports_soccer</span>
								<?php } if($row['basketball']){ ?>
								<span class="material-icons md-48 sm-24">sports_basketball</span>
								<?php } if($row['tennis']){ ?>
								<span class="material-icons md-48 sm-24">sports_tennis</span>
								<?php } if($row['gym']){ ?>
								<span class="material-icons md-48 sm-24">fitness_center</span>
								<?php } ?>
							</span>
						</a>
					</div>
				<?php } ?>
            </section>
        </main>
    </div>
    <?php include "includes/footer.php"; ?>
</body>

</html>