<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <script>
        // Fetch the protected resource
        function fetchProtectedResource() {
            // Get the token from localStorage
            const token = localStorage.getItem('token');
            console.log(token);
            // Check if token exists
            if (!token) {
                console.error('Token not found in localStorage');
                return;
            }

            // Fetch the resource
            fetch('api/user', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token, // Use the token retrieved from localStorage
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Data:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        // Call the function to fetch the protected resource
        fetchProtectedResource();
    </script>

</body>
</html>
