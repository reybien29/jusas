import defaultTheme from 'tailwindcss/defaultTheme.js';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Manrope', ...defaultTheme.fontFamily.sans],
                display: ['Epilogue', ...defaultTheme.fontFamily.sans],
                manrope: ['Manrope', ...defaultTheme.fontFamily.sans],
                epilogue: ['Epilogue', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                jusa: {
                    // Brand primary — Red
                    red: {
                        DEFAULT: '#D81C1C',
                        light: '#E53535',
                        dim: '#B81717',
                        dark: '#991313',
                        container: '#FFE0E0',
                    },
                    // CTAs & Prices — Deep Green
                    green: {
                        DEFAULT: '#2E7D32',
                        light: '#388E3C',
                        dim: '#2E7D32',
                        dark: '#1B5E20',
                        container: '#C8E6C9',
                    },
                    // Accent — Yellow
                    orange: {
                        DEFAULT: '#F5C800',
                        dark: '#C9A400',
                        dim: '#D4AB00',
                        container: '#FFF8CC',
                    },
                    // Tertiary accent (kept for dietary tags, error states)
                    coral: {
                        DEFAULT: '#E05252',
                        dark: '#B83030',
                        container: '#FECACA',
                    },
                    // Hero seasonal card — olive / mustard
                    olive: {
                        DEFAULT: '#6B7240',
                        light: '#7D8554',
                        dark: '#4F5630',
                    },
                    cream: '#FFF8EE',
                    surface: {
                        DEFAULT: '#FFF8EE',
                        low: '#FFF4E6',
                        base: '#FFF0DC',
                        high: '#FFE8CC',
                        highest: '#FFE0BB',
                        dim: '#F5D8B0',
                        bright: '#FFFCF6',
                    },
                    text: {
                        DEFAULT: '#1A1A1A',
                        muted: '#5A5A5A',
                        inverse: '#A0A0A0',
                    },
                    outline: {
                        DEFAULT: '#8A8A8A',
                        variant: '#C5C5C5',
                    },
                },
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '3rem',
            },
            backgroundImage: {
                'jusa-hero': 'linear-gradient(135deg, #D81C1C 0%, #991313 60%, #6B0D0D 100%)',
                'jusa-hero-light': 'linear-gradient(135deg, #E53535 0%, #D81C1C 100%)',
            },
            boxShadow: {
                'jusa': '0 8px 40px 0 rgba(216, 28, 28, 0.15)',
                'jusa-lg': '0 20px 60px 0 rgba(216, 28, 28, 0.22)',
                'jusa-green': '0 8px 40px 0 rgba(46, 125, 50, 0.15)',
                'card': '0 4px 20px 0 rgba(26, 26, 26, 0.08)',
                'card-hover': '0 12px 40px 0 rgba(26, 26, 26, 0.16)',
            },
            keyframes: {
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(24px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'fade-in': {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                'slide-down': {
                    '0%': { opacity: '0', transform: 'translateY(-8px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'pulse-soft': {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0.7' },
                },
            },
            animation: {
                'fade-up': 'fade-up 0.6s ease-out both',
                'fade-in': 'fade-in 0.4s ease-out both',
                'slide-down': 'slide-down 0.3s ease-out both',
                'pulse-soft': 'pulse-soft 2s ease-in-out infinite',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
