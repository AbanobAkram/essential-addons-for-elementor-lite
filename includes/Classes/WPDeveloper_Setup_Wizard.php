<?php

namespace Essential_Addons_Elementor\Classes;

if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly.

//use Essential_Addons_Elementor\Classes\WPDeveloper_Plugin_Installer;

class WPDeveloper_Setup_Wizard {

    private $eael_version;

    public function __construct() {

    }

    public function tab_step() {
        ?>
        <ul class="eael-setup-wizard">
            <li class="step">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                    <g>
                                        <path class="st0" d="M50,25c0-1.9-1.3-3.8-3-4.4c-1.6-0.6-3.2-2-3.7-3.1c-0.5-1.1-0.3-3.3,0.4-4.9c0.8-1.6,0.3-3.9-1-5.2
                                            c-1.3-1.3-3.7-1.8-5.2-1c-1.6,0.8-3.7,0.9-4.9,0.4C31.5,6.2,30,4.6,29.4,3c-0.6-1.7-2.6-3-4.4-3c-1.9,0-3.8,1.3-4.4,3
                                            c-0.6,1.7-2,3.3-3.1,3.7c-1.1,0.5-3.3,0.3-4.9-0.4C11,5.5,8.6,6,7.3,7.3C6,8.6,5.5,11,6.3,12.6c0.8,1.6,0.9,3.7,0.4,4.9
                                            C6.2,18.6,4.6,20,3,20.6c-1.7,0.6-3,2.6-3,4.4c0,1.9,1.3,3.8,3,4.4c1.7,0.6,3.2,2,3.7,3.1c0.5,1.1,0.3,3.3-0.4,4.9
                                            c-0.8,1.6-0.3,3.9,1,5.2c1.3,1.3,3.7,1.8,5.2,1c1.6-0.8,3.7-0.9,4.9-0.4c1.1,0.5,2.6,2.1,3.1,3.7c0.6,1.7,2.6,3,4.4,3
                                            c1.9,0,3.8-1.3,4.4-3c0.6-1.6,2-3.3,3.1-3.7c1.1-0.5,3.3-0.3,4.9,0.4c1.6,0.8,3.9,0.3,5.2-1c1.3-1.3,1.8-3.7,1-5.2
                                            c-0.8-1.6-0.9-3.7-0.4-4.9c0.5-1.1,2.1-2.6,3.7-3.1C48.7,28.8,50,26.9,50,25L50,25z M25,34.2c-5.1,0-9.2-4.1-9.2-9.2
                                            c0-5.1,4.1-9.2,9.2-9.2c5.1,0,9.2,4.1,9.2,9.2C34.2,30.1,30.1,34.2,25,34.2L25,34.2z M25,34.2"/>
                                    </g>
                                    </svg>
                </div>
                <div class="name">Configuration</div>
            </li>
            <li class="step">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M18.8,4.2H2.1C0.9,4.2,0,5.1,0,6.3v16.7C0,24.1,0.9,25,2.1,25h16.7c1.2,0,2.1-0.9,2.1-2.1V6.3
    C20.8,5.1,19.9,4.2,18.8,4.2z"/>
                                    <path class="st0" d="M18.8,29.2H6.3c-1.2,0-2.1,0.9-2.1,2.1v12.5c0,1.2,0.9,2.1,2.1,2.1h12.5c1.2,0,2.1-0.9,2.1-2.1V31.3
    C20.8,30.1,19.9,29.2,18.8,29.2z"/>
                                    <path class="st0" d="M43.8,29.2H27.1c-1.2,0-2.1,0.9-2.1,2.1v16.7c0,1.2,0.9,2.1,2.1,2.1h16.7c1.2,0,2.1-0.9,2.1-2.1V31.3
    C45.8,30.1,44.9,29.2,43.8,29.2z"/>
                                    <path class="st0" d="M47.9,0H27.1C25.9,0,25,0.9,25,2.1v20.8c0,1.2,0.9,2.1,2.1,2.1h20.8c1.2,0,2.1-0.9,2.1-2.1V2.1
    C50,0.9,49.1,0,47.9,0z"/>
                                </g>
                            </svg>
                </div>
                <div class="name">Elements</div>
            </li>
            <li class="step">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M9,38.9c7.3,0,7.3,11.1,0,11.1C1.7,50,1.7,38.9,9,38.9z"/>
                                    <path class="st0" d="M25.3,38.9c7.3,0,7.3,11.1,0,11.1C18,50,18,38.9,25.3,38.9z"/>
                                    <g>
                                        <path class="st0"
                                              d="M41.4,38.9c7.3,0,7.3,11.1,0,11.1C34.2,50,34.2,38.9,41.4,38.9z"/>
                                        <path class="st0" d="M35.1,9.3c-0.3,0-0.6,0-0.9,0c-1.4-6.9-9.3-11.2-15.9-8.5c0,1.5,0,3.2,0,3.9c1.5,0,4.4,0,5.8,0v5.7
        c-1.9,0-3.8,0-5.8,0c0,2,0,7.6,0,9.6c1.7,0,4,0,6,0c-1.5,6.8-11.3,6.4-11.8-0.7c0-2.5,0-6.4,0-9C-1,11.9,1.4,33.2,15.4,33
        c0.1,0,19.7,0,19.8,0C50.6,32.8,50.6,9.4,35.1,9.3z"/>
                                    </g>
                                </g>
                            </svg>
                </div>
                <div class="name">Templately</div>
            </li>
            <li class="step">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <path class="st0" d="M48.9,16.6c-0.7-0.7-1.6-1.1-2.6-1.1c-1,0-1.9,0.4-2.6,1.1l-8.8,8.8L24.7,15.1l8.8-8.8c0.7-0.7,1.1-1.6,1.1-2.6
c0-1-0.4-1.9-1.1-2.6C32.7,0.4,31.8,0,30.8,0c-1,0-1.9,0.4-2.6,1.1l-8.8,8.8l-5.6-5.6c-0.3-0.3-0.6-0.4-1-0.4c-0.4,0-0.7,0.2-1,0.4
c-8,8.8-3.7,28-3.2,29.9l-8.1,8.1c-0.3,0.2-0.4,0.6-0.4,0.9c0,0.4,0.1,0.7,0.4,0.9L5.5,49c0.3,0.3,0.6,0.4,0.9,0.4
c0.3,0,0.7-0.1,0.9-0.4l8.1-8.1c3.9,1,8.8,1.6,13.2,1.6c5.2,0,12.3-0.8,16.7-4.8c0.3-0.2,0.4-0.6,0.4-1c0-0.4-0.1-0.7-0.4-1
l-5.2-5.2l8.8-8.8C50.4,20.4,50.4,18,48.9,16.6z"/>
                            </svg>
                </div>
                <div class="name">Integrations</div>
            </li>
            <li class="step">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                                <path class="st0" d="M48.5,3.1l-0.3-0.3c-0.9-0.9-2.1-1.4-3.3-1.3c-1.2,0-2.4,0.6-3.3,1.5L16.1,30.9l-0.5,0.2l-0.5-0.2l-6.3-7.4
c-0.9-1.1-2.2-1.7-3.6-1.8c-1.4-0.1-2.8,0.5-3.8,1.5c-1.6,1.6-1.8,4.1-0.5,5.9l13.1,18.3c0.7,1,1.9,1.7,3.2,1.7h1.1
c2.2,0,4.2-1.1,5.4-2.8L49.1,9.5C50.5,7.5,50.2,4.8,48.5,3.1z"/>
                            </svg>
                </div>
                <div class="name">Finalize</div>
            </li>
        </ul>
        <?php
    }

    public function tab_content() {
        ?>
        <div class="eael-setup-body">
            <form class="eael-setup-wizard-form" method="post">
                <div id="configuration" class="setup-content">
                    <div class="eael-input-group config-list">
                        <input id="basic" data-elment-list = <?php echo htmlspecialchars(json_encode($this->get_eael_elements('basic')),ENT_QUOTES); ?> value="basic" class="eael_preferences" name="eael_preferences" type="radio">
                        <label for="basic">
                            <div class="eael-radio-circle"></div>
                            <div class="eael-radio-text">
                                <strong>Basic</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo

                                    facilisis. </p>
                            </div>
                        </label>
                    </div>
                    <div class="eael-input-group config-list">
                        <input id="advance" value="advance" data-elment-list = <?php echo htmlspecialchars(json_encode($this->get_eael_elements('advanced')),ENT_QUOTES); ?> class="eael_preferences" name="eael_preferences"
                               type="radio" checked>
                        <label for="advance">
                            <div class="eael-radio-circle"></div>
                            <div class="eael-radio-text">
                                <strong>Advance</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo
                                    ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </p>
                            </div>
                        </label>
                    </div>
                    <div class="eael-input-group config-list">
                        <input id="custom" value="custom" class="eael_preferences" name="eael_preferences" name="radio"
                               type="radio">
                        <label for="custom">
                            <div class="eael-radio-circle"></div>
                            <div class="eael-radio-text">
                                <strong>Custom</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo
                                    ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </p>
                            </div>
                        </label>
                    </div>
                </div>
                <?php $this->eael_elements(); ?>
                <div id="templately" class="setup-content eael-box">
                    <img src="<?php echo EAEL_PLUGIN_URL . 'assets/admin/images/templately.jpg'; ?>" alt="">
                </div>

                <?php $this->eael_integrations(); ?>
                <div id="finalize" class="setup-content eael-box">
                    <div class="eael-iframe">
                        <iframe src="https://www.youtube.com/embed/CnSYwGcXnxA" frameborder="0"></iframe>
                    </div>
                    <div class="eael-setup-final-info">
                        <div>
                            <div class="eael-input-group">
                                <input type="checkbox" id="eael_user_email_address" name="eael_user_email_address"
                                       checked>
                                <label for="eael_user_email_address">Share non-sensitive diagnosstic data and plugin
                                    usage
                                    information</label>
                            </div>
                            <button type="button"
                                    class="btn-collect"><?php esc_html_e( 'What We Collect?', 'essential-addons-for-elementor-lite' ); ?></button>
                        </div>
                        <button type="button" id="betterdocsqswemailskipbutton"
                                class="btn-skip"><?php esc_html_e( 'Skip This Step', 'essential-addons-for-elementor-lite' ); ?></button>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }

    public function setup_wizard_footer() {
        ?>
        <div class="eael-setup-footer">
            <button id="eael-prev" class="button eael-btn" onclick="eaelNextStep(-1)">< Previous</button>
            <button id="eael-next" class="button eael-btn" onclick="eaelNextStep(1)">Next ></button>
            <button id="eael-save" style="display: none" class="button eael-btn eael-setup-wizard-save">Submit</button>
        </div>
        <?php
    }

    public function render_wizard() {
        ?>
        <div class="eael-setup-wizard-wrap">
            <?php
            $this->tab_step();
            $this->tab_content();
            $this->setup_wizard_footer();
            $this->inline_script();
            ?>
        </div>
        <?php
    }

    public function eael_elements() {

        ?>
        <div id="elements" class="setup-content eael-box">Contain Elements
            <div class="row">
                <div class="eael-checkbox-container eael-elements-container">
                    <?php foreach ( $this->get_eael_elements() as $element ): ?>
                        <div class="eael-checkbox">
                            <div class="eael-elements-info">
                                <p class="eael-el-title"><?php echo $element[ 'name' ]; ?></p>
                                <input type="checkbox" id="<?php echo $element[ 'key' ]; ?>"
                                       name="eael_element[<?php echo $element[ 'key' ]; ?>]"
                                    <?php echo ( $element[ 'preferences' ] == 'advanced' ) ? 'checked' : ''; ?>>
                                <label for="<?php echo $element[ 'key' ]; ?>" class=""></label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
    }

    public function eael_integrations() {
        ?>
        <div id="integrations" class="setup-content eael-box">
            <div class="row">
                <?php foreach ( $this->get_plugin_list() as $plugin ) { ?>
                    <div class="col-one-fourth">
                        <div class="eael-admin-block-wrapper">
                            <div class="eael-admin-block eael-admin-block-integrations">
                                <div class="eael-admin-block-content">
                                    <div class="eael-admin-block-integrations-logo">
                                        <img src="<?php echo $plugin[ 'logo' ]; ?>" alt="logo"/>
                                    </div>
                                    <h2 class="eael-admin-block-integrations-title"><?php echo $plugin[ 'title' ]; ?></h2>
                                    <p class="eael-admin-block-integrations-text"><?php echo $plugin[ 'desc' ]; ?></p>
                                    <div class="eael-admin-block-integrations-btn-wrap">
                                        <?php if ( $this->get_local_plugin_data( $plugin[ 'basename' ] ) === false ) { ?>
                                            <a class="ea-button wpdeveloper-plugin-installer" data-action="install"
                                               data-slug="<?php echo $plugin[ 'slug' ]; ?>"><?php _e( 'Install', 'essential-addons-for-elementor-lite' ); ?></a>
                                        <?php } else { ?>
                                            <?php if ( is_plugin_active( $plugin[ 'basename' ] ) ) { ?>
                                                <a class="ea-button wpdeveloper-plugin-installer"><?php _e( 'Activated', 'essential-addons-for-elementor-lite' ); ?></a>
                                            <?php } else { ?>
                                                <a class="ea-button wpdeveloper-plugin-installer" data-action="activate"
                                                   data-basename="<?php echo $plugin[ 'basename' ]; ?>"><?php _e( 'Activate', 'essential-addons-for-elementor-lite' ); ?></a>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
    }

    public function inline_script() {
        ?>
        <script>
            var eaelCurrentTab = 0;

            function eaelNextStep(StepNumber) {
                var contents = document.getElementsByClassName("setup-content");
                contents[eaelCurrentTab].style.display = "none";
                eaelCurrentTab = eaelCurrentTab + StepNumber;

                if (eaelCurrentTab >= contents.length) {
                    return false;
                }
                eaelRenderTab(eaelCurrentTab);
            }

            eaelRenderTab(eaelCurrentTab);

            function eaelRenderTab(step) {
                var contents = document.getElementsByClassName("setup-content"),
                    prev = document.getElementById("eael-prev"),
                    nextElement = document.getElementById("eael-next"),
                    saveElement = document.getElementById("eael-save");

                contents[step].style.display = "block";
                prev.style.display = (step == 0) ? "none" : "inline";

                if (step == (contents.length - 1)) {
                    saveElement.style.display = "inline";
                    nextElement.style.display = "none";
                } else {
                    nextElement.style.display = "inline";
                    saveElement.style.display = "none";
                }
                eaelStepIndicator(step)
            }

            function eaelStepIndicator(stepNumber) {
                var steps = document.getElementsByClassName("step"),
                    container = document.getElementsByClassName("eael-setup-wizard");
                container[0].setAttribute('data-step', stepNumber);

                for (var i = 0; i < steps.length; i++) {
                    steps[i].className = steps[i].className.replace(" active", "");
                }

                steps[stepNumber].className += " active";
            }
        </script>
        <?php
    }

    public function get_plugin_list() {
        return [
            [
                'slug'     => 'notificationx',
                'basename' => 'notificationx/notificationx.php',
                'logo'     => EAEL_PLUGIN_URL . 'assets/admin/images/nx-logo.png',
                'title'    => 'NotificationX',
                'desc'     => 'Let the visitors know about your special offers, deals, announcement.',
            ],
            [
                'slug'     => 'easyjobs',
                'basename' => 'easyjobs/easyjobs.php',
                'logo'     => EAEL_PLUGIN_URL . 'assets/admin/images/nx-logo.png',
                'title'    => 'EasyJobs',
                'desc'     => 'Let the visitors know about your special offers, deals, announcement.',
            ],
            [
                'slug'     => 'team-member-block',
                'basename' => 'team-member-block/team-member-block.php',
                'logo'     => EAEL_PLUGIN_URL . 'assets/admin/images/nx-logo.png',
                'title'    => 'Team Member Block',
                'desc'     => 'Let the visitors know about your special offers, deals, announcement.',
            ],
            [
                'slug'     => 'team-member-block',
                'basename' => 'team-member-block/team-member-block.php',
                'logo'     => EAEL_PLUGIN_URL . 'assets/admin/images/nx-logo.png',
                'title'    => 'Team Member Block',
                'desc'     => 'Let the visitors know about your special offers, deals, announcement.',
            ],
            [
                'slug'     => 'team-member-block',
                'basename' => 'team-member-block/team-member-block.php',
                'logo'     => EAEL_PLUGIN_URL . 'assets/admin/images/nx-logo.png',
                'title'    => 'Team Member Block',
                'desc'     => 'Let the visitors know about your special offers, deals, announcement.',
            ],
        ];
    }

    public function get_eael_elements( $preferences = null ) {
        $elements_list    = array();
        $show_widget_list = [
            'basic'    => [
                'call-to-action',
                'flip-box'
            ],
            'advanced' => [
                'post-grid',
                'post-timeline'
            ]
        ];
        if ( $preferences == 'basic' ) {
            $elements_list = $show_widget_list[ 'basic' ];
        } elseif ( $preferences == 'advanced' ) {
            $elements_list = array_merge( $show_widget_list[ 'basic' ], $show_widget_list[ 'advanced' ] );
        } else {
            $globals_el_list = $GLOBALS[ 'eael_config' ][ 'elements' ];
            $merge           = array_merge( $show_widget_list[ 'basic' ], $show_widget_list[ 'advanced' ] );
            foreach ( $globals_el_list as $key => $item ) {
                $elements_list[] = [
                    'key'         => $key,
                    'name'        => ucwords( str_replace( '-', ' ', $key ) ),
                    'preferences' => in_array($key, $merge ) ? 'advanced' : '',
                ];
            }
        }
        return $elements_list;
    }


    /**
     * get_local_plugin_data
     *
     * @param mixed $basename
     * @return array|false
     */
    public function get_local_plugin_data( $basename = '' ) {
        if ( empty( $basename ) ) {
            return false;
        }

        if ( !function_exists( 'get_plugins' ) ) {
            include_once ABSPATH . 'wp-admin/includes/plugin.php';
        }

        $plugins = get_plugins();

        if ( !isset( $plugins[ $basename ] ) ) {
            return false;
        }

        return $plugins[ $basename ];
    }
}