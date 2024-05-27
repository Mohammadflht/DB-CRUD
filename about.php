<?php require_once 'navigation.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="style.css">
    <style>
    body {
        color: #111;
        overflow-x: hidden;
        padding-bottom: 50px;
    }


    /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

    .intro {
        background: #60695c;
        padding: 160px 0 100px 0;
        color: #fff;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    h1 {
      font-size: 2.5rem;
      color: #c4d7b2;
    }


    /* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

    .timeline ul {
        background: #60695c;
        padding: 50px 0;
    }

    .timeline ul li {
        list-style-type: none;
        position: relative;
        width: 6px;
        margin: 0 auto;
        padding-top: 50px;
        background: #fff;
    }

    .timeline ul li::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: inherit;
        z-index: 1;
    }

    .timeline ul li div {
        position: relative;
        bottom: 0;
        width: 400px;
        padding: 15px;
        background: #c4d7b2;
    }

    .timeline ul li div::before {
        content: "";
        position: absolute;
        bottom: 7px;
        width: 0;
        height: 0;
        border-style: solid;
    }

    .timeline ul li:nth-child(odd) div {
        left: 45px;
    }

    .timeline ul li:nth-child(odd) div::before {
        left: -15px;
        border-width: 8px 16px 8px 0;
        border-color: transparent #c4d7b2 transparent transparent;
    }

    .timeline ul li:nth-child(even) div {
        left: -439px;
    }

    .timeline ul li:nth-child(even) div::before {
        right: -15px;
        border-width: 8px 0 8px 16px;
        border-color: transparent transparent transparent #c4d7b2;
    }

    time {
        display: block;
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 8px;
    }


    /* EFFECTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

    .timeline ul li::after {
        transition: background 0.5s ease-in-out;
    }

    .timeline ul li.in-view::after {
        background: #c4d7b2;
    }

    .timeline ul li div {
        visibility: hidden;
        opacity: 0;
        transition: all 0.5s ease-in-out;
        border-radius: 4px;
    }

    .timeline ul li:nth-child(odd) div {
        transform: translate3d(200px, 0, 0);
    }

    .timeline ul li:nth-child(even) div {
        transform: translate3d(-200px, 0, 0);
    }

    .timeline ul li.in-view div {
        transform: none;
        visibility: visible;
        opacity: 1;
    }


    /* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

    @media screen and (max-width: 900px) {
        .timeline ul li div {
            width: 250px;
        }

        .timeline ul li:nth-child(even) div {
            left: -289px;
            /*250+45-6*/
        }
    }

    @media screen and (max-width: 600px) {
        .timeline ul li {
            margin-left: 20px;
        }

        .timeline ul li div {
            width: calc(100vw - 91px);
        }

        .timeline ul li:nth-child(even) div {
            left: 45px;
        }

        .timeline ul li:nth-child(even) div::before {
            left: -15px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #f45b69 transparent transparent;
        }
    }


    /* EXTRA/CLIP PATH STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .timeline-clippy ul li::after {
        width: 40px;
        height: 40px;
        border-radius: 0;
    }

    .timeline-rhombus ul li::after {
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }

    .timeline-rhombus ul li div::before {
        bottom: 12px;
    }

    .timeline-star ul li::after {
        clip-path: polygon(50% 0%,
                61% 35%,
                98% 35%,
                68% 57%,
                79% 91%,
                50% 70%,
                21% 91%,
                32% 57%,
                2% 35%,
                39% 35%);
    }

    .timeline-heptagon ul li::after {
        clip-path: polygon(50% 0%,
                90% 20%,
                100% 60%,
                75% 100%,
                25% 100%,
                0% 60%,
                10% 20%);
    }

    .timeline-infinite ul li::after {
        animation: scaleAnimation 2s infinite;
    }

    @keyframes scaleAnimation {
        0% {
            transform: translateX(-50%) scale(1);
        }

        50% {
            transform: translateX(-50%) scale(1.25);
        }

        100% {
            transform: translateX(-50%) scale(1);
        }
    }



    /* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .page-footer {
        position: fixed;
        right: 0;
        bottom: 20px;
        display: flex;
        align-items: center;
        padding: 5px;
        color: black;
        background: rgba(255, 255, 255, 0.65);
    }

    .page-footer a {
        display: flex;
        margin-left: 4px;
    }

    @keyframes moveUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
            /* Adjust the distance as needed */
        }
    }

    /* Apply the animation to the <span> tags */
    h1 span {
        display: inline-block;
        animation: moveUpDown 2s infinite;
        /* Adjust the duration as needed */
    }

    y
    </style>
</head>

<body>

    <section class="intro">
        <div class="container">
            <h1>Database Lab</h1>
            <h1>9928863</h1>
            <h1>9922743</h1><br>
            <h1><span>&darr;&darr;&darr;&darr;&darr;&darr; </span></h1>
        </div>
    </section>

    <section class="timeline">
        <ul>
            <li>
                <div>
                    <time>13 Esfand</time> The first phase of the project: scenario
                </div>
            </li>
            <li>
                <div>
                    <time>20 Esfand</time> The second phase of the project: drawing the ER diagram
                </div>
            </li>
            <li>
                <div>
                    <time>19 Farvardin</time> The third phase of the relational model mapping project
                </div>
            </li>
            <li>
                <div>
                    <time>26 Farvardin</time> The fourth phase of the project: entering data and tables in MySQL
                </div>
            </li>
            <li>
                <div>
                    <time>02 Ordibehesht</time> The fifth phase of the project: writing 10 queries according to the
                    selected database
                </div>
            </li>
            <li>
                <div>
                    <time>09 Ordibehesht</time> Choosing a programming language and communicating between that language
                    and MySQL
                </div>
            </li>
            <li>
                <div>
                    <time>06 Khordad</time> Final exam
                </div>
            </li>
            <li>
                <div>
                    <time>13 Khordad</time> Project presentation
                </div>
            </li>
        </ul>
    </section>
    <script src="about.js"></script>
</body>

</html>