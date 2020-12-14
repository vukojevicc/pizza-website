<?php
    include "partials/slider.php";
    include "partials/homepageAbout.php";
    include "partials/header.php";
?>
        <main>
            <div class="container">
                <?php if(!empty($slider)): ?>
                <section class="hero-section">
                    <div class="hero-slider owl-carousel">
                        <?php foreach ($slider as $value): ?>
                        <div class="hero-item">
                            <img src="<?php echo $value['image'] ?>" alt="Image failed to load">
                            <div class="caption">
                                <h2><?php echo $value['title'] ?></h2>
                                <p>
                                <?php echo $value['sliderDesc'] ?>
                                </p>
                                <a class="btn" href="<?php echo $value['link'] ?>">Read More</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                    </div><!--.hero-slider end-->
                </section><!--.hero-section end-->
                <?php endif; ?>
                <?php if(!empty($homepageAbout)): ?>
                <section class="about-section">
                    <aside class="about-image">
                        <img src="<?php echo $homepageAbout['image']; ?>" alt="Image failed to load">
                    </aside>
                    <article class="about-info">
                        <h2><?php echo $homepageAbout['title']; ?></h2>
                        <p>
                            <?php echo $homepageAbout['aboutDesc']; ?>
                        </p>
                        <a href="<?php echo $homepageAbout['link']; ?>" class="btn">Read More</a>
                    </article>
                </section>
                <?php endif; ?>
                
            </div>
        </main>
        <?php
            include "partials/footer.php";

