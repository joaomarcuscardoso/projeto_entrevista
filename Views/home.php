<div class="container">
    <div class="page-header">
        <h1 class="page-title">
            Home
        </h1>
    </div>
    <div class="row row-cards">
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?php echo $viewData["countProducts"]; ?></div>
                    <div class="text-muted mb-4">Produtos</div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
            <div class="card">
                <div class="card-body p-3 text-center">
                    <div class="h1 m-0"><?php echo $viewData["countSales"]; ?></div>
                    <div class="text-muted mb-4">Vendas</div>
                </div>
            </div>
        </div>
    </div>
</div>