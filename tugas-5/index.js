document.addEventListener("DOMContentLoaded", () => {
    var items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
    ];
    const listBarang = document.getElementById('listBarang');
    const formItem = document.getElementById('formItem');
    const keywordInput = document.getElementById('keyword');
    const cartButton = document.getElementById("cart");

    let cart = []; 
    const updateCartCount = () => {
        const itemCount = cart.length;
        cartButton.innerHTML = `<i class="fas fa-shopping-cart"></i>(${itemCount})`;
    };

    const showItems = (items) => {
        listBarang.innerHTML = ''; 
        items.forEach((item, index) => {
            const [id, name, price, description, image] = item;
            const card = document.createElement('div');
            card.className = 'col-4 mt-2';
            card.innerHTML =
                `<div class="card" style="width: 18rem; height:26rem">
                    <img src="./assets/${image}" class="card-img-top" height="200px" alt="${name}">
                    <div class="card-body">
                        <h5 class="card-title">${name}</h5>
                        <p class="card-text">${description}</p>
                        <p class="card-text">Rp ${price.toLocaleString('id-ID')}</p>
                        <button class="btn btn-primary add-to-cart" id="addCart-${index}">Tambahkan ke keranjang</button>
                    </div>
                </div>`;
            listBarang.appendChild(card);
            const addToCartButton = card.querySelector(`#addCart-${index}`);
            addToCartButton.addEventListener('click', () => {
                cart.push(item); 
                updateCartCount(); 
            });
        });
    };

    showItems(items);
    formItem.addEventListener('submit', (event) => {
        event.preventDefault(); 
        const keyword = keywordInput.value.trim().toLowerCase();
        const filteredItems = items.filter(item => item[1].toLowerCase().includes(keyword));
        showItems(filteredItems);
    });
    updateCartCount();
});
