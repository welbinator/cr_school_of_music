<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cedar_Rhapsody_School_of_Music
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
        <div class="container"><a class="navbar-brand" href="/"><svg class="logo" viewBox="0 0 233 71" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g>
        <path class="logo-red" d="M22.366,52.628C21.753,55.651 22.132,58.831 23.503,61.657L-0,38.154L9.699,28.455L22.366,52.628ZM72.62,38.154L49.118,61.656C50.49,58.827 50.868,55.64 50.252,52.615L61.563,31.005L72.62,38.154ZM24.58,47.414C23.952,48.326 23.442,49.295 23.051,50.299L11.008,27.146L15.818,22.336L24.58,47.414ZM48.035,47.406L55.193,26.887L60.08,30.047L49.566,50.288C49.174,49.285 48.664,48.317 48.035,47.406ZM28.481,43.581C27.546,44.199 26.68,44.931 25.904,45.766L17.191,20.962L22.976,15.177L28.481,43.581ZM33.18,41.578C32.114,41.819 31.082,42.181 30.104,42.657L24.46,13.694L31.451,6.703L33.18,41.578ZM39.434,41.576L41.153,6.687L48.144,13.677L42.509,42.653C41.531,42.178 40.499,41.816 39.434,41.576ZM35.003,41.289L33.105,5.049L36.31,1.844L39.499,5.032L37.611,41.288C37.18,41.249 36.746,41.229 36.31,41.229C35.872,41.229 35.435,41.249 35.003,41.289Z" style="fill:rgb(202,6,0);"/>
    </g>
    <path class="logo-changing" d="M157.13,70.286C158.28,70.286 159.188,69.97 159.853,69.338C160.626,68.616 161.013,67.577 161.013,66.223L161.013,54.901C161.013,53.547 160.626,52.509 159.853,51.786C159.188,51.154 158.28,50.838 157.13,50.838C155.998,50.838 155.099,51.154 154.434,51.786C153.661,52.491 153.275,53.529 153.275,54.901L153.275,66.223C153.275,67.595 153.661,68.634 154.434,69.338C155.099,69.97 155.998,70.286 157.13,70.286ZM117.874,70.286C119.024,70.286 119.932,69.97 120.597,69.338C121.37,68.616 121.757,67.577 121.757,66.223L121.757,54.901C121.757,53.547 121.37,52.509 120.597,51.786C119.932,51.154 119.024,50.838 117.874,50.838C116.742,50.838 115.843,51.154 115.178,51.786C114.405,52.491 114.019,53.529 114.019,54.901L114.019,66.223C114.019,67.595 114.405,68.634 115.178,69.338C115.843,69.97 116.742,70.286 117.874,70.286ZM129.387,70.286C130.537,70.286 131.445,69.97 132.11,69.338C132.883,68.616 133.269,67.577 133.269,66.223L133.269,54.901C133.269,53.547 132.883,52.509 132.11,51.786C131.445,51.154 130.537,50.838 129.387,50.838C128.254,50.838 127.356,51.154 126.691,51.786C125.918,52.491 125.531,53.529 125.531,54.901L125.531,66.223C125.531,67.595 125.918,68.634 126.691,69.338C127.356,69.97 128.254,70.286 129.387,70.286ZM211.538,70.286C212.67,70.286 213.578,69.97 214.261,69.338C215.016,68.634 215.394,67.595 215.394,66.223L215.394,64.896C215.394,62.476 214.18,60.734 211.754,59.668C211.322,59.488 210.9,59.271 210.487,59.018C210.073,58.766 209.664,58.341 209.26,57.745C208.855,57.149 208.653,56.382 208.653,55.443L208.653,54.901C208.653,53.836 208.932,53.041 209.489,52.518C209.956,52.066 210.639,51.841 211.538,51.841C212.437,51.841 213.111,52.066 213.56,52.518C214.117,53.023 214.396,53.818 214.396,54.901L214.396,56.743L215.394,56.743L215.394,54.901C215.394,53.529 215.016,52.491 214.261,51.786C213.578,51.154 212.67,50.838 211.538,50.838C210.388,50.838 209.48,51.154 208.815,51.786C208.042,52.509 207.656,53.547 207.656,54.901L207.656,55.443C207.656,57.05 208.069,58.233 208.896,58.991C209.723,59.75 210.541,60.282 211.349,60.589C212.014,60.86 212.688,61.321 213.371,61.971C214.055,62.621 214.396,63.596 214.396,64.896L214.396,66.223C214.396,67.307 214.117,68.101 213.56,68.607C213.075,69.058 212.401,69.284 211.538,69.284C210.639,69.284 209.956,69.058 209.489,68.607C208.932,68.083 208.653,67.289 208.653,66.223L208.653,63.46L207.656,63.46L207.656,66.223C207.656,67.577 208.042,68.616 208.815,69.338C209.48,69.97 210.388,70.286 211.538,70.286ZM94.391,70.286C95.523,70.286 96.431,69.97 97.114,69.338C97.869,68.634 98.246,67.595 98.246,66.223L98.246,63.487L97.249,63.487L97.249,66.223C97.249,67.307 96.979,68.101 96.44,68.607C95.972,69.058 95.289,69.284 94.391,69.284C93.492,69.284 92.809,69.058 92.342,68.607C91.802,68.101 91.533,67.307 91.533,66.223L91.533,54.901C91.533,53.818 91.802,53.023 92.342,52.518C92.809,52.066 93.492,51.841 94.391,51.841C95.289,51.841 95.972,52.066 96.44,52.518C96.979,53.023 97.249,53.818 97.249,54.901L97.249,56.77L98.246,56.77L98.246,54.901C98.246,53.529 97.869,52.491 97.114,51.786C96.431,51.154 95.523,50.838 94.391,50.838C93.258,50.838 92.351,51.154 91.668,51.786C90.913,52.491 90.535,53.529 90.535,54.901L90.535,66.223C90.535,67.595 90.913,68.634 91.668,69.338C92.351,69.97 93.258,70.286 94.391,70.286ZM83.013,70.286C84.145,70.286 85.053,69.97 85.736,69.338C86.491,68.634 86.868,67.595 86.868,66.223L86.868,64.896C86.868,62.476 85.655,60.734 83.228,59.668C82.797,59.488 82.375,59.271 81.961,59.018C81.548,58.766 81.139,58.341 80.735,57.745C80.33,57.149 80.128,56.382 80.128,55.443L80.128,54.901C80.128,53.836 80.407,53.041 80.964,52.518C81.431,52.066 82.114,51.841 83.013,51.841C83.911,51.841 84.586,52.066 85.035,52.518C85.592,53.023 85.871,53.818 85.871,54.901L85.871,56.743L86.868,56.743L86.868,54.901C86.868,53.529 86.491,52.491 85.736,51.786C85.053,51.154 84.145,50.838 83.013,50.838C81.862,50.838 80.955,51.154 80.29,51.786C79.517,52.509 79.13,53.547 79.13,54.901L79.13,55.443C79.13,57.05 79.544,58.233 80.371,58.991C81.197,59.75 82.015,60.282 82.824,60.589C83.489,60.86 84.163,61.321 84.846,61.971C85.529,62.621 85.871,63.596 85.871,64.896L85.871,66.223C85.871,67.307 85.592,68.101 85.035,68.607C84.55,69.058 83.876,69.284 83.013,69.284C82.114,69.284 81.431,69.058 80.964,68.607C80.407,68.083 80.128,67.289 80.128,66.223L80.128,63.46L79.13,63.46L79.13,66.223C79.13,67.577 79.517,68.616 80.29,69.338C80.955,69.97 81.862,70.286 83.013,70.286ZM200.214,70.286C201.347,70.286 202.254,69.97 202.937,69.338C203.692,68.634 204.07,67.595 204.07,66.223L204.07,51.082L203.072,51.082L203.072,66.223C203.072,67.289 202.803,68.083 202.263,68.607C201.76,69.058 201.077,69.284 200.214,69.284C199.316,69.284 198.633,69.058 198.165,68.607C197.626,68.083 197.356,67.289 197.356,66.223L197.356,51.082L196.359,51.082L196.359,66.223C196.359,67.595 196.736,68.634 197.491,69.338C198.174,69.97 199.082,70.286 200.214,70.286ZM228.173,70.286C229.306,70.286 230.213,69.97 230.896,69.338C231.651,68.634 232.029,67.595 232.029,66.223L232.029,63.487L231.031,63.487L231.031,66.223C231.031,67.307 230.762,68.101 230.222,68.607C229.755,69.058 229.072,69.284 228.173,69.284C227.275,69.284 226.592,69.058 226.124,68.607C225.585,68.101 225.315,67.307 225.315,66.223L225.315,54.901C225.315,53.818 225.585,53.023 226.124,52.518C226.592,52.066 227.275,51.841 228.173,51.841C229.072,51.841 229.755,52.066 230.222,52.518C230.762,53.023 231.031,53.818 231.031,54.901L231.031,56.77L232.029,56.77L232.029,54.901C232.029,53.529 231.651,52.491 230.896,51.786C230.213,51.154 229.306,50.838 228.173,50.838C227.041,50.838 226.133,51.154 225.45,51.786C224.695,52.491 224.318,53.529 224.318,54.901L224.318,66.223C224.318,67.595 224.695,68.634 225.45,69.338C226.133,69.97 227.041,70.286 228.173,70.286ZM143.919,70.042L143.919,69.04L138.149,69.04L138.149,51.082L137.152,51.082L137.152,70.042L143.919,70.042ZM186.868,65.194L191.964,51.082L192.503,51.082L192.503,70.042L191.506,70.042L191.506,54.928L187.138,67.063L186.572,67.063L182.204,54.928L182.204,70.042L181.207,70.042L181.207,51.082L181.746,51.082L186.868,65.194ZM171.662,52.084L165.893,52.084L165.893,59.831L169.991,59.831L169.991,60.833L165.893,60.833L165.893,70.042L164.895,70.042L164.895,51.082L171.662,51.082L171.662,52.084ZM220.301,70.042L220.301,51.082L219.303,51.082L219.303,70.042L220.301,70.042ZM109.004,51.082L110.001,51.082L110.001,70.042L109.004,70.042L109.004,60.833L103.261,60.833L103.261,70.042L102.263,70.042L102.263,51.082L103.261,51.082L103.261,59.831L109.004,59.831L109.004,51.082ZM129.387,51.841C130.25,51.841 130.933,52.066 131.436,52.518C131.993,53.041 132.272,53.836 132.272,54.901L132.272,66.223C132.272,67.289 131.993,68.083 131.436,68.607C130.969,69.058 130.286,69.284 129.387,69.284C128.506,69.284 127.832,69.058 127.365,68.607C126.808,68.101 126.529,67.307 126.529,66.223L126.529,54.901C126.529,53.818 126.808,53.023 127.365,52.518C127.868,52.066 128.542,51.841 129.387,51.841ZM157.13,51.841C157.993,51.841 158.676,52.066 159.179,52.518C159.736,53.041 160.015,53.836 160.015,54.901L160.015,66.223C160.015,67.289 159.736,68.083 159.179,68.607C158.712,69.058 158.029,69.284 157.13,69.284C156.249,69.284 155.575,69.058 155.108,68.607C154.551,68.101 154.272,67.307 154.272,66.223L154.272,54.901C154.272,53.818 154.551,53.023 155.108,52.518C155.611,52.066 156.285,51.841 157.13,51.841ZM117.874,51.841C118.737,51.841 119.42,52.066 119.923,52.518C120.48,53.041 120.759,53.836 120.759,54.901L120.759,66.223C120.759,67.289 120.48,68.083 119.923,68.607C119.456,69.058 118.773,69.284 117.874,69.284C116.993,69.284 116.319,69.058 115.852,68.607C115.295,68.101 115.016,67.307 115.016,66.223L115.016,54.901C115.016,53.818 115.295,53.023 115.852,52.518C116.355,52.066 117.029,51.841 117.874,51.841ZM54.191,22.837C51.797,30.316 44.405,53.406 42.223,60.209C41.617,62.102 40.211,63.635 38.376,64.402C37.155,64.916 35.625,65.234 33.85,64.944C27.25,63.869 28.539,55.591 35.908,55.623C40.228,55.642 41.316,59.425 41.316,59.425L49.738,15.272L65.745,31.278L54.191,22.837ZM188.381,44.043C187.027,44.731 185.481,45.114 183.813,45.114C182.097,45.114 180.528,44.731 179.166,44.043L188.381,44.043ZM167.943,44.043C166.625,44.797 164.979,45.114 163.283,45.114C161.246,45.114 159.56,44.611 158.305,44.043L167.943,44.043ZM207.146,44.043C205.971,44.502 204.688,44.749 203.35,44.749L197.566,44.749L197.566,44.043L207.146,44.043ZM114.064,44.043L114.064,44.749L109.516,44.749L109.516,44.043L114.064,44.043ZM95.345,44.043L95.931,44.749L90.146,44.749L89.603,44.043L95.345,44.043ZM79.495,41.882L84.044,41.882L84.044,43.8L79.565,43.8L79.565,44.043L84.044,44.043L84.044,44.749L79.495,44.749L79.495,41.882ZM143.891,44.043L143.891,44.749L139.343,44.749L139.343,44.043L143.891,44.043ZM224.669,44.043L224.669,44.749L220.12,44.749L220.12,44.043L224.669,44.043ZM136.587,44.043L136.87,44.749L131.981,44.749L131.721,44.043L136.587,44.043ZM121.686,44.043L121.426,44.749L116.537,44.749L116.821,44.043L121.686,44.043ZM103.073,44.043L103.073,44.749L98.524,44.749L98.524,44.043L103.073,44.043ZM136.489,43.8L131.631,43.8L130.925,41.882L135.718,41.882L136.489,43.8ZM103.073,43.8L98.524,43.8L98.524,41.882L103.073,41.882L103.073,43.8ZM114.064,43.8L109.516,43.8L109.516,41.882L114.064,41.882L114.064,43.8ZM210.493,41.882C209.689,42.673 208.75,43.322 207.715,43.8L197.566,43.8L197.566,41.882L210.493,41.882ZM191.2,41.882C190.516,42.641 189.718,43.289 188.829,43.8L178.716,43.8C177.825,43.289 177.031,42.641 176.354,41.882L191.2,41.882ZM224.669,43.8L220.12,43.8L220.12,41.882L224.669,41.882L224.669,43.8ZM170.08,41.882C169.65,42.684 169.05,43.316 168.333,43.8L157.801,43.8C156.495,43.135 155.779,42.465 155.779,42.465L156.125,41.882L170.08,41.882ZM95.144,43.8L89.416,43.8L87.939,41.882L93.554,41.882L95.144,43.8ZM143.891,43.8L139.343,43.8L139.343,41.882L143.891,41.882L143.891,43.8ZM121.776,43.8L116.918,43.8L117.689,41.882L122.482,41.882L121.776,43.8ZM143.891,41.491L139.343,41.491L139.343,39.792L143.891,39.792L143.891,41.491ZM192.647,39.792C192.331,40.4 191.957,40.969 191.533,41.491L176.023,41.491C175.604,40.969 175.237,40.4 174.926,39.792L180.802,39.792C181.569,40.353 182.561,40.691 183.813,40.691C185.033,40.691 186.012,40.353 186.775,39.792L192.647,39.792ZM224.669,41.491L220.12,41.491L220.12,39.792L224.669,39.792L224.669,41.491ZM170.736,39.792C170.649,40.422 170.49,40.987 170.269,41.491L156.356,41.491L157.362,39.792L159.728,39.792C160.662,40.345 161.855,40.885 162.943,40.885C163.751,40.885 165.149,40.821 165.646,39.792L170.736,39.792ZM212.104,39.792C211.752,40.407 211.337,40.976 210.868,41.491L197.566,41.491L197.566,39.792L202.115,39.792L202.115,40.666L202.817,40.666C203.998,40.666 205.048,40.349 205.915,39.792L212.104,39.792ZM103.073,41.491L98.524,41.491L98.524,39.792L103.073,39.792L103.073,41.491ZM114.064,41.491L109.516,41.491L109.516,39.792L114.064,39.792L114.064,41.491ZM93.231,41.491L87.639,41.491L86.331,39.792L91.823,39.792L93.231,41.491ZM84.044,41.491L79.495,41.491L79.495,39.792L84.044,39.792L84.044,41.491ZM122.625,41.491L117.846,41.491L118.529,39.792L134.879,39.792L135.561,41.491L130.782,41.491L130.504,40.736L122.903,40.736L122.625,41.491ZM79.495,39.111L79.495,24.687L86.636,24.687C90.34,24.687 93.147,26.704 93.147,30.643C93.147,33.659 91.501,35.677 89.058,36.456L91.258,39.111L85.806,39.111L84.044,36.82L84.044,39.111L79.495,39.111ZM134.605,39.111L118.802,39.111L124.598,24.687L128.81,24.687L134.605,39.111ZM220.12,39.111L220.12,35.752L212.76,24.687L218.232,24.687L222.395,31.107L226.557,24.687L232.029,24.687L224.669,35.752L224.669,39.111L220.12,39.111ZM139.343,39.111L139.343,24.687L146.629,24.687C150.527,24.687 153.454,26.704 153.454,30.863C153.454,34.998 150.527,37.307 146.629,37.307L143.891,37.307L143.891,39.111L139.343,39.111ZM165.819,39.111C165.824,39.048 165.827,38.982 165.827,38.915C165.827,37.455 163.695,36.798 161.321,35.606C158.926,34.414 157.523,32.541 157.523,30.449C157.523,26.704 160.813,24.322 164.034,24.322C167.666,24.322 170.23,26.218 170.23,26.219L168.391,29.865C168.391,29.865 166.407,28.478 164.349,28.478C162.798,28.478 161.974,29.184 161.974,30.278C161.974,31.397 163.864,32.2 166.141,33.173C168.367,34.122 170.811,36.02 170.811,38.647C170.811,38.805 170.807,38.96 170.799,39.111L165.819,39.111ZM197.566,39.111L197.566,24.687L203.35,24.687C208.824,24.687 213.421,28.867 213.421,34.706C213.421,36.319 213.075,37.804 212.459,39.111L206.767,39.111C207.858,38.038 208.497,36.491 208.509,34.73C208.509,31.373 206.208,28.77 202.817,28.77L202.115,28.77L202.115,39.111L197.566,39.111ZM174.609,39.111C174.048,37.781 173.743,36.292 173.743,34.706C173.743,28.843 178.316,24.322 183.813,24.322C189.359,24.322 193.859,28.843 193.859,34.706C193.859,36.292 193.544,37.781 192.971,39.111L187.51,39.111C188.502,37.965 188.948,36.335 188.948,34.706C188.948,31.714 187.349,28.721 183.813,28.721C180.302,28.721 178.655,31.714 178.655,34.706C178.655,36.335 179.079,37.965 180.067,39.111L174.609,39.111ZM157.766,39.111L158.055,38.623C158.055,38.623 158.294,38.826 158.689,39.111L157.766,39.111ZM98.524,39.111L98.524,24.687L103.073,24.687L103.073,32.689L109.516,32.689L109.516,24.687L114.064,24.687L114.064,39.111L109.516,39.111L109.516,36.699L103.073,36.699L103.073,39.111L98.524,39.111ZM128.955,36.726L124.452,36.726L126.679,30.889L126.728,30.889L128.955,36.726ZM143.891,33.662L143.891,28.332L145.175,28.332C146.968,28.332 148.664,28.94 148.664,31.009C148.664,33.053 146.968,33.662 145.175,33.662L143.891,33.662ZM84.044,33.586L84.044,28.332L84.577,28.332C86.297,28.332 88.356,28.454 88.356,30.959C88.356,33.464 86.297,33.586 84.577,33.586L84.044,33.586ZM90.12,16.296C85.545,16.296 83.535,13.084 83.535,10.384C83.535,7.708 85.545,4.497 90.12,4.497C92.444,4.497 94.042,5.737 94.042,5.737L95.979,1.848C95.979,1.847 93.752,0 89.418,0C83.753,0 78.599,4.667 78.599,10.433C78.599,16.174 83.777,20.792 89.418,20.792C93.752,20.792 95.979,18.945 95.979,18.945L94.042,15.055C94.042,15.055 92.444,16.296 90.12,16.296ZM155.394,0.365L155.394,20.427L159.943,20.427L159.943,12.498L166.046,20.427L171.83,20.427L164.957,12.134C167.401,11.355 169.046,9.337 169.046,6.321C169.046,2.382 166.239,0.365 162.535,0.365L155.394,0.365ZM144.861,0.365L140.649,0.365L132.588,20.427L137.478,20.427L138.955,16.414L146.555,16.414L148.032,20.427L152.922,20.427L144.861,0.365ZM110.844,0.365L99.42,0.365L99.42,20.427L110.844,20.427L110.844,16.417L103.969,16.417L103.969,12.377L110.554,12.377L110.554,8.367L103.969,8.367L103.969,4.375L110.844,4.375L110.844,0.365ZM115.157,0.365L115.157,20.427L120.941,20.427C126.439,20.427 131.011,16.247 131.011,10.384C131.011,4.545 126.414,0.365 120.941,0.365L115.157,0.365ZM119.705,16.344L119.705,4.448L120.408,4.448C123.799,4.448 126.1,7.051 126.1,10.408C126.076,13.766 123.775,16.344 120.408,16.344L119.705,16.344ZM145.006,12.404L140.504,12.404L142.731,6.567L142.779,6.567L145.006,12.404ZM159.943,9.264L159.943,4.01L160.476,4.01C162.196,4.01 164.255,4.132 164.255,6.637C164.255,9.142 162.196,9.264 160.476,9.264L159.943,9.264Z" style="fill:white;"/>
</svg>
</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-list">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                </svg><span class="sr-only">Toggle navigation</span></button>
				<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navcol-2',
					'menu_class'   => 'nav navbar-nav ml-auto pb-3 pb-lg-0',
					'menu_id'        => 'nav navbar-nav',
					'add_link_class' => 'nav-link',
				)
			);
			?>
        </div>
	</nav>
	

	
