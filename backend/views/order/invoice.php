<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table>
                <th>Ship to</th>
                <tr>
                    <td>
                        <table >
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td><?= $model->name?></td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td><?= $model->address?></td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td><?= $model->phone?></td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td><?= $model->email?></td>
                                </tr>
                                <tr>
                                    <th>Order Time:</th>
                                    <td><?= $model->orderTime?></td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td><?= $model->total?></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table>
                            <th>Bill to</th>
                            <tr>
                                <th>Name:</th>
                                <td><?= $contacts->name?></td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td><?= $contacts->address?></td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td><?= $contacts->phone?></td>
                            </tr>
                            <tr>
                                <th>E-mail:</th>
                                <td><?= $contacts->email?></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm" style="margin-top: 40px;">
                <thead class="thead-light">
                    <tr>
                        <th>Product Number</th>
                        <th>Product Name</th>
                        <th>Quantiti</th>
                        <th>Unit Price</th>
                        <th>Line Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) :?>
                        <tr>
                            <td><?= $product->id?></td>
                            <td><?= $product->title?></td>
                            <td><?= $product->quantit?></td>
                            <td><?= $product->cost['price']?></td>
                            <td><?= $product->sumTotal?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>