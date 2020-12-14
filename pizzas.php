<?php
    include "partials/pizzas.php";
    include "partials/header.php";
    ?>
    <main>
        <div class="container">
            <section class="pizzas">
                <?php foreach($pizzas as $key=>$pizza): ?>
                <article class="pizza-item">
                    <a href="/single-pizza.php?id=<?php echo $key; ?>">
                        <img src="./img/pizzas/<?php echo $pizza['image']; ?>">
                    </a>
                    <span class="favorite fa <?php echo ($pizza['favorite'] == false) ? 'fa-heart-o':'fa-heart' ?>"></span>
                    <div class="pizza-item-info">
                        <h3 class="pizza-item-title"><?php echo $pizza['name']; ?></h3>
                        <div class="pizza-item-info-detail">
                            <p>
                                <span class="icon fa fa-clock-o"></span>
                                <span><?php echo $pizza['preparationTime'] . " min"; ?></span>
                            </p>
                            <p>
                                <span class="icon fa fa-star"></span>
                                <span><?php echo $pizza['rating']; ?></span>
                            </p>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
<?php
    include "partials/footer.php";
