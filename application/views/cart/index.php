Total Items: <?php echo $this->cart->total_items(); ?>

<table cellpadding="6" cellspacing="1" style="width:80%" align="center" border="0">

<tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
        <th>Delete</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($cart_content as $items): ?>

        <?php echo form_hidden('rowid', $items['rowid']); ?>

        <tr>
                <td>
                <?php echo form_open('cart/update', ['method' => 'post']); ?>
                <input type="text" name="qty" size="3" value="<?php echo $items['qty']; ?>">
                <input type="hidden" name="rowId" value="<?php echo $items['rowid']; ?>">
                <button class="btn btn-info" type="submit">Update</button>
                <?php echo form_close(); ?>
                </td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['subtotal']); ?></td>
                <td>
                        <?php echo form_open('cart/remove'); ?>
                        <input type="hidden" name="rowId" value="<?php echo $items['rowid']; ?>">
                        <button class="btn btn-danger" type="submit">Remove</button>
                        <?php echo form_close(); ?>
                </td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right"><?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>