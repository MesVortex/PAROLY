<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login Form</title>
</head>

<body class="bg-gradient-to-br from-black to-green-600 overflow-x-hidden">

    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-black to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-7 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Welcome Back! You Can Login Here</h1>
                    </div>
                    <form onsubmit="return validateLoginForm()" action="<?php echo URLROOT ?>/Users/login" method="post">
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="email" name="name/email" type="text"
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
                                <div class="relative flex flex-col gap-3">
                                    <button
                                        class="bg-black text-white rounded-md px-2 py-1 w-fit duration-300 hover:scale-x-125 hover:scale-y-110 duration-300 hover:bg-green-600 hover:font-bold"
                                        type="submit">Submit</button>
                                    <a class="text-end font-bold duration-500 hover:text-green-600"
                                        href="<?= URLROOT . '/pages/reset_password' ?>">Forget password</a>
                                    <p class="text-sm">If you don't have an account! You can <a
                                            class="text-end font-bold duration-500 hover:text-green-600"
                                            href="<?= URLROOT . '/Pages/signup' ?>">register Here</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
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

        function validateLoginForm() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            validateEmail(emailInput);
            validatePassword(passwordInput);

            // Additional form-level validation can be added here

            // Return true if the form is valid, false otherwise
            return emailInput.value.trim() !== '' && passwordInput.value.trim() !== '' &&
                document.getElementById('emailError').textContent === '' &&
                document.getElementById('passwordError').textContent === '';
        }
    </script>
</body>

</html>