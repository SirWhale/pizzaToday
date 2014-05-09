<html>
	<head>
		<style>
			.block
			{
				background-color:red;
				width:1024px;
				height:50px;
				left: 0; right: 0;
				position: absolute;
				overflow: auto;
				margin: auto;

			}
			.top
			{
				top: 0px;
				border-bottom-left-radius: 50px;
				border-bottom-right-radius: 50px;
			}
			.bot
			{
				bottom: 0px;
				border-top-left-radius: 50px;
				border-top-right-radius: 50px;
			}
		</style>
		<?php ?>
	</head>
	<body>
		<div class="block top"></div>
		<div class="block bot"></div>
	</body>
</html>