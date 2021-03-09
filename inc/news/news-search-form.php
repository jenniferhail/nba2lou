<section class="layout filter basic-content center-align">
	<div class="wrapper">
		<div class="row">
			<div class="col">
				<div class="content">
                    <div class="fieldset search-filters">
                        <h3>Filter By: </h3>
                        <div class="filter post-category">
                            <?php echo facetwp_display( 'facet', 'post_category' ); ?>
                        </div>
                        <div class="filter date-filter">
                            <?php echo facetwp_display( 'sort' ); ?>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>

