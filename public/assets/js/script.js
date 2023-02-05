"use strict";



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
 if (elem.length > 1) {
  for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
  document.body.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);



/**
 * header & back top btn active when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const showElemOnScroll = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", showElemOnScroll);



/**
 * product filter
 */

const filterBtns = document.querySelectorAll("[data-filter-btn]");
const filterBox = document.querySelector("[data-filter]");

let lastClickedFilterBtn = filterBtns[0];

const filter = function () {
  lastClickedFilterBtn.classList.remove("active");
  this.classList.add("active");
  lastClickedFilterBtn = this;

  filterBox.setAttribute("data-filter", this.dataset.filterBtn)
}

addEventOnElem(filterBtns, "click", filter);



// cart 

let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

// open cart 
cartIcon.onclick = () =>{
  cart.classList.add("active");
};
 //close cart
closeCart.onclick = () =>{
  cart.classList.remove("active");
};

// cart working js 

if (document.readyState == 'loading'){
  document.addEventListener('DOMContentLoaded', ready);
}else {
  ready();
}

// making function
function ready(){
  //remove items from cart
  var removeCartButtons = document.getElementsByClassName('cart-remove');

  for (var i = 0; i < removeCartButtons.length; i++){
    var button = removeCartButtons[i];
    button.addEventListener("click", removeCartItem);
  }
  var quantityInputs = document.getElementsByClassName('cart-quantity');
  for (var i = 0; i < quantityInputs.length; i++) {
    var input = quantityInputs[i];
    input.addEventListener("change", quantityChanged);
  }
  // Add to cart
  var addCart = document.getElementsByClassName('add-cart');
  for (var i = 0; i < addCart.length; i++) {
    var button = addCart[i];
    button.addEventListener("click", addCartClicked);
  }
  //checkout button
  document.getElementsByClassName('btn-buy')[0].addEventListener("click", buyButtonClicked);
}

// buy button 

function buyButtonClicked(){
  
  var cartContent = document.getElementsByClassName('cart-content')[0];
  while (cartContent.hasChildNodes()){
    cartContent.removeChild(cartContent.firstChild);
    alert("Awaiting Feature")
  }
  updateTotal();
}

//remove items from cart

function removeCartItem(event){
  var buttonClicked = event.target;
  buttonClicked.parentElement.remove();
  updateTotal();
}

//add To cart

function addCartClicked(event){
  var button = event.target;
  var shopProducts = button.parentElement;
  var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
  var price = shopProducts.getElementsByClassName("price")[0].innerText;
  
  var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
  addProductTocart(title, price, productImg);
  updateTotal();
}

function addProductTocart(title, price, productImg){
  var cartShopBox = document.createElement('div');
  cartShopBox.classList.add('cart-box');
  var cartItems = document.getElementsByClassName('cart-content')[0];
  var cartItemsNames = cartItems.getElementsByClassName('cart-product-title');
  for (var i = 0; i < cartItemsNames.length; i++) {
    if(cartItemsNames[i].innerText == title){
      alert("You've already added this item to Cart");
      return;
    }
  }

  var cartBoxContent = `
              <img src="${productImg}" alt="" class="cart-img">
              <div class="detail-box">
                <div class="cart-product-title">${title}</div>
                <div class="cart-price">${price}</div>
                <input type="number" value="1" class="cart-quantity">
              </div>
              <button class="cart-remove"><ion-icon name="trash-bin" ></ion-icon></button>`;
  cartShopBox.innerHTML = cartBoxContent;
  cartItems.append(cartShopBox);
  cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener('click', removeCartItem);
  cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantityChanged);


  updateTotal();
  
}







// quantity changes 
function quantityChanged(event){
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateTotal();
}

//update total

function updateTotal(){
  var cartContent = document.getElementsByClassName('cart-content')[0];
  var cartBoxes = cartContent.getElementsByClassName('cart-box');
  var total = 0;
  for (var i = 0; i < cartBoxes.length; i++){
    var cartBox = cartBoxes[i];
    var priceElement = cartBox.getElementsByClassName('cart-price')[0];
    var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
    var price = parseFloat(priceElement.innerText.replace("$", ""));
    var quantity = quantityElement.value;
    total = total + (price * quantity);
  }
    //if price contains some cents
    total = Math.round(total *100) /100;

    document.getElementsByClassName("total-price")[0].innerText = "$" + total;
  
}



// profile dropdown 
const dropdownButton = document.querySelector(".dropdown-button");
const dropdownContent = document.querySelector(".dropdown-content");

dropdownButton.addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});

window.onclick = function(event) {
  if (!event.target.matches('.dropdown-button')) {
    if (dropdownContent.classList.contains('show')) {
      dropdownContent.classList.remove('show');
    }
  }
}