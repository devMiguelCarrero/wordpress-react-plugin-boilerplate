import MainContainer from '../../../../globalComponents/UI/MainContainer';
import Col from '../../../../globalComponents/UI/Col';
import Row from '../../../../globalComponents/UI/Row';
import { __ } from '@wordpress/i18n';
import { textDomain } from '../../../../globalComponents/data/pluginData';
import SimpleComponent from './components/SimpleComponent';

const ShceduledStudentsApp = () => {
	return (
		<MainContainer>
			<Row>
				<Col>
					{__('Create an awesome app here', textDomain)}
					<SimpleComponent />
				</Col>
			</Row>
		</MainContainer>
	);
};
export default ShceduledStudentsApp;
