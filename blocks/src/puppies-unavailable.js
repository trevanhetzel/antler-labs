wp.blocks.registerBlockType('antler-labs/puppies-unavailable', {
	title: 'Puppies Coming Soon',
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
				<p><strong>A new litter is coming soon!</strong></p>
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
						<strong>A new litter is <span>coming soon!</span> { props.attributes.content }</strong>
					</p>

					<a href="/contact" class="button --secondary">Reserve a puppy</a>
				</div>
			</section>
		);
	}
});
