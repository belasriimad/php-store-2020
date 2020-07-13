<?php
    $data = new ProductsController();
    $product = $data->getProduct();
?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="card-header bg-light">
                            <h3 class="card-title">
                                <?php
                                    echo $product->product_title;
                                ?>  
                            </h3>  
                        </div>
                        <div class="card-img-top">
                            <img width="100%" 
                            src="./public/uploads/<?php echo $product->product_image;?>" alt="" class="img-fluid rounded">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?php
                                    echo $product->short_desc;
                                ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-danger p-2">
                                <?php
                                    echo $product->product_price;
                                ?>dh
                            </span>
                             <span class="badge badge-dark p-2">
                                <strike>
                                    <?php
                                        echo $product->old_price;
                                    ?>dh
                                </strike>
                            </span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-secondary m-3 text-center">
                Qté : 
            </h3>
            <form method="post" action="<?php echo BASE_URL;?>checkout">
                <div class="form-group">
                    <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                    <input type="hidden" name="product_title" value="<?php echo $product->product_title;?>">
                    <input type="hidden" name="product_id" value="<?php echo $product->product_id;?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Ajouter au panier">
                </div>
            </form>
        </div>
    </div>
</div>