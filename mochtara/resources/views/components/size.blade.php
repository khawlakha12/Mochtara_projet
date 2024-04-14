<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sizes</title>
    <style>
        @import 'https://unpkg.com/open-props' layer(design.system);
        @import 'https://unpkg.com/open-props/normalize.dark.min.css'
        layer(base.normalize);

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200..900&family=Pacifico&display=swap');

        @import 'https://www.unpkg.com/layout-craft@0.1.1/dist/utilities.css'
        layer(design.utilities);

        @layer base.normalize-overrides {
            :root {
                font-family: 'Inter', sans-serif;
                --surface-1: black;
                --surface-2: oklch(0.19 0 0);
                --text-1: white;

                --brand-1: oklch(0.65 0.24 16.93);
                --brand-2: oklch(0.77 0.1 90);
            }

        }

        @layer base.components {
            .Product {
                padding: var(--size-3);

                @media (width < 900px) {
                    grid-auto-flow: row;

                    .Visual {
                        inline-size: min(100%, 500px);
                    }
                }
            }

            .Form {
                & h3 {
                    max-inline-size: var(--size-content-1);
                    text-wrap: balance;
                }

                & fieldset {
                    padding: 0;
                    border: none;
                }

                & small {
                    max-inline-size: var(--size-content-3);
                }

                .Price {
                    font-weight: var(--font-weight-6);
                }
            }

            .TagList {
                --_gap: var(--size-1);

                max-inline-size: var(--size-content-2);

                &>legend {
                    margin-block-end: var(--size-2);
                }

                >.TagToggle {
                    box-shadow: var(--shadow-1);

                    >* {
                        grid-area: 1/1;
                    }

                    >label {
                        padding-inline: var(--size-3);
                        padding-block: var(--size-1);
                        border: var(--border-size-1) solid white;
                        border-radius: var(--radius-round);
                        cursor: pointer;
                        transition: 0.1s var(--ease-3);
                    }

                    >input {
                        appearance: none;
                        background: none;
                        border: none 1px solide #ffff;
                        inline-size: 100%;
                        block-size: 100%;
                        border-radius: var(--radius-round);

                        &:checked~label {
                            background-color: white;
                            color: var(--surface-1);
                        }

                        &:not(:checked):is(:focus-within, :hover)~label {
                            background-color: white;
                            color: var(--surface-1);
                        }
                    }
                }
            }

            .Visual {
                margin: 0;
                padding: 0;

                background: conic-gradient(from 90deg at 50% 0%,
                        hsl(0, 0%, 2%),
                        50%,
                        hsl(0, 0%, 8%),
                        hsl(0, 0%, 2%));
                border-radius: var(--radius-3);
                inline-size: 500px;

                aspect-ratio: var(--ratio-square);

                >picture {
                    transition: 0.1s ease;
                }

                >* {
                    grid-area: 1/1;
                }

                >picture {
                    animation: flip 2s step-end infinite;
                }

                >picture:last-child {
                    animation-delay: 1s;
                }

                &:hover>picture {
                    animation-play-state: paused;
                }
            }

            @keyframes flip {
                0% {
                    opacity: 0;
                    visibility: hidden;
                }

                50% {
                    opacity: 1;
                    visibility: visible;
                }

                100% {
                    opacity: 0;
                    visibility: hidden;
                }
            }

            .Button {
                font-size: var(--font-size-1);
                font-weight: var(--font-weight-6);
                padding: var(--size-2) var(--size-4);

                white-space: nowrap;
                cursor: not-allowed;

                border-radius: var(--radius-5);
                transition: background-color 0.2s ease;
            }

            .Form:valid {
                .Button.Primary {
                    background-color: var(--brand-1);
                    color: var(--text-1);
                    cursor: pointer;

                    &:hover {
                        background-color: oklch(0.72 0.24 17.52);
                    }
                }
            }
        }
    </style>
   
</head>
<body>

    <fieldset class="TagList inline-wrap gap-2">
        <div class="TagToggle block">
            <input type="radio" name="taglist-radio" value="size-s" id="taglist-radio-size-s" required />
            <label for="taglist-radio-size-s">S</label>
        </div>
        <div class="TagToggle block">
            <input type="radio" name="taglist-radio" value="size-m" id="taglist-radio-size-m" required />
            <label for="taglist-radio-size-m">M</label>
        </div>
        <div class="TagToggle block">
            <input type="radio" name="taglist-radio" value="size-l" id="taglist-radio-size-l" required />
            <label for="taglist-radio-size-l">L</label>
        </div>
        <div class="TagToggle block">
            <input type="radio" name="taglist-radio" value="size-xl" id="taglist-radio-size-xl" required />
            <label for="taglist-radio-size-xl">XL</label>
        </div>
        <div class="TagToggle block">
            <input type="radio" name="taglist-radio" value="size-2xl" id="taglist-radio-size-2xl" required />
            <label for="taglist-radio-size-2xl">2XL</label>
        </div>
    </fieldset>

</body>

</html>
