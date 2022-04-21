form = document.querySelector('form')
user = document.querySelector('#username')
pass = document.querySelector('#password')

products = document.querySelectorAll('.product')
shipping = document.querySelectorAll('.ship')

validateUser = (email) => {
    return String(email).toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)
}
form.onsubmit = (e) => {
    let invalidProduct = false
    for (let product of products) {
        if (isNaN(parseInt(product.value))) invalidProduct = true
    }
    let shippingSelected = false
    for (let ship of shipping) {
        if(ship.checked) shippingSelected = true 
    }
    let validUser = validateUser(user.value)
    let validPassword = password.value !== ""
    console.log(shippingSelected, validUser, validPassword)
    if (!shippingSelected || !validUser || !validPassword || invalidProduct) {
        if (invalidProduct) {
            alert('Please enter a number for amount')
        } else if (!validUser) {
            alert('Please enter a valid email as username')
        } else {
            alert('Please fill out all values')
        }
        e.preventDefault()
    }
}