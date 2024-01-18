<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Signup Form</title>
</head>

<body class="bg-gradient-to-br from-black to-green-600 overflow-x-hidden">


    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-black to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-7 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Please Signup For Paroly Website</h1>
                    </div>
                    <form onsubmit="return validateSignupForm()" action="<?php echo URLROOT ?>/Users/register" method="post">
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="username" name="username" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600"
                                        placeholder="Full name" oninput="validateUsername(this)">
                                    <label for="username"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Full
                                        Name</label>
                                    <small id="usernameError" class="text-red-500"></small>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="email" name="email" type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600"
                                        placeholder="Email address" oninput="validateEmail(this)">
                                    <label for="email"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                        Address</label>
                                    <small id="emailError" class="text-red-500"></small>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600"
                                        placeholder="Password" oninput="validatePassword(this)">
                                    <label for="password"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                    <small id="passwordError" class="text-red-500"></small>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="pwdRepeat" name="pwdRepeat" type="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600"
                                        placeholder="Repeat password" oninput="validatePasswordMatch(this)">
                                    <label for="pwdRepeat"
                                        class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Repeat
                                        Password</label>
                                    <small id="pwdRepeatError" class="text-red-500"></small>
                                </div>
                                <div class="relative">
                                    <label for="clientArtist" class="text-gray-700 font-bold mb-2">Select Client or Artist:</label>
                                    <select name="role_type" id="clientArtist"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-rose-600">
                                        <option value="1">Artist</option>
                                        <option value="2">Client</option>
                                    </select>
                                </div>
                                <div class="relative flex flex-col gap-3">
                                    <button
                                        class="bg-black text-white rounded-md px-2 py-1 w-fit duration-300 hover:scale-x-125 hover:scale-y-110 duration-300 hover:bg-green-600 hover:font-bold"
                                        type="submit">Sign Up</button>
                                    <p class="text-sm">Already have an account? <a
                                            class="text-end font-bold duration-500 hover:text-green-600"
                                            href="<?= URLROOT . '/Pages/login' ?>">Log In</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateUsername(input) {
            const value = input.value.trim();
            const usernameError = document.getElementById('usernameError');
            usernameError.textContent = value.length >= 3 ? '' : 'Username must be at least 3 characters';
        }

        function validateEmail(input) {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const isValid = emailRegex.test(input.value.trim());
            const emailError = document.getElementById('emailError');
            emailError.textContent = isValid ? '' : 'Enter a valid email address';
        }

        function validatePassword(input) {
            const value = input.value.trim();
            const passwordError = document.getElementById('passwordError');
            passwordError.textContent = value.length >= 6 ? '' : 'Password must be at least 6 characters';
        }

        function validatePasswordMatch(input) {
            const password = document.getElementById('password').value.trim();
            const repeatPassword = input.value.trim();
            const pwdRepeatError = document.getElementById('pwdRepeatError');
            pwdRepeatError.textContent = password === repeatPassword ? '' : 'Passwords do not match';
        }

        function validateSignupForm() {
            const usernameInput = document.getElementById('username');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const pwdRepeatInput = document.getElementById('pwdRepeat');

            validateUsername(usernameInput);
            validateEmail(emailInput);
            validatePassword(passwordInput);
            validatePasswordMatch(pwdRepeatInput);
            return (
                usernameInput.value.trim() !== '' &&
                emailInput.value.trim() !== '' &&
                passwordInput.value.trim() !== '' &&
                pwdRepeatInput.value.trim() !== '' &&
                document.getElementById('usernameError').textContent === '' &&
                document.getElementById('emailError').textContent === '' &&
                document.getElementById('passwordError').textContent === '' &&
                document.getElementById('pwdRepeatError').textContent === ''
            );
        }
    </script>
</body>

</html>