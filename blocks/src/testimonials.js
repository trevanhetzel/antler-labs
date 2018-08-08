wp.blocks.registerBlockType('antler-labs/testimonials', {
	title: 'Testimonials',
	category: 'layout',

	attributes: {
		content: {
			type: 'string'
		}
	},

	edit (props) {
		const onChangeContent = function (content) {
			props.setAttributes({
				content
			});
		};

		return (
			<div>
				<p><strong>Puppies are currently AVAILABLE from</strong></p>
				<wp.editor.RichText tagName="p"
					onChange={ onChangeContent }
					value={ props.attributes.content }
				/>
			</div>
		);
	},

	save (props) {
		return (
			<section className="availability">
				<div className="contain">
					<p>
						<strong>Puppies are currently <span>available</span></strong> from { props.attributes.content }
					</p>
				</div>
			</section>
		);
	}
});
