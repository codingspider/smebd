<!DOCTYPE html>
<html>
<head>
	<title>Loan Application details </title>
</head>
<body>
        <div class="col-md-10">
                <h1>Applicant Information </h1>
                <br>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        
                        <th scope="col">Name </th>
                        <th scope="col">Address  </th>
                        <th scope="col">Business Name </th>
                        <th scope="col">Business Address </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       
                      <td>{{ $name }}</td>
                      <td>{{ $address }}</td>
                      <td>{{ $business_name}}</td>
                      <td>{{ $business_address}}</td>
        
                      </tr>
                 
                    </tbody>
                  </table>
            
            </div>
            <br>
            <br>
            <div class="col-md-12">
                <h1>Business Information </h1>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        
                        <th scope="col">Loan Type </th>
                        <th scope="col">Business Name </th>
                        <th scope="col">Business Address</th>
                        <th scope="col">Business Type</th>
                        <th scope="col">Monthly Sales </th>
                        <th scope="col">Repayment Type</th>
                   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       
                      <td>{{ $loan_type}}</td>
                      <td>{{ $business_name}}</td>
                      <td>{{ $business_address}}</td>
                      <td>{{ $type_of_business}}</td>
                      <td>{{ $monthly_sales}}</td>
                      <td>{{ $repayment_type}}</td>
                    
                     
                      </tr>
                 
                    </tbody>
                  </table>
            
            </div>
            <div class="col-md-12">
                <h1>Business Information </h1>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        
                        <th scope="col">Trade License No. </th>
                        <th scope="col">NID No. </th>
                        <th scope="col">District</th>
                        <th scope="col">Loan Amount</th>
                        <th scope="col">Loan Period</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $trade_license_no}}</td>
                      <td>{{ $national_id_no}}</td>
                      <td>{{ $district}}</td>
                      <td>{{ $loan_amount}}</td>
                      <td>{{ $period_of_loan}}</td>
                     
                      </tr>
                 
                    </tbody>
                  </table>
            
            </div>
</body>
</html>