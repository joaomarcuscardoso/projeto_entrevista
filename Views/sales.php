<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form class="card" method="POST" action="<?php echo BASE_URL; ?>sales/add">
                <div class="card-body">
                    <h3 class="card-title">Realizar venda de um produto</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Produto</label>
                                <select name="product_id" class="form-control custom-select">
                                    <?php foreach ($info_prod as $all) : ?>
                                        <option value="<?php echo $all['id']; ?>"><?php echo $all['description']; ?> - preço: R$<?php echo number_format($all['unitary_value'], 2, ',', '.'); ?></option>

                                    <?php endforeach; ?>

                                </select>
                            </div>
                        </div>
                        <div class=" col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Quantidade</label>
                                <input type="number" name="qtd_sales" class="form-control" placeholder="Digite aqui a quantidade">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor unitário</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">

                                        <span class="input-group-text">R$ </span>
                                    </span>
                                    <input name="unitary_value" type="text" class="form-control text-right" aria-label="Valor">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor total</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </span>
                                    <input type="text" class="form-control text-right" aria-label="Valor" disabled="disabled" title="Este campo não pode ser alterado">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="form-group">
                                <div class="form-label">&nbsp;</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="change_price" value="1" checked>
                                        <span class="custom-control-label">Atualizar valor unitário do produto</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-left" style="display: flex; justify-content: space-between">
                    <div>
                        <a href="<?php echo BASE_URL; ?>produtos.html" class="btn btn-secondary">Voltar para produtos</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
</div>
<div class=" my-3 my-md-5">
    <div class="container">
        <div class="row row-cards row-deck">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Últimas vendas realizadas</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th class="w-1">#</th>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Valor unitário</th>
                                    <th>Valor total da venda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sales as $all) : ?>

                                    <tr>
                                        <td><span class="text-muted"><?php echo $all["id_product"]; ?></span></td>
                                        <td><?php echo $all["info_prod"]["description"]; ?></td>
                                        <td>
                                            <?php echo $all["qtd"]; ?>
                                        </td>
                                        <td>
                                            R$ <?php echo number_format($all["unitary_value"], 2, ",", "."); ?>
                                        </td>
                                        <td>
                                            R$ <?php echo number_format($all["tot_value"], 2, ',', '.'); ?>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>