<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div class="herowrapper">
    <div class="row">
        <div class="hero columns">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/awp-logo-light.png" alt="Advanced WordPress logo">
                </a>
        <p>For those who like their WordPress &hellip; Advanced.</p>
            </div>
        </div>
    </div>
</div>

<div class="whoweare">
    <div class="row">
        <div class="large-centered columns">
            <div class="large-10 columns">
                <p><?php echo $cfs->get('who_we_are'); ?></p>
            </div>
            <div class="large-2 columns">
                <img src="<?php echo $cfs->get('who_we_are_image'); ?>" alt="About Advanced WordPress">
            </div>
        </div>
    </div>
</div>

<div class="community row">
	<div class="columns">
        <h2>Community</h2>
            <div class="groups row">
                <div class="columns">
                    <?php $fields = $cfs->get('groups');
                        foreach ($fields as $field) {
                        echo '<div class="'.strtolower(str_replace(" ", "",$field['group_title'])).' group small-4 columns">';
                        echo '<a href="'.$field['group_url'].'" target="_blank">';
                        echo '<img src="'.$field['group_image_url'].'" alt="Advanced WordPress on '.strtolower($field['group_title']).'">';
                        echo '<br>';
                        echo $field['group_description'];
                        echo '</a>';
                        echo '</div>';
                    } ?>
				</div>
			</div>

        <div class="secondarynav row">
            <div class="columns">
                <?php $fields = $cfs->get('subnavigation');
                    foreach ($fields as $field) {
                    echo '<div class="'.strtolower(str_replace(" ", "",$field['subnav_title'])).' subnavigation small-4 columns">';
                    echo '<div>';
                    echo '<p>'.$field['subnav_description'].'</p>';
                    echo '<a href="'.$field['subnav_url'].'">';
                    echo '<h3>'.$field['subnav_title'].' <br><img src="/wp-content/themes/_awp-child/images/subnavigation-arrow.png" alt=""></h3>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                } ?>
			</div>
		</div>
	</div>
</div>

<div class="newsletter">
    <div class="row">
        <div class="columns">
            <div class="sign-up-form">
                <h3><span>AWP</span><br>Weekly</h3>
                <!-- Insert Gravity Form newsletter sign-up form here -->
                <p>Get curated Advanced WP news and posts delivered straight to your inbox. Hallelujah.</p>
            </div>
        </div>
    </div>
</div>

<div class="sponsors">
    <div class="row">
        <div class="columns">
            <h2>Sponsors</h2>
            <div class="flexgrid">
                <?php $fields = $cfs->get('sponsors');
                    foreach ($fields as $field) {
                    echo '<div class="'.strtolower(str_replace(" ", "",$field['sponsor_title'])).' sponsor small-4 columns">';
                    echo '<a href="'.$field['sponsor_url'].'" target="_blank">';
                    echo '<img src="'.$field['sponsor_image_url'].'" alt="'.$field['sponsor_title'].'" title="'.$field['sponsor_title'].'">';
                    echo '</a>';
                    echo '</div>';
                } ?>
            </div>
            <div class="row">
                <div class="columns becomeasponsor">
                    <a href="/becomeasponsor">Become a sponsor &#10168;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
