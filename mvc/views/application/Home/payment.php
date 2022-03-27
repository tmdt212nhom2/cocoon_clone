<?php
  if(!isset($_SESSION["id"])){
    $_SESSION["payment"] = "payment";
    echo '<script type = "text/javascript">
    window.location.href = "http://localhost/assignment/User/sign_in"</script>';
  }
?>

<style>
    .paypal{
        display: flex;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        width: 500px;
        border-radious:20px;
    }
    
    .user-id{
      display: none;
    }
    .cod{
      display: flex;
      padding: 20px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        align-items: center;
        width:500px;
        border-radious:20px;  
        font-size:24px;
    }
</style>

<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
    <main class = "page-main">
      <div class="user-id">
        <?php
        echo $_SESSION["id"];
        ?>
      </div>
        <div class = "page-content">
            <div id = "paypal-button" class = "uk-button-link paypal">
            </div>
            <a class="uk-button cod" href="#" id="cod-payment" onclick="getOrder()">COD</a>
        </div>
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>  
</div>

<script src="https://www.paypal.com/sdk/js?client-id=Aa74v1mrh1qryJE6Bo9asTWMjJ3M8AIDHQAY-1ols8ZslTGWIRCU2s6xTcw2puhr6QYurpjtUjp-LoAh&currency=USD&disable-funding=credit,card">
</script>

<script>
    var paypal_price = <?php echo round($data["price"]/23000)+1?>;
    var name = localStorage.getItem("name");
      var email = localStorage.getItem("email");
      var price = <?php echo $data["price"]?>;
      var phone = localStorage.getItem("phone");
      var address = localStorage.getItem("address");
      const datetime = new Date().toJSON().slice(0, 19).replace('T', ' ');
      const orderID = Math.floor(Math.random() * 100000000);
      let userID = JSON.parse(document.getElementsByClassName('user-id')[0].innerHTML); 

    function getOrder(){

      var btn = document.getElementById('cod-payment');
      btn.href = 'http://localhost/assignment/Home/test/'+orderID+"/" +userID+"/" +datetime+"/" +price+"/" +name+"/"+email+"/" +phone+"/"+address;

      // let productItem = localStorage.getItem('productItem');
      // productItem = JSON.parse(productItem);
      // var keys = Object.keys(productItem);
      // for (var key of keys.values()){
      //   console.log(productItem[key].tag, productItem[key].quantity);
      // }
    }

    paypal.Buttons({
        style:{
            color: 'blue',
        },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: paypal_price 
              }
            }]
          });
        },
        onApprove: function (data, actions){
            return actions.order.capture().then(function(orderData){
                var transaction = orderData.purchase_units[0].payments.captures[0];
                window.location.href = 'http://localhost/assignment/Home/test/'+orderID+"/" +userID+"/" +datetime+"/" +price+"/" +name+"/"+email+"/" +phone+"/"+address;
            });
        },

    }).render('#paypal-button');
</script>