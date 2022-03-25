<style>
    .paypal{
        display: flex;
        margin-top: 30px;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="page-wrapper">
    <?php 
      require_once "./mvc/views/".$data["header"].".php";
    ?>
    <main class = "page-main">
        <div class = "page-content">
            <div id = "paypal-button" class = "uk-button-link paypal">
            </div>
        </div>
    </main>
    <?php 
      require_once "./mvc/views/".$data["footer"].".php";
    ?>  
</div>

<script src="https://www.paypal.com/sdk/js?client-id=Aa74v1mrh1qryJE6Bo9asTWMjJ3M8AIDHQAY-1ols8ZslTGWIRCU2s6xTcw2puhr6QYurpjtUjp-LoAh&currency=USD&disable-funding=credit,card">
</script>

<script>
    paypal.Buttons({
        style:{
            color: 'blue',
            shape: 'pill'
        },
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' 
              }
            }]
          });
        },
        onApprove: function (data, actions){
            return actions.order.capture().then(function(orderData){
                var transaction = orderData.purchase_units[0].payments.captures[0];
                localStorage.clear();
                window.location.href = "http://localhost/assignment/Home/catalog";
            });
        },

    }).render('#paypal-button');
</script>