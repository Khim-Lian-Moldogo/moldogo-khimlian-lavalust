<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;

            background:
                radial-gradient(circle at 10% 20%, #5eead4, transparent 30%),
                radial-gradient(circle at 90% 80%, #93c5fd, transparent 30%),
                linear-gradient(135deg, #0f766e, #0e7490, #2563eb);
        }

        /* BACKGROUND CIRCLES */

        body::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
            top: 8%;
            left: 12%;
        }

        body::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.10);
            bottom: -80px;
            right: 10%;
        }

        /* MAIN CONTAINER */

        .container {
            position: relative;
            z-index: 2;

            width: 90%;
            max-width: 680px;

            padding: 60px 50px;

            text-align: center;

            background: rgba(255, 255, 255, 0.17);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 24px;

            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.22),
                inset 0 1px 1px rgba(255, 255, 255, 0.3);
        }

        /* TITLE */

        h1 {
            color: #ffffff;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 35px;
        }

        /* BUTTON AREA */

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        /* BUTTONS */

        a {
            min-width: 150px;
            padding: 14px 25px;

            text-decoration: none;
            color: white;

            font-size: 14px;
            font-weight: bold;

            border-radius: 10px;

            border: 1px solid rgba(255, 255, 255, 0.45);

            transition: all 0.3s ease;
        }

        /* HOME */

        .home {
            background: linear-gradient(
                135deg,
                #14b8a6,
                #0f766e
            );

            box-shadow:
                0 8px 20px rgba(15, 118, 110, 0.35);
        }

        /* PROFILE */

        .profile {
            background: linear-gradient(
                135deg,
                #3b82f6,
                #1d4ed8
            );

            box-shadow:
                0 8px 20px rgba(29, 78, 216, 0.35);
        }

        /* HOVER */

        a:hover {
            transform: translateY(-3px);
            filter: brightness(1.1);

            box-shadow:
                0 12px 25px rgba(0, 0, 0, 0.22);
        }

        a:active {
            transform: translateY(0);
        }

        /* MOBILE */

        @media (max-width: 600px) {

            .container {
                padding: 45px 25px;
            }

            h1 {
                font-size: 26px;
            }

            .buttons {
                flex-direction: column;
            }

            a {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Welcome, Khim Lian Moldogo</h1>

        <p>
 View your personal and academic information.        </p>

        <div class="buttons">

       <div class="buttons">

    <a href="<?= site_url('student/profile'); ?>" class="profile">
        Student Profile
    </a>

</div>
        </div>

    </div>

</body>
</html>