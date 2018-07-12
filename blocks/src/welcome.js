wp.blocks.registerBlockType('antler-labs/welcome', {
	title: 'Welcome',
	category: 'layout',

	attributes: {
		title: { type: 'string' },
		paragraph: { type: 'string' },
		button: { type: 'string' }
	},

	edit (props) {
		const onChangeTitle = function (title) {
			props.setAttributes({
				title
			});
		};

		const onChangeParagraph = function (paragraph) {
			props.setAttributes({
				paragraph
			});
		};

		const onChangeButton = function (button) {
			props.setAttributes({
				button
			});
		};

		return (
			<div>
				<wp.editor.RichText tagName="h2" onChange={ onChangeTitle } value={ props.attributes.title } />
				<wp.editor.RichText tagName="p" onChange={ onChangeParagraph } value={ props.attributes.paragraph } />
				<wp.editor.RichText tagName="a" onChange={ onChangeButton } value={ props.attributes.button } />
			</div>
		);
	},

	save (props) {
		return (
			<section className="welcome">
				<div className="welcome__home">
					<h2>{ props.attributes.title }</h2>
					<p>{ props.attributes.paragraph }</p>
					<a href="#">{ props.attributes.button }</a>
				</div>
			</section>
		);
	}
});
