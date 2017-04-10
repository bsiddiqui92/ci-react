import React from 'react'; 
class Hello extends React.Component {


	render() {
			
		var options = this.props.options.map( function(option) {
			return <option>{option.first_name+' '+option.last_name}</option>
		});

		return (
			<form className="myForm">
				<input type="text" />
				<select className="test">{options}</select>
				<input type="submit" />
			</form>);  
	} 


}

export default Hello; 