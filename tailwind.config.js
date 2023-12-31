import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Figtree",
                    "Inter",
                    "Poppins",
                    ...defaultTheme.fontFamily.sans,
                ],
                'body': [
                    "Figtree",
                    "Inter",
                    "Poppins",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                tgray: "#EDEDED",
                tblue: "#3656FF",
                twhite: "#F5F5FA",
                tgray2: "#D7D8DC",
            },
        },
    },

    plugins: [forms],
};
