wp.blocks.registerBlockType('antler-labs/hero', {
	title: 'Hero',
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
			<wp.editor.RichText tagName="p"
				onChange={ onChangeContent }
				value={ props.attributes.content }
			/>
		);
	},

	save (props) {
		return (
			<section className="hero">
				<h1>{ props.attributes.content }</h1>
			</section>
		);
	}
});
