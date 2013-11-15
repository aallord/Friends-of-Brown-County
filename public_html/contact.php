<?php
	ini_set('display_errors', '1');
	require_once('inc/header.php');
?>
	<div id="left">
		<nav id="mainMenu">
			<?php require_once('inc/mainMenu.php'); ?>
		</nav><!-- close nav#mainMenu -->
		<div id="leftContent">

		</div><!-- close div#leftContent -->
	</div><!-- close div#left -->
	<div id="main">
		<div id="mainLeft">
			<h3>Contact Friends of Brown County Veteran's Inc.</h3>
			<form id="cForm" name="cForm" action="" method="post">
				<input type="hidden" id="email" name="email" value=""/>
				<table width="100%" border="0" cellpadding="1" cellspacing="0" style="border-collapse: collapse;">
					<tr>
						<td style="width: 30%; text-align: right;"><label for="fName">First Name:</label></td>
						<td><input type="text" id="fName" name="fName" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="lName">Last Name:</label></td>
						<td><input type="text" id="lName" name="lName" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="business">Business/Organization:</label></td>
						<td><input type="text" id="business" name="business" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="add1">Address 1:</label></td>
						<td><input type="text" id="add1" name="add1" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="add2">Address 2:</label></td>
						<td><input type="text" id="add2" name="add2" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="city">City:</label></td>
						<td><input type="text" id="city" name="city" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="state">State:</label></td>
						<td><input type="text" id="state" name="state" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="zipCode">Zip:</label></td>
						<td><input type="text" id="zipCode" name="zipCode" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="pNum">Phone:</label></td>
						<td><input type="text" id="pNum" name="pNum" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="cEmail">Email:</label></td>
						<td><input type="text" id="cEmail" name="cEmail" value="" /></td>
					</tr>
					<tr>
						<td style="text-align: right;"><label for="comments">Comments:</label></td>
						<td><textarea id="comments" name="comments" cols="25" rows="6"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<input type="submit" value="Submit" />&nbsp;&nbsp;
							<input type="button" value="Clear Form" />
						</td>
					</tr>
				</table>
			</form>
		</div><!-- close div#mainLeft -->
		<div id="mainRight">

		</div><!-- close div#mainRight -->
	</div><!-- close div#main -->
<?php
	require_once('inc/footer.php');
?>