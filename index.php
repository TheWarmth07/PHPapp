<title>Loan Application</title>
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Barlow+Semi+Condensed|Dancing+Script|Dosis|Indie+Flower|Lobster|Montserrat|Roboto|Spectral+SC|Tangerine" rel="stylesheet">
<link rel="stylesheet" href="main.css">
<script src="main.js"></script>
</head>

<body>
	<h1>Create A Budget</h1>
	<p>Submit your annual income and monthly expenses</p>
	<form action="main.php" method="post">
		<table>
			<tr>
				<td>Annual Income:</td>
				<td><input name="income" type="number" class="info" value="60000" placeholder="$$$" required></td>
			</tr>
			<tr>
				<td>Monthly Expenses</td>
			</tr>
			<tr>
				<td>Rent:</td>
				<td><input name="rent" type="number" class="exp" value="0" placeholder="$$$" required></td>
			<tr>
				<td>Food:</td>
				<td><input name="food" type="number" class="exp" value="0" placeholder="$$$" required></td>
			</tr>
				<td>Travel:</td>
				<td><input name="travel" type="number" class="exp" value="0" placeholder="$$$" required></td>
			</tr>
				<td>Business:</td>
				<td><input name="business" type="number" class="exp" value="0" placeholder="$$$" required></td>
			</tr>
			<tr>			
				<td>
					<input type="submit"></input>
				</td>
			</tr>
		</table>
	</form>
</body>

</html>