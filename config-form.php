<?php $view = get_view(); ?>
<div id="html5-media-video-settings">
<h2><?php echo __('Video Settings'); ?></h2>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('video[types]', __('MIME Types')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('video[types]', $video['types'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('video[extensions]', __('Extensions')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('video[extensions]', $video['extensions'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
</div>
<div id="html5-media-audio-settings">
    <h2><?php echo __('Audio Settings'); ?></h2>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('audio[types]', __('MIME Types')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('audio[types]', $audio['types'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('audio[extensions]', __('Extensions')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('audio[extensions]', $audio['extensions'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
</div>
<div id="html5-media-text-settings">
    <h2><?php echo __('Text Settings'); ?></h2>
    <p class="explanation">
    <?php
    echo __('Text files are data like subtitles and chapter names. '
        . 'HTML5 Media will include them as tracks of audio or video files with '
        . 'the same original filename on the same item.');
    ?>
    </p>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('text[types]', __('MIME Types')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('text[types]', $text['types'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('text[extensions]', __('Extensions')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php echo $view->formTextarea('text[extensions]', $text['extensions'], array('rows' => 3, 'cols' => 50)); ?>
        </div>
    </div>
</div>
<div id="html5-media-common-settings">
    <h2><?php echo __('Common Settings'); ?></h2>
    <div class="field">
        <div class="two columns alpha">
            <?php echo $view->formLabel('common[options][preload]', __('Preload')); ?>
        </div>
        <div class="inputs five columns omega">
            <?php
            echo $view->formSelect('common[options][preload]',
                $common['options']['preload'], array(),
                array(
                    'metadata'  => __('Metadata Only'),
                    'auto'      => __('Entire Media'),
                    'none'      => __('Disabled')
                )
            );
            ?>
        </div>
    </div>
</div>
