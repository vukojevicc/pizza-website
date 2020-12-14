<?php include "social.php"; ?>
<footer>
            <div class="container">
                <p>&copy; All rights reserved. <a href="https://github.com/vukojevicc/">Aleksandar Vukojević</a></p>
                <?php if (!empty($social)): ?>
                    <nav class="social">
                        <?php foreach ($social as $value): ?>
                            <a href="<?php echo $value['link']; ?>" class="<?php echo 'fa ' . $value['icon']; ?>" target="_blank"></a>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>

            </div>
</footer>
        
        
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/owl.carousel.js" type="text/javascript"></script>
        <script src="./js/main.js" type="text/javascript"></script>
        
    </body>
</html>
