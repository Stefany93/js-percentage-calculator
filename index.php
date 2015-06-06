<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS percentage calculator</title>
	<link rel="stylesheet" href="style.css">
	<!-- The percentage calculator is in the JS file below. -->
	<script type="text/javascript" src="js-percentage-calculator.js"></script>
</head>
<body>
	<!-- The profuct offer discount form for adding products in the DB -->
	<form action="" method="post" id="offers_form">
		<fieldset>
			<legend><h1>Offer Details</h1></legend>
			<label>Title: <input type="text" class="long_input_field" name="pf_offers_title"></label>
			<label>Description: <br> <textarea cols="40" rows="10" name="pf_offers_desc"></textarea></label>
			<!-- % Discount. Like we may have a book that we want to put 10% discount on, so we put 10% in this box -->
			<label> &#37; Discount: <input type="text" class="short_input_field" name="pf_offers_discount_percent"  id="offers_discount">&#37;</label>
			<!-- Original price. Like the book might have costed 50.00$ before we put the discount -->
			<label>Original Price:	<input type="text" class="short_input_field" name="pf_offers_price"  id="offers_price" >&#36;</label>
			<!-- Voucher validity. It may be valid for as long as we want. Usually a couple of weeks from now -->
			<label>Voucher valid until : <input type="text" name="pf_offers_validity" placeholder="dd-mm-yyyy" ></label>
			<!-- 
				Final price of the book WITH discount. If the original price of the book was 50.00$ and say we put 10%
				as a discount. So the final price should be 45.00$
			-->
			<label>Final price with discount: <input type="text" disabled="disabled" class="short_input_field" id="offers_end_price">&#36;</label>
			<label>Sum discounted: <input type="text" disabled="disabled" class="short_input_field" id="sum_discounted">&#36;</label>
				Number of items:
			<select name="pf_offers_items" id=""><option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
			</select>
			<!-- Like <img src="images/this_awesome_book.png" /> -->
			<label>HTML element of an image: 
				<br />
				<textarea  name="pf_offers_image"></textarea>
				<br />
			<!-- Add this offer to the DB -->
			<input type="submit" value="Publish Offer" />
		</fieldset>
	</form>
</body>
</html>