<?php
    include "partials/pizzas.php";
    include "partials/header.php";
?>
<main>
    <div class="container">
        <?php if (!isset($_GET['id'])) {
            ?>
            <h1>Page don't exist</h1>
            <?php
        } else {
            if (array_key_exists($_GET['id'], $pizzas)) {
                $pizza = $pizzas[$_GET['id']];
                ?>
                <section class="single-pizza">
                    <aside class="pizza-image">
                        <img src='./img/pizzas/<?php echo $pizza['image']; ?>'>
                    </aside>
                    <article class="pizza-detail">
                        <h1 class="pizza-title"><?php echo $pizza['name']; ?></h1>
                        <p class="pizza-description">
                            <?php echo $pizza['description']; ?>  
                        </p>
                        <div class="price">
                            <?php foreach ($pizza['size'] as $size=>$properties): ?>
                            <p><b>Size:</b><span class="size"> <?php echo $size; ?> (<?php echo $properties['radius']; ?>cm)</span> : <b class="price"><?php echo $properties['price']; ?></b> &euro;</p>
                            <?php endforeach; ?>
                        </div>
                        <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizza['preparationTime']; ?></span> min</p>
                        <p><b>Customer rate</b>: <span class="rate"><?php echo $pizza['rating']; ?></span> <span class="fa fa-star"></span></p>
                    </article>
                </section>
            <?php } else{
                    ?>
                <h2>
                    That pizza does not exist. Sorry
                </h2>
                <a href="pizzas.php">Back to pizzas</a>
                <?php
                }
            }
            ?>
        </div>
    </main>
    <?php
    include "partials/footer.php";
    