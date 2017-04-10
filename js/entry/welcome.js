import React from 'react'; 
import ReactDOM from 'react-dom'; 
import Hello from '../components/hello'; 

axios.all([
  axios.get('http://localhost/ci-react/employee/getAll'),
  axios.get('http://localhost/ci-react/department/getAll')
])
.then(axios.spread(function (resEmployees, resDepartments) {

	var employees = resEmployees.data;
	var dempartments = resDepartments.data;

	ReactDOM.render(<Hello
						options={employees}
					  
					  />, 
  		document.getElementById('test') ); 

}));

