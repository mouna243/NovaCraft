 /** @type {import('tailwindcss').Config} */
export default {
   content: [
    "/public/index.php",
    "/views/about.php",
    "/views/contact.php",
    "/views/home.php",
    "/views/service.php",
    "/templates/header.php",
    "/templates/footer.php",
    "/templates/layout.php",
    "/src/**/*.{html,js}",
    "/auth/login.php",
    "/auth/logout.php",
    "/auth/register.php",
    "/templates/contactphp.php"
  ],
   theme: {
     extend: {},
   },
   plugins: [],
 }