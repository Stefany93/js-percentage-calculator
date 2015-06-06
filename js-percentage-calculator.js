/*
    Calculates the price based on the percent we want to discount it from.
    I.e. we have a book that costs 50.00$. We put 50 in the place of *price*
    and we put 10 in the place of *percent*
*/
function percent_discount(percent, price)
{
    percent = "0."+percent;
    var discounted_amount = (price * percent);
    var total_price_with_discount = price - discounted_amount;
    return total_price_with_discount;
}
/*
    When the website loads, fetch the fields where we want to display the calculations 
    and do the estimation.
*/
window.onload = function()
{
    // Fetch the fields...
    var offers_discount = document.getElementById("offers_discount"); // Fetch the percent we want to discount from the denoted input field.
    var offers_price = document.getElementById("offers_price"); // Original price
    var offers_end_price = document.getElementById("offers_end_price"); // Final price *with* discount
    var sum_discounted = document.getElementById("sum_discounted"); // Sum discounted. I.e. it will show 5$ if we discounted a 50$ book with 10%.
    // Calculate the final price and the sum discounted as we type the original price
    offers_price.onkeyup = function()
    {
        var end_price = percent_discount(offers_discount.value, offers_price.value); // Calctute end price
        offers_end_price.value = end_price.toFixed(2); // Display end price in the denoted field
        var money_discounted = (offers_price.value - end_price); // Calculate the sum of the discounted money
        sum_discounted.value = money_discounted.toFixed(2); // Display the sum of the discounted money
    }
}