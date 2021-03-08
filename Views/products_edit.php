<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form class="card" method="POST" action="<?php echo BASE_URL ?>products/save_edit/<?php echo $product["id"]; ?>">
                <div class=" card-body">
                    <h3 class="card-title">Editar produto - <?php echo $product["description"]; ?></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Descrição</label>
                                <input type="text" class="form-control" name="description" value="<?php echo $product["description"]; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Estoque</label>
                                <input type="number" name="stock" class="form-control" placeholder="10.." value="<?php echo $product["stock"]; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Código de barras</label>
                                <input type="number" name="code" class="form-control" placeholder="78978978978978">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                                <label class="form-label">Valor unitário</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">R$</span>
                                    </span>
                                    <input type="text" name="unitary_value" class="form-control text-right" aria-label="Valor" value="<?php echo number_format($product["unitary_value"], 2, ",", "."); ?>">
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
                        <button type="submit" class="btn btn-primary">Confirmar alteração</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>