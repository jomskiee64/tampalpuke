<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white shadow-lg rounded-2xl p-6 text-center w-96">
        
        <!-- Profile Picture -->
        <a href="https://github.com/YourGitHubUsername" target="_blank">
            <img src="{{ asset('images/mypicture.jpg') }}" 
                 alt="My Picture" 
                 class="w-32 h-32 mx-auto rounded-full border-4 border-indigo-500 hover:scale-105 transform transition">
        </a>

        <!-- Name -->
        <a href="https://github.com/YourGitHubUsername" target="_blank" 
           class="block mt-4 text-xl font-bold text-indigo-700 hover:underline">
            Your Full Name
        </a>

        <!-- Resume -->
        <a href="https://github.com/YourGitHubUsername/your-repo/raw/main/resume.pdf" 
           target="_blank"
           class="mt-6 inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
            View Resume
        </a>
    </div>

</body>
</html>