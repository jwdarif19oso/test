<div id="download-app" class="download-app-container">
    <div class="container">
        <div class="download-app">
            <div class="img pull-left">
                <?php
                $img = get_field("image", "option");
                $imgURL = $img["url"];
                ?>
                <img src="<?php echo $imgURL; ?>" width="213" height="365" />
            </div>
            <div class="content pull-left">
                <h2>
                    <?php the_field("title", "option"); ?>
                </h2>
                <h3>
                    <?php the_field("subheading", "option"); ?>
                </h3>
                <form class="clearfix" name="textus" method="post" action="">
                    <input name="number" class="formFirstElement" type="text" placeholder="Enter your phone number" />
                    <input type="submit" class="formLastElement btn btn-green" value="Text me" />
                </form>
                <div class="store_links clearfix">
                    <a target="_blank" class="appstore_link" href="<?php the_field("app_store_link", "option"); ?>">
                        <img class="appstore_img" src="<?php echo get_template_directory_uri() . '/images/appStore.png' ?>" width="135" height="40" />
                    </a>
                    <a target="_blank"  class="googlelplay_link" href="<?php the_field("google_play_link", "option"); ?>">
                        <img class="googlelplay_img" src="<?php echo get_template_directory_uri() . '/images/googlelplay.png' ?>" width="135" height="40" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>