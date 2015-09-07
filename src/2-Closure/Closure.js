/**
 * Price object
 * @param {Number} money
 * @param {String} currency
 */
function Price(money, currency)
{
    /**
     * @type {Number}
     */
    this.money = money;
    /**
     * @type {String}
     */
    this.currency = currency;

    /**
     * @return {String}
     */
    this.toString = function()
    {
        return this.money + ' ' + currency;
    }
}

/**
 * Get real product price
 * @param  {Price} productPrice
 * @return {String}
 */
function getTotalProductPrice(productPrice)
{
    /**
     * @return {Price}
     */
    var productPriceClosure = function()
    {
        var deliveryFee = new Price(3, productPrice.currency);
        var tax = new Price(productPrice.money / 10, productPrice.currency);
        var totalMoney = productPrice.money + deliveryFee.money + tax.money;
        return new Price(totalMoney, productPrice.currency);
    }

    var productPrice = productPriceClosure();
    return productPrice.toString();
}

alert(getTotalProductPrice(new Price(100, 'USD')));
