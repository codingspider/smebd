<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<html>
        <body>
        <div align="center">
             <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">   
        	    <div>
        	        <img src="http://1.bp.blogspot.com/-f-y9Gbmzx5k/UH2RLtJ12sI/AAAAAAAAAHU/3KsqahIWRRQ/s1600/Entrepreneur.png" width="250" alt="CREATIVE TALENT MANAGEMENT" border="0"  />
        	    </div> 
        	    <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">
        	        <div style="margin: 30px;">
             	        <p>
                 	        Hello There! <br> <br>
                 	        You have a mail from SMEBD.net <br> <br>
                 	        Here are your details:<br><br>
             	        </p>
             	        <table style="text-align: left;">
             	            <tr>
             	                <th>Business Name</th>
                             <td>: {{ $request->business_name }}</td>
             	            </tr>
             	            <tr>
             	                <th>Loan Type </th>
                             <td>: {{ $request->loan_type }}</td>
             	            </tr>
             	            <tr>
             	                <th>Business Address </th>
             	                <td>: {{$request->business_address  }}</td>
             	            </tr>
             	            <tr>
             	                <th> Type Of Business </th>
             	                <td>: {{$request->type_of_business}}</td>
             	            </tr>
             	            <tr>
             	                <th>Monthly Sales </th>
             	                <td>: {{$request->monthly_sales}}</td>
             	            </tr>
             	        </table>
             	        <br>  <br>
             	       
                    Here is the link to access your area:<a href='{{ URL::to('/admin')}}'>LINK</a><br><br>
                            Please have a look on your admin dashboard for details. <br><br>
                            Once again, thank you!!!<br><br>
                        
             	        <div style="text-align: Right;">
             	            With warm regards,<br>
                            
             	        </div>
             	    </div>
        	    </div>   
        	</div>   
    	</div>
  	    <center>2019 © SMEBD. ALL Rights Reserved.</center>
    	</body>
	</html>	
