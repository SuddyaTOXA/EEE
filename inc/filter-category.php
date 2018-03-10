<?php
$term_args = array(
	'taxonomy' => 'category',
	'orderby'       => 'name',
	'order'         => 'DESC',
	'hide_empty'    => true,
    'exclude'  => array(1)
);
$terms = get_terms( $term_args );

$cur_categories = get_the_category();
$cur_arr = [];
foreach ($cur_categories as $current) {
	$cur_arr[] = $current->cat_ID;
}
?>
<?php if($terms) { ?>
    <div class="category-btn-box">
        <a href="/broken" class="btn dark small btn-category">Categories</a>
    </div>
    <div class="filter-box">
        <span class="mobile-menu-close"><span></span></span>
        <?php
            if (is_singular('post')) {
                echo '<h3 class="filter-title">Blog Home</h3>';
            }
        ?>
        <h3 class="filter-title">Categories</h3>
        <?php
            if (is_category() || is_singular('post')) {
	            echo '<a href="'.get_permalink(21).'" title="All Work" class="all">All Work</a>';
            }
            foreach ($terms as $term) {
                $active = $cur = 0;
                foreach ($cur_arr as $cur) {
                    if ($cur == $term->term_id) {
	                    $active++;
                    }
                }
                $cur = ($active > 0) ? 'class="active"' : '';
                echo '<a href="'.get_term_link($term).'" title="'.$term->name.'" '.$cur.'>'.$term->name.'</a>';
            }
        ?>
    </div>
    <div class="filter-box-overlay"></div>
<?php } ?>