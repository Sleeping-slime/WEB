<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="styles/style.css" rel="stylesheet" type="text/css">
		<title>WEB</title>
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
				<h4>
					<?php
						if(isset($_GET['tag']) == null){
							printf("시공의 폭풍은 정말 최고야!<br>");
							printf('<iframe width="560" height="315" src="https://www.youtube.com/embed/WyIVwqLTOHE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
						}
						else{
							printf($_GET['tag']);
							printf(" 태그 게시판<br>");
						}
					?>
				</h4>
			</div>
			<div class="side">
				<h2 style="text-align:center;">list</h2>
				<ul>
					<?php
						$main_tag_list = scandir('./main_tag');
						$i = 0;
						while($i < count($main_tag_list)){
								if($main_tag_list[$i] !='.' and $main_tag_list[$i] != '..'){
									printf("<li><a href=\"main_tag/$main_tag_list[$i]\">$main_tag_list[$i]</a></li>\n");
							}
							$i+=1;
						}
					?>
					<li><a href="AnonymousThread.php">익명 스레드</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>