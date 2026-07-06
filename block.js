const { registerBlockType } = wp.blocks;
const { RichText } = wp.editor;

registerBlockType('mi-portafolio/bienvenida', {
    title: 'Mensaje de Bienvenida',
    icon: 'smiley',
    category: 'common',
    attributes: {
        content: { type: 'string' }
    },
    edit: function(props) {
        const content = props.attributes.content;
        return React.createElement(
            RichText,
            {
                tagName: 'p',
                value: content,
                onChange: function(val) {
                    props.setAttributes({ content: val });
                }
            }
        );
    },
    save: function(props) {
        return React.createElement('p', null, props.attributes.content);
    }
});