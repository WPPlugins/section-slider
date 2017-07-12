<?php

namespace SectionSlider\Template;

/**
 * Template interface.
 *
 * @package  section-slider
 * @subpackage lib/Template
 * @author WP Nonce <info@wpnonce.com, @wpnonce>
 * @version 0.0.0
 */
interface SS_Template_Interface
{
    /**
     * Add required template styles and scripts
     *
     * @since 0.0.0
     * @access public
     *
     * @see  wp_enque_style()
     * @see  wp_enqueue_script()
     *
     * @return void
     */
    public function ss_add_template_resources();
}
