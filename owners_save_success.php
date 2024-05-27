<?php require_once 'navigation.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Save Success</title>
    <link rel="stylesheet" href="style.css">

    <style>
    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .success-card {
        background: white;
        padding: 60px;
        border-radius: 10px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        box-shadow: 2px 1px 21px -9px rgba(0, 0, 0, 0.38);

        & div {
            border-radius: 200px;
            height: 200px;
            width: 200px;
            background: #F8FAF5;
            margin: 0 auto;
        }

        & .btn {
            background-color: #4E6E5D;
            color: white;
            padding: 14px 20px;
            margin: 20px 0 0 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.8;
            font-size: 16px;
            border-radius: 10px;
            transition: all 0.3s;

            &:hover {
                opacity: 1;
            }
        }
    }
    </style>
</head>

<body>
    <!-- <h1>Record saved successfully!</h1> -->


    <div class="success-card">
        <div>
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>The record was successfully <br> added to the database</p>

        <input type="button" class="btn" value="Return" onclick="redirectToRecords()">
    </div>

    <script>
    function redirectToRecords() {
        window.location.href = 'owners_add.php';
    }
    </script>
</body>

</html>