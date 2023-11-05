<!DOCTYPE html>

<?php
   http_response_code(404);
   require_once('./admin/database.php');
   ?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./assets/css/style1.css">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- bootstrap-->
      <link rel="stylesheet" href="./index_files/bootstrap.min.css">
      <!--Font awesome-->
      <link rel="stylesheet" href="./index_files/fontawesome.min.css">
      <!--animate.css-->
      <link rel="stylesheet" href="./index_files/animate.css">
      <!-- flaticon-->
      <link rel="stylesheet" type="text/css" href="./index_files/flaticon.css">
      <!--main css-->
      <link rel="stylesheet" href="./index_files/style.css">
      <!-- slick slider css-->
      <link rel="stylesheet" href="./index_files/slick.css">
      <!--slick theme css-->
      <link rel="stylesheet" href="./index_files/slick-theme.css">
      <!-- magnific popup -->
      <link rel="stylesheet" href="./index_files/magnific-popup.css">
      <!-- google fonts-->
      <link href="./index_files/css" rel="stylesheet">
      <!-- style strat  -->
      <!--   style end-->
      <!-- google fonts-->
      <link href="./index_files/css(1)" rel="stylesheet">
      <!-- heading -->
      <meta charset="utf-8">
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <script defer="" src="https://www.benthamscience.com/js/app.js"></script>
      <script type="text/javascript" src="https://www.benthamscience.com/js/jquery.min.js"></script>
      <!-- Fonts -->
      <!-- Styles -->
      <!-- Bootstrap CSS -->
      <style type="text/css">
         /* .title{
         font-weight: 200 !important;
         } */
         :host,
         :root {
         --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
         --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
         --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
         --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
         --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
         --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
         --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
         --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
         --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
         }
         svg:not(:host).svg-inline--fa,
         svg:not(:root).svg-inline--fa {
         overflow: visible;
         box-sizing: content-box
         }
         .svg-inline--fa {
         display: var(--fa-display, inline-block);
         height: 1em;
         overflow: visible;
         vertical-align: -.125em
         }
         .svg-inline--fa.fa-2xs {
         vertical-align: .1em
         }
         .svg-inline--fa.fa-xs {
         vertical-align: 0
         }
         .svg-inline--fa.fa-sm {
         vertical-align: -.0714285705em
         }
         .svg-inline--fa.fa-lg {
         vertical-align: -.2em
         }
         .svg-inline--fa.fa-xl {
         vertical-align: -.25em
         }
         .svg-inline--fa.fa-2xl {
         vertical-align: -.3125em
         }
         .svg-inline--fa.fa-pull-left {
         margin-right: var(--fa-pull-margin, .3em);
         width: auto
         }
         .svg-inline--fa.fa-pull-right {
         margin-left: var(--fa-pull-margin, .3em);
         width: auto
         }
         .svg-inline--fa.fa-li {
         width: var(--fa-li-width, 2em);
         top: .25em
         }
         .svg-inline--fa.fa-fw {
         width: var(--fa-fw-width, 1.25em)
         }
         .fa-layers svg.svg-inline--fa {
         bottom: 0;
         left: 0;
         margin: auto;
         position: absolute;
         right: 0;
         top: 0
         }
         .fa-layers-counter,
         .fa-layers-text {
         display: inline-block;
         position: absolute;
         text-align: center
         }
         .fa-layers {
         display: inline-block;
         height: 1em;
         position: relative;
         text-align: center;
         vertical-align: -.125em;
         width: 1em
         }
         .fa-layers svg.svg-inline--fa {
         -webkit-transform-origin: center center;
         transform-origin: center center
         }
         .fa-layers-text {
         left: 50%;
         top: 50%;
         -webkit-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         -webkit-transform-origin: center center;
         transform-origin: center center
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
         padding: var(--fa-counter-padding, .25em .5em);
         right: var(--fa-right, 0);
         text-overflow: ellipsis;
         top: var(--fa-top, 0);
         -webkit-transform: scale(var(--fa-counter-scale, .25));
         transform: scale(var(--fa-counter-scale, .25));
         -webkit-transform-origin: top right;
         transform-origin: top right
         }
         .fa-layers-bottom-right {
         bottom: var(--fa-bottom, 0);
         right: var(--fa-right, 0);
         top: auto;
         -webkit-transform: scale(var(--fa-layers-scale, .25));
         transform: scale(var(--fa-layers-scale, .25));
         -webkit-transform-origin: bottom right;
         transform-origin: bottom right
         }
         .fa-layers-bottom-left {
         bottom: var(--fa-bottom, 0);
         left: var(--fa-left, 0);
         right: auto;
         top: auto;
         -webkit-transform: scale(var(--fa-layers-scale, .25));
         transform: scale(var(--fa-layers-scale, .25));
         -webkit-transform-origin: bottom left;
         transform-origin: bottom left
         }
         .fa-layers-top-right {
         top: var(--fa-top, 0);
         right: var(--fa-right, 0);
         -webkit-transform: scale(var(--fa-layers-scale, .25));
         transform: scale(var(--fa-layers-scale, .25));
         -webkit-transform-origin: top right;
         transform-origin: top right
         }
         .fa-layers-top-left {
         left: var(--fa-left, 0);
         right: auto;
         top: var(--fa-top, 0);
         -webkit-transform: scale(var(--fa-layers-scale, .25));
         transform: scale(var(--fa-layers-scale, .25));
         -webkit-transform-origin: top left;
         transform-origin: top left
         }
         .fa-1x {
         font-size: 1em
         }
         .fa-2x {
         font-size: 2em
         }
         .fa-3x {
         font-size: 3em
         }
         .fa-4x {
         font-size: 4em
         }
         .fa-5x {
         font-size: 5em
         }
         .fa-6x {
         font-size: 6em
         }
         .fa-7x {
         font-size: 7em
         }
         .fa-8x {
         font-size: 8em
         }
         .fa-9x {
         font-size: 9em
         }
         .fa-10x {
         font-size: 10em
         }
         .fa-2xs {
         font-size: .625em;
         line-height: .1em;
         vertical-align: .225em
         }
         .fa-xs {
         font-size: .75em;
         line-height: .0833333337em;
         vertical-align: .125em
         }
         .fa-sm {
         font-size: .875em;
         line-height: .0714285718em;
         vertical-align: .0535714295em
         }
         .fa-lg {
         font-size: 1.25em;
         line-height: .05em;
         vertical-align: -.075em
         }
         .fa-xl {
         font-size: 1.5em;
         line-height: .0416666682em;
         vertical-align: -.125em
         }
         .fa-2xl {
         font-size: 2em;
         line-height: .03125em;
         vertical-align: -.1875em
         }
         .fa-fw {
         text-align: center;
         width: 1.25em
         }
         .fa-ul {
         list-style-type: none;
         margin-left: var(--fa-li-margin, 2.5em);
         padding-left: 0
         }
         .fa-ul>li {
         position: relative
         }
         .fa-li {
         left: calc(var(--fa-li-width, 2em) * -1);
         position: absolute;
         text-align: center;
         width: var(--fa-li-width, 2em);
         line-height: inherit
         }
         .fa-border {
         border-color: var(--fa-border-color, #eee);
         border-radius: var(--fa-border-radius, .1em);
         border-style: var(--fa-border-style, solid);
         border-width: var(--fa-border-width, .08em);
         padding: var(--fa-border-padding, .2em .25em .15em)
         }
         .fa-pull-left {
         float: left;
         margin-right: var(--fa-pull-margin, .3em)
         }
         .fa-pull-right {
         float: right;
         margin-left: var(--fa-pull-margin, .3em)
         }
         .fa-beat {
         -webkit-animation-name: fa-beat;
         animation-name: fa-beat;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
         animation-timing-function: var(--fa-animation-timing, ease-in-out)
         }
         .fa-bounce {
         -webkit-animation-name: fa-bounce;
         animation-name: fa-bounce;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1))
         }
         .fa-fade {
         -webkit-animation-name: fa-fade;
         animation-name: fa-fade;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
         }
         .fa-beat-fade {
         -webkit-animation-name: fa-beat-fade;
         animation-name: fa-beat-fade;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
         }
         .fa-flip {
         -webkit-animation-name: fa-flip;
         animation-name: fa-flip;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
         animation-timing-function: var(--fa-animation-timing, ease-in-out)
         }
         .fa-shake {
         -webkit-animation-name: fa-shake;
         animation-name: fa-shake;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, linear);
         animation-timing-function: var(--fa-animation-timing, linear)
         }
         .fa-spin {
         -webkit-animation-name: fa-spin;
         animation-name: fa-spin;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 2s);
         animation-duration: var(--fa-animation-duration, 2s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, linear);
         animation-timing-function: var(--fa-animation-timing, linear)
         }
         .fa-spin-reverse {
         --fa-animation-direction: reverse
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
         animation-timing-function: var(--fa-animation-timing, steps(8))
         }
         @media (prefers-reduced-motion:reduce) {
         .fa-beat,
         .fa-beat-fade,
         .fa-bounce,
         .fa-fade,
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
         -webkit-transition-delay: 0s;
         transition-delay: 0s;
         -webkit-transition-duration: 0s;
         transition-duration: 0s
         }
         }
         @-webkit-keyframes fa-beat {
         0%,
         90% {
         -webkit-transform: scale(1);
         transform: scale(1)
         }
         45% {
         -webkit-transform: scale(var(--fa-beat-scale, 1.25));
         transform: scale(var(--fa-beat-scale, 1.25))
         }
         }
         @keyframes fa-beat {
         0%,
         90% {
         -webkit-transform: scale(1);
         transform: scale(1)
         }
         45% {
         -webkit-transform: scale(var(--fa-beat-scale, 1.25));
         transform: scale(var(--fa-beat-scale, 1.25))
         }
         }
         @-webkit-keyframes fa-bounce {
         0% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         10% {
         -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
         transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
         }
         30% {
         -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
         transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
         }
         50% {
         -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
         transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
         }
         57% {
         -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
         transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
         }
         64% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         100% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         }
         @keyframes fa-bounce {
         0% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         10% {
         -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
         transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
         }
         30% {
         -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
         transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
         }
         50% {
         -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
         transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
         }
         57% {
         -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
         transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
         }
         64% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         100% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0)
         }
         }
         @-webkit-keyframes fa-fade {
         50% {
         opacity: var(--fa-fade-opacity, .4)
         }
         }
         @keyframes fa-fade {
         50% {
         opacity: var(--fa-fade-opacity, .4)
         }
         }
         @-webkit-keyframes fa-beat-fade {
         0%,
         100% {
         opacity: var(--fa-beat-fade-opacity, .4);
         -webkit-transform: scale(1);
         transform: scale(1)
         }
         50% {
         opacity: 1;
         -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
         transform: scale(var(--fa-beat-fade-scale, 1.125))
         }
         }
         @keyframes fa-beat-fade {
         0%,
         100% {
         opacity: var(--fa-beat-fade-opacity, .4);
         -webkit-transform: scale(1);
         transform: scale(1)
         }
         50% {
         opacity: 1;
         -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
         transform: scale(var(--fa-beat-fade-scale, 1.125))
         }
         }
         @-webkit-keyframes fa-flip {
         50% {
         -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
         }
         }
         @keyframes fa-flip {
         50% {
         -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
         }
         }
         @-webkit-keyframes fa-shake {
         0% {
         -webkit-transform: rotate(-15deg);
         transform: rotate(-15deg)
         }
         4% {
         -webkit-transform: rotate(15deg);
         transform: rotate(15deg)
         }
         24%,
         8% {
         -webkit-transform: rotate(-18deg);
         transform: rotate(-18deg)
         }
         12%,
         28% {
         -webkit-transform: rotate(18deg);
         transform: rotate(18deg)
         }
         16% {
         -webkit-transform: rotate(-22deg);
         transform: rotate(-22deg)
         }
         20% {
         -webkit-transform: rotate(22deg);
         transform: rotate(22deg)
         }
         32% {
         -webkit-transform: rotate(-12deg);
         transform: rotate(-12deg)
         }
         36% {
         -webkit-transform: rotate(12deg);
         transform: rotate(12deg)
         }
         100%,
         40% {
         -webkit-transform: rotate(0);
         transform: rotate(0)
         }
         }
         @keyframes fa-shake {
         0% {
         -webkit-transform: rotate(-15deg);
         transform: rotate(-15deg)
         }
         4% {
         -webkit-transform: rotate(15deg);
         transform: rotate(15deg)
         }
         24%,
         8% {
         -webkit-transform: rotate(-18deg);
         transform: rotate(-18deg)
         }
         12%,
         28% {
         -webkit-transform: rotate(18deg);
         transform: rotate(18deg)
         }
         16% {
         -webkit-transform: rotate(-22deg);
         transform: rotate(-22deg)
         }
         20% {
         -webkit-transform: rotate(22deg);
         transform: rotate(22deg)
         }
         32% {
         -webkit-transform: rotate(-12deg);
         transform: rotate(-12deg)
         }
         36% {
         -webkit-transform: rotate(12deg);
         transform: rotate(12deg)
         }
         100%,
         40% {
         -webkit-transform: rotate(0);
         transform: rotate(0)
         }
         }
         @-webkit-keyframes fa-spin {
         0% {
         -webkit-transform: rotate(0);
         transform: rotate(0)
         }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg)
         }
         }
         @keyframes fa-spin {
         0% {
         -webkit-transform: rotate(0);
         transform: rotate(0)
         }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg)
         }
         }
         .fa-rotate-90 {
         -webkit-transform: rotate(90deg);
         transform: rotate(90deg)
         }
         .fa-rotate-180 {
         -webkit-transform: rotate(180deg);
         transform: rotate(180deg)
         }
         .fa-rotate-270 {
         -webkit-transform: rotate(270deg);
         transform: rotate(270deg)
         }
         .fa-flip-horizontal {
         -webkit-transform: scale(-1, 1);
         transform: scale(-1, 1)
         }
         .fa-flip-vertical {
         -webkit-transform: scale(1, -1);
         transform: scale(1, -1)
         }
         .fa-flip-both,
         .fa-flip-horizontal.fa-flip-vertical {
         -webkit-transform: scale(-1, -1);
         transform: scale(-1, -1)
         }
         .fa-rotate-by {
         -webkit-transform: rotate(var(--fa-rotate-angle, none));
         transform: rotate(var(--fa-rotate-angle, none))
         }
         .fa-stack {
         display: inline-block;
         vertical-align: middle;
         height: 2em;
         position: relative;
         width: 2.5em
         }
         .fa-stack-1x,
         .fa-stack-2x {
         bottom: 0;
         left: 0;
         margin: auto;
         position: absolute;
         right: 0;
         top: 0;
         z-index: var(--fa-stack-z-index, auto)
         }
         .svg-inline--fa.fa-stack-1x {
         height: 1em;
         width: 1.25em
         }
         .svg-inline--fa.fa-stack-2x {
         height: 2em;
         width: 2.5em
         }
         .fa-inverse {
         color: var(--fa-inverse, #fff)
         }
         .fa-sr-only,
         .sr-only {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         margin: -1px;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         white-space: nowrap;
         border-width: 0
         }
         .fa-sr-only-focusable:not(:focus),
         .sr-only-focusable:not(:focus) {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         margin: -1px;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         white-space: nowrap;
         border-width: 0
         }
         .svg-inline--fa .fa-primary {
         fill: var(--fa-primary-color, currentColor);
         opacity: var(--fa-primary-opacity, 1)
         }
         .svg-inline--fa .fa-secondary {
         fill: var(--fa-secondary-color, currentColor);
         opacity: var(--fa-secondary-opacity, .4)
         }
         .svg-inline--fa.fa-swap-opacity .fa-primary {
         opacity: var(--fa-secondary-opacity, .4)
         }
         .svg-inline--fa.fa-swap-opacity .fa-secondary {
         opacity: var(--fa-primary-opacity, 1)
         }
         .svg-inline--fa mask .fa-primary,
         .svg-inline--fa mask .fa-secondary {
         fill: #000
         }
         .fa-duotone.fa-inverse,
         .fad.fa-inverse {
         color: var(--fa-inverse, #fff)
         }
         .if-br br {
         content: '' !important;
         display: block !important;
         margin: 0.2em auto !important;
         border-bottom: 1px dotted #ffffff !important;
         width: 100%;
         }
         #call-paper .dropdown-menu.show {
         display: flex;
         }
         #call-paper .dropdown-menu {
         margin: 0;
         padding: 10px 5px;
         width: 550px;
         background-color: #037989f0;
         border-radius: 15px;
         top: -110% !important;
         border: 1px solid #fff;
         }
         #call-paper .dropdown-menu a,
         #call-paper .dropdown-menu button {
         padding: 5px;
         font-size: 1.1em;
         color: #fff;
         width: 100%;
         display: block;
         border: none;
         text-align: left;
         background-color: transparent;
         border-bottom: 1px dashed #dee2e6;
         }
         #call-paper .dropdown-menu a:hover,
         .sectionbanner .dropdown-menu a:focus,
         #call-paper .dropdown-menu button:hover,
         .sectionbanner .dropdown-menu button:focus {
         background: var(--siteblue);
         border-radius: 5px 5px 0 0px;
         box-shadow: none;
         outline: none;
         }
         @media only screen and (max-width: 480px) {
         #call-paper .dropdown-menu {
         width: 295px;
         background-color: #037989f0;
         border-radius: 15px;
         top: 89% !important;
         border: 1px solid #fff;
         left: -40% !important;
         }
         }

        
      </style>
      <link href="https://www.benthamscience.com/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://www.benthamscience.com/css/style.css" media="all" rel="stylesheet" type="text/css">
      <link href="https://www.benthamscience.com/plugins/animate-hover/hover-min.css" rel="stylesheet" type="text/css">
      <link href="https://www.benthamscience.com/plugins/wow-animate/animate.css" rel="stylesheet" type="text/css">
      <link href="https://www.benthamscience.com/assets/vendors/select2/css/select2.min.css" rel="stylesheet"
         type="text/css">
      <link href="https://www.benthamscience.com/assets/vendors/select2/css/select2-bootstrap.css" rel="stylesheet"
         type="text/css">
      <link rel="stylesheet" type="text/css" href="https://ws.sharethis.com/button/css/buttons-secure.css">
   </head>
   <!-- headingend -->
   </head>
   <body>
      <!--=====Header======-->
  
      <!-- header start -->
            <?php
               include("./header.php");
               // include("./url.php");
            ?>
      <!--END Header-->
      <!--Product a-->
      <section style="padding: 50px  0px 0px 0px" class="section-padding exp-product-section ">
         <div class="container-wrapper">
            <div class="container">
               <?php
                  // $count = 1;
                  $flag = false;
                  $sql = $conn->prepare("SELECT * FROM add_journal_impacting_science Where journalStatus='Active' ORDER BY journalId DESC LIMIT 5");
                  $sql->execute();
                  //   $row = $sql->fetch(PDO::FETCH_BOTH);
                  $count_impact  = $sql->rowCount();
                  // echo"<pre>";
                  // var_dump($row);
                  // die;
                  ?>
               <?php
                  if ($count_impact > 0) {
                      $flag = true;
                      ?>
               <div class="section pb-4">
                  <h3 style="font-size: 40px;">JOURNAL IMPACTING SCIENCE</h3>
               </div>
                  <?php
               }
                  while ($row = $sql->fetch(PDO::FETCH_BOTH)) {
                      ?>
               <div class="row shadow-lg rounded-3 p-3 mb-4">
                  <!-- //impactFactor;
                     // echo "<pre>";
                     // print_r($row);
                     // echo "</pre>"; -->
                  <div class="col-12 col-md-2 text-center">
                     <img src="<?php echo "{$row['journalImageUrl']}" ?>
                        ">
                  </div>
                  <div class="col-12 col-md-10">
                     <div class="d-flex flex-wrap w-100">
                        <div class="col-12 col-md-6 text-center text-md-left pl-0">
                           <a class="h5 mb-3 d-block" target="_blank"
                              href="https://www.eurekaselect.com/journal/<?php echo "{$row['journalCode']}" ?>">
                              <h5><b>
                                 <?php echo "{$row['journalName']}" ?>
                                 </b>
                              </h5>
                           </a>
                        </div>
                        <div class="col-12 col-md-6 mb-2 text-center text-md-right">
                           <a class="btn rounded bg-siteblue font-14 py-1 px-3 text-white border-0 mt-0"
                              target="_blank"
                              href="https://www.benthamscience.com/journal/<?php echo $row['journalCode'] ?>">
                              Journal
                              Home 
                              <svg class="svg-inline--fa fa-angle-right" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="angle-right" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                 <path fill="currentColor"
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                 </path>
                              </svg>
                              <!-- <i class="fa fa-angle-right"></i> Font Awesome fontawesome.com -->
                           </a>
                           <div class="btn-group">
                              <form action="https://www.benthamscience.com/call-for-papers" method="POST">
                                 <input type="hidden" name="_token"
                                    value="5UaQu8xqmbmOSGCI1NkDe5ylJ5dgMI1y7uDcsBLT"> <input type="hidden"
                                    name="search_journals[]" value="CN">
                                 <body style="background-color:white;">
                                    <div id="call-paper" class="dropdown dropleft font-14 p-0 m-0">
                                       <button
                                          class="btn rounded bg-siteblue font-14 py-1 px-3 text-white border-0 mt-0 dropdown-toggle"
                                          type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                          aria-expanded="false">
                                       Call For Paper
                                       </button>
                                       <div class="dropdown-menu font-12"
                                          aria-labelledby="navbarCallForPapers" x-placement="left-start"
                                          style="position: absolute; transform: translate3d(-550px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                          <div class="row m-0 w-100">
                                             <div class="px-1 col-12 col-md-6">
                                                <h6 class="border-bottom text-white pb-2">Submission for
                                                   Generalhre
                                                   Articles
                                                </h6>
                                                <a href="https://bentham.manuscriptpoint.com/submit/AbstractS/Journal/<?php echo $row['Jcode']?>?utm_source=eurekaselect&utm_medium=website&utm_campaign=callforpaper&utm_term=unpaid&utm_content=link"
                                                   target="_blank">Submit Abstract</a>
                                                <a href="https://bentham.manuscriptpoint.com/journals/<?php echo $row['Jcode']?>?utm_source=eurekaselect&utm_medium=website&utm_campaign=callforpaper&utm_term=unpaid&utm_content=link"
                                                   target="_blank">Submit Manuscript</a>
                                             </div>
                                             <div class="px-1 col-12 col-md-6 mt-3 mt-md-0">
                                                <input type="hidden" name="_token"
                                                   value="5UaQu8xqmbmOSGCI1NkDe5ylJ5dgMI1y7uDcsBLT"><input
                                                   type="hidden" name="search_journals[]" value="CN">
                                                <h6 class="border-bottom text-white pb-2">Submit to
                                                   Thematic
                                                   Issues
                                                </h6>
                                                <!-- <button type="submit" class="btn">Submit Manuscript to
                                                Thematic
                                                Issues</button>
                                                <button type="submit" class="btn">Submit Abstract to
                                                Thematic
                                                Issues </button> -->
                                                <a href="https://eurekaselect.com/call-for-papers"
                                                   target="_blank">Submit Manuscript to
                                                Thematic
                                                Issues</a>
                                                <a href="#"
                                                   target="_blank">Submit Abstract to
                                                Thematic
                                                Issues</a>
                                                <a href="https://bentham.manuscriptpoint.com/submit/Htproposal/journal/<?php echo $row['Jcode']?>?utm_source=eurekaselect&utm_medium=website&utm_campaign=callforpaper&utm_term=unpaid&utm_content=link"
                                                   target="_blank">Submit Thematic Issue Proposal</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                     <div class="col-md-3 pb-4">
                     <div class="bg-siteblue text-white text-center row d-flex rounded mb-1 m-0 if-br">
                     <span class="font-weight-bold col-5 border-right px-0 py-3">Impact Factor</span>
                     <span class="m-0 col-7 py-1 px-0">current
                     <?php echo "{$row['current']}" ?><br>
                     <!-- <hr> -->
                     <?php echo "{$row['impactFactor']}" ?>
                     </span>
                     </div>
                     <!-- <span class="bg-siteblue text-white d-flex w-100 rounded-top overflow-hidden"><span class="border-bottom border-right p-1 col text-white">{!! $journal_lists-></span></span> -->
                     <a target="_blank" class="btn btn-primary btn-sm w-100 mb-2"
                        href="https://www.eurekaselect.com/subscribe-to-this-journal/<?php echo $row['journalCode'] ?>">Subscribe</a>
                     <a target="_blank" class="btn btn-primary btn-sm w-100"
                        href="<?php echo $row['journalPdfUrl']?>">Download
                     PDF Flyer</a>
                     </div>
                     <div class="col-md-9">
                     <p class="text-justify"><b>Abstracted &amp; Indexed in:</b><br>
                     <span>
                     <?php echo "{$row['journalDescription']}" ?>
                     </p></span>
                     </div>
                     </div>
                  </div>
               </div>
               <?php
                  // if ($count==6)   {
                  
                  // break;
                  //   }                                          
                  // $count++;
                  }
                  if ($flag) {
                  ?>
               <div class="d-grid gap-2 text-white d-md-flex justify-content-md-end">
               <a class="btn btn-primary" style="background: #0f2247;"
                  href="https://benthamscience.com/journal-impacting-science"  target="_blank" role="button">View more</a>
               </div>
               <?php
                  }
                  ?>
            </div>
         </div>
      </section>
      <!--Product b-->
      <?php include ('mostsited_article_sidebar.php')?>
      <!--Product b-->
      <!-- ebook start -->
      <section style="padding-top: 0px " class="section-padding exp-product-section ">
      <div class="container-wrapper">
      <div class="container">
      <?php
         // $count = 1;
         $flag2 = false;
         $sql2 = $conn->prepare("SELECT * FROM add_e_books Where bStatus='Active'  ORDER BY bId DESC LIMIT 5");
         $sql2->execute();
         $books_count = $sql2->rowCount();
         //  $row2 = $sql2->fetch(PDO::FETCH_BOTH);
         // echo"<pre>";
         // var_dump($row);
         // die;
         ?>
      <?php
         if ($books_count > 0) {
             $flag2 = true;
             ?>
      <div class="section pb-4">
      <h3 style="font-size: 40px;">BENTHAM BOOKS BEST SELLER</h3>
      </div>
      <?php
         }
         ?>
      <?php
         while ($row2 = $sql2->fetch(PDO::FETCH_BOTH)) {
             ?>
      <div class="row shadow-lg rounded-3 p-3 mb-4">
      <!-- //impactFactor;
         // echo "<pre>";
         // print_r($row);
         // echo "</pre>"; -->
      <div class="col-12 col-md-2 text-center">
      <img src="<?php echo "{$row2['bCover']}" ?>
         ">
      </div>
      <div class="col-12 col-md-10">
      <div class="d-flex flex-wrap w-100">
      <div class="col-12 col-md-6 text-center text-md-left pl-0">
      <a class="h5 mb-3 d-block" target="_blank"
         href="https://benthambooks.com/book/<?php echo "{$row2['bCode']}" ?>/"><b>
      <?php echo "{$row2['bTitle']}" ?>
      </b></a>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3 pb-4">
      <div
         class="bg-siteblue text-white text-center row d-flex rounded mb-1 m-0 if-br">
      <span class="font-weight-bold col-5 border-right px-0 py-3">Price</span>
      <span class="m-0 col-7 py-1 px-0 pt-3 font-weight-bold">$
      <?php echo "{$row2['bPrice']}" ?>
      <!-- <hr> -->
      </span>
      </div>
      </div>
      <div class="col-md-9">
      <p class="text-justify">
      <span>
      <?php echo "{$row2['bDescription']}" ?>
      </p></span>
      </div>
      </div>
      </div>
      </div>
      <?php
         // if ($count==6)   {
         
         // break;
         //   }                                          
         // $count++;
         $url = $row2['bPdfUrl'];
         }
         if ($flag2) {
         ?>
      <div class="d-grid gap-2 text-white d-md-flex justify-content-md-end">
      <a class="btn btn-primary" style="background: #0f2247;"
         href="<?php echo  $url ?>" target="_blank" role="button">View
      more</a>
      </div>
      <?php
         }
         ?>
      </div>
      </div>
      </section>
      <!-- article by disease -->
      <section class="pt-4">
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <h1 class="text-uppercase">
      Articles by Disease
      </h1>
      <hr>                            
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div aria-label="First group" class="btn-group d-flex alpha-page" role="group">
      <p>
      Bentham is offering subject-based scholarly content collections which are tailored to meet specific research needs. Researchers can access related articles from current and back volumes by purchasing access to these collections. Subscribers will also have access to new articles as soon as they are published and added to these collections. With new articles being added to these collections on a daily basis, the collections serve as an ideal tool to keep researchers updated with new developments in the respective fields.
      </p>
      </div>
      <hr>                            
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 list">
      <div class="row">
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/anti-inflammatory.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a target="_blank" class="btn btn-lg  btn-outline-primary btn-block" href="https://eurekaselect.com/alldiseases/295/anti%20inflammatory">Anti Inflammatory</a></h5>                                  
      </div>
      </div>
      </div>                            
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/cardiovascular-disorders.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a target="_blank"  class="btn btn-lg btn-outline-primary btn-block" href="https://eurekaselect.com/alldiseases/258/cardiovascular%20disorders">Cardiovascular Disorders</a></h5>                                  
      </div>
      </div>
      </div>                            
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/outbreak-coronavirus-world.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a  target="_blank"  class="btn btn-lg btn-outline-primary btn-block" href="https://eurekaselect.com/alldiseases/622/coronavirus">Coronavirus</a></h5>                                  
      </div>
      </div>
      </div>                            
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/diabetes2.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a  target="_blank"  class="btn btn-lg btn-outline-primary btn-block" href="https://eurekaselect.com/alldiseases/283/diabetes">Diabetes</a></h5>                                  
      </div>
      </div>
      </div>                            
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/central-nervous-system.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a target="_blank"  class="btn btn-lg btn-outline-primary btn-blue btn-block" href="https://eurekaselect.com/alldiseases/281/neurological%20disorders">Neurological Disorders</a></h5>                                  
      </div>
      </div>
      </div>                            
      <div class="col-md-4">
      <div class="card mb-4 box-shadow">
      <img class="card-img-top" src="https://eurekaselect.com/images/oncology.jpg" alt="Card image cap">
      <div class="card-body">
      <h5 class="m-0"><a  target="_blank"  class="btn btn-lg btn-outline-primary btn-block" href="https://eurekaselect.com/alldiseases/16/oncology">Oncology</a></h5>                                  
      </div>
      </div>
      </div>                            
      </div>
      </div>                      
      </div>
      </div>
      </section>
      <!-- article by disease -->
      <script src="./Most Cited Articles - Bentham Science_files/jquery-2.2.4.min.js.download"
         type="70342f14eea5325aa84f7536-text/javascript"></script>
      <script src="./Most Cited Articles - Bentham Science_files/jquery.nice-select.min.js.download"
         type="70342f14eea5325aa84f7536-text/javascript"></script>
      <script src="./Most Cited Articles - Bentham Science_files/jquery.magnific-popup.min.js.download"
         type="70342f14eea5325aa84f7536-text/javascript"></script>
      <script>
         function openCity(evt, cityName) {
             var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
             for (i = 0; i < tabcontent.length; i++) {
                 tabcontent[i].style.display = "none";
             }
             tablinks = document.getElementsByClassName("tablinks");
             for (i = 0; i < tablinks.length; i++) {
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
             }
             document.getElementById(cityName).style.display = "block";
             evt.currentTarget.className += " active";
         }
         document.getElementById("defaultOpen").click();
      </script>
      </div>
         <!-- footer start -->
         <?php
            include("./footer.php");
         ?>
         <!-- footer end -->
      <!--==END Footer==-->
      <script src="./index_files/jquery-3.4.1.min.js.download"></script>
      <script src="./index_files/popper.min.js.download"></script>
      <script src="./index_files/bootstrap.min.js.download"></script>
      <script src="./index_files/slick.min.js.download"></script>
      <script src="./index_files/jquery.magnific-popup.min.js.download"></script>
      <script src="./index_files/jquery.waypoints.min.js.download"></script>
      <script src="./index_files/jquery.counterup.js.download"></script>
      <script src="./index_files/masonry.pkgd.min.js.download"></script>
      <script src="./index_files/exvox.js.download"></script>
      <script type="text/javascript">
         function refreshPage() {
             var page_y = document.getElementsById("#latest")[0].scrollTop;
             window.location.href = window.location.href.split('?')[0] + '?page_y=' + page_y;
         }
         window.onload = function() {
             setTimeout(refreshPage, 35000);
             if (window.location.href.indexOf('page_y') != -1) {
                 var match = window.location.href.split('?')[1].split("&")[0].split("=");
                 document.getElementsById("#latest")[0].scrollTop = match[1];
             }
         }
         document.getElementById("defaultOpen").click();
      </script>
   </body>
   <!-- </html> -->