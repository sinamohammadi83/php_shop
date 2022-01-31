<div class="row">
    <div class="container">
        <div class="col-sm-12" >
            <?php if ($order->payment_status=='OK'): ?>
                <div class=" bg-success" style="padding: 20px">پرداخت با موفقیت انجام شد.</div>
            <?php else: ?>
                <div class=" bg-danger" style="padding: 20px">پرداخت نا موفق بود.</div>
            <?php endif; ?>
        </div>
    </div>
</div>