<div class="container">
    <div class="row row-cards row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produtos excluídos</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-center text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Descrição</th>
                                <th>Valor unitário</th>
                                <th>Estoque</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($all as $alls) : ?>
                                <tr>
                                    <td><span class="text-muted"><?php echo $alls["id"]; ?></span></td>
                                    <td><?php echo $alls["description"]; ?></td>
                                    <td>
                                        R$ <?php echo number_format($alls["unitary_value"], 2, ',', '.'); ?>
                                    </td>
                                    <td>
                                        <?php echo $alls["stock"]; ?>
                                    </td>
                                    <td>
                                        <a class="icon" href="<?php echo BASE_URL; ?>products/excluded/<?php echo $alls["id"]; ?>/0">
                                            <i class="fe fe-refresh-ccw"></i>
                                        </a>
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