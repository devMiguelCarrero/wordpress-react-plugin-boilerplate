import "./SimpleComponent.scss";

import { textDomain } from '../../../../../globalComponents/data/pluginData';
import { __ } from '@wordpress/i18n';

const SimpleComponent = () => {
	return <div className="wrb-simple-component"><p>{__( 'I\'m just a react component that cannot do anything by itself' , textDomain )}</p></div>;
};
export default SimpleComponent;
