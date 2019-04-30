<?php include_once('includes/head.php'); ?>

<body>
    <style>
        .loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader>img {
            width: 100px;
        }

        .loader.hidden {
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .thumb {
            height: 100px;
            border: 1px solid black;
            margin: 10px;
        }
    </style>
    <div class="loader">
        <img src="images/t_load.gif" alt="Loading..." />
    </div>
    <h1> exemplo loader! </h1>
    <img src="images/t_load.gif" class="thumb" />
</body>
<?php include_once('includes/footer.php'); ?>