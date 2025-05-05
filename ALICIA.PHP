<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moving Button</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Basic styling for the body to fill the viewport */
        body {
            width: 100vw;
            height: 100vh;
            overflow: hidden; /* Prevent scrollbars if button goes near edge */
            position: relative; /* Needed for absolute positioning of the button */
            background-color: #f0f0f0; /* Light gray background */
        }

        /* Style for the button - positioned absolutely */
        #movingButton {
            position: absolute;
            transition: top 0.3s ease-out, left 0.3s ease-out; /* Smooth transition for movement */
        }
    </style>
</head>
<body class="flex items-center justify-center">

    <button
        id="movingButton"
        class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
    >
        Click or Hover Me!
    </button>

    <script>
        const button = document.getElementById('movingButton');

        // Function to calculate and set a random position
        function moveButton() {
            // Get viewport dimensions
            const viewportWidth = window.innerWidth;
            const viewportHeight = window.innerHeight;

            // Get button dimensions
            const buttonWidth = button.offsetWidth;
            const buttonHeight = button.offsetHeight;

            // Calculate maximum possible top and left positions
            const maxTop = viewportHeight - buttonHeight;
            const maxLeft = viewportWidth - buttonWidth;

            // Generate random positions within bounds
            const randomTop = Math.random() * maxTop;
            const randomLeft = Math.random() * maxLeft;

            // Apply the new position
            button.style.top = randomTop + 'px';
            button.style.left = randomLeft + 'px';
        }

        // Add event listeners
        button.addEventListener('click', moveButton);
        button.addEventListener('mouseover', moveButton);

        // Initial position (optional, or let CSS handle initial placement)
        // You could call moveButton() here if you want it to start in a random spot
        // window.onload = moveButton; // Uncomment this line to start in a random position
    </script>

</body>
</html>
