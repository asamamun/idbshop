// Display the content in a View.
<table border="1" width="100%">
    <caption>Total Items <?php echo Cart::count(); ?>, Products <?php echo count(Cart::content()); ?></caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Subtotal</th>
    </tr>
    </thead>

    <tbody>

    <?php foreach(Cart::content() as $row) :?>
    <tr>
        <td><?php echo $row->rowId; ?></td>
        <td>
            <p><strong><?php echo $row->name; ?></strong></p>
            <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
        </td>
        <td><input type="text" value="<?php echo $row->qty; ?>"></td>
        <td>$<?php echo $row->price; ?></td>
        <td>$<?php echo $row->total; ?></td>
    </tr>

    <?php endforeach;?>

    </tbody>

    <tfoot>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td>Subtotal</td>
        <td><?php echo Cart::subtotal(); ?></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td>Tax</td>
        <td><?php echo Cart::tax(); ?></td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <td>Total</td>
        <td><?php echo Cart::total(); ?></td>
    </tr>
    </tfoot>
</table>