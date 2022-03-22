
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>

<main class="page-main">
      <?php 
        while ($row = mysqli_fetch_assoc($data["product"])){
      ?>

      <div class="section-first-screen">
        <div class="first-screen__bg" style="background-image: url(../../../assignment/public/assets/img/pages/contacts/bg8.jpg)"></div>
        <div class="first-screen__content">
            <div class="uk-container">
                <nav class="category-nav">
                    <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="page-catalog.html">
                                    <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/face.png" alt="face care" data-uk-svg></span><span class="nav-item__text">chăm sóc da</span></div>
                                </a>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/hair.png" alt="hair care" data-uk-svg></span><span class="nav-item__text">chăm sóc tóc</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/lips.png" alt="lips care" data-uk-svg></span><span class="nav-item__text">chăm sóc môi</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="page-catalog.html">
                                        <div class="nav-item"><span class="nav-item__icon"><img src="../../../assignment/public/assets/img/icons/menu/body.png" alt="body care" data-uk-svg></span><span class="nav-item__text">chăm sóc cơ thể</span></div>
                                    </a>
                                </li>
                        </ul>
                    </nav>
                </nav>
                <div class="first-screen__box">
                    <h2 class="first-screen__title">Product</h2>
                    <div class="first-screen__breadcrumb">  
                        <ul class="uk-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="page-catalog.html">Catalog</a></li>
                            <li> <span><?php echo $row["product_name"] ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="page-content">
        <div class="uk-margin-large-top uk-container">
          <div class="product-full-card">
            <div class="uk-grid uk-grid-large uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
              <div>
                <div class="product-full-card__gallery">
                  <div class="product-full-card__gallery-box">
                    <li class="uk-flex uk-flex-center uk-flex-middle"><img src="../../../assignment/public/assets/img/<?php echo $row["avatar"] ?>" id="product-picture" alt="skin1"></li>
                  </div>
                </div>
              </div>
              <div>
                <div class="product-full-card__content">
                  <div class="product-full-card__not-active">
                    <div class="product-full-card__title"><?php echo $row["product_name"] ?></div>
                    <div class="product-full-card__desc"><?php echo $row["intro"] ?></div>
                    <div class="product-full-card__select">
                    </div>
                  </div>
                </div>
                <div class="product-full-card__info">
                  <div class="product-full-card__price"> 
                    <span>Price: </span>
                    <span class="value" id="price-value">
                      <?php echo $row["price"] ?>đ
                    </span>
                  </div>
                  <div class="product-full-card__btns">
                    <span class="counter">
                      <span class="minus">-</span>
                      <input type="text" value="1" id="counter-value" />
                      <span class="plus">+</span>
                    </span>
                    <a class="uk-button" href="#!" onclick="AddToCart()">
                    Add to Cart
                    <span data-uk-icon="cart"></span>
                    </a>
                </div>
                </div>
                <div class="product-full-card__category">
                  <span >Category:  </span>
                  <a href="#!">
                    Skin Care
                  </a>
                  <p id = "product-tag" style="display:none">
                    <?php
                    echo $row['product_id']
                    ?>
                  </p>
                </div>
                <div class="product-full-card__share"><span>Share This:</span>
                  <ul>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="product-full-card__tabs">
              <ul class="uk-subnav" data-uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                <li><a href="#">Chi tiết sản phẩm</a></li>
                <li><a href="#">Hướng dẫn sử dụng</a></li>
                <li><a href="#">Đánh giá (2)</a></li>
              </ul>
              <ul class="uk-switcher uk-margin">
                <li>
                <?php echo $row["intro"] ?>  
                </li>
                <li>
                <?php echo $row["huongdansudung"] ?>              </li>
                <li>
                  <div class="section-title">
                    <div class="uk-h2">Reviews</div>
                  </div>
                  <ul class="uk-comment-list">
                    <li>
                      <article class="uk-comment">
                        <header class="uk-comment-header">
                          <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-1.png" alt></div>
                            <div class="uk-width-expand@s">
                              <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                <h4 class="uk-comment-title uk-margin-remove">Ông A</h4><span class="uk-text-meta uk-margin-small-left">18/11/2021</span>
                              </div>
                              <div class="uk-comment-body">
                                <p>Xài tốt</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                              </div>
                            </div>
                          </div>
                        </header>
                      </article>
                      <ul>
                        <li>
                          <article class="uk-comment">
                            <header class="uk-comment-header">
                              <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                                <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-2.png" alt></div>
                                <div class="uk-width-expand@s">
                                  <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                    <h4 class="uk-comment-title uk-margin-remove">Ông B</h4><span class="uk-text-meta uk-margin-small-left">19/11/2021</span>
                                  </div>
                                  <div class="uk-comment-body">
                                    <p>?</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                                  </div>
                                </div>
                              </div>
                            </header>
                          </article>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <article class="uk-comment">
                        <header class="uk-comment-header">
                          <div class="uk-grid-small uk-grid-divider" data-uk-grid>
                            <div class="uk-width-auto@s"><img class="uk-comment-avatar" src="./../../../assignment/public/assets/img/blog/img-reviews-3.png" alt></div>
                            <div class="uk-width-expand@s">
                              <div class="uk-flex uk-flex-middle uk-margin-small-bottom">
                                <h4 class="uk-comment-title uk-margin-remove">Bà C</h4><span class="uk-text-meta uk-margin-small-left">19/11/2021</span>
                              </div>
                              <div class="uk-comment-body">
                                <p>Cũng được</p><a class="link-more" href="#!"><span data-uk-icon="arrow-right">Reply</span></a>
                              </div>
                            </div>
                          </div>
                        </header>
                      </article>
                    </li>
                  </ul>
                  <div class="block-form uk-margin-medium-top">
                    <div class="section-title">
                      <div class="uk-h2">Leave a Reply</div>
                    </div>
                    <div class="section-content">
                      <p>Your email address will not be published. Required fields are marked *</p>
                      <form action="#!">
                        <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Your Name *"></div>
                          <div><input class="uk-input uk-form-large" type="text" placeholder="Email *"></div>
                          <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="Reviews *"></textarea></div>
                          <div><button class="uk-button uk-button-large" type="submit">Post Review</button></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      
      <?php 
              }
      ?>
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
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
    selectedItem.price = parseFloat((document.getElementById('price-value').innerHTML));
    selectedItem.quantity = parseInt(document.getElementById('counter-value').value);
    // selectedItem.tag = foodTag.get(selectedItem.name);
    selectedItem.tag = JSON.parse(document.getElementById('product-tag').innerHTML);
    
    console.log(selectedItem);

    img = document.getElementById("product-picture");                                                   // img to data url
    var imgCanvas = document.createElement("canvas"),
        imgContext = imgCanvas.getContext("2d");
    imgCanvas.width = img.width;
    imgCanvas.height = img.height;
    imgContext.drawImage(img, 0, 0, img.width, img.height);
    var imgAsDataURL = imgCanvas.toDataURL("");

    selectedItem.img_src = imgAsDataURL;                                                                // store image to selectedItem

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
        btn.href = '<%= payment_index_path %>';
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