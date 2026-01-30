<?php
/**
 * Shortcode Meta Box Template.
 *
 * @package    Portfolio_Filter_Gallery
 * @subpackage Portfolio_Filter_Gallery/admin/views
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$gallery_id = $post->ID;
?>

<div class="pfg-meta-box pfg-shortcode-meta-box">
    
    <div class="pfg-shortcode-box">
        <p><?php esc_html_e( 'Use this shortcode to display your gallery:', 'portfolio-filter-gallery' ); ?></p>
        
        <div class="pfg-shortcode-wrapper">
            <code id="pfg-shortcode">[portfolio_gallery id="<?php echo esc_attr( $gallery_id ); ?>"]</code>
            <button type="button" class="pfg-btn pfg-btn-secondary pfg-copy-shortcode" data-clipboard-target="#pfg-shortcode">
                <span class="dashicons dashicons-clipboard"></span>
                <?php esc_html_e( 'Copy', 'portfolio-filter-gallery' ); ?>
            </button>
        </div>
        
        <p class="pfg-shortcode-note">
            <?php esc_html_e( 'You can also use the legacy shortcode:', 'portfolio-filter-gallery' ); ?>
            <code>[PFG id=<?php echo esc_attr( $gallery_id ); ?>]</code>
        </p>
    </div>
    
    <div class="pfg-shortcode-options">
        <h4><?php esc_html_e( 'Shortcode Parameters', 'portfolio-filter-gallery' ); ?></h4>
        
        <table class="pfg-params-table">
            <thead>
                <tr>
                    <th><?php esc_html_e( 'Parameter', 'portfolio-filter-gallery' ); ?></th>
                    <th><?php esc_html_e( 'Description', 'portfolio-filter-gallery' ); ?></th>
                    <th><?php esc_html_e( 'Example', 'portfolio-filter-gallery' ); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>id</code></td>
                    <td><?php esc_html_e( 'Gallery ID (required)', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>id="<?php echo esc_attr( $gallery_id ); ?>"</code></td>
                </tr>
                <tr>
                    <td><code>columns</code></td>
                    <td><?php esc_html_e( 'Number of columns (1-6)', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>columns="4"</code></td>
                </tr>
                <tr>
                    <td><code>filter</code></td>
                    <td><?php esc_html_e( 'Default filter to show', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>filter="web-design"</code></td>
                </tr>
                <tr>
                    <td><code>layout</code></td>
                    <td><?php esc_html_e( 'Layout type (grid, masonry)', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>layout="masonry"</code></td>
                </tr>
                <tr>
                    <td><code>show_filters</code></td>
                    <td><?php esc_html_e( 'Show filter buttons (true, false)', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>show_filters="false"</code></td>
                </tr>
                <?php if ( pfg_is_premium() ) : ?>
                <tr>
                    <td><code>limit</code></td>
                    <td><?php esc_html_e( 'Maximum images to show', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>limit="12"</code></td>
                </tr>
                <tr>
                    <td><code>pagination</code></td>
                    <td><?php esc_html_e( 'Enable pagination', 'portfolio-filter-gallery' ); ?></td>
                    <td><code>pagination="true"</code></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <?php if ( defined( 'WORDPRESS_BLOCK_EDITOR' ) || function_exists( 'register_block_type' ) ) : ?>
    <div class="pfg-gutenberg-tip">
        <span class="dashicons dashicons-info"></span>
        <?php esc_html_e( 'You can also use the Portfolio Gallery block in the Gutenberg editor!', 'portfolio-filter-gallery' ); ?>
    </div>
    <?php endif; ?>
    
</div>

<style>
.pfg-params-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    font-size: 13px;
}
.pfg-params-table th,
.pfg-params-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
}
.pfg-params-table th {
    background: #f8fafc;
    font-weight: 600;
}
.pfg-params-table code {
    background: #f1f5f9;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 12px;
}
.pfg-gutenberg-tip {
    margin-top: 20px;
    padding: 12px 15px;
    background: #eff6ff;
    border: 1px solid #bfdbfe;
    border-radius: 6px;
    color: #1e40af;
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 8px;
}
</style>
