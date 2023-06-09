<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $title; ?></title>
    <!-- Icon Title Page link -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/icon/Icon_Green.png'); ?>">
    <!-- CDN CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon Font Awesome -->
    <script src="https://kit.fontawesome.com/d67a92e533.js"></script>
    <style>
        @font-face {
            font-family: 'Braah One';
            src: url('<?php echo base_url("assets/") ?>font/Braah_One/BraahOne-Regular.ttf') format('truetype');
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Custom Styles for home Page -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        hr {
            color: white;
        }

        .active-tosca {
            color: white;
        }

        .rounded-corner {
            border-radius: 5px;
        }

        /* Set the body font to Braah One */
        body {
            font-family: 'Braah One', sans-serif;
            padding-top: 73px;
        }

        .font-braah-one {
            font-family: 'Braah One', sans-serif;
        }

        .font-open-sans {
            font-family: 'Open Sans', sans-serif;
        }

        .font-merriweather {
            font-family: 'Merriweather', serif;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        p {
            font-family: 'Poppins', sans-serif;
        }

        @media (100px <=width <=300px) {
            .box {
                background-color: blue;
            }
        }

        @media (min-width: 768px) {
            .news-input {
                width: 100%;
            }
        }

        .mybrandapp {
            width: 40%;
        }

        @media (1px <=width <=250px) {
            .mybrandapp {
                width: 40%;
            }

            .togglestyle {
                padding-top: 1%;
            }
        }

        @media (250px <=width <=375px) {
            .mybrandapp {
                width: 35%;
            }

            .togglestyle {
                padding-top: 2%;
            }
        }

        @media (376px <=width <=500px) {
            .mybrandapp {
                width: 40%;
            }

            .togglestyle {
                padding-top: 5%;
            }
        }

        @media (501px <=width <=768px) {
            .mybrandapp {
                width: 35%;
            }

            .togglestyle {
                padding-top: 4%;
            }
        }

        .colourstyle {
            background-color: #29d6f9;
        }


        /* Carousel */
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .bg-tosca {
            background-color: #92E3A9;
        }
        .bg-white{
            background-color: white;
        }

        /* Featurettes
    ------------------------- */


        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            /* rtl:remove */
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
    -------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }


        /* Features */
        .icon-square {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            font-size: 1.5rem;
            border-radius: .75rem;
        }
    </style>
</head>

<body>