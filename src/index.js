/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;

const {
	PanelBody,
	PanelRow,
	ToggleControl
} = wp.components;

const App = () => (
	<PanelBody
		title={ __( 'Settings' ) }
	>
		<PanelRow>
			<ToggleControl
				label={ __( 'Track Admin Users?' ) }
				help={ 'Would you like to track views of logged-in admin accounts?.' }
				checked={ true }
				onChange={ () => {} }
			/>
		</PanelRow>
	</PanelBody>
);

const { render } = wp.element;

render(
	<App />,
	document.getElementById( 'option-awesome-plugin' )
);
