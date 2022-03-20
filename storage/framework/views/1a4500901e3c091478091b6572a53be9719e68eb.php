<div class="header-top-area">
    <div class="container">
        <div class="header-top">
            <div class="info">
                <ul>
                    <?php 
                        $timezone = 'Asia/Dhaka';
                        date_default_timezone_set($timezone);
                    ?>
                    <li><span><?php echo e(date('h:i A')); ?> - <?php echo e(date('d M Y')); ?></span></li>

                    <?php if(auth()->guard()->guest()): ?>
                        <li><a href="<?php echo e(route('register')); ?>"><i class="fas fa-user-plus"></i> Register</a></li>
                        <li><a href="<?php echo e(route('login')); ?>"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>
                        <?php else: ?>
                        <li><a href="<?php echo e(route('profile')); ?>"><i class="fas fa-user-alt"></i> <?php echo e(auth()->user()->name); ?></a></li>
                        <li><a href="<?php echo e(route('login')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();"><i class="fas fa-sign-in-alt"></i> Logout</a></li>
                        <form id="logout-form-front" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php endif; ?>

                </ul>
            </div>

            <?php if(isset($newstickers) && count($newstickers) > 0): ?> 
                <div class="breaking-news-ticker" id="breakingnewsticker">
                    <div class="bn-label">Breaking News</div>
                    <div class="bn-news">
                        <ul>
                            <?php $__currentLoopData = $newstickers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('page.news',$news->slug)); ?>"><?php echo e(++$key); ?>. <?php echo e($news->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="bn-controls">
                        <button><span class="bn-arrow bn-prev"></span></button>
                        <button><span class="bn-action"></span></button>
                        <button><span class="bn-arrow bn-next"></span></button>
                    </div>
                </div>
            <?php endif; ?>

            <div class="socials">
                <ul>
                    <?php if(isset($headersettings) && $headersettings['facebook']): ?>
                        <li><a href="<?php echo e($headersettings['facebook']); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <?php endif; ?>
                    <?php if(isset($headersettings) && $headersettings['twitter']): ?>
                        <li><a href="<?php echo e($headersettings['twitter']); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    <?php endif; ?>
                    <?php if(isset($headersettings) && $headersettings['linkedin']): ?>
                        <li><a href="<?php echo e($headersettings['linkedin']); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <?php endif; ?>
                    <?php if(isset($headersettings) && $headersettings['youtube']): ?>
                        <li><a href="<?php echo e($headersettings['youtube']); ?>" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                    <?php endif; ?>
                    <?php if(isset($headersettings) && $headersettings['vimeo']): ?>
                        <li><a href="<?php echo e($headersettings['vimeo']); ?>" target="_blank"><i class="fab fa-vimeo-square"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="header-logo">
        <div class="logo">
            <a href="<?php echo e(route('home')); ?>">
                <?php if(isset($headersettings) && $headersettings['site_logo']): ?>
                    <img src="<?php echo e(asset('images/'.$headersettings['site_logo'])); ?>" alt="Logo">
                <?php elseif(isset($headersettings) && $headersettings['site_name']): ?>
                    <?php echo e($headersettings['site_name']); ?>

                <?php else: ?>
                    NEWS PORTAL
                <?php endif; ?>
            </a>
        </div>
        <div class="ads">
            <?php $__currentLoopData = $headerads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(request()->is('/') && $item->type == 'home'): ?>
                    <img src="<?php echo e(asset('images/advertisements/'.$item->header_top)); ?>" alt="Ads" class="width-100">
                <?php elseif($item->type == 'category'): ?>
                    <?php if(request()->path() == 'page/category/'.$item->slug): ?>
                        <img src="<?php echo e(asset('images/advertisements/'.$item->header_top)); ?>" alt="Ads" class="width-100">
                    <?php endif; ?>
                <?php endif; ?>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>