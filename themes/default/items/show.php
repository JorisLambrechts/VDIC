<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>
<div class="breadcrumb">
        <div class="wrapper">
            <div class="breadIndicator"> U bevindt zich hier: </div>
            <ol>
                <li class="first"><span class="page"><a href="<?php echo url("");?>">Home</a></span></li> /
                <li class="last"><span class="page"><a href="<?php echo url("");?>">Nieuwsarchief</a></span></li> /
                <li class="last"><span class="page"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></li>
            </ol>   
        </div>
    </div>
</div>
<div id="content">
    <div class="gridThree">
        <div class="wrapper2">
            <div class="wrapper clearfix">
                <div class="wrapperIn">
                    <div class="content">
                        <h1 class="heading "><span><?php echo metadata('item', array('Dublin Core', 'Title')); ?></span></h1>
                        <div class="textblock">

                        <?php if($datum = metadata('item',array('Dublin Core','Date'))){
                            echo "<span class='date'>".$datum."</span>";
                        }?>
                        <?php if ($description = metadata('item', array('Dublin Core', 'Description'))): ?>
                        <br>
                        <div class="item-description">
                            <p><?php echo $description; ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (metadata('item', 'has tags')): ?>
                        <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
                            <?php echo tag_string('items'); ?></p>
                        </div>
                        <?php endif; ?>

               

                <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

                <nav>
                <ul class="item-pagination">
                   <center> 
                       <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
                       <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
                   </center>
                </ul>
                </nav>


                </div>
                        
                <div class="navAction">
                    <div class="label"><?php echo __("Deze pagina: ")?></div>
                    <ul>
                        <li class="first"><a href="#" class="page print"><?php echo __("printen")?></a></li>
                        <li><a href="#" class="page share"><?php echo __("delen")?></a></li>
                    </ul>
		</div>
            </div>
            <div class="context">
                <ul class="fotolinks">    
                <li><a href="databases.aspx?lang=NL"><img src="<?php echo img("header/databases_1.gif")?>" onmouseout="this.src='<?php echo img("header/databases_1.gif")?>'" onmouseover="this.src='<?php echo img("header/databases_2.gif")?>'"></a></li>
                <li><a href="databases.aspx?lang=NL"><img src="<?php echo img("header/monographs_1.gif")?>" onmouseout="this.src='<?php echo img("header/monographs_1.gif")?>'" onmouseover="this.src='<?php echo img("header/monographs_2.gif")?>'"></a></li>
                <li><a href="databases.aspx?lang=NL"><img src="<?php echo img("header/periodicals_1.gif")?>" onmouseout="this.src='<?php echo img("header/periodicals_1.gif")?>'" onmouseover="this.src='<?php echo img("header/periodicals_2.gif")?>'"></a></li>
                <li><a href="databases.aspx?lang=NL"><img src="<?php echo img("header/publications_1.gif")?>" onmouseout="this.src='<?php echo img("header/publications_1.gif")?>'" onmouseover="this.src='<?php echo img("header/publications_2.gif")?>'"></a></li>
            </ul>
                <div class="contextBlock">
                    <div class="section first">
                        <h2 class="heading "><span><?php echo __("Wegwijs");?></span></h2>
                       
                        <div id="wegwijs"></div>                     
                    </div>
									
                </div>
	    </div>
        </div>
        <div class="navigation">
            
                <!-- The following returns all of the files associated with an item. -->
                <?php if (metadata('item', 'has files')): ?>
                <div id="itemfiles" class="element">
                    <h3><?php echo __('Files'); ?></h3>
                    <?php if (get_theme_option('Item FileGallery') == 1): ?>
                    <div class="element-text"><?php echo item_image_gallery(); ?></div>
                    <?php else: ?>
                    <div class="element-text"><?php echo files_for_item(); ?></div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>         
            
        </div>
    </div>
</div>
</div>
</div>
</div>


<?php echo foot(); ?>
