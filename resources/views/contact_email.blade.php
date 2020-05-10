
<h1>Hello, Admin</h1>
<h4>You received an email from : {{ $name }}</h4>
Here are the details:
<table cellpadding="10">
    <tr>
      <th><b>Name:</b></th>
      <th><b>Email:</b></th>
      <th><b>Phone Number</b></th>
      <th><b>Subject:</b></th>
      <th><b>Message:</b></th>
    </tr>
    <tr>
      <td>{{ $name }}</td>
      <td>{{ $email }}</td>
      <td>{{ $phone_number }}</td>
      <td> {{ $subject }}</td>
      <td>{{ $user_message }}</td>
    </tr>
   
  </table>