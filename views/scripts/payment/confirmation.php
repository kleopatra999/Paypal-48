<p>
    <?php
        echo sprintf($this->translate("Your Order has been submitted. You have choosen to by with Paypal. Your order is now preparing. Your Order Number is %s"), $this->order->getOrderNumber())
    ?>
</p>