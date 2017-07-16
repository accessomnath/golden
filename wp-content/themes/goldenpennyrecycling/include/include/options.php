<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu()
{

    //create new top-level menu
    add_menu_page('Theme Setting', 'Theme Setting', 'administrator', __FILE__, 'theme_setting', 'dashicons-admin-settings');

    //call register settings function
    add_action('admin_init', 'register_my_cool_plugin_settings');
}


function register_my_cool_plugin_settings()
{
    register_setting('my-cool-plugin-settings-group', 'address');
    register_setting('my-cool-plugin-settings-group', 'operations');
    register_setting('my-cool-plugin-settings-group', 'get_in_touch');

//    ------------------

    register_setting('my-cool-plugin-settings-group', 'phone');
    register_setting('my-cool-plugin-settings-group', 'rss');
    register_setting('my-cool-plugin-settings-group', 'facebook');
    register_setting('my-cool-plugin-settings-group', 'twitter');
    register_setting('my-cool-plugin-settings-group', 'google');
    register_setting('my-cool-plugin-settings-group', 'video');
    register_setting('my-cool-plugin-settings-group', 'instagram');
    register_setting('my-cool-plugin-settings-group', 'linkedin');
    register_setting('my-cool-plugin-settings-group', 'email');
    register_setting('my-cool-plugin-settings-group', 'address');
    register_setting('my-cool-plugin-settings-group', 'mapcontact');

}

function theme_setting()
{
    ?>
    <div class="wrap">
        <h2>Gowebbi's Kool plugin</h2>

        <form method="post" action="options.php">
            <?php settings_fields('my-cool-plugin-settings-group'); ?>
            <?php do_settings_sections('my-cool-plugin-settings-group'); ?>
            <table class="form-table">

                <tr valign="top">
                    <th scope="row">Address</th>
                    <td>
                        <textarea rows="4" name="address" cols="50">
                                <?php echo esc_attr(get_option('address')); ?>
                        </textarea>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Hours of operations</th>
                    <td>
                        <textarea rows="4" name="operations" cols="50">
                                <?php echo esc_attr(get_option('operations')); ?>
                        </textarea>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Get in touch..</th>
                    <td>
                        <textarea rows="4" name="get_in_touch" cols="50">
                                <?php echo esc_attr(get_option('get_in_touch')); ?>
                        </textarea>
                    </td>
                </tr>






                <tr valign="top">
                    <th scope="row">Our rss</th>
                    <td><input type="text" name="rss"
                               value="<?php echo esc_attr(get_option('rss')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Facebook</th>
                    <td><input type="text" name="facebook"
                               value="<?php echo esc_attr(get_option('facebook')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Twitter</th>
                    <td><input type="text" name="twitter"
                               value="<?php echo esc_attr(get_option('twitter')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Google+</th>
                    <td><input type="text" name="google"
                               value="<?php echo esc_attr(get_option('google')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">phone</th>
                    <td><input type="text" name="phone"
                               value="<?php echo esc_attr(get_option('phone')); ?>"/></td>
                </tr>

                <tr valign="top">
                    <th scope="row">video link</th>
                    <td><input type="text" name="video"
                               value="<?php echo esc_attr(get_option('video')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">About Content</th>
                    <td>
                        <textarea rows="4" name="about_content" cols="50">
                                <?php echo esc_attr(get_option('about_content')); ?>
                        </textarea>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Instagram</th>
                    <td><input type="text" name="instagram"
                               value="<?php echo esc_attr(get_option('instagram')); ?>"/></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Linkedin</th>
                    <td><input type="text" name="linkedin"
                               value="<?php echo esc_attr(get_option('linkedin')); ?>"/></td>
                </tr>


                <tr valign="top">
                    <th scope="row">Address</th>
                    <td><input type="text" name="address"
                               value="<?php echo esc_attr(get_option('address')); ?>"/></td>
                </tr>

                </br>
                </p>Contact information
                <tr valign="top">
                    <th scope="row">Email</th>
                    <td><input type="text" name="email"
                               value="<?php echo esc_attr(get_option('email')); ?>"/></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Contact map</th>
                    <td><input type="text" name="mapcontact"
                               value="<?php echo esc_attr(get_option('mapcontact')); ?>"/></td>
                </tr>

            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?PHP } ?>