<div class="ads-left" style="top:<?php echo $top; ?>">
    <div class="ads-margin ads-margin-left">
        <?php if ($enable_ads) : ?>
            <div class="ads-title">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5152482106464455"
     crossorigin="anonymous"></script>
<!-- responsive 6 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5152482106464455"
     data-ad-slot="1162483012"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
        <?php endif; ?>
        <div class="ads-content">
            <?php if ($enable_ads) {
                include 'ads/left.php';
            } ?>
        </div>
    </div>
</div>