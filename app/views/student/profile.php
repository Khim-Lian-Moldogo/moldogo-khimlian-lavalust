<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Student Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            padding: 50px 20px;

            background: linear-gradient(
                135deg,
                #ecfdf5,
                #ccfbf1
            );

            color: #134e4a;
        }

        .profile {
            width: 100%;
            max-width: 720px;
            margin: auto;

            background: white;
            border-radius: 14px;
            overflow: hidden;

            box-shadow: 0 10px 30px rgba(15, 118, 110, 0.12);
        }

        /* HEADER */

        .header {
            padding: 35px;
            text-align: center;

            background: linear-gradient(
                135deg,
                #0f766e,
                #14b8a6
            );

            color: white;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 14px;
            color: #ccfbf1;
        }

        /* NAVIGATION */

        .navigation {
            display: flex;
            justify-content: center;
            gap: 10px;

            padding: 20px;

            background: #f0fdfa;
            border-bottom: 1px solid #ccfbf1;
        }

        .navigation a {
            padding: 10px 20px;

            text-decoration: none;
            font-size: 14px;
            font-weight: bold;

            border-radius: 6px;

            transition: 0.3s;
        }

        .home {
            background: #0f766e;
            color: white;
        }

        .home:hover {
            background: #115e59;
        }

        .profile-link {
            background: #ccfbf1;
            color: #115e59;
        }

        .profile-link:hover {
            background: #99f6e4;
        }

        /* INFORMATION */

        .information {
            padding: 30px 35px;
        }

        .info {
            display: grid;
            grid-template-columns: 160px 1fr;

            padding: 17px 5px;

            border-bottom: 1px solid #e2e8f0;
        }

        .info:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
            color: #0f766e;
        }

        .value {
            color: #475569;
        }

        /* MOBILE */

        @media (max-width: 600px) {

            body {
                padding: 25px 15px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .navigation {
                flex-direction: column;
            }

            .navigation a {
                text-align: center;
            }

            .information {
                padding: 20px;
            }

            .info {
                grid-template-columns: 1fr;
                gap: 6px;
            }
        }
    </style>

</head>

<body>

<div class="profile">

    <div class="header">
        <h1>Student Information</h1>
        <p>Student Profile</p>
    </div>

    <div class="navigation">

        <a href="<?= site_url('student'); ?>" class="home">Home</a>

    </div>

    <div class="information">

        <div class="info">
            <span class="label">Student ID:</span>
            <span class="value"><?= $student_id ?></span>
        </div>

        <div class="info">
            <span class="label">Name:</span>
            <span class="value"><?= $name ?></span>
        </div>

        <div class="info">
            <span class="label">Course:</span>
            <span class="value"><?= $course ?></span>
        </div>

        <div class="info">
            <span class="label">Year Level:</span>
            <span class="value"><?= $year ?></span>
        </div>

        <div class="info">
            <span class="label">Section:</span>
            <span class="value"><?= $section ?></span>
        </div>

        <div class="info">
            <span class="label">Email:</span>
            <span class="value"><?= $email ?></span>
        </div>

    </div>

</div>

</body>
</html>