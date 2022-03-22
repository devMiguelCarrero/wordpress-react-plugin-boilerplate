import { render } from '@wordpress/element';
import App from './App';

if (document.getElementById('edit-simple-metabox-react'))
	render(<App />, document.getElementById('edit-simple-metabox-react'));
