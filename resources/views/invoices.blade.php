<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Invoices</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table">
      <tr>
        <th>Date</th>
        <th>Last Name</th>
        <th colspan="2">First Name</th>
      </tr>
      @foreach($invoices as $invoice)
        <tr>
          <td>{{$invoice->InvoiceDate}}</td>
          <td>{{$invoice->LastName}}</td>
          <td>{{$invoice->FirstName}}</td>
          <td>
            <a href="/invoices/{{$invoice->InvoiceId}}">Details</a>
          </td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
