const {
	registerBlockType
} = wp.blocks;

const {
	RichText,
	MediaUpload
} = wp.editor;

registerBlockType('antler-labs/welcome', {
	title: 'Welcome',
	category: 'layout',

	attributes: {
		title: {
			type: 'string'
		},
		paragraph: {
			type: 'string'
		},
		button: {
			type: 'string'
		},
		mediaID: {
			type: 'number'
		},
		mediaURL: {
			type: 'string',
			source: 'attribute',
			selector: 'img',
			attribute: 'src'
		}
	},

	edit (props) {
		const onChangeTitle = (title) => {
			props.setAttributes({
				title
			});
		};

		const onChangeParagraph = (paragraph) => {
			props.setAttributes({
				paragraph
			});
		};

		const onChangeButton = (button) => {
			props.setAttributes({
				button
			});
		};

		const onSelectImage = (media) => {
			props.setAttributes({
				mediaURL: media.url,
				mediaID: media.id
			});
		};

		return (
			<div>
				<RichText tagName="h2" onChange={ onChangeTitle } value={ props.attributes.title } />
				<RichText tagName="p" onChange={ onChangeParagraph } value={ props.attributes.paragraph } />
				<RichText tagName="a" onChange={ onChangeButton } value={ props.attributes.button } />

				<MediaUpload
					onSelect={ onSelectImage }
					type="image"
					render={({ open }) => (
						<button onClick={ open }>
							{ !props.attributes.mediaID ? 'Upload Image' : <img src={ props.attributes.mediaURL } /> }
						</button>
					)}
				/>
			</div>
		);
	},

	save (props) {
		return (
			<section className="welcome">
				<div className="welcome__left">
					<h2>{ props.attributes.title }</h2>
					<p>{ props.attributes.paragraph }</p>
					<a href="#">{ props.attributes.button }</a>
				</div>

				<div className="welcome__image">
					{
						props.attributes.mediaURL && (
							<img src={ props.attributes.mediaURL } />
						)
					}
				</div>
			</section>
		);
	}
});
