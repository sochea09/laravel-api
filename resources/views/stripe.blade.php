<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" method="POST">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{Config::get("stripe.publishable_key")}}"
        data-amount="2000"
        data-name="Demo Site"
        data-description="2 widgets ($20.00)"
        data-image="/128x128.png">
      </script>
    </form>
</body>
</html>