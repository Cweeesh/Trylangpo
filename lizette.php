<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6; /* Light gray background */
            font-family: 'Inter', sans-serif; /* Use Inter font */
        }
        /* Add transition for scale and shadow effects */
        .btn {
            transition: all 0.1s ease-in-out; /* Smooth transition for hover effects */
        }
    </style>
</head>
<body>

    <div class="calculator bg-gray-800 p-6 rounded-xl shadow-2xl w-80">
        <div class="display bg-gray-900 text-right text-white text-3xl p-4 rounded-md mb-4 overflow-hidden">
            <div id="result" class="truncate">0</div>
        </div>

        <div class="buttons grid grid-cols-4 gap-3">
            <button class="btn bg-gray-600 text-white p-4 rounded-lg hover:bg-gray-700 hover:scale-105 hover:shadow-lg transition duration-200 col-span-2" onclick="clearDisplay()">C</button>
            <button class="btn bg-yellow-600 text-white p-4 rounded-lg hover:bg-yellow-700 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('/')">/</button>
            <button class="btn bg-yellow-600 text-white p-4 rounded-lg hover:bg-yellow-700 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('*')">*</button>

            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('7')">7</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('8')">8</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('9')">9</button>
            <button class="btn bg-yellow-600 text-white p-4 rounded-lg hover:bg-yellow-700 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('-')">-</button>

            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('4')">4</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('5')">5</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('6')">6</button>
            <button class="btn bg-yellow-600 text-white p-4 rounded-lg hover:bg-yellow-700 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('+')">+</button>

            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('1')">1</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('2')">2</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('3')">3</button>
            <button class="btn bg-blue-600 text-white p-4 rounded-lg hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition duration-200 row-span-2 flex items-center justify-center" onclick="calculate()">=</button>

            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200 col-span-2" onclick="appendValue('0')">0</button>
            <button class="btn bg-gray-700 text-white p-4 rounded-lg hover:bg-gray-800 hover:scale-105 hover:shadow-lg transition duration-200" onclick="appendValue('.')">.</button>
        </div>
    </div>

    <script>
        const resultElement = document.getElementById('result');
        let currentInput = '0';
        let operator = null;
        let previousInput = null;

        // Function to update the display
        function updateDisplay() {
            resultElement.textContent = currentInput;
        }

        // Function to append a value to the current input
        function appendValue(value) {
            if (currentInput === '0' && value !== '.') {
                currentInput = value;
            } else {
                currentInput += value;
            }
            updateDisplay();
        }

        // Function to clear the display and reset values
        function clearDisplay() {
            currentInput = '0';
            operator = null;
            previousInput = null;
            updateDisplay();
        }

        // Function to calculate the result
        function calculate() {
            try {
                // Use eval() for simplicity in this example.
                // In a production app, you'd want a safer way to parse and evaluate.
                currentInput = eval(currentInput).toString();
                updateDisplay();
            } catch (error) {
                currentInput = 'Error';
                updateDisplay();
            }
        }

        // Initial display update
        updateDisplay();

    </script>

</body>
</html>
