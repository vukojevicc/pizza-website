<?php
    include "partials/aboutSections.php";
    include "partials/header.php";
?>
<main>
    <div class="container">
        <?php if (isset($aboutSections)): ?>
            <?php
            $counter = 1;
            foreach ($aboutSections as $key => $value):
                ?>
                <section class="about-section">
                    <?php if($counter % 2 != 0): ?>
                        <aside class="about-image">
                            <img src="<?php echo $value['image'] ?>" alt="Image not found">
                        </aside>
                    <?php endif; ?>
                    <article class="about-info">
                        <h2 class="section-title"><?php echo $value['title']; ?></h2>
                        <div class="about-info-data">
                            <?php echo $value['fullText']; ?>
                        </div>
                    </article>
                    <?php if($counter % 2 == 0): ?>
                        <aside class="about-image">
                            <img src="<?php echo $value['image'] ?>" alt="Image not found">
                        </aside>
                        <?php endif; ?>
                </section>
            <?php
                $counter++;
            endforeach;
            ?>
        <?php endif; ?>
    </div>
</main>
<?php
    include "partials/footer.php";
