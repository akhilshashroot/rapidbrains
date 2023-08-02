@import url(https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap);

:root {
    --bs-gray-100: #fefefe;
    --bs-gray-200: #f6f7f9;
    --bs-gray-300: #cacaca;
    --bs-gray-400: #aab0bc;
    --bs-gray-500: #959ca9;
    --bs-gray-600: #60697b;
    --bs-gray-700: #2f353a;
    --bs-gray-800: #21262c;
    --bs-gray-900: #1e2228;
    --bs-blue: #3f78e0;
    --bs-sky: #5eb9f0;
    --bs-purple: #747ed1;
    --bs-grape: #605dba;
    --bs-violet: #a07cc5;
    --bs-pink: #d16b86;
    --bs-fuchsia: #e668b3;
    --bs-red: #e2626b;
    --bs-orange: #f78b77;
    --bs-yellow: #fab758;
    --bs-green: #45c4a0;
    --bs-leaf: #7cb798;
    --bs-aqua: #54a8c7;
    --bs-navy: #343f52;
    --bs-ash: #9499a3;
    --bs-white: #fff;
    --bs-light: #fefefe;
    --bs-gray: #f6f7f9;
    --bs-dark: #262b32;
    --bs-primary: #3f78e0;
    --bs-secondary: #aab0bc;
    --bs-success: #45c4a0;
    --bs-info: #54a8c7;
    --bs-warning: #fab758;
    --bs-danger: #e2626b;
    --bs-blue-rgb: 63, 120, 224;
    --bs-sky-rgb: 94, 185, 240;
    --bs-purple-rgb: 116, 126, 209;
    --bs-grape-rgb: 96, 93, 186;
    --bs-violet-rgb: 160, 124, 197;
    --bs-pink-rgb: 209, 107, 134;
    --bs-fuchsia-rgb: 230, 104, 179;
    --bs-red-rgb: 226, 98, 107;
    --bs-orange-rgb: 247, 139, 119;
    --bs-yellow-rgb: 250, 183, 88;
    --bs-green-rgb: 69, 196, 160;
    --bs-leaf-rgb: 124, 183, 152;
    --bs-aqua-rgb: 84, 168, 199;
    --bs-navy-rgb: 52, 63, 82;
    --bs-ash-rgb: 148, 153, 163;
    --bs-white-rgb: 255, 255, 255;
    --bs-light-rgb: 254, 254, 254;
    --bs-gray-rgb: 246, 247, 249;
    --bs-dark-rgb: 38, 43, 50;
    --bs-primary-rgb: 63, 120, 224;
    --bs-secondary-rgb: 170, 176, 188;
    --bs-success-rgb: 69, 196, 160;
    --bs-info-rgb: 84, 168, 199;
    --bs-warning-rgb: 250, 183, 88;
    --bs-danger-rgb: 226, 98, 107;
    --bs-white-rgb: 255, 255, 255;
    --bs-black-rgb: 0, 0, 0;
    --bs-body-color-rgb: 96, 105, 123;
    --bs-body-bg-rgb: 254, 254, 254;
    --bs-font-sans-serif: "Manrope", sans-serif;
    --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --bs-root-font-size: 20px;
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 0.8rem;
    --bs-body-font-weight: 500;
    --bs-body-line-height: 1.7;
    --bs-body-color: #60697b;
    --bs-body-bg: #fefefe;
    --bs-border-width: 1px;
    --bs-border-style: solid;
    --bs-border-color: #cacaca;
    --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
    --bs-border-radius: 0.4rem;
    --bs-border-radius-sm: 0.2rem;
    --bs-border-radius-lg: 0.4rem;
    --bs-border-radius-xl: 0.8rem;
    --bs-border-radius-2xl: 2rem;
    --bs-border-radius-pill: 50rem;
    --bs-heading-color: #343f52;
    --bs-link-color: #3f78e0;
    --bs-link-hover-color: #3f78e0;
    --bs-code-color: #60697b;
    --bs-highlight-bg: #fef1de
}

*,
::after,
::before {
    box-sizing: border-box
}

:root {
    font-size: var(--bs-root-font-size)
}

body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: .5rem;
    font-weight: 700;
    line-height: 1.2;
    color: #000
}

.h2,
h2 {
    font-size: calc(1.255rem + .06vw)
}

@media (min-width:1200px) {

    .h2,
    h2 {
        font-size: 1.3rem
    }
}

.h3,
h3 {
    font-size: 1.1rem
}

.h4,
h4 {
    font-size: .95rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

.btn-outline-white:hover,
.btn-white,
.btn-white.btn-play:hover,
.btn-white:focus,
.btn-white:not(.btn-play):hover {
    color: #343f52 !important
}

ol,
ul {
    padding-left: 2rem
}

dl,
ol,
ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0
}

a {
    color: var(--bs-link-color);
    text-decoration: none
}

figure {
    margin: 0 0 1rem
}

img,
svg {
    vertical-align: middle
}

table {
    caption-side: bottom;
    border-collapse: collapse
}

th {
    text-align: inherit;
    text-align: -webkit-match-parent
}

tbody,
td,
tfoot,
th,
thead,
tr {
    border-color: inherit;
    border-style: solid;
    border-width: 0
}

label {
    display: inline-block
}

button,
input,
optgroup,
select,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

[type=button],
[type=reset],
[type=submit],
button {
    -webkit-appearance: button
}

[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled),
button:not(:disabled) {
    cursor: pointer
}

.lead {
    font-size: .9rem;
    font-weight: 500
}

.display-1 {
    font-size: calc(1.365rem + 1.38vw);
    font-weight: 700;
    line-height: 1.2
}

@media (min-width:1200px) {
    .display-1 {
        font-size: 2.4rem
    }
}

.display-2 {
    font-size: calc(1.345rem + 1.14vw);
    font-weight: 700;
    line-height: 1.2
}

@media (min-width:1200px) {
    .display-2 {
        font-size: 2.2rem
    }
}

.display-3 {
    font-size: calc(1.325rem + .9vw);
    font-weight: 700;
    line-height: 1.2
}

@media (min-width:1200px) {
    .display-3 {
        font-size: 2rem
    }
}

.display-4 {
    font-size: calc(1.305rem + .66vw);
    font-weight: 700;
    line-height: 1.2
}

@media (min-width:1200px) {
    .display-4 {
        font-size: 1.8rem
    }
}

.display-6 {
    font-size: calc(1.265rem + .18vw);
    font-weight: 700;
    line-height: 1.2
}

@media (min-width:1200px) {
    .display-6 {
        font-size: 1.4rem
    }
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-right: auto;
    margin-left: auto
}

@media (min-width:576px) {

    .container,
    .container-sm {
        max-width: 540px
    }
}

@media (min-width:768px) {

    .container,
    .container-md,
    .container-sm {
        max-width: 720px
    }
}

@media (min-width:992px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm {
        max-width: 960px
    }
}

@media (min-width:1200px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        max-width: 1140px
    }
}

@media (min-width:1400px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        max-width: 1320px
    }
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x))
}

.row>* {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y)
}

.row-cols-1>* {
    flex: 0 0 auto;
    width: 100%
}

.g-5,
.gy-5 {
    --bs-gutter-y: 1.25rem
}

.g-6,
.gy-6 {
    --bs-gutter-y: 1.5rem
}

.g-8,
.gy-8 {
    --bs-gutter-y: 2rem
}

.g-10,
.gy-10 {
    --bs-gutter-y: 2.5rem
}

.g-3,
.gx-3 {
    --bs-gutter-x: 0.75rem
}

.g-3,
.gy-3 {
    --bs-gutter-y: 0.75rem
}

@media (min-width:768px) {
    .col-md {
        flex: 1 0 0%
    }

    .row-cols-md-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-md-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-md-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-md-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-md-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-md-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-md-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .row-cols-md-7>* {
        flex: 0 0 auto;
        width: 14.2857142857%
    }

    .row-cols-md-8>* {
        flex: 0 0 auto;
        width: 12.5%
    }

    .row-cols-md-9>* {
        flex: 0 0 auto;
        width: 11.1111111111%
    }

    .row-cols-md-10>* {
        flex: 0 0 auto;
        width: 10%
    }

    .row-cols-md-11>* {
        flex: 0 0 auto;
        width: 9.0909090909%
    }

    .row-cols-md-12>* {
        flex: 0 0 auto;
        width: 8.3333333333%
    }

    .col-md-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-md-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-md-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-md-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-md-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-md-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-md-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-md-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-md-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-md-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-md-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-md-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-md-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.33333333%
    }

    .offset-md-2 {
        margin-left: 16.66666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.33333333%
    }

    .offset-md-5 {
        margin-left: 41.66666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.33333333%
    }

    .offset-md-8 {
        margin-left: 66.66666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.33333333%
    }

    .offset-md-11 {
        margin-left: 91.66666667%
    }

    .g-md-0,
    .gx-md-0 {
        --bs-gutter-x: 0
    }

    .g-md-0,
    .gy-md-0 {
        --bs-gutter-y: 0
    }

    .g-md-1,
    .gx-md-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-md-1,
    .gy-md-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-md-2,
    .gx-md-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-md-2,
    .gy-md-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-md-3,
    .gx-md-3 {
        --bs-gutter-x: 0.75rem
    }

    .g-md-3,
    .gy-md-3 {
        --bs-gutter-y: 0.75rem
    }

    .g-md-4,
    .gx-md-4 {
        --bs-gutter-x: 1rem
    }

    .g-md-4,
    .gy-md-4 {
        --bs-gutter-y: 1rem
    }

    .g-md-5,
    .gx-md-5 {
        --bs-gutter-x: 1.25rem
    }

    .g-md-5,
    .gy-md-5 {
        --bs-gutter-y: 1.25rem
    }

    .g-md-6,
    .gx-md-6 {
        --bs-gutter-x: 1.5rem
    }

    .g-md-6,
    .gy-md-6 {
        --bs-gutter-y: 1.5rem
    }

    .g-md-7,
    .gx-md-7 {
        --bs-gutter-x: 1.75rem
    }

    .g-md-7,
    .gy-md-7 {
        --bs-gutter-y: 1.75rem
    }

    .g-md-8,
    .gx-md-8 {
        --bs-gutter-x: 2rem
    }

    .g-md-8,
    .gy-md-8 {
        --bs-gutter-y: 2rem
    }

    .g-md-9,
    .gx-md-9 {
        --bs-gutter-x: 2.25rem
    }

    .g-md-9,
    .gy-md-9 {
        --bs-gutter-y: 2.25rem
    }

    .g-md-10,
    .gx-md-10 {
        --bs-gutter-x: 2.5rem
    }

    .g-md-10,
    .gy-md-10 {
        --bs-gutter-y: 2.5rem
    }

    .g-md-11,
    .gx-md-11 {
        --bs-gutter-x: 3rem
    }

    .g-md-11,
    .gy-md-11 {
        --bs-gutter-y: 3rem
    }

    .g-md-12,
    .gx-md-12 {
        --bs-gutter-x: 3.5rem
    }

    .g-md-12,
    .gy-md-12 {
        --bs-gutter-y: 3.5rem
    }

    .g-md-13,
    .gx-md-13 {
        --bs-gutter-x: 4rem
    }

    .g-md-13,
    .gy-md-13 {
        --bs-gutter-y: 4rem
    }

    .g-md-14,
    .gx-md-14 {
        --bs-gutter-x: 4.5rem
    }

    .g-md-14,
    .gy-md-14 {
        --bs-gutter-y: 4.5rem
    }

    .g-md-15,
    .gx-md-15 {
        --bs-gutter-x: 5rem
    }

    .g-md-15,
    .gy-md-15 {
        --bs-gutter-y: 5rem
    }

    .g-md-16,
    .gx-md-16 {
        --bs-gutter-x: 6rem
    }

    .g-md-16,
    .gy-md-16 {
        --bs-gutter-y: 6rem
    }

    .g-md-17,
    .gx-md-17 {
        --bs-gutter-x: 7rem
    }

    .g-md-17,
    .gy-md-17 {
        --bs-gutter-y: 7rem
    }

    .g-md-18,
    .gx-md-18 {
        --bs-gutter-x: 8rem
    }

    .g-md-18,
    .gy-md-18 {
        --bs-gutter-y: 8rem
    }

    .g-md-19,
    .gx-md-19 {
        --bs-gutter-x: 9rem
    }

    .g-md-19,
    .gy-md-19 {
        --bs-gutter-y: 9rem
    }

    .g-md-20,
    .gx-md-20 {
        --bs-gutter-x: 10rem
    }

    .g-md-20,
    .gy-md-20 {
        --bs-gutter-y: 10rem
    }

    .g-md-21,
    .gx-md-21 {
        --bs-gutter-x: 12.5rem
    }

    .g-md-21,
    .gy-md-21 {
        --bs-gutter-y: 12.5rem
    }

    .g-md-22,
    .gx-md-22 {
        --bs-gutter-x: 15rem
    }

    .g-md-22,
    .gy-md-22 {
        --bs-gutter-y: 15rem
    }

    .g-md-23,
    .gx-md-23 {
        --bs-gutter-x: 17.5rem
    }

    .g-md-23,
    .gy-md-23 {
        --bs-gutter-y: 17.5rem
    }

    .g-md-24,
    .gx-md-24 {
        --bs-gutter-x: 20rem
    }

    .g-md-24,
    .gy-md-24 {
        --bs-gutter-y: 20rem
    }

    .g-md-25,
    .gx-md-25 {
        --bs-gutter-x: 22.5rem
    }

    .g-md-25,
    .gy-md-25 {
        --bs-gutter-y: 22.5rem
    }
}

@media (min-width:992px) {
    .col-lg {
        flex: 1 0 0%
    }

    .row-cols-lg-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-lg-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-lg-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-lg-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-lg-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-lg-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-lg-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .row-cols-lg-7>* {
        flex: 0 0 auto;
        width: 14.2857142857%
    }

    .row-cols-lg-8>* {
        flex: 0 0 auto;
        width: 12.5%
    }

    .row-cols-lg-9>* {
        flex: 0 0 auto;
        width: 11.1111111111%
    }

    .row-cols-lg-10>* {
        flex: 0 0 auto;
        width: 10%
    }

    .row-cols-lg-11>* {
        flex: 0 0 auto;
        width: 9.0909090909%
    }

    .row-cols-lg-12>* {
        flex: 0 0 auto;
        width: 8.3333333333%
    }

    .col-lg-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-lg-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-lg-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-lg-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-lg-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-lg-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-lg-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-lg-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-lg-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-lg-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.33333333%
    }

    .offset-lg-2 {
        margin-left: 16.66666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.33333333%
    }

    .offset-lg-5 {
        margin-left: 41.66666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.33333333%
    }

    .offset-lg-8 {
        margin-left: 66.66666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.33333333%
    }

    .offset-lg-11 {
        margin-left: 91.66666667%
    }

    .g-lg-0,
    .gx-lg-0 {
        --bs-gutter-x: 0
    }

    .g-lg-0,
    .gy-lg-0 {
        --bs-gutter-y: 0
    }

    .g-lg-1,
    .gx-lg-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-lg-1,
    .gy-lg-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-lg-2,
    .gx-lg-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-lg-2,
    .gy-lg-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-lg-3,
    .gx-lg-3 {
        --bs-gutter-x: 0.75rem
    }

    .g-lg-3,
    .gy-lg-3 {
        --bs-gutter-y: 0.75rem
    }

    .g-lg-4,
    .gx-lg-4 {
        --bs-gutter-x: 1rem
    }

    .g-lg-4,
    .gy-lg-4 {
        --bs-gutter-y: 1rem
    }

    .g-lg-5,
    .gx-lg-5 {
        --bs-gutter-x: 1.25rem
    }

    .g-lg-5,
    .gy-lg-5 {
        --bs-gutter-y: 1.25rem
    }

    .g-lg-6,
    .gx-lg-6 {
        --bs-gutter-x: 1.5rem
    }

    .g-lg-6,
    .gy-lg-6 {
        --bs-gutter-y: 1.5rem
    }

    .g-lg-7,
    .gx-lg-7 {
        --bs-gutter-x: 1.75rem
    }

    .g-lg-7,
    .gy-lg-7 {
        --bs-gutter-y: 1.75rem
    }

    .g-lg-8,
    .gx-lg-8 {
        --bs-gutter-x: 2rem
    }

    .g-lg-8,
    .gy-lg-8 {
        --bs-gutter-y: 2rem
    }

    .g-lg-9,
    .gx-lg-9 {
        --bs-gutter-x: 2.25rem
    }

    .g-lg-9,
    .gy-lg-9 {
        --bs-gutter-y: 2.25rem
    }

    .g-lg-10,
    .gx-lg-10 {
        --bs-gutter-x: 2.5rem
    }

    .g-lg-10,
    .gy-lg-10 {
        --bs-gutter-y: 2.5rem
    }

    .g-lg-11,
    .gx-lg-11 {
        --bs-gutter-x: 3rem
    }

    .g-lg-11,
    .gy-lg-11 {
        --bs-gutter-y: 3rem
    }

    .g-lg-12,
    .gx-lg-12 {
        --bs-gutter-x: 3.5rem
    }

    .g-lg-12,
    .gy-lg-12 {
        --bs-gutter-y: 3.5rem
    }

    .g-lg-13,
    .gx-lg-13 {
        --bs-gutter-x: 4rem
    }

    .g-lg-13,
    .gy-lg-13 {
        --bs-gutter-y: 4rem
    }

    .g-lg-14,
    .gx-lg-14 {
        --bs-gutter-x: 4.5rem
    }

    .g-lg-14,
    .gy-lg-14 {
        --bs-gutter-y: 4.5rem
    }

    .g-lg-15,
    .gx-lg-15 {
        --bs-gutter-x: 5rem
    }

    .g-lg-15,
    .gy-lg-15 {
        --bs-gutter-y: 5rem
    }

    .g-lg-16,
    .gx-lg-16 {
        --bs-gutter-x: 6rem
    }

    .g-lg-16,
    .gy-lg-16 {
        --bs-gutter-y: 6rem
    }

    .g-lg-17,
    .gx-lg-17 {
        --bs-gutter-x: 7rem
    }

    .g-lg-17,
    .gy-lg-17 {
        --bs-gutter-y: 7rem
    }

    .g-lg-18,
    .gx-lg-18 {
        --bs-gutter-x: 8rem
    }

    .g-lg-18,
    .gy-lg-18 {
        --bs-gutter-y: 8rem
    }

    .g-lg-19,
    .gx-lg-19 {
        --bs-gutter-x: 9rem
    }

    .g-lg-19,
    .gy-lg-19 {
        --bs-gutter-y: 9rem
    }

    .g-lg-20,
    .gx-lg-20 {
        --bs-gutter-x: 10rem
    }

    .g-lg-20,
    .gy-lg-20 {
        --bs-gutter-y: 10rem
    }

    .g-lg-21,
    .gx-lg-21 {
        --bs-gutter-x: 12.5rem
    }

    .g-lg-21,
    .gy-lg-21 {
        --bs-gutter-y: 12.5rem
    }

    .g-lg-22,
    .gx-lg-22 {
        --bs-gutter-x: 15rem
    }

    .g-lg-22,
    .gy-lg-22 {
        --bs-gutter-y: 15rem
    }

    .g-lg-23,
    .gx-lg-23 {
        --bs-gutter-x: 17.5rem
    }

    .g-lg-23,
    .gy-lg-23 {
        --bs-gutter-y: 17.5rem
    }

    .g-lg-24,
    .gx-lg-24 {
        --bs-gutter-x: 20rem
    }

    .g-lg-24,
    .gy-lg-24 {
        --bs-gutter-y: 20rem
    }

    .g-lg-25,
    .gx-lg-25 {
        --bs-gutter-x: 22.5rem
    }

    .g-lg-25,
    .gy-lg-25 {
        --bs-gutter-y: 22.5rem
    }
}

@media (min-width:1200px) {
    .col-xl {
        flex: 1 0 0%
    }

    .row-cols-xl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xl-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-xl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xl-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .row-cols-xl-7>* {
        flex: 0 0 auto;
        width: 14.2857142857%
    }

    .row-cols-xl-8>* {
        flex: 0 0 auto;
        width: 12.5%
    }

    .row-cols-xl-9>* {
        flex: 0 0 auto;
        width: 11.1111111111%
    }

    .row-cols-xl-10>* {
        flex: 0 0 auto;
        width: 10%
    }

    .row-cols-xl-11>* {
        flex: 0 0 auto;
        width: 9.0909090909%
    }

    .row-cols-xl-12>* {
        flex: 0 0 auto;
        width: 8.3333333333%
    }

    .col-xl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.33333333%
    }

    .offset-xl-2 {
        margin-left: 16.66666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.33333333%
    }

    .offset-xl-5 {
        margin-left: 41.66666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.33333333%
    }

    .offset-xl-8 {
        margin-left: 66.66666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.33333333%
    }

    .offset-xl-11 {
        margin-left: 91.66666667%
    }

    .g-xl-0,
    .gx-xl-0 {
        --bs-gutter-x: 0
    }

    .g-xl-0,
    .gy-xl-0 {
        --bs-gutter-y: 0
    }

    .g-xl-1,
    .gx-xl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xl-1,
    .gy-xl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xl-2,
    .gx-xl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xl-2,
    .gy-xl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xl-3,
    .gx-xl-3 {
        --bs-gutter-x: 0.75rem
    }

    .g-xl-3,
    .gy-xl-3 {
        --bs-gutter-y: 0.75rem
    }

    .g-xl-4,
    .gx-xl-4 {
        --bs-gutter-x: 1rem
    }

    .g-xl-4,
    .gy-xl-4 {
        --bs-gutter-y: 1rem
    }

    .g-xl-5,
    .gx-xl-5 {
        --bs-gutter-x: 1.25rem
    }

    .g-xl-5,
    .gy-xl-5 {
        --bs-gutter-y: 1.25rem
    }

    .g-xl-6,
    .gx-xl-6 {
        --bs-gutter-x: 1.5rem
    }

    .g-xl-6,
    .gy-xl-6 {
        --bs-gutter-y: 1.5rem
    }

    .g-xl-7,
    .gx-xl-7 {
        --bs-gutter-x: 1.75rem
    }

    .g-xl-7,
    .gy-xl-7 {
        --bs-gutter-y: 1.75rem
    }

    .g-xl-8,
    .gx-xl-8 {
        --bs-gutter-x: 2rem
    }

    .g-xl-8,
    .gy-xl-8 {
        --bs-gutter-y: 2rem
    }

    .g-xl-9,
    .gx-xl-9 {
        --bs-gutter-x: 2.25rem
    }

    .g-xl-9,
    .gy-xl-9 {
        --bs-gutter-y: 2.25rem
    }

    .g-xl-10,
    .gx-xl-10 {
        --bs-gutter-x: 2.5rem
    }

    .g-xl-10,
    .gy-xl-10 {
        --bs-gutter-y: 2.5rem
    }

    .g-xl-11,
    .gx-xl-11 {
        --bs-gutter-x: 3rem
    }

    .g-xl-11,
    .gy-xl-11 {
        --bs-gutter-y: 3rem
    }

    .g-xl-12,
    .gx-xl-12 {
        --bs-gutter-x: 3.5rem
    }

    .g-xl-12,
    .gy-xl-12 {
        --bs-gutter-y: 3.5rem
    }

    .g-xl-13,
    .gx-xl-13 {
        --bs-gutter-x: 4rem
    }

    .g-xl-13,
    .gy-xl-13 {
        --bs-gutter-y: 4rem
    }

    .g-xl-14,
    .gx-xl-14 {
        --bs-gutter-x: 4.5rem
    }

    .g-xl-14,
    .gy-xl-14 {
        --bs-gutter-y: 4.5rem
    }

    .g-xl-15,
    .gx-xl-15 {
        --bs-gutter-x: 5rem
    }

    .g-xl-15,
    .gy-xl-15 {
        --bs-gutter-y: 5rem
    }

    .g-xl-16,
    .gx-xl-16 {
        --bs-gutter-x: 6rem
    }

    .g-xl-16,
    .gy-xl-16 {
        --bs-gutter-y: 6rem
    }

    .g-xl-17,
    .gx-xl-17 {
        --bs-gutter-x: 7rem
    }

    .g-xl-17,
    .gy-xl-17 {
        --bs-gutter-y: 7rem
    }

    .g-xl-18,
    .gx-xl-18 {
        --bs-gutter-x: 8rem
    }

    .g-xl-18,
    .gy-xl-18 {
        --bs-gutter-y: 8rem
    }

    .g-xl-19,
    .gx-xl-19 {
        --bs-gutter-x: 9rem
    }

    .g-xl-19,
    .gy-xl-19 {
        --bs-gutter-y: 9rem
    }

    .g-xl-20,
    .gx-xl-20 {
        --bs-gutter-x: 10rem
    }

    .g-xl-20,
    .gy-xl-20 {
        --bs-gutter-y: 10rem
    }

    .g-xl-21,
    .gx-xl-21 {
        --bs-gutter-x: 12.5rem
    }

    .g-xl-21,
    .gy-xl-21 {
        --bs-gutter-y: 12.5rem
    }

    .g-xl-22,
    .gx-xl-22 {
        --bs-gutter-x: 15rem
    }

    .g-xl-22,
    .gy-xl-22 {
        --bs-gutter-y: 15rem
    }

    .g-xl-23,
    .gx-xl-23 {
        --bs-gutter-x: 17.5rem
    }

    .g-xl-23,
    .gy-xl-23 {
        --bs-gutter-y: 17.5rem
    }

    .g-xl-24,
    .gx-xl-24 {
        --bs-gutter-x: 20rem
    }

    .g-xl-24,
    .gy-xl-24 {
        --bs-gutter-y: 20rem
    }

    .g-xl-25,
    .gx-xl-25 {
        --bs-gutter-x: 22.5rem
    }

    .g-xl-25,
    .gy-xl-25 {
        --bs-gutter-y: 22.5rem
    }
}

@media (min-width:1400px) {
    .col-xxl {
        flex: 1 0 0%
    }

    .row-cols-xxl-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-xxl-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-xxl-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-xxl-3>* {
        flex: 0 0 auto;
        width: 33.3333333333%
    }

    .row-cols-xxl-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-xxl-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-xxl-6>* {
        flex: 0 0 auto;
        width: 16.6666666667%
    }

    .row-cols-xxl-7>* {
        flex: 0 0 auto;
        width: 14.2857142857%
    }

    .row-cols-xxl-8>* {
        flex: 0 0 auto;
        width: 12.5%
    }

    .row-cols-xxl-9>* {
        flex: 0 0 auto;
        width: 11.1111111111%
    }

    .row-cols-xxl-10>* {
        flex: 0 0 auto;
        width: 10%
    }

    .row-cols-xxl-11>* {
        flex: 0 0 auto;
        width: 9.0909090909%
    }

    .row-cols-xxl-12>* {
        flex: 0 0 auto;
        width: 8.3333333333%
    }

    .col-xxl-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-xxl-1 {
        flex: 0 0 auto;
        width: 8.33333333%
    }

    .col-xxl-2 {
        flex: 0 0 auto;
        width: 16.66666667%
    }

    .col-xxl-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-xxl-4 {
        flex: 0 0 auto;
        width: 33.33333333%
    }

    .col-xxl-5 {
        flex: 0 0 auto;
        width: 41.66666667%
    }

    .col-xxl-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-xxl-7 {
        flex: 0 0 auto;
        width: 58.33333333%
    }

    .col-xxl-8 {
        flex: 0 0 auto;
        width: 66.66666667%
    }

    .col-xxl-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-xxl-10 {
        flex: 0 0 auto;
        width: 83.33333333%
    }

    .col-xxl-11 {
        flex: 0 0 auto;
        width: 91.66666667%
    }

    .col-xxl-12 {
        flex: 0 0 auto;
        width: 100%
    }

    .offset-xxl-0 {
        margin-left: 0
    }

    .offset-xxl-1 {
        margin-left: 8.33333333%
    }

    .offset-xxl-2 {
        margin-left: 16.66666667%
    }

    .offset-xxl-3 {
        margin-left: 25%
    }

    .offset-xxl-4 {
        margin-left: 33.33333333%
    }

    .offset-xxl-5 {
        margin-left: 41.66666667%
    }

    .offset-xxl-6 {
        margin-left: 50%
    }

    .offset-xxl-7 {
        margin-left: 58.33333333%
    }

    .offset-xxl-8 {
        margin-left: 66.66666667%
    }

    .offset-xxl-9 {
        margin-left: 75%
    }

    .offset-xxl-10 {
        margin-left: 83.33333333%
    }

    .offset-xxl-11 {
        margin-left: 91.66666667%
    }

    .g-xxl-0,
    .gx-xxl-0 {
        --bs-gutter-x: 0
    }

    .g-xxl-0,
    .gy-xxl-0 {
        --bs-gutter-y: 0
    }

    .g-xxl-1,
    .gx-xxl-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-xxl-1,
    .gy-xxl-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-xxl-2,
    .gx-xxl-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-xxl-2,
    .gy-xxl-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-xxl-3,
    .gx-xxl-3 {
        --bs-gutter-x: 0.75rem
    }

    .g-xxl-3,
    .gy-xxl-3 {
        --bs-gutter-y: 0.75rem
    }

    .g-xxl-4,
    .gx-xxl-4 {
        --bs-gutter-x: 1rem
    }

    .g-xxl-4,
    .gy-xxl-4 {
        --bs-gutter-y: 1rem
    }

    .g-xxl-5,
    .gx-xxl-5 {
        --bs-gutter-x: 1.25rem
    }

    .g-xxl-5,
    .gy-xxl-5 {
        --bs-gutter-y: 1.25rem
    }

    .g-xxl-6,
    .gx-xxl-6 {
        --bs-gutter-x: 1.5rem
    }

    .g-xxl-6,
    .gy-xxl-6 {
        --bs-gutter-y: 1.5rem
    }

    .g-xxl-7,
    .gx-xxl-7 {
        --bs-gutter-x: 1.75rem
    }

    .g-xxl-7,
    .gy-xxl-7 {
        --bs-gutter-y: 1.75rem
    }

    .g-xxl-8,
    .gx-xxl-8 {
        --bs-gutter-x: 2rem
    }

    .g-xxl-8,
    .gy-xxl-8 {
        --bs-gutter-y: 2rem
    }

    .g-xxl-9,
    .gx-xxl-9 {
        --bs-gutter-x: 2.25rem
    }

    .g-xxl-9,
    .gy-xxl-9 {
        --bs-gutter-y: 2.25rem
    }

    .g-xxl-10,
    .gx-xxl-10 {
        --bs-gutter-x: 2.5rem
    }

    .g-xxl-10,
    .gy-xxl-10 {
        --bs-gutter-y: 2.5rem
    }

    .g-xxl-11,
    .gx-xxl-11 {
        --bs-gutter-x: 3rem
    }

    .g-xxl-11,
    .gy-xxl-11 {
        --bs-gutter-y: 3rem
    }

    .g-xxl-12,
    .gx-xxl-12 {
        --bs-gutter-x: 3.5rem
    }

    .g-xxl-12,
    .gy-xxl-12 {
        --bs-gutter-y: 3.5rem
    }

    .g-xxl-13,
    .gx-xxl-13 {
        --bs-gutter-x: 4rem
    }

    .g-xxl-13,
    .gy-xxl-13 {
        --bs-gutter-y: 4rem
    }

    .g-xxl-14,
    .gx-xxl-14 {
        --bs-gutter-x: 4.5rem
    }

    .g-xxl-14,
    .gy-xxl-14 {
        --bs-gutter-y: 4.5rem
    }

    .g-xxl-15,
    .gx-xxl-15 {
        --bs-gutter-x: 5rem
    }

    .g-xxl-15,
    .gy-xxl-15 {
        --bs-gutter-y: 5rem
    }

    .g-xxl-16,
    .gx-xxl-16 {
        --bs-gutter-x: 6rem
    }

    .g-xxl-16,
    .gy-xxl-16 {
        --bs-gutter-y: 6rem
    }

    .g-xxl-17,
    .gx-xxl-17 {
        --bs-gutter-x: 7rem
    }

    .g-xxl-17,
    .gy-xxl-17 {
        --bs-gutter-y: 7rem
    }

    .g-xxl-18,
    .gx-xxl-18 {
        --bs-gutter-x: 8rem
    }

    .g-xxl-18,
    .gy-xxl-18 {
        --bs-gutter-y: 8rem
    }

    .g-xxl-19,
    .gx-xxl-19 {
        --bs-gutter-x: 9rem
    }

    .g-xxl-19,
    .gy-xxl-19 {
        --bs-gutter-y: 9rem
    }

    .g-xxl-20,
    .gx-xxl-20 {
        --bs-gutter-x: 10rem
    }

    .g-xxl-20,
    .gy-xxl-20 {
        --bs-gutter-y: 10rem
    }

    .g-xxl-21,
    .gx-xxl-21 {
        --bs-gutter-x: 12.5rem
    }

    .g-xxl-21,
    .gy-xxl-21 {
        --bs-gutter-y: 12.5rem
    }

    .g-xxl-22,
    .gx-xxl-22 {
        --bs-gutter-x: 15rem
    }

    .g-xxl-22,
    .gy-xxl-22 {
        --bs-gutter-y: 15rem
    }

    .g-xxl-23,
    .gx-xxl-23 {
        --bs-gutter-x: 17.5rem
    }

    .g-xxl-23,
    .gy-xxl-23 {
        --bs-gutter-y: 17.5rem
    }

    .g-xxl-24,
    .gx-xxl-24 {
        --bs-gutter-x: 20rem
    }

    .g-xxl-24,
    .gy-xxl-24 {
        --bs-gutter-y: 20rem
    }

    .g-xxl-25,
    .gx-xxl-25 {
        --bs-gutter-x: 22.5rem
    }

    .g-xxl-25,
    .gy-xxl-25 {
        --bs-gutter-y: 22.5rem
    }
}

.table {
    --bs-table-color: #60697b;
    --bs-table-bg: transparent;
    --bs-table-border-color: #edeff3;
    --bs-table-accent-bg: transparent;
    --bs-table-striped-color: #60697b;
    --bs-table-striped-bg: rgba(164, 174, 198, 0.07);
    --bs-table-active-color: #60697b;
    --bs-table-active-bg: rgba(164, 174, 198, 0.07);
    --bs-table-hover-color: #60697b;
    --bs-table-hover-bg: rgba(164, 174, 198, 0.07);
    width: 100%;
    margin-bottom: 1rem;
    color: var(--bs-table-color);
    vertical-align: top;
    border-color: var(--bs-table-border-color)
}

.table>:not(caption)>*>* {
    padding: .9rem .9rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg)
}

.table>tbody {
    vertical-align: inherit
}

.table>thead {
    vertical-align: bottom
}

.table-borderless>:not(caption)>*>* {
    border-bottom-width: 0
}

.table-borderless>:not(:first-child) {
    border-top-width: 0
}

.table-striped>tbody>tr:nth-of-type(odd)>* {
    --bs-table-accent-bg: var(--bs-table-striped-bg);
    color: var(--bs-table-striped-color)
}

.table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

.form-control {
    display: block;
    width: 100%;
    padding: .6rem 1rem;
    font-size: .75rem;
    font-weight: 500;
    line-height: 1.7;
    color: #60697b;
    background-color: #fefefe;
    background-clip: padding-box;
    border: 1px solid rgba(8, 60, 130, .07);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: .4rem;
    box-shadow: 0 0 1.25rem rgba(30, 34, 40, .04);
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}

.form-control::placeholder {
    color: #959ca9;
    opacity: 1
}

.form-floating {
    position: relative
}

.form-floating>.form-control,
.form-floating>.form-control-plaintext,
.form-floating>.form-select {
    height: calc(2.5rem + 2px);
    line-height: 1.25
}

.form-floating>label {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: .6rem 1rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    pointer-events: none;
    border: 1px solid transparent;
    transform-origin: 0 0;
    transition: opacity .1s ease-in-out, transform .1s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .form-floating>label {
        transition: none
    }
}

.form-floating>.form-control,
.form-floating>.form-control-plaintext {
    padding: .6rem 1rem
}

.form-floating>.form-control-plaintext::placeholder,
.form-floating>.form-control::placeholder {
    color: transparent
}

.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%
}

.input-group>.form-control,
.input-group>.form-floating,
.input-group>.form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0
}

.input-group .btn {
    position: relative;
    z-index: 2
}

.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select,
.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.form-floating:not(:first-child)>.form-control,
.input-group>.form-floating:not(:first-child)>.form-select,
.input-group>:not(:first-child):not(.dropdown-menu):not(.form-floating):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.form-floating>.form-control-plaintext:focus,
.form-floating>.form-control-plaintext:not(:placeholder-shown),
.form-floating>.form-control:focus,
.form-floating>.form-control:not(:placeholder-shown) {
    padding-top: 1rem;
    padding-bottom: .2rem
}

.form-floating>.form-control-plaintext:-webkit-autofill,
.form-floating>.form-control:-webkit-autofill {
    padding-top: 1rem;
    padding-bottom: .2rem
}

.form-floating>.form-select {
    padding-top: 1rem;
    padding-bottom: .2rem
}

.form-floating>.form-control:not(:-moz-placeholder-shown)~label {
    opacity: 1;
    transform: scale(.8) translateY(-.4rem) translateX(.2rem)
}

.form-floating>.form-control:not(:-ms-input-placeholder)~label {
    opacity: 1;
    transform: scale(.8) translateY(-.4rem) translateX(.2rem)
}

.form-floating>.form-control-plaintext~label,
.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label,
.form-floating>.form-select~label {
    opacity: 1;
    transform: scale(.8) translateY(-.4rem) translateX(.2rem)
}

.form-floating>.form-control:-webkit-autofill~label {
    opacity: 1;
    transform: scale(.8) translateY(-.4rem) translateX(.2rem)
}

.btn {
    --bs-btn-padding-x: 1.2rem;
    --bs-btn-padding-y: 0.5rem;
    --bs-btn-font-family: ;
    --bs-btn-font-size: 0.8rem;
    --bs-btn-font-weight: 700;
    --bs-btn-line-height: 1.7;
    --bs-btn-color: #60697b;
    --bs-btn-bg: transparent;
    --bs-btn-border-width: 2px;
    --bs-btn-border-color: transparent;
    --bs-btn-border-radius: 0.4rem;
    --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
    --bs-btn-disabled-opacity: 0.65;
    --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
    display: inline-block;
    padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
    font-family: var(--bs-btn-font-family);
    font-size: var(--bs-btn-font-size);
    font-weight: var(--bs-btn-font-weight);
    line-height: var(--bs-btn-line-height);
    color: var(--bs-btn-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
    border-radius: var(--bs-btn-border-radius);
    background-color: var(--bs-btn-bg);
    box-shadow: var(--bs-btn-box-shadow);
    transition: all .2s ease-in-out
}

.btn-navy {
    --bs-btn-color: #fff;
    --bs-btn-bg: #343f52;
    --bs-btn-border-color: #343f52;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #2c3646;
    --bs-btn-hover-border-color: #2a3242;
    --bs-btn-focus-shadow-rgb: 82, 92, 108;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #2a3242;
    --bs-btn-active-border-color: #272f3e;
    --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #343f52;
    --bs-btn-disabled-border-color: #343f52
}

.btn-white {
    --bs-btn-color: #343f52;
    --bs-btn-bg: #fff;
    --bs-btn-border-color: #fff;
    --bs-btn-hover-color: #343f52;
    --bs-btn-hover-bg: white;
    --bs-btn-hover-border-color: white;
    --bs-btn-focus-shadow-rgb: 225, 226, 229;
    --bs-btn-active-color: #343f52;
    --bs-btn-active-bg: white;
    --bs-btn-active-border-color: white;
    --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
    --bs-btn-disabled-color: #343f52;
    --bs-btn-disabled-bg: #fff;
    --bs-btn-disabled-border-color: #fff
}

.btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #3f78e0;
    --bs-btn-border-color: #3f78e0;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #3666be;
    --bs-btn-hover-border-color: #3260b3;
    --bs-btn-focus-shadow-rgb: 92, 140, 229;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #3260b3;
    --bs-btn-active-border-color: #2f5aa8;
    --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #3f78e0;
    --bs-btn-disabled-border-color: #3f78e0
}

.btn-group-lg>.btn,
.btn-lg {
    --bs-btn-padding-y: 0.65rem;
    --bs-btn-padding-x: 1.4rem;
    --bs-btn-font-size: 0.85rem;
    --bs-btn-border-radius: 0.4rem
}

.btn-group-sm>.btn,
.btn-sm {
    --bs-btn-padding-y: 0.4rem;
    --bs-btn-padding-x: 1rem;
    --bs-btn-font-size: 0.7rem;
    --bs-btn-border-radius: 0.4rem
}

.fade {
    transition: opacity .15s linear
}

.fade:not(.show) {
    opacity: 0
}

.dropdown,
.dropdown-center,
.dropend,
.dropstart,
.dropup,
.dropup-center {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    font-family: Unicons;
    display: inline-block;
    margin-left: .05rem;
    vertical-align: -3px;
    font-weight: 700 !important;
    content: "";
    border: 0;
    content: "\e92d"
}

.dropdown-menu {
    --bs-dropdown-min-width: 10rem;
    --bs-dropdown-padding-x: 0;
    --bs-dropdown-padding-y: 1rem;
    --bs-dropdown-spacer: 0.75rem;
    --bs-dropdown-font-size: 0.75rem;
    --bs-dropdown-color: #343f52;
    --bs-dropdown-bg: #fff;
    --bs-dropdown-border-color: transparent;
    --bs-dropdown-border-radius: 0.4rem;
    --bs-dropdown-border-width: 1px;
    --bs-dropdown-inner-border-radius: calc(0.4rem - 1px);
    --bs-dropdown-divider-bg: transparent;
    --bs-dropdown-divider-margin-y: 0.5rem;
    --bs-dropdown-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.06);
    --bs-dropdown-link-color: #343f52;
    --bs-dropdown-link-hover-color: #3f78e0;
    --bs-dropdown-link-hover-bg: inherit;
    --bs-dropdown-link-active-color: #3f78e0;
    --bs-dropdown-link-active-bg: inherit;
    --bs-dropdown-link-disabled-color: #60697b;
    --bs-dropdown-item-padding-x: 1.5rem;
    --bs-dropdown-item-padding-y: 0.2rem;
    --bs-dropdown-header-color: #3f78e0;
    --bs-dropdown-header-padding-x: 1.5rem;
    --bs-dropdown-header-padding-y: 0.5rem;
    position: absolute;
    z-index: 1000;
    display: none;
    min-width: var(--bs-dropdown-min-width);
    padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
    margin: 0;
    font-size: var(--bs-dropdown-font-size);
    color: var(--bs-dropdown-color);
    text-align: left;
    list-style: none;
    background-color: var(--bs-dropdown-bg);
    background-clip: padding-box;
    border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
    border-radius: var(--bs-dropdown-border-radius);
    box-shadow: var(--bs-dropdown-box-shadow)
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 500;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-menu.show {
    display: block
}

.nav {
    --bs-nav-link-padding-x: 1rem;
    --bs-nav-link-padding-y: 1.2rem;
    --bs-nav-link-font-size: 0.8rem;
    --bs-nav-link-font-weight: 700;
    --bs-nav-link-color: #343f52;
    --bs-nav-link-hover-color: #3f78e0;
    --bs-nav-link-disabled-color: #959ca9;
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color: var(--bs-nav-link-color);
    transition: color .2s ease-in-out
}

.nav-link:focus,
.nav-link:hover {
    color: var(--bs-nav-link-hover-color)
}

.navbar {
    --bs-navbar-padding-x: 0;
    --bs-navbar-padding-y: 0;
    --bs-navbar-color: #343f52;
    --bs-navbar-hover-color: #3f78e0;
    --bs-navbar-disabled-color: rgba(52, 63, 82, 0.3);
    --bs-navbar-active-color: #3f78e0;
    --bs-navbar-brand-padding-y: 0;
    --bs-navbar-brand-margin-end: 0;
    --bs-navbar-brand-font-size: 0.7rem;
    --bs-navbar-brand-color: #3f78e0;
    --bs-navbar-brand-hover-color: #3f78e0;
    --bs-navbar-nav-link-padding-x: 1rem;
    --bs-navbar-toggler-padding-y: 0.25rem;
    --bs-navbar-toggler-padding-x: 0.75rem;
    --bs-navbar-toggler-font-size: 1rem;
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='45' height='32' viewBox='0 0 45 32'%3e%3cpath fill='%233f78e0' d='M26.88 29.888c-1.076 1.289-2.683 2.103-4.48 2.103s-3.404-0.814-4.472-2.093l-0.008-0.009-5.12-7.040-8.192-10.048-3.52-4.608c-0.646-0.848-1.036-1.922-1.036-3.087 0-2.828 2.292-5.12 5.12-5.12 0.139 0 0.277 0.006 0.413 0.016l-0.018-0.001h33.664c0.118-0.010 0.256-0.015 0.396-0.015 2.828 0 5.12 2.292 5.12 5.12 0 1.165-0.389 2.239-1.045 3.1l0.009-0.013-3.52 4.608-7.872 10.048z'/%3e%3c/svg%3e");
    --bs-navbar-toggler-border-color: transparent;
    --bs-navbar-toggler-border-radius: 0.4rem;
    --bs-navbar-toggler-focus-width: 0.25rem;
    --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x)
}

.navbar>.container,
.navbar>.container-fluid,
.navbar>.container-lg,
.navbar>.container-md,
.navbar>.container-sm,
.navbar>.container-xl,
.navbar>.container-xxl {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between
}

.navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: var(--bs-navbar-brand-color);
    white-space: nowrap
}

.navbar-nav {
    --bs-nav-link-padding-x: 0;
    --bs-nav-link-padding-y: 1.2rem;
    --bs-nav-link-font-size: 0.8rem;
    --bs-nav-link-font-weight: 700;
    --bs-nav-link-color: var(--bs-navbar-color);
    --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
    --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .dropdown-menu {
    position: static
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center
}

@media (min-width:992px) {
    .navbar-expand-lg {
        flex-wrap: nowrap;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: var(--bs-navbar-nav-link-padding-x);
        padding-left: var(--bs-navbar-nav-link-padding-x)
    }

    .navbar-expand-lg .navbar-nav-scroll {
        overflow: visible
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }

    .navbar-expand-lg .offcanvas {
        position: static;
        z-index: auto;
        flex-grow: 1;
        width: auto !important;
        height: auto !important;
        visibility: visible !important;
        background-color: transparent !important;
        border: 0 !important;
        transform: none !important;
        box-shadow: none;
        transition: none
    }

    .navbar-expand-lg .offcanvas .offcanvas-header {
        display: none
    }

    .navbar-expand-lg .offcanvas .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible
    }
}

.navbar-dark {
    --bs-navbar-color: #fff;
    --bs-navbar-hover-color: rgba(255, 255, 255, 0.7);
    --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
    --bs-navbar-active-color: rgba(255, 255, 255, 0.7);
    --bs-navbar-brand-color: rgba(255, 255, 255, 0.7);
    --bs-navbar-brand-hover-color: rgba(255, 255, 255, 0.7);
    --bs-navbar-toggler-border-color: transparent;
    --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='45' height='32' viewBox='0 0 45 32'%3e%3cpath fill='%23fff' d='M26.88 29.888c-1.076 1.289-2.683 2.103-4.48 2.103s-3.404-0.814-4.472-2.093l-0.008-0.009-5.12-7.040-8.192-10.048-3.52-4.608c-0.646-0.848-1.036-1.922-1.036-3.087 0-2.828 2.292-5.12 5.12-5.12 0.139 0 0.277 0.006 0.413 0.016l-0.018-0.001h33.664c0.118-0.010 0.256-0.015 0.396-0.015 2.828 0 5.12 2.292 5.12 5.12 0 1.165-0.389 2.239-1.045 3.1l0.009-0.013-3.52 4.608-7.872 10.048z'/%3e%3c/svg%3e")
}

.card {
    --bs-card-spacer-y: 2rem;
    --bs-card-spacer-x: 2rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: rgba(164, 174, 198, 0.2);
    --bs-card-border-radius: 0.4rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: 0.4rem;
    --bs-card-cap-padding-y: 0.9rem;
    --bs-card-cap-padding-x: 2rem;
    --bs-card-cap-bg: transparent;
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
    box-shadow: var(--bs-card-box-shadow)
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color)
}

.badge {
    --bs-badge-padding-x: 0.7em;
    --bs-badge-padding-y: 0.4em;
    --bs-badge-font-size: 0.75em;
    --bs-badge-font-weight: 700;
    --bs-badge-color: #fff;
    --bs-badge-border-radius: 0.4rem;
    display: inline-block;
    padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
    font-size: var(--bs-badge-font-size);
    font-weight: var(--bs-badge-font-weight);
    line-height: 1;
    color: var(--bs-badge-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: var(--bs-badge-border-radius)
}

.modal {
    --bs-modal-zindex: 1055;
    --bs-modal-width: 560px;
    --bs-modal-padding: 2.5rem;
    --bs-modal-margin: 0.5rem;
    --bs-modal-color: ;
    --bs-modal-bg: #fff;
    --bs-modal-border-color: var(--bs-border-color-translucent);
    --bs-modal-border-width: 0;
    --bs-modal-border-radius: 0.4rem;
    --bs-modal-box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    --bs-modal-inner-border-radius: 0.4rem;
    --bs-modal-header-padding-x: 2.5rem;
    --bs-modal-header-padding-y: 2.5rem;
    --bs-modal-header-padding: 2.5rem 2.5rem;
    --bs-modal-header-border-color: var(--bs-border-color);
    --bs-modal-header-border-width: 0;
    --bs-modal-title-line-height: 1.7;
    --bs-modal-footer-gap: 0.5rem;
    --bs-modal-footer-bg: ;
    --bs-modal-footer-border-color: var(--bs-border-color);
    --bs-modal-footer-border-width: 0;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-modal-zindex);
    display: none;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: var(--bs-modal-margin);
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: transform .3s ease-out;
    transform: translate(0, -50px)
}

@media (prefers-reduced-motion:reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    transform: none
}

.modal.modal-static .modal-dialog {
    transform: scale(1.02)
}

.modal-dialog-scrollable {
    height: calc(100% - var(--bs-modal-margin) * 2)
}

.modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - var(--bs-modal-margin) * 2)
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    box-shadow: var(--bs-modal-box-shadow);
    outline: 0
}

.modal-backdrop {
    --bs-backdrop-zindex: 1050;
    --bs-backdrop-bg: rgba(30, 34, 40, 0.9);
    --bs-backdrop-opacity: 1;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    width: 100vw;
    height: 100vh;
    background-color: var(--bs-backdrop-bg)
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: var(--bs-backdrop-opacity)
}

.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-modal-header-padding);
    border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
    border-top-left-radius: var(--bs-modal-inner-border-radius);
    border-top-right-radius: var(--bs-modal-inner-border-radius)
}

.modal-header .btn-close {
    padding: calc(var(--bs-modal-header-padding-y) * .5) calc(var(--bs-modal-header-padding-x) * .5);
    margin: calc(var(--bs-modal-header-padding-y) * -.5) calc(var(--bs-modal-header-padding-x) * -.5) calc(var(--bs-modal-header-padding-y) * -.5) auto
}

.modal-title {
    margin-bottom: 0;
    line-height: var(--bs-modal-title-line-height)
}

.modal-body {
    position: relative;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding)
}

.modal-footer {
    display: flex;
    flex-shrink: 0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * .5);
    background-color: var(--bs-modal-footer-bg);
    border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
    border-bottom-right-radius: var(--bs-modal-inner-border-radius);
    border-bottom-left-radius: var(--bs-modal-inner-border-radius)
}

.modal-footer>* {
    margin: calc(var(--bs-modal-footer-gap) * .5)
}

@media (min-width:576px) {
    .modal {
        --bs-modal-margin: 1.75rem;
        --bs-modal-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04)
    }

    .modal-dialog {
        max-width: var(--bs-modal-width);
        margin-right: auto;
        margin-left: auto
    }

    .modal-sm {
        --bs-modal-width: 450px
    }
}

@media (min-width:992px) {

    .modal-lg,
    .modal-xl {
        --bs-modal-width: 800px
    }
}

@media (min-width:1200px) {
    .modal-xl {
        --bs-modal-width: 1140px
    }
}

.modal-fullscreen {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0
}

.modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0
}

.modal-fullscreen .modal-footer,
.modal-fullscreen .modal-header {
    border-radius: 0
}

.modal-fullscreen .modal-body {
    overflow-y: auto
}

@media (max-width:575.98px) {
    .modal-fullscreen-sm-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-sm-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-sm-down .modal-footer,
    .modal-fullscreen-sm-down .modal-header {
        border-radius: 0
    }

    .modal-fullscreen-sm-down .modal-body {
        overflow-y: auto
    }
}

@media (max-width:767.98px) {
    .modal-fullscreen-md-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-md-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-md-down .modal-footer,
    .modal-fullscreen-md-down .modal-header {
        border-radius: 0
    }

    .modal-fullscreen-md-down .modal-body {
        overflow-y: auto
    }
}

@media (max-width:991.98px) {
    .modal-fullscreen-lg-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-lg-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-lg-down .modal-footer,
    .modal-fullscreen-lg-down .modal-header {
        border-radius: 0
    }

    .modal-fullscreen-lg-down .modal-body {
        overflow-y: auto
    }
}

@media (max-width:1199.98px) {
    .modal-fullscreen-xl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-xl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-xl-down .modal-footer,
    .modal-fullscreen-xl-down .modal-header {
        border-radius: 0
    }

    .modal-fullscreen-xl-down .modal-body {
        overflow-y: auto
    }
}

@media (max-width:1399.98px) {
    .modal-fullscreen-xxl-down {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0
    }

    .modal-fullscreen-xxl-down .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0
    }

    .modal-fullscreen-xxl-down .modal-footer,
    .modal-fullscreen-xxl-down .modal-header {
        border-radius: 0
    }

    .modal-fullscreen-xxl-down .modal-body {
        overflow-y: auto
    }
}

.offcanvas,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm,
.offcanvas-xl,
.offcanvas-xxl {
    --bs-offcanvas-width: 15rem;
    --bs-offcanvas-height: 30vh;
    --bs-offcanvas-padding-x: 1.5rem;
    --bs-offcanvas-padding-y: 1.5rem;
    --bs-offcanvas-color: #fff;
    --bs-offcanvas-bg: #1e2228;
    --bs-offcanvas-border-width: 0;
    --bs-offcanvas-border-color: transparent;
    --bs-offcanvas-box-shadow: none
}

@media (max-width:767.98px) and (prefers-reduced-motion:reduce) {
    .offcanvas-md {
        transition: none
    }
}

@media (max-width:767.98px) {
    .offcanvas-md.offcanvas-start {
        top: 0;
        left: 0;
        width: var(--bs-offcanvas-width);
        border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(-100%)
    }
}

@media (max-width:767.98px) {
    .offcanvas-md.offcanvas-end {
        top: 0;
        right: 0;
        width: var(--bs-offcanvas-width);
        border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateX(100%)
    }
}

@media (max-width:767.98px) {
    .offcanvas-md.offcanvas-top {
        top: 0;
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(-100%)
    }
}

@media (max-width:767.98px) {
    .offcanvas-md.offcanvas-bottom {
        right: 0;
        left: 0;
        height: var(--bs-offcanvas-height);
        max-height: 100%;
        border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
        transform: translateY(100%)
    }
}

@media (max-width:767.98px) {

    .offcanvas-md.show:not(.hiding),
    .offcanvas-md.showing {
        transform: none
    }
}

@media (max-width:767.98px) {

    .offcanvas-md.hiding,
    .offcanvas-md.show,
    .offcanvas-md.showing {
        visibility: visible
    }
}

.offcanvas.show:not(.hiding),
.offcanvas.showing {
    transform: none
}

.offcanvas.hiding,
.offcanvas.show,
.offcanvas.showing {
    visibility: visible
}

@media (min-width:768px) {
    .offcanvas-md {
        --bs-offcanvas-height: auto;
        --bs-offcanvas-border-width: 0;
        background-color: transparent !important
    }

    .offcanvas-md .offcanvas-header {
        display: none
    }

    .offcanvas-md .offcanvas-body {
        display: flex;
        flex-grow: 0;
        padding: 0;
        overflow-y: visible;
        background-color: transparent !important
    }
}

@media (max-width:991.98px) {
    .offcanvas-lg {
        position: fixed;
        bottom: 0;
        z-index: 1045;
        display: flex;
        flex-direction: column;
        max-width: 100%;
        color: var(--bs-offcanvas-color);
        visibility: hidden;
        background-color: var(--bs-offcanvas-bg);
        background-clip: padding-box;
        outline: 0;
        box-shadow: var(--bs-offcanvas-box-shadow);
        transition: transform .3s ease-in-out
    }
}

.offcanvas {
    position: fixed;
    bottom: 0;
    z-index: 1045;
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: transform .3s ease-in-out
}

.offcanvas.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%)
}

.offcanvas-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x)
}

.offcanvas-body {
    flex-grow: 1;
    padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
    overflow-y: auto
}

.overflow-hidden {
    overflow: hidden !important
}

.d-flex {
    display: flex !important
}

.d-none {
    display: none !important
}

.shadow-lg {
    box-shadow: 0 .25rem 1.75rem rgba(30, 34, 40, .07) !important
}

.shadow-none {
    box-shadow: none !important
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important
}

.top-0 {
    top: 0 !important
}

.top-50 {
    top: 50% !important
}

.top-100 {
    top: 100% !important
}

.bottom-0 {
    bottom: 0 !important
}

.bottom-50 {
    bottom: 50% !important
}

.bottom-100 {
    bottom: 100% !important
}

.start-0 {
    left: 0 !important
}

.start-50 {
    left: 50% !important
}

.start-100 {
    left: 100% !important
}

.end-0 {
    right: 0 !important
}

.end-50 {
    right: 50% !important
}

.end-100 {
    right: 100% !important
}

.translate-middle {
    transform: translate(-50%, -50%) !important
}

.translate-middle-x {
    transform: translateX(-50%) !important
}

.translate-middle-y {
    transform: translateY(-50%) !important
}

.border-purple {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-purple-rgb), var(--bs-border-opacity)) !important
}

.border-pink {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-pink-rgb), var(--bs-border-opacity)) !important
}

.border-red {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-red-rgb), var(--bs-border-opacity)) !important
}

.border-orange {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-orange-rgb), var(--bs-border-opacity)) !important
}

.border-yellow {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-yellow-rgb), var(--bs-border-opacity)) !important
}

.border-green {
    --bs-border-opacity: 1;
    border-color: rgba(var(--bs-green-rgb), var(--bs-border-opacity)) !important
}

.w-25 {
    width: 22.5rem !important
}

.w-50 {
    width: 50% !important
}

.w-75 {
    width: 75% !important
}

.w-100 {
    width: 100% !important
}

.w-auto {
    width: auto !important
}

.w-11 {
    width: 3rem !important
}

.mw-100 {
    max-width: 100% !important
}

.vw-100 {
    width: 100vw !important
}

.min-vw-100 {
    min-width: 100vw !important
}

.h-25 {
    height: 22.5rem !important
}

.h-50 {
    height: 50% !important
}

.h-75 {
    height: 75% !important
}

.h-100 {
    height: 100% !important
}

.h-auto {
    height: auto !important
}

.h-11 {
    height: 3rem !important
}

.flex-row {
    flex-direction: row !important
}

.flex-column {
    flex-direction: column !important
}

.flex-row-reverse {
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    flex-direction: column-reverse !important
}

.flex-grow-0 {
    flex-grow: 0 !important
}

.flex-grow-1 {
    flex-grow: 1 !important
}

.flex-shrink-0 {
    flex-shrink: 0 !important
}

.flex-shrink-1 {
    flex-shrink: 1 !important
}

.flex-wrap {
    flex-wrap: wrap !important
}

.flex-nowrap {
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    flex-wrap: wrap-reverse !important
}

.justify-content-center {
    justify-content: center !important
}

.align-items-start {
    align-items: flex-start !important
}

.align-items-center {
    align-items: center !important
}

.align-self-start {
    align-self: flex-start !important
}

.align-self-end {
    align-self: flex-end !important
}

.m-0 {
    margin: 0 !important
}

.m-1 {
    margin: .25rem !important
}

.m-2 {
    margin: .5rem !important
}

.m-3 {
    margin: .75rem !important
}

.m-4 {
    margin: 1rem !important
}

.m-5 {
    margin: 1.25rem !important
}

.m-6 {
    margin: 1.5rem !important
}

.m-7 {
    margin: 1.75rem !important
}

.m-8 {
    margin: 2rem !important
}

.m-9 {
    margin: 2.25rem !important
}

.m-10 {
    margin: 2.5rem !important
}

.m-11 {
    margin: 3rem !important
}

.m-12 {
    margin: 3.5rem !important
}

.m-13 {
    margin: 4rem !important
}

.m-14 {
    margin: 4.5rem !important
}

.m-15 {
    margin: 5rem !important
}

.m-16 {
    margin: 6rem !important
}

.m-17 {
    margin: 7rem !important
}

.m-18 {
    margin: 8rem !important
}

.m-19 {
    margin: 9rem !important
}

.m-20 {
    margin: 10rem !important
}

.m-21 {
    margin: 12.5rem !important
}

.m-22 {
    margin: 15rem !important
}

.m-23 {
    margin: 17.5rem !important
}

.m-24 {
    margin: 20rem !important
}

.m-25 {
    margin: 22.5rem !important
}

.m-auto {
    margin: auto !important
}

.mx-0 {
    margin-right: 0 !important;
    margin-left: 0 !important
}

.mx-1 {
    margin-right: .25rem !important;
    margin-left: .25rem !important
}

.mx-2 {
    margin-right: .5rem !important;
    margin-left: .5rem !important
}

.mx-3 {
    margin-right: .75rem !important;
    margin-left: .75rem !important
}

.mx-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important
}

.mx-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important
}

.mx-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important
}

.mx-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important
}

.mx-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important
}

.mx-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important
}

.mx-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important
}

.mx-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important
}

.mx-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important
}

.mx-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important
}

.mx-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important
}

.mx-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important
}

.mx-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important
}

.mx-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important
}

.mx-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important
}

.mx-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important
}

.mx-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important
}

.mx-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important
}

.mx-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important
}

.mx-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important
}

.mx-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important
}

.mx-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important
}

.my-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important
}

.my-1 {
    margin-top: .25rem !important;
    margin-bottom: .25rem !important
}

.my-2 {
    margin-top: .5rem !important;
    margin-bottom: .5rem !important
}

.my-3 {
    margin-top: .75rem !important;
    margin-bottom: .75rem !important
}

.my-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important
}

.my-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important
}

.my-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important
}

.my-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important
}

.my-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important
}

.my-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important
}

.my-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important
}

.my-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important
}

.my-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important
}

.my-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important
}

.my-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important
}

.my-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important
}

.my-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important
}

.my-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important
}

.my-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important
}

.my-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important
}

.my-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important
}

.my-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important
}

.my-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important
}

.my-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important
}

.my-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important
}

.my-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important
}

.mt-0 {
    margin-top: 0 !important
}

.mt-1 {
    margin-top: .25rem !important
}

.mt-2 {
    margin-top: .5rem !important
}

.mt-3 {
    margin-top: .75rem !important
}

.mt-4 {
    margin-top: 1rem !important
}

.mt-5 {
    margin-top: 1.25rem !important
}

.mt-6 {
    margin-top: 1.5rem !important
}

.mt-7 {
    margin-top: 1.75rem !important
}

.mt-8 {
    margin-top: 2rem !important
}

.mt-9 {
    margin-top: 2.25rem !important
}

.mt-10 {
    margin-top: 2.5rem !important
}

.mt-11 {
    margin-top: 3rem !important
}

.mt-12 {
    margin-top: 3.5rem !important
}

.mt-13 {
    margin-top: 4rem !important
}

.mt-14 {
    margin-top: 4.5rem !important
}

.mt-15 {
    margin-top: 5rem !important
}

.mt-16 {
    margin-top: 6rem !important
}

.mt-17 {
    margin-top: 7rem !important
}

.mt-18 {
    margin-top: 8rem !important
}

.mt-19 {
    margin-top: 9rem !important
}

.mt-20 {
    margin-top: 10rem !important
}

.mt-21 {
    margin-top: 12.5rem !important
}

.mt-22 {
    margin-top: 15rem !important
}

.mt-23 {
    margin-top: 17.5rem !important
}

.mt-24 {
    margin-top: 20rem !important
}

.mt-25 {
    margin-top: 22.5rem !important
}

.mt-auto {
    margin-top: auto !important
}

.me-0 {
    margin-right: 0 !important
}

.me-1 {
    margin-right: .25rem !important
}

.me-2 {
    margin-right: .5rem !important
}

.me-3 {
    margin-right: .75rem !important
}

.me-4 {
    margin-right: 1rem !important
}

.mb-0 {
    margin-bottom: 0 !important
}

.mb-1 {
    margin-bottom: .25rem !important
}

.mb-2 {
    margin-bottom: .5rem !important
}

.mb-3 {
    margin-bottom: .75rem !important
}

.mb-4 {
    margin-bottom: 1rem !important
}

.mb-5 {
    margin-bottom: 1.25rem !important
}

.mb-6 {
    margin-bottom: 1.5rem !important
}

.mb-7 {
    margin-bottom: 1.75rem !important
}

.mb-8 {
    margin-bottom: 2rem !important
}

.mb-9 {
    margin-bottom: 2.25rem !important
}

.mb-10 {
    margin-bottom: 2.5rem !important
}

.mb-13 {
    margin-bottom: 4rem !important
}

.mb-14 {
    margin-bottom: 4.5rem !important
}

.mt-n21 {
    margin-top: -12.5rem !important
}

.p-3 {
    padding: .75rem !important
}

.p-5 {
    padding: 1.25rem !important
}

.p-6 {
    padding: 1.5rem !important
}

.px-0 {
    padding-right: 0 !important;
    padding-left: 0 !important
}

.px-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important
}

.py-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important
}

.py-1 {
    padding-top: .25rem !important;
    padding-bottom: .25rem !important
}

.py-2 {
    padding-top: .5rem !important;
    padding-bottom: .5rem !important
}

.py-3 {
    padding-top: .75rem !important;
    padding-bottom: .75rem !important
}

.py-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important
}

.py-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important
}

.py-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important
}

.py-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important
}

.py-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important
}

.py-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important
}

.py-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important
}

.py-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important
}

.py-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important
}

.py-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important
}

.py-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important
}

.py-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important
}

.py-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important
}

.py-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important
}

.py-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important
}

.py-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important
}

.py-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important
}

.py-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important
}

.py-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important
}

.py-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important
}

.py-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important
}

.py-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important
}

.pt-0 {
    padding-top: 0 !important
}

.pt-1 {
    padding-top: .25rem !important
}

.pt-2 {
    padding-top: .5rem !important
}

.pt-3 {
    padding-top: .75rem !important
}

.pt-4 {
    padding-top: 1rem !important
}

.pt-5 {
    padding-top: 1.25rem !important
}

.pt-6 {
    padding-top: 1.5rem !important
}

.pt-7 {
    padding-top: 1.75rem !important
}

.pt-8 {
    padding-top: 2rem !important
}

.pt-9 {
    padding-top: 2.25rem !important
}

.pt-10 {
    padding-top: 2.5rem !important
}

.pt-11 {
    padding-top: 3rem !important
}

.pt-12 {
    padding-top: 3.5rem !important
}

.pt-13 {
    padding-top: 4rem !important
}

.pt-14 {
    padding-top: 4.5rem !important
}

.pt-15 {
    padding-top: 5rem !important
}

.pt-16 {
    padding-top: 6rem !important
}

.pt-17 {
    padding-top: 7rem !important
}

.pt-18 {
    padding-top: 8rem !important
}

.pt-19 {
    padding-top: 9rem !important
}

.pt-20 {
    padding-top: 10rem !important
}

.pt-21 {
    padding-top: 12.5rem !important
}

.pt-22 {
    padding-top: 15rem !important
}

.pt-23 {
    padding-top: 17.5rem !important
}

.pt-24 {
    padding-top: 20rem !important
}

.pt-25 {
    padding-top: 22.5rem !important
}

.pe-0 {
    padding-right: 0 !important
}

.pe-1 {
    padding-right: .25rem !important
}

.pe-2 {
    padding-right: .5rem !important
}

.pe-3 {
    padding-right: .75rem !important
}

.pe-4 {
    padding-right: 1rem !important
}

.pe-5 {
    padding-right: 1.25rem !important
}

.pe-6 {
    padding-right: 1.5rem !important
}

.pe-7 {
    padding-right: 1.75rem !important
}

.pe-8 {
    padding-right: 2rem !important
}

.pe-9 {
    padding-right: 2.25rem !important
}

.pe-10 {
    padding-right: 2.5rem !important
}

.pe-11 {
    padding-right: 3rem !important
}

.pe-12 {
    padding-right: 3.5rem !important
}

.pe-13 {
    padding-right: 4rem !important
}

.pe-14 {
    padding-right: 4.5rem !important
}

.pe-15 {
    padding-right: 5rem !important
}

.pe-16 {
    padding-right: 6rem !important
}

.pe-17 {
    padding-right: 7rem !important
}

.pe-18 {
    padding-right: 8rem !important
}

.pe-19 {
    padding-right: 9rem !important
}

.pe-20 {
    padding-right: 10rem !important
}

.pe-21 {
    padding-right: 12.5rem !important
}

.pe-22 {
    padding-right: 15rem !important
}

.pe-23 {
    padding-right: 17.5rem !important
}

.pe-24 {
    padding-right: 20rem !important
}

.pe-25 {
    padding-right: 22.5rem !important
}

.pb-0 {
    padding-bottom: 0 !important
}

.pb-1 {
    padding-bottom: .25rem !important
}

.pb-2 {
    padding-bottom: .5rem !important
}

.pb-3 {
    padding-bottom: .75rem !important
}

.pb-4 {
    padding-bottom: 1rem !important
}

.pb-5 {
    padding-bottom: 1.25rem !important
}

.pb-6 {
    padding-bottom: 1.5rem !important
}

.pb-7 {
    padding-bottom: 1.75rem !important
}

.pb-8 {
    padding-bottom: 2rem !important
}

.pb-9 {
    padding-bottom: 2.25rem !important
}

.pb-10 {
    padding-bottom: 2.5rem !important
}

.pb-11 {
    padding-bottom: 3rem !important
}

.pb-12 {
    padding-bottom: 3.5rem !important
}

.pb-13 {
    padding-bottom: 4rem !important
}

.pb-14 {
    padding-bottom: 4.5rem !important
}

.pb-15 {
    padding-bottom: 5rem !important
}

.pb-16 {
    padding-bottom: 6rem !important
}

.pb-17 {
    padding-bottom: 7rem !important
}

.pb-18 {
    padding-bottom: 8rem !important
}

.pb-19 {
    padding-bottom: 9rem !important
}

.pb-20 {
    padding-bottom: 10rem !important
}

.pb-21 {
    padding-bottom: 12.5rem !important
}

.pb-22 {
    padding-bottom: 15rem !important
}

.pb-23 {
    padding-bottom: 17.5rem !important
}

.pb-24 {
    padding-bottom: 20rem !important
}

.pb-25 {
    padding-bottom: 22.5rem !important
}

.ps-0 {
    padding-left: 0 !important
}

.ps-1 {
    padding-left: .25rem !important
}

.ps-2 {
    padding-left: .5rem !important
}

.ps-3 {
    padding-left: .75rem !important
}

.ps-4 {
    padding-left: 1rem !important
}

.ps-5 {
    padding-left: 1.25rem !important
}

.ps-6 {
    padding-left: 1.5rem !important
}

.ps-7 {
    padding-left: 1.75rem !important
}

.ps-8 {
    padding-left: 2rem !important
}

.ps-9 {
    padding-left: 2.25rem !important
}

.ps-10 {
    padding-left: 2.5rem !important
}

.ps-11 {
    padding-left: 3rem !important
}

.ps-12 {
    padding-left: 3.5rem !important
}

.ps-13 {
    padding-left: 4rem !important
}

.ps-14 {
    padding-left: 4.5rem !important
}

.ps-15 {
    padding-left: 5rem !important
}

.ps-16 {
    padding-left: 6rem !important
}

.ps-17 {
    padding-left: 7rem !important
}

.ps-18 {
    padding-left: 8rem !important
}

.ps-19 {
    padding-left: 9rem !important
}

.ps-20 {
    padding-left: 10rem !important
}

.ps-21 {
    padding-left: 12.5rem !important
}

.ps-22 {
    padding-left: 15rem !important
}

.ps-23 {
    padding-left: 17.5rem !important
}

.ps-24 {
    padding-left: 20rem !important
}

.ps-25 {
    padding-left: 22.5rem !important
}

.gap-0 {
    gap: 0 !important
}

.gap-1 {
    gap: .25rem !important
}

.gap-2 {
    gap: .5rem !important
}

.gap-3 {
    gap: .75rem !important
}

.gap-4 {
    gap: 1rem !important
}

.gap-5 {
    gap: 1.25rem !important
}

.gap-6 {
    gap: 1.5rem !important
}

.gap-7 {
    gap: 1.75rem !important
}

.gap-8 {
    gap: 2rem !important
}

.gap-9 {
    gap: 2.25rem !important
}

.gap-10 {
    gap: 2.5rem !important
}

.gap-11 {
    gap: 3rem !important
}

.gap-12 {
    gap: 3.5rem !important
}

.gap-13 {
    gap: 4rem !important
}

.gap-14 {
    gap: 4.5rem !important
}

.gap-15 {
    gap: 5rem !important
}

.gap-16 {
    gap: 6rem !important
}

.gap-17 {
    gap: 7rem !important
}

.gap-18 {
    gap: 8rem !important
}

.gap-19 {
    gap: 9rem !important
}

.gap-20 {
    gap: 10rem !important
}

.gap-21 {
    gap: 12.5rem !important
}

.gap-22 {
    gap: 15rem !important
}

.gap-23 {
    gap: 17.5rem !important
}

.gap-24 {
    gap: 20rem !important
}

.gap-25 {
    gap: 22.5rem !important
}

.font-monospace {
    font-family: var(--bs-font-monospace) !important
}

.fst-italic {
    font-style: italic !important
}

.fst-normal {
    font-style: normal !important
}

.fw-light {
    font-weight: 400 !important
}

.fw-lighter {
    font-weight: lighter !important
}

.fw-normal {
    font-weight: 500 !important
}

.fw-bold {
    font-weight: 700 !important
}

.fw-semibold {
    font-weight: 600 !important
}

.fw-bolder {
    font-weight: bolder !important
}

.lh-1 {
    line-height: 1 !important
}

.lh-xxs {
    line-height: 1.05 !important
}

.lh-xs {
    line-height: 1.35 !important
}

.lh-sm {
    line-height: 1.5 !important
}

.lh-base {
    line-height: 1.7 !important
}

.lh-lg {
    line-height: 1.9 !important
}

.text-start {
    text-align: left !important
}

.text-end {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

.text-decoration-none {
    text-decoration: none !important
}

.text-decoration-underline {
    text-decoration: underline !important
}

.text-decoration-line-through {
    text-decoration: line-through !important
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.text-wrap {
    white-space: normal !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-break {
    word-wrap: break-word !important;
    word-break: break-word !important
}

.text-blue {
    --bs-text-opacity: 1;
    color: #3f78e0 !important
}

.text-sky {
    --bs-text-opacity: 1;
    color: #5eb9f0 !important
}

.text-purple {
    --bs-text-opacity: 1;
    color: #747ed1 !important
}

.text-grape {
    --bs-text-opacity: 1;
    color: #605dba !important
}

.text-violet {
    --bs-text-opacity: 1;
    color: #a07cc5 !important
}

.text-pink {
    --bs-text-opacity: 1;
    color: #d16b86 !important
}

.text-fuchsia {
    --bs-text-opacity: 1;
    color: #e668b3 !important
}

.text-red {
    --bs-text-opacity: 1;
    color: #e2626b !important
}

.text-orange {
    --bs-text-opacity: 1;
    color: #f78b77 !important
}

.text-yellow {
    --bs-text-opacity: 1;
    color: #fab758 !important
}

.text-green {
    --bs-text-opacity: 1;
    color: #45c4a0 !important
}

.text-leaf {
    --bs-text-opacity: 1;
    color: #7cb798 !important
}

.text-aqua {
    --bs-text-opacity: 1;
    color: #54a8c7 !important
}

.text-navy {
    --bs-text-opacity: 1;
    color: #343f52 !important
}

.text-ash {
    --bs-text-opacity: 1;
    color: #9499a3 !important
}

.text-white {
    --bs-text-opacity: 1;
    color: #fff !important
}

.text-light {
    --bs-text-opacity: 1;
    color: #fefefe !important
}

.text-gray {
    --bs-text-opacity: 1;
    color: #f6f7f9 !important
}

.text-primary {
    --bs-text-opacity: 1;
    color: #3f78e0 !important
}

.text-secondary {
    --bs-text-opacity: 1;
    color: #aab0bc !important
}

.text-success {
    --bs-text-opacity: 1;
    color: #45c4a0 !important
}

.text-info {
    --bs-text-opacity: 1;
    color: #54a8c7 !important
}

.text-warning {
    --bs-text-opacity: 1;
    color: #fab758 !important
}

.text-danger {
    --bs-text-opacity: 1;
    color: #e2626b !important
}

.text-body {
    --bs-text-opacity: 1;
    color: #60697b !important
}

.text-muted {
    --bs-text-opacity: 1;
    color: #aab0bc !important
}

.text-inverse {
    --bs-text-opacity: 1;
    color: #cacaca !important
}

.text-dark {
    --bs-text-opacity: 1;
    color: #343f52 !important
}

.text-black-50 {
    --bs-text-opacity: 1;
    color: rgba(0, 0, 0, .5) !important
}

.text-white-50 {
    --bs-text-opacity: 1;
    color: rgba(255, 255, 255, .5) !important
}

.text-reset {
    --bs-text-opacity: 1;
    color: inherit !important
}

.text-opacity-25 {
    --bs-text-opacity: 0.25
}

.text-opacity-50 {
    --bs-text-opacity: 0.5
}

.text-opacity-75 {
    --bs-text-opacity: 0.75
}

.text-opacity-100 {
    --bs-text-opacity: 1
}

.bg-purple {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-purple-rgb), var(--bs-bg-opacity)) !important
}

.bg-pink {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-pink-rgb), var(--bs-bg-opacity)) !important
}

.bg-red {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-red-rgb), var(--bs-bg-opacity)) !important
}

.bg-orange {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-orange-rgb), var(--bs-bg-opacity)) !important
}

.bg-yellow {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-yellow-rgb), var(--bs-bg-opacity)) !important
}

.bg-green {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-green-rgb), var(--bs-bg-opacity)) !important
}

.bg-leaf {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-leaf-rgb), var(--bs-bg-opacity)) !important
}

.bg-light {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important
}

.bg-gray {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important
}

.pe-none {
    pointer-events: none !important
}

.pe-auto {
    pointer-events: auto !important
}

.rounded {
    border-radius: .4rem !important
}

.rounded-0 {
    border-radius: 0 !important
}

.rounded-1 {
    border-radius: .2rem !important
}

.rounded-2 {
    border-radius: .4rem !important
}

.rounded-3 {
    border-radius: .4rem !important
}

.rounded-4 {
    border-radius: .8rem !important
}

.rounded-circle {
    border-radius: 50% !important
}

.rounded-pill {
    border-radius: 50rem !important
}

.rounded-top {
    border-top-left-radius: var(--bs-border-radius) !important;
    border-top-right-radius: var(--bs-border-radius) !important
}

.rounded-end {
    border-top-right-radius: var(--bs-border-radius) !important;
    border-bottom-right-radius: var(--bs-border-radius) !important
}

.rounded-bottom {
    border-bottom-right-radius: var(--bs-border-radius) !important;
    border-bottom-left-radius: var(--bs-border-radius) !important
}

.rounded-start {
    border-bottom-left-radius: var(--bs-border-radius) !important;
    border-top-left-radius: var(--bs-border-radius) !important
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

@media (min-width:576px) {
    .float-sm-start {
        float: left !important
    }

    .float-sm-end {
        float: right !important
    }

    .float-sm-none {
        float: none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
    }

    .d-sm-block {
        display: block !important
    }

    .d-sm-grid {
        display: grid !important
    }

    .d-sm-table {
        display: table !important
    }

    .d-sm-table-row {
        display: table-row !important
    }

    .d-sm-table-cell {
        display: table-cell !important
    }

    .d-sm-flex {
        display: flex !important
    }

    .d-sm-inline-flex {
        display: inline-flex !important
    }

    .d-sm-none {
        display: none !important
    }

    .flex-sm-fill {
        flex: 1 1 auto !important
    }

    .flex-sm-row {
        flex-direction: row !important
    }

    .flex-sm-column {
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-sm-grow-0 {
        flex-grow: 0 !important
    }

    .flex-sm-grow-1 {
        flex-grow: 1 !important
    }

    .flex-sm-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-sm-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-sm-wrap {
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-sm-start {
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        justify-content: center !important
    }

    .justify-content-sm-between {
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        justify-content: space-around !important
    }

    .justify-content-sm-evenly {
        justify-content: space-evenly !important
    }

    .align-items-sm-start {
        align-items: flex-start !important
    }

    .align-items-sm-end {
        align-items: flex-end !important
    }

    .align-items-sm-center {
        align-items: center !important
    }

    .align-items-sm-baseline {
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        align-items: stretch !important
    }

    .align-content-sm-start {
        align-content: flex-start !important
    }

    .align-content-sm-end {
        align-content: flex-end !important
    }

    .align-content-sm-center {
        align-content: center !important
    }

    .align-content-sm-between {
        align-content: space-between !important
    }

    .align-content-sm-around {
        align-content: space-around !important
    }

    .align-content-sm-stretch {
        align-content: stretch !important
    }

    .align-self-sm-auto {
        align-self: auto !important
    }

    .align-self-sm-start {
        align-self: flex-start !important
    }

    .align-self-sm-end {
        align-self: flex-end !important
    }

    .align-self-sm-center {
        align-self: center !important
    }

    .align-self-sm-baseline {
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        align-self: stretch !important
    }

    .order-sm-first {
        order: -1 !important
    }

    .order-sm-0 {
        order: 0 !important
    }

    .order-sm-1 {
        order: 1 !important
    }

    .order-sm-2 {
        order: 2 !important
    }

    .order-sm-3 {
        order: 3 !important
    }

    .order-sm-4 {
        order: 4 !important
    }

    .order-sm-5 {
        order: 5 !important
    }

    .order-sm-last {
        order: 6 !important
    }

    .m-sm-0 {
        margin: 0 !important
    }

    .m-sm-1 {
        margin: .25rem !important
    }

    .m-sm-2 {
        margin: .5rem !important
    }

    .m-sm-3 {
        margin: .75rem !important
    }

    .m-sm-4 {
        margin: 1rem !important
    }

    .m-sm-5 {
        margin: 1.25rem !important
    }

    .m-sm-6 {
        margin: 1.5rem !important
    }

    .m-sm-7 {
        margin: 1.75rem !important
    }

    .m-sm-8 {
        margin: 2rem !important
    }

    .m-sm-9 {
        margin: 2.25rem !important
    }

    .m-sm-10 {
        margin: 2.5rem !important
    }

    .m-sm-11 {
        margin: 3rem !important
    }

    .m-sm-12 {
        margin: 3.5rem !important
    }

    .m-sm-13 {
        margin: 4rem !important
    }

    .m-sm-14 {
        margin: 4.5rem !important
    }

    .m-sm-15 {
        margin: 5rem !important
    }

    .m-sm-16 {
        margin: 6rem !important
    }

    .m-sm-17 {
        margin: 7rem !important
    }

    .m-sm-18 {
        margin: 8rem !important
    }

    .m-sm-19 {
        margin: 9rem !important
    }

    .m-sm-20 {
        margin: 10rem !important
    }

    .m-sm-21 {
        margin: 12.5rem !important
    }

    .m-sm-22 {
        margin: 15rem !important
    }

    .m-sm-23 {
        margin: 17.5rem !important
    }

    .m-sm-24 {
        margin: 20rem !important
    }

    .m-sm-25 {
        margin: 22.5rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mx-sm-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-sm-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-sm-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-sm-3 {
        margin-right: .75rem !important;
        margin-left: .75rem !important
    }

    .mx-sm-4 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-sm-5 {
        margin-right: 1.25rem !important;
        margin-left: 1.25rem !important
    }

    .mx-sm-6 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-sm-7 {
        margin-right: 1.75rem !important;
        margin-left: 1.75rem !important
    }

    .mx-sm-8 {
        margin-right: 2rem !important;
        margin-left: 2rem !important
    }

    .mx-sm-9 {
        margin-right: 2.25rem !important;
        margin-left: 2.25rem !important
    }

    .mx-sm-10 {
        margin-right: 2.5rem !important;
        margin-left: 2.5rem !important
    }

    .mx-sm-11 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-sm-12 {
        margin-right: 3.5rem !important;
        margin-left: 3.5rem !important
    }

    .mx-sm-13 {
        margin-right: 4rem !important;
        margin-left: 4rem !important
    }

    .mx-sm-14 {
        margin-right: 4.5rem !important;
        margin-left: 4.5rem !important
    }

    .mx-sm-15 {
        margin-right: 5rem !important;
        margin-left: 5rem !important
    }

    .mx-sm-16 {
        margin-right: 6rem !important;
        margin-left: 6rem !important
    }

    .mx-sm-17 {
        margin-right: 7rem !important;
        margin-left: 7rem !important
    }

    .mx-sm-18 {
        margin-right: 8rem !important;
        margin-left: 8rem !important
    }

    .mx-sm-19 {
        margin-right: 9rem !important;
        margin-left: 9rem !important
    }

    .mx-sm-20 {
        margin-right: 10rem !important;
        margin-left: 10rem !important
    }

    .mx-sm-21 {
        margin-right: 12.5rem !important;
        margin-left: 12.5rem !important
    }

    .mx-sm-22 {
        margin-right: 15rem !important;
        margin-left: 15rem !important
    }

    .mx-sm-23 {
        margin-right: 17.5rem !important;
        margin-left: 17.5rem !important
    }

    .mx-sm-24 {
        margin-right: 20rem !important;
        margin-left: 20rem !important
    }

    .mx-sm-25 {
        margin-right: 22.5rem !important;
        margin-left: 22.5rem !important
    }

    .mx-sm-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-sm-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-sm-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-sm-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-sm-3 {
        margin-top: .75rem !important;
        margin-bottom: .75rem !important
    }

    .my-sm-4 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-sm-5 {
        margin-top: 1.25rem !important;
        margin-bottom: 1.25rem !important
    }

    .my-sm-6 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-sm-7 {
        margin-top: 1.75rem !important;
        margin-bottom: 1.75rem !important
    }

    .my-sm-8 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important
    }

    .my-sm-9 {
        margin-top: 2.25rem !important;
        margin-bottom: 2.25rem !important
    }

    .my-sm-10 {
        margin-top: 2.5rem !important;
        margin-bottom: 2.5rem !important
    }

    .my-sm-11 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-sm-12 {
        margin-top: 3.5rem !important;
        margin-bottom: 3.5rem !important
    }

    .my-sm-13 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important
    }

    .my-sm-14 {
        margin-top: 4.5rem !important;
        margin-bottom: 4.5rem !important
    }

    .my-sm-15 {
        margin-top: 5rem !important;
        margin-bottom: 5rem !important
    }

    .my-sm-16 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important
    }

    .my-sm-17 {
        margin-top: 7rem !important;
        margin-bottom: 7rem !important
    }

    .my-sm-18 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important
    }

    .my-sm-19 {
        margin-top: 9rem !important;
        margin-bottom: 9rem !important
    }

    .my-sm-20 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important
    }

    .my-sm-21 {
        margin-top: 12.5rem !important;
        margin-bottom: 12.5rem !important
    }

    .my-sm-22 {
        margin-top: 15rem !important;
        margin-bottom: 15rem !important
    }

    .my-sm-23 {
        margin-top: 17.5rem !important;
        margin-bottom: 17.5rem !important
    }

    .my-sm-24 {
        margin-top: 20rem !important;
        margin-bottom: 20rem !important
    }

    .my-sm-25 {
        margin-top: 22.5rem !important;
        margin-bottom: 22.5rem !important
    }

    .my-sm-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-sm-0 {
        margin-top: 0 !important
    }

    .mt-sm-1 {
        margin-top: .25rem !important
    }

    .mt-sm-2 {
        margin-top: .5rem !important
    }

    .mt-sm-3 {
        margin-top: .75rem !important
    }

    .mt-sm-4 {
        margin-top: 1rem !important
    }

    .mt-sm-5 {
        margin-top: 1.25rem !important
    }

    .mt-sm-6 {
        margin-top: 1.5rem !important
    }

    .mt-sm-7 {
        margin-top: 1.75rem !important
    }

    .mt-sm-8 {
        margin-top: 2rem !important
    }

    .mt-sm-9 {
        margin-top: 2.25rem !important
    }

    .mt-sm-10 {
        margin-top: 2.5rem !important
    }

    .mt-sm-11 {
        margin-top: 3rem !important
    }

    .mt-sm-12 {
        margin-top: 3.5rem !important
    }

    .mt-sm-13 {
        margin-top: 4rem !important
    }

    .mt-sm-14 {
        margin-top: 4.5rem !important
    }

    .mt-sm-15 {
        margin-top: 5rem !important
    }

    .mt-sm-16 {
        margin-top: 6rem !important
    }

    .mt-sm-17 {
        margin-top: 7rem !important
    }

    .mt-sm-18 {
        margin-top: 8rem !important
    }

    .mt-sm-19 {
        margin-top: 9rem !important
    }

    .mt-sm-20 {
        margin-top: 10rem !important
    }

    .mt-sm-21 {
        margin-top: 12.5rem !important
    }

    .mt-sm-22 {
        margin-top: 15rem !important
    }

    .mt-sm-23 {
        margin-top: 17.5rem !important
    }

    .mt-sm-24 {
        margin-top: 20rem !important
    }

    .mt-sm-25 {
        margin-top: 22.5rem !important
    }

    .mt-sm-auto {
        margin-top: auto !important
    }

    .me-sm-0 {
        margin-right: 0 !important
    }

    .me-sm-1 {
        margin-right: .25rem !important
    }

    .me-sm-2 {
        margin-right: .5rem !important
    }

    .me-sm-3 {
        margin-right: .75rem !important
    }

    .me-sm-4 {
        margin-right: 1rem !important
    }

    .me-sm-5 {
        margin-right: 1.25rem !important
    }

    .me-sm-6 {
        margin-right: 1.5rem !important
    }

    .me-sm-7 {
        margin-right: 1.75rem !important
    }

    .me-sm-8 {
        margin-right: 2rem !important
    }

    .me-sm-9 {
        margin-right: 2.25rem !important
    }

    .me-sm-10 {
        margin-right: 2.5rem !important
    }

    .me-sm-11 {
        margin-right: 3rem !important
    }

    .me-sm-12 {
        margin-right: 3.5rem !important
    }

    .me-sm-13 {
        margin-right: 4rem !important
    }

    .me-sm-14 {
        margin-right: 4.5rem !important
    }

    .me-sm-15 {
        margin-right: 5rem !important
    }

    .me-sm-16 {
        margin-right: 6rem !important
    }

    .me-sm-17 {
        margin-right: 7rem !important
    }

    .me-sm-18 {
        margin-right: 8rem !important
    }

    .me-sm-19 {
        margin-right: 9rem !important
    }

    .me-sm-20 {
        margin-right: 10rem !important
    }

    .me-sm-21 {
        margin-right: 12.5rem !important
    }

    .me-sm-22 {
        margin-right: 15rem !important
    }

    .me-sm-23 {
        margin-right: 17.5rem !important
    }

    .me-sm-24 {
        margin-right: 20rem !important
    }

    .me-sm-25 {
        margin-right: 22.5rem !important
    }

    .me-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-0 {
        margin-bottom: 0 !important
    }

    .mb-sm-1 {
        margin-bottom: .25rem !important
    }

    .mb-sm-2 {
        margin-bottom: .5rem !important
    }

    .mb-sm-3 {
        margin-bottom: .75rem !important
    }

    .mb-sm-4 {
        margin-bottom: 1rem !important
    }

    .mb-sm-5 {
        margin-bottom: 1.25rem !important
    }

    .mb-sm-6 {
        margin-bottom: 1.5rem !important
    }

    .mb-sm-7 {
        margin-bottom: 1.75rem !important
    }

    .mb-sm-8 {
        margin-bottom: 2rem !important
    }

    .mb-sm-9 {
        margin-bottom: 2.25rem !important
    }

    .mb-sm-10 {
        margin-bottom: 2.5rem !important
    }

    .mb-sm-11 {
        margin-bottom: 3rem !important
    }

    .mb-sm-12 {
        margin-bottom: 3.5rem !important
    }

    .mb-sm-13 {
        margin-bottom: 4rem !important
    }

    .mb-sm-14 {
        margin-bottom: 4.5rem !important
    }

    .mb-sm-15 {
        margin-bottom: 5rem !important
    }

    .mb-sm-16 {
        margin-bottom: 6rem !important
    }

    .mb-sm-17 {
        margin-bottom: 7rem !important
    }

    .mb-sm-18 {
        margin-bottom: 8rem !important
    }

    .mb-sm-19 {
        margin-bottom: 9rem !important
    }

    .mb-sm-20 {
        margin-bottom: 10rem !important
    }

    .mb-sm-21 {
        margin-bottom: 12.5rem !important
    }

    .mb-sm-22 {
        margin-bottom: 15rem !important
    }

    .mb-sm-23 {
        margin-bottom: 17.5rem !important
    }

    .mb-sm-24 {
        margin-bottom: 20rem !important
    }

    .mb-sm-25 {
        margin-bottom: 22.5rem !important
    }

    .mb-sm-auto {
        margin-bottom: auto !important
    }

    .ms-sm-0 {
        margin-left: 0 !important
    }

    .ms-sm-1 {
        margin-left: .25rem !important
    }

    .ms-sm-2 {
        margin-left: .5rem !important
    }

    .ms-sm-3 {
        margin-left: .75rem !important
    }

    .ms-sm-4 {
        margin-left: 1rem !important
    }

    .ms-sm-5 {
        margin-left: 1.25rem !important
    }

    .ms-sm-6 {
        margin-left: 1.5rem !important
    }

    .ms-sm-7 {
        margin-left: 1.75rem !important
    }

    .ms-sm-8 {
        margin-left: 2rem !important
    }

    .ms-sm-9 {
        margin-left: 2.25rem !important
    }

    .ms-sm-10 {
        margin-left: 2.5rem !important
    }

    .ms-sm-11 {
        margin-left: 3rem !important
    }

    .ms-sm-12 {
        margin-left: 3.5rem !important
    }

    .ms-sm-13 {
        margin-left: 4rem !important
    }

    .ms-sm-14 {
        margin-left: 4.5rem !important
    }

    .ms-sm-15 {
        margin-left: 5rem !important
    }

    .ms-sm-16 {
        margin-left: 6rem !important
    }

    .ms-sm-17 {
        margin-left: 7rem !important
    }

    .ms-sm-18 {
        margin-left: 8rem !important
    }

    .ms-sm-19 {
        margin-left: 9rem !important
    }

    .ms-sm-20 {
        margin-left: 10rem !important
    }

    .ms-sm-21 {
        margin-left: 12.5rem !important
    }

    .ms-sm-22 {
        margin-left: 15rem !important
    }

    .ms-sm-23 {
        margin-left: 17.5rem !important
    }

    .ms-sm-24 {
        margin-left: 20rem !important
    }

    .ms-sm-25 {
        margin-left: 22.5rem !important
    }

    .ms-sm-auto {
        margin-left: auto !important
    }

    .m-sm-n1 {
        margin: -.25rem !important
    }

    .m-sm-n2 {
        margin: -.5rem !important
    }

    .m-sm-n3 {
        margin: -.75rem !important
    }

    .m-sm-n4 {
        margin: -1rem !important
    }

    .m-sm-n5 {
        margin: -1.25rem !important
    }

    .m-sm-n6 {
        margin: -1.5rem !important
    }

    .m-sm-n7 {
        margin: -1.75rem !important
    }

    .m-sm-n8 {
        margin: -2rem !important
    }

    .m-sm-n9 {
        margin: -2.25rem !important
    }

    .m-sm-n10 {
        margin: -2.5rem !important
    }

    .m-sm-n11 {
        margin: -3rem !important
    }

    .m-sm-n12 {
        margin: -3.5rem !important
    }

    .m-sm-n13 {
        margin: -4rem !important
    }

    .m-sm-n14 {
        margin: -4.5rem !important
    }

    .m-sm-n15 {
        margin: -5rem !important
    }

    .m-sm-n16 {
        margin: -6rem !important
    }

    .m-sm-n17 {
        margin: -7rem !important
    }

    .m-sm-n18 {
        margin: -8rem !important
    }

    .m-sm-n19 {
        margin: -9rem !important
    }

    .m-sm-n20 {
        margin: -10rem !important
    }

    .m-sm-n21 {
        margin: -12.5rem !important
    }

    .m-sm-n22 {
        margin: -15rem !important
    }

    .m-sm-n23 {
        margin: -17.5rem !important
    }

    .m-sm-n24 {
        margin: -20rem !important
    }

    .m-sm-n25 {
        margin: -22.5rem !important
    }

    .mx-sm-n1 {
        margin-right: -.25rem !important;
        margin-left: -.25rem !important
    }

    .mx-sm-n2 {
        margin-right: -.5rem !important;
        margin-left: -.5rem !important
    }

    .mx-sm-n3 {
        margin-right: -.75rem !important;
        margin-left: -.75rem !important
    }

    .mx-sm-n4 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-sm-n5 {
        margin-right: -1.25rem !important;
        margin-left: -1.25rem !important
    }

    .mx-sm-n6 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-sm-n7 {
        margin-right: -1.75rem !important;
        margin-left: -1.75rem !important
    }

    .mx-sm-n8 {
        margin-right: -2rem !important;
        margin-left: -2rem !important
    }

    .mx-sm-n9 {
        margin-right: -2.25rem !important;
        margin-left: -2.25rem !important
    }

    .mx-sm-n10 {
        margin-right: -2.5rem !important;
        margin-left: -2.5rem !important
    }

    .mx-sm-n11 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .mx-sm-n12 {
        margin-right: -3.5rem !important;
        margin-left: -3.5rem !important
    }

    .mx-sm-n13 {
        margin-right: -4rem !important;
        margin-left: -4rem !important
    }

    .mx-sm-n14 {
        margin-right: -4.5rem !important;
        margin-left: -4.5rem !important
    }

    .mx-sm-n15 {
        margin-right: -5rem !important;
        margin-left: -5rem !important
    }

    .mx-sm-n16 {
        margin-right: -6rem !important;
        margin-left: -6rem !important
    }

    .mx-sm-n17 {
        margin-right: -7rem !important;
        margin-left: -7rem !important
    }

    .mx-sm-n18 {
        margin-right: -8rem !important;
        margin-left: -8rem !important
    }

    .mx-sm-n19 {
        margin-right: -9rem !important;
        margin-left: -9rem !important
    }

    .mx-sm-n20 {
        margin-right: -10rem !important;
        margin-left: -10rem !important
    }

    .mx-sm-n21 {
        margin-right: -12.5rem !important;
        margin-left: -12.5rem !important
    }

    .mx-sm-n22 {
        margin-right: -15rem !important;
        margin-left: -15rem !important
    }

    .mx-sm-n23 {
        margin-right: -17.5rem !important;
        margin-left: -17.5rem !important
    }

    .mx-sm-n24 {
        margin-right: -20rem !important;
        margin-left: -20rem !important
    }

    .mx-sm-n25 {
        margin-right: -22.5rem !important;
        margin-left: -22.5rem !important
    }

    .my-sm-n1 {
        margin-top: -.25rem !important;
        margin-bottom: -.25rem !important
    }

    .my-sm-n2 {
        margin-top: -.5rem !important;
        margin-bottom: -.5rem !important
    }

    .my-sm-n3 {
        margin-top: -.75rem !important;
        margin-bottom: -.75rem !important
    }

    .my-sm-n4 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-sm-n5 {
        margin-top: -1.25rem !important;
        margin-bottom: -1.25rem !important
    }

    .my-sm-n6 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-sm-n7 {
        margin-top: -1.75rem !important;
        margin-bottom: -1.75rem !important
    }

    .my-sm-n8 {
        margin-top: -2rem !important;
        margin-bottom: -2rem !important
    }

    .my-sm-n9 {
        margin-top: -2.25rem !important;
        margin-bottom: -2.25rem !important
    }

    .my-sm-n10 {
        margin-top: -2.5rem !important;
        margin-bottom: -2.5rem !important
    }

    .my-sm-n11 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .my-sm-n12 {
        margin-top: -3.5rem !important;
        margin-bottom: -3.5rem !important
    }

    .my-sm-n13 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important
    }

    .my-sm-n14 {
        margin-top: -4.5rem !important;
        margin-bottom: -4.5rem !important
    }

    .my-sm-n15 {
        margin-top: -5rem !important;
        margin-bottom: -5rem !important
    }

    .my-sm-n16 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important
    }

    .my-sm-n17 {
        margin-top: -7rem !important;
        margin-bottom: -7rem !important
    }

    .my-sm-n18 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important
    }

    .my-sm-n19 {
        margin-top: -9rem !important;
        margin-bottom: -9rem !important
    }

    .my-sm-n20 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important
    }

    .my-sm-n21 {
        margin-top: -12.5rem !important;
        margin-bottom: -12.5rem !important
    }

    .my-sm-n22 {
        margin-top: -15rem !important;
        margin-bottom: -15rem !important
    }

    .my-sm-n23 {
        margin-top: -17.5rem !important;
        margin-bottom: -17.5rem !important
    }

    .my-sm-n24 {
        margin-top: -20rem !important;
        margin-bottom: -20rem !important
    }

    .my-sm-n25 {
        margin-top: -22.5rem !important;
        margin-bottom: -22.5rem !important
    }

    .mt-sm-n1 {
        margin-top: -.25rem !important
    }

    .mt-sm-n2 {
        margin-top: -.5rem !important
    }

    .mt-sm-n3 {
        margin-top: -.75rem !important
    }

    .mt-sm-n4 {
        margin-top: -1rem !important
    }

    .mt-sm-n5 {
        margin-top: -1.25rem !important
    }

    .mt-sm-n6 {
        margin-top: -1.5rem !important
    }

    .mt-sm-n7 {
        margin-top: -1.75rem !important
    }

    .mt-sm-n8 {
        margin-top: -2rem !important
    }

    .mt-sm-n9 {
        margin-top: -2.25rem !important
    }

    .mt-sm-n10 {
        margin-top: -2.5rem !important
    }

    .mt-sm-n11 {
        margin-top: -3rem !important
    }

    .mt-sm-n12 {
        margin-top: -3.5rem !important
    }

    .mt-sm-n13 {
        margin-top: -4rem !important
    }

    .mt-sm-n14 {
        margin-top: -4.5rem !important
    }

    .mt-sm-n15 {
        margin-top: -5rem !important
    }

    .mt-sm-n16 {
        margin-top: -6rem !important
    }

    .mt-sm-n17 {
        margin-top: -7rem !important
    }

    .mt-sm-n18 {
        margin-top: -8rem !important
    }

    .mt-sm-n19 {
        margin-top: -9rem !important
    }

    .mt-sm-n20 {
        margin-top: -10rem !important
    }

    .mt-sm-n21 {
        margin-top: -12.5rem !important
    }

    .mt-sm-n22 {
        margin-top: -15rem !important
    }

    .mt-sm-n23 {
        margin-top: -17.5rem !important
    }

    .mt-sm-n24 {
        margin-top: -20rem !important
    }

    .mt-sm-n25 {
        margin-top: -22.5rem !important
    }

    .me-sm-n1 {
        margin-right: -.25rem !important
    }

    .me-sm-n2 {
        margin-right: -.5rem !important
    }

    .me-sm-n3 {
        margin-right: -.75rem !important
    }

    .me-sm-n4 {
        margin-right: -1rem !important
    }

    .me-sm-n5 {
        margin-right: -1.25rem !important
    }

    .me-sm-n6 {
        margin-right: -1.5rem !important
    }

    .me-sm-n7 {
        margin-right: -1.75rem !important
    }

    .me-sm-n8 {
        margin-right: -2rem !important
    }

    .me-sm-n9 {
        margin-right: -2.25rem !important
    }

    .me-sm-n10 {
        margin-right: -2.5rem !important
    }

    .me-sm-n11 {
        margin-right: -3rem !important
    }

    .me-sm-n12 {
        margin-right: -3.5rem !important
    }

    .me-sm-n13 {
        margin-right: -4rem !important
    }

    .me-sm-n14 {
        margin-right: -4.5rem !important
    }

    .me-sm-n15 {
        margin-right: -5rem !important
    }

    .me-sm-n16 {
        margin-right: -6rem !important
    }

    .me-sm-n17 {
        margin-right: -7rem !important
    }

    .me-sm-n18 {
        margin-right: -8rem !important
    }

    .me-sm-n19 {
        margin-right: -9rem !important
    }

    .me-sm-n20 {
        margin-right: -10rem !important
    }

    .me-sm-n21 {
        margin-right: -12.5rem !important
    }

    .me-sm-n22 {
        margin-right: -15rem !important
    }

    .me-sm-n23 {
        margin-right: -17.5rem !important
    }

    .me-sm-n24 {
        margin-right: -20rem !important
    }

    .me-sm-n25 {
        margin-right: -22.5rem !important
    }

    .mb-sm-n1 {
        margin-bottom: -.25rem !important
    }

    .mb-sm-n2 {
        margin-bottom: -.5rem !important
    }

    .mb-sm-n3 {
        margin-bottom: -.75rem !important
    }

    .mb-sm-n4 {
        margin-bottom: -1rem !important
    }

    .mb-sm-n5 {
        margin-bottom: -1.25rem !important
    }

    .mb-sm-n6 {
        margin-bottom: -1.5rem !important
    }

    .mb-sm-n7 {
        margin-bottom: -1.75rem !important
    }

    .mb-sm-n8 {
        margin-bottom: -2rem !important
    }

    .mb-sm-n9 {
        margin-bottom: -2.25rem !important
    }

    .mb-sm-n10 {
        margin-bottom: -2.5rem !important
    }

    .mb-sm-n11 {
        margin-bottom: -3rem !important
    }

    .mb-sm-n12 {
        margin-bottom: -3.5rem !important
    }

    .mb-sm-n13 {
        margin-bottom: -4rem !important
    }

    .mb-sm-n14 {
        margin-bottom: -4.5rem !important
    }

    .mb-sm-n15 {
        margin-bottom: -5rem !important
    }

    .mb-sm-n16 {
        margin-bottom: -6rem !important
    }

    .mb-sm-n17 {
        margin-bottom: -7rem !important
    }

    .mb-sm-n18 {
        margin-bottom: -8rem !important
    }

    .mb-sm-n19 {
        margin-bottom: -9rem !important
    }

    .mb-sm-n20 {
        margin-bottom: -10rem !important
    }

    .mb-sm-n21 {
        margin-bottom: -12.5rem !important
    }

    .mb-sm-n22 {
        margin-bottom: -15rem !important
    }

    .mb-sm-n23 {
        margin-bottom: -17.5rem !important
    }

    .mb-sm-n24 {
        margin-bottom: -20rem !important
    }

    .mb-sm-n25 {
        margin-bottom: -22.5rem !important
    }

    .ms-sm-n1 {
        margin-left: -.25rem !important
    }

    .ms-sm-n2 {
        margin-left: -.5rem !important
    }

    .ms-sm-n3 {
        margin-left: -.75rem !important
    }

    .ms-sm-n4 {
        margin-left: -1rem !important
    }

    .ms-sm-n5 {
        margin-left: -1.25rem !important
    }

    .ms-sm-n6 {
        margin-left: -1.5rem !important
    }

    .ms-sm-n7 {
        margin-left: -1.75rem !important
    }

    .ms-sm-n8 {
        margin-left: -2rem !important
    }

    .ms-sm-n9 {
        margin-left: -2.25rem !important
    }

    .ms-auto {
        margin-left: auto !important
    }

    .ms-sm-n10 {
        margin-left: -2.5rem !important
    }

    .ms-sm-n11 {
        margin-left: -3rem !important
    }

    .ms-sm-n12 {
        margin-left: -3.5rem !important
    }

    .ms-sm-n13 {
        margin-left: -4rem !important
    }

    .ms-sm-n14 {
        margin-left: -4.5rem !important
    }

    .ms-sm-n15 {
        margin-left: -5rem !important
    }

    .ms-sm-n16 {
        margin-left: -6rem !important
    }

    .ms-sm-n17 {
        margin-left: -7rem !important
    }

    .ms-sm-n18 {
        margin-left: -8rem !important
    }

    .ms-sm-n19 {
        margin-left: -9rem !important
    }

    .ms-sm-n20 {
        margin-left: -10rem !important
    }

    .ms-sm-n21 {
        margin-left: -12.5rem !important
    }

    .ms-sm-n22 {
        margin-left: -15rem !important
    }

    .ms-sm-n23 {
        margin-left: -17.5rem !important
    }

    .ms-sm-n24 {
        margin-left: -20rem !important
    }

    .ms-sm-n25 {
        margin-left: -22.5rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .p-sm-1 {
        padding: .25rem !important
    }

    .p-sm-2 {
        padding: .5rem !important
    }

    .p-sm-3 {
        padding: .75rem !important
    }

    .p-sm-4 {
        padding: 1rem !important
    }

    .p-sm-5 {
        padding: 1.25rem !important
    }

    .p-sm-6 {
        padding: 1.5rem !important
    }

    .p-sm-7 {
        padding: 1.75rem !important
    }

    .p-sm-8 {
        padding: 2rem !important
    }

    .p-sm-9 {
        padding: 2.25rem !important
    }

    .p-sm-10 {
        padding: 2.5rem !important
    }

    .p-sm-11 {
        padding: 3rem !important
    }

    .p-sm-12 {
        padding: 3.5rem !important
    }

    .p-sm-13 {
        padding: 4rem !important
    }

    .p-sm-14 {
        padding: 4.5rem !important
    }

    .p-sm-15 {
        padding: 5rem !important
    }

    .p-sm-16 {
        padding: 6rem !important
    }

    .p-sm-17 {
        padding: 7rem !important
    }

    .p-sm-18 {
        padding: 8rem !important
    }

    .p-sm-19 {
        padding: 9rem !important
    }

    .p-sm-20 {
        padding: 10rem !important
    }

    .p-sm-21 {
        padding: 12.5rem !important
    }

    .p-sm-22 {
        padding: 15rem !important
    }

    .p-sm-23 {
        padding: 17.5rem !important
    }

    .p-sm-24 {
        padding: 20rem !important
    }

    .p-sm-25 {
        padding: 22.5rem !important
    }

    .px-sm-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-sm-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-sm-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-sm-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important
    }

    .px-sm-4 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-sm-5 {
        padding-right: 1.25rem !important;
        padding-left: 1.25rem !important
    }

    .px-sm-6 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-sm-7 {
        padding-right: 1.75rem !important;
        padding-left: 1.75rem !important
    }

    .px-sm-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important
    }

    .px-sm-9 {
        padding-right: 2.25rem !important;
        padding-left: 2.25rem !important
    }

    .px-sm-10 {
        padding-right: 2.5rem !important;
        padding-left: 2.5rem !important
    }

    .px-sm-11 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .px-sm-12 {
        padding-right: 3.5rem !important;
        padding-left: 3.5rem !important
    }

    .px-sm-13 {
        padding-right: 4rem !important;
        padding-left: 4rem !important
    }

    .px-sm-14 {
        padding-right: 4.5rem !important;
        padding-left: 4.5rem !important
    }

    .px-sm-15 {
        padding-right: 5rem !important;
        padding-left: 5rem !important
    }

    .px-sm-16 {
        padding-right: 6rem !important;
        padding-left: 6rem !important
    }

    .px-sm-17 {
        padding-right: 7rem !important;
        padding-left: 7rem !important
    }

    .px-sm-18 {
        padding-right: 8rem !important;
        padding-left: 8rem !important
    }

    .px-sm-19 {
        padding-right: 9rem !important;
        padding-left: 9rem !important
    }

    .px-sm-20 {
        padding-right: 10rem !important;
        padding-left: 10rem !important
    }

    .px-sm-21 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important
    }

    .px-sm-22 {
        padding-right: 15rem !important;
        padding-left: 15rem !important
    }

    .px-sm-23 {
        padding-right: 17.5rem !important;
        padding-left: 17.5rem !important
    }

    .px-sm-24 {
        padding-right: 20rem !important;
        padding-left: 20rem !important
    }

    .px-sm-25 {
        padding-right: 22.5rem !important;
        padding-left: 22.5rem !important
    }

    .py-sm-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-sm-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-sm-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-sm-3 {
        padding-top: .75rem !important;
        padding-bottom: .75rem !important
    }

    .py-sm-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-sm-5 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important
    }

    .py-sm-6 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-sm-7 {
        padding-top: 1.75rem !important;
        padding-bottom: 1.75rem !important
    }

    .py-sm-8 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .py-sm-9 {
        padding-top: 2.25rem !important;
        padding-bottom: 2.25rem !important
    }

    .py-sm-10 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important
    }

    .py-sm-11 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .py-sm-12 {
        padding-top: 3.5rem !important;
        padding-bottom: 3.5rem !important
    }

    .py-sm-13 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important
    }

    .py-sm-14 {
        padding-top: 4.5rem !important;
        padding-bottom: 4.5rem !important
    }

    .py-sm-15 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important
    }

    .py-sm-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important
    }

    .py-sm-17 {
        padding-top: 7rem !important;
        padding-bottom: 7rem !important
    }

    .py-sm-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important
    }

    .py-sm-19 {
        padding-top: 9rem !important;
        padding-bottom: 9rem !important
    }

    .py-sm-20 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important
    }

    .py-sm-21 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important
    }

    .py-sm-22 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important
    }

    .py-sm-23 {
        padding-top: 17.5rem !important;
        padding-bottom: 17.5rem !important
    }

    .py-sm-24 {
        padding-top: 20rem !important;
        padding-bottom: 20rem !important
    }

    .py-sm-25 {
        padding-top: 22.5rem !important;
        padding-bottom: 22.5rem !important
    }

    .pt-sm-0 {
        padding-top: 0 !important
    }

    .pt-sm-1 {
        padding-top: .25rem !important
    }

    .pt-sm-2 {
        padding-top: .5rem !important
    }

    .pt-sm-3 {
        padding-top: .75rem !important
    }

    .pt-sm-4 {
        padding-top: 1rem !important
    }

    .pt-sm-5 {
        padding-top: 1.25rem !important
    }

    .pt-sm-6 {
        padding-top: 1.5rem !important
    }

    .pt-sm-7 {
        padding-top: 1.75rem !important
    }

    .pt-sm-8 {
        padding-top: 2rem !important
    }

    .pt-sm-9 {
        padding-top: 2.25rem !important
    }

    .pt-sm-10 {
        padding-top: 2.5rem !important
    }

    .pt-sm-11 {
        padding-top: 3rem !important
    }

    .pt-sm-12 {
        padding-top: 3.5rem !important
    }

    .pt-sm-13 {
        padding-top: 4rem !important
    }

    .pt-sm-14 {
        padding-top: 4.5rem !important
    }

    .pt-sm-15 {
        padding-top: 5rem !important
    }

    .pt-sm-16 {
        padding-top: 6rem !important
    }

    .pt-sm-17 {
        padding-top: 7rem !important
    }

    .pt-sm-18 {
        padding-top: 8rem !important
    }

    .pt-sm-19 {
        padding-top: 9rem !important
    }

    .pt-sm-20 {
        padding-top: 10rem !important
    }

    .pt-sm-21 {
        padding-top: 12.5rem !important
    }

    .pt-sm-22 {
        padding-top: 15rem !important
    }

    .pt-sm-23 {
        padding-top: 17.5rem !important
    }

    .pt-sm-24 {
        padding-top: 20rem !important
    }

    .pt-sm-25 {
        padding-top: 22.5rem !important
    }

    .pe-sm-0 {
        padding-right: 0 !important
    }

    .pe-sm-1 {
        padding-right: .25rem !important
    }

    .pe-sm-2 {
        padding-right: .5rem !important
    }

    .pe-sm-3 {
        padding-right: .75rem !important
    }

    .pe-sm-4 {
        padding-right: 1rem !important
    }

    .pe-sm-5 {
        padding-right: 1.25rem !important
    }

    .pe-sm-6 {
        padding-right: 1.5rem !important
    }

    .pe-sm-7 {
        padding-right: 1.75rem !important
    }

    .pe-sm-8 {
        padding-right: 2rem !important
    }

    .pe-sm-9 {
        padding-right: 2.25rem !important
    }

    .pe-sm-10 {
        padding-right: 2.5rem !important
    }

    .pe-sm-11 {
        padding-right: 3rem !important
    }

    .pe-sm-12 {
        padding-right: 3.5rem !important
    }

    .pe-sm-13 {
        padding-right: 4rem !important
    }

    .pe-sm-14 {
        padding-right: 4.5rem !important
    }

    .pe-sm-15 {
        padding-right: 5rem !important
    }

    .pe-sm-16 {
        padding-right: 6rem !important
    }

    .pe-sm-17 {
        padding-right: 7rem !important
    }

    .pe-sm-18 {
        padding-right: 8rem !important
    }

    .pe-sm-19 {
        padding-right: 9rem !important
    }

    .pe-sm-20 {
        padding-right: 10rem !important
    }

    .pe-sm-21 {
        padding-right: 12.5rem !important
    }

    .pe-sm-22 {
        padding-right: 15rem !important
    }

    .pe-sm-23 {
        padding-right: 17.5rem !important
    }

    .pe-sm-24 {
        padding-right: 20rem !important
    }

    .pe-sm-25 {
        padding-right: 22.5rem !important
    }

    .pb-sm-0 {
        padding-bottom: 0 !important
    }

    .pb-sm-1 {
        padding-bottom: .25rem !important
    }

    .pb-sm-2 {
        padding-bottom: .5rem !important
    }

    .pb-sm-3 {
        padding-bottom: .75rem !important
    }

    .pb-sm-4 {
        padding-bottom: 1rem !important
    }

    .pb-sm-5 {
        padding-bottom: 1.25rem !important
    }

    .pb-sm-6 {
        padding-bottom: 1.5rem !important
    }

    .pb-sm-7 {
        padding-bottom: 1.75rem !important
    }

    .pb-sm-8 {
        padding-bottom: 2rem !important
    }

    .pb-sm-9 {
        padding-bottom: 2.25rem !important
    }

    .pb-sm-10 {
        padding-bottom: 2.5rem !important
    }

    .pb-sm-11 {
        padding-bottom: 3rem !important
    }

    .pb-sm-12 {
        padding-bottom: 3.5rem !important
    }

    .pb-sm-13 {
        padding-bottom: 4rem !important
    }

    .pb-sm-14 {
        padding-bottom: 4.5rem !important
    }

    .pb-sm-15 {
        padding-bottom: 5rem !important
    }

    .pb-sm-16 {
        padding-bottom: 6rem !important
    }

    .pb-sm-17 {
        padding-bottom: 7rem !important
    }

    .pb-sm-18 {
        padding-bottom: 8rem !important
    }

    .pb-sm-19 {
        padding-bottom: 9rem !important
    }

    .pb-sm-20 {
        padding-bottom: 10rem !important
    }

    .pb-sm-21 {
        padding-bottom: 12.5rem !important
    }

    .pb-sm-22 {
        padding-bottom: 15rem !important
    }

    .pb-sm-23 {
        padding-bottom: 17.5rem !important
    }

    .pb-sm-24 {
        padding-bottom: 20rem !important
    }

    .pb-sm-25 {
        padding-bottom: 22.5rem !important
    }

    .ps-sm-0 {
        padding-left: 0 !important
    }

    .ps-sm-1 {
        padding-left: .25rem !important
    }

    .ps-sm-2 {
        padding-left: .5rem !important
    }

    .ps-sm-3 {
        padding-left: .75rem !important
    }

    .ps-sm-4 {
        padding-left: 1rem !important
    }

    .ps-sm-5 {
        padding-left: 1.25rem !important
    }

    .ps-sm-6 {
        padding-left: 1.5rem !important
    }

    .ps-sm-7 {
        padding-left: 1.75rem !important
    }

    .ps-sm-8 {
        padding-left: 2rem !important
    }

    .ps-sm-9 {
        padding-left: 2.25rem !important
    }

    .ps-sm-10 {
        padding-left: 2.5rem !important
    }

    .ps-sm-11 {
        padding-left: 3rem !important
    }

    .ps-sm-12 {
        padding-left: 3.5rem !important
    }

    .ps-sm-13 {
        padding-left: 4rem !important
    }

    .ps-sm-14 {
        padding-left: 4.5rem !important
    }

    .ps-sm-15 {
        padding-left: 5rem !important
    }

    .ps-sm-16 {
        padding-left: 6rem !important
    }

    .ps-sm-17 {
        padding-left: 7rem !important
    }

    .ps-sm-18 {
        padding-left: 8rem !important
    }

    .ps-sm-19 {
        padding-left: 9rem !important
    }

    .ps-sm-20 {
        padding-left: 10rem !important
    }

    .ps-sm-21 {
        padding-left: 12.5rem !important
    }

    .ps-sm-22 {
        padding-left: 15rem !important
    }

    .ps-sm-23 {
        padding-left: 17.5rem !important
    }

    .ps-sm-24 {
        padding-left: 20rem !important
    }

    .ps-sm-25 {
        padding-left: 22.5rem !important
    }

    .gap-sm-0 {
        gap: 0 !important
    }

    .gap-sm-1 {
        gap: .25rem !important
    }

    .gap-sm-2 {
        gap: .5rem !important
    }

    .gap-sm-3 {
        gap: .75rem !important
    }

    .gap-sm-4 {
        gap: 1rem !important
    }

    .gap-sm-5 {
        gap: 1.25rem !important
    }

    .gap-sm-6 {
        gap: 1.5rem !important
    }

    .gap-sm-7 {
        gap: 1.75rem !important
    }

    .gap-sm-8 {
        gap: 2rem !important
    }

    .gap-sm-9 {
        gap: 2.25rem !important
    }

    .gap-sm-10 {
        gap: 2.5rem !important
    }

    .gap-sm-11 {
        gap: 3rem !important
    }

    .gap-sm-12 {
        gap: 3.5rem !important
    }

    .gap-sm-13 {
        gap: 4rem !important
    }

    .gap-sm-14 {
        gap: 4.5rem !important
    }

    .gap-sm-15 {
        gap: 5rem !important
    }

    .gap-sm-16 {
        gap: 6rem !important
    }

    .gap-sm-17 {
        gap: 7rem !important
    }

    .gap-sm-18 {
        gap: 8rem !important
    }

    .gap-sm-19 {
        gap: 9rem !important
    }

    .gap-sm-20 {
        gap: 10rem !important
    }

    .gap-sm-21 {
        gap: 12.5rem !important
    }

    .gap-sm-22 {
        gap: 15rem !important
    }

    .gap-sm-23 {
        gap: 17.5rem !important
    }

    .gap-sm-24 {
        gap: 20rem !important
    }

    .gap-sm-25 {
        gap: 22.5rem !important
    }

    .text-sm-start {
        text-align: left !important
    }

    .text-sm-end {
        text-align: right !important
    }

    .text-sm-center {
        text-align: center !important
    }
}

@media (min-width:768px) {
    .float-md-start {
        float: left !important
    }

    .float-md-end {
        float: right !important
    }

    .float-md-none {
        float: none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
    }

    .d-md-block {
        display: block !important
    }

    .d-md-grid {
        display: grid !important
    }

    .d-md-table {
        display: table !important
    }

    .d-md-table-row {
        display: table-row !important
    }

    .d-md-table-cell {
        display: table-cell !important
    }

    .d-md-flex {
        display: flex !important
    }

    .d-md-inline-flex {
        display: inline-flex !important
    }

    .d-md-none {
        display: none !important
    }

    .flex-md-fill {
        flex: 1 1 auto !important
    }

    .flex-md-row {
        flex-direction: row !important
    }

    .flex-md-column {
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-md-grow-0 {
        flex-grow: 0 !important
    }

    .flex-md-grow-1 {
        flex-grow: 1 !important
    }

    .flex-md-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-md-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-md-wrap {
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-md-start {
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        justify-content: center !important
    }

    .justify-content-md-between {
        justify-content: space-between !important
    }

    .justify-content-md-around {
        justify-content: space-around !important
    }

    .justify-content-md-evenly {
        justify-content: space-evenly !important
    }

    .align-items-md-start {
        align-items: flex-start !important
    }

    .align-items-md-end {
        align-items: flex-end !important
    }

    .align-items-md-center {
        align-items: center !important
    }

    .align-items-md-baseline {
        align-items: baseline !important
    }

    .align-items-md-stretch {
        align-items: stretch !important
    }

    .align-content-md-start {
        align-content: flex-start !important
    }

    .align-content-md-end {
        align-content: flex-end !important
    }

    .align-content-md-center {
        align-content: center !important
    }

    .align-content-md-between {
        align-content: space-between !important
    }

    .align-content-md-around {
        align-content: space-around !important
    }

    .align-content-md-stretch {
        align-content: stretch !important
    }

    .align-self-md-auto {
        align-self: auto !important
    }

    .align-self-md-start {
        align-self: flex-start !important
    }

    .align-self-md-end {
        align-self: flex-end !important
    }

    .align-self-md-center {
        align-self: center !important
    }

    .align-self-md-baseline {
        align-self: baseline !important
    }

    .align-self-md-stretch {
        align-self: stretch !important
    }

    .order-md-first {
        order: -1 !important
    }

    .order-md-0 {
        order: 0 !important
    }

    .order-md-1 {
        order: 1 !important
    }

    .order-md-2 {
        order: 2 !important
    }

    .order-md-3 {
        order: 3 !important
    }

    .order-md-4 {
        order: 4 !important
    }

    .order-md-5 {
        order: 5 !important
    }

    .order-md-last {
        order: 6 !important
    }

    .m-md-0 {
        margin: 0 !important
    }

    .m-md-1 {
        margin: .25rem !important
    }

    .m-md-2 {
        margin: .5rem !important
    }

    .m-md-3 {
        margin: .75rem !important
    }

    .m-md-4 {
        margin: 1rem !important
    }

    .m-md-5 {
        margin: 1.25rem !important
    }

    .m-md-6 {
        margin: 1.5rem !important
    }

    .m-md-7 {
        margin: 1.75rem !important
    }

    .m-md-8 {
        margin: 2rem !important
    }

    .m-md-9 {
        margin: 2.25rem !important
    }

    .m-md-10 {
        margin: 2.5rem !important
    }

    .m-md-11 {
        margin: 3rem !important
    }

    .m-md-12 {
        margin: 3.5rem !important
    }

    .m-md-13 {
        margin: 4rem !important
    }

    .m-md-14 {
        margin: 4.5rem !important
    }

    .m-md-15 {
        margin: 5rem !important
    }

    .m-md-16 {
        margin: 6rem !important
    }

    .m-md-17 {
        margin: 7rem !important
    }

    .m-md-18 {
        margin: 8rem !important
    }

    .m-md-19 {
        margin: 9rem !important
    }

    .m-md-20 {
        margin: 10rem !important
    }

    .m-md-21 {
        margin: 12.5rem !important
    }

    .m-md-22 {
        margin: 15rem !important
    }

    .m-md-23 {
        margin: 17.5rem !important
    }

    .m-md-24 {
        margin: 20rem !important
    }

    .m-md-25 {
        margin: 22.5rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mx-md-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-md-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-md-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-md-3 {
        margin-right: .75rem !important;
        margin-left: .75rem !important
    }

    .mx-md-4 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-md-5 {
        margin-right: 1.25rem !important;
        margin-left: 1.25rem !important
    }

    .mx-md-6 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-md-7 {
        margin-right: 1.75rem !important;
        margin-left: 1.75rem !important
    }

    .mx-md-8 {
        margin-right: 2rem !important;
        margin-left: 2rem !important
    }

    .mx-md-9 {
        margin-right: 2.25rem !important;
        margin-left: 2.25rem !important
    }

    .mx-md-10 {
        margin-right: 2.5rem !important;
        margin-left: 2.5rem !important
    }

    .mx-md-11 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-md-12 {
        margin-right: 3.5rem !important;
        margin-left: 3.5rem !important
    }

    .mx-md-13 {
        margin-right: 4rem !important;
        margin-left: 4rem !important
    }

    .mx-md-14 {
        margin-right: 4.5rem !important;
        margin-left: 4.5rem !important
    }

    .mx-md-15 {
        margin-right: 5rem !important;
        margin-left: 5rem !important
    }

    .mx-md-16 {
        margin-right: 6rem !important;
        margin-left: 6rem !important
    }

    .mx-md-17 {
        margin-right: 7rem !important;
        margin-left: 7rem !important
    }

    .mx-md-18 {
        margin-right: 8rem !important;
        margin-left: 8rem !important
    }

    .mx-md-19 {
        margin-right: 9rem !important;
        margin-left: 9rem !important
    }

    .mx-md-20 {
        margin-right: 10rem !important;
        margin-left: 10rem !important
    }

    .mx-md-21 {
        margin-right: 12.5rem !important;
        margin-left: 12.5rem !important
    }

    .mx-md-22 {
        margin-right: 15rem !important;
        margin-left: 15rem !important
    }

    .mx-md-23 {
        margin-right: 17.5rem !important;
        margin-left: 17.5rem !important
    }

    .mx-md-24 {
        margin-right: 20rem !important;
        margin-left: 20rem !important
    }

    .mx-md-25 {
        margin-right: 22.5rem !important;
        margin-left: 22.5rem !important
    }

    .mx-md-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-md-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-md-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-md-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-md-3 {
        margin-top: .75rem !important;
        margin-bottom: .75rem !important
    }

    .my-md-4 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-md-5 {
        margin-top: 1.25rem !important;
        margin-bottom: 1.25rem !important
    }

    .my-md-6 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-md-7 {
        margin-top: 1.75rem !important;
        margin-bottom: 1.75rem !important
    }

    .my-md-8 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important
    }

    .my-md-9 {
        margin-top: 2.25rem !important;
        margin-bottom: 2.25rem !important
    }

    .my-md-10 {
        margin-top: 2.5rem !important;
        margin-bottom: 2.5rem !important
    }

    .my-md-11 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-md-12 {
        margin-top: 3.5rem !important;
        margin-bottom: 3.5rem !important
    }

    .my-md-13 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important
    }

    .my-md-14 {
        margin-top: 4.5rem !important;
        margin-bottom: 4.5rem !important
    }

    .my-md-15 {
        margin-top: 5rem !important;
        margin-bottom: 5rem !important
    }

    .my-md-16 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important
    }

    .my-md-17 {
        margin-top: 7rem !important;
        margin-bottom: 7rem !important
    }

    .my-md-18 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important
    }

    .my-md-19 {
        margin-top: 9rem !important;
        margin-bottom: 9rem !important
    }

    .my-md-20 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important
    }

    .my-md-21 {
        margin-top: 12.5rem !important;
        margin-bottom: 12.5rem !important
    }

    .my-md-22 {
        margin-top: 15rem !important;
        margin-bottom: 15rem !important
    }

    .my-md-23 {
        margin-top: 17.5rem !important;
        margin-bottom: 17.5rem !important
    }

    .my-md-24 {
        margin-top: 20rem !important;
        margin-bottom: 20rem !important
    }

    .my-md-25 {
        margin-top: 22.5rem !important;
        margin-bottom: 22.5rem !important
    }

    .my-md-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-md-0 {
        margin-top: 0 !important
    }

    .mt-md-1 {
        margin-top: .25rem !important
    }

    .mt-md-2 {
        margin-top: .5rem !important
    }

    .mt-md-3 {
        margin-top: .75rem !important
    }

    .mt-md-4 {
        margin-top: 1rem !important
    }

    .mt-md-5 {
        margin-top: 1.25rem !important
    }

    .mt-md-6 {
        margin-top: 1.5rem !important
    }

    .mt-md-7 {
        margin-top: 1.75rem !important
    }

    .mt-md-8 {
        margin-top: 2rem !important
    }

    .mt-md-9 {
        margin-top: 2.25rem !important
    }

    .mt-md-10 {
        margin-top: 2.5rem !important
    }

    .mt-md-11 {
        margin-top: 3rem !important
    }

    .mt-md-12 {
        margin-top: 3.5rem !important
    }

    .mt-md-13 {
        margin-top: 4rem !important
    }

    .mt-md-14 {
        margin-top: 4.5rem !important
    }

    .mt-md-15 {
        margin-top: 5rem !important
    }

    .mt-md-16 {
        margin-top: 6rem !important
    }

    .mt-md-17 {
        margin-top: 7rem !important
    }

    .mt-md-18 {
        margin-top: 8rem !important
    }

    .mt-md-19 {
        margin-top: 9rem !important
    }

    .mt-md-20 {
        margin-top: 10rem !important
    }

    .mt-md-21 {
        margin-top: 12.5rem !important
    }

    .mt-md-22 {
        margin-top: 15rem !important
    }

    .mt-md-23 {
        margin-top: 17.5rem !important
    }

    .mt-md-24 {
        margin-top: 20rem !important
    }

    .mt-md-25 {
        margin-top: 22.5rem !important
    }

    .mt-md-auto {
        margin-top: auto !important
    }

    .me-md-0 {
        margin-right: 0 !important
    }

    .me-md-1 {
        margin-right: .25rem !important
    }

    .me-md-2 {
        margin-right: .5rem !important
    }

    .me-md-3 {
        margin-right: .75rem !important
    }

    .me-md-4 {
        margin-right: 1rem !important
    }

    .me-md-5 {
        margin-right: 1.25rem !important
    }

    .me-md-6 {
        margin-right: 1.5rem !important
    }

    .me-md-7 {
        margin-right: 1.75rem !important
    }

    .me-md-8 {
        margin-right: 2rem !important
    }

    .me-md-9 {
        margin-right: 2.25rem !important
    }

    .me-md-10 {
        margin-right: 2.5rem !important
    }

    .me-md-11 {
        margin-right: 3rem !important
    }

    .me-md-12 {
        margin-right: 3.5rem !important
    }

    .me-md-13 {
        margin-right: 4rem !important
    }

    .me-md-14 {
        margin-right: 4.5rem !important
    }

    .me-md-15 {
        margin-right: 5rem !important
    }

    .me-md-16 {
        margin-right: 6rem !important
    }

    .me-md-17 {
        margin-right: 7rem !important
    }

    .me-md-18 {
        margin-right: 8rem !important
    }

    .me-md-19 {
        margin-right: 9rem !important
    }

    .me-md-20 {
        margin-right: 10rem !important
    }

    .me-md-21 {
        margin-right: 12.5rem !important
    }

    .me-md-22 {
        margin-right: 15rem !important
    }

    .me-md-23 {
        margin-right: 17.5rem !important
    }

    .me-md-24 {
        margin-right: 20rem !important
    }

    .me-md-25 {
        margin-right: 22.5rem !important
    }

    .me-md-auto {
        margin-right: auto !important
    }

    .mb-md-0 {
        margin-bottom: 0 !important
    }

    .mb-md-1 {
        margin-bottom: .25rem !important
    }

    .mb-md-2 {
        margin-bottom: .5rem !important
    }

    .mb-md-3 {
        margin-bottom: .75rem !important
    }

    .mb-md-4 {
        margin-bottom: 1rem !important
    }

    .mb-md-5 {
        margin-bottom: 1.25rem !important
    }

    .mb-md-6 {
        margin-bottom: 1.5rem !important
    }

    .mb-md-7 {
        margin-bottom: 1.75rem !important
    }

    .mb-md-8 {
        margin-bottom: 2rem !important
    }

    .mb-md-9 {
        margin-bottom: 2.25rem !important
    }

    .mb-md-10 {
        margin-bottom: 2.5rem !important
    }

    .mb-md-11 {
        margin-bottom: 3rem !important
    }

    .mb-md-12 {
        margin-bottom: 3.5rem !important
    }

    .mb-md-13 {
        margin-bottom: 4rem !important
    }

    .mb-md-14 {
        margin-bottom: 4.5rem !important
    }

    .mb-md-15 {
        margin-bottom: 5rem !important
    }

    .mb-md-16 {
        margin-bottom: 6rem !important
    }

    .mb-md-17 {
        margin-bottom: 7rem !important
    }

    .mb-md-18 {
        margin-bottom: 8rem !important
    }

    .mb-md-19 {
        margin-bottom: 9rem !important
    }

    .mb-md-20 {
        margin-bottom: 10rem !important
    }

    .mb-md-21 {
        margin-bottom: 12.5rem !important
    }

    .mb-md-22 {
        margin-bottom: 15rem !important
    }

    .mb-md-23 {
        margin-bottom: 17.5rem !important
    }

    .mb-md-24 {
        margin-bottom: 20rem !important
    }

    .mb-md-25 {
        margin-bottom: 22.5rem !important
    }

    .mb-md-auto {
        margin-bottom: auto !important
    }

    .ms-md-0 {
        margin-left: 0 !important
    }

    .ms-md-1 {
        margin-left: .25rem !important
    }

    .ms-md-2 {
        margin-left: .5rem !important
    }

    .ms-md-3 {
        margin-left: .75rem !important
    }

    .ms-md-4 {
        margin-left: 1rem !important
    }

    .ms-md-5 {
        margin-left: 1.25rem !important
    }

    .ms-md-6 {
        margin-left: 1.5rem !important
    }

    .ms-md-7 {
        margin-left: 1.75rem !important
    }

    .ms-md-8 {
        margin-left: 2rem !important
    }

    .ms-md-9 {
        margin-left: 2.25rem !important
    }

    .ms-md-10 {
        margin-left: 2.5rem !important
    }

    .ms-md-11 {
        margin-left: 3rem !important
    }

    .ms-md-12 {
        margin-left: 3.5rem !important
    }

    .ms-md-13 {
        margin-left: 4rem !important
    }

    .ms-md-14 {
        margin-left: 4.5rem !important
    }

    .ms-md-15 {
        margin-left: 5rem !important
    }

    .ms-md-16 {
        margin-left: 6rem !important
    }

    .ms-md-17 {
        margin-left: 7rem !important
    }

    .ms-md-18 {
        margin-left: 8rem !important
    }

    .ms-md-19 {
        margin-left: 9rem !important
    }

    .ms-md-20 {
        margin-left: 10rem !important
    }

    .ms-md-21 {
        margin-left: 12.5rem !important
    }

    .ms-md-22 {
        margin-left: 15rem !important
    }

    .ms-md-23 {
        margin-left: 17.5rem !important
    }

    .ms-md-24 {
        margin-left: 20rem !important
    }

    .ms-md-25 {
        margin-left: 22.5rem !important
    }

    .ms-md-auto {
        margin-left: auto !important
    }

    .m-md-n1 {
        margin: -.25rem !important
    }

    .m-md-n2 {
        margin: -.5rem !important
    }

    .m-md-n3 {
        margin: -.75rem !important
    }

    .m-md-n4 {
        margin: -1rem !important
    }

    .m-md-n5 {
        margin: -1.25rem !important
    }

    .m-md-n6 {
        margin: -1.5rem !important
    }

    .m-md-n7 {
        margin: -1.75rem !important
    }

    .m-md-n8 {
        margin: -2rem !important
    }

    .m-md-n9 {
        margin: -2.25rem !important
    }

    .m-md-n10 {
        margin: -2.5rem !important
    }

    .m-md-n11 {
        margin: -3rem !important
    }

    .m-md-n12 {
        margin: -3.5rem !important
    }

    .m-md-n13 {
        margin: -4rem !important
    }

    .m-md-n14 {
        margin: -4.5rem !important
    }

    .m-md-n15 {
        margin: -5rem !important
    }

    .m-md-n16 {
        margin: -6rem !important
    }

    .m-md-n17 {
        margin: -7rem !important
    }

    .m-md-n18 {
        margin: -8rem !important
    }

    .m-md-n19 {
        margin: -9rem !important
    }

    .m-md-n20 {
        margin: -10rem !important
    }

    .m-md-n21 {
        margin: -12.5rem !important
    }

    .m-md-n22 {
        margin: -15rem !important
    }

    .m-md-n23 {
        margin: -17.5rem !important
    }

    .m-md-n24 {
        margin: -20rem !important
    }

    .m-md-n25 {
        margin: -22.5rem !important
    }

    .mx-md-n1 {
        margin-right: -.25rem !important;
        margin-left: -.25rem !important
    }

    .mx-md-n2 {
        margin-right: -.5rem !important;
        margin-left: -.5rem !important
    }

    .mx-md-n3 {
        margin-right: -.75rem !important;
        margin-left: -.75rem !important
    }

    .mx-md-n4 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-md-n5 {
        margin-right: -1.25rem !important;
        margin-left: -1.25rem !important
    }

    .mx-md-n6 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-md-n7 {
        margin-right: -1.75rem !important;
        margin-left: -1.75rem !important
    }

    .mx-md-n8 {
        margin-right: -2rem !important;
        margin-left: -2rem !important
    }

    .mx-md-n9 {
        margin-right: -2.25rem !important;
        margin-left: -2.25rem !important
    }

    .mx-md-n10 {
        margin-right: -2.5rem !important;
        margin-left: -2.5rem !important
    }

    .mx-md-n11 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .mx-md-n12 {
        margin-right: -3.5rem !important;
        margin-left: -3.5rem !important
    }

    .mx-md-n13 {
        margin-right: -4rem !important;
        margin-left: -4rem !important
    }

    .mx-md-n14 {
        margin-right: -4.5rem !important;
        margin-left: -4.5rem !important
    }

    .mx-md-n15 {
        margin-right: -5rem !important;
        margin-left: -5rem !important
    }

    .mx-md-n16 {
        margin-right: -6rem !important;
        margin-left: -6rem !important
    }

    .mx-md-n17 {
        margin-right: -7rem !important;
        margin-left: -7rem !important
    }

    .mx-md-n18 {
        margin-right: -8rem !important;
        margin-left: -8rem !important
    }

    .mx-md-n19 {
        margin-right: -9rem !important;
        margin-left: -9rem !important
    }

    .mx-md-n20 {
        margin-right: -10rem !important;
        margin-left: -10rem !important
    }

    .mx-md-n21 {
        margin-right: -12.5rem !important;
        margin-left: -12.5rem !important
    }

    .mx-md-n22 {
        margin-right: -15rem !important;
        margin-left: -15rem !important
    }

    .mx-md-n23 {
        margin-right: -17.5rem !important;
        margin-left: -17.5rem !important
    }

    .mx-md-n24 {
        margin-right: -20rem !important;
        margin-left: -20rem !important
    }

    .mx-md-n25 {
        margin-right: -22.5rem !important;
        margin-left: -22.5rem !important
    }

    .my-md-n1 {
        margin-top: -.25rem !important;
        margin-bottom: -.25rem !important
    }

    .my-md-n2 {
        margin-top: -.5rem !important;
        margin-bottom: -.5rem !important
    }

    .my-md-n3 {
        margin-top: -.75rem !important;
        margin-bottom: -.75rem !important
    }

    .my-md-n4 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-md-n5 {
        margin-top: -1.25rem !important;
        margin-bottom: -1.25rem !important
    }

    .my-md-n6 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-md-n7 {
        margin-top: -1.75rem !important;
        margin-bottom: -1.75rem !important
    }

    .my-md-n8 {
        margin-top: -2rem !important;
        margin-bottom: -2rem !important
    }

    .my-md-n9 {
        margin-top: -2.25rem !important;
        margin-bottom: -2.25rem !important
    }

    .my-md-n10 {
        margin-top: -2.5rem !important;
        margin-bottom: -2.5rem !important
    }

    .my-md-n11 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .my-md-n12 {
        margin-top: -3.5rem !important;
        margin-bottom: -3.5rem !important
    }

    .my-md-n13 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important
    }

    .my-md-n14 {
        margin-top: -4.5rem !important;
        margin-bottom: -4.5rem !important
    }

    .my-md-n15 {
        margin-top: -5rem !important;
        margin-bottom: -5rem !important
    }

    .my-md-n16 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important
    }

    .my-md-n17 {
        margin-top: -7rem !important;
        margin-bottom: -7rem !important
    }

    .my-md-n18 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important
    }

    .my-md-n19 {
        margin-top: -9rem !important;
        margin-bottom: -9rem !important
    }

    .my-md-n20 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important
    }

    .my-md-n21 {
        margin-top: -12.5rem !important;
        margin-bottom: -12.5rem !important
    }

    .my-md-n22 {
        margin-top: -15rem !important;
        margin-bottom: -15rem !important
    }

    .my-md-n23 {
        margin-top: -17.5rem !important;
        margin-bottom: -17.5rem !important
    }

    .my-md-n24 {
        margin-top: -20rem !important;
        margin-bottom: -20rem !important
    }

    .my-md-n25 {
        margin-top: -22.5rem !important;
        margin-bottom: -22.5rem !important
    }

    .mt-md-n1 {
        margin-top: -.25rem !important
    }

    .mt-md-n2 {
        margin-top: -.5rem !important
    }

    .mt-md-n3 {
        margin-top: -.75rem !important
    }

    .mt-md-n4 {
        margin-top: -1rem !important
    }

    .mt-md-n5 {
        margin-top: -1.25rem !important
    }

    .mt-md-n6 {
        margin-top: -1.5rem !important
    }

    .mt-md-n7 {
        margin-top: -1.75rem !important
    }

    .mt-md-n8 {
        margin-top: -2rem !important
    }

    .mt-md-n9 {
        margin-top: -2.25rem !important
    }

    .mt-md-n10 {
        margin-top: -2.5rem !important
    }

    .mt-md-n11 {
        margin-top: -3rem !important
    }

    .mt-md-n12 {
        margin-top: -3.5rem !important
    }

    .mt-md-n13 {
        margin-top: -4rem !important
    }

    .mt-md-n14 {
        margin-top: -4.5rem !important
    }

    .mt-md-n15 {
        margin-top: -5rem !important
    }

    .mt-md-n16 {
        margin-top: -6rem !important
    }

    .mt-md-n17 {
        margin-top: -7rem !important
    }

    .mt-md-n18 {
        margin-top: -8rem !important
    }

    .mt-md-n19 {
        margin-top: -9rem !important
    }

    .mt-md-n20 {
        margin-top: -10rem !important
    }

    .mt-md-n21 {
        margin-top: -12.5rem !important
    }

    .mt-md-n22 {
        margin-top: -15rem !important
    }

    .mt-md-n23 {
        margin-top: -17.5rem !important
    }

    .mt-md-n24 {
        margin-top: -20rem !important
    }

    .mt-md-n25 {
        margin-top: -22.5rem !important
    }

    .me-md-n1 {
        margin-right: -.25rem !important
    }

    .me-md-n2 {
        margin-right: -.5rem !important
    }

    .me-md-n3 {
        margin-right: -.75rem !important
    }

    .me-md-n4 {
        margin-right: -1rem !important
    }

    .me-md-n5 {
        margin-right: -1.25rem !important
    }

    .me-md-n6 {
        margin-right: -1.5rem !important
    }

    .me-md-n7 {
        margin-right: -1.75rem !important
    }

    .me-md-n8 {
        margin-right: -2rem !important
    }

    .me-md-n9 {
        margin-right: -2.25rem !important
    }

    .me-md-n10 {
        margin-right: -2.5rem !important
    }

    .me-md-n11 {
        margin-right: -3rem !important
    }

    .me-md-n12 {
        margin-right: -3.5rem !important
    }

    .me-md-n13 {
        margin-right: -4rem !important
    }

    .me-md-n14 {
        margin-right: -4.5rem !important
    }

    .me-md-n15 {
        margin-right: -5rem !important
    }

    .me-md-n16 {
        margin-right: -6rem !important
    }

    .me-md-n17 {
        margin-right: -7rem !important
    }

    .me-md-n18 {
        margin-right: -8rem !important
    }

    .me-md-n19 {
        margin-right: -9rem !important
    }

    .me-md-n20 {
        margin-right: -10rem !important
    }

    .me-md-n21 {
        margin-right: -12.5rem !important
    }

    .me-md-n22 {
        margin-right: -15rem !important
    }

    .me-md-n23 {
        margin-right: -17.5rem !important
    }

    .me-md-n24 {
        margin-right: -20rem !important
    }

    .me-md-n25 {
        margin-right: -22.5rem !important
    }

    .mb-md-n1 {
        margin-bottom: -.25rem !important
    }

    .mb-md-n2 {
        margin-bottom: -.5rem !important
    }

    .mb-md-n3 {
        margin-bottom: -.75rem !important
    }

    .mb-md-n4 {
        margin-bottom: -1rem !important
    }

    .mb-md-n5 {
        margin-bottom: -1.25rem !important
    }

    .mb-md-n6 {
        margin-bottom: -1.5rem !important
    }

    .mb-md-n7 {
        margin-bottom: -1.75rem !important
    }

    .mb-md-n8 {
        margin-bottom: -2rem !important
    }

    .mb-md-n9 {
        margin-bottom: -2.25rem !important
    }

    .mb-md-n10 {
        margin-bottom: -2.5rem !important
    }

    .mb-md-n11 {
        margin-bottom: -3rem !important
    }

    .mb-md-n12 {
        margin-bottom: -3.5rem !important
    }

    .mb-md-n13 {
        margin-bottom: -4rem !important
    }

    .mb-md-n14 {
        margin-bottom: -4.5rem !important
    }

    .mb-md-n15 {
        margin-bottom: -5rem !important
    }

    .mb-md-n16 {
        margin-bottom: -6rem !important
    }

    .mb-md-n17 {
        margin-bottom: -7rem !important
    }

    .mb-md-n18 {
        margin-bottom: -8rem !important
    }

    .mb-md-n19 {
        margin-bottom: -9rem !important
    }

    .mb-md-n20 {
        margin-bottom: -10rem !important
    }

    .mb-md-n21 {
        margin-bottom: -12.5rem !important
    }

    .mb-md-n22 {
        margin-bottom: -15rem !important
    }

    .mb-md-n23 {
        margin-bottom: -17.5rem !important
    }

    .mb-md-n24 {
        margin-bottom: -20rem !important
    }

    .mb-md-n25 {
        margin-bottom: -22.5rem !important
    }

    .ms-md-n1 {
        margin-left: -.25rem !important
    }

    .ms-md-n2 {
        margin-left: -.5rem !important
    }

    .ms-md-n3 {
        margin-left: -.75rem !important
    }

    .ms-md-n4 {
        margin-left: -1rem !important
    }

    .ms-md-n5 {
        margin-left: -1.25rem !important
    }

    .ms-md-n6 {
        margin-left: -1.5rem !important
    }

    .ms-md-n7 {
        margin-left: -1.75rem !important
    }

    .ms-md-n8 {
        margin-left: -2rem !important
    }

    .ms-md-n9 {
        margin-left: -2.25rem !important
    }

    .ms-md-n10 {
        margin-left: -2.5rem !important
    }

    .ms-md-n11 {
        margin-left: -3rem !important
    }

    .ms-md-n12 {
        margin-left: -3.5rem !important
    }

    .ms-md-n13 {
        margin-left: -4rem !important
    }

    .ms-md-n14 {
        margin-left: -4.5rem !important
    }

    .ms-md-n15 {
        margin-left: -5rem !important
    }

    .ms-md-n16 {
        margin-left: -6rem !important
    }

    .ms-md-n17 {
        margin-left: -7rem !important
    }

    .ms-md-n18 {
        margin-left: -8rem !important
    }

    .ms-md-n19 {
        margin-left: -9rem !important
    }

    .ms-md-n20 {
        margin-left: -10rem !important
    }

    .ms-md-n21 {
        margin-left: -12.5rem !important
    }

    .ms-md-n22 {
        margin-left: -15rem !important
    }

    .ms-md-n23 {
        margin-left: -17.5rem !important
    }

    .ms-md-n24 {
        margin-left: -20rem !important
    }

    .ms-md-n25 {
        margin-left: -22.5rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .p-md-1 {
        padding: .25rem !important
    }

    .p-md-2 {
        padding: .5rem !important
    }

    .p-md-3 {
        padding: .75rem !important
    }

    .p-md-4 {
        padding: 1rem !important
    }

    .p-md-5 {
        padding: 1.25rem !important
    }

    .p-md-6 {
        padding: 1.5rem !important
    }

    .p-md-7 {
        padding: 1.75rem !important
    }

    .p-md-8 {
        padding: 2rem !important
    }

    .p-md-9 {
        padding: 2.25rem !important
    }

    .p-md-10 {
        padding: 2.5rem !important
    }

    .p-md-11 {
        padding: 3rem !important
    }

    .p-md-12 {
        padding: 3.5rem !important
    }

    .p-md-13 {
        padding: 4rem !important
    }

    .p-md-14 {
        padding: 4.5rem !important
    }

    .p-md-15 {
        padding: 5rem !important
    }

    .p-md-16 {
        padding: 6rem !important
    }

    .p-md-17 {
        padding: 7rem !important
    }

    .p-md-18 {
        padding: 8rem !important
    }

    .p-md-19 {
        padding: 9rem !important
    }

    .p-md-20 {
        padding: 10rem !important
    }

    .p-md-21 {
        padding: 12.5rem !important
    }

    .p-md-22 {
        padding: 15rem !important
    }

    .p-md-23 {
        padding: 17.5rem !important
    }

    .p-md-24 {
        padding: 20rem !important
    }

    .p-md-25 {
        padding: 22.5rem !important
    }

    .px-md-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-md-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-md-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-md-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important
    }

    .px-md-4 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-md-5 {
        padding-right: 1.25rem !important;
        padding-left: 1.25rem !important
    }

    .px-md-6 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-md-7 {
        padding-right: 1.75rem !important;
        padding-left: 1.75rem !important
    }

    .px-md-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important
    }

    .px-md-9 {
        padding-right: 2.25rem !important;
        padding-left: 2.25rem !important
    }

    .px-md-10 {
        padding-right: 2.5rem !important;
        padding-left: 2.5rem !important
    }

    .px-md-11 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .px-md-12 {
        padding-right: 3.5rem !important;
        padding-left: 3.5rem !important
    }

    .px-md-13 {
        padding-right: 4rem !important;
        padding-left: 4rem !important
    }

    .px-md-14 {
        padding-right: 4.5rem !important;
        padding-left: 4.5rem !important
    }

    .px-md-15 {
        padding-right: 5rem !important;
        padding-left: 5rem !important
    }

    .px-md-16 {
        padding-right: 6rem !important;
        padding-left: 6rem !important
    }

    .px-md-17 {
        padding-right: 7rem !important;
        padding-left: 7rem !important
    }

    .px-md-18 {
        padding-right: 8rem !important;
        padding-left: 8rem !important
    }

    .px-md-19 {
        padding-right: 9rem !important;
        padding-left: 9rem !important
    }

    .px-md-20 {
        padding-right: 10rem !important;
        padding-left: 10rem !important
    }

    .px-md-21 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important
    }

    .px-md-22 {
        padding-right: 15rem !important;
        padding-left: 15rem !important
    }

    .px-md-23 {
        padding-right: 17.5rem !important;
        padding-left: 17.5rem !important
    }

    .px-md-24 {
        padding-right: 20rem !important;
        padding-left: 20rem !important
    }

    .px-md-25 {
        padding-right: 22.5rem !important;
        padding-left: 22.5rem !important
    }

    .py-md-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-md-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-md-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-md-3 {
        padding-top: .75rem !important;
        padding-bottom: .75rem !important
    }

    .py-md-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-md-5 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important
    }

    .py-md-6 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-md-7 {
        padding-top: 1.75rem !important;
        padding-bottom: 1.75rem !important
    }

    .py-md-8 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .py-md-9 {
        padding-top: 2.25rem !important;
        padding-bottom: 2.25rem !important
    }

    .py-md-10 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important
    }

    .py-md-11 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .py-md-12 {
        padding-top: 3.5rem !important;
        padding-bottom: 3.5rem !important
    }

    .py-md-13 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important
    }

    .py-md-14 {
        padding-top: 4.5rem !important;
        padding-bottom: 4.5rem !important
    }

    .py-md-15 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important
    }

    .py-md-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important
    }

    .py-md-17 {
        padding-top: 7rem !important;
        padding-bottom: 7rem !important
    }

    .py-md-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important
    }

    .py-md-19 {
        padding-top: 9rem !important;
        padding-bottom: 9rem !important
    }

    .py-md-20 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important
    }

    .py-md-21 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important
    }

    .py-md-22 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important
    }

    .py-md-23 {
        padding-top: 17.5rem !important;
        padding-bottom: 17.5rem !important
    }

    .py-md-24 {
        padding-top: 20rem !important;
        padding-bottom: 20rem !important
    }

    .py-md-25 {
        padding-top: 22.5rem !important;
        padding-bottom: 22.5rem !important
    }

    .pt-md-0 {
        padding-top: 0 !important
    }

    .pt-md-1 {
        padding-top: .25rem !important
    }

    .pt-md-2 {
        padding-top: .5rem !important
    }

    .pt-md-3 {
        padding-top: .75rem !important
    }

    .pt-md-4 {
        padding-top: 1rem !important
    }

    .pt-md-5 {
        padding-top: 1.25rem !important
    }

    .pt-md-6 {
        padding-top: 1.5rem !important
    }

    .pt-md-7 {
        padding-top: 1.75rem !important
    }

    .pt-md-8 {
        padding-top: 2rem !important
    }

    .pt-md-9 {
        padding-top: 2.25rem !important
    }

    .pt-md-10 {
        padding-top: 2.5rem !important
    }

    .pt-md-11 {
        padding-top: 3rem !important
    }

    .pt-md-12 {
        padding-top: 3.5rem !important
    }

    .pt-md-13 {
        padding-top: 4rem !important
    }

    .pt-md-14 {
        padding-top: 4.5rem !important
    }

    .pt-md-15 {
        padding-top: 5rem !important
    }

    .pt-md-16 {
        padding-top: 6rem !important
    }

    .pt-md-17 {
        padding-top: 7rem !important
    }

    .pt-md-18 {
        padding-top: 8rem !important
    }

    .pt-md-19 {
        padding-top: 9rem !important
    }

    .pt-md-20 {
        padding-top: 10rem !important
    }

    .pt-md-21 {
        padding-top: 12.5rem !important
    }

    .pt-md-22 {
        padding-top: 15rem !important
    }

    .pt-md-23 {
        padding-top: 17.5rem !important
    }

    .pt-md-24 {
        padding-top: 20rem !important
    }

    .pt-md-25 {
        padding-top: 22.5rem !important
    }

    .pe-md-0 {
        padding-right: 0 !important
    }

    .pe-md-1 {
        padding-right: .25rem !important
    }

    .pe-md-2 {
        padding-right: .5rem !important
    }

    .pe-md-3 {
        padding-right: .75rem !important
    }

    .pe-md-4 {
        padding-right: 1rem !important
    }

    .pe-md-5 {
        padding-right: 1.25rem !important
    }

    .pe-md-6 {
        padding-right: 1.5rem !important
    }

    .pe-md-7 {
        padding-right: 1.75rem !important
    }

    .pe-md-8 {
        padding-right: 2rem !important
    }

    .pe-md-9 {
        padding-right: 2.25rem !important
    }

    .pe-md-10 {
        padding-right: 2.5rem !important
    }

    .pe-md-11 {
        padding-right: 3rem !important
    }

    .pe-md-12 {
        padding-right: 3.5rem !important
    }

    .pe-md-13 {
        padding-right: 4rem !important
    }

    .pe-md-14 {
        padding-right: 4.5rem !important
    }

    .pe-md-15 {
        padding-right: 5rem !important
    }

    .pe-md-16 {
        padding-right: 6rem !important
    }

    .pe-md-17 {
        padding-right: 7rem !important
    }

    .pe-md-18 {
        padding-right: 8rem !important
    }

    .pe-md-19 {
        padding-right: 9rem !important
    }

    .pe-md-20 {
        padding-right: 10rem !important
    }

    .pe-md-21 {
        padding-right: 12.5rem !important
    }

    .pe-md-22 {
        padding-right: 15rem !important
    }

    .pe-md-23 {
        padding-right: 17.5rem !important
    }

    .pe-md-24 {
        padding-right: 20rem !important
    }

    .pe-md-25 {
        padding-right: 22.5rem !important
    }

    .pb-md-0 {
        padding-bottom: 0 !important
    }

    .pb-md-1 {
        padding-bottom: .25rem !important
    }

    .pb-md-2 {
        padding-bottom: .5rem !important
    }

    .pb-md-3 {
        padding-bottom: .75rem !important
    }

    .pb-md-4 {
        padding-bottom: 1rem !important
    }

    .pb-md-5 {
        padding-bottom: 1.25rem !important
    }

    .pb-md-6 {
        padding-bottom: 1.5rem !important
    }

    .pb-md-7 {
        padding-bottom: 1.75rem !important
    }

    .pb-md-8 {
        padding-bottom: 2rem !important
    }

    .pb-md-9 {
        padding-bottom: 2.25rem !important
    }

    .pb-md-10 {
        padding-bottom: 2.5rem !important
    }

    .pb-md-11 {
        padding-bottom: 3rem !important
    }

    .pb-md-12 {
        padding-bottom: 3.5rem !important
    }

    .pb-md-13 {
        padding-bottom: 4rem !important
    }

    .pb-md-14 {
        padding-bottom: 4.5rem !important
    }

    .pb-md-15 {
        padding-bottom: 5rem !important
    }

    .pb-md-16 {
        padding-bottom: 6rem !important
    }

    .pb-md-17 {
        padding-bottom: 7rem !important
    }

    .pb-md-18 {
        padding-bottom: 8rem !important
    }

    .pb-md-19 {
        padding-bottom: 9rem !important
    }

    .pb-md-20 {
        padding-bottom: 10rem !important
    }

    .pb-md-21 {
        padding-bottom: 12.5rem !important
    }

    .pb-md-22 {
        padding-bottom: 15rem !important
    }

    .pb-md-23 {
        padding-bottom: 17.5rem !important
    }

    .pb-md-24 {
        padding-bottom: 20rem !important
    }

    .pb-md-25 {
        padding-bottom: 22.5rem !important
    }

    .ps-md-0 {
        padding-left: 0 !important
    }

    .ps-md-1 {
        padding-left: .25rem !important
    }

    .ps-md-2 {
        padding-left: .5rem !important
    }

    .ps-md-3 {
        padding-left: .75rem !important
    }

    .ps-md-4 {
        padding-left: 1rem !important
    }

    .ps-md-5 {
        padding-left: 1.25rem !important
    }

    .ps-md-6 {
        padding-left: 1.5rem !important
    }

    .ps-md-7 {
        padding-left: 1.75rem !important
    }

    .ps-md-8 {
        padding-left: 2rem !important
    }

    .ps-md-9 {
        padding-left: 2.25rem !important
    }

    .ps-md-10 {
        padding-left: 2.5rem !important
    }

    .ps-md-11 {
        padding-left: 3rem !important
    }

    .ps-md-12 {
        padding-left: 3.5rem !important
    }

    .ps-md-13 {
        padding-left: 4rem !important
    }

    .ps-md-14 {
        padding-left: 4.5rem !important
    }

    .ps-md-15 {
        padding-left: 5rem !important
    }

    .ps-md-16 {
        padding-left: 6rem !important
    }

    .ps-md-17 {
        padding-left: 7rem !important
    }

    .ps-md-18 {
        padding-left: 8rem !important
    }

    .ps-md-19 {
        padding-left: 9rem !important
    }

    .ps-md-20 {
        padding-left: 10rem !important
    }

    .ps-md-21 {
        padding-left: 12.5rem !important
    }

    .ps-md-22 {
        padding-left: 15rem !important
    }

    .ps-md-23 {
        padding-left: 17.5rem !important
    }

    .ps-md-24 {
        padding-left: 20rem !important
    }

    .ps-md-25 {
        padding-left: 22.5rem !important
    }

    .gap-md-0 {
        gap: 0 !important
    }

    .gap-md-1 {
        gap: .25rem !important
    }

    .gap-md-2 {
        gap: .5rem !important
    }

    .gap-md-3 {
        gap: .75rem !important
    }

    .gap-md-4 {
        gap: 1rem !important
    }

    .gap-md-5 {
        gap: 1.25rem !important
    }

    .gap-md-6 {
        gap: 1.5rem !important
    }

    .gap-md-7 {
        gap: 1.75rem !important
    }

    .gap-md-8 {
        gap: 2rem !important
    }

    .gap-md-9 {
        gap: 2.25rem !important
    }

    .gap-md-10 {
        gap: 2.5rem !important
    }

    .gap-md-11 {
        gap: 3rem !important
    }

    .gap-md-12 {
        gap: 3.5rem !important
    }

    .gap-md-13 {
        gap: 4rem !important
    }

    .gap-md-14 {
        gap: 4.5rem !important
    }

    .gap-md-15 {
        gap: 5rem !important
    }

    .gap-md-16 {
        gap: 6rem !important
    }

    .gap-md-17 {
        gap: 7rem !important
    }

    .gap-md-18 {
        gap: 8rem !important
    }

    .gap-md-19 {
        gap: 9rem !important
    }

    .gap-md-20 {
        gap: 10rem !important
    }

    .gap-md-21 {
        gap: 12.5rem !important
    }

    .gap-md-22 {
        gap: 15rem !important
    }

    .gap-md-23 {
        gap: 17.5rem !important
    }

    .gap-md-24 {
        gap: 20rem !important
    }

    .gap-md-25 {
        gap: 22.5rem !important
    }

    .text-md-start {
        text-align: left !important
    }

    .text-md-end {
        text-align: right !important
    }

    .text-md-center {
        text-align: center !important
    }
}

@media (min-width:992px) {
    .float-lg-start {
        float: left !important
    }

    .float-lg-end {
        float: right !important
    }

    .float-lg-none {
        float: none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
    }

    .d-lg-block {
        display: block !important
    }

    .d-lg-grid {
        display: grid !important
    }

    .d-lg-table {
        display: table !important
    }

    .d-lg-table-row {
        display: table-row !important
    }

    .d-lg-table-cell {
        display: table-cell !important
    }

    .d-lg-flex {
        display: flex !important
    }

    .d-lg-inline-flex {
        display: inline-flex !important
    }

    .d-lg-none {
        display: none !important
    }

    .flex-lg-fill {
        flex: 1 1 auto !important
    }

    .flex-lg-row {
        flex-direction: row !important
    }

    .flex-lg-column {
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-lg-grow-0 {
        flex-grow: 0 !important
    }

    .flex-lg-grow-1 {
        flex-grow: 1 !important
    }

    .flex-lg-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-lg-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-lg-wrap {
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-lg-start {
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        justify-content: center !important
    }

    .justify-content-lg-between {
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        justify-content: space-around !important
    }

    .justify-content-lg-evenly {
        justify-content: space-evenly !important
    }

    .align-items-lg-start {
        align-items: flex-start !important
    }

    .align-items-lg-end {
        align-items: flex-end !important
    }

    .align-items-lg-center {
        align-items: center !important
    }

    .align-items-lg-baseline {
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        align-items: stretch !important
    }

    .align-content-lg-start {
        align-content: flex-start !important
    }

    .align-content-lg-end {
        align-content: flex-end !important
    }

    .align-content-lg-center {
        align-content: center !important
    }

    .align-content-lg-between {
        align-content: space-between !important
    }

    .align-content-lg-around {
        align-content: space-around !important
    }

    .align-content-lg-stretch {
        align-content: stretch !important
    }

    .align-self-lg-auto {
        align-self: auto !important
    }

    .align-self-lg-start {
        align-self: flex-start !important
    }

    .align-self-lg-end {
        align-self: flex-end !important
    }

    .align-self-lg-center {
        align-self: center !important
    }

    .align-self-lg-baseline {
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        align-self: stretch !important
    }

    .order-lg-first {
        order: -1 !important
    }

    .order-lg-0 {
        order: 0 !important
    }

    .order-lg-1 {
        order: 1 !important
    }

    .order-lg-2 {
        order: 2 !important
    }

    .order-lg-3 {
        order: 3 !important
    }

    .order-lg-4 {
        order: 4 !important
    }

    .order-lg-5 {
        order: 5 !important
    }

    .order-lg-last {
        order: 6 !important
    }

    .m-lg-0 {
        margin: 0 !important
    }

    .m-lg-1 {
        margin: .25rem !important
    }

    .m-lg-2 {
        margin: .5rem !important
    }

    .m-lg-3 {
        margin: .75rem !important
    }

    .m-lg-4 {
        margin: 1rem !important
    }

    .m-lg-5 {
        margin: 1.25rem !important
    }

    .m-lg-6 {
        margin: 1.5rem !important
    }

    .m-lg-7 {
        margin: 1.75rem !important
    }

    .m-lg-8 {
        margin: 2rem !important
    }

    .m-lg-9 {
        margin: 2.25rem !important
    }

    .m-lg-10 {
        margin: 2.5rem !important
    }

    .m-lg-11 {
        margin: 3rem !important
    }

    .m-lg-12 {
        margin: 3.5rem !important
    }

    .m-lg-13 {
        margin: 4rem !important
    }

    .m-lg-14 {
        margin: 4.5rem !important
    }

    .m-lg-15 {
        margin: 5rem !important
    }

    .m-lg-16 {
        margin: 6rem !important
    }

    .m-lg-17 {
        margin: 7rem !important
    }

    .m-lg-18 {
        margin: 8rem !important
    }

    .m-lg-19 {
        margin: 9rem !important
    }

    .m-lg-20 {
        margin: 10rem !important
    }

    .m-lg-21 {
        margin: 12.5rem !important
    }

    .m-lg-22 {
        margin: 15rem !important
    }

    .m-lg-23 {
        margin: 17.5rem !important
    }

    .m-lg-24 {
        margin: 20rem !important
    }

    .m-lg-25 {
        margin: 22.5rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mx-lg-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-lg-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-lg-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-lg-3 {
        margin-right: .75rem !important;
        margin-left: .75rem !important
    }

    .mx-lg-4 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-lg-5 {
        margin-right: 1.25rem !important;
        margin-left: 1.25rem !important
    }

    .mx-lg-6 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-lg-7 {
        margin-right: 1.75rem !important;
        margin-left: 1.75rem !important
    }

    .mx-lg-8 {
        margin-right: 2rem !important;
        margin-left: 2rem !important
    }

    .mx-lg-9 {
        margin-right: 2.25rem !important;
        margin-left: 2.25rem !important
    }

    .mx-lg-10 {
        margin-right: 2.5rem !important;
        margin-left: 2.5rem !important
    }

    .mx-lg-11 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-lg-12 {
        margin-right: 3.5rem !important;
        margin-left: 3.5rem !important
    }

    .mx-lg-13 {
        margin-right: 4rem !important;
        margin-left: 4rem !important
    }

    .mx-lg-14 {
        margin-right: 4.5rem !important;
        margin-left: 4.5rem !important
    }

    .mx-lg-15 {
        margin-right: 5rem !important;
        margin-left: 5rem !important
    }

    .mx-lg-16 {
        margin-right: 6rem !important;
        margin-left: 6rem !important
    }

    .mx-lg-17 {
        margin-right: 7rem !important;
        margin-left: 7rem !important
    }

    .mx-lg-18 {
        margin-right: 8rem !important;
        margin-left: 8rem !important
    }

    .mx-lg-19 {
        margin-right: 9rem !important;
        margin-left: 9rem !important
    }

    .mx-lg-20 {
        margin-right: 10rem !important;
        margin-left: 10rem !important
    }

    .mx-lg-21 {
        margin-right: 12.5rem !important;
        margin-left: 12.5rem !important
    }

    .mx-lg-22 {
        margin-right: 15rem !important;
        margin-left: 15rem !important
    }

    .mx-lg-23 {
        margin-right: 17.5rem !important;
        margin-left: 17.5rem !important
    }

    .mx-lg-24 {
        margin-right: 20rem !important;
        margin-left: 20rem !important
    }

    .mx-lg-25 {
        margin-right: 22.5rem !important;
        margin-left: 22.5rem !important
    }

    .mx-lg-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-lg-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-lg-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-lg-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-lg-3 {
        margin-top: .75rem !important;
        margin-bottom: .75rem !important
    }

    .my-lg-4 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-lg-5 {
        margin-top: 1.25rem !important;
        margin-bottom: 1.25rem !important
    }

    .my-lg-6 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-lg-7 {
        margin-top: 1.75rem !important;
        margin-bottom: 1.75rem !important
    }

    .my-lg-8 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important
    }

    .my-lg-9 {
        margin-top: 2.25rem !important;
        margin-bottom: 2.25rem !important
    }

    .my-lg-10 {
        margin-top: 2.5rem !important;
        margin-bottom: 2.5rem !important
    }

    .my-lg-11 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-lg-12 {
        margin-top: 3.5rem !important;
        margin-bottom: 3.5rem !important
    }

    .my-lg-13 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important
    }

    .my-lg-14 {
        margin-top: 4.5rem !important;
        margin-bottom: 4.5rem !important
    }

    .my-lg-15 {
        margin-top: 5rem !important;
        margin-bottom: 5rem !important
    }

    .my-lg-16 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important
    }

    .my-lg-17 {
        margin-top: 7rem !important;
        margin-bottom: 7rem !important
    }

    .my-lg-18 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important
    }

    .my-lg-19 {
        margin-top: 9rem !important;
        margin-bottom: 9rem !important
    }

    .my-lg-20 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important
    }

    .my-lg-21 {
        margin-top: 12.5rem !important;
        margin-bottom: 12.5rem !important
    }

    .my-lg-22 {
        margin-top: 15rem !important;
        margin-bottom: 15rem !important
    }

    .my-lg-23 {
        margin-top: 17.5rem !important;
        margin-bottom: 17.5rem !important
    }

    .my-lg-24 {
        margin-top: 20rem !important;
        margin-bottom: 20rem !important
    }

    .my-lg-25 {
        margin-top: 22.5rem !important;
        margin-bottom: 22.5rem !important
    }

    .my-lg-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-lg-0 {
        margin-top: 0 !important
    }

    .mt-lg-1 {
        margin-top: .25rem !important
    }

    .mt-lg-2 {
        margin-top: .5rem !important
    }

    .mt-lg-3 {
        margin-top: .75rem !important
    }

    .mt-lg-4 {
        margin-top: 1rem !important
    }

    .mt-lg-5 {
        margin-top: 1.25rem !important
    }

    .mt-lg-6 {
        margin-top: 1.5rem !important
    }

    .mt-lg-7 {
        margin-top: 1.75rem !important
    }

    .mt-lg-8 {
        margin-top: 2rem !important
    }

    .mt-lg-9 {
        margin-top: 2.25rem !important
    }

    .mt-lg-10 {
        margin-top: 2.5rem !important
    }

    .mt-lg-11 {
        margin-top: 3rem !important
    }

    .mt-lg-12 {
        margin-top: 3.5rem !important
    }

    .mt-lg-13 {
        margin-top: 4rem !important
    }

    .mt-lg-14 {
        margin-top: 4.5rem !important
    }

    .mt-lg-15 {
        margin-top: 5rem !important
    }

    .mt-lg-16 {
        margin-top: 6rem !important
    }

    .mt-lg-17 {
        margin-top: 7rem !important
    }

    .mt-lg-18 {
        margin-top: 8rem !important
    }

    .mt-lg-19 {
        margin-top: 9rem !important
    }

    .mt-lg-20 {
        margin-top: 10rem !important
    }

    .mt-lg-21 {
        margin-top: 12.5rem !important
    }

    .mt-lg-22 {
        margin-top: 15rem !important
    }

    .mt-lg-23 {
        margin-top: 17.5rem !important
    }

    .mt-lg-24 {
        margin-top: 20rem !important
    }

    .mt-lg-25 {
        margin-top: 22.5rem !important
    }

    .mt-lg-auto {
        margin-top: auto !important
    }

    .me-lg-0 {
        margin-right: 0 !important
    }

    .me-lg-1 {
        margin-right: .25rem !important
    }

    .me-lg-2 {
        margin-right: .5rem !important
    }

    .me-lg-3 {
        margin-right: .75rem !important
    }

    .me-lg-4 {
        margin-right: 1rem !important
    }

    .me-lg-5 {
        margin-right: 1.25rem !important
    }

    .me-lg-6 {
        margin-right: 1.5rem !important
    }

    .me-lg-7 {
        margin-right: 1.75rem !important
    }

    .me-lg-8 {
        margin-right: 2rem !important
    }

    .me-lg-9 {
        margin-right: 2.25rem !important
    }

    .me-lg-10 {
        margin-right: 2.5rem !important
    }

    .me-lg-11 {
        margin-right: 3rem !important
    }

    .me-lg-12 {
        margin-right: 3.5rem !important
    }

    .me-lg-13 {
        margin-right: 4rem !important
    }

    .me-lg-14 {
        margin-right: 4.5rem !important
    }

    .me-lg-15 {
        margin-right: 5rem !important
    }

    .me-lg-16 {
        margin-right: 6rem !important
    }

    .me-lg-17 {
        margin-right: 7rem !important
    }

    .me-lg-18 {
        margin-right: 8rem !important
    }

    .me-lg-19 {
        margin-right: 9rem !important
    }

    .me-lg-20 {
        margin-right: 10rem !important
    }

    .me-lg-21 {
        margin-right: 12.5rem !important
    }

    .me-lg-22 {
        margin-right: 15rem !important
    }

    .me-lg-23 {
        margin-right: 17.5rem !important
    }

    .me-lg-24 {
        margin-right: 20rem !important
    }

    .me-lg-25 {
        margin-right: 22.5rem !important
    }

    .me-lg-auto {
        margin-right: auto !important
    }

    .mb-lg-0 {
        margin-bottom: 0 !important
    }

    .mb-lg-1 {
        margin-bottom: .25rem !important
    }

    .mb-lg-2 {
        margin-bottom: .5rem !important
    }

    .mb-lg-3 {
        margin-bottom: .75rem !important
    }

    .mb-lg-4 {
        margin-bottom: 1rem !important
    }

    .mb-lg-5 {
        margin-bottom: 1.25rem !important
    }

    .mb-lg-6 {
        margin-bottom: 1.5rem !important
    }

    .mb-lg-7 {
        margin-bottom: 1.75rem !important
    }

    .mb-lg-8 {
        margin-bottom: 2rem !important
    }

    .mb-lg-9 {
        margin-bottom: 2.25rem !important
    }

    .mb-lg-10 {
        margin-bottom: 2.5rem !important
    }

    .mb-lg-11 {
        margin-bottom: 3rem !important
    }

    .mb-lg-12 {
        margin-bottom: 3.5rem !important
    }

    .mb-lg-13 {
        margin-bottom: 4rem !important
    }

    .mb-lg-14 {
        margin-bottom: 4.5rem !important
    }

    .mb-lg-15 {
        margin-bottom: 5rem !important
    }

    .mb-lg-16 {
        margin-bottom: 6rem !important
    }

    .mb-lg-17 {
        margin-bottom: 7rem !important
    }

    .mb-lg-18 {
        margin-bottom: 8rem !important
    }

    .mb-lg-19 {
        margin-bottom: 9rem !important
    }

    .mb-lg-20 {
        margin-bottom: 10rem !important
    }

    .mb-lg-21 {
        margin-bottom: 12.5rem !important
    }

    .mb-lg-22 {
        margin-bottom: 15rem !important
    }

    .mb-lg-23 {
        margin-bottom: 17.5rem !important
    }

    .mb-lg-24 {
        margin-bottom: 20rem !important
    }

    .mb-lg-25 {
        margin-bottom: 22.5rem !important
    }

    .mb-lg-auto {
        margin-bottom: auto !important
    }

    .ms-lg-0 {
        margin-left: 0 !important
    }

    .ms-lg-1 {
        margin-left: .25rem !important
    }

    .ms-lg-2 {
        margin-left: .5rem !important
    }

    .ms-lg-3 {
        margin-left: .75rem !important
    }

    .ms-lg-4 {
        margin-left: 1rem !important
    }

    .ms-lg-5 {
        margin-left: 1.25rem !important
    }

    .ms-lg-6 {
        margin-left: 1.5rem !important
    }

    .ms-lg-7 {
        margin-left: 1.75rem !important
    }

    .ms-lg-8 {
        margin-left: 2rem !important
    }

    .ms-lg-9 {
        margin-left: 2.25rem !important
    }

    .ms-lg-10 {
        margin-left: 2.5rem !important
    }

    .ms-lg-11 {
        margin-left: 3rem !important
    }

    .ms-lg-12 {
        margin-left: 3.5rem !important
    }

    .ms-lg-13 {
        margin-left: 4rem !important
    }

    .ms-lg-14 {
        margin-left: 4.5rem !important
    }

    .ms-lg-15 {
        margin-left: 5rem !important
    }

    .ms-lg-16 {
        margin-left: 6rem !important
    }

    .ms-lg-17 {
        margin-left: 7rem !important
    }

    .ms-lg-18 {
        margin-left: 8rem !important
    }

    .ms-lg-19 {
        margin-left: 9rem !important
    }

    .ms-lg-20 {
        margin-left: 10rem !important
    }

    .ms-lg-21 {
        margin-left: 12.5rem !important
    }

    .ms-lg-22 {
        margin-left: 15rem !important
    }

    .ms-lg-23 {
        margin-left: 17.5rem !important
    }

    .ms-lg-24 {
        margin-left: 20rem !important
    }

    .ms-lg-25 {
        margin-left: 22.5rem !important
    }

    .ms-lg-auto {
        margin-left: auto !important
    }

    .m-lg-n1 {
        margin: -.25rem !important
    }

    .m-lg-n2 {
        margin: -.5rem !important
    }

    .m-lg-n3 {
        margin: -.75rem !important
    }

    .m-lg-n4 {
        margin: -1rem !important
    }

    .m-lg-n5 {
        margin: -1.25rem !important
    }

    .m-lg-n6 {
        margin: -1.5rem !important
    }

    .m-lg-n7 {
        margin: -1.75rem !important
    }

    .m-lg-n8 {
        margin: -2rem !important
    }

    .m-lg-n9 {
        margin: -2.25rem !important
    }

    .m-lg-n10 {
        margin: -2.5rem !important
    }

    .m-lg-n11 {
        margin: -3rem !important
    }

    .m-lg-n12 {
        margin: -3.5rem !important
    }

    .m-lg-n13 {
        margin: -4rem !important
    }

    .m-lg-n14 {
        margin: -4.5rem !important
    }

    .m-lg-n15 {
        margin: -5rem !important
    }

    .m-lg-n16 {
        margin: -6rem !important
    }

    .m-lg-n17 {
        margin: -7rem !important
    }

    .m-lg-n18 {
        margin: -8rem !important
    }

    .m-lg-n19 {
        margin: -9rem !important
    }

    .m-lg-n20 {
        margin: -10rem !important
    }

    .m-lg-n21 {
        margin: -12.5rem !important
    }

    .m-lg-n22 {
        margin: -15rem !important
    }

    .m-lg-n23 {
        margin: -17.5rem !important
    }

    .m-lg-n24 {
        margin: -20rem !important
    }

    .m-lg-n25 {
        margin: -22.5rem !important
    }

    .mx-lg-n1 {
        margin-right: -.25rem !important;
        margin-left: -.25rem !important
    }

    .mx-lg-n2 {
        margin-right: -.5rem !important;
        margin-left: -.5rem !important
    }

    .mx-lg-n3 {
        margin-right: -.75rem !important;
        margin-left: -.75rem !important
    }

    .mx-lg-n4 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-lg-n5 {
        margin-right: -1.25rem !important;
        margin-left: -1.25rem !important
    }

    .mx-lg-n6 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-lg-n7 {
        margin-right: -1.75rem !important;
        margin-left: -1.75rem !important
    }

    .mx-lg-n8 {
        margin-right: -2rem !important;
        margin-left: -2rem !important
    }

    .mx-lg-n9 {
        margin-right: -2.25rem !important;
        margin-left: -2.25rem !important
    }

    .mx-lg-n10 {
        margin-right: -2.5rem !important;
        margin-left: -2.5rem !important
    }

    .mx-lg-n11 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .mx-lg-n12 {
        margin-right: -3.5rem !important;
        margin-left: -3.5rem !important
    }

    .mx-lg-n13 {
        margin-right: -4rem !important;
        margin-left: -4rem !important
    }

    .mx-lg-n14 {
        margin-right: -4.5rem !important;
        margin-left: -4.5rem !important
    }

    .mx-lg-n15 {
        margin-right: -5rem !important;
        margin-left: -5rem !important
    }

    .mx-lg-n16 {
        margin-right: -6rem !important;
        margin-left: -6rem !important
    }

    .mx-lg-n17 {
        margin-right: -7rem !important;
        margin-left: -7rem !important
    }

    .mx-lg-n18 {
        margin-right: -8rem !important;
        margin-left: -8rem !important
    }

    .mx-lg-n19 {
        margin-right: -9rem !important;
        margin-left: -9rem !important
    }

    .mx-lg-n20 {
        margin-right: -10rem !important;
        margin-left: -10rem !important
    }

    .mx-lg-n21 {
        margin-right: -12.5rem !important;
        margin-left: -12.5rem !important
    }

    .mx-lg-n22 {
        margin-right: -15rem !important;
        margin-left: -15rem !important
    }

    .mx-lg-n23 {
        margin-right: -17.5rem !important;
        margin-left: -17.5rem !important
    }

    .mx-lg-n24 {
        margin-right: -20rem !important;
        margin-left: -20rem !important
    }

    .mx-lg-n25 {
        margin-right: -22.5rem !important;
        margin-left: -22.5rem !important
    }

    .my-lg-n1 {
        margin-top: -.25rem !important;
        margin-bottom: -.25rem !important
    }

    .my-lg-n2 {
        margin-top: -.5rem !important;
        margin-bottom: -.5rem !important
    }

    .my-lg-n3 {
        margin-top: -.75rem !important;
        margin-bottom: -.75rem !important
    }

    .my-lg-n4 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-lg-n5 {
        margin-top: -1.25rem !important;
        margin-bottom: -1.25rem !important
    }

    .my-lg-n6 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-lg-n7 {
        margin-top: -1.75rem !important;
        margin-bottom: -1.75rem !important
    }

    .my-lg-n8 {
        margin-top: -2rem !important;
        margin-bottom: -2rem !important
    }

    .my-lg-n9 {
        margin-top: -2.25rem !important;
        margin-bottom: -2.25rem !important
    }

    .my-lg-n10 {
        margin-top: -2.5rem !important;
        margin-bottom: -2.5rem !important
    }

    .my-lg-n11 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .my-lg-n12 {
        margin-top: -3.5rem !important;
        margin-bottom: -3.5rem !important
    }

    .my-lg-n13 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important
    }

    .my-lg-n14 {
        margin-top: -4.5rem !important;
        margin-bottom: -4.5rem !important
    }

    .my-lg-n15 {
        margin-top: -5rem !important;
        margin-bottom: -5rem !important
    }

    .my-lg-n16 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important
    }

    .my-lg-n17 {
        margin-top: -7rem !important;
        margin-bottom: -7rem !important
    }

    .my-lg-n18 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important
    }

    .my-lg-n19 {
        margin-top: -9rem !important;
        margin-bottom: -9rem !important
    }

    .my-lg-n20 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important
    }

    .my-lg-n21 {
        margin-top: -12.5rem !important;
        margin-bottom: -12.5rem !important
    }

    .my-lg-n22 {
        margin-top: -15rem !important;
        margin-bottom: -15rem !important
    }

    .my-lg-n23 {
        margin-top: -17.5rem !important;
        margin-bottom: -17.5rem !important
    }

    .my-lg-n24 {
        margin-top: -20rem !important;
        margin-bottom: -20rem !important
    }

    .my-lg-n25 {
        margin-top: -22.5rem !important;
        margin-bottom: -22.5rem !important
    }

    .mt-lg-n1 {
        margin-top: -.25rem !important
    }

    .mt-lg-n2 {
        margin-top: -.5rem !important
    }

    .mt-lg-n3 {
        margin-top: -.75rem !important
    }

    .mt-lg-n4 {
        margin-top: -1rem !important
    }

    .mt-lg-n5 {
        margin-top: -1.25rem !important
    }

    .mt-lg-n6 {
        margin-top: -1.5rem !important
    }

    .mt-lg-n7 {
        margin-top: -1.75rem !important
    }

    .mt-lg-n8 {
        margin-top: -2rem !important
    }

    .mt-lg-n9 {
        margin-top: -2.25rem !important
    }

    .mt-lg-n10 {
        margin-top: -2.5rem !important
    }

    .mt-lg-n11 {
        margin-top: -3rem !important
    }

    .mt-lg-n12 {
        margin-top: -3.5rem !important
    }

    .mt-lg-n13 {
        margin-top: -4rem !important
    }

    .mt-lg-n14 {
        margin-top: -4.5rem !important
    }

    .mt-lg-n15 {
        margin-top: -5rem !important
    }

    .mt-lg-n16 {
        margin-top: -6rem !important
    }

    .mt-lg-n17 {
        margin-top: -7rem !important
    }

    .mt-lg-n18 {
        margin-top: -8rem !important
    }

    .mt-lg-n19 {
        margin-top: -9rem !important
    }

    .mt-lg-n20 {
        margin-top: -10rem !important
    }

    .mt-lg-n21 {
        margin-top: -12.5rem !important
    }

    .mt-lg-n22 {
        margin-top: -15rem !important
    }

    .mt-lg-n23 {
        margin-top: -17.5rem !important
    }

    .mt-lg-n24 {
        margin-top: -20rem !important
    }

    .mt-lg-n25 {
        margin-top: -22.5rem !important
    }

    .me-lg-n1 {
        margin-right: -.25rem !important
    }

    .me-lg-n2 {
        margin-right: -.5rem !important
    }

    .me-lg-n3 {
        margin-right: -.75rem !important
    }

    .me-lg-n4 {
        margin-right: -1rem !important
    }

    .me-lg-n5 {
        margin-right: -1.25rem !important
    }

    .me-lg-n6 {
        margin-right: -1.5rem !important
    }

    .me-lg-n7 {
        margin-right: -1.75rem !important
    }

    .me-lg-n8 {
        margin-right: -2rem !important
    }

    .me-lg-n9 {
        margin-right: -2.25rem !important
    }

    .me-lg-n10 {
        margin-right: -2.5rem !important
    }

    .me-lg-n11 {
        margin-right: -3rem !important
    }

    .me-lg-n12 {
        margin-right: -3.5rem !important
    }

    .me-lg-n13 {
        margin-right: -4rem !important
    }

    .me-lg-n14 {
        margin-right: -4.5rem !important
    }

    .me-lg-n15 {
        margin-right: -5rem !important
    }

    .me-lg-n16 {
        margin-right: -6rem !important
    }

    .me-lg-n17 {
        margin-right: -7rem !important
    }

    .me-lg-n18 {
        margin-right: -8rem !important
    }

    .me-lg-n19 {
        margin-right: -9rem !important
    }

    .me-lg-n20 {
        margin-right: -10rem !important
    }

    .me-lg-n21 {
        margin-right: -12.5rem !important
    }

    .me-lg-n22 {
        margin-right: -15rem !important
    }

    .me-lg-n23 {
        margin-right: -17.5rem !important
    }

    .me-lg-n24 {
        margin-right: -20rem !important
    }

    .me-lg-n25 {
        margin-right: -22.5rem !important
    }

    .mb-lg-n1 {
        margin-bottom: -.25rem !important
    }

    .mb-lg-n2 {
        margin-bottom: -.5rem !important
    }

    .mb-lg-n3 {
        margin-bottom: -.75rem !important
    }

    .mb-lg-n4 {
        margin-bottom: -1rem !important
    }

    .mb-lg-n5 {
        margin-bottom: -1.25rem !important
    }

    .mb-lg-n6 {
        margin-bottom: -1.5rem !important
    }

    .mb-lg-n7 {
        margin-bottom: -1.75rem !important
    }

    .mb-lg-n8 {
        margin-bottom: -2rem !important
    }

    .mb-lg-n9 {
        margin-bottom: -2.25rem !important
    }

    .mb-lg-n10 {
        margin-bottom: -2.5rem !important
    }

    .mb-lg-n11 {
        margin-bottom: -3rem !important
    }

    .mb-lg-n12 {
        margin-bottom: -3.5rem !important
    }

    .mb-lg-n13 {
        margin-bottom: -4rem !important
    }

    .mb-lg-n14 {
        margin-bottom: -4.5rem !important
    }

    .mb-lg-n15 {
        margin-bottom: -5rem !important
    }

    .mb-lg-n16 {
        margin-bottom: -6rem !important
    }

    .mb-lg-n17 {
        margin-bottom: -7rem !important
    }

    .mb-lg-n18 {
        margin-bottom: -8rem !important
    }

    .mb-lg-n19 {
        margin-bottom: -9rem !important
    }

    .mb-lg-n20 {
        margin-bottom: -10rem !important
    }

    .mb-lg-n21 {
        margin-bottom: -12.5rem !important
    }

    .mb-lg-n22 {
        margin-bottom: -15rem !important
    }

    .mb-lg-n23 {
        margin-bottom: -17.5rem !important
    }

    .mb-lg-n24 {
        margin-bottom: -20rem !important
    }

    .mb-lg-n25 {
        margin-bottom: -22.5rem !important
    }

    .ms-lg-n1 {
        margin-left: -.25rem !important
    }

    .ms-lg-n2 {
        margin-left: -.5rem !important
    }

    .ms-lg-n3 {
        margin-left: -.75rem !important
    }

    .ms-lg-n4 {
        margin-left: -1rem !important
    }

    .ms-lg-n5 {
        margin-left: -1.25rem !important
    }

    .ms-lg-n6 {
        margin-left: -1.5rem !important
    }

    .ms-lg-n7 {
        margin-left: -1.75rem !important
    }

    .ms-lg-n8 {
        margin-left: -2rem !important
    }

    .ms-lg-n9 {
        margin-left: -2.25rem !important
    }

    .ms-lg-n10 {
        margin-left: -2.5rem !important
    }

    .ms-lg-n11 {
        margin-left: -3rem !important
    }

    .ms-lg-n12 {
        margin-left: -3.5rem !important
    }

    .ms-lg-n13 {
        margin-left: -4rem !important
    }

    .ms-lg-n14 {
        margin-left: -4.5rem !important
    }

    .ms-lg-n15 {
        margin-left: -5rem !important
    }

    .ms-lg-n16 {
        margin-left: -6rem !important
    }

    .ms-lg-n17 {
        margin-left: -7rem !important
    }

    .ms-lg-n18 {
        margin-left: -8rem !important
    }

    .ms-lg-n19 {
        margin-left: -9rem !important
    }

    .ms-lg-n20 {
        margin-left: -10rem !important
    }

    .ms-lg-n21 {
        margin-left: -12.5rem !important
    }

    .ms-lg-n22 {
        margin-left: -15rem !important
    }

    .ms-lg-n23 {
        margin-left: -17.5rem !important
    }

    .ms-lg-n24 {
        margin-left: -20rem !important
    }

    .ms-lg-n25 {
        margin-left: -22.5rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .p-lg-1 {
        padding: .25rem !important
    }

    .p-lg-2 {
        padding: .5rem !important
    }

    .p-lg-3 {
        padding: .75rem !important
    }

    .p-lg-4 {
        padding: 1rem !important
    }

    .p-lg-5 {
        padding: 1.25rem !important
    }

    .p-lg-6 {
        padding: 1.5rem !important
    }

    .p-lg-7 {
        padding: 1.75rem !important
    }

    .p-lg-8 {
        padding: 2rem !important
    }

    .p-lg-9 {
        padding: 2.25rem !important
    }

    .p-lg-10 {
        padding: 2.5rem !important
    }

    .p-lg-11 {
        padding: 3rem !important
    }

    .p-lg-12 {
        padding: 3.5rem !important
    }

    .p-lg-13 {
        padding: 4rem !important
    }

    .p-lg-14 {
        padding: 4.5rem !important
    }

    .p-lg-15 {
        padding: 5rem !important
    }

    .p-lg-16 {
        padding: 6rem !important
    }

    .p-lg-17 {
        padding: 7rem !important
    }

    .p-lg-18 {
        padding: 8rem !important
    }

    .p-lg-19 {
        padding: 9rem !important
    }

    .p-lg-20 {
        padding: 10rem !important
    }

    .p-lg-21 {
        padding: 12.5rem !important
    }

    .p-lg-22 {
        padding: 15rem !important
    }

    .p-lg-23 {
        padding: 17.5rem !important
    }

    .p-lg-24 {
        padding: 20rem !important
    }

    .p-lg-25 {
        padding: 22.5rem !important
    }

    .px-lg-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-lg-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-lg-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-lg-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important
    }

    .px-lg-4 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-lg-5 {
        padding-right: 1.25rem !important;
        padding-left: 1.25rem !important
    }

    .px-lg-6 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-lg-7 {
        padding-right: 1.75rem !important;
        padding-left: 1.75rem !important
    }

    .px-lg-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important
    }

    .px-lg-9 {
        padding-right: 2.25rem !important;
        padding-left: 2.25rem !important
    }

    .px-lg-10 {
        padding-right: 2.5rem !important;
        padding-left: 2.5rem !important
    }

    .px-lg-11 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .px-lg-12 {
        padding-right: 3.5rem !important;
        padding-left: 3.5rem !important
    }

    .px-lg-13 {
        padding-right: 4rem !important;
        padding-left: 4rem !important
    }

    .px-lg-14 {
        padding-right: 4.5rem !important;
        padding-left: 4.5rem !important
    }

    .px-lg-15 {
        padding-right: 5rem !important;
        padding-left: 5rem !important
    }

    .px-lg-16 {
        padding-right: 6rem !important;
        padding-left: 6rem !important
    }

    .px-lg-17 {
        padding-right: 7rem !important;
        padding-left: 7rem !important
    }

    .px-lg-18 {
        padding-right: 8rem !important;
        padding-left: 8rem !important
    }

    .px-lg-19 {
        padding-right: 9rem !important;
        padding-left: 9rem !important
    }

    .px-lg-20 {
        padding-right: 10rem !important;
        padding-left: 10rem !important
    }

    .px-lg-21 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important
    }

    .px-lg-22 {
        padding-right: 15rem !important;
        padding-left: 15rem !important
    }

    .px-lg-23 {
        padding-right: 17.5rem !important;
        padding-left: 17.5rem !important
    }

    .px-lg-24 {
        padding-right: 20rem !important;
        padding-left: 20rem !important
    }

    .px-lg-25 {
        padding-right: 22.5rem !important;
        padding-left: 22.5rem !important
    }

    .py-lg-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-lg-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-lg-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-lg-3 {
        padding-top: .75rem !important;
        padding-bottom: .75rem !important
    }

    .py-lg-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-lg-5 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important
    }

    .py-lg-6 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-lg-7 {
        padding-top: 1.75rem !important;
        padding-bottom: 1.75rem !important
    }

    .py-lg-8 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .py-lg-9 {
        padding-top: 2.25rem !important;
        padding-bottom: 2.25rem !important
    }

    .py-lg-10 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important
    }

    .py-lg-11 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .py-lg-12 {
        padding-top: 3.5rem !important;
        padding-bottom: 3.5rem !important
    }

    .py-lg-13 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important
    }

    .py-lg-14 {
        padding-top: 4.5rem !important;
        padding-bottom: 4.5rem !important
    }

    .py-lg-15 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important
    }

    .py-lg-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important
    }

    .py-lg-17 {
        padding-top: 7rem !important;
        padding-bottom: 7rem !important
    }

    .py-lg-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important
    }

    .py-lg-19 {
        padding-top: 9rem !important;
        padding-bottom: 9rem !important
    }

    .py-lg-20 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important
    }

    .py-lg-21 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important
    }

    .py-lg-22 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important
    }

    .py-lg-23 {
        padding-top: 17.5rem !important;
        padding-bottom: 17.5rem !important
    }

    .py-lg-24 {
        padding-top: 20rem !important;
        padding-bottom: 20rem !important
    }

    .py-lg-25 {
        padding-top: 22.5rem !important;
        padding-bottom: 22.5rem !important
    }

    .pt-lg-0 {
        padding-top: 0 !important
    }

    .pt-lg-1 {
        padding-top: .25rem !important
    }

    .pt-lg-2 {
        padding-top: .5rem !important
    }

    .pt-lg-3 {
        padding-top: .75rem !important
    }

    .pt-lg-4 {
        padding-top: 1rem !important
    }

    .pt-lg-5 {
        padding-top: 1.25rem !important
    }

    .pt-lg-6 {
        padding-top: 1.5rem !important
    }

    .pt-lg-7 {
        padding-top: 1.75rem !important
    }

    .pt-lg-8 {
        padding-top: 2rem !important
    }

    .pt-lg-9 {
        padding-top: 2.25rem !important
    }

    .pt-lg-10 {
        padding-top: 2.5rem !important
    }

    .pt-lg-11 {
        padding-top: 3rem !important
    }

    .pt-lg-12 {
        padding-top: 3.5rem !important
    }

    .pt-lg-13 {
        padding-top: 4rem !important
    }

    .pt-lg-14 {
        padding-top: 4.5rem !important
    }

    .pt-lg-15 {
        padding-top: 5rem !important
    }

    .pt-lg-16 {
        padding-top: 6rem !important
    }

    .pt-lg-17 {
        padding-top: 7rem !important
    }

    .pt-lg-18 {
        padding-top: 8rem !important
    }

    .pt-lg-19 {
        padding-top: 9rem !important
    }

    .pt-lg-20 {
        padding-top: 10rem !important
    }

    .pt-lg-21 {
        padding-top: 12.5rem !important
    }

    .pt-lg-22 {
        padding-top: 15rem !important
    }

    .pt-lg-23 {
        padding-top: 17.5rem !important
    }

    .pt-lg-24 {
        padding-top: 20rem !important
    }

    .pt-lg-25 {
        padding-top: 22.5rem !important
    }

    .pe-lg-0 {
        padding-right: 0 !important
    }

    .pe-lg-1 {
        padding-right: .25rem !important
    }

    .pe-lg-2 {
        padding-right: .5rem !important
    }

    .pe-lg-3 {
        padding-right: .75rem !important
    }

    .pe-lg-4 {
        padding-right: 1rem !important
    }

    .pe-lg-5 {
        padding-right: 1.25rem !important
    }

    .pe-lg-6 {
        padding-right: 1.5rem !important
    }

    .pe-lg-7 {
        padding-right: 1.75rem !important
    }

    .pe-lg-8 {
        padding-right: 2rem !important
    }

    .pe-lg-9 {
        padding-right: 2.25rem !important
    }

    .pe-lg-10 {
        padding-right: 2.5rem !important
    }

    .pe-lg-11 {
        padding-right: 3rem !important
    }

    .pe-lg-12 {
        padding-right: 3.5rem !important
    }

    .pe-lg-13 {
        padding-right: 4rem !important
    }

    .pe-lg-14 {
        padding-right: 4.5rem !important
    }

    .pe-lg-15 {
        padding-right: 5rem !important
    }

    .pe-lg-16 {
        padding-right: 6rem !important
    }

    .pe-lg-17 {
        padding-right: 7rem !important
    }

    .pe-lg-18 {
        padding-right: 8rem !important
    }

    .pe-lg-19 {
        padding-right: 9rem !important
    }

    .pe-lg-20 {
        padding-right: 10rem !important
    }

    .pe-lg-21 {
        padding-right: 12.5rem !important
    }

    .pe-lg-22 {
        padding-right: 15rem !important
    }

    .pe-lg-23 {
        padding-right: 17.5rem !important
    }

    .pe-lg-24 {
        padding-right: 20rem !important
    }

    .pe-lg-25 {
        padding-right: 22.5rem !important
    }

    .pb-lg-0 {
        padding-bottom: 0 !important
    }

    .pb-lg-1 {
        padding-bottom: .25rem !important
    }

    .pb-lg-2 {
        padding-bottom: .5rem !important
    }

    .pb-lg-3 {
        padding-bottom: .75rem !important
    }

    .pb-lg-4 {
        padding-bottom: 1rem !important
    }

    .pb-lg-5 {
        padding-bottom: 1.25rem !important
    }

    .pb-lg-6 {
        padding-bottom: 1.5rem !important
    }

    .pb-lg-7 {
        padding-bottom: 1.75rem !important
    }

    .pb-lg-8 {
        padding-bottom: 2rem !important
    }

    .pb-lg-9 {
        padding-bottom: 2.25rem !important
    }

    .pb-lg-10 {
        padding-bottom: 2.5rem !important
    }

    .pb-lg-11 {
        padding-bottom: 3rem !important
    }

    .pb-lg-12 {
        padding-bottom: 3.5rem !important
    }

    .pb-lg-13 {
        padding-bottom: 4rem !important
    }

    .pb-lg-14 {
        padding-bottom: 4.5rem !important
    }

    .pb-lg-15 {
        padding-bottom: 5rem !important
    }

    .pb-lg-16 {
        padding-bottom: 6rem !important
    }

    .pb-lg-17 {
        padding-bottom: 7rem !important
    }

    .pb-lg-18 {
        padding-bottom: 8rem !important
    }

    .pb-lg-19 {
        padding-bottom: 9rem !important
    }

    .pb-lg-20 {
        padding-bottom: 10rem !important
    }

    .pb-lg-21 {
        padding-bottom: 12.5rem !important
    }

    .pb-lg-22 {
        padding-bottom: 15rem !important
    }

    .pb-lg-23 {
        padding-bottom: 17.5rem !important
    }

    .pb-lg-24 {
        padding-bottom: 20rem !important
    }

    .pb-lg-25 {
        padding-bottom: 22.5rem !important
    }

    .ps-lg-0 {
        padding-left: 0 !important
    }

    .ps-lg-1 {
        padding-left: .25rem !important
    }

    .ps-lg-2 {
        padding-left: .5rem !important
    }

    .ps-lg-3 {
        padding-left: .75rem !important
    }

    .ps-lg-4 {
        padding-left: 1rem !important
    }

    .ps-lg-5 {
        padding-left: 1.25rem !important
    }

    .ps-lg-6 {
        padding-left: 1.5rem !important
    }

    .ps-lg-7 {
        padding-left: 1.75rem !important
    }

    .ps-lg-8 {
        padding-left: 2rem !important
    }

    .ps-lg-9 {
        padding-left: 2.25rem !important
    }

    .ps-lg-10 {
        padding-left: 2.5rem !important
    }

    .ps-lg-11 {
        padding-left: 3rem !important
    }

    .ps-lg-12 {
        padding-left: 3.5rem !important
    }

    .ps-lg-13 {
        padding-left: 4rem !important
    }

    .ps-lg-14 {
        padding-left: 4.5rem !important
    }

    .ps-lg-15 {
        padding-left: 5rem !important
    }

    .ps-lg-16 {
        padding-left: 6rem !important
    }

    .ps-lg-17 {
        padding-left: 7rem !important
    }

    .ps-lg-18 {
        padding-left: 8rem !important
    }

    .ps-lg-19 {
        padding-left: 9rem !important
    }

    .ps-lg-20 {
        padding-left: 10rem !important
    }

    .ps-lg-21 {
        padding-left: 12.5rem !important
    }

    .ps-lg-22 {
        padding-left: 15rem !important
    }

    .ps-lg-23 {
        padding-left: 17.5rem !important
    }

    .ps-lg-24 {
        padding-left: 20rem !important
    }

    .ps-lg-25 {
        padding-left: 22.5rem !important
    }

    .gap-lg-0 {
        gap: 0 !important
    }

    .gap-lg-1 {
        gap: .25rem !important
    }

    .gap-lg-2 {
        gap: .5rem !important
    }

    .gap-lg-3 {
        gap: .75rem !important
    }

    .gap-lg-4 {
        gap: 1rem !important
    }

    .gap-lg-5 {
        gap: 1.25rem !important
    }

    .gap-lg-6 {
        gap: 1.5rem !important
    }

    .gap-lg-7 {
        gap: 1.75rem !important
    }

    .gap-lg-8 {
        gap: 2rem !important
    }

    .gap-lg-9 {
        gap: 2.25rem !important
    }

    .gap-lg-10 {
        gap: 2.5rem !important
    }

    .gap-lg-11 {
        gap: 3rem !important
    }

    .gap-lg-12 {
        gap: 3.5rem !important
    }

    .gap-lg-13 {
        gap: 4rem !important
    }

    .gap-lg-14 {
        gap: 4.5rem !important
    }

    .gap-lg-15 {
        gap: 5rem !important
    }

    .gap-lg-16 {
        gap: 6rem !important
    }

    .gap-lg-17 {
        gap: 7rem !important
    }

    .gap-lg-18 {
        gap: 8rem !important
    }

    .gap-lg-19 {
        gap: 9rem !important
    }

    .gap-lg-20 {
        gap: 10rem !important
    }

    .gap-lg-21 {
        gap: 12.5rem !important
    }

    .gap-lg-22 {
        gap: 15rem !important
    }

    .gap-lg-23 {
        gap: 17.5rem !important
    }

    .gap-lg-24 {
        gap: 20rem !important
    }

    .gap-lg-25 {
        gap: 22.5rem !important
    }

    .text-lg-start {
        text-align: left !important
    }

    .text-lg-end {
        text-align: right !important
    }

    .text-lg-center {
        text-align: center !important
    }
}

@media (min-width:1200px) {
    .float-xl-start {
        float: left !important
    }

    .float-xl-end {
        float: right !important
    }

    .float-xl-none {
        float: none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-grid {
        display: grid !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: flex !important
    }

    .d-xl-inline-flex {
        display: inline-flex !important
    }

    .d-xl-none {
        display: none !important
    }

    .flex-xl-fill {
        flex: 1 1 auto !important
    }

    .flex-xl-row {
        flex-direction: row !important
    }

    .flex-xl-column {
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xl-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-xl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-xl-start {
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        justify-content: center !important
    }

    .justify-content-xl-between {
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        justify-content: space-around !important
    }

    .justify-content-xl-evenly {
        justify-content: space-evenly !important
    }

    .align-items-xl-start {
        align-items: flex-start !important
    }

    .align-items-xl-end {
        align-items: flex-end !important
    }

    .align-items-xl-center {
        align-items: center !important
    }

    .align-items-xl-baseline {
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        align-items: stretch !important
    }

    .align-content-xl-start {
        align-content: flex-start !important
    }

    .align-content-xl-end {
        align-content: flex-end !important
    }

    .align-content-xl-center {
        align-content: center !important
    }

    .align-content-xl-between {
        align-content: space-between !important
    }

    .align-content-xl-around {
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        align-content: stretch !important
    }

    .align-self-xl-auto {
        align-self: auto !important
    }

    .align-self-xl-start {
        align-self: flex-start !important
    }

    .align-self-xl-end {
        align-self: flex-end !important
    }

    .align-self-xl-center {
        align-self: center !important
    }

    .align-self-xl-baseline {
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        align-self: stretch !important
    }

    .order-xl-first {
        order: -1 !important
    }

    .order-xl-0 {
        order: 0 !important
    }

    .order-xl-1 {
        order: 1 !important
    }

    .order-xl-2 {
        order: 2 !important
    }

    .order-xl-3 {
        order: 3 !important
    }

    .order-xl-4 {
        order: 4 !important
    }

    .order-xl-5 {
        order: 5 !important
    }

    .order-xl-last {
        order: 6 !important
    }

    .m-xl-0 {
        margin: 0 !important
    }

    .m-xl-1 {
        margin: .25rem !important
    }

    .m-xl-2 {
        margin: .5rem !important
    }

    .m-xl-3 {
        margin: .75rem !important
    }

    .m-xl-4 {
        margin: 1rem !important
    }

    .m-xl-5 {
        margin: 1.25rem !important
    }

    .m-xl-6 {
        margin: 1.5rem !important
    }

    .m-xl-7 {
        margin: 1.75rem !important
    }

    .m-xl-8 {
        margin: 2rem !important
    }

    .m-xl-9 {
        margin: 2.25rem !important
    }

    .m-xl-10 {
        margin: 2.5rem !important
    }

    .m-xl-11 {
        margin: 3rem !important
    }

    .m-xl-12 {
        margin: 3.5rem !important
    }

    .m-xl-13 {
        margin: 4rem !important
    }

    .m-xl-14 {
        margin: 4.5rem !important
    }

    .m-xl-15 {
        margin: 5rem !important
    }

    .m-xl-16 {
        margin: 6rem !important
    }

    .m-xl-17 {
        margin: 7rem !important
    }

    .m-xl-18 {
        margin: 8rem !important
    }

    .m-xl-19 {
        margin: 9rem !important
    }

    .m-xl-20 {
        margin: 10rem !important
    }

    .m-xl-21 {
        margin: 12.5rem !important
    }

    .m-xl-22 {
        margin: 15rem !important
    }

    .m-xl-23 {
        margin: 17.5rem !important
    }

    .m-xl-24 {
        margin: 20rem !important
    }

    .m-xl-25 {
        margin: 22.5rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mx-xl-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-xl-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-xl-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-xl-3 {
        margin-right: .75rem !important;
        margin-left: .75rem !important
    }

    .mx-xl-4 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-xl-5 {
        margin-right: 1.25rem !important;
        margin-left: 1.25rem !important
    }

    .mx-xl-6 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-xl-7 {
        margin-right: 1.75rem !important;
        margin-left: 1.75rem !important
    }

    .mx-xl-8 {
        margin-right: 2rem !important;
        margin-left: 2rem !important
    }

    .mx-xl-9 {
        margin-right: 2.25rem !important;
        margin-left: 2.25rem !important
    }

    .mx-xl-10 {
        margin-right: 2.5rem !important;
        margin-left: 2.5rem !important
    }

    .mx-xl-11 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-xl-12 {
        margin-right: 3.5rem !important;
        margin-left: 3.5rem !important
    }

    .mx-xl-13 {
        margin-right: 4rem !important;
        margin-left: 4rem !important
    }

    .mx-xl-14 {
        margin-right: 4.5rem !important;
        margin-left: 4.5rem !important
    }

    .mx-xl-15 {
        margin-right: 5rem !important;
        margin-left: 5rem !important
    }

    .mx-xl-16 {
        margin-right: 6rem !important;
        margin-left: 6rem !important
    }

    .mx-xl-17 {
        margin-right: 7rem !important;
        margin-left: 7rem !important
    }

    .mx-xl-18 {
        margin-right: 8rem !important;
        margin-left: 8rem !important
    }

    .mx-xl-19 {
        margin-right: 9rem !important;
        margin-left: 9rem !important
    }

    .mx-xl-20 {
        margin-right: 10rem !important;
        margin-left: 10rem !important
    }

    .mx-xl-21 {
        margin-right: 12.5rem !important;
        margin-left: 12.5rem !important
    }

    .mx-xl-22 {
        margin-right: 15rem !important;
        margin-left: 15rem !important
    }

    .mx-xl-23 {
        margin-right: 17.5rem !important;
        margin-left: 17.5rem !important
    }

    .mx-xl-24 {
        margin-right: 20rem !important;
        margin-left: 20rem !important
    }

    .mx-xl-25 {
        margin-right: 22.5rem !important;
        margin-left: 22.5rem !important
    }

    .mx-xl-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-xl-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-xl-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-xl-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-xl-3 {
        margin-top: .75rem !important;
        margin-bottom: .75rem !important
    }

    .my-xl-4 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-xl-5 {
        margin-top: 1.25rem !important;
        margin-bottom: 1.25rem !important
    }

    .my-xl-6 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-xl-7 {
        margin-top: 1.75rem !important;
        margin-bottom: 1.75rem !important
    }

    .my-xl-8 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important
    }

    .my-xl-9 {
        margin-top: 2.25rem !important;
        margin-bottom: 2.25rem !important
    }

    .my-xl-10 {
        margin-top: 2.5rem !important;
        margin-bottom: 2.5rem !important
    }

    .my-xl-11 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-xl-12 {
        margin-top: 3.5rem !important;
        margin-bottom: 3.5rem !important
    }

    .my-xl-13 {
        margin-top: 4rem !important;
        margin-bottom: 4rem !important
    }

    .my-xl-14 {
        margin-top: 4.5rem !important;
        margin-bottom: 4.5rem !important
    }

    .my-xl-15 {
        margin-top: 5rem !important;
        margin-bottom: 5rem !important
    }

    .my-xl-16 {
        margin-top: 6rem !important;
        margin-bottom: 6rem !important
    }

    .my-xl-17 {
        margin-top: 7rem !important;
        margin-bottom: 7rem !important
    }

    .my-xl-18 {
        margin-top: 8rem !important;
        margin-bottom: 8rem !important
    }

    .my-xl-19 {
        margin-top: 9rem !important;
        margin-bottom: 9rem !important
    }

    .my-xl-20 {
        margin-top: 10rem !important;
        margin-bottom: 10rem !important
    }

    .my-xl-21 {
        margin-top: 12.5rem !important;
        margin-bottom: 12.5rem !important
    }

    .my-xl-22 {
        margin-top: 15rem !important;
        margin-bottom: 15rem !important
    }

    .my-xl-23 {
        margin-top: 17.5rem !important;
        margin-bottom: 17.5rem !important
    }

    .my-xl-24 {
        margin-top: 20rem !important;
        margin-bottom: 20rem !important
    }

    .my-xl-25 {
        margin-top: 22.5rem !important;
        margin-bottom: 22.5rem !important
    }

    .my-xl-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-xl-0 {
        margin-top: 0 !important
    }

    .mt-xl-1 {
        margin-top: .25rem !important
    }

    .mt-xl-2 {
        margin-top: .5rem !important
    }

    .mt-xl-3 {
        margin-top: .75rem !important
    }

    .mt-xl-4 {
        margin-top: 1rem !important
    }

    .mt-xl-5 {
        margin-top: 1.25rem !important
    }

    .mt-xl-6 {
        margin-top: 1.5rem !important
    }

    .mt-xl-7 {
        margin-top: 1.75rem !important
    }

    .mt-xl-8 {
        margin-top: 2rem !important
    }

    .mt-xl-9 {
        margin-top: 2.25rem !important
    }

    .mt-xl-10 {
        margin-top: 2.5rem !important
    }

    .mt-xl-11 {
        margin-top: 3rem !important
    }

    .mt-xl-12 {
        margin-top: 3.5rem !important
    }

    .mt-xl-13 {
        margin-top: 4rem !important
    }

    .mt-xl-14 {
        margin-top: 4.5rem !important
    }

    .mt-xl-15 {
        margin-top: 5rem !important
    }

    .mt-xl-16 {
        margin-top: 6rem !important
    }

    .mt-xl-17 {
        margin-top: 7rem !important
    }

    .mt-xl-18 {
        margin-top: 8rem !important
    }

    .mt-xl-19 {
        margin-top: 9rem !important
    }

    .mt-xl-20 {
        margin-top: 10rem !important
    }

    .mt-xl-21 {
        margin-top: 12.5rem !important
    }

    .mt-xl-22 {
        margin-top: 15rem !important
    }

    .mt-xl-23 {
        margin-top: 17.5rem !important
    }

    .mt-xl-24 {
        margin-top: 20rem !important
    }

    .mt-xl-25 {
        margin-top: 22.5rem !important
    }

    .mt-xl-auto {
        margin-top: auto !important
    }

    .me-xl-0 {
        margin-right: 0 !important
    }

    .me-xl-1 {
        margin-right: .25rem !important
    }

    .me-xl-2 {
        margin-right: .5rem !important
    }

    .me-xl-3 {
        margin-right: .75rem !important
    }

    .me-xl-4 {
        margin-right: 1rem !important
    }

    .me-xl-5 {
        margin-right: 1.25rem !important
    }

    .me-xl-6 {
        margin-right: 1.5rem !important
    }

    .me-xl-7 {
        margin-right: 1.75rem !important
    }

    .me-xl-8 {
        margin-right: 2rem !important
    }

    .me-xl-9 {
        margin-right: 2.25rem !important
    }

    .me-xl-10 {
        margin-right: 2.5rem !important
    }

    .me-xl-11 {
        margin-right: 3rem !important
    }

    .me-xl-12 {
        margin-right: 3.5rem !important
    }

    .me-xl-13 {
        margin-right: 4rem !important
    }

    .me-xl-14 {
        margin-right: 4.5rem !important
    }

    .me-xl-15 {
        margin-right: 5rem !important
    }

    .me-xl-16 {
        margin-right: 6rem !important
    }

    .me-xl-17 {
        margin-right: 7rem !important
    }

    .me-xl-18 {
        margin-right: 8rem !important
    }

    .me-xl-19 {
        margin-right: 9rem !important
    }

    .me-xl-20 {
        margin-right: 10rem !important
    }

    .me-xl-21 {
        margin-right: 12.5rem !important
    }

    .me-xl-22 {
        margin-right: 15rem !important
    }

    .me-xl-23 {
        margin-right: 17.5rem !important
    }

    .me-xl-24 {
        margin-right: 20rem !important
    }

    .me-xl-25 {
        margin-right: 22.5rem !important
    }

    .me-xl-auto {
        margin-right: auto !important
    }

    .mb-xl-0 {
        margin-bottom: 0 !important
    }

    .mb-xl-1 {
        margin-bottom: .25rem !important
    }

    .mb-xl-2 {
        margin-bottom: .5rem !important
    }

    .mb-xl-3 {
        margin-bottom: .75rem !important
    }

    .mb-xl-4 {
        margin-bottom: 1rem !important
    }

    .mb-xl-5 {
        margin-bottom: 1.25rem !important
    }

    .mb-xl-6 {
        margin-bottom: 1.5rem !important
    }

    .mb-xl-7 {
        margin-bottom: 1.75rem !important
    }

    .mb-xl-8 {
        margin-bottom: 2rem !important
    }

    .mb-xl-9 {
        margin-bottom: 2.25rem !important
    }

    .mb-xl-10 {
        margin-bottom: 2.5rem !important
    }

    .mb-xl-11 {
        margin-bottom: 3rem !important
    }

    .mb-xl-12 {
        margin-bottom: 3.5rem !important
    }

    .mb-xl-13 {
        margin-bottom: 4rem !important
    }

    .mb-xl-14 {
        margin-bottom: 4.5rem !important
    }

    .mb-xl-15 {
        margin-bottom: 5rem !important
    }

    .mb-xl-16 {
        margin-bottom: 6rem !important
    }

    .mb-xl-17 {
        margin-bottom: 7rem !important
    }

    .mb-xl-18 {
        margin-bottom: 8rem !important
    }

    .mb-xl-19 {
        margin-bottom: 9rem !important
    }

    .mb-xl-20 {
        margin-bottom: 10rem !important
    }

    .mb-xl-21 {
        margin-bottom: 12.5rem !important
    }

    .mb-xl-22 {
        margin-bottom: 15rem !important
    }

    .mb-xl-23 {
        margin-bottom: 17.5rem !important
    }

    .mb-xl-24 {
        margin-bottom: 20rem !important
    }

    .mb-xl-25 {
        margin-bottom: 22.5rem !important
    }

    .mb-xl-auto {
        margin-bottom: auto !important
    }

    .ms-xl-0 {
        margin-left: 0 !important
    }

    .ms-xl-1 {
        margin-left: .25rem !important
    }

    .ms-xl-2 {
        margin-left: .5rem !important
    }

    .ms-xl-3 {
        margin-left: .75rem !important
    }

    .ms-xl-4 {
        margin-left: 1rem !important
    }

    .ms-xl-5 {
        margin-left: 1.25rem !important
    }

    .ms-xl-6 {
        margin-left: 1.5rem !important
    }

    .ms-xl-7 {
        margin-left: 1.75rem !important
    }

    .ms-xl-8 {
        margin-left: 2rem !important
    }

    .ms-xl-9 {
        margin-left: 2.25rem !important
    }

    .ms-xl-10 {
        margin-left: 2.5rem !important
    }

    .ms-xl-11 {
        margin-left: 3rem !important
    }

    .ms-xl-12 {
        margin-left: 3.5rem !important
    }

    .ms-xl-13 {
        margin-left: 4rem !important
    }

    .ms-xl-14 {
        margin-left: 4.5rem !important
    }

    .ms-xl-15 {
        margin-left: 5rem !important
    }

    .ms-xl-16 {
        margin-left: 6rem !important
    }

    .ms-xl-17 {
        margin-left: 7rem !important
    }

    .ms-xl-18 {
        margin-left: 8rem !important
    }

    .ms-xl-19 {
        margin-left: 9rem !important
    }

    .ms-xl-20 {
        margin-left: 10rem !important
    }

    .ms-xl-21 {
        margin-left: 12.5rem !important
    }

    .ms-xl-22 {
        margin-left: 15rem !important
    }

    .ms-xl-23 {
        margin-left: 17.5rem !important
    }

    .ms-xl-24 {
        margin-left: 20rem !important
    }

    .ms-xl-25 {
        margin-left: 22.5rem !important
    }

    .ms-xl-auto {
        margin-left: auto !important
    }

    .m-xl-n1 {
        margin: -.25rem !important
    }

    .m-xl-n2 {
        margin: -.5rem !important
    }

    .m-xl-n3 {
        margin: -.75rem !important
    }

    .m-xl-n4 {
        margin: -1rem !important
    }

    .m-xl-n5 {
        margin: -1.25rem !important
    }

    .m-xl-n6 {
        margin: -1.5rem !important
    }

    .m-xl-n7 {
        margin: -1.75rem !important
    }

    .m-xl-n8 {
        margin: -2rem !important
    }

    .m-xl-n9 {
        margin: -2.25rem !important
    }

    .m-xl-n10 {
        margin: -2.5rem !important
    }

    .m-xl-n11 {
        margin: -3rem !important
    }

    .m-xl-n12 {
        margin: -3.5rem !important
    }

    .m-xl-n13 {
        margin: -4rem !important
    }

    .m-xl-n14 {
        margin: -4.5rem !important
    }

    .m-xl-n15 {
        margin: -5rem !important
    }

    .m-xl-n16 {
        margin: -6rem !important
    }

    .m-xl-n17 {
        margin: -7rem !important
    }

    .m-xl-n18 {
        margin: -8rem !important
    }

    .m-xl-n19 {
        margin: -9rem !important
    }

    .m-xl-n20 {
        margin: -10rem !important
    }

    .m-xl-n21 {
        margin: -12.5rem !important
    }

    .m-xl-n22 {
        margin: -15rem !important
    }

    .m-xl-n23 {
        margin: -17.5rem !important
    }

    .m-xl-n24 {
        margin: -20rem !important
    }

    .m-xl-n25 {
        margin: -22.5rem !important
    }

    .mx-xl-n1 {
        margin-right: -.25rem !important;
        margin-left: -.25rem !important
    }

    .mx-xl-n2 {
        margin-right: -.5rem !important;
        margin-left: -.5rem !important
    }

    .mx-xl-n3 {
        margin-right: -.75rem !important;
        margin-left: -.75rem !important
    }

    .mx-xl-n4 {
        margin-right: -1rem !important;
        margin-left: -1rem !important
    }

    .mx-xl-n5 {
        margin-right: -1.25rem !important;
        margin-left: -1.25rem !important
    }

    .mx-xl-n6 {
        margin-right: -1.5rem !important;
        margin-left: -1.5rem !important
    }

    .mx-xl-n7 {
        margin-right: -1.75rem !important;
        margin-left: -1.75rem !important
    }

    .mx-xl-n8 {
        margin-right: -2rem !important;
        margin-left: -2rem !important
    }

    .mx-xl-n9 {
        margin-right: -2.25rem !important;
        margin-left: -2.25rem !important
    }

    .mx-xl-n10 {
        margin-right: -2.5rem !important;
        margin-left: -2.5rem !important
    }

    .mx-xl-n11 {
        margin-right: -3rem !important;
        margin-left: -3rem !important
    }

    .mx-xl-n12 {
        margin-right: -3.5rem !important;
        margin-left: -3.5rem !important
    }

    .mx-xl-n13 {
        margin-right: -4rem !important;
        margin-left: -4rem !important
    }

    .mx-xl-n14 {
        margin-right: -4.5rem !important;
        margin-left: -4.5rem !important
    }

    .mx-xl-n15 {
        margin-right: -5rem !important;
        margin-left: -5rem !important
    }

    .mx-xl-n16 {
        margin-right: -6rem !important;
        margin-left: -6rem !important
    }

    .mx-xl-n17 {
        margin-right: -7rem !important;
        margin-left: -7rem !important
    }

    .mx-xl-n18 {
        margin-right: -8rem !important;
        margin-left: -8rem !important
    }

    .mx-xl-n19 {
        margin-right: -9rem !important;
        margin-left: -9rem !important
    }

    .mx-xl-n20 {
        margin-right: -10rem !important;
        margin-left: -10rem !important
    }

    .mx-xl-n21 {
        margin-right: -12.5rem !important;
        margin-left: -12.5rem !important
    }

    .mx-xl-n22 {
        margin-right: -15rem !important;
        margin-left: -15rem !important
    }

    .mx-xl-n23 {
        margin-right: -17.5rem !important;
        margin-left: -17.5rem !important
    }

    .mx-xl-n24 {
        margin-right: -20rem !important;
        margin-left: -20rem !important
    }

    .mx-xl-n25 {
        margin-right: -22.5rem !important;
        margin-left: -22.5rem !important
    }

    .my-xl-n1 {
        margin-top: -.25rem !important;
        margin-bottom: -.25rem !important
    }

    .my-xl-n2 {
        margin-top: -.5rem !important;
        margin-bottom: -.5rem !important
    }

    .my-xl-n3 {
        margin-top: -.75rem !important;
        margin-bottom: -.75rem !important
    }

    .my-xl-n4 {
        margin-top: -1rem !important;
        margin-bottom: -1rem !important
    }

    .my-xl-n5 {
        margin-top: -1.25rem !important;
        margin-bottom: -1.25rem !important
    }

    .my-xl-n6 {
        margin-top: -1.5rem !important;
        margin-bottom: -1.5rem !important
    }

    .my-xl-n7 {
        margin-top: -1.75rem !important;
        margin-bottom: -1.75rem !important
    }

    .my-xl-n8 {
        margin-top: -2rem !important;
        margin-bottom: -2rem !important
    }

    .my-xl-n9 {
        margin-top: -2.25rem !important;
        margin-bottom: -2.25rem !important
    }

    .my-xl-n10 {
        margin-top: -2.5rem !important;
        margin-bottom: -2.5rem !important
    }

    .my-xl-n11 {
        margin-top: -3rem !important;
        margin-bottom: -3rem !important
    }

    .my-xl-n12 {
        margin-top: -3.5rem !important;
        margin-bottom: -3.5rem !important
    }

    .my-xl-n13 {
        margin-top: -4rem !important;
        margin-bottom: -4rem !important
    }

    .my-xl-n14 {
        margin-top: -4.5rem !important;
        margin-bottom: -4.5rem !important
    }

    .my-xl-n15 {
        margin-top: -5rem !important;
        margin-bottom: -5rem !important
    }

    .my-xl-n16 {
        margin-top: -6rem !important;
        margin-bottom: -6rem !important
    }

    .my-xl-n17 {
        margin-top: -7rem !important;
        margin-bottom: -7rem !important
    }

    .my-xl-n18 {
        margin-top: -8rem !important;
        margin-bottom: -8rem !important
    }

    .my-xl-n19 {
        margin-top: -9rem !important;
        margin-bottom: -9rem !important
    }

    .my-xl-n20 {
        margin-top: -10rem !important;
        margin-bottom: -10rem !important
    }

    .my-xl-n21 {
        margin-top: -12.5rem !important;
        margin-bottom: -12.5rem !important
    }

    .my-xl-n22 {
        margin-top: -15rem !important;
        margin-bottom: -15rem !important
    }

    .my-xl-n23 {
        margin-top: -17.5rem !important;
        margin-bottom: -17.5rem !important
    }

    .my-xl-n24 {
        margin-top: -20rem !important;
        margin-bottom: -20rem !important
    }

    .my-xl-n25 {
        margin-top: -22.5rem !important;
        margin-bottom: -22.5rem !important
    }

    .mt-xl-n1 {
        margin-top: -.25rem !important
    }

    .mt-xl-n2 {
        margin-top: -.5rem !important
    }

    .mt-xl-n3 {
        margin-top: -.75rem !important
    }

    .mt-xl-n4 {
        margin-top: -1rem !important
    }

    .mt-xl-n5 {
        margin-top: -1.25rem !important
    }

    .mt-xl-n6 {
        margin-top: -1.5rem !important
    }

    .mt-xl-n7 {
        margin-top: -1.75rem !important
    }

    .mt-xl-n8 {
        margin-top: -2rem !important
    }

    .mt-xl-n9 {
        margin-top: -2.25rem !important
    }

    .mt-xl-n10 {
        margin-top: -2.5rem !important
    }

    .mt-xl-n11 {
        margin-top: -3rem !important
    }

    .mt-xl-n12 {
        margin-top: -3.5rem !important
    }

    .mt-xl-n13 {
        margin-top: -4rem !important
    }

    .mt-xl-n14 {
        margin-top: -4.5rem !important
    }

    .mt-xl-n15 {
        margin-top: -5rem !important
    }

    .mt-xl-n16 {
        margin-top: -6rem !important
    }

    .mt-xl-n17 {
        margin-top: -7rem !important
    }

    .mt-xl-n18 {
        margin-top: -8rem !important
    }

    .mt-xl-n19 {
        margin-top: -9rem !important
    }

    .mt-xl-n20 {
        margin-top: -10rem !important
    }

    .mt-xl-n21 {
        margin-top: -12.5rem !important
    }

    .mt-xl-n22 {
        margin-top: -15rem !important
    }

    .mt-xl-n23 {
        margin-top: -17.5rem !important
    }

    .mt-xl-n24 {
        margin-top: -20rem !important
    }

    .mt-xl-n25 {
        margin-top: -22.5rem !important
    }

    .me-xl-n1 {
        margin-right: -.25rem !important
    }

    .me-xl-n2 {
        margin-right: -.5rem !important
    }

    .me-xl-n3 {
        margin-right: -.75rem !important
    }

    .me-xl-n4 {
        margin-right: -1rem !important
    }

    .me-xl-n5 {
        margin-right: -1.25rem !important
    }

    .me-xl-n6 {
        margin-right: -1.5rem !important
    }

    .me-xl-n7 {
        margin-right: -1.75rem !important
    }

    .me-xl-n8 {
        margin-right: -2rem !important
    }

    .me-xl-n9 {
        margin-right: -2.25rem !important
    }

    .me-xl-n10 {
        margin-right: -2.5rem !important
    }

    .me-xl-n11 {
        margin-right: -3rem !important
    }

    .me-xl-n12 {
        margin-right: -3.5rem !important
    }

    .me-xl-n13 {
        margin-right: -4rem !important
    }

    .me-xl-n14 {
        margin-right: -4.5rem !important
    }

    .me-xl-n15 {
        margin-right: -5rem !important
    }

    .me-xl-n16 {
        margin-right: -6rem !important
    }

    .me-xl-n17 {
        margin-right: -7rem !important
    }

    .me-xl-n18 {
        margin-right: -8rem !important
    }

    .me-xl-n19 {
        margin-right: -9rem !important
    }

    .me-xl-n20 {
        margin-right: -10rem !important
    }

    .me-xl-n21 {
        margin-right: -12.5rem !important
    }

    .me-xl-n22 {
        margin-right: -15rem !important
    }

    .me-xl-n23 {
        margin-right: -17.5rem !important
    }

    .me-xl-n24 {
        margin-right: -20rem !important
    }

    .me-xl-n25 {
        margin-right: -22.5rem !important
    }

    .mb-xl-n1 {
        margin-bottom: -.25rem !important
    }

    .mb-xl-n2 {
        margin-bottom: -.5rem !important
    }

    .mb-xl-n3 {
        margin-bottom: -.75rem !important
    }

    .mb-xl-n4 {
        margin-bottom: -1rem !important
    }

    .mb-xl-n5 {
        margin-bottom: -1.25rem !important
    }

    .mb-xl-n6 {
        margin-bottom: -1.5rem !important
    }

    .mb-xl-n7 {
        margin-bottom: -1.75rem !important
    }

    .mb-xl-n8 {
        margin-bottom: -2rem !important
    }

    .mb-xl-n9 {
        margin-bottom: -2.25rem !important
    }

    .mb-xl-n10 {
        margin-bottom: -2.5rem !important
    }

    .mb-xl-n11 {
        margin-bottom: -3rem !important
    }

    .mb-xl-n12 {
        margin-bottom: -3.5rem !important
    }

    .mb-xl-n13 {
        margin-bottom: -4rem !important
    }

    .mb-xl-n14 {
        margin-bottom: -4.5rem !important
    }

    .mb-xl-n15 {
        margin-bottom: -5rem !important
    }

    .mb-xl-n16 {
        margin-bottom: -6rem !important
    }

    .mb-xl-n17 {
        margin-bottom: -7rem !important
    }

    .mb-xl-n18 {
        margin-bottom: -8rem !important
    }

    .mb-xl-n19 {
        margin-bottom: -9rem !important
    }

    .mb-xl-n20 {
        margin-bottom: -10rem !important
    }

    .mb-xl-n21 {
        margin-bottom: -12.5rem !important
    }

    .mb-xl-n22 {
        margin-bottom: -15rem !important
    }

    .mb-xl-n23 {
        margin-bottom: -17.5rem !important
    }

    .mb-xl-n24 {
        margin-bottom: -20rem !important
    }

    .mb-xl-n25 {
        margin-bottom: -22.5rem !important
    }

    .ms-xl-n1 {
        margin-left: -.25rem !important
    }

    .ms-xl-n2 {
        margin-left: -.5rem !important
    }

    .ms-xl-n3 {
        margin-left: -.75rem !important
    }

    .ms-xl-n4 {
        margin-left: -1rem !important
    }

    .ms-xl-n5 {
        margin-left: -1.25rem !important
    }

    .ms-xl-n6 {
        margin-left: -1.5rem !important
    }

    .ms-xl-n7 {
        margin-left: -1.75rem !important
    }

    .ms-xl-n8 {
        margin-left: -2rem !important
    }

    .ms-xl-n9 {
        margin-left: -2.25rem !important
    }

    .ms-xl-n10 {
        margin-left: -2.5rem !important
    }

    .ms-xl-n11 {
        margin-left: -3rem !important
    }

    .ms-xl-n12 {
        margin-left: -3.5rem !important
    }

    .ms-xl-n13 {
        margin-left: -4rem !important
    }

    .ms-xl-n14 {
        margin-left: -4.5rem !important
    }

    .ms-xl-n15 {
        margin-left: -5rem !important
    }

    .ms-xl-n16 {
        margin-left: -6rem !important
    }

    .ms-xl-n17 {
        margin-left: -7rem !important
    }

    .ms-xl-n18 {
        margin-left: -8rem !important
    }

    .ms-xl-n19 {
        margin-left: -9rem !important
    }

    .ms-xl-n20 {
        margin-left: -10rem !important
    }

    .ms-xl-n21 {
        margin-left: -12.5rem !important
    }

    .ms-xl-n22 {
        margin-left: -15rem !important
    }

    .ms-xl-n23 {
        margin-left: -17.5rem !important
    }

    .ms-xl-n24 {
        margin-left: -20rem !important
    }

    .ms-xl-n25 {
        margin-left: -22.5rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .p-xl-1 {
        padding: .25rem !important
    }

    .p-xl-2 {
        padding: .5rem !important
    }

    .p-xl-3 {
        padding: .75rem !important
    }

    .p-xl-4 {
        padding: 1rem !important
    }

    .p-xl-5 {
        padding: 1.25rem !important
    }

    .p-xl-6 {
        padding: 1.5rem !important
    }

    .p-xl-7 {
        padding: 1.75rem !important
    }

    .p-xl-8 {
        padding: 2rem !important
    }

    .p-xl-9 {
        padding: 2.25rem !important
    }

    .p-xl-10 {
        padding: 2.5rem !important
    }

    .p-xl-11 {
        padding: 3rem !important
    }

    .p-xl-12 {
        padding: 3.5rem !important
    }

    .p-xl-13 {
        padding: 4rem !important
    }

    .p-xl-14 {
        padding: 4.5rem !important
    }

    .p-xl-15 {
        padding: 5rem !important
    }

    .p-xl-16 {
        padding: 6rem !important
    }

    .p-xl-17 {
        padding: 7rem !important
    }

    .p-xl-18 {
        padding: 8rem !important
    }

    .p-xl-19 {
        padding: 9rem !important
    }

    .p-xl-20 {
        padding: 10rem !important
    }

    .p-xl-21 {
        padding: 12.5rem !important
    }

    .p-xl-22 {
        padding: 15rem !important
    }

    .p-xl-23 {
        padding: 17.5rem !important
    }

    .p-xl-24 {
        padding: 20rem !important
    }

    .p-xl-25 {
        padding: 22.5rem !important
    }

    .px-xl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-xl-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-xl-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-xl-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important
    }

    .px-xl-4 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-xl-5 {
        padding-right: 1.25rem !important;
        padding-left: 1.25rem !important
    }

    .px-xl-6 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-xl-7 {
        padding-right: 1.75rem !important;
        padding-left: 1.75rem !important
    }

    .px-xl-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important
    }

    .px-xl-9 {
        padding-right: 2.25rem !important;
        padding-left: 2.25rem !important
    }

    .px-xl-10 {
        padding-right: 2.5rem !important;
        padding-left: 2.5rem !important
    }

    .px-xl-11 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .px-xl-12 {
        padding-right: 3.5rem !important;
        padding-left: 3.5rem !important
    }

    .px-xl-13 {
        padding-right: 4rem !important;
        padding-left: 4rem !important
    }

    .px-xl-14 {
        padding-right: 4.5rem !important;
        padding-left: 4.5rem !important
    }

    .px-xl-15 {
        padding-right: 5rem !important;
        padding-left: 5rem !important
    }

    .px-xl-16 {
        padding-right: 6rem !important;
        padding-left: 6rem !important
    }

    .px-xl-17 {
        padding-right: 7rem !important;
        padding-left: 7rem !important
    }

    .px-xl-18 {
        padding-right: 8rem !important;
        padding-left: 8rem !important
    }

    .px-xl-19 {
        padding-right: 9rem !important;
        padding-left: 9rem !important
    }

    .px-xl-20 {
        padding-right: 10rem !important;
        padding-left: 10rem !important
    }

    .px-xl-21 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important
    }

    .px-xl-22 {
        padding-right: 15rem !important;
        padding-left: 15rem !important
    }

    .px-xl-23 {
        padding-right: 17.5rem !important;
        padding-left: 17.5rem !important
    }

    .px-xl-24 {
        padding-right: 20rem !important;
        padding-left: 20rem !important
    }

    .px-xl-25 {
        padding-right: 22.5rem !important;
        padding-left: 22.5rem !important
    }

    .py-xl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-xl-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-xl-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-xl-3 {
        padding-top: .75rem !important;
        padding-bottom: .75rem !important
    }

    .py-xl-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-xl-5 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important
    }

    .py-xl-6 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-xl-7 {
        padding-top: 1.75rem !important;
        padding-bottom: 1.75rem !important
    }

    .py-xl-8 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .py-xl-9 {
        padding-top: 2.25rem !important;
        padding-bottom: 2.25rem !important
    }

    .py-xl-10 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important
    }

    .py-xl-11 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .py-xl-12 {
        padding-top: 3.5rem !important;
        padding-bottom: 3.5rem !important
    }

    .py-xl-13 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important
    }

    .py-xl-14 {
        padding-top: 4.5rem !important;
        padding-bottom: 4.5rem !important
    }

    .py-xl-15 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important
    }

    .py-xl-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important
    }

    .py-xl-17 {
        padding-top: 7rem !important;
        padding-bottom: 7rem !important
    }

    .py-xl-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important
    }

    .py-xl-19 {
        padding-top: 9rem !important;
        padding-bottom: 9rem !important
    }

    .py-xl-20 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important
    }

    .py-xl-21 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important
    }

    .py-xl-22 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important
    }

    .py-xl-23 {
        padding-top: 17.5rem !important;
        padding-bottom: 17.5rem !important
    }

    .py-xl-24 {
        padding-top: 20rem !important;
        padding-bottom: 20rem !important
    }

    .py-xl-25 {
        padding-top: 22.5rem !important;
        padding-bottom: 22.5rem !important
    }

    .pt-xl-0 {
        padding-top: 0 !important
    }

    .pt-xl-1 {
        padding-top: .25rem !important
    }

    .pt-xl-2 {
        padding-top: .5rem !important
    }

    .pt-xl-3 {
        padding-top: .75rem !important
    }

    .pt-xl-4 {
        padding-top: 1rem !important
    }

    .pt-xl-5 {
        padding-top: 1.25rem !important
    }

    .pt-xl-6 {
        padding-top: 1.5rem !important
    }

    .pt-xl-7 {
        padding-top: 1.75rem !important
    }

    .pt-xl-8 {
        padding-top: 2rem !important
    }

    .pt-xl-9 {
        padding-top: 2.25rem !important
    }

    .pt-xl-10 {
        padding-top: 2.5rem !important
    }

    .pt-xl-11 {
        padding-top: 3rem !important
    }

    .pt-xl-12 {
        padding-top: 3.5rem !important
    }

    .pt-xl-13 {
        padding-top: 4rem !important
    }

    .pt-xl-14 {
        padding-top: 4.5rem !important
    }

    .pt-xl-15 {
        padding-top: 5rem !important
    }

    .pt-xl-16 {
        padding-top: 6rem !important
    }

    .pt-xl-17 {
        padding-top: 7rem !important
    }

    .pt-xl-18 {
        padding-top: 8rem !important
    }

    .pt-xl-19 {
        padding-top: 9rem !important
    }

    .pt-xl-20 {
        padding-top: 10rem !important
    }

    .pt-xl-21 {
        padding-top: 12.5rem !important
    }

    .pt-xl-22 {
        padding-top: 15rem !important
    }

    .pt-xl-23 {
        padding-top: 17.5rem !important
    }

    .pt-xl-24 {
        padding-top: 20rem !important
    }

    .pt-xl-25 {
        padding-top: 22.5rem !important
    }

    .pe-xl-0 {
        padding-right: 0 !important
    }

    .pe-xl-1 {
        padding-right: .25rem !important
    }

    .pe-xl-2 {
        padding-right: .5rem !important
    }

    .pe-xl-3 {
        padding-right: .75rem !important
    }

    .pe-xl-4 {
        padding-right: 1rem !important
    }

    .pe-xl-5 {
        padding-right: 1.25rem !important
    }

    .pe-xl-6 {
        padding-right: 1.5rem !important
    }

    .pe-xl-7 {
        padding-right: 1.75rem !important
    }

    .pe-xl-8 {
        padding-right: 2rem !important
    }

    .pe-xl-9 {
        padding-right: 2.25rem !important
    }

    .pe-xl-10 {
        padding-right: 2.5rem !important
    }

    .pe-xl-11 {
        padding-right: 3rem !important
    }

    .pe-xl-12 {
        padding-right: 3.5rem !important
    }

    .pe-xl-13 {
        padding-right: 4rem !important
    }

    .pe-xl-14 {
        padding-right: 4.5rem !important
    }

    .pe-xl-15 {
        padding-right: 5rem !important
    }

    .pe-xl-16 {
        padding-right: 6rem !important
    }

    .pe-xl-17 {
        padding-right: 7rem !important
    }

    .pe-xl-18 {
        padding-right: 8rem !important
    }

    .pe-xl-19 {
        padding-right: 9rem !important
    }

    .pe-xl-20 {
        padding-right: 10rem !important
    }

    .pe-xl-21 {
        padding-right: 12.5rem !important
    }

    .pe-xl-22 {
        padding-right: 15rem !important
    }

    .pe-xl-23 {
        padding-right: 17.5rem !important
    }

    .pe-xl-24 {
        padding-right: 20rem !important
    }

    .pe-xl-25 {
        padding-right: 22.5rem !important
    }

    .pb-xl-0 {
        padding-bottom: 0 !important
    }

    .pb-xl-1 {
        padding-bottom: .25rem !important
    }

    .pb-xl-2 {
        padding-bottom: .5rem !important
    }

    .pb-xl-3 {
        padding-bottom: .75rem !important
    }

    .pb-xl-4 {
        padding-bottom: 1rem !important
    }

    .pb-xl-5 {
        padding-bottom: 1.25rem !important
    }

    .pb-xl-6 {
        padding-bottom: 1.5rem !important
    }

    .pb-xl-7 {
        padding-bottom: 1.75rem !important
    }

    .pb-xl-8 {
        padding-bottom: 2rem !important
    }

    .pb-xl-9 {
        padding-bottom: 2.25rem !important
    }

    .pb-xl-10 {
        padding-bottom: 2.5rem !important
    }

    .pb-xl-11 {
        padding-bottom: 3rem !important
    }

    .pb-xl-12 {
        padding-bottom: 3.5rem !important
    }

    .pb-xl-13 {
        padding-bottom: 4rem !important
    }

    .pb-xl-14 {
        padding-bottom: 4.5rem !important
    }

    .pb-xl-15 {
        padding-bottom: 5rem !important
    }

    .pb-xl-16 {
        padding-bottom: 6rem !important
    }

    .pb-xl-17 {
        padding-bottom: 7rem !important
    }

    .pb-xl-18 {
        padding-bottom: 8rem !important
    }

    .pb-xl-19 {
        padding-bottom: 9rem !important
    }

    .pb-xl-20 {
        padding-bottom: 10rem !important
    }

    .pb-xl-21 {
        padding-bottom: 12.5rem !important
    }

    .pb-xl-22 {
        padding-bottom: 15rem !important
    }

    .pb-xl-23 {
        padding-bottom: 17.5rem !important
    }

    .pb-xl-24 {
        padding-bottom: 20rem !important
    }

    .pb-xl-25 {
        padding-bottom: 22.5rem !important
    }

    .ps-xl-0 {
        padding-left: 0 !important
    }

    .ps-xl-1 {
        padding-left: .25rem !important
    }

    .ps-xl-2 {
        padding-left: .5rem !important
    }

    .ps-xl-3 {
        padding-left: .75rem !important
    }

    .ps-xl-4 {
        padding-left: 1rem !important
    }

    .ps-xl-5 {
        padding-left: 1.25rem !important
    }

    .ps-xl-6 {
        padding-left: 1.5rem !important
    }

    .ps-xl-7 {
        padding-left: 1.75rem !important
    }

    .ps-xl-8 {
        padding-left: 2rem !important
    }

    .ps-xl-9 {
        padding-left: 2.25rem !important
    }

    .ps-xl-10 {
        padding-left: 2.5rem !important
    }

    .ps-xl-11 {
        padding-left: 3rem !important
    }

    .ps-xl-12 {
        padding-left: 3.5rem !important
    }

    .ps-xl-13 {
        padding-left: 4rem !important
    }

    .ps-xl-14 {
        padding-left: 4.5rem !important
    }

    .ps-xl-15 {
        padding-left: 5rem !important
    }

    .ps-xl-16 {
        padding-left: 6rem !important
    }

    .ps-xl-17 {
        padding-left: 7rem !important
    }

    .ps-xl-18 {
        padding-left: 8rem !important
    }

    .ps-xl-19 {
        padding-left: 9rem !important
    }

    .ps-xl-20 {
        padding-left: 10rem !important
    }

    .ps-xl-21 {
        padding-left: 12.5rem !important
    }

    .ps-xl-22 {
        padding-left: 15rem !important
    }

    .ps-xl-23 {
        padding-left: 17.5rem !important
    }

    .ps-xl-24 {
        padding-left: 20rem !important
    }

    .ps-xl-25 {
        padding-left: 22.5rem !important
    }

    .gap-xl-0 {
        gap: 0 !important
    }

    .gap-xl-1 {
        gap: .25rem !important
    }

    .gap-xl-2 {
        gap: .5rem !important
    }

    .gap-xl-3 {
        gap: .75rem !important
    }

    .gap-xl-4 {
        gap: 1rem !important
    }

    .gap-xl-5 {
        gap: 1.25rem !important
    }

    .gap-xl-6 {
        gap: 1.5rem !important
    }

    .gap-xl-7 {
        gap: 1.75rem !important
    }

    .gap-xl-8 {
        gap: 2rem !important
    }

    .gap-xl-9 {
        gap: 2.25rem !important
    }

    .gap-xl-10 {
        gap: 2.5rem !important
    }

    .gap-xl-11 {
        gap: 3rem !important
    }

    .gap-xl-12 {
        gap: 3.5rem !important
    }

    .gap-xl-13 {
        gap: 4rem !important
    }

    .gap-xl-14 {
        gap: 4.5rem !important
    }

    .gap-xl-15 {
        gap: 5rem !important
    }

    .gap-xl-16 {
        gap: 6rem !important
    }

    .gap-xl-17 {
        gap: 7rem !important
    }

    .gap-xl-18 {
        gap: 8rem !important
    }

    .gap-xl-19 {
        gap: 9rem !important
    }

    .gap-xl-20 {
        gap: 10rem !important
    }

    .gap-xl-21 {
        gap: 12.5rem !important
    }

    .gap-xl-22 {
        gap: 15rem !important
    }

    .gap-xl-23 {
        gap: 17.5rem !important
    }

    .gap-xl-24 {
        gap: 20rem !important
    }

    .gap-xl-25 {
        gap: 22.5rem !important
    }

    .text-xl-start {
        text-align: left !important
    }

    .text-xl-end {
        text-align: right !important
    }

    .text-xl-center {
        text-align: center !important
    }
}

@media (min-width:1400px) {
    .float-xxl-start {
        float: left !important
    }

    .float-xxl-end {
        float: right !important
    }

    .float-xxl-none {
        float: none !important
    }

    .d-xxl-inline {
        display: inline !important
    }

    .d-xxl-inline-block {
        display: inline-block !important
    }

    .d-xxl-block {
        display: block !important
    }

    .d-xxl-grid {
        display: grid !important
    }

    .d-xxl-table {
        display: table !important
    }

    .d-xxl-table-row {
        display: table-row !important
    }

    .d-xxl-table-cell {
        display: table-cell !important
    }

    .d-xxl-flex {
        display: flex !important
    }

    .d-xxl-inline-flex {
        display: inline-flex !important
    }

    .d-xxl-none {
        display: none !important
    }

    .flex-xxl-fill {
        flex: 1 1 auto !important
    }

    .flex-xxl-row {
        flex-direction: row !important
    }

    .flex-xxl-column {
        flex-direction: column !important
    }

    .flex-xxl-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-xxl-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-xxl-grow-0 {
        flex-grow: 0 !important
    }

    .flex-xxl-grow-1 {
        flex-grow: 1 !important
    }

    .flex-xxl-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-xxl-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-xxl-wrap {
        flex-wrap: wrap !important
    }

    .flex-xxl-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-xxl-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-xxl-start {
        justify-content: flex-start !important
    }

    .justify-content-xxl-end {
        justify-content: flex-end !important
    }

    .justify-content-xxl-center {
        justify-content: center !important
    }

    .justify-content-xxl-between {
        justify-content: space-between !important
    }

    .justify-content-xxl-around {
        justify-content: space-around !important
    }

    .justify-content-xxl-evenly {
        justify-content: space-evenly !important
    }

    .align-items-xxl-start {
        align-items: flex-start !important
    }

    .align-items-xxl-end {
        align-items: flex-end !important
    }

    .align-items-xxl-center {
        align-items: center !important
    }

    .align-items-xxl-baseline {
        align-items: baseline !important
    }

    .align-items-xxl-stretch {
        align-items: stretch !important
    }

    .align-content-xxl-start {
        align-content: flex-start !important
    }

    .align-content-xxl-end {
        align-content: flex-end !important
    }

    .align-content-xxl-center {
        align-content: center !important
    }

    .align-content-xxl-between {
        align-content: space-between !important
    }

    .align-content-xxl-around {
        align-content: space-around !important
    }

    .align-content-xxl-stretch {
        align-content: stretch !important
    }

    .align-self-xxl-auto {
        align-self: auto !important
    }

    .align-self-xxl-start {
        align-self: flex-start !important
    }

    .align-self-xxl-end {
        align-self: flex-end !important
    }

    .align-self-xxl-center {
        align-self: center !important
    }

    .align-self-xxl-baseline {
        align-self: baseline !important
    }

    .align-self-xxl-stretch {
        align-self: stretch !important
    }

    .order-xxl-first {
        order: -1 !important
    }

    .order-xxl-0 {
        order: 0 !important
    }

    .order-xxl-1 {
        order: 1 !important
    }

    .order-xxl-2 {
        order: 2 !important
    }

    .order-xxl-3 {
        order: 3 !important
    }

    .order-xxl-4 {
        order: 4 !important
    }

    .order-xxl-5 {
        order: 5 !important
    }

    .order-xxl-last {
        order: 6 !important
    }

    .ms-xxl-0 {
        margin-left: 0 !important
    }

    .ms-xxl-1 {
        margin-left: .25rem !important
    }

    .ms-xxl-2 {
        margin-left: .5rem !important
    }

    .ms-xxl-3 {
        margin-left: .75rem !important
    }

    .ms-xxl-4 {
        margin-left: 1rem !important
    }

    .ms-xxl-5 {
        margin-left: 1.25rem !important
    }

    .ms-xxl-6 {
        margin-left: 1.5rem !important
    }

    .ms-xxl-7 {
        margin-left: 1.75rem !important
    }

    .ms-xxl-8 {
        margin-left: 2rem !important
    }

    .ms-xxl-9 {
        margin-left: 2.25rem !important
    }

    .ms-xxl-10 {
        margin-left: 2.5rem !important
    }

    .ms-xxl-11 {
        margin-left: 3rem !important
    }

    .ms-xxl-12 {
        margin-left: 3.5rem !important
    }

    .ms-xxl-13 {
        margin-left: 4rem !important
    }

    .ms-xxl-14 {
        margin-left: 4.5rem !important
    }

    .ms-xxl-15 {
        margin-left: 5rem !important
    }

    .ms-xxl-16 {
        margin-left: 6rem !important
    }

    .ms-xxl-17 {
        margin-left: 7rem !important
    }

    .ms-xxl-18 {
        margin-left: 8rem !important
    }

    .ms-xxl-19 {
        margin-left: 9rem !important
    }

    .ms-xxl-20 {
        margin-left: 10rem !important
    }

    .ms-xxl-21 {
        margin-left: 12.5rem !important
    }

    .ms-xxl-22 {
        margin-left: 15rem !important
    }

    .ms-xxl-23 {
        margin-left: 17.5rem !important
    }

    .ms-xxl-24 {
        margin-left: 20rem !important
    }

    .ms-xxl-25 {
        margin-left: 22.5rem !important
    }

    .ms-xxl-auto {
        margin-left: auto !important
    }

    .ms-xxl-n1 {
        margin-left: -.25rem !important
    }

    .ms-xxl-n2 {
        margin-left: -.5rem !important
    }

    .ms-xxl-n3 {
        margin-left: -.75rem !important
    }

    .ms-xxl-n4 {
        margin-left: -1rem !important
    }

    .ms-xxl-n5 {
        margin-left: -1.25rem !important
    }

    .ms-xxl-n6 {
        margin-left: -1.5rem !important
    }

    .ms-xxl-n7 {
        margin-left: -1.75rem !important
    }

    .ms-xxl-n8 {
        margin-left: -2rem !important
    }

    .ms-xxl-n9 {
        margin-left: -2.25rem !important
    }

    .ms-xxl-n10 {
        margin-left: -2.5rem !important
    }

    .ms-xxl-n11 {
        margin-left: -3rem !important
    }

    .ms-xxl-n12 {
        margin-left: -3.5rem !important
    }

    .ms-xxl-n13 {
        margin-left: -4rem !important
    }

    .ms-xxl-n14 {
        margin-left: -4.5rem !important
    }

    .ms-xxl-n15 {
        margin-left: -5rem !important
    }

    .ms-xxl-n16 {
        margin-left: -6rem !important
    }

    .ms-xxl-n17 {
        margin-left: -7rem !important
    }

    .ms-xxl-n18 {
        margin-left: -8rem !important
    }

    .ms-xxl-n19 {
        margin-left: -9rem !important
    }

    .ms-xxl-n20 {
        margin-left: -10rem !important
    }

    .ms-xxl-n21 {
        margin-left: -12.5rem !important
    }

    .ms-xxl-n22 {
        margin-left: -15rem !important
    }

    .ms-xxl-n23 {
        margin-left: -17.5rem !important
    }

    .ms-xxl-n24 {
        margin-left: -20rem !important
    }

    .ms-xxl-n25 {
        margin-left: -22.5rem !important
    }

    .p-xxl-0 {
        padding: 0 !important
    }

    .p-xxl-1 {
        padding: .25rem !important
    }

    .p-xxl-2 {
        padding: .5rem !important
    }

    .p-xxl-3 {
        padding: .75rem !important
    }

    .p-xxl-4 {
        padding: 1rem !important
    }

    .p-xxl-5 {
        padding: 1.25rem !important
    }

    .p-xxl-6 {
        padding: 1.5rem !important
    }

    .p-xxl-7 {
        padding: 1.75rem !important
    }

    .p-xxl-8 {
        padding: 2rem !important
    }

    .p-xxl-9 {
        padding: 2.25rem !important
    }

    .p-xxl-10 {
        padding: 2.5rem !important
    }

    .p-xxl-11 {
        padding: 3rem !important
    }

    .p-xxl-12 {
        padding: 3.5rem !important
    }

    .p-xxl-13 {
        padding: 4rem !important
    }

    .p-xxl-14 {
        padding: 4.5rem !important
    }

    .p-xxl-15 {
        padding: 5rem !important
    }

    .p-xxl-16 {
        padding: 6rem !important
    }

    .p-xxl-17 {
        padding: 7rem !important
    }

    .p-xxl-18 {
        padding: 8rem !important
    }

    .p-xxl-19 {
        padding: 9rem !important
    }

    .p-xxl-20 {
        padding: 10rem !important
    }

    .p-xxl-21 {
        padding: 12.5rem !important
    }

    .p-xxl-22 {
        padding: 15rem !important
    }

    .p-xxl-23 {
        padding: 17.5rem !important
    }

    .p-xxl-24 {
        padding: 20rem !important
    }

    .p-xxl-25 {
        padding: 22.5rem !important
    }

    .px-xxl-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-xxl-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-xxl-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-xxl-3 {
        padding-right: .75rem !important;
        padding-left: .75rem !important
    }

    .px-xxl-4 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-xxl-5 {
        padding-right: 1.25rem !important;
        padding-left: 1.25rem !important
    }

    .px-xxl-6 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-xxl-7 {
        padding-right: 1.75rem !important;
        padding-left: 1.75rem !important
    }

    .px-xxl-8 {
        padding-right: 2rem !important;
        padding-left: 2rem !important
    }

    .px-xxl-9 {
        padding-right: 2.25rem !important;
        padding-left: 2.25rem !important
    }

    .px-xxl-10 {
        padding-right: 2.5rem !important;
        padding-left: 2.5rem !important
    }

    .px-xxl-11 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .px-xxl-12 {
        padding-right: 3.5rem !important;
        padding-left: 3.5rem !important
    }

    .px-xxl-13 {
        padding-right: 4rem !important;
        padding-left: 4rem !important
    }

    .px-xxl-14 {
        padding-right: 4.5rem !important;
        padding-left: 4.5rem !important
    }

    .px-xxl-15 {
        padding-right: 5rem !important;
        padding-left: 5rem !important
    }

    .px-xxl-16 {
        padding-right: 6rem !important;
        padding-left: 6rem !important
    }

    .px-xxl-17 {
        padding-right: 7rem !important;
        padding-left: 7rem !important
    }

    .px-xxl-18 {
        padding-right: 8rem !important;
        padding-left: 8rem !important
    }

    .px-xxl-19 {
        padding-right: 9rem !important;
        padding-left: 9rem !important
    }

    .px-xxl-20 {
        padding-right: 10rem !important;
        padding-left: 10rem !important
    }

    .px-xxl-21 {
        padding-right: 12.5rem !important;
        padding-left: 12.5rem !important
    }

    .px-xxl-22 {
        padding-right: 15rem !important;
        padding-left: 15rem !important
    }

    .px-xxl-23 {
        padding-right: 17.5rem !important;
        padding-left: 17.5rem !important
    }

    .px-xxl-24 {
        padding-right: 20rem !important;
        padding-left: 20rem !important
    }

    .px-xxl-25 {
        padding-right: 22.5rem !important;
        padding-left: 22.5rem !important
    }

    .py-xxl-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-xxl-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-xxl-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-xxl-3 {
        padding-top: .75rem !important;
        padding-bottom: .75rem !important
    }

    .py-xxl-4 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-xxl-5 {
        padding-top: 1.25rem !important;
        padding-bottom: 1.25rem !important
    }

    .py-xxl-6 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-xxl-7 {
        padding-top: 1.75rem !important;
        padding-bottom: 1.75rem !important
    }

    .py-xxl-8 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important
    }

    .py-xxl-9 {
        padding-top: 2.25rem !important;
        padding-bottom: 2.25rem !important
    }

    .py-xxl-10 {
        padding-top: 2.5rem !important;
        padding-bottom: 2.5rem !important
    }

    .py-xxl-11 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .py-xxl-12 {
        padding-top: 3.5rem !important;
        padding-bottom: 3.5rem !important
    }

    .py-xxl-13 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important
    }

    .py-xxl-14 {
        padding-top: 4.5rem !important;
        padding-bottom: 4.5rem !important
    }

    .py-xxl-15 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important
    }

    .py-xxl-16 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important
    }

    .py-xxl-17 {
        padding-top: 7rem !important;
        padding-bottom: 7rem !important
    }

    .py-xxl-18 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important
    }

    .py-xxl-19 {
        padding-top: 9rem !important;
        padding-bottom: 9rem !important
    }

    .py-xxl-20 {
        padding-top: 10rem !important;
        padding-bottom: 10rem !important
    }

    .py-xxl-21 {
        padding-top: 12.5rem !important;
        padding-bottom: 12.5rem !important
    }

    .py-xxl-22 {
        padding-top: 15rem !important;
        padding-bottom: 15rem !important
    }

    .py-xxl-23 {
        padding-top: 17.5rem !important;
        padding-bottom: 17.5rem !important
    }

    .py-xxl-24 {
        padding-top: 20rem !important;
        padding-bottom: 20rem !important
    }

    .py-xxl-25 {
        padding-top: 22.5rem !important;
        padding-bottom: 22.5rem !important
    }

    .pt-xxl-0 {
        padding-top: 0 !important
    }

    .pt-xxl-1 {
        padding-top: .25rem !important
    }

    .pt-xxl-2 {
        padding-top: .5rem !important
    }

    .pt-xxl-3 {
        padding-top: .75rem !important
    }

    .pt-xxl-4 {
        padding-top: 1rem !important
    }

    .pt-xxl-5 {
        padding-top: 1.25rem !important
    }

    .pt-xxl-6 {
        padding-top: 1.5rem !important
    }

    .pt-xxl-7 {
        padding-top: 1.75rem !important
    }

    .pt-xxl-8 {
        padding-top: 2rem !important
    }

    .pt-xxl-9 {
        padding-top: 2.25rem !important
    }

    .pt-xxl-10 {
        padding-top: 2.5rem !important
    }

    .pt-xxl-11 {
        padding-top: 3rem !important
    }

    .pt-xxl-12 {
        padding-top: 3.5rem !important
    }

    .pt-xxl-13 {
        padding-top: 4rem !important
    }

    .pt-xxl-14 {
        padding-top: 4.5rem !important
    }

    .pt-xxl-15 {
        padding-top: 5rem !important
    }

    .pt-xxl-16 {
        padding-top: 6rem !important
    }

    .pt-xxl-17 {
        padding-top: 7rem !important
    }

    .pt-xxl-18 {
        padding-top: 8rem !important
    }

    .pt-xxl-19 {
        padding-top: 9rem !important
    }

    .pt-xxl-20 {
        padding-top: 10rem !important
    }

    .pt-xxl-21 {
        padding-top: 12.5rem !important
    }

    .pt-xxl-22 {
        padding-top: 15rem !important
    }

    .pt-xxl-23 {
        padding-top: 17.5rem !important
    }

    .pt-xxl-24 {
        padding-top: 20rem !important
    }

    .pt-xxl-25 {
        padding-top: 22.5rem !important
    }

    .pe-xxl-0 {
        padding-right: 0 !important
    }

    .pe-xxl-1 {
        padding-right: .25rem !important
    }

    .pe-xxl-2 {
        padding-right: .5rem !important
    }

    .pe-xxl-3 {
        padding-right: .75rem !important
    }

    .pe-xxl-4 {
        padding-right: 1rem !important
    }

    .pe-xxl-5 {
        padding-right: 1.25rem !important
    }

    .pe-xxl-6 {
        padding-right: 1.5rem !important
    }

    .pe-xxl-7 {
        padding-right: 1.75rem !important
    }

    .pe-xxl-8 {
        padding-right: 2rem !important
    }

    .pe-xxl-9 {
        padding-right: 2.25rem !important
    }

    .pe-xxl-10 {
        padding-right: 2.5rem !important
    }

    .pe-xxl-11 {
        padding-right: 3rem !important
    }

    .pe-xxl-12 {
        padding-right: 3.5rem !important
    }

    .pe-xxl-13 {
        padding-right: 4rem !important
    }

    .pe-xxl-14 {
        padding-right: 4.5rem !important
    }

    .pe-xxl-15 {
        padding-right: 5rem !important
    }

    .pe-xxl-16 {
        padding-right: 6rem !important
    }

    .pe-xxl-17 {
        padding-right: 7rem !important
    }

    .pe-xxl-18 {
        padding-right: 8rem !important
    }

    .pe-xxl-19 {
        padding-right: 9rem !important
    }

    .pe-xxl-20 {
        padding-right: 10rem !important
    }

    .pe-xxl-21 {
        padding-right: 12.5rem !important
    }

    .pe-xxl-22 {
        padding-right: 15rem !important
    }

    .pe-xxl-23 {
        padding-right: 17.5rem !important
    }

    .pe-xxl-24 {
        padding-right: 20rem !important
    }

    .pe-xxl-25 {
        padding-right: 22.5rem !important
    }

    .pb-xxl-0 {
        padding-bottom: 0 !important
    }

    .pb-xxl-1 {
        padding-bottom: .25rem !important
    }

    .pb-xxl-2 {
        padding-bottom: .5rem !important
    }

    .pb-xxl-3 {
        padding-bottom: .75rem !important
    }

    .pb-xxl-4 {
        padding-bottom: 1rem !important
    }

    .pb-xxl-5 {
        padding-bottom: 1.25rem !important
    }

    .pb-xxl-6 {
        padding-bottom: 1.5rem !important
    }

    .pb-xxl-7 {
        padding-bottom: 1.75rem !important
    }

    .pb-xxl-8 {
        padding-bottom: 2rem !important
    }

    .pb-xxl-9 {
        padding-bottom: 2.25rem !important
    }

    .pb-xxl-10 {
        padding-bottom: 2.5rem !important
    }

    .pb-xxl-11 {
        padding-bottom: 3rem !important
    }

    .pb-xxl-12 {
        padding-bottom: 3.5rem !important
    }

    .pb-xxl-13 {
        padding-bottom: 4rem !important
    }

    .pb-xxl-14 {
        padding-bottom: 4.5rem !important
    }

    .pb-xxl-15 {
        padding-bottom: 5rem !important
    }

    .pb-xxl-16 {
        padding-bottom: 6rem !important
    }

    .pb-xxl-17 {
        padding-bottom: 7rem !important
    }

    .pb-xxl-18 {
        padding-bottom: 8rem !important
    }

    .pb-xxl-19 {
        padding-bottom: 9rem !important
    }

    .pb-xxl-20 {
        padding-bottom: 10rem !important
    }

    .pb-xxl-21 {
        padding-bottom: 12.5rem !important
    }

    .pb-xxl-22 {
        padding-bottom: 15rem !important
    }

    .pb-xxl-23 {
        padding-bottom: 17.5rem !important
    }

    .pb-xxl-24 {
        padding-bottom: 20rem !important
    }

    .pb-xxl-25 {
        padding-bottom: 22.5rem !important
    }

    .ps-xxl-0 {
        padding-left: 0 !important
    }

    .ps-xxl-1 {
        padding-left: .25rem !important
    }

    .ps-xxl-2 {
        padding-left: .5rem !important
    }

    .ps-xxl-3 {
        padding-left: .75rem !important
    }

    .ps-xxl-4 {
        padding-left: 1rem !important
    }

    .ps-xxl-5 {
        padding-left: 1.25rem !important
    }

    .ps-xxl-6 {
        padding-left: 1.5rem !important
    }

    .ps-xxl-7 {
        padding-left: 1.75rem !important
    }

    .ps-xxl-8 {
        padding-left: 2rem !important
    }

    .ps-xxl-9 {
        padding-left: 2.25rem !important
    }

    .ps-xxl-10 {
        padding-left: 2.5rem !important
    }

    .ps-xxl-11 {
        padding-left: 3rem !important
    }

    .ps-xxl-12 {
        padding-left: 3.5rem !important
    }

    .ps-xxl-13 {
        padding-left: 4rem !important
    }

    .ps-xxl-14 {
        padding-left: 4.5rem !important
    }

    .ps-xxl-15 {
        padding-left: 5rem !important
    }

    .ps-xxl-16 {
        padding-left: 6rem !important
    }

    .ps-xxl-17 {
        padding-left: 7rem !important
    }

    .ps-xxl-18 {
        padding-left: 8rem !important
    }

    .ps-xxl-19 {
        padding-left: 9rem !important
    }

    .ps-xxl-20 {
        padding-left: 10rem !important
    }

    .ps-xxl-21 {
        padding-left: 12.5rem !important
    }

    .ps-xxl-22 {
        padding-left: 15rem !important
    }

    .ps-xxl-23 {
        padding-left: 17.5rem !important
    }

    .ps-xxl-24 {
        padding-left: 20rem !important
    }

    .ps-xxl-25 {
        padding-left: 22.5rem !important
    }

    .gap-xxl-0 {
        gap: 0 !important
    }

    .gap-xxl-1 {
        gap: .25rem !important
    }

    .gap-xxl-2 {
        gap: .5rem !important
    }

    .gap-xxl-3 {
        gap: .75rem !important
    }

    .gap-xxl-4 {
        gap: 1rem !important
    }

    .gap-xxl-5 {
        gap: 1.25rem !important
    }

    .gap-xxl-6 {
        gap: 1.5rem !important
    }

    .gap-xxl-7 {
        gap: 1.75rem !important
    }

    .gap-xxl-8 {
        gap: 2rem !important
    }

    .gap-xxl-9 {
        gap: 2.25rem !important
    }

    .gap-xxl-10 {
        gap: 2.5rem !important
    }

    .gap-xxl-11 {
        gap: 3rem !important
    }

    .gap-xxl-12 {
        gap: 3.5rem !important
    }

    .gap-xxl-13 {
        gap: 4rem !important
    }

    .gap-xxl-14 {
        gap: 4.5rem !important
    }

    .gap-xxl-15 {
        gap: 5rem !important
    }

    .gap-xxl-16 {
        gap: 6rem !important
    }

    .gap-xxl-17 {
        gap: 7rem !important
    }

    .gap-xxl-18 {
        gap: 8rem !important
    }

    .gap-xxl-19 {
        gap: 9rem !important
    }

    .gap-xxl-20 {
        gap: 10rem !important
    }

    .gap-xxl-21 {
        gap: 12.5rem !important
    }

    .gap-xxl-22 {
        gap: 15rem !important
    }

    .gap-xxl-23 {
        gap: 17.5rem !important
    }

    .gap-xxl-24 {
        gap: 20rem !important
    }

    .gap-xxl-25 {
        gap: 22.5rem !important
    }

    .text-xxl-start {
        text-align: left !important
    }

    .text-xxl-end {
        text-align: right !important
    }

    .text-xxl-center {
        text-align: center !important
    }
}

@media print {
    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-grid {
        display: grid !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: flex !important
    }

    .d-print-inline-flex {
        display: inline-flex !important
    }

    .d-print-none {
        display: none !important
    }
}

body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    word-spacing: 0.05rem;
    overflow-x: hidden !important
}

hr.dark {
    color: rgba(164, 174, 198, .25)
}

::-moz-selection {
    background: rgba(63, 120, 224, .7);
    color: #fff
}

::selection {
    background: rgba(63, 120, 224, .7);
    color: #fff
}

a {
    transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    a {
        transition: none
    }
}

a:focus {
    outline: 0
}

a[href^=tel] {
    color: inherit;
    text-decoration: inherit
}

a.hover {
    position: relative
}

a.hover::before {
    position: absolute;
    width: 100%;
    height: 1px;
    background: currentColor;
    top: 100%;
    left: 0;
    pointer-events: none
}

a.hover::before {
    content: "";
    transform-origin: 100% 50%;
    transform: scale3d(0, 1, 1);
    transition: transform .3s cubic-bezier(.7, 0, .2, 1)
}

a.hover:hover:before {
    transform-origin: 0% 50%;
    transform: scale3d(1, 1, 1);
    transition-timing-function: cubic-bezier(0.4, 1, 0.8, 1)
}

a.hover-2 {
    position: relative;
    z-index: 1;
    padding: 0 .2rem .05rem
}

a.hover-2::before {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #e0e9fa;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: -1
}

a.hover-2::before {
    content: "";
    transform-origin: 100% 50%;
    transform: scale3d(0, 1, 1);
    transition: transform .5s cubic-bezier(.7, 0, .2, 1)
}

a.hover-2:hover.link-body {
    color: inherit
}

a.hover-2:hover:before {
    transform-origin: 0% 50%;
    transform: scale3d(1, 1, 1);
    transition-timing-function: cubic-bezier(0.4, 1, 0.8, 1)
}

a.hover-3 {
    position: relative;
    padding: 0 .2rem .05rem;
    transition: color ease .3s;
    z-index: 1
}

a.hover-3:before {
    content: "";
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 3px;
    left: 0;
    bottom: -3px;
    background-color: #e0e9fa;
    transition: all .3s ease-in-out
}

a.hover-3:hover.link-body {
    color: inherit
}

a.hover-3:hover:before {
    height: calc(100% + 6px)
}

a.hover-3.more:before {
    bottom: -1px
}

a.hover-3.more:hover:before {
    height: calc(100% + 3px)
}

a.hover-2.link-blue:before {
    background: #3f78e0
}

a.hover-2.link-sky:before {
    background: #5eb9f0
}

a.hover-2.link-purple:before {
    background: #747ed1
}

a.hover-2.link-grape:before {
    background: #605dba
}

a.hover-2.link-violet:before {
    background: #a07cc5
}

a.hover-2.link-pink:before {
    background: #d16b86
}

a.hover-2.link-fuchsia:before {
    background: #e668b3
}

a.hover-2.link-red:before {
    background: #e2626b
}

a.hover-2.link-orange:before {
    background: #f78b77
}

a.hover-2.link-yellow:before {
    background: #fab758
}

a.hover-2.link-green:before {
    background: #45c4a0
}

a.hover-2.link-leaf:before {
    background: #7cb798
}

a.hover-2.link-aqua:before {
    background: #54a8c7
}

a.hover-2.link-navy:before {
    background: #343f52
}

a.hover-2.link-ash:before {
    background: #9499a3
}

a.hover-2.link-white:before {
    background: #fff
}

a.hover-2.link-light:before {
    background: #fefefe
}

a.hover-2.link-gray:before {
    background: #f6f7f9
}

a.hover-2.link-dark:before {
    background: #262b32
}

a.hover-2.link-primary:before {
    background: #3f78e0
}

a.hover-3.link-blue:before {
    background-color: #e0e9fa
}

a.hover-3.link-sky:before {
    background-color: #e5f4fd
}

a.hover-3.link-purple:before {
    background-color: #e9eaf8
}

a.hover-3.link-grape:before {
    background-color: #e6e5f4
}

a.hover-3.link-violet:before {
    background-color: #f0eaf6
}

a.hover-3.link-pink:before {
    background-color: #f8e7ec
}

a.hover-3.link-fuchsia:before {
    background-color: #fbe7f3
}

a.hover-3.link-red:before {
    background-color: #fae6e7
}

a.hover-3.link-orange:before {
    background-color: #feece9
}

a.hover-3.link-yellow:before {
    background-color: #fef3e4
}

a.hover-3.link-green:before {
    background-color: #e1f6f0
}

a.hover-3.link-leaf:before {
    background-color: #eaf3ef
}

a.hover-3.link-aqua:before {
    background-color: #e4f1f6
}

a.hover-3.link-navy:before {
    background-color: #dfe0e3
}

a.hover-3.link-ash:before {
    background-color: #eeeff0
}

a.hover-3.link-white:before {
    background-color: #fff
}

a.hover-3.link-light:before {
    background-color: #fff
}

a.hover-3.link-gray:before {
    background-color: #fefefe
}

a.hover-3.link-dark:before {
    background-color: #dcddde
}

a.hover-3.link-primary:before {
    background-color: #e0e9fa
}

.text-reset a {
    color: inherit !important
}

.link-dark:hover,
.text-reset a:hover,
a.text-reset:hover {
    color: #3f78e0 !important
}

[class*=text-] .text-reset:hover {
    color: inherit !important
}

.link-body {
    color: #60697b
}

.link-inverse {
    color: #cacaca
}

.link-inverse,
.text-inverse,
.text-inverse a:not(.btn) {
    color: #fff
}

.bg-dark.link-inverse,
.bg-dark.text-inverse,
.bg-dark.text-inverse .post-meta,
.bg-dark.text-inverse a:not(.btn):not([class*=link-]),
.bg-navy.link-inverse,
.bg-navy.text-inverse,
.bg-navy.text-inverse .post-meta,
.bg-navy.text-inverse a:not(.btn):not([class*=link-]),
[class*=offcanvas-].text-inverse a:not(.btn):not([class*=link-]) {
    color: #cacaca
}

.bg-dark.text-inverse a:not(.btn):not([class*=link-]):hover,
.bg-navy.text-inverse a:not(.btn):not([class*=link-]):hover,
.text-inverse a:not(.btn):hover,
[class*=offcanvas-].text-inverse a:not(.btn):not([class*=link-]):hover {
    color: #3f78e0
}

.text-inverse a:not(.btn):hover {
    border-color: #3f78e0
}

.more {
    font-weight: 700;
    letter-spacing: -.01rem;
    display: inline-block
}

.more:after {
    line-height: 1;
    font-family: Unicons;
    content: "\e94c";
    padding-left: .05rem;
    font-size: .9rem;
    font-weight: 400;
    vertical-align: -3px;
    margin-right: -.25rem;
    display: inline-block
}

hr.double {
    background: 0 0;
    border-style: double;
    border-color: rgba(164, 174, 198, .2);
    border-top: 0
}

_:default:not(:root:root),
hr.double {
    border-bottom-width: 3px
}

.divider-icon {
    border: 0;
    position: relative;
    margin: 4.5rem 0
}

.divider-icon i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.2rem;
    color: rgba(164, 174, 198, .2)
}

.divider-icon:after,
.divider-icon:before {
    position: absolute;
    top: 50%;
    content: "";
    border-top: 1px solid rgba(164, 174, 198, .2);
    width: calc(50% - 1.5rem)
}

.divider-icon:before {
    left: 0
}

.divider-icon:after {
    right: 0
}

.divider:after {
    content: "";
    width: 100%;
    height: 5px;
    background: currentColor;
    display: block;
    margin-top: -5px
}

[class*=divider-v-] {
    position: relative;
    width: auto;
    height: 100%;
    overflow: hidden
}

[class*=divider-v-]>svg {
    height: 100%;
    width: auto;
    transform: scale(1.2);
    position: absolute
}

[class*=divider-v-]:after {
    display: none
}

[class*=divider-v-].divider-v-start>svg {
    top: 0;
    left: 0
}

[class*=divider-v-].divider-v-end>svg {
    top: 0;
    right: 0
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: .5rem;
    font-weight: 700;
    color: #000;
    word-spacing: 0.1rem;
    letter-spacing: -.01rem
}

.text-uppercase.h1,
.text-uppercase.h2,
.text-uppercase.h3,
.text-uppercase.h4,
.text-uppercase.h5,
.text-uppercase.h6,
h1.text-uppercase,
h2.text-uppercase,
h3.text-uppercase,
h4.text-uppercase,
h5.text-uppercase,
h6.text-uppercase {
    letter-spacing: .02rem
}

.h1,
h1 {
    line-height: 1.3
}

.h2,
h2 {
    line-height: 1.35
}

.h3,
h3 {
    line-height: 1.4
}

.h4,
h4 {
    line-height: 1.45
}

.h5,
h5 {
    line-height: 1.5
}

.h6,
h6 {
    line-height: 1.55
}

.display-1 {
    line-height: 1.2
}

.display-2,
.display-3 {
    line-height: 1.25
}

.display-4,
.display-5 {
    line-height: 1.3
}

.display-6 {
    line-height: 1.35
}

.ls-xs {
    letter-spacing: -.035em !important
}

.ls-sm {
    letter-spacing: -.03em !important
}

.ls-md {
    letter-spacing: -.01rem !important
}

.ls-lg {
    letter-spacing: .02rem !important
}

.ls-xl {
    letter-spacing: .05rem !important
}

.ls-normal {
    letter-spacing: normal
}

.lead {
    line-height: 1.65
}

.lead.fs-lg {
    font-size: 1.05rem !important;
    line-height: 1.6
}

.text-line {
    position: relative;
    vertical-align: top;
    padding-left: 1.4rem
}

.text-line:not(.text-gradient) {
    display: inline-flex
}

.text-line:before {
    content: "";
    position: absolute;
    display: inline-block;
    top: 50%;
    transform: translateY(-60%);
    left: 0;
    width: .75rem;
    height: .05rem;
    background: #3f78e0
}

.text-line.text-blue:before {
    background-color: #3f78e0
}

.text-line.text-sky:before {
    background-color: #5eb9f0
}

.text-line.text-purple:before {
    background-color: #747ed1
}

.text-line.text-grape:before {
    background-color: #605dba
}

.text-line.text-violet:before {
    background-color: #a07cc5
}

.text-line.text-pink:before {
    background-color: #d16b86
}

.text-line.text-fuchsia:before {
    background-color: #e668b3
}

.text-line.text-red:before {
    background-color: #e2626b
}

.text-line.text-orange:before {
    background-color: #f78b77
}

.text-line.text-yellow:before {
    background-color: #fab758
}

.text-line.text-green:before {
    background-color: #45c4a0
}

.text-line.text-leaf:before {
    background-color: #7cb798
}

.text-line.text-aqua:before {
    background-color: #54a8c7
}

.text-line.text-navy:before {
    background-color: #343f52
}

.text-line.text-ash:before {
    background-color: #9499a3
}

.text-line.text-white:before {
    background-color: #fff
}

.text-line.text-light:before {
    background-color: #fefefe
}

.text-line.text-gray:before {
    background-color: #f6f7f9
}

.text-line.text-dark:before {
    background-color: #262b32
}

.text-line.text-primary:before {
    background-color: #3f78e0
}

.text-line.text-muted:before {
    background-color: #aab0bc
}

.underline {
    position: relative;
    z-index: 2;
    white-space: nowrap
}

.underline:after {
    content: "";
    display: block;
    background: rgba(63, 120, 224, .12);
    border-radius: 5rem;
    position: absolute;
    width: 102.5%;
    height: 30%;
    left: -1.5%;
    bottom: 9%;
    z-index: -1;
    margin-top: 0;
    transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .underline:after {
        transition: none
    }
}

.underline.blue:after {
    background: rgba(63, 120, 224, .12)
}

.underline.sky:after {
    background: rgba(94, 185, 240, .12)
}

.underline.purple:after {
    background: rgba(116, 126, 209, .12)
}

.underline.grape:after {
    background: rgba(96, 93, 186, .12)
}

.underline.violet:after {
    background: rgba(160, 124, 197, .12)
}

.underline.pink:after {
    background: rgba(209, 107, 134, .12)
}

.underline.fuchsia:after {
    background: rgba(230, 104, 179, .12)
}

.underline.red:after {
    background: rgba(226, 98, 107, .12)
}

.underline.orange:after {
    background: rgba(247, 139, 119, .12)
}

.underline.yellow:after {
    background: rgba(250, 183, 88, .12)
}

.underline.green:after {
    background: rgba(69, 196, 160, .12)
}

.underline.leaf:after {
    background: rgba(124, 183, 152, .12)
}

.underline.aqua:after {
    background: rgba(84, 168, 199, .12)
}

.underline.navy:after {
    background: rgba(52, 63, 82, .12)
}

.underline.ash:after {
    background: rgba(148, 153, 163, .12)
}

.underline.white:after {
    background: rgba(255, 255, 255, .12)
}

.underline.light:after {
    background: rgba(254, 254, 254, .12)
}

.underline.gray:after {
    background: rgba(246, 247, 249, .12)
}

.underline.dark:after {
    background: rgba(38, 43, 50, .12)
}

.underline.primary:after {
    background: rgba(63, 120, 224, .12)
}

.underline-2 {
    position: relative;
    z-index: 2;
    white-space: nowrap
}

.underline-2:after {
    content: "";
    display: block;
    background: #3f78e0;
    border-radius: 5rem;
    position: absolute;
    width: 102.5%;
    height: 12%;
    left: -1.5%;
    bottom: -10%;
    z-index: -1;
    margin-top: 0;
    transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .underline-2:after {
        transition: none
    }
}

.underline-2.blue:after {
    background: #3f78e0
}

.underline-2.sky:after {
    background: #5eb9f0
}

.underline-2.purple:after {
    background: #747ed1
}

.underline-2.grape:after {
    background: #605dba
}

.underline-2.violet:after {
    background: #a07cc5
}

.underline-2.pink:after {
    background: #d16b86
}

.underline-2.fuchsia:after {
    background: #e668b3
}

.underline-2.red:after {
    background: #e2626b
}

.underline-2.orange:after {
    background: #f78b77
}

.underline-2.yellow:after {
    background: #fab758
}

.underline-2.green:after {
    background: #45c4a0
}

.underline-2.leaf:after {
    background: #7cb798
}

.underline-2.aqua:after {
    background: #54a8c7
}

.underline-2.navy:after {
    background: #343f52
}

.underline-2.ash:after {
    background: #9499a3
}

.underline-2.white:after {
    background: #fff
}

.underline-2.light:after {
    background: #fefefe
}

.underline-2.gray:after {
    background: #f6f7f9
}

.underline-2.dark:after {
    background: #262b32
}

.underline-2.primary:after {
    background: #3f78e0
}

.underline-gradient-1:after {
    background: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%)
}

.underline-gradient-2:after {
    background: linear-gradient(40deg, #f5b161 .4%, #ec366e 100.2%)
}

.underline-gradient-3:after {
    background: linear-gradient(45deg, #fbda61 0, #ff5acd 100%)
}

.underline-gradient-4:after {
    background: linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f)
}

.underline-gradient-5:after {
    background: linear-gradient(43deg, #4158d0 0, #c850c0 46%, #ffcc70 100%)
}

.underline-gradient-6:after {
    background: linear-gradient(45deg, #08aeea 0, #2af598 100%)
}

.underline-gradient-7:after {
    background: linear-gradient(100deg, #0093e9 0, #80d0c7 95%)
}

.underline-gradient-8:after {
    background: linear-gradient(45deg, #ffdee9, #b5fffc)
}

.underline-3 {
    position: relative;
    z-index: 1
}

.underline-3:after {
    content: "";
    position: absolute;
    z-index: -1;
    display: block;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: bottom;
    left: 50%;
    bottom: -.1em;
    width: 110%;
    height: .3em;
    transform: translateX(-50%)
}

.underline-3.style-1:after,
.underline-3.style-1:before {
    content: "";
    z-index: -1;
    border: 3px solid #3f78e0;
    position: absolute;
    left: 50%;
    top: 55%;
    opacity: 1;
    border-radius: 80%
}

.underline-3.style-1:before {
    transform: translate(-50%, -50%) rotate(-2deg);
    border-top-width: 0;
    width: 110%;
    height: 130%
}

.underline-3.style-1:after {
    transform: translate(-50%, -50%) rotate(-5deg);
    border-left-width: 0;
    border-bottom-width: 0;
    width: 110%;
    height: 140%
}

.underline-3.style-1.blue:after,
.underline-3.style-1.blue:before {
    border-color: #3f78e0
}

.underline-3.style-1.sky:after,
.underline-3.style-1.sky:before {
    border-color: #5eb9f0
}

.underline-3.style-1.purple:after,
.underline-3.style-1.purple:before {
    border-color: #747ed1
}

.underline-3.style-1.grape:after,
.underline-3.style-1.grape:before {
    border-color: #605dba
}

.underline-3.style-1.violet:after,
.underline-3.style-1.violet:before {
    border-color: #a07cc5
}

.underline-3.style-1.pink:after,
.underline-3.style-1.pink:before {
    border-color: #d16b86
}

.underline-3.style-1.fuchsia:after,
.underline-3.style-1.fuchsia:before {
    border-color: #e668b3
}

.underline-3.style-1.red:after,
.underline-3.style-1.red:before {
    border-color: #e2626b
}

.underline-3.style-1.orange:after,
.underline-3.style-1.orange:before {
    border-color: #f78b77
}

.underline-3.style-1.yellow:after,
.underline-3.style-1.yellow:before {
    border-color: #fab758
}

.underline-3.style-1.green:after,
.underline-3.style-1.green:before {
    border-color: #45c4a0
}

.underline-3.style-1.leaf:after,
.underline-3.style-1.leaf:before {
    border-color: #7cb798
}

.underline-3.style-1.aqua:after,
.underline-3.style-1.aqua:before {
    border-color: #54a8c7
}

.underline-3.style-1.navy:after,
.underline-3.style-1.navy:before {
    border-color: #343f52
}

.underline-3.style-1.ash:after,
.underline-3.style-1.ash:before {
    border-color: #9499a3
}

.underline-3.style-1.white:after,
.underline-3.style-1.white:before {
    border-color: #fff
}

.underline-3.style-1.light:after,
.underline-3.style-1.light:before {
    border-color: #fefefe
}

.underline-3.style-1.gray:after,
.underline-3.style-1.gray:before {
    border-color: #f6f7f9
}

.underline-3.style-1.dark:after,
.underline-3.style-1.dark:before {
    border-color: #262b32
}

.underline-3.style-1.primary:after,
.underline-3.style-1.primary:before {
    border-color: #3f78e0
}

.underline-3.style-2:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.blue:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.sky:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%235eb9f0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.purple:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23747ed1' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.grape:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23605dba' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.violet:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23a07cc5' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.pink:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23d16b86' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.fuchsia:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23e668b3' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.red:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23e2626b' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.orange:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23f78b77' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.yellow:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fab758' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.green:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%2345c4a0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.leaf:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%237cb798' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.aqua:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%2354a8c7' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.navy:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23343f52' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.ash:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%239499a3' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.white:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fff' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.light:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fefefe' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.gray:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23f6f7f9' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.dark:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23262b32' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-2.primary:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E")
}

.underline-3.style-3:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.blue:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.sky:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%235eb9f0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.purple:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23747ed1' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.grape:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23605dba' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.violet:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23a07cc5' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.pink:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23d16b86' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.fuchsia:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23e668b3' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.red:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23e2626b' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.orange:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23f78b77' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.yellow:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fab758' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.green:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%2345c4a0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.leaf:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%237cb798' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.aqua:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%2354a8c7' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.navy:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23343f52' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.ash:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%239499a3' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.white:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fff' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.light:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fefefe' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.gray:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23f6f7f9' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.dark:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23262b32' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.underline-3.style-3.primary:after {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E")
}

.mark,
mark {
    color: inherit;
    border-radius: .4rem
}

.rounded img {
    border-radius: .4rem
}

@media (min-width:992px) {

    .image-wrapper.rounded-lg-start,
    .map.rounded-lg-start iframe {
        border-bottom-left-radius: .4rem !important;
        border-top-left-radius: .4rem !important;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important
    }

    .image-wrapper.rounded-4-lg-start {
        border-bottom-left-radius: .8rem !important;
        border-top-left-radius: .8rem !important;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important
    }
}

@media (max-width:991.98px) {

    .image-wrapper.rounded-top,
    .map.rounded-top iframe {
        border-top-left-radius: .4rem !important;
        border-top-right-radius: .4rem !important
    }

    .image-wrapper.rounded-4-top {
        border-top-left-radius: .8rem !important;
        border-top-right-radius: .8rem !important
    }
}

.page-frame footer,
.page-frame section {
    margin-top: 1.25rem
}

@media (min-width:768px) {
    .page-frame {
        padding: 1.25rem
    }

    .page-frame .video-wrapper,
    .page-frame .video-wrapper video,
    .page-frame .video-wrapper:after,
    .page-frame footer,
    .page-frame section {
        border-radius: 1rem
    }

    .page-frame footer,
    .page-frame section {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        border-radius: 1rem
    }
}

@media (min-width:768px) {
    .section-frame {
        margin-left: 1.5rem;
        margin-right: 1.5rem;
        border-radius: 1rem
    }

    .section-frame.br-fix {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }
}

figure {
    margin: 0;
    padding: 0
}

figure img {
    width: 100%;
    max-width: 100%;
    height: auto !important
}

.img-mask img {
    -webkit-mask-position: center center;
    mask-position: center center;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    height: auto;
    width: 100%;
    max-width: 100%;
    -webkit-mask-size: auto auto
}

.img-mask.mask-1 img {
    -webkit-mask-image: url(../../assets/img/svg/blob.svg);
    mask-image: url(../../assets/img/svg/blob.svg)
}

.img-mask.mask-2 img {
    -webkit-mask-image: url(../../assets/img/svg/hex.svg);
    mask-image: url(../../assets/img/svg/hex.svg)
}

.img-mask.mask-3 img {
    -webkit-mask-image: url(../../assets/img/svg/blob2.svg);
    mask-image: url(../../assets/img/svg/blob2.svg)
}

.table:not(.table-borderless) tbody {
    border-top-width: 1px !important
}

.map iframe {
    display: block
}

.map.map-full {
    height: 100%;
    min-height: 15rem
}

[class*=mb-n],
[class*=mt-n] {
    position: relative;
    z-index: 3
}

.mb-n50p {
    transform: translateY(50%)
}

.mt-n50p {
    transform: translateY(-50%)
}

@media screen and (min-width:576px) {
    .mb-sm-n50p {
        transform: translateY(50%)
    }

    .mt-sm-n50p {
        transform: translateY(-50%)
    }
}

@media screen and (min-width:768px) {
    .mb-md-n50p {
        transform: translateY(50%)
    }

    .mt-md-n50p {
        transform: translateY(-50%)
    }
}

@media screen and (min-width:992px) {
    .mb-lg-n50p {
        transform: translateY(50%)
    }

    .mt-lg-n50p {
        transform: translateY(-50%)
    }
}

@media screen and (min-width:1200px) {
    .mb-xl-n50p {
        transform: translateY(50%)
    }

    .mt-xl-n50p {
        transform: translateY(-50%)
    }
}

@media screen and (min-width:1400px) {
    .mb-xxl-n50p {
        transform: translateY(50%)
    }

    .mt-xxl-n50p {
        transform: translateY(-50%)
    }
}

@media (max-width:1199.98px) {
    .border-radius-lg-top {
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important
    }
}

@media (min-width:992px) {
    .position-lg-absolute {
        position: absolute !important
    }
}

.mega-menu-scroll,
.offcanvas,
.scrollbar-hidden {
    -ms-overflow-style: none;
    scrollbar-width: none
}

.mega-menu-scroll::-webkit-scrollbar,
.offcanvas::-webkit-scrollbar,
.scrollbar-hidden::-webkit-scrollbar {
    display: none
}

@media (min-width:992px) {
    .cc-2 {
        -moz-column-count: 2;
        column-count: 2
    }

    .cc-2 li {
        display: inline-block;
        width: 100%
    }

    .cc-3 {
        -moz-column-count: 3;
        column-count: 3
    }

    .cc-3 li {
        display: inline-block;
        width: 100%
    }
}

.border-soft-blue {
    border-color: #c5d7f6 !important
}

.border-soft-sky {
    border-color: #cfeafb !important
}

.border-soft-purple {
    border-color: #d5d8f1 !important
}

.border-soft-grape {
    border-color: #cfceea !important
}

.border-soft-violet {
    border-color: #e3d8ee !important
}

.border-soft-pink {
    border-color: #f1d3db !important
}

.border-soft-fuchsia {
    border-color: #f8d2e8 !important
}

.border-soft-red {
    border-color: #f6d0d3 !important
}

.border-soft-orange {
    border-color: #fddcd6 !important
}

.border-soft-yellow {
    border-color: #fee9cd !important
}

.border-soft-green {
    border-color: #c7ede3 !important
}

.border-soft-leaf {
    border-color: #d8e9e0 !important
}

.border-soft-aqua {
    border-color: #cce5ee !important
}

.border-soft-navy {
    border-color: #c2c5cb !important
}

.border-soft-ash {
    border-color: #dfe0e3 !important
}

.border-soft-white {
    border-color: #fff !important
}

.border-soft-light {
    border-color: #fff !important
}

.border-soft-dark {
    border-color: #bebfc2 !important
}

.border-soft-primary {
    border-color: #c5d7f6 !important
}

.border-soft-secondary {
    border-color: #e6e7eb !important
}

.border-soft-success {
    border-color: #c7ede3 !important
}

.border-soft-info {
    border-color: #cce5ee !important
}

.border-soft-warning {
    border-color: #fee9cd !important
}

.border-soft-danger {
    border-color: #f6d0d3 !important
}

.zindex-n {
    z-index: -1
}

.zindex-1 {
    z-index: 1
}

.bg-soft-blue {
    background-color: #f1f5fd !important
}

.text-soft-blue {
    color: #f1f5fd !important
}

.bg-soft-sky {
    background-color: #f3fafe !important
}

.text-soft-sky {
    color: #f3fafe !important
}

.bg-soft-purple {
    background-color: #f5f5fc !important
}

.text-soft-purple {
    color: #f5f5fc !important
}

.bg-soft-grape {
    background-color: #f3f3fa !important
}

.text-soft-grape {
    color: #f3f3fa !important
}

.bg-soft-violet {
    background-color: #f8f5fb !important
}

.text-soft-violet {
    color: #f8f5fb !important
}

.bg-soft-pink {
    background-color: #fcf4f6 !important
}

.text-soft-pink {
    color: #fcf4f6 !important
}

.bg-soft-fuchsia {
    background-color: #fdf4f9 !important
}

.text-soft-fuchsia {
    color: #fdf4f9 !important
}

.bg-soft-red {
    background-color: #fdf3f4 !important
}

.text-soft-red {
    color: #fdf3f4 !important
}

.bg-soft-orange {
    background-color: #fef6f5 !important
}

.text-soft-orange {
    color: #fef6f5 !important
}

.bg-soft-green {
    background-color: #f1fbf8 !important
}

.text-soft-green {
    color: #f1fbf8 !important
}

.bg-soft-leaf {
    background-color: #f5faf7 !important
}

.text-soft-leaf {
    color: #f5faf7 !important
}

.bg-soft-aqua {
    background-color: #f2f8fb !important
}

.text-soft-aqua {
    color: #f2f8fb !important
}

.bg-soft-navy {
    background-color: #f0f1f2 !important
}

.text-soft-navy {
    color: #f0f1f2 !important
}

.bg-soft-ash {
    background-color: #f7f7f8 !important
}

.text-soft-ash {
    color: #f7f7f8 !important
}

.bg-soft-gray {
    background-color: #fefeff !important
}

.text-soft-gray {
    color: #fefeff !important
}

.bg-soft-dark {
    background-color: #efeff0 !important
}

.text-soft-dark {
    color: #efeff0 !important
}

.bg-soft-primary {
    background-color: #f1f5fd !important
}

.text-soft-primary {
    color: #f1f5fd !important
}

.bg-soft-gray {
    background: rgba(164, 174, 198, .2)
}

.bg-pale-blue {
    background-color: #e0e9fa !important
}

.text-pale-blue {
    color: #e0e9fa !important
}

.bg-pale-sky {
    background-color: #e5f4fd !important
}

.text-pale-sky {
    color: #e5f4fd !important
}

.bg-pale-purple {
    background-color: #e9eaf8 !important
}

.text-pale-purple {
    color: #e9eaf8 !important
}

.bg-pale-grape {
    background-color: #e6e5f4 !important
}

.text-pale-grape {
    color: #e6e5f4 !important
}

.bg-pale-violet {
    background-color: #f0eaf6 !important
}

.text-pale-violet {
    color: #f0eaf6 !important
}

.bg-pale-pink {
    background-color: #f8e7ec !important
}

.text-pale-pink {
    color: #f8e7ec !important
}

.bg-pale-fuchsia {
    background-color: #fbe7f3 !important
}

.text-pale-fuchsia {
    color: #fbe7f3 !important
}

.bg-pale-red {
    background-color: #fae6e7 !important
}

.text-pale-red {
    color: #fae6e7 !important
}

.bg-pale-orange {
    background-color: #feece9 !important
}

.text-pale-orange {
    color: #feece9 !important
}

.bg-pale-yellow {
    background-color: #fef3e4 !important
}

.text-pale-yellow {
    color: #fef3e4 !important
}

.bg-pale-green {
    background-color: #e1f6f0 !important
}

.text-pale-green {
    color: #e1f6f0 !important
}

.bg-pale-leaf {
    background-color: #eaf3ef !important
}

.text-pale-leaf {
    color: #eaf3ef !important
}

.bg-pale-aqua {
    background-color: #e4f1f6 !important
}

.text-pale-aqua {
    color: #e4f1f6 !important
}

.bg-pale-navy {
    background-color: #dfe0e3 !important
}

.text-pale-navy {
    color: #dfe0e3 !important
}

.bg-pale-ash {
    background-color: #eeeff0 !important
}

.text-pale-ash {
    color: #eeeff0 !important
}

.bg-pale-dark {
    background-color: #dcddde !important
}

.text-pale-dark {
    color: #dcddde !important
}

.bg-pale-primary {
    background-color: #e0e9fa !important
}

.text-pale-primary {
    color: #e0e9fa !important
}

.bg-gradient-blue {
    background: linear-gradient(180deg, #f1f5fd, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-blue {
    background: linear-gradient(0deg, #f1f5fd, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-sky {
    background: linear-gradient(180deg, #f3fafe, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-sky {
    background: linear-gradient(0deg, #f3fafe, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-purple {
    background: linear-gradient(180deg, #f5f5fc, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-purple {
    background: linear-gradient(0deg, #f5f5fc, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-grape {
    background: linear-gradient(180deg, #f3f3fa, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-grape {
    background: linear-gradient(0deg, #f3f3fa, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-violet {
    background: linear-gradient(180deg, #f8f5fb, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-violet {
    background: linear-gradient(0deg, #f8f5fb, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-pink {
    background: linear-gradient(180deg, #fcf4f6, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-pink {
    background: linear-gradient(0deg, #fcf4f6, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-fuchsia {
    background: linear-gradient(180deg, #fdf4f9, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-fuchsia {
    background: linear-gradient(0deg, #fdf4f9, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-red {
    background: linear-gradient(180deg, #fdf3f4, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-red {
    background: linear-gradient(0deg, #fdf3f4, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-orange {
    background: linear-gradient(180deg, #fef6f5, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-orange {
    background: linear-gradient(0deg, #fef6f5, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-green {
    background: linear-gradient(180deg, #f1fbf8, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-green {
    background: linear-gradient(0deg, #f1fbf8, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-leaf {
    background: linear-gradient(180deg, #f5faf7, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-leaf {
    background: linear-gradient(0deg, #f5faf7, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-aqua {
    background: linear-gradient(180deg, #f2f8fb, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-aqua {
    background: linear-gradient(0deg, #f2f8fb, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-navy {
    background: linear-gradient(180deg, #f0f1f2, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-navy {
    background: linear-gradient(0deg, #f0f1f2, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-ash {
    background: linear-gradient(180deg, #f7f7f8, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-ash {
    background: linear-gradient(0deg, #f7f7f8, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-gray {
    background: linear-gradient(180deg, #fefeff, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-gray {
    background: linear-gradient(0deg, #fefeff, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-dark {
    background: linear-gradient(180deg, #efeff0, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-dark {
    background: linear-gradient(0deg, #efeff0, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-primary {
    background: linear-gradient(180deg, #f1f5fd, rgba(255, 255, 255, 0) 100%)
}

.bg-gradient-reverse-primary {
    background: linear-gradient(0deg, #f1f5fd, rgba(255, 255, 255, 0) 100%)
}

.bg-soft-yellow {
    background-color: #fff8ef !important
}

.text-soft-yellow {
    color: #fff8ef !important
}

.bg-gradient-yellow {
    background: linear-gradient(180deg, #fff8ef, rgba(255, 255, 255, 0) 100%) !important
}

.bg-gradient-reverse-yellow {
    background: linear-gradient(0deg, #fff8ef, rgba(255, 255, 255, 0) 100%) !important
}

.bg-height {
    height: 30rem
}

@media (max-width:991.98px) {
    .bg-height {
        height: 20rem
    }
}

@media (max-width:767px) {
    .bg-height {
        height: 15rem
    }
}

.bg-white-700 {
    background: rgba(255, 255, 255, .7) !important
}

.bg-white-900 {
    background: rgba(255, 255, 255, .9) !important
}

.link-blue {
    color: #3f78e0
}

.link-blue:focus,
.link-blue:hover {
    color: #3f78e0
}

.link-sky {
    color: #5eb9f0
}

.link-sky:focus,
.link-sky:hover {
    color: #5eb9f0
}

.link-purple {
    color: #747ed1
}

.link-purple:focus,
.link-purple:hover {
    color: #747ed1
}

.link-grape {
    color: #605dba
}

.link-grape:focus,
.link-grape:hover {
    color: #605dba
}

.link-violet {
    color: #a07cc5
}

.link-violet:focus,
.link-violet:hover {
    color: #a07cc5
}

.link-pink {
    color: #d16b86
}

.link-pink:focus,
.link-pink:hover {
    color: #d16b86
}

.link-fuchsia {
    color: #e668b3
}

.link-fuchsia:focus,
.link-fuchsia:hover {
    color: #e668b3
}

.link-red {
    color: #e2626b
}

.link-red:focus,
.link-red:hover {
    color: #e2626b
}

.link-orange {
    color: #f78b77
}

.link-orange:focus,
.link-orange:hover {
    color: #f78b77
}

.link-yellow {
    color: #fab758
}

.link-yellow:focus,
.link-yellow:hover {
    color: #fab758
}

.link-green {
    color: #45c4a0
}

.link-green:focus,
.link-green:hover {
    color: #45c4a0
}

.link-leaf {
    color: #7cb798
}

.link-leaf:focus,
.link-leaf:hover {
    color: #7cb798
}

.link-aqua {
    color: #54a8c7
}

.link-aqua:focus,
.link-aqua:hover {
    color: #54a8c7
}

.link-navy {
    color: #343f52
}

.link-navy:focus,
.link-navy:hover {
    color: #343f52
}

.link-ash {
    color: #9499a3
}

.link-ash:focus,
.link-ash:hover {
    color: #9499a3
}

.link-white {
    color: #fff
}

.link-white:focus,
.link-white:hover {
    color: #fff
}

.link-light {
    color: #fefefe
}

.link-light:focus,
.link-light:hover {
    color: #fefefe
}

.link-gray {
    color: #f6f7f9
}

.link-gray:focus,
.link-gray:hover {
    color: #f6f7f9
}

.link-primary {
    color: #3f78e0
}

.link-primary:focus,
.link-primary:hover {
    color: #3f78e0
}

.link-secondary {
    color: #aab0bc
}

.link-secondary:focus,
.link-secondary:hover {
    color: #aab0bc
}

.link-success {
    color: #45c4a0
}

.link-success:focus,
.link-success:hover {
    color: #45c4a0
}

.link-info {
    color: #54a8c7
}

.link-info:focus,
.link-info:hover {
    color: #54a8c7
}

.link-warning {
    color: #fab758
}

.link-warning:focus,
.link-warning:hover {
    color: #fab758
}

.link-danger {
    color: #e2626b
}

.link-danger:focus,
.link-danger:hover {
    color: #e2626b
}

.link-dark {
    color: #343f52
}

.uil-wallet:before {
    content: "\ed8e"
}

.uil-arrow-right:before {
    content: "\e94c"
}

.uil-building:before {
    content: "\e9b3"
}

.uil-linkedin-alt:before {
    content: "\ebd0"
}

.uil-instagram-alt:before {
    content: "\eb9a"
}

.uil-info:before {
    content: "\eb9b"
}

.uil-instagram:before {
    content: "\eb9c"
}

.uil-twitter-alt:before {
    content: "\ed58"
}

.uil-twitter:before {
    content: "\ed59"
}

.uil-linkedin:before {
    content: "\ebd1"
}

.uil-facebook-f:before {
    content: "\eae2"
}

.uil-presentation-check:before {
    content: "\ec66"
}

.uil-user-check:before {
    content: "\ed65"
}

.uil-trophy:before {
    content: "\ed4f"
}

.uil-book-open:before {
    content: "\e990"
}

.uil-globe:before {
    content: "\eb48"
}

.uil-users-alt:before {
    content: "\ed70"
}

.dropcap {
    display: block;
    float: left;
    font-size: calc(1.375rem + 1.5vw);
    line-height: 1;
    font-weight: 500;
    padding: 0;
    margin: .2rem .6rem 0 0
}

@media (min-width:1200px) {
    .dropcap {
        font-size: 2.5rem
    }
}

.dropcap.rounded-circle {
    font-size: calc(1.265rem + .18vw);
    height: 2.3rem;
    width: 2.3rem;
    margin: .25rem .5rem 0 0;
    padding-bottom: .15rem;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center
}

@media (min-width:1200px) {
    .dropcap.rounded-circle {
        font-size: 1.4rem
    }
}

.list-unstyled li a.active {
    color: #3f78e0 !important
}

.filter:not(.basic-filter) p {
    margin: 0 1rem 0 0;
    display: inline
}

.filter:not(.basic-filter) ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline
}

.filter:not(.basic-filter) ul li {
    display: inline
}

.filter:not(.basic-filter) ul li+li:before {
    content: "";
    display: inline-block;
    width: .2rem;
    height: .2rem;
    border-radius: 100%;
    margin: 0 .8rem 0 .5rem;
    vertical-align: .15rem;
    background: rgba(30, 34, 40, .2)
}

.filter:not(.basic-filter) ul li a {
    cursor: pointer
}

.filter:not(.basic-filter) ul li a.active,
.filter:not(.basic-filter) ul li a:hover {
    color: #3f78e0
}

.filter:not(.basic-filter).dark-filter ul li+li:before {
    background: rgba(255, 255, 255, .2)
}

.filter:not(.basic-filter).dark-filter ul li a.active,
.filter:not(.basic-filter).dark-filter ul li a:hover {
    color: #fff
}

.isotope-filter {
    position: relative;
    z-index: 5
}

.filter.basic-filter p {
    margin: 0 1rem 0 0;
    display: inline;
    color: #343f52;
    font-weight: 700
}

.filter.basic-filter ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline
}

.filter.basic-filter ul li {
    display: inline;
    margin-right: 1rem
}

.filter.basic-filter ul li a {
    cursor: pointer;
    color: #60697b
}

.filter.basic-filter ul li a.active,
.filter.basic-filter ul li a:hover {
    color: #3f78e0
}

.filter.basic-filter.dark-filter ul li a.active,
.filter.basic-filter.dark-filter ul li a:hover {
    color: #fff
}

.image-list {
    padding: 0;
    margin: 0
}

.image-list .meta,
.image-list p {
    margin: 0
}

.image-list:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden
}

.image-list>li {
    clear: both;
    display: block;
    overflow: hidden
}

.image-list>li+li {
    margin-top: 1rem
}

.image-list figure {
    float: left;
    width: 3.5rem;
    height: 3.5rem
}

.image-list .post-content {
    margin-left: 4.25rem;
    margin-bottom: 0
}

.tag-list li {
    display: inline-block;
    margin-right: .2rem;
    margin-bottom: .1rem
}

.tag-list li a:before {
    font-style: normal;
    content: "#";
    font-weight: 400;
    padding-right: .2rem
}

.blog.single .post .tag-list li,
.widget .tag-list li {
    margin-top: 0;
    margin-bottom: .45rem
}

.widget .tag-list li a {
    display: flex;
    align-items: center
}

.filter:not(.basic-filter),
.filter:not(.basic-filter) ul li a,
.meta,
.post-category {
    text-transform: uppercase;
    letter-spacing: .02rem;
    font-size: .7rem;
    font-weight: 700;
    color: #aab0bc
}

.meta {
    font-size: .65rem
}

.post-category {
    margin-bottom: .4rem
}

.post-meta {
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: .7rem;
    color: #aab0bc
}

.post-meta li {
    display: inline-block
}

.post-meta li a {
    color: #aab0bc
}

.post-meta li a:hover {
    color: #3f78e0;
    border-color: #3f78e0
}

.post-meta li:before {
    content: "";
    display: inline-block;
    width: .2rem;
    height: .2rem;
    border-radius: 100%;
    margin: 0 .6rem 0;
    vertical-align: .15rem;
    background: #aab0bc;
    opacity: .5
}

.post-meta li i {
    padding-right: .2rem;
    vertical-align: -.05rem
}

.post-meta.text-white li:before {
    background: #fff
}

.post-header .post-meta {
    font-size: .8rem
}

.post-header .post-meta li:before {
    margin: 0 .6rem 0 .4rem
}

.post-meta li:first-child:before,
article .post-meta li.ms-auto:before {
    display: none
}

@media (max-width:767px) {

    .card-footer .post-meta li.post-author,
    .card-footer .post-meta li.post-comments span {
        display: none
    }

    .post-header .post-meta li.post-author,
    .post-header .post-meta li.post-comments span,
    .post-header .post-meta li.post-likes span {
        display: none
    }
}

.glyphs {
    padding: 0
}

.glyphs li {
    display: block
}

.glyphs li svg {
    margin-bottom: .3rem;
    display: inline-block
}

.glyphs li i:before {
    margin: 0;
    padding: 0;
    color: #343f52;
    font-size: calc(1.285rem + .42vw)
}

@media (min-width:1200px) {
    .glyphs li i:before {
        font-size: 1.6rem
    }
}

.glyphs li span {
    margin: 0;
    display: block;
    color: #aab0bc;
    font-size: .7rem
}

.glyphs li .card-body {
    padding: .5rem .2rem 1rem
}

.glyphs li .card-footer {
    padding: .5rem .2rem;
    cursor: pointer;
    font-size: .7rem
}

.glyphs-svg li .card-body {
    padding-top: 1rem
}

.code-wrapper {
    margin-bottom: 0;
    position: relative
}

.code-wrapper .btn-clipboard {
    font-family: Manrope, sans-serif;
    position: absolute;
    top: .5rem;
    right: .5rem;
    cursor: pointer;
    transform: none;
    font-size: .6rem;
    padding: .1rem .45rem .1rem;
    z-index: 3
}

.code-wrapper pre {
    margin-bottom: 0
}

pre[class*=language-] {
    position: relative;
    padding-top: 2rem
}

pre[class*=language-]:focus {
    outline: 0
}

:not(pre)>code[class*=language-],
pre,
pre[class*=language-] {
    margin: 0;
    background: 0 0;
    padding: 2rem;
    font-size: .7rem
}

.code,
.doc.mark,
.external,
.file,
.folder,
.internal,
.kbd,
.terminal,
mark.doc {
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    position: relative;
    display: inline-flex;
    align-items: center;
    margin: .275rem .1rem;
    vertical-align: 2px;
    padding: .05rem .4rem .05rem 1.4rem;
    font-size: .65rem;
    border-radius: .2rem;
    background: rgba(164, 174, 198, .15);
    box-shadow: none;
    border: 0;
    -webkit-font-smoothing: auto;
    -moz-osx-font-smoothing: auto
}

.doc.mark,
mark.doc {
    padding: .05rem .4rem .2rem;
    padding-bottom: .05rem
}

.code:before,
.external:after,
.file:before,
.folder:before,
.internal:after,
.kbd:before,
.terminal:before {
    position: absolute;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1.6rem;
    padding-top: .05rem;
    margin-right: .4rem;
    text-align: center;
    color: inherit;
    font-family: Unicons;
    font-size: .7rem;
    border-radius: .2rem;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.internal {
    padding-right: 1.4rem
}

.internal:after {
    content: "\e94c";
    font-size: .8rem
}

.code:before {
    font-size: .85rem;
    content: "\e952"
}

.terminal:before {
    font-family: Custom;
    content: "\e905";
    font-size: .8rem
}

.folder:before {
    content: "\eb34"
}

.file:before {
    content: "\eaed"
}

.kbd:before {
    content: "\eba9";
    font-size: .8rem
}

.fs-sm {
    font-size: .7rem !important
}

.fs-lg {
    font-size: 1rem !important
}

.fs-1 {
    font-size: .05rem !important
}

.fs-2 {
    font-size: .1rem !important
}

.fs-3 {
    font-size: .15rem !important
}

.fs-4 {
    font-size: .2rem !important
}

.fs-5 {
    font-size: .25rem !important
}

.fs-6 {
    font-size: .3rem !important
}

.fs-7 {
    font-size: .35rem !important
}

.fs-8 {
    font-size: .4rem !important
}

.fs-9 {
    font-size: .45rem !important
}

.fs-10 {
    font-size: .5rem !important
}

.fs-11 {
    font-size: .55rem !important
}

.fs-12 {
    font-size: .6rem !important
}

.fs-13 {
    font-size: .65rem !important
}

.fs-14 {
    font-size: .7rem !important
}

.fs-15 {
    font-size: .75rem !important
}

.fs-16 {
    font-size: .8rem !important
}

.fs-17 {
    font-size: .85rem !important
}

.fs-18 {
    font-size: .9rem !important
}

.fs-19 {
    font-size: .95rem !important
}

.fs-20 {
    font-size: 1rem !important
}

.fs-21 {
    font-size: 1.05rem !important
}

.fs-22 {
    font-size: 1.1rem !important
}

.fs-23 {
    font-size: 1.15rem !important
}

.fs-24 {
    font-size: 1.2rem !important
}

.fs-25 {
    font-size: 1.25rem !important
}

.fs-26 {
    font-size: calc(1.255rem + .06vw) !important
}

@media (min-width:1200px) {
    .fs-26 {
        font-size: 1.3rem !important
    }
}

.fs-27 {
    font-size: calc(1.26rem + .12vw) !important
}

@media (min-width:1200px) {
    .fs-27 {
        font-size: 1.35rem !important
    }
}

.fs-28 {
    font-size: calc(1.265rem + .18vw) !important
}

@media (min-width:1200px) {
    .fs-28 {
        font-size: 1.4rem !important
    }
}

.fs-29 {
    font-size: calc(1.27rem + .24vw) !important
}

@media (min-width:1200px) {
    .fs-29 {
        font-size: 1.45rem !important
    }
}

.fs-30 {
    font-size: calc(1.275rem + .3vw) !important
}

@media (min-width:1200px) {
    .fs-30 {
        font-size: 1.5rem !important
    }
}

.fs-31 {
    font-size: calc(1.28rem + .36vw) !important
}

@media (min-width:1200px) {
    .fs-31 {
        font-size: 1.55rem !important
    }
}

.fs-32 {
    font-size: calc(1.285rem + .42vw) !important
}

@media (min-width:1200px) {
    .fs-32 {
        font-size: 1.6rem !important
    }
}

.fs-33 {
    font-size: calc(1.29rem + .48vw) !important
}

@media (min-width:1200px) {
    .fs-33 {
        font-size: 1.65rem !important
    }
}

.fs-34 {
    font-size: calc(1.295rem + .54vw) !important
}

@media (min-width:1200px) {
    .fs-34 {
        font-size: 1.7rem !important
    }
}

.fs-35 {
    font-size: calc(1.3rem + .6vw) !important
}

@media (min-width:1200px) {
    .fs-35 {
        font-size: 1.75rem !important
    }
}

.fs-36 {
    font-size: calc(1.305rem + .66vw) !important
}

@media (min-width:1200px) {
    .fs-36 {
        font-size: 1.8rem !important
    }
}

.fs-37 {
    font-size: calc(1.31rem + .72vw) !important
}

@media (min-width:1200px) {
    .fs-37 {
        font-size: 1.85rem !important
    }
}

.fs-38 {
    font-size: calc(1.315rem + .78vw) !important
}

@media (min-width:1200px) {
    .fs-38 {
        font-size: 1.9rem !important
    }
}

.fs-39 {
    font-size: calc(1.32rem + .84vw) !important
}

@media (min-width:1200px) {
    .fs-39 {
        font-size: 1.95rem !important
    }
}

.fs-40 {
    font-size: calc(1.325rem + .9vw) !important
}

@media (min-width:1200px) {
    .fs-40 {
        font-size: 2rem !important
    }
}

.fs-41 {
    font-size: calc(1.33rem + .96vw) !important
}

@media (min-width:1200px) {
    .fs-41 {
        font-size: 2.05rem !important
    }
}

.fs-42 {
    font-size: calc(1.335rem + 1.02vw) !important
}

@media (min-width:1200px) {
    .fs-42 {
        font-size: 2.1rem !important
    }
}

.fs-43 {
    font-size: calc(1.34rem + 1.08vw) !important
}

@media (min-width:1200px) {
    .fs-43 {
        font-size: 2.15rem !important
    }
}

.fs-44 {
    font-size: calc(1.345rem + 1.14vw) !important
}

@media (min-width:1200px) {
    .fs-44 {
        font-size: 2.2rem !important
    }
}

.fs-45 {
    font-size: calc(1.35rem + 1.2vw) !important
}

@media (min-width:1200px) {
    .fs-45 {
        font-size: 2.25rem !important
    }
}

.fs-46 {
    font-size: calc(1.355rem + 1.26vw) !important
}

@media (min-width:1200px) {
    .fs-46 {
        font-size: 2.3rem !important
    }
}

.fs-47 {
    font-size: calc(1.36rem + 1.32vw) !important
}

@media (min-width:1200px) {
    .fs-47 {
        font-size: 2.35rem !important
    }
}

.fs-48 {
    font-size: calc(1.365rem + 1.38vw) !important
}

@media (min-width:1200px) {
    .fs-48 {
        font-size: 2.4rem !important
    }
}

.fs-49 {
    font-size: calc(1.37rem + 1.44vw) !important
}

@media (min-width:1200px) {
    .fs-49 {
        font-size: 2.45rem !important
    }
}

.fs-50 {
    font-size: calc(1.375rem + 1.5vw) !important
}

@media (min-width:1200px) {
    .fs-50 {
        font-size: 2.5rem !important
    }
}

.fs-51 {
    font-size: calc(1.38rem + 1.56vw) !important
}

@media (min-width:1200px) {
    .fs-51 {
        font-size: 2.55rem !important
    }
}

.fs-52 {
    font-size: calc(1.385rem + 1.62vw) !important
}

@media (min-width:1200px) {
    .fs-52 {
        font-size: 2.6rem !important
    }
}

.fs-53 {
    font-size: calc(1.39rem + 1.68vw) !important
}

@media (min-width:1200px) {
    .fs-53 {
        font-size: 2.65rem !important
    }
}

.fs-54 {
    font-size: calc(1.395rem + 1.74vw) !important
}

@media (min-width:1200px) {
    .fs-54 {
        font-size: 2.7rem !important
    }
}

.fs-55 {
    font-size: calc(1.4rem + 1.8vw) !important
}

@media (min-width:1200px) {
    .fs-55 {
        font-size: 2.75rem !important
    }
}

.fs-56 {
    font-size: calc(1.405rem + 1.86vw) !important
}

@media (min-width:1200px) {
    .fs-56 {
        font-size: 2.8rem !important
    }
}

.fs-57 {
    font-size: calc(1.41rem + 1.92vw) !important
}

@media (min-width:1200px) {
    .fs-57 {
        font-size: 2.85rem !important
    }
}

.fs-58 {
    font-size: calc(1.415rem + 1.98vw) !important
}

@media (min-width:1200px) {
    .fs-58 {
        font-size: 2.9rem !important
    }
}

.fs-59 {
    font-size: calc(1.42rem + 2.04vw) !important
}

@media (min-width:1200px) {
    .fs-59 {
        font-size: 2.95rem !important
    }
}

.fs-60 {
    font-size: calc(1.425rem + 2.1vw) !important
}

@media (min-width:1200px) {
    .fs-60 {
        font-size: 3rem !important
    }
}

.fs-61 {
    font-size: calc(1.43rem + 2.16vw) !important
}

@media (min-width:1200px) {
    .fs-61 {
        font-size: 3.05rem !important
    }
}

.fs-62 {
    font-size: calc(1.435rem + 2.22vw) !important
}

@media (min-width:1200px) {
    .fs-62 {
        font-size: 3.1rem !important
    }
}

.fs-63 {
    font-size: calc(1.44rem + 2.28vw) !important
}

@media (min-width:1200px) {
    .fs-63 {
        font-size: 3.15rem !important
    }
}

.fs-64 {
    font-size: calc(1.445rem + 2.34vw) !important
}

@media (min-width:1200px) {
    .fs-64 {
        font-size: 3.2rem !important
    }
}

.fs-65 {
    font-size: calc(1.45rem + 2.4vw) !important
}

@media (min-width:1200px) {
    .fs-65 {
        font-size: 3.25rem !important
    }
}

.fs-66 {
    font-size: calc(1.455rem + 2.46vw) !important
}

@media (min-width:1200px) {
    .fs-66 {
        font-size: 3.3rem !important
    }
}

.fs-67 {
    font-size: calc(1.46rem + 2.52vw) !important
}

@media (min-width:1200px) {
    .fs-67 {
        font-size: 3.35rem !important
    }
}

.fs-68 {
    font-size: calc(1.465rem + 2.58vw) !important
}

@media (min-width:1200px) {
    .fs-68 {
        font-size: 3.4rem !important
    }
}

.fs-69 {
    font-size: calc(1.47rem + 2.64vw) !important
}

@media (min-width:1200px) {
    .fs-69 {
        font-size: 3.45rem !important
    }
}

.fs-70 {
    font-size: calc(1.475rem + 2.7vw) !important
}

@media (min-width:1200px) {
    .fs-70 {
        font-size: 3.5rem !important
    }
}

.fs-71 {
    font-size: calc(1.48rem + 2.76vw) !important
}

@media (min-width:1200px) {
    .fs-71 {
        font-size: 3.55rem !important
    }
}

.fs-72 {
    font-size: calc(1.485rem + 2.82vw) !important
}

@media (min-width:1200px) {
    .fs-72 {
        font-size: 3.6rem !important
    }
}

.fs-73 {
    font-size: calc(1.49rem + 2.88vw) !important
}

@media (min-width:1200px) {
    .fs-73 {
        font-size: 3.65rem !important
    }
}

.fs-74 {
    font-size: calc(1.495rem + 2.94vw) !important
}

@media (min-width:1200px) {
    .fs-74 {
        font-size: 3.7rem !important
    }
}

.fs-75 {
    font-size: calc(1.5rem + 3vw) !important
}

@media (min-width:1200px) {
    .fs-75 {
        font-size: 3.75rem !important
    }
}

.fs-76 {
    font-size: calc(1.505rem + 3.06vw) !important
}

@media (min-width:1200px) {
    .fs-76 {
        font-size: 3.8rem !important
    }
}

.fs-77 {
    font-size: calc(1.51rem + 3.12vw) !important
}

@media (min-width:1200px) {
    .fs-77 {
        font-size: 3.85rem !important
    }
}

.fs-78 {
    font-size: calc(1.515rem + 3.18vw) !important
}

@media (min-width:1200px) {
    .fs-78 {
        font-size: 3.9rem !important
    }
}

.fs-79 {
    font-size: calc(1.52rem + 3.24vw) !important
}

@media (min-width:1200px) {
    .fs-79 {
        font-size: 3.95rem !important
    }
}

.fs-80 {
    font-size: calc(1.525rem + 3.3vw) !important
}

@media (min-width:1200px) {
    .fs-80 {
        font-size: 4rem !important
    }
}

.fs-81 {
    font-size: calc(1.53rem + 3.36vw) !important
}

@media (min-width:1200px) {
    .fs-81 {
        font-size: 4.05rem !important
    }
}

.fs-82 {
    font-size: calc(1.535rem + 3.42vw) !important
}

@media (min-width:1200px) {
    .fs-82 {
        font-size: 4.1rem !important
    }
}

.fs-83 {
    font-size: calc(1.54rem + 3.48vw) !important
}

@media (min-width:1200px) {
    .fs-83 {
        font-size: 4.15rem !important
    }
}

.fs-84 {
    font-size: calc(1.545rem + 3.54vw) !important
}

@media (min-width:1200px) {
    .fs-84 {
        font-size: 4.2rem !important
    }
}

.fs-85 {
    font-size: calc(1.55rem + 3.6vw) !important
}

@media (min-width:1200px) {
    .fs-85 {
        font-size: 4.25rem !important
    }
}

.fs-86 {
    font-size: calc(1.555rem + 3.66vw) !important
}

@media (min-width:1200px) {
    .fs-86 {
        font-size: 4.3rem !important
    }
}

.fs-87 {
    font-size: calc(1.56rem + 3.72vw) !important
}

@media (min-width:1200px) {
    .fs-87 {
        font-size: 4.35rem !important
    }
}

.fs-88 {
    font-size: calc(1.565rem + 3.78vw) !important
}

@media (min-width:1200px) {
    .fs-88 {
        font-size: 4.4rem !important
    }
}

.fs-89 {
    font-size: calc(1.57rem + 3.84vw) !important
}

@media (min-width:1200px) {
    .fs-89 {
        font-size: 4.45rem !important
    }
}

.fs-90 {
    font-size: calc(1.575rem + 3.9vw) !important
}

@media (min-width:1200px) {
    .fs-90 {
        font-size: 4.5rem !important
    }
}

.fs-91 {
    font-size: calc(1.58rem + 3.96vw) !important
}

@media (min-width:1200px) {
    .fs-91 {
        font-size: 4.55rem !important
    }
}

.fs-92 {
    font-size: calc(1.585rem + 4.02vw) !important
}

@media (min-width:1200px) {
    .fs-92 {
        font-size: 4.6rem !important
    }
}

.fs-93 {
    font-size: calc(1.59rem + 4.08vw) !important
}

@media (min-width:1200px) {
    .fs-93 {
        font-size: 4.65rem !important
    }
}

.fs-94 {
    font-size: calc(1.595rem + 4.14vw) !important
}

@media (min-width:1200px) {
    .fs-94 {
        font-size: 4.7rem !important
    }
}

.fs-95 {
    font-size: calc(1.6rem + 4.2vw) !important
}

@media (min-width:1200px) {
    .fs-95 {
        font-size: 4.75rem !important
    }
}

.fs-96 {
    font-size: calc(1.605rem + 4.26vw) !important
}

@media (min-width:1200px) {
    .fs-96 {
        font-size: 4.8rem !important
    }
}

.fs-97 {
    font-size: calc(1.61rem + 4.32vw) !important
}

@media (min-width:1200px) {
    .fs-97 {
        font-size: 4.85rem !important
    }
}

.fs-98 {
    font-size: calc(1.615rem + 4.38vw) !important
}

@media (min-width:1200px) {
    .fs-98 {
        font-size: 4.9rem !important
    }
}

.fs-99 {
    font-size: calc(1.62rem + 4.44vw) !important
}

@media (min-width:1200px) {
    .fs-99 {
        font-size: 4.95rem !important
    }
}

.fs-100 {
    font-size: calc(1.625rem + 4.5vw) !important
}

@media (min-width:1200px) {
    .fs-100 {
        font-size: 5rem !important
    }
}

.fs-101 {
    font-size: calc(1.63rem + 4.56vw) !important
}

@media (min-width:1200px) {
    .fs-101 {
        font-size: 5.05rem !important
    }
}

.fs-102 {
    font-size: calc(1.635rem + 4.62vw) !important
}

@media (min-width:1200px) {
    .fs-102 {
        font-size: 5.1rem !important
    }
}

.fs-103 {
    font-size: calc(1.64rem + 4.68vw) !important
}

@media (min-width:1200px) {
    .fs-103 {
        font-size: 5.15rem !important
    }
}

.fs-104 {
    font-size: calc(1.645rem + 4.74vw) !important
}

@media (min-width:1200px) {
    .fs-104 {
        font-size: 5.2rem !important
    }
}

.fs-105 {
    font-size: calc(1.65rem + 4.8vw) !important
}

@media (min-width:1200px) {
    .fs-105 {
        font-size: 5.25rem !important
    }
}

.fs-106 {
    font-size: calc(1.655rem + 4.86vw) !important
}

@media (min-width:1200px) {
    .fs-106 {
        font-size: 5.3rem !important
    }
}

.fs-107 {
    font-size: calc(1.66rem + 4.92vw) !important
}

@media (min-width:1200px) {
    .fs-107 {
        font-size: 5.35rem !important
    }
}

.fs-108 {
    font-size: calc(1.665rem + 4.98vw) !important
}

@media (min-width:1200px) {
    .fs-108 {
        font-size: 5.4rem !important
    }
}

.fs-109 {
    font-size: calc(1.67rem + 5.04vw) !important
}

@media (min-width:1200px) {
    .fs-109 {
        font-size: 5.45rem !important
    }
}

.fs-110 {
    font-size: calc(1.675rem + 5.1vw) !important
}

@media (min-width:1200px) {
    .fs-110 {
        font-size: 5.5rem !important
    }
}

.fs-111 {
    font-size: calc(1.68rem + 5.16vw) !important
}

@media (min-width:1200px) {
    .fs-111 {
        font-size: 5.55rem !important
    }
}

.fs-112 {
    font-size: calc(1.685rem + 5.22vw) !important
}

@media (min-width:1200px) {
    .fs-112 {
        font-size: 5.6rem !important
    }
}

.fs-113 {
    font-size: calc(1.69rem + 5.28vw) !important
}

@media (min-width:1200px) {
    .fs-113 {
        font-size: 5.65rem !important
    }
}

.fs-114 {
    font-size: calc(1.695rem + 5.34vw) !important
}

@media (min-width:1200px) {
    .fs-114 {
        font-size: 5.7rem !important
    }
}

.fs-115 {
    font-size: calc(1.7rem + 5.4vw) !important
}

@media (min-width:1200px) {
    .fs-115 {
        font-size: 5.75rem !important
    }
}

.fs-116 {
    font-size: calc(1.705rem + 5.46vw) !important
}

@media (min-width:1200px) {
    .fs-116 {
        font-size: 5.8rem !important
    }
}

.fs-117 {
    font-size: calc(1.71rem + 5.52vw) !important
}

@media (min-width:1200px) {
    .fs-117 {
        font-size: 5.85rem !important
    }
}

.fs-118 {
    font-size: calc(1.715rem + 5.58vw) !important
}

@media (min-width:1200px) {
    .fs-118 {
        font-size: 5.9rem !important
    }
}

.fs-119 {
    font-size: calc(1.72rem + 5.64vw) !important
}

@media (min-width:1200px) {
    .fs-119 {
        font-size: 5.95rem !important
    }
}

.fs-120 {
    font-size: calc(1.725rem + 5.7vw) !important
}

@media (min-width:1200px) {
    .fs-120 {
        font-size: 6rem !important
    }
}

.fs-121 {
    font-size: calc(1.73rem + 5.76vw) !important
}

@media (min-width:1200px) {
    .fs-121 {
        font-size: 6.05rem !important
    }
}

.fs-122 {
    font-size: calc(1.735rem + 5.82vw) !important
}

@media (min-width:1200px) {
    .fs-122 {
        font-size: 6.1rem !important
    }
}

.fs-123 {
    font-size: calc(1.74rem + 5.88vw) !important
}

@media (min-width:1200px) {
    .fs-123 {
        font-size: 6.15rem !important
    }
}

.fs-124 {
    font-size: calc(1.745rem + 5.94vw) !important
}

@media (min-width:1200px) {
    .fs-124 {
        font-size: 6.2rem !important
    }
}

.fs-125 {
    font-size: calc(1.75rem + 6vw) !important
}

@media (min-width:1200px) {
    .fs-125 {
        font-size: 6.25rem !important
    }
}

.fs-126 {
    font-size: calc(1.755rem + 6.06vw) !important
}

@media (min-width:1200px) {
    .fs-126 {
        font-size: 6.3rem !important
    }
}

.fs-127 {
    font-size: calc(1.76rem + 6.12vw) !important
}

@media (min-width:1200px) {
    .fs-127 {
        font-size: 6.35rem !important
    }
}

.fs-128 {
    font-size: calc(1.765rem + 6.18vw) !important
}

@media (min-width:1200px) {
    .fs-128 {
        font-size: 6.4rem !important
    }
}

.fs-129 {
    font-size: calc(1.77rem + 6.24vw) !important
}

@media (min-width:1200px) {
    .fs-129 {
        font-size: 6.45rem !important
    }
}

.fs-130 {
    font-size: calc(1.775rem + 6.3vw) !important
}

@media (min-width:1200px) {
    .fs-130 {
        font-size: 6.5rem !important
    }
}

.fs-131 {
    font-size: calc(1.78rem + 6.36vw) !important
}

@media (min-width:1200px) {
    .fs-131 {
        font-size: 6.55rem !important
    }
}

.fs-132 {
    font-size: calc(1.785rem + 6.42vw) !important
}

@media (min-width:1200px) {
    .fs-132 {
        font-size: 6.6rem !important
    }
}

.fs-133 {
    font-size: calc(1.79rem + 6.48vw) !important
}

@media (min-width:1200px) {
    .fs-133 {
        font-size: 6.65rem !important
    }
}

.fs-134 {
    font-size: calc(1.795rem + 6.54vw) !important
}

@media (min-width:1200px) {
    .fs-134 {
        font-size: 6.7rem !important
    }
}

.fs-135 {
    font-size: calc(1.8rem + 6.6vw) !important
}

@media (min-width:1200px) {
    .fs-135 {
        font-size: 6.75rem !important
    }
}

.fs-136 {
    font-size: calc(1.805rem + 6.66vw) !important
}

@media (min-width:1200px) {
    .fs-136 {
        font-size: 6.8rem !important
    }
}

.fs-137 {
    font-size: calc(1.81rem + 6.72vw) !important
}

@media (min-width:1200px) {
    .fs-137 {
        font-size: 6.85rem !important
    }
}

.fs-138 {
    font-size: calc(1.815rem + 6.78vw) !important
}

@media (min-width:1200px) {
    .fs-138 {
        font-size: 6.9rem !important
    }
}

.fs-139 {
    font-size: calc(1.82rem + 6.84vw) !important
}

@media (min-width:1200px) {
    .fs-139 {
        font-size: 6.95rem !important
    }
}

.fs-140 {
    font-size: calc(1.825rem + 6.9vw) !important
}

@media (min-width:1200px) {
    .fs-140 {
        font-size: 7rem !important
    }
}

.fs-141 {
    font-size: calc(1.83rem + 6.96vw) !important
}

@media (min-width:1200px) {
    .fs-141 {
        font-size: 7.05rem !important
    }
}

.fs-142 {
    font-size: calc(1.835rem + 7.02vw) !important
}

@media (min-width:1200px) {
    .fs-142 {
        font-size: 7.1rem !important
    }
}

.fs-143 {
    font-size: calc(1.84rem + 7.08vw) !important
}

@media (min-width:1200px) {
    .fs-143 {
        font-size: 7.15rem !important
    }
}

.fs-144 {
    font-size: calc(1.845rem + 7.14vw) !important
}

@media (min-width:1200px) {
    .fs-144 {
        font-size: 7.2rem !important
    }
}

.fs-145 {
    font-size: calc(1.85rem + 7.2vw) !important
}

@media (min-width:1200px) {
    .fs-145 {
        font-size: 7.25rem !important
    }
}

.fs-146 {
    font-size: calc(1.855rem + 7.26vw) !important
}

@media (min-width:1200px) {
    .fs-146 {
        font-size: 7.3rem !important
    }
}

.fs-147 {
    font-size: calc(1.86rem + 7.32vw) !important
}

@media (min-width:1200px) {
    .fs-147 {
        font-size: 7.35rem !important
    }
}

.fs-148 {
    font-size: calc(1.865rem + 7.38vw) !important
}

@media (min-width:1200px) {
    .fs-148 {
        font-size: 7.4rem !important
    }
}

.fs-149 {
    font-size: calc(1.87rem + 7.44vw) !important
}

@media (min-width:1200px) {
    .fs-149 {
        font-size: 7.45rem !important
    }
}

.fs-150 {
    font-size: calc(1.875rem + 7.5vw) !important
}

@media (min-width:1200px) {
    .fs-150 {
        font-size: 7.5rem !important
    }
}

.fs-151 {
    font-size: calc(1.88rem + 7.56vw) !important
}

@media (min-width:1200px) {
    .fs-151 {
        font-size: 7.55rem !important
    }
}

.fs-152 {
    font-size: calc(1.885rem + 7.62vw) !important
}

@media (min-width:1200px) {
    .fs-152 {
        font-size: 7.6rem !important
    }
}

.fs-153 {
    font-size: calc(1.89rem + 7.68vw) !important
}

@media (min-width:1200px) {
    .fs-153 {
        font-size: 7.65rem !important
    }
}

.fs-154 {
    font-size: calc(1.895rem + 7.74vw) !important
}

@media (min-width:1200px) {
    .fs-154 {
        font-size: 7.7rem !important
    }
}

.fs-155 {
    font-size: calc(1.9rem + 7.8vw) !important
}

@media (min-width:1200px) {
    .fs-155 {
        font-size: 7.75rem !important
    }
}

.fs-156 {
    font-size: calc(1.905rem + 7.86vw) !important
}

@media (min-width:1200px) {
    .fs-156 {
        font-size: 7.8rem !important
    }
}

.fs-157 {
    font-size: calc(1.91rem + 7.92vw) !important
}

@media (min-width:1200px) {
    .fs-157 {
        font-size: 7.85rem !important
    }
}

.fs-158 {
    font-size: calc(1.915rem + 7.98vw) !important
}

@media (min-width:1200px) {
    .fs-158 {
        font-size: 7.9rem !important
    }
}

.fs-159 {
    font-size: calc(1.92rem + 8.04vw) !important
}

@media (min-width:1200px) {
    .fs-159 {
        font-size: 7.95rem !important
    }
}

.fs-160 {
    font-size: calc(1.925rem + 8.1vw) !important
}

@media (min-width:1200px) {
    .fs-160 {
        font-size: 8rem !important
    }
}

.fs-161 {
    font-size: calc(1.93rem + 8.16vw) !important
}

@media (min-width:1200px) {
    .fs-161 {
        font-size: 8.05rem !important
    }
}

.fs-162 {
    font-size: calc(1.935rem + 8.22vw) !important
}

@media (min-width:1200px) {
    .fs-162 {
        font-size: 8.1rem !important
    }
}

.fs-163 {
    font-size: calc(1.94rem + 8.28vw) !important
}

@media (min-width:1200px) {
    .fs-163 {
        font-size: 8.15rem !important
    }
}

.fs-164 {
    font-size: calc(1.945rem + 8.34vw) !important
}

@media (min-width:1200px) {
    .fs-164 {
        font-size: 8.2rem !important
    }
}

.fs-165 {
    font-size: calc(1.95rem + 8.4vw) !important
}

@media (min-width:1200px) {
    .fs-165 {
        font-size: 8.25rem !important
    }
}

.fs-166 {
    font-size: calc(1.955rem + 8.46vw) !important
}

@media (min-width:1200px) {
    .fs-166 {
        font-size: 8.3rem !important
    }
}

.fs-167 {
    font-size: calc(1.96rem + 8.52vw) !important
}

@media (min-width:1200px) {
    .fs-167 {
        font-size: 8.35rem !important
    }
}

.fs-168 {
    font-size: calc(1.965rem + 8.58vw) !important
}

@media (min-width:1200px) {
    .fs-168 {
        font-size: 8.4rem !important
    }
}

.fs-169 {
    font-size: calc(1.97rem + 8.64vw) !important
}

@media (min-width:1200px) {
    .fs-169 {
        font-size: 8.45rem !important
    }
}

.fs-170 {
    font-size: calc(1.975rem + 8.7vw) !important
}

@media (min-width:1200px) {
    .fs-170 {
        font-size: 8.5rem !important
    }
}

.fs-171 {
    font-size: calc(1.98rem + 8.76vw) !important
}

@media (min-width:1200px) {
    .fs-171 {
        font-size: 8.55rem !important
    }
}

.fs-172 {
    font-size: calc(1.985rem + 8.82vw) !important
}

@media (min-width:1200px) {
    .fs-172 {
        font-size: 8.6rem !important
    }
}

.fs-173 {
    font-size: calc(1.99rem + 8.88vw) !important
}

@media (min-width:1200px) {
    .fs-173 {
        font-size: 8.65rem !important
    }
}

.fs-174 {
    font-size: calc(1.995rem + 8.94vw) !important
}

@media (min-width:1200px) {
    .fs-174 {
        font-size: 8.7rem !important
    }
}

.fs-175 {
    font-size: calc(2rem + 9vw) !important
}

@media (min-width:1200px) {
    .fs-175 {
        font-size: 8.75rem !important
    }
}

.fs-176 {
    font-size: calc(2.005rem + 9.06vw) !important
}

@media (min-width:1200px) {
    .fs-176 {
        font-size: 8.8rem !important
    }
}

.fs-177 {
    font-size: calc(2.01rem + 9.12vw) !important
}

@media (min-width:1200px) {
    .fs-177 {
        font-size: 8.85rem !important
    }
}

.fs-178 {
    font-size: calc(2.015rem + 9.18vw) !important
}

@media (min-width:1200px) {
    .fs-178 {
        font-size: 8.9rem !important
    }
}

.fs-179 {
    font-size: calc(2.02rem + 9.24vw) !important
}

@media (min-width:1200px) {
    .fs-179 {
        font-size: 8.95rem !important
    }
}

.fs-180 {
    font-size: calc(2.025rem + 9.3vw) !important
}

@media (min-width:1200px) {
    .fs-180 {
        font-size: 9rem !important
    }
}

.fs-181 {
    font-size: calc(2.03rem + 9.36vw) !important
}

@media (min-width:1200px) {
    .fs-181 {
        font-size: 9.05rem !important
    }
}

.fs-182 {
    font-size: calc(2.035rem + 9.42vw) !important
}

@media (min-width:1200px) {
    .fs-182 {
        font-size: 9.1rem !important
    }
}

.fs-183 {
    font-size: calc(2.04rem + 9.48vw) !important
}

@media (min-width:1200px) {
    .fs-183 {
        font-size: 9.15rem !important
    }
}

.fs-184 {
    font-size: calc(2.045rem + 9.54vw) !important
}

@media (min-width:1200px) {
    .fs-184 {
        font-size: 9.2rem !important
    }
}

.fs-185 {
    font-size: calc(2.05rem + 9.6vw) !important
}

@media (min-width:1200px) {
    .fs-185 {
        font-size: 9.25rem !important
    }
}

.fs-186 {
    font-size: calc(2.055rem + 9.66vw) !important
}

@media (min-width:1200px) {
    .fs-186 {
        font-size: 9.3rem !important
    }
}

.fs-187 {
    font-size: calc(2.06rem + 9.72vw) !important
}

@media (min-width:1200px) {
    .fs-187 {
        font-size: 9.35rem !important
    }
}

.fs-188 {
    font-size: calc(2.065rem + 9.78vw) !important
}

@media (min-width:1200px) {
    .fs-188 {
        font-size: 9.4rem !important
    }
}

.fs-189 {
    font-size: calc(2.07rem + 9.84vw) !important
}

@media (min-width:1200px) {
    .fs-189 {
        font-size: 9.45rem !important
    }
}

.fs-190 {
    font-size: calc(2.075rem + 9.9vw) !important
}

@media (min-width:1200px) {
    .fs-190 {
        font-size: 9.5rem !important
    }
}

.fs-191 {
    font-size: calc(2.08rem + 9.96vw) !important
}

@media (min-width:1200px) {
    .fs-191 {
        font-size: 9.55rem !important
    }
}

.fs-192 {
    font-size: calc(2.085rem + 10.02vw) !important
}

@media (min-width:1200px) {
    .fs-192 {
        font-size: 9.6rem !important
    }
}

.fs-193 {
    font-size: calc(2.09rem + 10.08vw) !important
}

@media (min-width:1200px) {
    .fs-193 {
        font-size: 9.65rem !important
    }
}

.fs-194 {
    font-size: calc(2.095rem + 10.14vw) !important
}

@media (min-width:1200px) {
    .fs-194 {
        font-size: 9.7rem !important
    }
}

.fs-195 {
    font-size: calc(2.1rem + 10.2vw) !important
}

@media (min-width:1200px) {
    .fs-195 {
        font-size: 9.75rem !important
    }
}

.fs-196 {
    font-size: calc(2.105rem + 10.26vw) !important
}

@media (min-width:1200px) {
    .fs-196 {
        font-size: 9.8rem !important
    }
}

.fs-197 {
    font-size: calc(2.11rem + 10.32vw) !important
}

@media (min-width:1200px) {
    .fs-197 {
        font-size: 9.85rem !important
    }
}

.fs-198 {
    font-size: calc(2.115rem + 10.38vw) !important
}

@media (min-width:1200px) {
    .fs-198 {
        font-size: 9.9rem !important
    }
}

.fs-199 {
    font-size: calc(2.12rem + 10.44vw) !important
}

@media (min-width:1200px) {
    .fs-199 {
        font-size: 9.95rem !important
    }
}

.fs-200 {
    font-size: calc(2.125rem + 10.5vw) !important
}

@media (min-width:1200px) {
    .fs-200 {
        font-size: 10rem !important
    }
}

input,
select,
textarea {
    -webkit-appearance: none !important
}

.form-floating>label {
    color: #959ca9;
    font-size: .75rem
}

.form-floating.input-group label {
    margin-left: .05rem !important
}

.form-floating>textarea.form-control:not(:-moz-placeholder-shown) {
    padding-top: 1.3rem
}

.form-floating>textarea.form-control:not(:-ms-input-placeholder) {
    padding-top: 1.3rem
}

.form-floating>textarea.form-control:focus,
.form-floating>textarea.form-control:not(:placeholder-shown) {
    padding-top: 1.3rem
}

.form-floating>textarea.form-control:-webkit-autofill {
    padding-top: 1.3rem
}

.search-form {
    position: relative
}

.search-form .form-control {
    margin: 0;
    padding-right: 2.25rem !important
}

.search-form:before {
    content: "\eca5";
    font-family: Unicons;
    display: block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: .75rem;
    font-size: .9rem;
    color: #959ca9;
    z-index: 1
}

.password-toggle {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: .75rem;
    cursor: pointer;
    font-size: .9rem;
    color: #959ca9
}

.form-check-input {
    box-shadow: 0 0 1.25rem rgba(30, 34, 40, .04);
    margin-top: .2rem
}

.form-select {
    background-clip: padding-box
}

.form-select.form-select-sm {
    width: auto;
    min-width: 2.5rem;
    padding: .2rem .5rem;
    background-position: right .4rem center
}

.mc-field-group {
    text-align: left !important
}

.input-group>.form-control:focus,
.input-group>.form-select:focus {
    z-index: 0
}

.input-group>.btn {
    max-height: 2.6rem
}

form.dark-fields .form-control {
    background: rgba(255, 255, 255, .03);
    border-color: rgba(255, 255, 255, .1);
    color: #cacaca
}

form.dark-fields .form-control:focus {
    border-color: rgba(63, 120, 224, .5)
}

.picker {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 1.5rem
}

.picker label {
    position: relative;
    inline-size: 2rem;
    block-size: 2rem;
    margin-right: .5rem;
    isolation: isolate;
    display: grid;
    place-items: center;
    cursor: pointer
}

.picker label>span {
    position: absolute;
    inset: 0;
    block-size: 100%;
    inline-size: 100%
}

.picker label[for*=size]>span {
    font-size: .7rem;
    line-height: 1;
    display: grid;
    place-items: center;
    padding: .5rem;
    background: rgba(164, 174, 198, .2);
    border-radius: .4rem
}

.picker label[for*=size]>input:checked~span {
    background-color: #3f78e0;
    color: #fff
}

.picker label[for*=color] {
    inline-size: 1.5rem;
    block-size: 1.5rem
}

.picker label[for*=color]>span {
    font-size: 1px;
    display: grid;
    place-items: center;
    background: var(--color, rgba(164, 174, 198, .2));
    border-radius: 100%;
    color: transparent
}

.picker label[for*=color]>input:checked~span {
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px var(--color)
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transform: translateY(0);
    letter-spacing: -.01rem;
    box-shadow: none
}

.btn:hover {
    transform: translateY(-.15rem);
    color: #fff;
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15)
}

.btn.btn-white:hover,
.btn[class*=btn-soft-]:hover {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .05)
}

.btn-check:active+.btn:focus,
.btn-check:checked+.btn:focus,
.btn.active:focus,
.btn.show:focus,
.btn:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .05) !important
}

.btn-check:active+.btn,
.btn-check:checked+.btn,
.btn.active,
.btn:active {
    transform: translateY(-.15rem)
}

.btn-check:focus+.btn,
.btn:focus {
    box-shadow: none
}

.btn.btn-block {
    padding: 0;
    width: 2.2rem;
    height: 2.2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    line-height: 1;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.btn-group-sm>.btn.btn-block,
.btn.btn-block.btn-sm {
    width: 1.8rem;
    height: 1.8rem;
    font-size: 1rem
}

.btn-group-lg>.btn.btn-block,
.btn.btn-block.btn-lg {
    width: 3rem;
    height: 3rem;
    font-size: calc(1.265rem + .18vw)
}

@media (min-width:1200px) {

    .btn-group-lg>.btn.btn-block,
    .btn.btn-block.btn-lg {
        font-size: 1.4rem
    }
}

.btn.btn-block.btn-play {
    width: 3.5rem;
    height: 3.5rem;
    font-size: 1.2rem
}

.btn.btn-block.btn-play i {
    margin-left: .15rem
}

.btn.btn-circle {
    padding: 0;
    border-radius: 100% !important;
    width: 2.2rem;
    height: 2.2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    line-height: 1;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.btn-group-sm>.btn.btn-circle,
.btn.btn-circle.btn-sm {
    width: 1.8rem;
    height: 1.8rem;
    font-size: .8rem
}

.btn-group-sm>.btn.btn-circle i,
.btn.btn-circle.btn-sm i {
    font-size: .85rem
}

.btn-group-lg>.btn.btn-circle,
.btn.btn-circle.btn-lg {
    width: 3rem;
    height: 3rem;
    font-size: calc(1.255rem + .06vw)
}

@media (min-width:1200px) {

    .btn-group-lg>.btn.btn-circle,
    .btn.btn-circle.btn-lg {
        font-size: 1.3rem
    }
}

.btn.btn-circle.btn-play {
    width: 3.5rem;
    height: 3.5rem;
    font-size: calc(1.355rem + 1.26vw)
}

@media (min-width:1200px) {
    .btn.btn-circle.btn-play {
        font-size: 2.3rem
    }
}

.btn.btn-circle.btn-play i {
    margin-left: .15rem
}

.btn.btn-circle.btn-play:hover {
    transform: translateY(0)
}

.btn.btn-circle.counter {
    box-shadow: 0 0 1.25rem rgba(30, 34, 40, .04)
}

.btn.btn-circle .number {
    display: table-cell;
    text-align: center;
    margin: 0 auto;
    vertical-align: middle;
    font-size: 1.1rem;
    font-weight: 700
}

.input-group .btn:hover {
    transform: none
}

button:focus {
    outline: 0
}

.btn-blue {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-blue:hover {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-blue:focus,
.btn-check:focus+.btn-blue {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-blue.active,
.btn-blue:active,
.btn-check:active+.btn-blue,
.btn-check:checked+.btn-blue,
.show>.btn-blue.dropdown-toggle {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3769c4
}

.btn-blue.disabled:not(.btn-circle):not(.btn-block),
.btn-blue:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-outline-blue {
    color: #3f78e0;
    border-color: #3f78e0
}

.btn-outline-blue:hover {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:focus+.btn-outline-blue,
.btn-outline-blue:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-blue,
.btn-check:checked+.btn-outline-blue,
.btn-outline-blue.active,
.btn-outline-blue.dropdown-toggle.show,
.btn-outline-blue:active {
    color: #3f78e0;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:active+.btn-outline-blue:focus,
.btn-check:checked+.btn-outline-blue:focus,
.btn-outline-blue.active:focus,
.btn-outline-blue.dropdown-toggle.show:focus,
.btn-outline-blue:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(63, 120, 224, .5)
}

.btn-outline-blue.disabled,
.btn-outline-blue:disabled {
    color: #3f78e0;
    background-color: transparent
}

.btn-sky {
    color: #fff;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-sky:hover {
    color: #fff;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-check:focus+.btn-sky,
.btn-sky:focus {
    color: #fff;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-check:active+.btn-sky,
.btn-check:checked+.btn-sky,
.btn-sky.active,
.btn-sky:active,
.show>.btn-sky.dropdown-toggle {
    color: #fff;
    background-color: #5eb9f0;
    border-color: #52a2d2
}

.btn-sky.disabled:not(.btn-circle):not(.btn-block),
.btn-sky:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-outline-sky {
    color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-outline-sky:hover {
    color: #fff;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-check:focus+.btn-outline-sky,
.btn-outline-sky:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-sky,
.btn-check:checked+.btn-outline-sky,
.btn-outline-sky.active,
.btn-outline-sky.dropdown-toggle.show,
.btn-outline-sky:active {
    color: #5eb9f0;
    background-color: #5eb9f0;
    border-color: #5eb9f0
}

.btn-check:active+.btn-outline-sky:focus,
.btn-check:checked+.btn-outline-sky:focus,
.btn-outline-sky.active:focus,
.btn-outline-sky.dropdown-toggle.show:focus,
.btn-outline-sky:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(94, 185, 240, .5)
}

.btn-outline-sky.disabled,
.btn-outline-sky:disabled {
    color: #5eb9f0;
    background-color: transparent
}

.btn-purple {
    color: #fff;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-purple:hover {
    color: #fff;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-check:focus+.btn-purple,
.btn-purple:focus {
    color: #fff;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-check:active+.btn-purple,
.btn-check:checked+.btn-purple,
.btn-purple.active,
.btn-purple:active,
.show>.btn-purple.dropdown-toggle {
    color: #fff;
    background-color: #747ed1;
    border-color: #666eb7
}

.btn-purple.disabled:not(.btn-circle):not(.btn-block),
.btn-purple:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-outline-purple {
    color: #747ed1;
    border-color: #747ed1
}

.btn-outline-purple:hover {
    color: #fff;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-check:focus+.btn-outline-purple,
.btn-outline-purple:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-purple,
.btn-check:checked+.btn-outline-purple,
.btn-outline-purple.active,
.btn-outline-purple.dropdown-toggle.show,
.btn-outline-purple:active {
    color: #747ed1;
    background-color: #747ed1;
    border-color: #747ed1
}

.btn-check:active+.btn-outline-purple:focus,
.btn-check:checked+.btn-outline-purple:focus,
.btn-outline-purple.active:focus,
.btn-outline-purple.dropdown-toggle.show:focus,
.btn-outline-purple:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(116, 126, 209, .5)
}

.btn-outline-purple.disabled,
.btn-outline-purple:disabled {
    color: #747ed1;
    background-color: transparent
}

.btn-grape {
    color: #fff;
    background-color: #605dba;
    border-color: #605dba
}

.btn-grape:hover {
    color: #fff;
    background-color: #605dba;
    border-color: #605dba
}

.btn-check:focus+.btn-grape,
.btn-grape:focus {
    color: #fff;
    background-color: #605dba;
    border-color: #605dba
}

.btn-check:active+.btn-grape,
.btn-check:checked+.btn-grape,
.btn-grape.active,
.btn-grape:active,
.show>.btn-grape.dropdown-toggle {
    color: #fff;
    background-color: #605dba;
    border-color: #5451a3
}

.btn-grape.disabled:not(.btn-circle):not(.btn-block),
.btn-grape:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #605dba;
    border-color: #605dba
}

.btn-outline-grape {
    color: #605dba;
    border-color: #605dba
}

.btn-outline-grape:hover {
    color: #fff;
    background-color: #605dba;
    border-color: #605dba
}

.btn-check:focus+.btn-outline-grape,
.btn-outline-grape:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-grape,
.btn-check:checked+.btn-outline-grape,
.btn-outline-grape.active,
.btn-outline-grape.dropdown-toggle.show,
.btn-outline-grape:active {
    color: #605dba;
    background-color: #605dba;
    border-color: #605dba
}

.btn-check:active+.btn-outline-grape:focus,
.btn-check:checked+.btn-outline-grape:focus,
.btn-outline-grape.active:focus,
.btn-outline-grape.dropdown-toggle.show:focus,
.btn-outline-grape:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(96, 93, 186, .5)
}

.btn-outline-grape.disabled,
.btn-outline-grape:disabled {
    color: #605dba;
    background-color: transparent
}

.btn-violet {
    color: #fff;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-violet:hover {
    color: #fff;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-check:focus+.btn-violet,
.btn-violet:focus {
    color: #fff;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-check:active+.btn-violet,
.btn-check:checked+.btn-violet,
.btn-violet.active,
.btn-violet:active,
.show>.btn-violet.dropdown-toggle {
    color: #fff;
    background-color: #a07cc5;
    border-color: #8c6dac
}

.btn-violet.disabled:not(.btn-circle):not(.btn-block),
.btn-violet:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-outline-violet {
    color: #a07cc5;
    border-color: #a07cc5
}

.btn-outline-violet:hover {
    color: #fff;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-check:focus+.btn-outline-violet,
.btn-outline-violet:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-violet,
.btn-check:checked+.btn-outline-violet,
.btn-outline-violet.active,
.btn-outline-violet.dropdown-toggle.show,
.btn-outline-violet:active {
    color: #a07cc5;
    background-color: #a07cc5;
    border-color: #a07cc5
}

.btn-check:active+.btn-outline-violet:focus,
.btn-check:checked+.btn-outline-violet:focus,
.btn-outline-violet.active:focus,
.btn-outline-violet.dropdown-toggle.show:focus,
.btn-outline-violet:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(160, 124, 197, .5)
}

.btn-outline-violet.disabled,
.btn-outline-violet:disabled {
    color: #a07cc5;
    background-color: transparent
}

.btn-pink {
    color: #fff;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-pink:hover {
    color: #fff;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-check:focus+.btn-pink,
.btn-pink:focus {
    color: #fff;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-check:active+.btn-pink,
.btn-check:checked+.btn-pink,
.btn-pink.active,
.btn-pink:active,
.show>.btn-pink.dropdown-toggle {
    color: #fff;
    background-color: #d16b86;
    border-color: #b75e75
}

.btn-pink.disabled:not(.btn-circle):not(.btn-block),
.btn-pink:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-outline-pink {
    color: #d16b86;
    border-color: #d16b86
}

.btn-outline-pink:hover {
    color: #fff;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-check:focus+.btn-outline-pink,
.btn-outline-pink:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-pink,
.btn-check:checked+.btn-outline-pink,
.btn-outline-pink.active,
.btn-outline-pink.dropdown-toggle.show,
.btn-outline-pink:active {
    color: #d16b86;
    background-color: #d16b86;
    border-color: #d16b86
}

.btn-check:active+.btn-outline-pink:focus,
.btn-check:checked+.btn-outline-pink:focus,
.btn-outline-pink.active:focus,
.btn-outline-pink.dropdown-toggle.show:focus,
.btn-outline-pink:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(209, 107, 134, .5)
}

.btn-outline-pink.disabled,
.btn-outline-pink:disabled {
    color: #d16b86;
    background-color: transparent
}

.btn-fuchsia {
    color: #fff;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-fuchsia:hover {
    color: #fff;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-check:focus+.btn-fuchsia,
.btn-fuchsia:focus {
    color: #fff;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-check:active+.btn-fuchsia,
.btn-check:checked+.btn-fuchsia,
.btn-fuchsia.active,
.btn-fuchsia:active,
.show>.btn-fuchsia.dropdown-toggle {
    color: #fff;
    background-color: #e668b3;
    border-color: #c95b9d
}

.btn-fuchsia.disabled:not(.btn-circle):not(.btn-block),
.btn-fuchsia:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-outline-fuchsia {
    color: #e668b3;
    border-color: #e668b3
}

.btn-outline-fuchsia:hover {
    color: #fff;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-check:focus+.btn-outline-fuchsia,
.btn-outline-fuchsia:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-fuchsia,
.btn-check:checked+.btn-outline-fuchsia,
.btn-outline-fuchsia.active,
.btn-outline-fuchsia.dropdown-toggle.show,
.btn-outline-fuchsia:active {
    color: #e668b3;
    background-color: #e668b3;
    border-color: #e668b3
}

.btn-check:active+.btn-outline-fuchsia:focus,
.btn-check:checked+.btn-outline-fuchsia:focus,
.btn-outline-fuchsia.active:focus,
.btn-outline-fuchsia.dropdown-toggle.show:focus,
.btn-outline-fuchsia:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(230, 104, 179, .5)
}

.btn-outline-fuchsia.disabled,
.btn-outline-fuchsia:disabled {
    color: #e668b3;
    background-color: transparent
}

.btn-red {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-red:hover {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:focus+.btn-red,
.btn-red:focus {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:active+.btn-red,
.btn-check:checked+.btn-red,
.btn-red.active,
.btn-red:active,
.show>.btn-red.dropdown-toggle {
    color: #fff;
    background-color: #e2626b;
    border-color: #c6565e
}

.btn-red.disabled:not(.btn-circle):not(.btn-block),
.btn-red:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-outline-red {
    color: #e2626b;
    border-color: #e2626b
}

.btn-outline-red:hover {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:focus+.btn-outline-red,
.btn-outline-red:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-red,
.btn-check:checked+.btn-outline-red,
.btn-outline-red.active,
.btn-outline-red.dropdown-toggle.show,
.btn-outline-red:active {
    color: #e2626b;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:active+.btn-outline-red:focus,
.btn-check:checked+.btn-outline-red:focus,
.btn-outline-red.active:focus,
.btn-outline-red.dropdown-toggle.show:focus,
.btn-outline-red:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(226, 98, 107, .5)
}

.btn-outline-red.disabled,
.btn-outline-red:disabled {
    color: #e2626b;
    background-color: transparent
}

.btn-orange {
    color: #fff;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-orange:hover {
    color: #fff;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-check:focus+.btn-orange,
.btn-orange:focus {
    color: #fff;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-check:active+.btn-orange,
.btn-check:checked+.btn-orange,
.btn-orange.active,
.btn-orange:active,
.show>.btn-orange.dropdown-toggle {
    color: #fff;
    background-color: #f78b77;
    border-color: #d87a68
}

.btn-orange.disabled:not(.btn-circle):not(.btn-block),
.btn-orange:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-outline-orange {
    color: #f78b77;
    border-color: #f78b77
}

.btn-outline-orange:hover {
    color: #fff;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-check:focus+.btn-outline-orange,
.btn-outline-orange:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-orange,
.btn-check:checked+.btn-outline-orange,
.btn-outline-orange.active,
.btn-outline-orange.dropdown-toggle.show,
.btn-outline-orange:active {
    color: #f78b77;
    background-color: #f78b77;
    border-color: #f78b77
}

.btn-check:active+.btn-outline-orange:focus,
.btn-check:checked+.btn-outline-orange:focus,
.btn-outline-orange.active:focus,
.btn-outline-orange.dropdown-toggle.show:focus,
.btn-outline-orange:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(247, 139, 119, .5)
}

.btn-outline-orange.disabled,
.btn-outline-orange:disabled {
    color: #f78b77;
    background-color: transparent
}

.btn-yellow {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-yellow:hover {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:focus+.btn-yellow,
.btn-yellow:focus {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:active+.btn-yellow,
.btn-check:checked+.btn-yellow,
.btn-yellow.active,
.btn-yellow:active,
.show>.btn-yellow.dropdown-toggle {
    color: #fff;
    background-color: #fab758;
    border-color: #dba04d
}

.btn-yellow.disabled:not(.btn-circle):not(.btn-block),
.btn-yellow:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #fab758;
    border-color: #fab758
}

.btn-outline-yellow {
    color: #fab758;
    border-color: #fab758
}

.btn-outline-yellow:hover {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:focus+.btn-outline-yellow,
.btn-outline-yellow:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-yellow,
.btn-check:checked+.btn-outline-yellow,
.btn-outline-yellow.active,
.btn-outline-yellow.dropdown-toggle.show,
.btn-outline-yellow:active {
    color: #fab758;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:active+.btn-outline-yellow:focus,
.btn-check:checked+.btn-outline-yellow:focus,
.btn-outline-yellow.active:focus,
.btn-outline-yellow.dropdown-toggle.show:focus,
.btn-outline-yellow:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(250, 183, 88, .5)
}

.btn-outline-yellow.disabled,
.btn-outline-yellow:disabled {
    color: #fab758;
    background-color: transparent
}

.btn-green {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-green:hover {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:focus+.btn-green,
.btn-green:focus {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:active+.btn-green,
.btn-check:checked+.btn-green,
.btn-green.active,
.btn-green:active,
.show>.btn-green.dropdown-toggle {
    color: #fff;
    background-color: #45c4a0;
    border-color: #3cac8c
}

.btn-green.disabled:not(.btn-circle):not(.btn-block),
.btn-green:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-outline-green {
    color: #45c4a0;
    border-color: #45c4a0
}

.btn-outline-green:hover {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:focus+.btn-outline-green,
.btn-outline-green:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-green,
.btn-check:checked+.btn-outline-green,
.btn-outline-green.active,
.btn-outline-green.dropdown-toggle.show,
.btn-outline-green:active {
    color: #45c4a0;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:active+.btn-outline-green:focus,
.btn-check:checked+.btn-outline-green:focus,
.btn-outline-green.active:focus,
.btn-outline-green.dropdown-toggle.show:focus,
.btn-outline-green:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(69, 196, 160, .5)
}

.btn-outline-green.disabled,
.btn-outline-green:disabled {
    color: #45c4a0;
    background-color: transparent
}

.btn-leaf {
    color: #fff;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-leaf:hover {
    color: #fff;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-check:focus+.btn-leaf,
.btn-leaf:focus {
    color: #fff;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-check:active+.btn-leaf,
.btn-check:checked+.btn-leaf,
.btn-leaf.active,
.btn-leaf:active,
.show>.btn-leaf.dropdown-toggle {
    color: #fff;
    background-color: #7cb798;
    border-color: #6da085
}

.btn-leaf.disabled:not(.btn-circle):not(.btn-block),
.btn-leaf:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-outline-leaf {
    color: #7cb798;
    border-color: #7cb798
}

.btn-outline-leaf:hover {
    color: #fff;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-check:focus+.btn-outline-leaf,
.btn-outline-leaf:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-leaf,
.btn-check:checked+.btn-outline-leaf,
.btn-outline-leaf.active,
.btn-outline-leaf.dropdown-toggle.show,
.btn-outline-leaf:active {
    color: #7cb798;
    background-color: #7cb798;
    border-color: #7cb798
}

.btn-check:active+.btn-outline-leaf:focus,
.btn-check:checked+.btn-outline-leaf:focus,
.btn-outline-leaf.active:focus,
.btn-outline-leaf.dropdown-toggle.show:focus,
.btn-outline-leaf:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(124, 183, 152, .5)
}

.btn-outline-leaf.disabled,
.btn-outline-leaf:disabled {
    color: #7cb798;
    background-color: transparent
}

.btn-aqua {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-aqua:hover {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-aqua:focus,
.btn-check:focus+.btn-aqua {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-aqua.active,
.btn-aqua:active,
.btn-check:active+.btn-aqua,
.btn-check:checked+.btn-aqua,
.show>.btn-aqua.dropdown-toggle {
    color: #fff;
    background-color: #54a8c7;
    border-color: #4a93ae
}

.btn-aqua.disabled:not(.btn-circle):not(.btn-block),
.btn-aqua:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-outline-aqua {
    color: #54a8c7;
    border-color: #54a8c7
}

.btn-outline-aqua:hover {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:focus+.btn-outline-aqua,
.btn-outline-aqua:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-aqua,
.btn-check:checked+.btn-outline-aqua,
.btn-outline-aqua.active,
.btn-outline-aqua.dropdown-toggle.show,
.btn-outline-aqua:active {
    color: #54a8c7;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:active+.btn-outline-aqua:focus,
.btn-check:checked+.btn-outline-aqua:focus,
.btn-outline-aqua.active:focus,
.btn-outline-aqua.dropdown-toggle.show:focus,
.btn-outline-aqua:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(84, 168, 199, .5)
}

.btn-outline-aqua.disabled,
.btn-outline-aqua:disabled {
    color: #54a8c7;
    background-color: transparent
}

.btn-navy {
    color: #fff;
    background-color: #343f52;
    border-color: #343f52
}

.btn-navy:hover {
    color: #fff;
    background-color: #343f52;
    border-color: #343f52
}

.btn-check:focus+.btn-navy,
.btn-navy:focus {
    color: #fff;
    background-color: #343f52;
    border-color: #343f52
}

.btn-check:active+.btn-navy,
.btn-check:checked+.btn-navy,
.btn-navy.active,
.btn-navy:active,
.show>.btn-navy.dropdown-toggle {
    color: #fff;
    background-color: #343f52;
    border-color: #2e3748
}

.btn-navy.disabled:not(.btn-circle):not(.btn-block),
.btn-navy:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #343f52;
    border-color: #343f52
}

.btn-outline-navy {
    color: #343f52;
    border-color: #343f52
}

.btn-outline-navy:hover {
    color: #fff;
    background-color: #343f52;
    border-color: #343f52
}

.btn-check:focus+.btn-outline-navy,
.btn-outline-navy:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-navy,
.btn-check:checked+.btn-outline-navy,
.btn-outline-navy.active,
.btn-outline-navy.dropdown-toggle.show,
.btn-outline-navy:active {
    color: #343f52;
    background-color: #343f52;
    border-color: #343f52
}

.btn-check:active+.btn-outline-navy:focus,
.btn-check:checked+.btn-outline-navy:focus,
.btn-outline-navy.active:focus,
.btn-outline-navy.dropdown-toggle.show:focus,
.btn-outline-navy:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(52, 63, 82, .5)
}

.btn-outline-navy.disabled,
.btn-outline-navy:disabled {
    color: #343f52;
    background-color: transparent
}

.btn-ash {
    color: #fff;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-ash:hover {
    color: #fff;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-ash:focus,
.btn-check:focus+.btn-ash {
    color: #fff;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-ash.active,
.btn-ash:active,
.btn-check:active+.btn-ash,
.btn-check:checked+.btn-ash,
.show>.btn-ash.dropdown-toggle {
    color: #fff;
    background-color: #9499a3;
    border-color: #82868f
}

.btn-ash.disabled:not(.btn-circle):not(.btn-block),
.btn-ash:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-outline-ash {
    color: #9499a3;
    border-color: #9499a3
}

.btn-outline-ash:hover {
    color: #fff;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-check:focus+.btn-outline-ash,
.btn-outline-ash:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-ash,
.btn-check:checked+.btn-outline-ash,
.btn-outline-ash.active,
.btn-outline-ash.dropdown-toggle.show,
.btn-outline-ash:active {
    color: #9499a3;
    background-color: #9499a3;
    border-color: #9499a3
}

.btn-check:active+.btn-outline-ash:focus,
.btn-check:checked+.btn-outline-ash:focus,
.btn-outline-ash.active:focus,
.btn-outline-ash.dropdown-toggle.show:focus,
.btn-outline-ash:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(148, 153, 163, .5)
}

.btn-outline-ash.disabled,
.btn-outline-ash:disabled {
    color: #9499a3;
    background-color: transparent
}

.btn-white {
    color: #fff;
    background-color: #fff;
    border-color: #fff
}

.btn-white:hover {
    color: #fff;
    background-color: #fff;
    border-color: #fff
}

.btn-check:focus+.btn-white,
.btn-white:focus {
    color: #fff;
    background-color: #fff;
    border-color: #fff
}

.btn-check:active+.btn-white,
.btn-check:checked+.btn-white,
.btn-white.active,
.btn-white:active,
.show>.btn-white.dropdown-toggle {
    color: #fff;
    background-color: #fff;
    border-color: #dfdfdf
}

.btn-white.disabled:not(.btn-circle):not(.btn-block),
.btn-white:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #fff;
    border-color: #fff
}

.btn-outline-white {
    color: #fff;
    border-color: #fff
}

.btn-outline-white:hover {
    color: #fff;
    background-color: #fff;
    border-color: #fff
}

.btn-check:focus+.btn-outline-white,
.btn-outline-white:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-white,
.btn-check:checked+.btn-outline-white,
.btn-outline-white.active,
.btn-outline-white.dropdown-toggle.show,
.btn-outline-white:active {
    color: #fff;
    background-color: #fff;
    border-color: #fff
}

.btn-check:active+.btn-outline-white:focus,
.btn-check:checked+.btn-outline-white:focus,
.btn-outline-white.active:focus,
.btn-outline-white.dropdown-toggle.show:focus,
.btn-outline-white:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(255, 255, 255, .5)
}

.btn-outline-white.disabled,
.btn-outline-white:disabled {
    color: #fff;
    background-color: transparent
}

.btn-light {
    color: #fff;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-light:hover {
    color: #fff;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-check:focus+.btn-light,
.btn-light:focus {
    color: #fff;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-check:active+.btn-light,
.btn-check:checked+.btn-light,
.btn-light.active,
.btn-light:active,
.show>.btn-light.dropdown-toggle {
    color: #fff;
    background-color: #fefefe;
    border-color: #dedede
}

.btn-light.disabled:not(.btn-circle):not(.btn-block),
.btn-light:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-outline-light {
    color: #fefefe;
    border-color: #fefefe
}

.btn-outline-light:hover {
    color: #fff;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-check:focus+.btn-outline-light,
.btn-outline-light:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-light,
.btn-check:checked+.btn-outline-light,
.btn-outline-light.active,
.btn-outline-light.dropdown-toggle.show,
.btn-outline-light:active {
    color: #fefefe;
    background-color: #fefefe;
    border-color: #fefefe
}

.btn-check:active+.btn-outline-light:focus,
.btn-check:checked+.btn-outline-light:focus,
.btn-outline-light.active:focus,
.btn-outline-light.dropdown-toggle.show:focus,
.btn-outline-light:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(254, 254, 254, .5)
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #fefefe;
    background-color: transparent
}

.btn-dark {
    color: #fff;
    background-color: #262b32;
    border-color: #262b32
}

.btn-dark:hover {
    color: #fff;
    background-color: #262b32;
    border-color: #262b32
}

.btn-check:focus+.btn-dark,
.btn-dark:focus {
    color: #fff;
    background-color: #262b32;
    border-color: #262b32
}

.btn-check:active+.btn-dark,
.btn-check:checked+.btn-dark,
.btn-dark.active,
.btn-dark:active,
.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #262b32;
    border-color: #21262c
}

.btn-dark.disabled:not(.btn-circle):not(.btn-block),
.btn-dark:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #262b32;
    border-color: #262b32
}

.btn-outline-dark {
    color: #262b32;
    border-color: #262b32
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #262b32;
    border-color: #262b32
}

.btn-check:focus+.btn-outline-dark,
.btn-outline-dark:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-dark,
.btn-check:checked+.btn-outline-dark,
.btn-outline-dark.active,
.btn-outline-dark.dropdown-toggle.show,
.btn-outline-dark:active {
    color: #262b32;
    background-color: #262b32;
    border-color: #262b32
}

.btn-check:active+.btn-outline-dark:focus,
.btn-check:checked+.btn-outline-dark:focus,
.btn-outline-dark.active:focus,
.btn-outline-dark.dropdown-toggle.show:focus,
.btn-outline-dark:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(38, 43, 50, .5)
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #262b32;
    background-color: transparent
}

.btn-primary {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-primary:hover {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:focus+.btn-primary,
.btn-primary:focus {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:active+.btn-primary,
.btn-check:checked+.btn-primary,
.btn-primary.active,
.btn-primary:active,
.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3769c4
}

.btn-primary.disabled:not(.btn-circle):not(.btn-block),
.btn-primary:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-outline-primary {
    color: #3f78e0;
    border-color: #3f78e0
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:focus+.btn-outline-primary,
.btn-outline-primary:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-primary,
.btn-check:checked+.btn-outline-primary,
.btn-outline-primary.active,
.btn-outline-primary.dropdown-toggle.show,
.btn-outline-primary:active {
    color: #3f78e0;
    background-color: #3f78e0;
    border-color: #3f78e0
}

.btn-check:active+.btn-outline-primary:focus,
.btn-check:checked+.btn-outline-primary:focus,
.btn-outline-primary.active:focus,
.btn-outline-primary.dropdown-toggle.show:focus,
.btn-outline-primary:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(63, 120, 224, .5)
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
    color: #3f78e0;
    background-color: transparent
}

.btn-secondary {
    color: #fff;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-secondary:hover {
    color: #fff;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-check:focus+.btn-secondary,
.btn-secondary:focus {
    color: #fff;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-check:active+.btn-secondary,
.btn-check:checked+.btn-secondary,
.btn-secondary.active,
.btn-secondary:active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #aab0bc;
    border-color: #959aa5
}

.btn-secondary.disabled:not(.btn-circle):not(.btn-block),
.btn-secondary:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-outline-secondary {
    color: #aab0bc;
    border-color: #aab0bc
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-check:focus+.btn-outline-secondary,
.btn-outline-secondary:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-secondary,
.btn-check:checked+.btn-outline-secondary,
.btn-outline-secondary.active,
.btn-outline-secondary.dropdown-toggle.show,
.btn-outline-secondary:active {
    color: #aab0bc;
    background-color: #aab0bc;
    border-color: #aab0bc
}

.btn-check:active+.btn-outline-secondary:focus,
.btn-check:checked+.btn-outline-secondary:focus,
.btn-outline-secondary.active:focus,
.btn-outline-secondary.dropdown-toggle.show:focus,
.btn-outline-secondary:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(170, 176, 188, .5)
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
    color: #aab0bc;
    background-color: transparent
}

.btn-success {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-success:hover {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:focus+.btn-success,
.btn-success:focus {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:active+.btn-success,
.btn-check:checked+.btn-success,
.btn-success.active,
.btn-success:active,
.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #45c4a0;
    border-color: #3cac8c
}

.btn-success.disabled:not(.btn-circle):not(.btn-block),
.btn-success:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-outline-success {
    color: #45c4a0;
    border-color: #45c4a0
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:focus+.btn-outline-success,
.btn-outline-success:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-success,
.btn-check:checked+.btn-outline-success,
.btn-outline-success.active,
.btn-outline-success.dropdown-toggle.show,
.btn-outline-success:active {
    color: #45c4a0;
    background-color: #45c4a0;
    border-color: #45c4a0
}

.btn-check:active+.btn-outline-success:focus,
.btn-check:checked+.btn-outline-success:focus,
.btn-outline-success.active:focus,
.btn-outline-success.dropdown-toggle.show:focus,
.btn-outline-success:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(69, 196, 160, .5)
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #45c4a0;
    background-color: transparent
}

.btn-info {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-info:hover {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:focus+.btn-info,
.btn-info:focus {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:active+.btn-info,
.btn-check:checked+.btn-info,
.btn-info.active,
.btn-info:active,
.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #54a8c7;
    border-color: #4a93ae
}

.btn-info.disabled:not(.btn-circle):not(.btn-block),
.btn-info:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-outline-info {
    color: #54a8c7;
    border-color: #54a8c7
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:focus+.btn-outline-info,
.btn-outline-info:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-info,
.btn-check:checked+.btn-outline-info,
.btn-outline-info.active,
.btn-outline-info.dropdown-toggle.show,
.btn-outline-info:active {
    color: #54a8c7;
    background-color: #54a8c7;
    border-color: #54a8c7
}

.btn-check:active+.btn-outline-info:focus,
.btn-check:checked+.btn-outline-info:focus,
.btn-outline-info.active:focus,
.btn-outline-info.dropdown-toggle.show:focus,
.btn-outline-info:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(84, 168, 199, .5)
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #54a8c7;
    background-color: transparent
}

.btn-warning {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-warning:hover {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:focus+.btn-warning,
.btn-warning:focus {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:active+.btn-warning,
.btn-check:checked+.btn-warning,
.btn-warning.active,
.btn-warning:active,
.show>.btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #fab758;
    border-color: #dba04d
}

.btn-warning.disabled:not(.btn-circle):not(.btn-block),
.btn-warning:disabled:not(.btn-circle):not(.btn-block) {
    color: #343f52;
    background-color: #fab758;
    border-color: #fab758
}

.btn-outline-warning {
    color: #fab758;
    border-color: #fab758
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:focus+.btn-outline-warning,
.btn-outline-warning:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-warning,
.btn-check:checked+.btn-outline-warning,
.btn-outline-warning.active,
.btn-outline-warning.dropdown-toggle.show,
.btn-outline-warning:active {
    color: #fab758;
    background-color: #fab758;
    border-color: #fab758
}

.btn-check:active+.btn-outline-warning:focus,
.btn-check:checked+.btn-outline-warning:focus,
.btn-outline-warning.active:focus,
.btn-outline-warning.dropdown-toggle.show:focus,
.btn-outline-warning:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(250, 183, 88, .5)
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #fab758;
    background-color: transparent
}

.btn-danger {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-danger:hover {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:focus+.btn-danger,
.btn-danger:focus {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:active+.btn-danger,
.btn-check:checked+.btn-danger,
.btn-danger.active,
.btn-danger:active,
.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #e2626b;
    border-color: #c6565e
}

.btn-danger.disabled:not(.btn-circle):not(.btn-block),
.btn-danger:disabled:not(.btn-circle):not(.btn-block) {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-outline-danger {
    color: #e2626b;
    border-color: #e2626b
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:focus+.btn-outline-danger,
.btn-outline-danger:focus {
    box-shadow: none
}

.btn-check:active+.btn-outline-danger,
.btn-check:checked+.btn-outline-danger,
.btn-outline-danger.active,
.btn-outline-danger.dropdown-toggle.show,
.btn-outline-danger:active {
    color: #e2626b;
    background-color: #e2626b;
    border-color: #e2626b
}

.btn-check:active+.btn-outline-danger:focus,
.btn-check:checked+.btn-outline-danger:focus,
.btn-outline-danger.active:focus,
.btn-outline-danger.dropdown-toggle.show:focus,
.btn-outline-danger:active:focus {
    box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .15), 0 0 0 .25rem rgba(226, 98, 107, .5)
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #e2626b;
    background-color: transparent
}

.btn-outline-white:hover,
.btn-white,
.btn-white.btn-play:hover,
.btn-white:focus,
.btn-white:not(.btn-play):hover {
    color: #3f78e0
}

.btn-soft-blue {
    background-color: #e0e9fa;
    color: #3f78e0;
    border-color: transparent
}

.btn-soft-blue:focus,
.btn-soft-blue:hover {
    background-color: #e0e9fa;
    color: #3f78e0;
    border-color: transparent
}

.btn-soft-sky {
    background-color: #e5f4fd;
    color: #5eb9f0;
    border-color: transparent
}

.btn-soft-sky:focus,
.btn-soft-sky:hover {
    background-color: #e5f4fd;
    color: #5eb9f0;
    border-color: transparent
}

.btn-soft-purple {
    background-color: #e9eaf8;
    color: #747ed1;
    border-color: transparent
}

.btn-soft-purple:focus,
.btn-soft-purple:hover {
    background-color: #e9eaf8;
    color: #747ed1;
    border-color: transparent
}

.btn-soft-grape {
    background-color: #e6e5f4;
    color: #605dba;
    border-color: transparent
}

.btn-soft-grape:focus,
.btn-soft-grape:hover {
    background-color: #e6e5f4;
    color: #605dba;
    border-color: transparent
}

.btn-soft-violet {
    background-color: #f0eaf6;
    color: #a07cc5;
    border-color: transparent
}

.btn-soft-violet:focus,
.btn-soft-violet:hover {
    background-color: #f0eaf6;
    color: #a07cc5;
    border-color: transparent
}

.btn-soft-pink {
    background-color: #f8e7ec;
    color: #d16b86;
    border-color: transparent
}

.btn-soft-pink:focus,
.btn-soft-pink:hover {
    background-color: #f8e7ec;
    color: #d16b86;
    border-color: transparent
}

.btn-soft-fuchsia {
    background-color: #fbe7f3;
    color: #e668b3;
    border-color: transparent
}

.btn-soft-fuchsia:focus,
.btn-soft-fuchsia:hover {
    background-color: #fbe7f3;
    color: #e668b3;
    border-color: transparent
}

.btn-soft-red {
    background-color: #fae6e7;
    color: #e2626b;
    border-color: transparent
}

.btn-soft-red:focus,
.btn-soft-red:hover {
    background-color: #fae6e7;
    color: #e2626b;
    border-color: transparent
}

.btn-soft-orange {
    background-color: #feece9;
    color: #f78b77;
    border-color: transparent
}

.btn-soft-orange:focus,
.btn-soft-orange:hover {
    background-color: #feece9;
    color: #f78b77;
    border-color: transparent
}

.btn-soft-yellow {
    background-color: #fef3e4;
    color: #fab758;
    border-color: transparent
}

.btn-soft-yellow:focus,
.btn-soft-yellow:hover {
    background-color: #fef3e4;
    color: #fab758;
    border-color: transparent
}

.btn-soft-green {
    background-color: #e1f6f0;
    color: #45c4a0;
    border-color: transparent
}

.btn-soft-green:focus,
.btn-soft-green:hover {
    background-color: #e1f6f0;
    color: #45c4a0;
    border-color: transparent
}

.btn-soft-leaf {
    background-color: #eaf3ef;
    color: #7cb798;
    border-color: transparent
}

.btn-soft-leaf:focus,
.btn-soft-leaf:hover {
    background-color: #eaf3ef;
    color: #7cb798;
    border-color: transparent
}

.btn-soft-aqua {
    background-color: #e4f1f6;
    color: #54a8c7;
    border-color: transparent
}

.btn-soft-aqua:focus,
.btn-soft-aqua:hover {
    background-color: #e4f1f6;
    color: #54a8c7;
    border-color: transparent
}

.btn-soft-navy {
    background-color: #dfe0e3;
    color: #343f52;
    border-color: transparent
}

.btn-soft-navy:focus,
.btn-soft-navy:hover {
    background-color: #dfe0e3;
    color: #343f52;
    border-color: transparent
}

.btn-soft-ash {
    background-color: #eeeff0;
    color: #9499a3;
    border-color: transparent
}

.btn-soft-ash:focus,
.btn-soft-ash:hover {
    background-color: #eeeff0;
    color: #9499a3;
    border-color: transparent
}

.btn-soft-dark {
    background-color: #dcddde;
    color: #262b32;
    border-color: transparent
}

.btn-soft-dark:focus,
.btn-soft-dark:hover {
    background-color: #dcddde;
    color: #262b32;
    border-color: transparent
}

.btn-soft-primary {
    background-color: #e0e9fa;
    color: #3f78e0;
    border-color: transparent
}

.btn-soft-primary:focus,
.btn-soft-primary:hover {
    background-color: #e0e9fa;
    color: #3f78e0;
    border-color: transparent
}

.btn-soft-ash {
    background-color: rgba(164, 174, 198, .2);
    color: #343f52
}

.btn-soft-ash:hover {
    background-color: rgba(164, 174, 198, .2);
    color: #343f52
}

.btn-gradient {
    color: #fff !important;
    border: 0;
    padding-top: .6rem;
    padding-bottom: .6rem
}

.btn-gradient.btn-sm,
.btn-group-sm>.btn-gradient.btn {
    padding-top: .5rem;
    padding-bottom: .5rem
}

.btn-gradient.btn-lg,
.btn-group-lg>.btn-gradient.btn {
    padding-top: .75rem;
    padding-bottom: .75rem
}

.gradient-1 {
    background-image: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%)
}

.gradient-1.btn-outline-gradient,
.gradient-1.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%)
}

.gradient-2 {
    background-image: linear-gradient(40deg, #f5b161 .4%, #ec366e 100.2%)
}

.gradient-2.btn-outline-gradient,
.gradient-2.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(40deg, #f5b161 .4%, #ec366e 100.2%)
}

.gradient-3 {
    background-image: linear-gradient(45deg, #fbda61 0, #ff5acd 100%)
}

.gradient-3.btn-outline-gradient,
.gradient-3.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(45deg, #fbda61 0, #ff5acd 100%)
}

.gradient-4 {
    background-image: linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f)
}

.gradient-4.btn-outline-gradient,
.gradient-4.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f)
}

.gradient-5 {
    background-image: linear-gradient(43deg, #4158d0e6 0, #c850c0d6 46%, #ffcC70DE 100%)
}

.gradient-5.btn-outline-gradient,
.gradient-5.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(43deg, #4158d0 0, #c850c0 46%, #ffcc70 100%)
}

.gradient-6 {
    background-image: linear-gradient(45deg, #08aeea 0, #2af598 100%)
}

.gradient-6.btn-outline-gradient,
.gradient-6.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(45deg, #08aeea 0, #2af598 100%)
}

.gradient-7 {
    background-image: linear-gradient(100deg, #0093e9 0, #80d0c7 95%)
}

.gradient-7.btn-outline-gradient,
.gradient-7.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(100deg, #0093e9 0, #80d0c7 95%)
}

.gradient-8 {
    background-image: linear-gradient(45deg, #ffdee9, #b5fffc)
}

.gradient-8.btn-outline-gradient,
.gradient-8.btn-outline-gradient span {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), linear-gradient(45deg, #ffdee9, #b5fffc)
}

.gradient-6,
.gradient-7 {
    background-size: 130% auto
}

.btn-outline-gradient {
    border: 2px solid transparent;
    background-origin: border-box;
    background-clip: content-box, border-box;
    box-shadow: 2px 1000px 1px #fff inset;
    padding: .5rem 1.1rem
}

.btn-group-sm>.btn-outline-gradient.btn:not(.btn-circle),
.btn-outline-gradient.btn-sm:not(.btn-circle) {
    padding: .4rem .9rem
}

.btn-group-lg>.btn-outline-gradient.btn,
.btn-outline-gradient.btn-lg {
    padding: .65rem 1.3rem
}

.btn-outline-gradient span {
    color: #343f52 !important;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent
}

.btn-outline-gradient:focus,
.btn-outline-gradient:hover {
    border-color: transparent
}

.btn-outline-gradient:focus span,
.btn-outline-gradient:hover span {
    color: #fff !important;
    background: 0 0;
    -webkit-background-clip: unset;
    -webkit-text-fill-color: unset
}

.btn-link {
    font-weight: 500;
    color: var(--bs-link-color);
    text-decoration: none
}

.btn-link:hover {
    color: var(--bs-link-hover-color)
}

.btn-link.disabled,
.btn-link:disabled {
    color: #60697b
}

.btn-group-lg>.btn,
.btn-lg {
    --bs-btn-padding-y: 0.65rem;
    --bs-btn-padding-x: 1.4rem;
    --bs-btn-font-size: 0.85rem;
    --bs-btn-border-radius: 0.4rem
}

.btn-group-sm>.btn,
.btn-sm {
    --bs-btn-padding-y: 0.4rem;
    --bs-btn-padding-x: 1rem;
    --bs-btn-font-size: 0.7rem;
    --bs-btn-border-radius: 0.4rem
}

.btn-group-sm>.btn-icon.btn,
.btn-icon.btn-sm {
    padding-top: .3rem;
    padding-bottom: .3rem
}

.btn-group-sm>.btn-icon.btn i,
.btn-icon.btn-sm i {
    font-size: .8rem
}

.btn-icon.btn-icon-start i {
    margin-right: .3rem
}

.btn-icon.btn-icon-end i {
    margin-left: .3rem
}

.navigation .btn-icon i {
    font-size: .9rem
}

.navigation .btn-icon.btn-icon-start i {
    margin-right: .2rem
}

.navigation .btn-icon.btn-icon-end i {
    margin-left: .2rem
}

.navbar .btn-group-sm>.btn,
.navbar .btn-sm {
    font-size: .8rem
}

.social a:not(.btn-circle) {
    font-size: 1rem;
    transition: all .2s ease-in-out;
    transform: translateY(0)
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook-f] {
    color: #4470cf
}

.social a.btn-circle[class*=facebook-f] {
    color: #fff;
    background-color: #4470cf;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=instagram] {
    color: #d53581
}

.social a.btn-circle[class*=instagram] {
    color: #fff;
    background-color: #d53581;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=linkedin] {
    color: #3393c1
}

.social a.btn-circle[class*=linkedin] {
    color: #fff;
    background-color: #3393c1;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook] {
    color: #4470cf
}

.social a.btn-circle[class*=facebook] {
    color: #fff;
    background-color: #4470cf;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=twitter] {
    color: #5daed5
}

.social a.btn-circle[class*=twitter] {
    color: #fff;
    background-color: #5daed5;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=instagram-alt] {
    color: #d53581
}

.social a.btn-circle[class*=instagram-alt] {
    color: #fff;
    background-color: #d53581;
    border-color: transparent
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=linkedin-alt] {
    color: #3393c1
}

.social a:not([class*=link-]):not(.btn-circle) .uil[class*=twitter-alt] {
    color: #5daed5
}

.social a.btn-circle[class*=twitter-alt] {
    color: #fff;
    background-color: #5daed5;
    border-color: transparent
}

.social.social-muted a:not(.btn-circle):not([class*=link-]) i {
    color: #343f52 !important
}

.navbar-dark .social.social-muted a:not(.btn-circle):not([class*=link-]) i,
.navbar-dark .social.social-muted a:not(.btn-circle):not([class*=link-]) uıy:hover i,
.social.social-white a i,
.social.social-white a:hover i {
    color: #fff !important
}

.social>a {
    margin: 0 .7rem 0 0
}

.social[class*=text-end]>a,
[class*=text-end] .social>a {
    margin: 0 0 0 .7rem
}

@media (min-width:768px) {

    .social[class*=text-md-end]>a,
    [class*=text-md-end] .social>a {
        margin: 0 0 0 .7rem
    }
}

.social.text-center>a,
.text-center .social>a {
    margin: 0 .35rem
}

.avatar {
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    line-height: 1.7;
    letter-spacing: -.01rem;
    border-radius: 100%;
    height: auto
}

.bg-dark>.swiper-hero:before,
.gloader {
    border-color: #fff
}

:root {
    --animate-delay: 0.5s
}

.transition-none {
    transition: none
}

.dropdown-menu {
    border: 0
}

.dropdown-item {
    font-weight: 700;
    letter-spacing: -.01rem
}

.dropdown-item:focus,
.dropdown-item:hover {
    outline: 0
}

.dropdown-header {
    padding-top: 0;
    text-transform: uppercase;
    letter-spacing: .02rem
}

.navbar .dropdown-menu[data-bs-popper] {
    margin-top: 0
}

@media (max-width:991.98px) {
    .navbar-expand-lg .offcanvas-nav {
        overflow-x: hidden;
        overflow-y: auto;
        flex-direction: column
    }

    .navbar-expand-lg .offcanvas-nav .offcanvas-body,
    .navbar-expand-lg .offcanvas-nav .offcanvas-footer,
    .navbar-expand-lg .offcanvas-nav .offcanvas-header {
        width: 100%
    }

    .navbar-expand-lg .offcanvas-nav .offcanvas-body {
        overflow-y: unset;
        flex-grow: 0
    }

    .navbar-expand-lg .navbar-collapse .dropdown-menu {
        padding: 0;
        margin-top: 0;
        background: 0 0
    }

    .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item {
        color: #fff;
        padding-left: 1rem;
        padding-top: .3rem;
        padding-bottom: .3rem
    }

    .navbar-expand-lg .navbar-collapse .nav-link,
    .navbar-expand-lg .navbar-collapse .nav-link.active,
    .navbar-expand-lg .navbar-collapse .nav-link:focus,
    .navbar-expand-lg .navbar-collapse .nav-link:hover,
    .navbar-expand-lg .navbar-collapse .show>.nav-link {
        color: #fff !important
    }

    .navbar-expand-lg .navbar-collapse .nav-link {
        padding-top: .3rem;
        padding-bottom: .3rem
    }

    .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
        position: absolute;
        margin-right: 0;
        right: -.25rem;
        top: .35rem;
        font-size: .9rem
    }

    .navbar-expand-lg .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
        top: .3rem
    }

    .navbar-expand-lg .dropdown-header {
        padding-left: 1rem;
        padding-right: 1rem;
        margin-top: .5rem
    }

    .navbar-expand-lg .dropend .dropdown-toggle:after,
    .navbar-expand-lg .dropstart .dropdown-toggle:after {
        content: "\e92d" !important
    }

    .navbar-expand-lg .dropstart .dropdown-menu[data-bs-popper] {
        margin-right: 0;
        margin-left: .75rem
    }

    .navbar-expand-lg .dropdown-toggle:after {
        top: .25rem !important
    }

    .navbar-expand-lg .language-select .dropdown-toggle:after {
        vertical-align: 0 !important
    }

    .navbar-expand-lg .navbar-other .nav-item .nav-link>i {
        font-size: calc(1.255rem + .06vw)
    }
}

@media (max-width:991.98px) and (min-width:1200px) {
    .navbar-expand-lg .navbar-other .nav-item .nav-link>i {
        font-size: 1.3rem
    }
}

@media (max-width:991.98px) {
    .navbar-expand-lg .navbar-brand {
        padding-top: 1.2rem;
        padding-bottom: 1.2rem
    }
}

@media (max-width:991.98px) {
    .navbar-expand-lg.fancy .navbar-collapse-wrapper {
        background: 0 0 !important;
        box-shadow: none !important
    }
}

@media (max-width:991.98px) {
    .navbar-expand-lg.center-logo.fixed .offcanvas-header .logo-light {
        display: inline-block
    }

    .navbar-expand-lg.center-logo.fixed .offcanvas-header .logo-dark {
        display: none
    }
}

@media (max-width:991.98px) {
    .navbar-expand-lg .nav-item.parent-link .dropdown-toggle {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }
}

@media (min-width:992px) {
    .navbar-expand-lg.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
        color: #3f78e0
    }

    .navbar-expand-lg .dropdown-mega,
    .navbar-expand-lg .navbar-nav {
        position: static !important
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg {
        padding: 1.6rem .25rem 1.3rem .25rem
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
        display: flex;
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
        padding-top: 0
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu:before {
        position: absolute;
        top: -1rem;
        left: -1rem;
        width: 100%;
        height: 100%;
        content: "";
        display: block;
        z-index: -1
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu .dropdown-toggle:after {
        position: absolute;
        margin-right: 0;
        right: 1rem;
        top: .15rem;
        font-size: .85rem
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu.mega-menu {
        margin-left: .75rem !important;
        margin-right: .75rem !important
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-menu {
        top: 120%;
        visibility: hidden;
        pointer-events: none;
        opacity: 0;
        display: block
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
        top: 100%;
        pointer-events: all;
        visibility: visible;
        opacity: 1;
        transition: all .25s ease-in-out
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu {
        position: relative
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
        top: 30%
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
        position: absolute;
        left: -1rem;
        width: 100%;
        height: 100%;
        content: "";
        display: block;
        z-index: -1
    }

    .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
        top: 0;
        pointer-events: all;
        visibility: visible;
        opacity: 1;
        transition: all .25s ease-in-out
    }

    .navbar-expand-lg .dropend>.dropdown-menu {
        margin-left: .5rem
    }

    .navbar-expand-lg .dropstart>.dropdown-menu {
        margin-right: .5rem
    }

    .navbar-expand-lg .offcanvas-nav {
        position: unset;
        flex-direction: row
    }

    .navbar-expand-lg .offcanvas-nav.offcanvas-end,
    .navbar-expand-lg .offcanvas-nav.offcanvas-start {
        width: 100%
    }

    .navbar-expand-lg.extended.navbar-bg-light:not(.fixed),
    .navbar-expand-lg.fancy.navbar-bg-light:not(.fixed) {
        background: 0 0 !important
    }

    .navbar-expand-lg.extended:not(.fixed) .navbar-collapse .nav-link {
        padding-top: 1.15rem;
        padding-bottom: 1.15rem
    }

    .navbar-expand-lg.fancy:not(.fixed) .navbar-collapse .nav-link {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
    }

    .navbar-expand-lg[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
        padding-top: 1.7rem;
        padding-bottom: 1.7rem
    }

    .navbar-expand-lg.transparent:not(.fixed) {
        padding-top: .3rem
    }

    .navbar-expand-lg.extended .navbar-collapse-wrapper,
    .navbar-expand-lg.fancy .navbar-collapse-wrapper {
        box-shadow: 0 .25rem .75rem rgba(30, 34, 40, .02);
        width: 100%;
        border-radius: .4rem
    }

    .navbar-expand-lg.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
        padding: 0 1.5rem 0 .5rem
    }

    .navbar-expand-lg.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
        padding: 0 1.5rem
    }

    .navbar-expand-lg.fancy:not(.fixed) .navbar-collapse-wrapper {
        padding: 0 1.5rem 0 1.5rem;
        margin-top: 2.25rem
    }

    .navbar-expand-lg.extended:not(.extended-alt) .navbar-brand {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem
    }

    .navbar-expand-lg.extended.extended-alt .navbar-brand {
        padding-top: 1.75rem;
        padding-bottom: 1.75rem
    }

    .navbar-expand-lg.fixed .topbar {
        display: none !important
    }

    .navbar-expand-lg.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
    .navbar-expand-lg.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
    .navbar-expand-lg.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
        margin-top: .5rem
    }

    .navbar-expand-lg .navbar-collapse .nav-link {
        white-space: nowrap
    }

    .navbar-expand-lg .navbar-collapse .nav-item.parent-link {
        display: flex;
        flex-direction: row;
        align-items: center
    }

    .navbar-expand-lg .navbar-collapse .nav-item.parent-link .nav-link:first-child {
        padding-right: 0 !important
    }

    .navbar-expand-lg .navbar-collapse .nav-item.parent-link .dropdown-toggle {
        padding-left: 0 !important
    }

    .navbar-expand-lg .dropdown-lg-content>div+div,
    .navbar-expand-lg .mega-menu-content>.row>[class*=col-]+[class*=col-] {
        border-left: 1px solid rgba(164, 174, 198, .2)
    }

    .navbar-expand-lg .mega-menu-content {
        padding: .6rem .25rem .2rem
    }

    .navbar-expand-lg .mega-menu-dark {
        background: #2e353e
    }

    .navbar-expand-lg .mega-menu-dark .img-svg {
        background: rgba(255, 255, 255, .05);
        transition: all .2s ease-in-out
    }

    .navbar-expand-lg .mega-menu-dark .img-svg:hover {
        background: rgba(255, 255, 255, .09)
    }

    .navbar-expand-lg .mega-menu-dark .dropdown-item {
        color: #fff
    }

    .navbar-expand-lg .mega-menu-dark .dropdown-item:focus,
    .navbar-expand-lg .mega-menu-dark .dropdown-item:hover {
        color: #fff
    }

    .navbar-expand-lg .mega-menu-img {
        padding: 0 !important
    }

    .navbar-expand-lg .mega-menu-img .mega-menu-content {
        padding: .2rem 2rem !important;
        margin: 1.8rem 0 !important
    }

    .navbar-expand-lg .mega-menu-img .dropdown-item {
        padding-left: 0;
        padding-right: 0
    }

    .navbar-expand-lg.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
        display: none
    }
}

.dropdown-mega .dropdown-menu {
    left: 0 !important;
    right: 0 !important;
    width: auto !important;
    max-width: none !important
}

@media (min-width:992px) {
    .mega-menu-scroll {
        overflow-y: scroll
    }

    .mega-menu-scroll>span {
        font-size: .7rem;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: auto;
        position: absolute;
        bottom: .3rem;
        left: 0;
        text-align: center;
        color: #cacaca
    }

    .mega-menu-scroll>span i {
        font-size: 1rem
    }
}

@media (min-width:1400px) {
    .mega-menu-scroll {
        height: 30.6rem
    }
}

@media (min-width:1200px) and (max-width:1399.98px) {
    .mega-menu-scroll {
        height: 26.2rem
    }
}

@media (min-width:992px) and (max-width:1199.98px) {
    .mega-menu-scroll {
        height: 21.8rem
    }
}

.dropend>.dropdown-menu {
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0
}

.dropstart>.dropdown-menu {
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0
}

.dropdown-toggle:focus {
    outline: 0
}

.dropdown-toggle:after {
    font-size: .85rem;
    margin-right: -.25rem
}

.navbar-nav .dropdown.dropstart>.dropdown-toggle:after {
    border: 0;
    content: "\e931"
}

.nav-link {
    --bs-nav-link-font-weight: 700;
    letter-spacing: -.01rem
}

.sidebar .nav-link {
    letter-spacing: normal
}

.navbar-other .nav-link {
    cursor: pointer
}

@media (min-width:992px) and (max-width:1199.98px) {
    .navbar .navbar-collapse .nav-link {
        padding-right: .6rem;
        padding-left: .6rem
    }
}

.tab-content {
    margin-top: 1.25rem
}

header {
    position: relative
}

.navbar {
    width: 100%;
    z-index: 1020
}

.navbar .container {
    position: relative
}

.navbar .navbar-collapse {
    align-items: center
}

.navbar.transparent .logo-dark {
    display: none
}

.navbar.transparent.fixed .logo-light {
    display: none
}

.navbar.transparent.fixed .logo-dark {
    display: inline-block
}

.navbar.navbar-dark .logo-dark {
    display: none
}

.navbar.navbar-light.fixed .logo-light {
    display: none
}

.navbar.navbar-light.fixed .logo-dark {
    display: inline-block
}

.navbar.navbar-bg-light {
    background: #fff;
    box-shadow: none
}

.navbar.navbar-bg-dark {
    background: #2f353a
}

.navbar .navbar-other .nav-item .nav-link {
    padding-top: 0 !important;
    padding-bottom: 0 !important
}

.navbar .navbar-other .nav-item .nav-link>i {
    font-size: 1.1rem
}

.navbar .navbar-other .navbar-nav>.nav-item .nav-link {
    padding-left: 0;
    padding-right: 0
}

.navbar .navbar-other .navbar-nav>.nav-item+.nav-item {
    margin-left: .8rem
}

.navbar.fixed:not(.extended) .topbar {
    display: none !important
}

.navbar.fixed .navbar-collapse-wrapper {
    background: 0 0 !important;
    box-shadow: none !important
}

.navbar-clone {
    position: fixed !important;
    z-index: 1008;
    top: 0;
    left: 0;
    transform: translateY(-100%);
    transition: all .3s ease-in-out, padding-right 0s
}

@media (prefers-reduced-motion:reduce) {
    .navbar-clone {
        transition: none
    }
}

.navbar-stick {
    transform: translateY(0)
}

.navbar-stick:not(.navbar-dark) {
    box-shadow: 0 0 1.25rem rgba(30, 34, 40, .06);
    background: rgba(255, 255, 255, .97)
}

button.hamburger {
    cursor: pointer;
    background: 0 0;
    border: 0;
    padding: 0;
    margin: 0 0 0 .2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #343f52;
    transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    button.hamburger {
        transition: none
    }
}

button.hamburger::-moz-focus-inner {
    padding: 0;
    border: 0
}

button.hamburger:focus {
    outline: 0
}

button.hamburger:after,
button.hamburger:before {
    content: ""
}

button.hamburger span,
button.hamburger:after,
button.hamburger:before {
    width: 1.2rem;
    height: .15rem;
    transition: all .2s ease-in-out;
    background: currentColor;
    border-radius: 2rem
}

@media (prefers-reduced-motion:reduce) {

    button.hamburger span,
    button.hamburger:after,
    button.hamburger:before {
        transition: none
    }
}

button.hamburger span,
button.hamburger:before {
    margin: 0 0 .25rem
}

.navbar.navbar-bg-dark button.hamburger,
.navbar.navbar-dark button.hamburger,
.navbar.position-absolute:not(.fixed):not(.navbar-light) button.hamburger {
    color: #fff
}

.card {
    box-shadow: 0 0 0 .05rem rgba(8, 60, 130, .06), 0 0 1.25rem rgba(30, 34, 40, .04);
    border: 0
}

.card[class*=bg-] {
    box-shadow: none !important
}

.card-img-top img {
    border-top-left-radius: .4rem;
    border-top-right-radius: .4rem
}

.card-img-top .plyr {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

@media (max-width:991.98px) {
    .card-md-none {
        background: 0 0;
        border-radius: 0
    }

    .card-md-none .card-body {
        padding: 0
    }
}

[class*=card-border-] {
    position: relative
}

[class*=card-border-]:after {
    content: "";
    position: absolute
}

.card-border-top:after {
    top: 0;
    right: 0;
    left: 0;
    border-top-width: 4px;
    border-bottom-width: calc(.4rem - 4px);
    border-top-style: solid;
    border-bottom-style: solid;
    border-top-color: inherit;
    border-bottom-color: transparent;
    border-top-left-radius: .4rem;
    border-top-right-radius: .4rem
}

.card-border-top[class*=border-soft-]:after {
    border-top-width: 6px;
    border-bottom-width: calc(.4rem - 6px)
}

.card-border-bottom:after {
    bottom: 0;
    right: 0;
    left: 0;
    border-bottom-width: 4px;
    border-top-width: calc(.4rem - 4px);
    border-bottom-style: solid;
    border-top-style: solid;
    border-bottom-color: inherit;
    border-top-color: transparent;
    border-bottom-left-radius: .4rem;
    border-bottom-right-radius: .4rem
}

.card-border-bottom[class*=border-soft-]:after {
    border-bottom-width: 6px;
    border-top-width: calc(.4rem - 6px)
}

.card-border-start:after {
    top: 0;
    left: 0;
    bottom: 0;
    border-left-width: 4px;
    border-right-width: calc(.4rem - 4px);
    border-left-style: solid;
    border-right-style: solid;
    border-left-color: inherit;
    border-right-color: transparent;
    border-top-left-radius: .4rem;
    border-bottom-left-radius: .4rem
}

.card-border-start[class*=border-soft-]:after {
    border-left-width: 6px;
    border-right-width: calc(.4rem - 6px)
}

.card-border-end:after {
    top: 0;
    right: 0;
    bottom: 0;
    border-right-width: 4px;
    border-left-width: calc(.4rem - 4px);
    border-right-style: solid;
    border-left-style: solid;
    border-right-color: inherit;
    border-left-color: transparent;
    border-top-right-radius: .4rem;
    border-bottom-right-radius: .4rem
}

.card-border-end[class*=border-soft-]:after {
    border-right-width: 6px;
    border-left-width: calc(.4rem - 6px)
}

.container-card>.card,
.container-card>.card.image-wrapper:before {
    border-radius: 0 !important
}

@media (min-width:1480px) {
    .container-card {
        max-width: 1470px;
        margin: 0 auto
    }

    .container-card>.card,
    .container-card>.card.image-wrapper:before {
        border-radius: .8rem !important
    }
}

.collapse-link {
    font-size: .85rem;
    font-weight: 700;
    color: #3f78e0
}

.collapse-link:before {
    font-family: Unicons;
    content: "\e932";
    font-size: 1.15rem;
    font-weight: 400;
    width: 1rem;
    margin-left: -.3rem;
    margin-right: .4rem;
    display: inline-block;
    vertical-align: -4px
}

.collapse-link.collapsed {
    color: #343f52
}

.collapse-link.collapsed:before {
    content: "\e92d"
}

.collapse-link:hover {
    color: #3f78e0
}

.progressbar.semi-circle {
    position: relative;
    margin: 0 auto 1rem;
    width: 8.5rem;
    height: 4.25rem
}

.progressbar.semi-circle .progressbar-text {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    margin: 0;
    font-size: 2rem;
    line-height: 1;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    color: #343f52 !important
}

.progressbar.semi-circle .progressbar-text:after {
    content: "%";
    display: block;
    font-size: 1rem;
    padding-left: .01rem;
    padding-bottom: .1rem
}

.progressbar svg path:first-child {
    stroke: rgba(30, 34, 40, 0.06)
}

.progressbar.fuchsia svg path:last-child {
    stroke: #e668b3
}

.progressbar.semi-circle.fuchsia svg path:first-child {
    stroke: rgba(230, 104, 179, 0.1)
}

.progressbar.orange svg path:last-child {
    stroke: #f78b77
}

.progressbar.semi-circle.orange svg path:first-child {
    stroke: rgba(247, 139, 119, 0.1)
}

@font-face {
    font-family: Unicons;
    src: url("../fonts/unicons/Unicons.woff2") format("woff2"), url("../fonts/unicons/Unicons.woff") format("woff");
    font-weight: 400;
    font-style: normal;
    font-display: swap
}

@font-face {
    font-family: Custom;
    src: url("../fonts/custom/Custom.woff2") format("woff2"), url("../fonts/custom/Custom.woff") format("woff");
    font-weight: 400;
    font-style: normal;
    font-display: swap
}

.btn-close {
    padding: 0 0;
    color: #343f52;
    background: 0 0;
    border: 0;
    line-height: 1;
    transition: all .2s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .btn-close {
        transition: none
    }
}

.btn-close:before {
    background: rgba(0, 0, 0, .08);
    font-family: Unicons;
    font-size: 1.05rem;
    content: "\ed3b";
    width: 1.8rem;
    height: 1.8rem;
    line-height: 1.8rem;
    border-radius: 100%;
    margin: 0;
    padding: 0;
    box-shadow: none;
    transition: background .2s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center
}

.btn-close:hover {
    color: #343f52;
    text-decoration: none
}

.btn-close:hover:before {
    background: rgba(0, 0, 0, .11)
}

.btn-close:focus {
    outline: 0
}

.btn-close.disabled,
.btn-close:disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    opacity: .25
}

.btn-close-white {
    color: #fff
}

.btn-close-white:before {
    background: rgba(255, 255, 255, .08)
}

.btn-close-white:hover {
    color: #fff
}

.btn-close-white:hover:before {
    background: rgba(255, 255, 255, .11)
}

.modal .btn-close {
    position: absolute;
    top: .7rem;
    right: .7rem
}

.modal.fade.modal-bottom-center .modal-dialog {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0
}

@media (min-width:576px) {
    .modal.fade.modal-bottom-center .modal-dialog {
        margin: 1.75rem auto
    }
}

@media (max-width:767.98px) {
    .modal.fade.modal-bottom-center .modal-dialog {
        width: calc(100% - 1rem)
    }
}

.tooltip {
    font-weight: 500;
    pointer-events: none
}

.swiper-container {
    -webkit-user-select: none;
    position: relative;
    z-index: 10 !important
}

.swiper-container.clients .swiper {
    display: flex;
    align-items: center
}

.swiper-container .swiper img {
    width: 100%;
    height: auto
}

@media (min-width:1400px) {
    .container-custom {
        max-width: 80%
    }
}

@media (min-width:1200px) {
    .container-custom {
        max-width: 90%
    }
}

#offcanvas-cart {
    width: 20rem
}

#offcanvas-search {
    bottom: auto;
    height: auto
}

#offcanvas-search .search-form:before {
    font-size: 1rem;
    color: #343f52;
    left: 0;
    right: auto
}

#offcanvas-search .search-form .form-control {
    font-size: .8rem;
    border: 0;
    background: 0 0;
    box-shadow: none;
    padding-left: 1.75rem;
    padding-right: .75rem !important
}

.offcanvas.bg-light {
    background: #fefefe;
    color: #60697b
}

.offcanvas-header {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    display: flex;
    flex-direction: row
}

.offcanvas-header .btn-close {
    margin: 0;
    padding: 0;
    margin-right: -.5rem
}

.offcanvas-header a:focus {
    outline: 0
}

.offcanvas-body {
    padding-top: 0;
    padding-bottom: 0
}

.offcanvas-nav .offcanvas-header .btn-close {
    margin-right: -.75rem
}

.offcanvas-nav .offcanvas-body {
    flex-grow: 0
}

.offcanvas:not(.offcanvas-nav) {
    overflow-y: auto
}

.offcanvas:not(.offcanvas-nav) .offcanvas-body {
    overflow-y: unset
}

.offcanvas-footer {
    display: flex;
    flex-shrink: 0;
    margin-top: auto;
    padding: 1.5rem 0
}

img.svg-inject {
    visibility: hidden
}

.icon-svg,
.icon-svg.icon-svg-lg {
    width: 3rem;
    height: 3rem
}

.icon-svg.icon-svg-md {
    width: 2.6rem;
    height: 2.6rem
}

.icon-svg.icon-svg-sm {
    width: 2.2rem;
    height: 2.2rem
}

.icon-svg.icon-svg-xs {
    width: 1.8rem;
    height: 1.8rem
}

.lineal-fill {
    fill: #8caeec
}

.lineal-stroke {
    fill: #36496d
}

.text-red .lineal-fill {
    fill: #eea1a6
}

.text-yellow .lineal-fill {
    fill: #fcd49b
}

.text-leaf .lineal-fill {
    fill: #b0d4c1
}

.text-primary .lineal-fill {
    fill: #8caeec
}

.solid-mono .fill-primary {
    fill: #3f78e0
}

.solid-mono .fill-secondary {
    fill: #c5d7f6
}

.solid-mono.text-primary .fill-primary {
    fill: #3f78e0
}

.solid-mono.text-primary .fill-secondary {
    fill: #c5d7f6
}

[class*=" icn-"],
[class*=" uil-"],
[class^=icn-],
[class^=uil-] {
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    word-spacing: normal
}

[class*=" uil-"],
[class^=uil-] {
    font-family: Unicons !important
}

.counter-wrapper p {
    margin-bottom: 0;
    font-size: .8rem;
    font-weight: 500
}

.counter-wrapper .counter {
    font-size: calc(1.325rem + .9vw);
    letter-spacing: normal;
    line-height: 1;
    margin-bottom: .5rem
}

@media (min-width:1200px) {
    .counter-wrapper .counter {
        font-size: 2rem
    }
}

.counter-wrapper .card-body {
    padding: 1.5rem
}

body,
html {
    height: 100%
}

body {
    display: flex;
    flex-direction: column
}

.content-wrapper,
footer {
    flex-shrink: 0
}

.content-wrapper {
    flex-grow: 1
}

.lift {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    transform: translateY(0);
    transition: all .3s ease
}

.lift:hover {
    transform: translateY(-.4rem);
    box-shadow: 0 .25rem 1.25rem rgba(52, 63, 82, .1)
}

@media (min-width:992px) {
    .process-wrapper.line [class*=col-] {
        position: relative
    }

    .process-wrapper.line [class*=col-]:after {
        width: 100%;
        position: absolute;
        content: "";
        height: 1px;
        background: 0 0;
        border-top: 1px solid rgba(164, 174, 198, .2);
        top: 1.5rem;
        z-index: 1;
        left: 3rem
    }

    .process-wrapper.line [class*=col-]:last-child:after {
        display: none
    }

    .process-wrapper.line.text-center [class*=col-]:after,
    .process-wrapper.line.text-center [class*=col-]:before {
        width: 50%;
        position: absolute;
        content: "";
        height: 1px;
        background: rgba(164, 174, 198, .2);
        border: 0;
        top: 1.5rem;
        z-index: 1;
        left: 0
    }

    .process-wrapper.line.text-center [class*=col-]:after {
        right: 0;
        left: auto
    }

    .process-wrapper.line.text-center [class*=col-]:first-child:before,
    .process-wrapper.line.text-center [class*=col-]:last-child:after {
        display: none
    }

    .process-wrapper.arrow [class*=col-] {
        position: relative
    }

    .process-wrapper.arrow [class*=col-]:before {
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 108.15 19.5'%3E%3Cpath fill='%233f78e0' d='M2.38,13.63A107.77,107.77,0,0,1,41.56,3.28C54.29,2.51,67,4.2,79.4,6.9c7.73,1.68,15.38,3.73,23,5.86a1.56,1.56,0,0,0,.83-3C89.85,6,76.35,2.5,62.54.87A111,111,0,0,0,24,2.73,119,119,0,0,0,.8,10.93c-1.81.85-.23,3.54,1.58,2.7Z'/%3E%3Cpath fill='%233f78e0' d='M95.51,19.27A60.35,60.35,0,0,1,107,12.41a1.58,1.58,0,0,0,1.12-1.29,1.53,1.53,0,0,0-.75-1.56,20.31,20.31,0,0,1-9-8.65,1.56,1.56,0,0,0-2.7,1.57c2.34,4,5.79,7.86,10.12,9.78l.37-2.86a62.69,62.69,0,0,0-12.25,7.18,1.6,1.6,0,0,0-.56,2.14,1.56,1.56,0,0,0,2.13.55Z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 70% 70%;
        position: absolute;
        width: 6rem;
        height: 1rem;
        top: .8rem;
        left: -3rem;
        z-index: 1;
        opacity: .15
    }

    .process-wrapper.arrow [class*=col-]:nth-child(odd):before {
        transform: scale(1, -1)
    }

    .process-wrapper.arrow [class*=col-]:first-child:before {
        display: none
    }
}

.process-wrapper.line .btn-circle {
    position: relative;
    z-index: 2
}

.image-wrapper {
    background: no-repeat center center;
    background-size: cover;
    position: relative;
    z-index: 0
}

.image-wrapper:not(.mobile) {
    background-attachment: fixed !important
}

.image-wrapper.bg-full {
    background-size: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: scroll !important
}

@media (max-width:991.98px) {
    .image-wrapper.bg-full {
        background-size: cover !important
    }
}

.image-wrapper.bg-cover {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: scroll !important
}

.image-wrapper.bg-overlay:before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    background: rgba(30, 34, 40, .5)
}

.image-wrapper.bg-overlay-300:before {
    background: rgba(30, 34, 40, .3)
}

.image-wrapper.bg-overlay.bg-content .content,
.image-wrapper.bg-overlay:not(.bg-content) * {
    position: relative;
    z-index: 2
}

.shape.rellax {
    position: absolute
}

.shape.rellax {
    z-index: 1
}

.position-relative .shape.rellax+figure {
    position: relative;
    z-index: 2
}

@media only screen and (min-width:768px) {
    .img-logo {
        width: 200px !important;
        margin-right: 3rem !important
    }
}

.error {
    color: red !important;
    padding: 1.6rem 1rem !important
}