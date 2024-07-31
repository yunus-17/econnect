document.addEventListener('DOMContentLoaded', function() {
    const supplierForm = document.getElementById('supplier-form');

    if (supplierForm) {
        supplierForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const productName = document.getElementById('product-name').value;
            const productPrice = document.getElementById('product-price').value;
            const productDescription = document.getElementById('product-description').value;
            const productImage = document.getElementById('product-image').files[0];
            const phoneNumber = document.getElementById('phone-number').value;
            const email = document.getElementById('email').value;

            const reader = new FileReader();
            reader.onloadend = function() {
                const products = JSON.parse(localStorage.getItem('products')) || [];
                const product = {
                    name: productName,
                    price: productPrice,
                    description: productDescription,
                    image: reader.result,
                    phone: phoneNumber,
                    email: email
                };
                products.push(product);
                localStorage.setItem('products', JSON.stringify(products));
                alert('Product added successfully!');
                supplierForm.reset();
            }
            reader.readAsDataURL(productImage);
        });
    }
});
