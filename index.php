<!-- index.php -->
<?php require_once 'navigation.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Home</title>
    <style>
.content {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.content h2 {
    position: absolute;
    transform: translate(-50%, -50%);
    font-size: 5rem;
    text-align: center;
    white-space: nowrap;
}


.content h2:nth-child(1) {
    color: transparent;
    -webkit-text-stroke: 3px #333;
    filter: blur(3px);
}

.content h2:nth-child(3) {
    color:#fff6;
    filter: drop-shadow(0 15px 15px #fff);
    z-index: 1;
    text-shadow: -15px 15px 15px rgba(0,0,0, 0.2), 15px -15px 15px rgba(255,255,255, 0.2);
}

.content h2:nth-child(2) {
    color: #03a9f4;
    /* color: #4E6E5D; */
    z-index: 2;
    animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
    0%, 100% {
        clip-path: polygon(0% 45%, 7% 42%, 13% 40%, 20% 41%, 26% 42%, 32% 46%, 37% 51%, 44% 53%, 51% 55%, 55% 60%,
        64% 60%, 71% 62%, 80% 62%, 84% 59%, 90% 57%, 94% 55%, 98% 54%, 100% 51%, 100% 100%, 0% 100%);
    }
    50% {
        clip-path: polygon(0% 63%, 4% 61%, 9% 63%, 14% 66%, 20% 67%, 29% 67%, 36% 67%, 45% 64%, 52% 60%, 60% 57%,
        67% 54%, 74% 53%, 79% 49%, 85% 47%, 89% 47%, 94% 44%, 96% 41%, 100% 37%, 100% 100%, 0% 100%);
    }
}
    </style>
</head>
<body>
    <div class="content">
    <h2>Insurance Database</h2>
      <h2>Insurance Database</h2>
      <h2>Insurance Database</h2>    </div>
</body>
</html>