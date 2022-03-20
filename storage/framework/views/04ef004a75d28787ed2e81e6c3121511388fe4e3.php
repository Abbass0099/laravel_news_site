<div class="footer-top-area">
    <div class="container">
        <div class="footer-top">

            <div class="footer-column">
                <h2>About Us</h2>
                <?php if(isset($headersettings) && $headersettings['about_us']): ?>
                    <?php echo $headersettings['about_us']; ?>

                <?php endif; ?>
            </div>

            <div class="footer-column">
                <h2>Categoies</h2>
                <?php $__currentLoopData = $footernewscategorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="section-item news-category-list">
                        <h3>
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <a href="<?php echo e(route('page.category',$newscategory->slug)); ?>"><?php echo e($newscategory->name); ?></a>
                            <span>(<?php echo e($newscategory->newslist_count); ?>)</span>
                        </h3>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="footer-column">
                <h2>News Subscription</h2>
                <div class="newsletter-subscription">
                    <p>Stay updated and get our latest news right into your inbox and get awesome offers.</p>
                    <form action="" method="">
                        <input type="email" name="" class="mailbox" placeholder="yourmail@example.com">
                        <input type="submit" value="Subscribe" class="submitbox">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="footer-bottom">
            <p>&copy; 2018 - All right reserved by Developer Canvas.</p>
        </div>
    </div>
</div>