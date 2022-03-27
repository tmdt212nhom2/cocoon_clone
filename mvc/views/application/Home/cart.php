<style>

    /* =========================CART PROCESS=====================*/
    .page-cart__list {
        width: 100%;
        display: none;
    }

    .product__header {
        display: flex;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        padding: 0 20px;
        color: #eeeeee;
        font-family: "Open Sans";
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        letter-spacing: normal;
        text-transform: none;
        transition: 0.5s;

        -ms-flex-pack: distribute;
        justify-content: space-around;
        width: 100%;
        border-bottom: 4px solid lightgray;
        padding-bottom: 5px;
    }

    .product__title, .product__price, .product__quantity, .product__total, .product__img{
        text-align: center;
        justify-content: center;
        align-items: center;
        margin: 0 0;
        display: flex;
        width: 25%;
        font-family: "Open Sans";

    }

    .product__img {
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .product__quantity {
        font-style: normal;
    }

    .product {
        height: max-content;
        width: 100%;
        display: flex;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        padding: 0 20px;
        color: #eeeeee;
        font-family: "Open Sans";
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        letter-spacing: normal;
        text-transform: none;
        transition: 0.5s;

        -ms-flex-pack: distribute;
        justify-content: space-around;
        width: 100%;
        border-bottom: 1px solid lightgray;
    }

    .product__close {
        margin-right: -90px;
        margin-left: 70px;
    }
</style>

<div class="page-wrapper">
    <?php
    require_once "./mvc/views/" . $data["header"] . ".php";
    ?>
    <main class="page-main">
    <div class="page-content">
      <div class="uk-margin-large-top uk-container uk-container-small">
        <div class="page-cart__list">
          <div class="product__header">
            <h5 class="product__title">NAME</h5>
            <h5 class="product__price">PRICE</h5>
            <h5 class="product__quantity">QUANTITY</h5>
            <h5 class="product__total">TOTAL</h5>
          </div>
        </div>
        <img class="page-cart__img" src="../../../assignment/public/assets/img/pages/cart/img-cart.png" alt="">

      <div class="page-cart__box">
        <div class="uk-grid uk-grid-medium uk-width-1-1 uk-flex-left slotname" data-uk-grid style="position: absolute; margin-left: 2%;">
          <div class="">
            <input class="uk-input " type="text" placeholder="Your Name On Slot (*)" value="" style="margin-top: 26px;" required>
            <input class="uk-input" type="text" placeholder="Your email" value="" style="margin-top: 5px;">
            <input class="uk-input" type="text" placeholder="Your phone" value="" style="margin-top: 5px;">
            <input class="uk-input" type="text" placeholder="Your address" value="" style="margin-top: 5px;">

          </div>
        </div>
        <div class="page-cart__title">
          Your cart is currently empty.
        </div>
        <div><br><br></div>
        <div><br><br></div>
        <div><br><br></div>
        <div><br><br></div>
        <div><br><br></div>
        <div><br><br></div>

        <div>
  <a id="page-cart__control-btn" class="uk-button" href="#">RETURN TO SHOP</a>

</div>
      </div>

      </div>
    </div>
  </main>

    <?php
    require_once "./mvc/views/" . $data["footer"] . ".php";
    ?>
</div>


<script type="text/javascript">

    let foodTag = new Map([
        ["Bún thịt nướng", "pho_bo"]
    ]);

    let selectedItem = {
        img_src: "",
        name: "",
        tag: "",                            //
        price: 0,
        quantity: 0
    }



    function AddToCart(){
        let productNumber = localStorage.getItem('productNumber');
        productNumber = parseInt(productNumber);

        selectedItem.name = document.getElementsByClassName('product-full-card__title')[0].innerHTML;
        selectedItem.price = parseFloat((document.getElementById('price-value').innerHTML).substring(1));
        selectedItem.quantity = parseInt(document.getElementById('counter-value').value);
        selectedItem.tag = foodTag.get(selectedItem.name);
        img = document.getElementById("product-picture");                                                   // img to data url
        var imgCanvas = document.createElement("canvas"),
            imgContext = imgCanvas.getContext("2d");
        imgCanvas.width = img.width;
        imgCanvas.height = img.height;
        imgContext.drawImage(img, 0, 0, img.width, img.height);
        var imgAsDataURL = imgCanvas.toDataURL("");

        selectedItem.img_src = imgAsDataURL;                                                                // store image to selectedItem

        console.log(selectedItem);

        let productItem = localStorage.getItem('productItem');
        productItem = JSON.parse(productItem);
        if (productItem != null){
            if (productItem[selectedItem.tag] === undefined){
                productItem = {
                    ...productItem,
                    [selectedItem.tag] : selectedItem
                }
                localStorage.setItem('productNumber', productNumber + 1);
            }
            else {
                productItem[selectedItem.tag].quantity += selectedItem.quantity;
            }
        }
        else {
            productItem = {
                [selectedItem.tag] : selectedItem
            };
            localStorage.setItem('productNumber', 1);
        }
        localStorage.setItem('productItem', JSON.stringify(productItem));

        alert("Order Received");
    }


    /*=================CART PAGE ================*/
    function MinusBtn(tag){
        let productItem = localStorage.getItem('productItem');
        productItem = JSON.parse(productItem);
        productItem[tag].quantity--;
        localStorage.setItem('productItem', JSON.stringify(productItem));
        if (productItem[tag].quantity === 0){
            CloseBtn(tag);
        }
        else DisplayCart();
    }

    function PlusBtn(tag){
        let productItem = localStorage.getItem('productItem');
        productItem = JSON.parse(productItem);
        productItem[tag].quantity++;
        localStorage.setItem('productItem', JSON.stringify(productItem));
        DisplayCart();
    }

    function CloseBtn(tag){
        let product_name = document.getElementsByClassName('product__' + tag)[0];
        product_name.remove();

        let productItem = localStorage.getItem('productItem');
        productItem = JSON.parse(productItem);

        delete productItem[tag];                                                // delete item

        localStorage.setItem('productItem', JSON.stringify(productItem));

        let productNumber = localStorage.getItem('productNumber');              // update total number of product
        productNumber = parseInt(productNumber);
        localStorage.setItem('productNumber', productNumber - 1);
        if (productNumber-1 === 0){
            console.log('x');
            ChangeUI();
        }
        else DisplayCart();
    }

    function DisplayCart(){
        let productItem = localStorage.getItem('productItem');
        productItem = JSON.parse(productItem);
        let container = document.getElementsByClassName('page-cart__list')[0];
        let total = 0;

        Object.values(productItem).map(item => {
            let myProduct = document.getElementsByClassName('product__' + item.tag)[0];
            if (myProduct === undefined){
                container.innerHTML += ''
                    + '<div class="product product__' + item.tag + '">'
                    + '<h5 class="product__title">' + '<img class="product__img" src="' + item.img_src + '">' + item.name + '</h5>'
                    + '<h5 class="product__price">' + item.price + '</h5>'
                    + '<h5 class="product__quantity">' + '<span class="counter" style = "font-style: normal;"><span class="minus" onclick="MinusBtn(\'' + item.tag + '\')">-</span><input type="text" value="' + item.quantity + '" /><span onclick="PlusBtn(\'' + item.tag + '\')" class="plus">+</span></span>' + '</h5>'
                    + '<h5 class="product__total">'+ item.price * item.quantity + '<a onclick="CloseBtn(\'' + item.tag + '\')" class = "product__close"> <img src="https://img.icons8.com/ios-glyphs/30/ffffff/macos-close.png"/> </a>' + '</h5>'
                    + '</div>';
            }
            else {
                let childrens = document.getElementsByClassName('product__' + item.tag)[0].childNodes;
                childrens[2].innerHTML = '<span class="counter" style = "font-style: normal;"><span class="minus" onclick="MinusBtn(\'' + item.tag + '\')">-</span><input type="text" value="' + item.quantity + '" /><span onclick="PlusBtn(\'' + item.tag + '\')" class="plus">+</span></span>';
                childrens[3].innerHTML = item.price * item.quantity + '<a onclick="CloseBtn(\'' + item.tag + '\')" class = "product__close"> <img src="https://img.icons8.com/ios-glyphs/30/ffffff/macos-close.png"/> </a>';
            }

            total += parseFloat(item.price * item.quantity);
        });

        var totalEle = document.getElementsByClassName('page-cart__title')[0];
        totalEle.innerHTML = 'Total:  ' + total;
    }

    function ChangeUI(){
        let productNumber = localStorage.getItem('productNumber');
        productNumber = parseInt(productNumber);

        if (productNumber > 0){
            var btn = document.getElementById('page-cart__control-btn');
            btn.href = '#';
            btn.innerHTML = 'PAYMENT';
            document.getElementsByClassName('page-cart__img')[0].style.display = 'none';
            var total = document.getElementsByClassName('page-cart__title')[0];
            total.style.textAlign = 'right';
            total.style.marginRight = '50px';
            document.getElementsByClassName('page-cart__list')[0].style.display = 'block';
            DisplayCart();
        }
        else {
            var btn = document.getElementById('page-cart__control-btn');
            btn.href = '<%= pages_path %>';
            btn.innerHTML = 'RETURN TO SHOP';
            document.getElementsByClassName('page-cart__img')[0].style.display = 'block';
            var total = document.getElementsByClassName('page-cart__title')[0];
            total.innerHTML = 'Your cart is currently empty.';
            total.style.textAlign = 'center';
            total.style.marginRight = '0px';
            document.getElementsByClassName('page-cart__list')[0].style.display = 'none';
            var slotName = document.getElementsByClassName('slotname');
            slotName[0].style.display = 'none';
            slotName[1].style.display = 'none';
        }
    }

    ChangeUI();
</script>