<html>
<head>

</head>
<body>
<p>Query has been submitted using contact form.</p>
<h3>Query Details</h3>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td nowrap>Name</td>
        <td>{{ $request->get('name') }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $request->get('email') }}</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>{{ $request->get('message') }}</td>
    </tr>
</table>

<p>Thank you<br>iShout Media</p>
</body>
</html>