<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="test/css">
		<title>Anonymous_Thread 0.0.200722</title>
		<style>
			html{background-color:#2E2E2E;}
			.UI{
				display:grid;
				grid-template-columns:150px 10fr;
				grid-template-rows:50px 500px;
				grid-gap:5px;
				color:#088A08
			}
			.header{
				grid-column-start:1;
				grid-column-end: 3;
			}
			.header h1{
				position: relative;
					bottom: 20px;
					left: 10px;
			}
			.side{
				grid-row-start:2;
				grid-row-end:3;
			}
			.main{
				grid-column-start:2;
				grid-row-end:3;
				padding:10px;
			}
			div{border:1px solid #088A08;}
		</style>
	</head>
	<body>
		<div class="UI">
			<div class="header" style="overflow: hidden;">
				<h1><a href="home.php">WEB_0.2.200722ver</a></h1>
			</div>
			<div class="main">
				<h3>익명_스레드</h3>
				<form action="MakeThread.php" method="post">
					<p>
						<input type="text" name="nickname" placeholder="Nickname"><br>
						<textarea name="comment"placeholder="comment"></textarea><br>
						<input type="submit">
					</p>
				</form>
				<?php
					$T_D = scandir('./Thread_date');
					$i = 0;
					while($i < count($T_D)){
						if($T_D[$i] != '.' and $T_D[$i] != '..'){
							printf("<p>$T_D[$i]</p><br>");
						}
						$i+=1;
					}
				?>
			</div>
			<div class="side">
				<h2 style="text-align:center;">익명_스레드</h2>
			</div>
		</div>
	</body>
</html>