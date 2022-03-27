
<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
<main class="page-main">
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
                            <h2 class="first-screen__title">Contact Us</h2>
                            <div class="first-screen__breadcrumb">
                                <ul class="uk-breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li><span>Contact Us</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-contacts-form">
                <div class="uk-section uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-1-3@m">
                            <div class="section-title wave">
                                <h3 class="uk-h3">Thông tin liên hệ</h3>
                            </div>
                            <div class="section-content">
                                <p class="uk-text-large">Công ty TNHH Nature Story</p>
                                <p>38C - 39C, quốc lộ 1A,<br> Tân Thới Hiệp, Quận 12, Tp.HCM</p>
                                <ul class="contacts-list">
                                    <li><span>Phone: </span><a href="tel:0394143031">0394143031</a></li>
                                    <li><span>Email: </span><a href="mailto:cocoon@gmail.com">cocoon@gmail.com</a></li>
                                </ul>
                                <hr class="uk-margin">
                                <div class="block-with-phone"><img src="../../../assignment/public/assets/img/icons/delivery.svg" alt="delivery" data-uk-svg>
                                    <div> <span>Liên hệ ngay với chúng tôi</span><a href="tel:0394143031">0394143031</a></div>
                                </div>
                                <hr class="uk-margin">
                                <div class="block-with-phone"><img src="../../../assignment/public/assets/img/icons/delivery.svg" alt="delivery" data-uk-svg>
                                    <div> <b>Thời gian làm việc</b>
                                        <div>Thứ 2 - Thứ 7: 10:00 AM – 11:30 PM<br> Chủ nhật: 9:00 AM – 4:00 PM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-2-3@m">
                            <div class="section-title wave">
                                <h3 class="uk-h3">Send us a Message</h3>
                            </div>
                            <div class="section-content">
                                <form action="#!">
                                    <div class="uk-grid uk-grid-medium uk-child-width-1-2@s" data-uk-grid>
                                        <div><input class="uk-input" type="text" placeholder="Your Name"></div>
                                        <div><input class="uk-input" type="text" placeholder="Email"></div>
                                        <div><input class="uk-input" type="text" placeholder="Phone"></div>
                                        <div><input class="uk-input" type="text" placeholder="Subject"></div>
                                        <div class="uk-width-1-1"><textarea class="uk-textarea" name="message" placeholder="Message"></textarea></div>
                                        <div><input class="uk-button" type="submit" value="Send message"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15673.343070416093!2d106.63211957096952!3d10.862046249563123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1637211851170!5m2!1svi!2s" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe></div>
        </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>
  </div>

