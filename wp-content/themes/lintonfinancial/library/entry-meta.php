<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
    	?><div class="loop-post-meta">
    		<ul> <?php
		        echo '<li class="updated">'. get_the_time('l, F jS, Y') .'</li>';
		        
		       	echo '<li class="comments">'. comments_number(__('0 Responses', 'FoundationPress'), __('1 Response', 'FoundationPress'), __('% Responses to', 'FoundationPress') ). '</li>'
		?>	</ul>
		</div>
		<?php

    }
endif;
?>