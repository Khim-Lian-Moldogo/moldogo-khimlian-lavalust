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

            background:
                radial-gradient(
                    circle at 10% 20%,
                    #5eead4,
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 80%,
                    #93c5fd,
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #0f766e,
                    #0e7490,
                    #2563eb
                );

            color: #134e4a;
        }

        .profile {
            width: 100%;
            max-width: 750px;
            margin: auto;

            background: rgba(255, 255, 255, 0.95);

            border-radius: 18px;
            overflow: hidden;

            box-shadow:
                0 20px 45px rgba(0, 0, 0, 0.18);
        }

        /* HEADER */

        .header {
            padding: 40px 30px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    #0f766e,
                    #14b8a6
                );

            color: white;
        }

        .header h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 15px;
            color: #ccfbf1;
        }

        /* NAVIGATION */

        .navigation {
            display: flex;
            justify-content: center;

            padding: 20px;

            background: #f0fdfa;

            border-bottom: 1px solid #ccfbf1;
        }

        .navigation a {
            padding: 11px 25px;

            text-decoration: none;

            font-size: 14px;
            font-weight: bold;

            border-radius: 8px;

            transition: 0.3s;
        }

        .home {
            background: #0f766e;
            color: white;
        }

        .home:hover {
            background: #115e59;
            transform: translateY(-2px);
        }

        /* INFORMATION */

        .information {
            padding: 30px 40px;
        }

        .info {
            display: grid;
            grid-template-columns: 170px 1fr;

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
            line-height: 1.5;
        }

        /* SECTION TITLE */

        .section-title {
            margin-top: 10px;
            margin-bottom: 5px;

            padding-bottom: 10px;

            font-size: 18px;
            font-weight: bold;

            color: #0f766e;

            border-bottom: 2px solid #14b8a6;
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

            .information {
                padding: 20px;
            }

            .info {
                grid-template-columns: 1fr;
                gap: 6px;
            }

            .label {
                font-size: 14px;
            }

            .value {
                font-size: 14px;
            }

        }

    </style>

</head>

<body>

<div class="profile">

    <!-- HEADER -->

    <div class="header">

        <h1>Student Information</h1>

        <p>
            Student Profile
        </p>

    </div>


    <!-- NAVIGATION -->

    <div class="navigation">

        <a
            href="<?= site_url('student'); ?>"
            class="home"
        >
            Home
        </a>

    </div>


    <!-- INFORMATION -->

    <div class="information">

        <div class="section-title">
            Personal Information
        </div>

        <div class="info">

            <span class="label">
                Student ID:
            </span>

            <span class="value">
                <?= $student_id ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Name:
            </span>

            <span class="value">
                <?= $name ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Address:
            </span>

            <span class="value">
                <?= $address ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Contact Number:
            </span>

            <span class="value">
                <?= $contact_number ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Email:
            </span>

            <span class="value">
                <?= $email ?>
            </span>

        </div>


        <div class="section-title">
            Academic Information
        </div>


        <div class="info">

            <span class="label">
                School:
            </span>

            <span class="value">
                <?= $school ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Course:
            </span>

            <span class="value">
                <?= $course ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Year Level:
            </span>

            <span class="value">
                <?= $year ?>
            </span>

        </div>


        <div class="info">

            <span class="label">
                Section:
            </span>

            <span class="value">
                <?= $section ?>
            </span>

        </div>


        <div class="section-title">
            Other Information
        </div>


        


        <div class="info">

            <span class="label">
                Hobbies:
            </span>

            <span class="value">
                <?= $hobbies ?>
            </span>

        </div>

    </div>

</div>

</body>
</html>