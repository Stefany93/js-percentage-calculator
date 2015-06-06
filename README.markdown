# JS Percentage Calculator

JavaScript percentage calculator that calculates the percent out of a sum and returns the difference.
Also it outputs the sum that is left after the percentage subtract.  
For example, if you want to find the 50% out of 100.00$, it will output 50.00 as difference and 50.00 and the leftover sum.
## Compatibility

Tested:

* Internet Explorer 6 and upwards
* Mozilla Firefox 20 and upwards
* Google Chrome 16  and upwards

## Usage

Include `js-percentage-calculator.js` and add it to your HTML page like this:

```html
    <script type='text/javascript' src='/path/to/js-percentage-calculator.js'></script>
```

Then create a form with input fields and assign them IDs.
We shall give an example for a voucher system in an e-commerce website.

```html
<form action="" method="post" id="offers_form">
    <fieldset>
        <!-- % Discount. Like we may have a book that we want to put 10% discount on, so we put 10% in this box -->
        <label> &#37; Discount: <input type="text" class="short_input_field" name="pf_offers_discount_percent" value="10" id="offers_discount">&#37;</label>
        <!-- Original price. Like the book might have costed 50.00$ before we put the discount -->
        <label>Original Price:  <input type="text" class="short_input_field" name="pf_offers_price" value="10" id="offers_price" >&#36;</label>
        <!-- 
            Final price of the book WITH discount. If the original price of the book was 50.00$ and say we put 10%
            as a discount. So the final price should be 45.00$
        -->
        <label>Final price with discount: <input type="text" disabled="disabled" class="short_input_field" id="offers_end_price">&#36;</label>
        <label>Sum discounted: <input type="text" disabled="disabled" class="short_input_field" id="sum_discounted">&#36;</label>
        <!-- Add this offer to the DB -->
        <input type="submit" value="Publish Offer" />
    </fieldset>
</form>
```

1. ID `offers_discount` is where the user inputs the % they want to subtract from the sum.  
2. ID `offers_price` is the original sum.  
3. ID `offers_end_price` is the final price with discount  
4. ID `sum_discounted` returns how much money extactly were subtracted from the original sum.  

Make sure you add the correct IDs otherwise the script will not work. You can also alter them in the `js-percentage-calculator.js` file.

Calculations occur when the `onkeyup` event is fired, i.e. when the user starts typing in the input field. You can change this event in the JS file.

```js
    offers_price.onkeyup = function()
    {
        var end_price = percent_discount(offers_discount.value, offers_price.value); // Calctute end price
        offers_end_price.value = end_price.toFixed(2); // Display end price in the denoted field
        var money_discounted = (offers_price.value - end_price); // Calculate the sum of the discounted money
        sum_discounted.value = money_discounted.toFixed(2); // Display the sum of the discounted money
    }
```

All IDs are currently loaded when the window loads, or when the `onload` event if fired on page load. DO NOT change this event handler, unless you know what you are doing.

```js
     window.onload = function()
    {
        // Fetch the fields...
        var offers_discount = document.getElementById("offers_discount"); // Fetch the percent we want to discount from the denoted input field.
        var offers_price = document.getElementById("offers_price"); // Original price
        var offers_end_price = document.getElementById("offers_end_price"); // Final price *with* discount
        var sum_discounted = document.getElementById("sum_discounted"); // Sum discounted. I.e. it will show 5$ if we discounted a 50$ book with 10%.
    }
```

## Current Bundle

The current bundle includes an admin panel for adding products with discount vouchers that are valid until a certain period of time.
Only the HTML and JS are written, you have to write the PHP for it.
The bundle is just for example, it is not secure enough to  be used in production, unless you include a PHP back-end validation, I have included it just for demonstration and testing.

## Live Demo

[js-percentage-calculator.js Live Demo](http://dyulgerova.info/projects/js-percentage-calculator/offers_admin_panel.php)