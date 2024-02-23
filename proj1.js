let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Beautiful blue dress',
        //image: '../img/f1.jpg',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqNs3pNCWOjf_3Gbl_KaRt8Ff2aYYW0xvNtg&usqp=CAU',
        price: 700
    },
    {
        id: 2,
        name: 'Cute cadet  blue short top',
        //image: '../img/f3.jpg',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5LpNgOQGTxsZDO2udGcDGTXEv7sXfmF28Cw&usqp=CAU',
        price: 800
    },
    {
        id: 3,
        name: 'maxi blue dress',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhzeFpX-pdv60nXENzMsyJjMIPdFMIK5pChA&usqp=CAU',
        price: 1000
    },
    {
        id: 4,
        name: 'white women tshirt ',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdCMUm93kyxt79yXb0cUrTUcP4CUDEHXaNiA&usqp=CAU',
        price: 599
    },
    {
        id: 5,
        name: 'pastel green top',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv2yFsCPt4pR2o-7bqDEj82wlM_h7DDSlaUw&usqp=CAU',
        price: 700
    },
    {
        id: 6,
        name: 'cute white shirt for woman',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQycDLLYyA7M-SXBYBbNfA_S5iO1I_LITFfJA&usqp=CAU',
        price: 645
    },
    {
    id: 7,
        name: 'stylish black top',
        image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlMvsFP_cPshBpakY9094cdlBw8TMNibDW-Q&usqp=CAU',
        price: 645
    },
    {
        id: 8,
            name: 'peach maxi dress',
            image: 'data:image/jpeg;base64,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',
            price: 645
        },
        {
            id: 9,
                name: 'elegant pink dress',
                image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNiEiQDgsAcfCNGMmbvLnps24Pq-BOsaxFaA&usqp=CAU',
                price: 645
            }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        listCards[key] = products[key];
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    console.log(key, quantity);
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}