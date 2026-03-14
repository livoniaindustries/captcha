# CAPTCHA Verification Page

This project is a simple CAPTCHA verification page built with HTML, CSS, and JavaScript. It presents a user-friendly CAPTCHA challenge to prevent automated submissions.

## Features

- Responsive and centered CAPTCHA form
- Custom CAPTCHA code generation
- Client-side validation for CAPTCHA input
- Stylish design with CSS

## How It Works

1. When the page loads, a random 5-digit CAPTCHA code is generated and displayed.
2. The user is prompted to type the CAPTCHA code shown.
3. On form submission, JavaScript validates the input against the generated code.
4. If the CAPTCHA is correct, the form proceeds to submit; otherwise, an alert notifies the user of the mismatch.

## Usage

- Open the `captcha.php` file in your browser.
- Enter the CAPTCHA code as shown.
- Click "Continue" to validate.

## Customization

- You can modify the CAPTCHA code generation logic in the `<script>` section.
- Adjust styles in the `<style>` tag to match your design preferences.
- Change the form action URL as needed.

## License

This project is for educational purposes. Feel free to modify and use it as needed.

---

## Note

Ensure that your server-side script (`websafed.php`) correctly handles CAPTCHA verification if integrating with backend validation.

---

## Dependencies

- Pure HTML, CSS, and JavaScript (no external libraries required)
