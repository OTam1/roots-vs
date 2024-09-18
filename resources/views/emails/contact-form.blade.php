<h2>New Contact Form Submission</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['tel'] ?? 'Not provided' }}</p>
<p><strong>LinkedIn:</strong> {{ $data['project-name'] ?? 'Not provided' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>

