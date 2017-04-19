<div id="fitspotters">
    <div class="container-fluid paddingsmlr0 margintop35">
                <?php
                if (have_rows('for_fitspotters')):
                    $count = 1;
                    while (have_rows('for_fitspotters')) : the_row();
//                                            
                        ?>
                        <div class="faqsection panel panel-default">
                            <div class="panel-heading faqsection-heading">
                                <h4 class="panel-title">

                                    <i class="indicator glyphicon glyphicon-chevron-right">

                                    </i><a style="line-height:1.6" class=" accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#fitspotterscollapse<?php echo $count; ?>">
                                        <?php the_sub_field('question'); ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="fitspotterscollapse<?php echo $count++; ?>" class="panel-collapse collapse ">
                                <div class="panel-body paddingtopbottom0" style="border-top:0px solid transparent;">
                                    <p class="Yes-We-are-live-in"><?php the_sub_field('answer'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    

