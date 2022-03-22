
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
     <main class="page-main">
      <div class="section-first-screen">
        <div class="first-screen__bg" style="background-image: url(../../../assignment/public/assets/img/pages/contacts/bg9.jpg)"></div>
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
                    <h2 class="first-screen__title">Catalog</h2>
                    <div class="first-screen__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li> <span>Catalog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="section-banners">
        <div class="uk-section uk-container">
          <div class="uk-grid uk-grid-medium uk-child-width-1-2@m" data-uk-grid>
            <div>
              <div class="banner-card">
                <div class="banner-card__bg" style="background-image: url(../../../assignment/public/assets/img/blog/blog_1_anh2.jpg)"></div>
                <div class="banner-card__box">
                  <h4 class="banner-card__title">Mỹ phẩm<br> của người Việt, cho người Việt</h4><a class="banner-card__phone" href="tel:0394143031"><i class="fas fa-phone-square"></i><span>Call us 0394143031</span></a>
                </div>
              </div>
            </div>
            <div>
              <div class="banner-card">
                <div class="banner-card__bg" style="background-image: url(../../../assignment/public/assets/img/blog/blog1_anh1.jpg)"></div>
                <div class="banner-card__box">
                  <h4 class="banner-card__title">Đón đầu xu hướng <br> mỹ phẩm thế giới</h4><a class="banner-card__btn" href="page-blog-article.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="page-content">
        <div class="uk-container">
          <div data-uk-filter="target: .js-filter">
            <div class="catalog-filter-row">
              <ul class="uk-subnav">
                <li class="uk-active"data-uk-filter-control=""><a href="#">All</a></li>
                <li data-uk-filter-control="[data-tags='1']"><a href="#">Skin</a></li>
                <li data-uk-filter-control="[data-tags='2']"><a href="#">Body</a></li>
                <li data-uk-filter-control="[data-tags='3']"><a href="#">Hair</a></li>
                <li data-uk-filter-control="[data-tags='4']"><a href="#">Lips</a></li>

            </div>
            <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" data-uk-grid>
            <?php 
        while($row = mysqli_fetch_array($data["products"])){
      ?>
              <li data-tags="<?php echo $row["category_id"] ?>">
                <div class="product-item">
                  <div class="product-item__box">
                    <div class="product-item__intro">
                      <div class="product-item__not-active">
                        <div class="product-item__media">
                          <div class="uk-inline-clip uk-transition-toggle uk-light" data-uk-lightbox="data-uk-lightbox"><img src="../../../assignment/public/assets/img<?php echo $row["avatar"] ?>" alt="Skin 1" /></div>
                        </div>
                        <div class="product-item__title"><a href="http://localhost/assignment/Home/product/<?php echo $row["product_id"] ?>"><?php echo $row["product_name"] ?></a></div>
                      </div>
                    <div class="product-item__info">
                      <div class="product-item__price"> <span>Price: </span><span class="value"><?php echo $row["price"] ?></span></div>
                      <div class="product-item__addcart"> <a class="uk-button uk-button-default" href="http://localhost/assignment/Home/product/<?php echo $row["product_id"] ?>">Add to Cart<span data-uk-icon="cart"></span></a></div>
                    </div>
                  </div>
                  </div>
                </div>
              </li>
              <?php 
        }
      ?>
            </ul>
            <div class="uk-margin-medium-top uk-text-center"><button class="uk-button" type="button">Load more </button></div>
          </div>
        </div>
      </div>
    </main>

    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>

