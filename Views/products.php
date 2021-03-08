<div class="container">
    <div class="row row-cards row-deck">
        <div class="col-12">
            <?php if (!empty($_SESSION['message_error'])) : ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['message_error']; ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produtos</h3>
                    <div class="card-options">
                        <a href="<?php echo BASE_URL; ?>products/product_add" class="btn btn-azure">Adicionar</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-center text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Descrição</th>
                                <th>Valor unitário</th>
                                <th>Estoque</th>
                                <th>Data última venda</th>
                                <th>Total de vendas</th>
                                <th class="w-1"></th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($viewData['all'] as $all) : ?>
                                <tr>
                                    <td><span class="text-muted">1</span></td>
                                    <td><?php echo $all["description"]; ?></td>
                                    <td>
                                        <?php echo number_format($all["unitary_value"], 2, ",", "."); ?>
                                    </td>
                                    <td>
                                        <?php echo $all["stock"]; ?>
                                    </td>
                                    <td>
                                        <?php echo  $all["last_sale"]; ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($all["total_sale"], 2, ",", "."); ?>
                                    </td>
                                    <td>
                                        <a class="icon" href="<?php echo BASE_URL; ?>products/edit/<?php echo $all["id"]; ?>">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="icon" href="<?php echo BASE_URL; ?>products/excluded/<?php echo $all["id"]; ?>/1">
                                            <i class=" fe fe-trash"></i>
                                        </a>
                                    </td>
                                    </form>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>