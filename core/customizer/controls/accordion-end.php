<?php
/**
 * Accordion End Control
 *
 * This file is used to register and display the custom Layers Accordion End.
 *
 * @package Layers
 * @since Layers 1.6.5
 */

if( !class_exists( 'Layers_Customize_Accordion_End_Control' ) ) {

	class Layers_Customize_Accordion_End_Control extends Layers_Customize_Control {

		public $type = 'layers-accordion-end';

		public function render_content() {
			?>
			<div
				id="layers-customize-control-<?php echo esc_attr( $this->id ); ?>"
				class="
					l_option-customize-control
					l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) ); ?>
					<?php if ( FALSE === strpos( $this->class, 'group' ) ) { ?>
						l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) . '-standard' ); // l_option-customize-control-accordion-start-standard ?>
					<?php } else { ?>
						l_option-customize-control-<?php echo esc_attr( str_replace( 'layers-', '', $this->type ) . '-group' ); // l_option-customize-control-accordion-start-group ?>
					<?php } ?>
					<?php echo esc_attr( $this->class ); ?>
				"
				<?php echo $this->get_linked_data(); ?>
				>
				
			</div>
			<?php
		}

	}
}