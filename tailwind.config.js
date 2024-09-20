/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            minWidth: {},
            textColor: {
                skin: {
                    base: withOpacity("--color-text-base"),
                    muted: withOpacity("--color-text-muted"),
                    inverted: withOpacity("--color-text-inverted"),
                },
            },
            backgroundColor: {
                skin: {
                    fill: withOpacity("--color-fill"),
                    "button-accent": withOpacity("--color-button-accent"),
                    "button-accent-hover": withOpacity(
                        "--color-button-accent-hover"
                    ),
                    "button-muted": withOpacity("--color-button-muted"),
                },
            },
            fontFamily: {
                "kode-mono": ["Kode Mono", "monospace"],
                jetbrains: ["JetBrains Mono", "monospace"],
            },
            backgroundImage: {
                "hero-pattern": "url('fondo.png')",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};

function withOpacity(variableName) {
    return ({ opacityValue }) => {
        if (opacityValue !== undefined) {
            return `rgba(var(${variableName}), ${opacityValue})`;
        }
        return `rgb(var(${variableName}))`;
    };
}
