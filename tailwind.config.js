module.exports = {
    purge: [],
    theme: {
        extend: {
            colors: {
                blue: {
                    lighter: "#508EAD",
                    default: "#4281A4"
                },
                red: {
                    default: "#FE938C",
                    darker: "#e02424"
                },
                yellow: "#EAD2AC"
            },
            boxShadow: {
                'outline-blue': '0 0 0 3px rgba(66, 129, 164,0.25)'
            }
        }
    },
    variants: {
        outline: ['focus', 'responsive', 'hover'],
        zIndex: ['responsive', 'hover', 'focus'],
        display: ['responsive', 'hover', 'focus',"group-hover"],
    },
    plugins: []
};
