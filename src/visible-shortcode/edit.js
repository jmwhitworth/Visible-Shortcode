import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import ServerSideRender from '@wordpress/server-side-render';
import { PanelBody, TextControl } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	const { shortcode } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody
					title={ __( 'Shortcode Settings', 'visible-shortcode' ) }
				>
					<TextControl
						label={ __( 'Shortcode', 'visible-shortcode' ) }
						value={ shortcode }
						onChange={ ( shortcode ) => {
							setAttributes( { shortcode } );
						} }
						help={ __(
							'Enter the shortcode you want to render.',
							'visible-shortcode'
						) }
					/>
				</PanelBody>
			</InspectorControls>

			<div { ...useBlockProps() }>
				<ServerSideRender
					block="visible-shortcode/visible-shortcode"
					attributes={ { shortcode } }
				/>
			</div>
		</>
	);
}
