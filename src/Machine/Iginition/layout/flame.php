<!DOCTYPE html>
<html lang="en" class="black">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Hide dumps asap -->
    <style type="text/css">:root, :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa, svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }
        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }
        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }
        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }
        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }
        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }
        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }
        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }
        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }
        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }
        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter, .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }
        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }
        .fa-ul > li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {
            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s;
            }
        }
        @-webkit-keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }
        @keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }
        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }
            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }
            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }
            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }
            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }
        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }
            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }
            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }
            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }
            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }
        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }
        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }
        @-webkit-keyframes fa-beat-fade {
            0%, 100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }
        @keyframes fa-beat-fade {
            0%, 100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }
        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }
        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }
        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }
            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            8%, 24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }
            12%, 28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }
            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }
            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }
            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }
            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }
            40%, 100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }
        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }
            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            8%, 24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }
            12%, 28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }
            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }
            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }
            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }
            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }
            40%, 100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }
        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }
        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
    </style>
    <style type="text/css">:root, :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa, svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }
        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }
        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }
        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }
        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }
        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }
        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }
        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }
        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }
        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }
        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter, .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }
        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }
        .fa-ul > li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0);
            animation-delay: var(--fa-animation-delay, 0);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {
            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s;
            }
        }
        @-webkit-keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }
        @keyframes fa-beat {
            0%, 90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }
        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }
            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }
            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }
            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }
            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }
        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }
            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }
            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }
            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }
            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }
        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }
        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }
        @-webkit-keyframes fa-beat-fade {
            0%, 100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }
        @keyframes fa-beat-fade {
            0%, 100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }
        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }
        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }
        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }
            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            8%, 24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }
            12%, 28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }
            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }
            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }
            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }
            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }
            40%, 100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }
        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }
            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }
            8%, 24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }
            12%, 28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }
            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }
            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }
            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }
            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }
            40%, 100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }
        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }
        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
    </style>
    <style>
        pre.sf-dump {
            display: none !important;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">

    <style>
        /*! tailwindcss v3.0.15 | MIT License | https://tailwindcss.com*/
        *,:after,:before{box-sizing:border-box;border:0 solid #e5e7eb}:after,:before{--tw-content:""}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif,BlinkMacSystemFont,Helvetica Neue,Arial,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0}fieldset,legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input:-ms-input-placeholder,textarea:-ms-input-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:after,:before{--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-scroll-snap-strictness:proximity;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,0.5);--tw-ring-offset-shadow:0 0 transparent;--tw-ring-shadow:0 0 transparent;--tw-shadow:0 0 transparent;--tw-shadow-colored:0 0 transparent}html{font-size:max(13px,min(1.3vw,16px));overflow-x:hidden;overflow-y:scroll;font-feature-settings:"calt" 0;-webkit-marquee-increment:1vw}:after,:before,:not(iframe){position:relative}:focus{outline:0!important}body{font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif,BlinkMacSystemFont,Helvetica Neue,Arial,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5;width:100%;color:rgba(31,41,55,var(--tw-text-opacity))}.dark body,body{--tw-text-opacity:1}.dark body{color:rgba(229,231,235,var(--tw-text-opacity))}body{background-color:rgba(229,231,235,var(--tw-bg-opacity))}.dark body,body{--tw-bg-opacity:1}.dark body{background-color:rgba(17,24,39,var(--tw-bg-opacity))}@media (color-index:48){html.auto body{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity));--tw-bg-opacity:1;background-color:rgba(17,24,39,var(--tw-bg-opacity))}}@media (color:48842621){html.auto body{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity));--tw-bg-opacity:1;background-color:rgba(17,24,39,var(--tw-bg-opacity))}}@media (prefers-color-scheme:dark){html.auto body{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity));--tw-bg-opacity:1;background-color:rgba(17,24,39,var(--tw-bg-opacity))}}.scroll-target:target{content:"";display:block;position:absolute;top:-6rem}pre.sf-dump{display:block;white-space:pre;padding:5px;overflow:visible!important;overflow:initial!important}pre.sf-dump:after{content:"";visibility:hidden;display:block;height:0;clear:both}pre.sf-dump span{display:inline}pre.sf-dump a{text-decoration:none;cursor:pointer;border:0;outline:none;color:inherit}pre.sf-dump img{max-width:50em;max-height:50em;margin:.5em 0 0;padding:0;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #d3d3d3}pre.sf-dump .sf-dump-ellipsis{display:inline-block;overflow:visible;text-overflow:ellipsis;max-width:5em;white-space:nowrap;overflow:hidden;vertical-align:top}pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis{max-width:none}pre.sf-dump code{display:inline;padding:0;background:none}.sf-dump-key.sf-dump-highlight,.sf-dump-private.sf-dump-highlight,.sf-dump-protected.sf-dump-highlight,.sf-dump-public.sf-dump-highlight,.sf-dump-str.sf-dump-highlight{background:rgba(111,172,204,.3);border:1px solid #7da0b1;border-radius:3px}.sf-dump-key.sf-dump-highlight-active,.sf-dump-private.sf-dump-highlight-active,.sf-dump-protected.sf-dump-highlight-active,.sf-dump-public.sf-dump-highlight-active,.sf-dump-str.sf-dump-highlight-active{background:rgba(253,175,0,.4);border:1px solid orange;border-radius:3px}pre.sf-dump .sf-dump-search-hidden{display:none!important}pre.sf-dump .sf-dump-search-wrapper{font-size:0;white-space:nowrap;margin-bottom:5px;display:flex;position:-webkit-sticky;position:sticky;top:5px}pre.sf-dump .sf-dump-search-wrapper>*{vertical-align:top;box-sizing:border-box;height:21px;font-weight:400;border-radius:0;background:#fff;color:#757575;border:1px solid #bbb}pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{padding:3px;height:21px;font-size:12px;border-right:none;border-top-left-radius:3px;border-bottom-left-radius:3px;color:#000;min-width:15px;width:100%}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous{background:#f2f2f2;outline:none;border-left:none;font-size:0;line-height:0}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next{border-top-right-radius:3px;border-bottom-right-radius:3px}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next>svg,pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous>svg{pointer-events:none;width:12px;height:12px}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count{display:inline-block;padding:0 5px;margin:0;border-left:none;line-height:21px;font-size:12px}.hljs-comment,.hljs-quote{--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark .hljs-comment,.dark .hljs-quote{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}.hljs-comment.hljs-doctag{--tw-text-opacity:1;color:rgba(75,85,99,var(--tw-text-opacity))}.dark .hljs-comment.hljs-doctag{--tw-text-opacity:1;color:rgba(209,213,219,var(--tw-text-opacity))}.hljs-doctag,.hljs-formula,.hljs-keyword,.hljs-name{--tw-text-opacity:1;color:rgba(220,38,38,var(--tw-text-opacity))}.dark .hljs-doctag,.dark .hljs-formula,.dark .hljs-keyword,.dark .hljs-name{--tw-text-opacity:1;color:rgba(248,113,113,var(--tw-text-opacity))}.hljs-attr,.hljs-deletion,.hljs-function.hljs-keyword,.hljs-literal,.hljs-section,.hljs-selector-tag{--tw-text-opacity:1;color:rgba(139,92,246,var(--tw-text-opacity))}.hljs-addition,.hljs-attribute,.hljs-meta-string,.hljs-regexp,.hljs-string{--tw-text-opacity:1;color:rgba(37,99,235,var(--tw-text-opacity))}.dark .hljs-addition,.dark .hljs-attribute,.dark .hljs-meta-string,.dark .hljs-regexp,.dark .hljs-string{--tw-text-opacity:1;color:rgba(96,165,250,var(--tw-text-opacity))}.hljs-built_in,.hljs-class .hljs-title,.hljs-template-tag,.hljs-template-variable{--tw-text-opacity:1;color:rgba(249,115,22,var(--tw-text-opacity))}.hljs-number,.hljs-selector-attr,.hljs-selector-class,.hljs-selector-pseudo,.hljs-string.hljs-subst,.hljs-type{--tw-text-opacity:1;color:rgba(5,150,105,var(--tw-text-opacity))}.dark .hljs-number,.dark .hljs-selector-attr,.dark .hljs-selector-class,.dark .hljs-selector-pseudo,.dark .hljs-string.hljs-subst,.dark .hljs-type{--tw-text-opacity:1;color:rgba(52,211,153,var(--tw-text-opacity))}.hljs-bullet,.hljs-link,.hljs-meta,.hljs-operator,.hljs-selector-id,.hljs-symbol,.hljs-title,.hljs-variable{--tw-text-opacity:1;color:rgba(79,70,229,var(--tw-text-opacity))}.dark .hljs-bullet,.dark .hljs-link,.dark .hljs-meta,.dark .hljs-operator,.dark .hljs-selector-id,.dark .hljs-symbol,.dark .hljs-title,.dark .hljs-variable{--tw-text-opacity:1;color:rgba(129,140,248,var(--tw-text-opacity))}.hljs-strong,.hljs-title{font-weight:700}.hljs-emphasis{font-style:italic}.hljs-link{-webkit-text-decoration-line:underline;text-decoration-line:underline}.mask-fade-x{-webkit-mask-image:linear-gradient(90deg,transparent 0,#000 1rem,#000 calc(100% - 3rem),transparent calc(100% - 1rem))}.mask-fade-r{-webkit-mask-image:linear-gradient(90deg,#000 0,#000 calc(100% - 3rem),transparent calc(100% - 1rem))}.mask-fade-y{-webkit-mask-image:linear-gradient(180deg,#000 calc(100% - 2.5rem),transparent)}.mask-fade-frames{-webkit-mask-image:linear-gradient(180deg,#000 calc(100% - 4rem),transparent)}.scrollbar::-webkit-scrollbar,.scrollbar::-webkit-scrollbar-corner{width:2px;height:2px}.scrollbar::-webkit-scrollbar-track{background-color:transparent}.scrollbar::-webkit-scrollbar-thumb{background-color:rgba(94,103,249,.9)}.scrollbar-lg::-webkit-scrollbar,.scrollbar-lg::-webkit-scrollbar-corner{width:4px;height:4px}.scrollbar-lg::-webkit-scrollbar-track{background-color:transparent}.scrollbar-lg::-webkit-scrollbar-thumb{background-color:rgba(94,103,249,.9)}.scrollbar-hidden-x{-ms-overflow-style:none;scrollbar-width:none;overflow-x:scroll}.scrollbar-hidden-x::-webkit-scrollbar{display:none}.scrollbar-hidden-y{-ms-overflow-style:none;scrollbar-width:none;overflow-y:scroll}.scrollbar-hidden-y::-webkit-scrollbar{display:none}main pre.sf-dump{display:block!important;z-index:0!important;padding:0!important;font-size:.875rem!important;line-height:1.25rem!important}.sf-dump-key.sf-dump-highlight,.sf-dump-private.sf-dump-highlight,.sf-dump-protected.sf-dump-highlight,.sf-dump-public.sf-dump-highlight,.sf-dump-str.sf-dump-highlight{background-color:rgba(139,92,246,.1)!important}.sf-dump-key.sf-dump-highlight-active,.sf-dump-private.sf-dump-highlight-active,.sf-dump-protected.sf-dump-highlight-active,.sf-dump-public.sf-dump-highlight-active,.sf-dump-str.sf-dump-highlight-active{background-color:rgba(245,158,11,.1)!important}pre.sf-dump .sf-dump-search-wrapper{align-items:center}pre.sf-dump .sf-dump-search-wrapper>*{border-width:0!important}pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{font-size:.75rem!important;line-height:1rem!important;--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.dark pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{--tw-bg-opacity:1;background-color:rgba(31,41,55,var(--tw-bg-opacity))}pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{--tw-text-opacity:1;color:rgba(31,41,55,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity))}pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input{height:2rem!important;padding-left:.5rem!important;padding-right:.5rem!important}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous{background-color:transparent!important;--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,.dark pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next:hover,pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous:hover{--tw-text-opacity:1!important;color:rgba(99,102,241,var(--tw-text-opacity))!important}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous{padding-left:.25rem;padding-right:.25rem}pre.sf-dump .sf-dump-search-wrapper svg path{fill:currentColor}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count{font-size:.75rem!important;line-height:1rem!important;line-height:1.5!important;padding-left:1rem!important;padding-right:1rem!important;--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count{background-color:transparent!important}pre.sf-dump,pre.sf-dump .sf-dump-default{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace!important;background-color:transparent!important;--tw-text-opacity:1;color:rgba(31,41,55,var(--tw-text-opacity))}.dark pre.sf-dump,.dark pre.sf-dump .sf-dump-default{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity))}pre.sf-dump .sf-dump-num{--tw-text-opacity:1;color:rgba(5,150,105,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-num{--tw-text-opacity:1;color:rgba(52,211,153,var(--tw-text-opacity))}pre.sf-dump .sf-dump-const{font-weight:400!important;--tw-text-opacity:1!important;color:rgba(139,92,246,var(--tw-text-opacity))!important}pre.sf-dump .sf-dump-str{font-weight:400!important;--tw-text-opacity:1;color:rgba(37,99,235,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-str{--tw-text-opacity:1;color:rgba(96,165,250,var(--tw-text-opacity))}pre.sf-dump .sf-dump-note{--tw-text-opacity:1;color:rgba(79,70,229,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-note{--tw-text-opacity:1;color:rgba(129,140,248,var(--tw-text-opacity))}pre.sf-dump .sf-dump-ref{--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-ref{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}pre.sf-dump .sf-dump-private,pre.sf-dump .sf-dump-protected,pre.sf-dump .sf-dump-public{--tw-text-opacity:1;color:rgba(220,38,38,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-private,.dark pre.sf-dump .sf-dump-protected,.dark pre.sf-dump .sf-dump-public{--tw-text-opacity:1;color:rgba(248,113,113,var(--tw-text-opacity))}pre.sf-dump .sf-dump-meta{--tw-text-opacity:1;color:rgba(79,70,229,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-meta{--tw-text-opacity:1;color:rgba(129,140,248,var(--tw-text-opacity))}pre.sf-dump .sf-dump-key{--tw-text-opacity:1;color:rgba(124,58,237,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-key{--tw-text-opacity:1;color:rgba(167,139,250,var(--tw-text-opacity))}pre.sf-dump .sf-dump-index{--tw-text-opacity:1;color:rgba(5,150,105,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-index{--tw-text-opacity:1;color:rgba(52,211,153,var(--tw-text-opacity))}pre.sf-dump .sf-dump-ellipsis{--tw-text-opacity:1;color:rgba(124,58,237,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-ellipsis{--tw-text-opacity:1;color:rgba(167,139,250,var(--tw-text-opacity))}pre.sf-dump .sf-dump-toggle{--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark pre.sf-dump .sf-dump-toggle{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}pre.sf-dump .sf-dump-toggle:hover{--tw-text-opacity:1!important;color:rgba(99,102,241,var(--tw-text-opacity))!important}pre.sf-dump .sf-dump-toggle span{display:inline-flex!important;align-items:center!important;justify-content:center!important;width:1rem!important;height:1rem!important;font-size:9px;background-color:rgba(107,114,128,.05)}.dark pre.sf-dump .sf-dump-toggle span{background-color:rgba(0,0,0,.1)}pre.sf-dump .sf-dump-toggle span:hover{--tw-bg-opacity:1!important;background-color:rgba(255,255,255,var(--tw-bg-opacity))!important}.dark pre.sf-dump .sf-dump-toggle span:hover{--tw-bg-opacity:1!important;background-color:rgba(17,24,39,var(--tw-bg-opacity))!important}pre.sf-dump .sf-dump-toggle span{border-radius:9999px;--tw-shadow:0 1px 2px 0 rgba(0,0,0,0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)}pre.sf-dump .sf-dump-toggle span,pre.sf-dump .sf-dump-toggle span:hover{box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}pre.sf-dump .sf-dump-toggle span:hover{--tw-shadow:0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px -1px rgba(0,0,0,0.1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color);--tw-text-opacity:1!important;color:rgba(99,102,241,var(--tw-text-opacity))!important}pre.sf-dump .sf-dump-toggle span{top:-2px}pre.sf-dump .sf-dump-toggle:hover span{--tw-bg-opacity:1!important;background-color:rgba(255,255,255,var(--tw-bg-opacity))!important}.dark pre.sf-dump .sf-dump-toggle:hover span{--tw-bg-opacity:1!important;background-color:rgba(17,24,39,var(--tw-bg-opacity))!important}.\~text-gray-500{--tw-text-opacity:1;color:rgba(107,114,128,var(--tw-text-opacity))}.dark .\~text-gray-500{--tw-text-opacity:1;color:rgba(156,163,175,var(--tw-text-opacity))}.\~text-violet-500{--tw-text-opacity:1;color:rgba(139,92,246,var(--tw-text-opacity))}.dark .\~text-violet-500{--tw-text-opacity:1;color:rgba(167,139,250,var(--tw-text-opacity))}.\~text-gray-600{--tw-text-opacity:1;color:rgba(75,85,99,var(--tw-text-opacity))}.dark .\~text-gray-600{--tw-text-opacity:1;color:rgba(209,213,219,var(--tw-text-opacity))}.\~text-indigo-600{--tw-text-opacity:1;color:rgba(79,70,229,var(--tw-text-opacity))}.dark .\~text-indigo-600{--tw-text-opacity:1;color:rgba(129,140,248,var(--tw-text-opacity))}.hover\:\~text-indigo-600:hover{--tw-text-opacity:1;color:rgba(79,70,229,var(--tw-text-opacity))}.dark .hover\:\~text-indigo-600:hover{--tw-text-opacity:1;color:rgba(129,140,248,var(--tw-text-opacity))}.\~text-blue-600{--tw-text-opacity:1;color:rgba(37,99,235,var(--tw-text-opacity))}.dark .\~text-blue-600{--tw-text-opacity:1;color:rgba(96,165,250,var(--tw-text-opacity))}.\~text-violet-600{--tw-text-opacity:1;color:rgba(124,58,237,var(--tw-text-opacity))}.dark .\~text-violet-600{--tw-text-opacity:1;color:rgba(167,139,250,var(--tw-text-opacity))}.hover\:\~text-violet-600:hover{--tw-text-opacity:1;color:rgba(124,58,237,var(--tw-text-opacity))}.dark .hover\:\~text-violet-600:hover{--tw-text-opacity:1;color:rgba(196,181,253,var(--tw-text-opacity))}.\~text-emerald-600{--tw-text-opacity:1;color:rgba(5,150,105,var(--tw-text-opacity))}.dark .\~text-emerald-600{--tw-text-opacity:1;color:rgba(52,211,153,var(--tw-text-opacity))}.\~text-red-600{--tw-text-opacity:1;color:rgba(220,38,38,var(--tw-text-opacity))}.dark .\~text-red-600{--tw-text-opacity:1;color:rgba(248,113,113,var(--tw-text-opacity))}.\~text-orange-600{--tw-text-opacity:1;color:rgba(234,88,12,var(--tw-text-opacity))}.dark .\~text-orange-600{--tw-text-opacity:1;color:rgba(251,146,60,var(--tw-text-opacity))}.\~text-gray-700{--tw-text-opacity:1;color:rgba(55,65,81,var(--tw-text-opacity))}.dark .\~text-gray-700{--tw-text-opacity:1;color:rgba(209,213,219,var(--tw-text-opacity))}.\~text-indigo-700{--tw-text-opacity:1;color:rgba(67,56,202,var(--tw-text-opacity))}.dark .\~text-indigo-700{--tw-text-opacity:1;color:rgba(199,210,254,var(--tw-text-opacity))}.\~text-blue-700{--tw-text-opacity:1;color:rgba(29,78,216,var(--tw-text-opacity))}.dark .\~text-blue-700{--tw-text-opacity:1;color:rgba(191,219,254,var(--tw-text-opacity))}.\~text-violet-700{--tw-text-opacity:1;color:rgba(109,40,217,var(--tw-text-opacity))}.dark .\~text-violet-700{--tw-text-opacity:1;color:rgba(221,214,254,var(--tw-text-opacity))}.\~text-emerald-700{--tw-text-opacity:1;color:rgba(4,120,87,var(--tw-text-opacity))}.dark .\~text-emerald-700{--tw-text-opacity:1;color:rgba(167,243,208,var(--tw-text-opacity))}.\~text-red-700{--tw-text-opacity:1;color:rgba(185,28,28,var(--tw-text-opacity))}.dark .\~text-red-700{--tw-text-opacity:1;color:rgba(254,202,202,var(--tw-text-opacity))}.\~text-orange-700{--tw-text-opacity:1;color:rgba(194,65,12,var(--tw-text-opacity))}.dark .\~text-orange-700{--tw-text-opacity:1;color:rgba(254,215,170,var(--tw-text-opacity))}.\~text-gray-800{--tw-text-opacity:1;color:rgba(31,41,55,var(--tw-text-opacity))}.dark .\~text-gray-800{--tw-text-opacity:1;color:rgba(229,231,235,var(--tw-text-opacity))}.\~bg-white{--tw-bg-opacity:1;background-color:rgba(255,255,255,var(--tw-bg-opacity))}.dark .\~bg-white{--tw-bg-opacity:1;background-color:rgba(31,41,55,var(--tw-bg-opacity))}.\~bg-body{--tw-bg-opacity:1;background-color:rgba(229,231,235,var(--tw-bg-opacity))}.dark .\~bg-body{--tw-bg-opacity:1;background-color:rgba(17,24,39,var(--tw-bg-opacity))}.\~bg-gray-100{--tw-bg-opacity:1;background-color:rgba(243,244,246,var(--tw-bg-opacity))}.dark .\~bg-gray-100{--tw-bg-opacity:1;background-color:rgba(31,41,55,var(--tw-bg-opacity))}.\~bg-gray-200\/50{background-color:rgba(229,231,235,.5)}.dark .\~bg-gray-200\/50{background-color:rgba(55,65,81,.1)}.\~bg-gray-500\/5{background-color:rgba(107,114,128,.05)}.dark .\~bg-gray-500\/5{background-color:rgba(0,0,0,.1)}.hover\:\~bg-gray-500\/5:hover{background-color:rgba(107,114,128,.05)}.dark .hover\:\~bg-gray-500\/5:hover{background-color:rgba(17,24,39,.2)}.\~bg-gray-500\/10{background-color:rgba(107,114,128,.1)}.dark .\~bg-gray-500\/10{background-color:rgba(17,24,39,.4)}.\~bg-red-500\/10{background-color:rgba(94,103,249,.1)}.dark .\~bg-red-500\/10{background-color:rgba(94,103,249,.2)}.hover\:\~bg-red-500\/10:hover{background-color:rgba(94,103,249,.1)}.\~bg-red-500\/20,.dark .hover\:\~bg-red-500\/10:hover{background-color:rgba(94,103,249,.2)}.dark .\~bg-red-500\/20{background-color:rgba(94,103,249,.4)}.\~bg-red-500\/30{background-color:rgba(94,103,249,.3)}.dark .\~bg-red-500\/30{background-color:rgba(94,103,249,.6)}.\~bg-dropdown{--tw-bg-opacity:1!important;background-color:rgba(255,255,255,var(--tw-bg-opacity))!important}.dark .\~bg-dropdown{--tw-bg-opacity:1!important;background-color:rgba(55,65,81,var(--tw-bg-opacity))!important}.\~border-gray-200{--tw-border-opacity:1;border-color:rgba(229,231,235,var(--tw-border-opacity))}.dark .\~border-gray-200{border-color:rgba(107,114,128,.2)}.\~border-b-dropdown{--tw-border-opacity:1!important;border-bottom-color:rgba(255,255,255,var(--tw-border-opacity))!important}.dark .\~border-b-dropdown{--tw-border-opacity:1!important;border-bottom-color:rgba(55,65,81,var(--tw-border-opacity))!important}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0}.pointer-events-none{pointer-events:none}.static{position:static}.fixed{position:fixed}.absolute{position:absolute}.sticky{position:-webkit-sticky;position:sticky}.inset-0{right:0;left:0}.inset-0,.inset-y-0{top:0;bottom:0}.top-0{top:0}.left-0{left:0}.right-2{right:.5rem}.top-2\.5{top:.625rem}.top-2{top:.5rem}.top-10{top:2.5rem}.right-1\/2{right:50%}.right-0{right:0}.left-4{left:1rem}.left-1\/2{left:50%}.left-0\.5{left:.125rem}.top-0\.5{top:.125rem}.top-\[7\.5rem\]{top:7.5rem}.top-3{top:.75rem}.right-4{right:1rem}.-top-3{top:-.75rem}.-right-3{right:-.75rem}.right-3{right:.75rem}.-bottom-3{bottom:-.75rem}.left-10{left:2.5rem}.z-50{z-index:50}.z-10{z-index:10}.z-20{z-index:20}.z-30{z-index:30}.col-span-2{grid-column:span 2/span 2}.mx-auto{margin-left:auto;margin-right:auto}.my-20{margin-top:5rem;margin-bottom:5rem}.mx-0\.5{margin-left:.125rem;margin-right:.125rem}.mx-0{margin-left:0;margin-right:0}.-my-5{margin-top:-1.25rem;margin-bottom:-1.25rem}.my-4{margin-top:1rem;margin-bottom:1rem}.-my-px{margin-top:-1px;margin-bottom:-1px}.mr-0\.5{margin-right:.125rem}.mr-0{margin-right:0}.mt-1\.5{margin-top:.375rem}.mt-1{margin-top:.25rem}.-ml-3{margin-left:-.75rem}.-mr-3{margin-right:-.75rem}.mr-1\.5{margin-right:.375rem}.mr-1{margin-right:.25rem}.mt-2{margin-top:.5rem}.-ml-1{margin-left:-.25rem}.mr-2{margin-right:.5rem}.mb-1{margin-bottom:.25rem}.mt-3{margin-top:.75rem}.mb-2{margin-bottom:.5rem}.mr-10{margin-right:2.5rem}.ml-auto{margin-left:auto}.mb-4{margin-bottom:1rem}.-ml-6{margin-left:-1.5rem}.-mb-2{margin-bottom:-.5rem}.mr-4{margin-right:1rem}.mt-4{margin-top:1rem}.mt-\[-4px\]{margin-top:-4px}.ml-1\.5{margin-left:.375rem}.ml-1{margin-left:.25rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.contents{display:contents}.hidden{display:none}.h-20{height:5rem}.h-10{height:2.5rem}.h-2{height:.5rem}.h-0{height:0}.h-12{height:3rem}.h-4{height:1rem}.h-3{height:.75rem}.h-8{height:2rem}.h-6{height:1.5rem}.h-9{height:2.25rem}.h-full{height:100%}.h-\[4px\]{height:4px}.h-16{height:4rem}.h-5{height:1.25rem}.max-h-32{max-height:8rem}.max-h-\[33vh\]{max-height:33vh}.w-full{width:100%}.w-2{width:.5rem}.w-0{width:0}.w-6{width:1.5rem}.w-3{width:.75rem}.w-32{width:8rem}.w-9{width:2.25rem}.w-4{width:1rem}.w-8{width:2rem}.min-w-0{min-width:0}.min-w-\[8rem\]{min-width:8rem}.min-w-\[1rem\]{min-width:1rem}.max-w-4xl{max-width:56rem}.max-w-max{max-width:-webkit-max-content;max-width:-moz-max-content;max-width:max-content}.flex-none{flex:none}.flex-shrink-0{flex-shrink:0}.flex-grow{flex-grow:1}.origin-top-right{transform-origin:top right}.origin-bottom{transform-origin:bottom}.origin-top-left{transform-origin:top left}.translate-x-0{--tw-translate-x:0px}.translate-x-0,.translate-y-10{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-10{--tw-translate-y:2.5rem}.translate-y-0{--tw-translate-y:0px}.translate-x-6,.translate-y-0{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-x-6{--tw-translate-x:1.5rem}.-translate-x-6{--tw-translate-x:-1.5rem}.-translate-x-1\/2,.-translate-x-6{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-x-1\/2{--tw-translate-x:-50%}.rotate-180{--tw-rotate:180deg}.-rotate-180,.rotate-180{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-rotate-180{--tw-rotate:-180deg}.-rotate-90{--tw-rotate:-90deg}.-rotate-90,.scale-90{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.scale-90{--tw-scale-x:.9;--tw-scale-y:.9}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.select-none{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.grid-flow-col{grid-auto-flow:column}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.items-baseline{align-items:baseline}.items-stretch{align-items:stretch}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-10{gap:2.5rem}.gap-2{gap:.5rem}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.gap-3{gap:.75rem}.gap-px{gap:1px}.gap-1{gap:.25rem}.gap-y-2{row-gap:.5rem}.space-x-px>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1px*var(--tw-space-x-reverse));margin-left:calc(1px*(1 - var(--tw-space-x-reverse)))}.self-start{align-self:flex-start}.overflow-auto{overflow:auto}.overflow-hidden{overflow:hidden}.overflow-x-auto{overflow-x:auto}.overflow-y-hidden{overflow-y:hidden}.overflow-x-scroll{overflow-x:scroll}.truncate{overflow:hidden;text-overflow:ellipsis}.truncate,.whitespace-nowrap{white-space:nowrap}.rounded-full{border-radius:9999px}.rounded-none{border-radius:0}.rounded-sm{border-radius:.125rem}.rounded-l-full{border-top-left-radius:9999px;border-bottom-left-radius:9999px}.rounded-r-full{border-top-right-radius:9999px;border-bottom-right-radius:9999px}.border-\[10px\]{border-width:10px}.border{border-width:1px}.border-b{border-bottom-width:1px}.border-t{border-top-width:1px}.border-t-0{border-top-width:0}.border-r{border-right-width:1px}.border-transparent{border-color:transparent}.border-red-500\/25{border-color:rgba(94,103,249,.25)}.border-violet-500\/25{border-color:rgba(139,92,246,.25)}.border-emerald-500\/25{border-color:rgba(16,185,129,.25)}.border-gray-800\/20{border-color:rgba(31,41,55,.2)}.border-red-500\/50{border-color:rgba(94,103,249,.5)}.border-orange-500\/50{border-color:rgba(249,115,22,.5)}.border-emerald-500\/50{border-color:rgba(16,185,129,.5)}.border-indigo-500\/50{border-color:rgba(99,102,241,.5)}.border-violet-600\/50{border-color:rgba(124,58,237,.5)}.border-gray-500\/50{border-color:rgba(107,114,128,.5)}.bg-red-500{--tw-bg-opacity:1;background-color:rgba(94,103,249,var(--tw-bg-opacity))}.bg-red-600{--tw-bg-opacity:1;background-color:rgba(220,38,38,var(--tw-bg-opacity))}.bg-violet-500{--tw-bg-opacity:1;background-color:rgba(139,92,246,var(--tw-bg-opacity))}.bg-gray-300\/50{background-color:rgba(209,213,219,.5)}.bg-indigo-500{--tw-bg-opacity:1;background-color:rgba(99,102,241,var(--tw-bg-opacity))}.bg-indigo-600{--tw-bg-opacity:1;background-color:rgba(79,70,229,var(--tw-bg-opacity))}.bg-gray-900\/30{background-color:rgba(17,24,39,.3)}.bg-emerald-600{--tw-bg-opacity:1;background-color:rgba(5,150,105,var(--tw-bg-opacity))}.bg-red-200{--tw-bg-opacity:1;background-color:rgba(254,202,202,var(--tw-bg-opacity))}.bg-emerald-300{--tw-bg-opacity:1;background-color:rgba(110,231,183,var(--tw-bg-opacity))}.bg-emerald-500{--tw-bg-opacity:1;background-color:rgba(16,185,129,var(--tw-bg-opacity))}.bg-yellow-50{--tw-bg-opacity:1;background-color:rgba(254,252,232,var(--tw-bg-opacity))}.bg-emerald-500\/5{background-color:rgba(16,185,129,.05)}.bg-red-500\/5{background-color:rgba(94,103,249,.05)}.bg-red-50{--tw-bg-opacity:1;background-color:rgba(254,242,242,var(--tw-bg-opacity))}.bg-opacity-20{--tw-bg-opacity:0.2}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-1{padding-left:.25rem;padding-right:.25rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-1\.5{padding-left:.375rem;padding-right:.375rem}.py-0\.5{padding-top:.125rem;padding-bottom:.125rem}.py-0{padding-top:0;padding-bottom:0}.pr-8{padding-right:2rem}.pl-4{padding-left:1rem}.pt-10{padding-top:2.5rem}.pr-12{padding-right:3rem}.pt-2{padding-top:.5rem}.pb-1\.5{padding-bottom:.375rem}.pb-1{padding-bottom:.25rem}.pr-10{padding-right:2.5rem}.pl-6{padding-left:1.5rem}.pb-16{padding-bottom:4rem}.font-mono{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xs{font-size:.75rem;line-height:1rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-\[8px\]{font-size:8px}.font-semibold{font-weight:600}.font-medium{font-weight:500}.font-bold{font-weight:700}.font-normal{font-weight:400}.uppercase{text-transform:uppercase}.italic{font-style:italic}.leading-snug{line-height:1.375}.leading-tight{line-height:1.25}.leading-none{line-height:1}.leading-relaxed{line-height:1.625}.leading-loose{line-height:2}.tracking-wider{letter-spacing:.05em}.text-red-50{--tw-text-opacity:1;color:rgba(254,242,242,var(--tw-text-opacity))}.text-red-100{--tw-text-opacity:1;color:rgba(254,226,226,var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgba(94,103,249,var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgba(31,41,55,var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgba(255,255,255,var(--tw-text-opacity))}.text-emerald-500{--tw-text-opacity:1;color:rgba(16,185,129,var(--tw-text-opacity))}.text-indigo-100{--tw-text-opacity:1;color:rgba(224,231,255,var(--tw-text-opacity))}.text-emerald-700{--tw-text-opacity:1;color:rgba(4,120,87,var(--tw-text-opacity))}.text-red-700{--tw-text-opacity:1;color:rgba(185,28,28,var(--tw-text-opacity))}.text-yellow-500{--tw-text-opacity:1;color:rgba(234,179,8,var(--tw-text-opacity))}.text-indigo-500{--tw-text-opacity:1;color:rgba(99,102,241,var(--tw-text-opacity))}.text-opacity-75{--tw-text-opacity:0.75}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.opacity-50{opacity:.5}.opacity-80{opacity:.8}.opacity-0{opacity:0}.opacity-100{opacity:1}.shadow-lg{--tw-shadow:0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -4px rgba(0,0,0,0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow,.shadow-lg{box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.shadow{--tw-shadow:0 1px 3px 0 rgba(0,0,0,0.1),0 1px 2px -1px rgba(0,0,0,0.1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color),0 1px 2px -1px var(--tw-shadow-color)}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgba(0,0,0,0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color)}.shadow-2xl,.shadow-inner{box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.shadow-inner{--tw-shadow:inset 0 2px 4px 0 rgba(0,0,0,0.05);--tw-shadow-colored:inset 0 2px 4px 0 var(--tw-shadow-color)}.shadow-md{--tw-shadow:0 4px 6px -1px rgba(0,0,0,0.1),0 2px 4px -2px rgba(0,0,0,0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color);box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition-animation{transition-property:transform,box-shadow,opacity;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-colors{transition-property:color,background-color,border-color,fill,stroke,-webkit-text-decoration-color;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,-webkit-text-decoration-color;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.transition{transition-property:color,background-color,border-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.delay-100{transition-delay:.1s}.duration-100{transition-duration:.1s}.duration-300{transition-duration:.3s}.duration-150{transition-duration:.15s}.duration-1000{transition-duration:1s}.duration-500{transition-duration:.5s}.line-clamp-2{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2}.line-clamp-none{-webkit-line-clamp:unset}.first-letter\:uppercase:first-letter{text-transform:uppercase}.hover\:text-red-500:hover{--tw-text-opacity:1;color:rgba(94,103,249,var(--tw-text-opacity))}.hover\:text-violet-500:hover{--tw-text-opacity:1;color:rgba(139,92,246,var(--tw-text-opacity))}.hover\:text-indigo-500:hover{--tw-text-opacity:1;color:rgba(99,102,241,var(--tw-text-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgba(255,255,255,var(--tw-text-opacity))}.hover\:text-emerald-800:hover{--tw-text-opacity:1;color:rgba(6,95,70,var(--tw-text-opacity))}.hover\:text-red-800:hover{--tw-text-opacity:1;color:rgba(153,27,27,var(--tw-text-opacity))}.hover\:text-emerald-700:hover{--tw-text-opacity:1;color:rgba(4,120,87,var(--tw-text-opacity))}.hover\:underline:hover{-webkit-text-decoration-line:underline;text-decoration-line:underline}.hover\:shadow-lg:hover{--tw-shadow:0 10px 15px -3px rgba(0,0,0,0.1),0 4px 6px -4px rgba(0,0,0,0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.hover\:shadow-lg:hover,.hover\:shadow-md:hover{box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.hover\:shadow-md:hover{--tw-shadow:0 4px 6px -1px rgba(0,0,0,0.1),0 2px 4px -2px rgba(0,0,0,0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color)}.active\:translate-y-px:active{--tw-translate-y:1px;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.active\:shadow-inner:active{--tw-shadow:inset 0 2px 4px 0 rgba(0,0,0,0.05);--tw-shadow-colored:inset 0 2px 4px 0 var(--tw-shadow-color)}.active\:shadow-inner:active,.active\:shadow-sm:active{box-shadow:0 0 transparent,0 0 transparent,var(--tw-shadow);box-shadow:var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow)}.active\:shadow-sm:active{--tw-shadow:0 1px 2px 0 rgba(0,0,0,0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)}.group:hover .group-hover\:scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:text-amber-400{--tw-text-opacity:1;color:rgba(251,191,36,var(--tw-text-opacity))}.group:hover .group-hover\:text-amber-300{--tw-text-opacity:1;color:rgba(252,211,77,var(--tw-text-opacity))}.group:hover .group-hover\:text-indigo-500{--tw-text-opacity:1;color:rgba(99,102,241,var(--tw-text-opacity))}.group:hover .group-hover\:opacity-50{opacity:.5}.group:hover .group-hover\:opacity-100{opacity:1}.peer:checked~.peer-checked\:translate-x-2{--tw-translate-x:0.5rem;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.peer:checked~.peer-checked\:bg-emerald-300{--tw-bg-opacity:1;background-color:rgba(110,231,183,var(--tw-bg-opacity))}.dark .dark\:bg-black\/10{background-color:rgba(0,0,0,.1)}.dark .dark\:bg-yellow-500\/10{background-color:rgba(234,179,8,.1)}.dark .dark\:bg-red-500\/10{background-color:rgba(94,103,249,.1)}@media (min-width:640px){.sm\:-ml-5{margin-left:-1.25rem}.sm\:-mr-5{margin-right:-1.25rem}.sm\:block{display:block}.sm\:inline-flex{display:inline-flex}.sm\:px-10{padding-left:2.5rem;padding-right:2.5rem}.sm\:px-5{padding-left:1.25rem;padding-right:1.25rem}}@media (min-width:1024px){.lg\:absolute{position:absolute}.lg\:mr-20{margin-right:5rem}.lg\:flex{display:flex}.lg\:max-h-\[none\]{max-height:none}.lg\:w-1\/3{width:33.333333%}.lg\:w-2\/5{width:40%}.lg\:max-w-\[90rem\]{max-width:90rem}.lg\:grid-cols-\[33\.33\%\2c 66\.66\%\]{grid-template-columns:33.33% 66.66%}.lg\:grid-rows-\[57rem\]{grid-template-rows:57rem}.lg\:justify-start{justify-content:flex-start}.lg\:border-t-0{border-top-width:0}.lg\:px-10{padding-left:2.5rem;padding-right:2.5rem}}
        pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }
    </style>

    <title><?= $message?></title>
</head>
<body class="scrollbar-lg">

<div id="app">
    <nav class="z-50 fixed top-0 h-20 w-full">
        <div>
            <div class=" ~bg-body z-10 transform translate-x-0 transition-color duration-100">
                <div class="h-10 flex justify-between px-6 lg:px-10 mx-auto max-w-4xl lg:max-w-[90rem]">
                    <ul class="-ml-3 sm:-ml-5 grid grid-flow-col justify-start items-center">
                        <li>
                            <a href="<?= rtrim($_SERVER['REQUEST_URI'], '/')?>/#stack" target="_self">
                                <button class=" group px-3 sm:px-5 h-10 uppercase tracking-wider text-xs font-medium hover:text-red-500 text-red-500">
                                    <span class="mr-1.5 opacity-50">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" class="svg-inline--fa fa-share " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z"></path></svg>
                                    </span>

                                    <span>gCoffee-Debug</span>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="translate-y-0 ~bg-body absolute top-0 left-0 w-full ~bg-gray-100 border-b ~border-gray-200 transform transition-animation duration-300">
                <div class="flex items-center px-6 lg:px-10 mx-auto max-w-4xl lg:max-w-[90rem] h-10 border-t ~border-gray-200">
                    <a href="<?= rtrim($_SERVER['REQUEST_URI'], '/')?>/#top" class="min-w-0 inline-flex items-center justify-start gap-2">
                        <div class="font-semibold min-w-0 truncate hover:text-red-500"><?= $message ?></div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="mx-auto my-20 px-6 lg:px-10 max-w-4xl lg:max-w-[90rem] grid grid-cols-1 gap-10">
        <div>

            <section class="lg:flex items-stretch ~bg-white shadow-lg">
                <main id="exception" class="z-10 flex-grow min-w-0">
                    <div class="overflow-hidden">
                        <div class="px-6 sm:px-10 py-8 overflow-x-auto">
                            <header class="flex items-center justify-between gap-2">
                                <span class="py-1 px-4 items-center flex gap-3 rounded-sm ~bg-gray-500/5">
                                    <span class="inline-flex flex-wrap items-baseline">
                                        <span><?= $type ?></span>
                                    </span>
                                </span>

                                <div class="grid grid-flow-col justify-end gap-4 text-sm ~text-gray-500">
                                    <span>
                                        <span class="tracking-wider">PHP</span>
                                        &nbsp;<?= phpversion()?>
                                    </span>
                                    <span class="inline-flex items-center gap-1">
                                        <span class="tracking-wider">gCoffee</span>
                                        <?= app()->version()?>
                                    </span>
                                </div>
                            </header>
                            <div class="my-4 font-semibold leading-snug text-xl">
                                <div class="line-clamp-2"><?= $message ?></div>
                            </div>
                        </div>
                    </div>
                </main>
            </section>

        </div>

        <section class="">
            <a id="stack" class="scroll-target"></a>
            <div class="grid grid-cols-1 lg:grid-cols-[33.33%,66.66%] lg:grid-rows-[57rem] items-stretch shadow-lg ~bg-white overflow-hidden">
                <aside class="z-30 flex flex-col border-r ~border-gray-200">
                    <div class="max-h-[33vh] lg:max-h-[none] lg:absolute inset-0 flex flex-col overflow-hidden ~bg-white">
                        <header class="flex-none px-6 sm:px-10 h-16 flex items-center justify-start ~bg-white border-b ~border-gray-200">
                            <button type="button" class="group inline-flex gap-2 items-center h-6 px-2 rounded-sm ~bg-white shadow text-xs font-medium whitespace-nowrap transform transition-animation hover:shadow-md active:shadow-inner active:translate-y-px">
                                <div class="flex flex-col"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-up" class="svg-inline--fa fa-angle-up -my-px text-[8px] ~text-gray-500 group-hover:text-indigo-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z"></path></svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down -my-px text-[8px] ~text-gray-500 group-hover:text-indigo-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg></div> Descrição de erros expandida</button>
                        </header>
                        <div id="frames" class="flex-grow overflow-auto scrollbar-hidden-y mask-fade-frames">
                            <ol class="text-sm pb-16">

                                <li class="px-6 sm:px-10 py-4 bg-red-500 text-white">
                                    <div class="flex items-baseline">
                                        <span class="inline-flex flex-wrap items-baseline" style="font-size: smaller">
                                            <span><?= str_replace(root_path().'/', '', $file) ?></span>
                                            <span class="font-mono text-xs">: <?= $line ?></span>
                                        </span>
                                    </div>
                                </li>

                                <li class="z-10 mt-[-4px] sticky top-0 bg-red-500 h-[4px]"></li>

                                <li class="px-6 sm:px-10 py-4 cursor-pointer border-b ~border-gray-200 hover:~bg-red-500/10">
                                    <div class="flex items-baseline overflow-auto">
                                        <span class="inline-flex flex-wrap items-baseline">
                                            <span><pre><?= $trace_string?></pre></span>
                                        </span>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </aside>

                <section class="flex flex-col border-t lg:border-t-0 ~border-gray-200">
                    <header class="~text-gray-500 flex-none z-30 h-16 px-6 sm:px-10 flex items-center justify-end">
                        <a href="#" class="hover:underline flex items-center text-sm">
                            <span class="inline-flex flex-wrap items-baseline">
                                <span class="font-semibold"><?= str_replace(root_path().'/', '', $file) ?></span>
                                <span class="whitespace-nowrap">
                                    <span class="font-mono text-xs">: <?= $line ?></span>
                                </span>
                            </span>
                        </a>
                    </header>

                    <main class="flex items-stretch flex-grow overflow-x-auto overflow-y-hidden scrollbar-hidden-x mask-fade-r text-sm">
                        <nav class="sticky left-0 flex flex-none z-20 ~bg-white">
                            <div class="select-none pl-4 overflow-auto">
                               <pre><?= gPrintr_dump($trace)?></pre>
                            </div>
                        </nav>
                    </main>
                </section>
            </div>
        </section>
    </main>
</div>


</body>
</html>