<?php
/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */

class WegnerTools
{
    private $__wegner_tools_options;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'wegnerToolsAddPluginPage'));
        add_action('admin_init', array($this, 'wegnerToolsPageInit'));
    }

    public function wegnerToolsAddPluginPage()
    {
        add_options_page(
            'Wegner Tools', // page_title
            'Wegner Tools', // menu_title
            'manage_options', // capability
            'wegner-tools', // menu_slug
            array($this, 'wegnerToolsCreateAdminPage') // function
        );
    }

    public function wegnerToolsCreateAdminPage()
    {
        $this->__wegner_tools_options = get_option('wegner_tools_option_name'); ?>

		<div class="wrap">
			<h2>Wegner Tools</h2>
			<p></p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
settings_fields('wegner_tools_option_group');
        do_settings_sections('wegner-tools-admin');
        submit_button();
        ?>
			</form>
		</div>
	<?php }

    public function wegnerToolsPageInit()
    {
        register_setting(
            'wegner_tools_option_group', // option_group
            'wegner_tools_option_name', // option_name
            array($this, 'wegnerToolsSanitize') // sanitize_callback
        );

        add_settings_section(
            'wegner_tools_setting_section', // id
            'Settings', // title
            array($this, 'wegnerToolsSectionInfo'), // callback
            'wegner-tools-admin' // page
        );

        add_settings_field(
            'wp_security_functions_0', // id
            'WP security functions', // title
            array($this, 'wpSecurityFunctions0Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rss_feed_contains_divi_projects_1', // id
            'RSS feed contains Divi projects', // title
            array($this, 'rssFeedContainsDiviProjects1Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2', // id
            'Divi Builder changes to images are automatically reflected in the media (not available)', // title
            array($this, 'diviBuilderChangesToImagesAreAutomaticallyReflectedInTheMedia2Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_3', // id
            'Rename Divi projects', // title
            array($this, 'renameDiviProjects3Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_plural_name_4', // id
            'Rename Divi projects - plural name', // title
            array($this, 'renameDiviProjectsPluralName4Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_singular_name_5', // id
            'Rename Divi projects - singular name', // title
            array($this, 'renameDiviProjectsSingularName5Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_slug_6', // id
            'Rename Divi projects - slug', // title
            array($this, 'renameDiviProjectsSlug6Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'divi_rename_projects_category_name_7', // id
            'Rename Divi projects - category name', // title
            array($this, 'diviRenameProjectsCategoryName7Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_category_slug_8', // id
            'Rename Divi projects - category slug', // title
            array($this, 'renameDiviProjectsCategorySlug8Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_tag_name_9', // id
            'Rename Divi projects - tag name', // title
            array($this, 'renameDiviProjectsTagName9Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_tag_slug_10', // id
            'Rename Divi projects - tag slug', // title
            array($this, 'renameDiviProjectsTagSlug10Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );

        add_settings_field(
            'rename_divi_projects_menu_icon_11', // id
            'Rename Divi projects - menu icon', // title
            array($this, 'renameDiviProjectsMenuIcon11Callback'), // callback
            'wegner-tools-admin', // page
            'wegner_tools_setting_section' // section
        );
    }

    public function wegnerToolsSanitize($input)
    {
        $sanitary_values = array();
        if (isset($input['wp_security_functions_0'])) {
            $sanitary_values['wp_security_functions_0'] = $input['wp_security_functions_0'];
        }

        if (isset($input['rss_feed_contains_divi_projects_1'])) {
            $sanitary_values['rss_feed_contains_divi_projects_1'] = $input['rss_feed_contains_divi_projects_1'];
        }

        if (isset($input['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2'])) {
            $sanitary_values['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2'] = $input['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2'];
        }

        if (isset($input['rename_divi_projects_3'])) {
            $sanitary_values['rename_divi_projects_3'] = $input['rename_divi_projects_3'];
        }

        if (isset($input['rename_divi_projects_plural_name_4'])) {
            $sanitary_values['rename_divi_projects_plural_name_4'] = sanitize_text_field($input['rename_divi_projects_plural_name_4']);
        }

        if (isset($input['rename_divi_projects_singular_name_5'])) {
            $sanitary_values['rename_divi_projects_singular_name_5'] = sanitize_text_field($input['rename_divi_projects_singular_name_5']);
        }

        if (isset($input['rename_divi_projects_slug_6'])) {
            $sanitary_values['rename_divi_projects_slug_6'] = sanitize_text_field($input['rename_divi_projects_slug_6']);
        }

        if (isset($input['divi_rename_projects_category_name_7'])) {
            $sanitary_values['divi_rename_projects_category_name_7'] = sanitize_text_field($input['divi_rename_projects_category_name_7']);
        }

        if (isset($input['rename_divi_projects_category_slug_8'])) {
            $sanitary_values['rename_divi_projects_category_slug_8'] = sanitize_text_field($input['rename_divi_projects_category_slug_8']);
        }

        if (isset($input['rename_divi_projects_tag_name_9'])) {
            $sanitary_values['rename_divi_projects_tag_name_9'] = sanitize_text_field($input['rename_divi_projects_tag_name_9']);
        }

        if (isset($input['rename_divi_projects_tag_slug_10'])) {
            $sanitary_values['rename_divi_projects_tag_slug_10'] = sanitize_text_field($input['rename_divi_projects_tag_slug_10']);
        }

        if (isset($input['rename_divi_projects_menu_icon_11'])) {
            $sanitary_values['rename_divi_projects_menu_icon_11'] = sanitize_text_field($input['rename_divi_projects_menu_icon_11']);
        }

        return $sanitary_values;
    }

    public function wegnerToolsSectionInfo()
    {

    }

    public function wpSecurityFunctions0Callback()
    {
        printf(
            '<input type="checkbox" name="wegner_tools_option_name[wp_security_functions_0]" id="wp_security_functions_0" value="wp_security_functions_0" %s>',
            (isset($this->__wegner_tools_options['wp_security_functions_0']) && $this->__wegner_tools_options['wp_security_functions_0'] === 'wp_security_functions_0') ? 'checked' : ''
        );
    }

    public function rssFeedContainsDiviProjects1Callback()
    {
        printf(
            '<input type="checkbox" name="wegner_tools_option_name[rss_feed_contains_divi_projects_1]" id="rss_feed_contains_divi_projects_1" value="rss_feed_contains_divi_projects_1" %s>',
            (isset($this->__wegner_tools_options['rss_feed_contains_divi_projects_1']) && $this->__wegner_tools_options['rss_feed_contains_divi_projects_1'] === 'rss_feed_contains_divi_projects_1') ? 'checked' : ''
        );
    }

    public function diviBuilderChangesToImagesAreAutomaticallyReflectedInTheMedia2Callback()
    {
        printf(
            '<input type="checkbox" name="wegner_tools_option_name[divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2]" id="divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2" value="divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2" %s>',
            (isset($this->__wegner_tools_options['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2']) && $this->__wegner_tools_options['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2'] === 'divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2') ? 'checked' : ''
        );
    }

    public function renameDiviProjects3Callback()
    {
        printf(
            '<input type="checkbox" name="wegner_tools_option_name[rename_divi_projects_3]" id="rename_divi_projects_3" value="rename_divi_projects_3" %s>',
            (isset($this->__wegner_tools_options['rename_divi_projects_3']) && $this->__wegner_tools_options['rename_divi_projects_3'] === 'rename_divi_projects_3') ? 'checked' : ''
        );
    }

    public function renameDiviProjectsPluralName4Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_plural_name_4]" id="rename_divi_projects_plural_name_4" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_plural_name_4']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_plural_name_4']) : ''
        );
    }

    public function renameDiviProjectsSingularName5Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_singular_name_5]" id="rename_divi_projects_singular_name_5" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_singular_name_5']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_singular_name_5']) : ''
        );
    }

    public function renameDiviProjectsSlug6Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_slug_6]" id="rename_divi_projects_slug_6" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_slug_6']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_slug_6']) : ''
        );
    }

    public function diviRenameProjectsCategoryName7Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[divi_rename_projects_category_name_7]" id="divi_rename_projects_category_name_7" value="%s">',
            isset($this->__wegner_tools_options['divi_rename_projects_category_name_7']) ? esc_attr($this->__wegner_tools_options['divi_rename_projects_category_name_7']) : ''
        );
    }

    public function renameDiviProjectsCategorySlug8Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_category_slug_8]" id="rename_divi_projects_category_slug_8" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_category_slug_8']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_category_slug_8']) : ''
        );
    }

    public function renameDiviProjectsTagName9Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_tag_name_9]" id="rename_divi_projects_tag_name_9" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_tag_name_9']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_tag_name_9']) : ''
        );
    }

    public function renameDiviProjectsTagSlug10Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_tag_slug_10]" id="rename_divi_projects_tag_slug_10" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_tag_slug_10']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_tag_slug_10']) : ''
        );
    }

    public function renameDiviProjectsMenuIcon11Callback()
    {
        printf(
            '<input class="regular-text" type="text" name="wegner_tools_option_name[rename_divi_projects_menu_icon_11]" id="rename_divi_projects_menu_icon_11" value="%s">',
            isset($this->__wegner_tools_options['rename_divi_projects_menu_icon_11']) ? esc_attr($this->__wegner_tools_options['rename_divi_projects_menu_icon_11']) : ''
        );
    }

}
if (is_admin()) {
    $wegner_tools = new WegnerTools();
}

/*
 * Retrieve this value with:
 * $wegner_tools_options = get_option( 'wegner_tools_option_name' ); // Array of All Options
 * $wp_security_functions_0 = $wegner_tools_options['wp_security_functions_0']; // WP security functions
 * $rss_feed_contains_divi_projects_1 = $wegner_tools_options['rss_feed_contains_divi_projects_1']; // RSS feed contains Divi projects
 * $divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2 = $wegner_tools_options['divi_builder_changes_to_images_are_automatically_reflected_in_the_media_2']; // Divi Builder changes to images are automatically reflected in the media
 * $rename_divi_projects_3 = $wegner_tools_options['rename_divi_projects_3']; // Rename Divi projects
 * $rename_divi_projects_plural_name_4 = $wegner_tools_options['rename_divi_projects_plural_name_4']; // Rename Divi projects - plural name
 * $rename_divi_projects_singular_name_5 = $wegner_tools_options['rename_divi_projects_singular_name_5']; // Rename Divi projects - singular name
 * $rename_divi_projects_slug_6 = $wegner_tools_options['rename_divi_projects_slug_6']; // Rename Divi projects - slug
 * $divi_rename_projects_category_name_7 = $wegner_tools_options['divi_rename_projects_category_name_7']; // Rename Divi projects - category name
 * $rename_divi_projects_category_slug_8 = $wegner_tools_options['rename_divi_projects_category_slug_8']; // Rename Divi projects - category slug
 * $rename_divi_projects_tag_name_9 = $wegner_tools_options['rename_divi_projects_tag_name_9']; // Rename Divi projects - tag name
 * $rename_divi_projects_tag_slug_10 = $wegner_tools_options['rename_divi_projects_tag_slug_10']; // Rename Divi projects - tag slug
 * $rename_divi_projects_menu_icon_11 = $wegner_tools_options['rename_divi_projects_menu_icon_11']; // Rename Divi projects - menu icon
 */