<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Assignment Help Provider Since 2012 | EssayCorp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="shortcut icon" href="essaycorpicon.png " type="image/x-icon" title="" alt="essaycorp icon">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Cards Css  */
        .card {
            background-color: white;
            border-radius: 30px;
            padding: 15px;
            box-shadow: 0 8px 16px rgba(124, 121, 121, 0.2);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        h3,
        p.fw-bold {
            margin: 15px 0;
            color: #333;
            text-align: left;
            font-weight: 700;
        }

        .section-title {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .fonts {
            font-size: 24px;
        }


        /* carousel Css*/
        .owl-carousel .item {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .box {
            background-color: #f7f7f7;
            border-radius: 30px;
            padding: 15px;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .box-img {
            width: 100px;
            height: 45px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .box-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .marquee-line-container {
            position: relative;
            width: 100%;
            height: 5px;
            overflow: hidden;
        }

        .marquee-line {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #FF9600;
            animation: move-line 5s linear infinite;
        }

        @keyframes move-line {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(100%);
            }
        }

        .box-content {
            font-size: 0.9rem;
            color: #777;
        }

        /* Styling arrows */
        .custom-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .custom-prev,
        .custom-next {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 15px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            line-height: 1;
            z-index: 100;
        }

        .custom-prev:hover,
        .custom-next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Responsive styles */
        @media (max-width: 1200px) {
            .owl-carousel .item {
                flex: 0 0 33.33%;
            }
        }

        @media (max-width: 768px) {
            .owl-carousel .item {
                flex: 0 0 50%;
            }

            .box {
                width: 90%;
            }
        }

        @media (max-width: 576px) {
            .owl-carousel .item {
                flex: 0 0 100%;
            }

            .box {
                width: 100%;
            }

            .box-img {
                width: 80px;
                height: 80px;
            }

            .box-title {
                font-size: 1rem;
            }

            .box-content {
                font-size: 0.8rem;
            }
        }

        .owl-theme .owl-dots,
        .owl-theme .owl-nav {
            text-align: center;
            -webkit-tap-highlight-color: transparent;
            font-size: 30px;
        }

        /* Designer Cards Css*/
        .profile-card {
            padding: 20px;
            border: 1px solid #eaeaea;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);
            background-color: #fff;
            transition: transform 0.2s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-card img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 10px;
            border: 4px solid #004da8;
            box-shadow: 0px 0px 10px rgba(0, 77, 168, 0.5);
        }

        .profile-card h4 {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .profile-card .rating {
            color: #f39c12;
            margin-top: 5px;
        }

        .profile-card .description {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        .profile-card .hire-btn {
            display: block;
            margin: 15px auto;
            padding: 8px 15px;
            border: 1px solid #004da8;
            background-color: #004da8;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-card .hire-btn:hover {
            background-color: #003366;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .profile-card {
                margin-bottom: 20px;
            }

            .profile-card img {
                width: 50px;
                height: 50px;
            }

            .profile-card h4 {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .profile-card {
                padding: 15px;
            }

            .profile-card .description {
                font-size: 12px;
            }

            .profile-card .hire-btn {
                padding: 5px 10px;
            }
        }

        /* line css */
        .line {
            width: 100%;
            background-image: linear-gradient(to right, #d2e8ff, #e5e5e6, #e4e5e9, #d2e8ff);
        }

        .box {
            width: 300px;
            border-radius: 50px;
            margin: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);

        }

        /* session eight css */
        .box2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);

        }

        .text-content {
            flex: 1 1 60%;
            padding-right: 20px;
        }

        .text-content h1 {
            font-size: 2rem;
            margin-top: 50px;
            color: #000;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .text-content p {
            font-size: 1rem;
            color: gray;
            margin-bottom: 30px;
        }

        .topics {
            display: flex;
            flex-wrap: wrap;
        }

        .topics ul {
            list-style-type: none;
            margin-right: 50px;
            padding: 0;
        }

        /* Custom Styles for Red Bullets and Yellow Text */
        .topics ul li {
            font-size: 1.1rem;
            margin-top: 20px;
            color: black;
            position: relative;
            padding-left: 20px;
        }

        .topics ul li::before {
            content: "•";
            color: #003b8a;
            position: absolute;
            left: 0;
            font-size: 1.5rem;
            line-height: 1rem;
            margin-top: 6px;
        }

        .features-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);
            flex: 1 1 35%;
            max-width: 400px;
        }

        .features-card h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .features-list {
            list-style: none;
            margin-bottom: 20px;
        }

        .features-list li {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .features-list li:last-child {
            border-bottom: none;
        }



        .price {
            text-decoration: line-through;
            color: gray;
        }

        .free {
            color: #004da8;
            font-weight: bold;
        }

        .cta-button {
            display: inline-block;
            background-color: #004da8;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #004da8;
            /* Darker shade on hover */
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .text-content h1 {
                font-size: 2rem;
            }

            .features-card h2 {
                font-size: 1.25rem;
            }

            .features-list li {
                font-size: 0.9rem;
            }

            .cta-button {
                padding: 10px;
            }

            .box2 {
                flex-direction: column;
                align-items: center;
            }

            .text-content {
                padding-right: 0;
                margin-bottom: 20px;
            }
        }

        .rating {
            color: #f39c12;
            margin-top: 5px;
        }


        /* Banner Css  */

        .stats-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: transparent linear-gradient(180deg, #f6f6fa, #f5f6fa 0, #d2e8ff) 0 0 no-repeat padding-box;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);
            max-width: 1200px;
            margin: 0 auto;
        }

        .stat-box {
            text-align: center;
            padding: 0 20px;
            margin-top: 20px;
        }

        .stat-box h2 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #004da8;
        }

        .stat-box:nth-child(2) h2 {
            color: #c0392b;
        }

        .stat-box:nth-child(3) h2 {
            color: #8e6b11;
        }

        .stat-box p {
            font-size: 15px;
            color: black;
            /* font-weight: bold; */
        }

        /* Divider between the stat boxes */
        .divider {
            width: 3px;
            height: 80px;
            background-color: #c5c3c3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .stats-container {
                flex-direction: column;
            }

            .divider {
                display: none;
            }

            .stat-box {
                margin-bottom: 20px;
            }
        }

        /* FAQs Css  */
        .accordion-wrapper {
            /* display: flex; */
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
        }

        .accordion-column {
            flex: 1;
            margin: 10px;
        }

        .accordion {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 77, 168, 0.3);
            overflow: hidden;
        }

        .accordion-item {
            border-bottom: 1px solid #ddd;
        }

        .accordion-title {
            background-color: white;
            color: black;
            padding: 15px 20px;
            font-size: 15px;
            /* font-weight: bold; */
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .accordion-title::after {
            content: '+';
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .accordion-title.active::after {
            content: '-';
            transform: rotate(180deg);
        }

        .accordion-content {
            display: none;
            padding: 15px 20px;
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }

        .accordion-content.show {
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .accordion-wrapper {
                flex-direction: column;
            }

            .accordion-column {
                margin: 0 0 20px 0;
            }

            .accordion-title {
                font-size: 16px;
            }

            .accordion-content {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .accordion-title {
                font-size: 14px;
                padding: 12px 15px;
            }

            .accordion-content {
                font-size: 13px;
            }
        }

        /* Navbar Css  */
        .navbar-light .navbar-nav .nav-link {
            color: black;
        }

        .dropdown-menu {
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav {
            margin: 0 auto;
            /* Center the navbar items on larger screens */
        }

        .btn-order {
            margin-left: 15px;
            /* Slightly adjust the button position */
        }

        .user-icon {
            width: 30px;
            /* Set a fixed width for the user icon */
            margin-left: 15px;
            /* Space between icon and button */
        }

        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
                /* Stack items vertically on smaller screens */
                text-align: left;
                /* Align text to the left in dropdown */
                margin: 0;
                /* Reset margin for mobile */
            }

            .btn-order {
                margin: 10px 0;
                /* Add vertical spacing on small screens */
            }
        }

        @media (min-width: 769px) {
            .navbar-nav {
                display: flex;
                /* Use flexbox for laptop and larger screens */
                justify-content: center;
                /* Center items */
                flex-wrap: wrap;
                /* Allow wrapping if needed */
            }
        }

        .mbadrop {
            display: none;
            position: relative;
        }

        .mba:hover .mbadrop {
            display: block;
            position: absolute;
            background-color: white;
            left: 105%;
        }

        ul li a {
            text-decoration: none;
            color: black;
        }


        /* /* Assignment Css   */

        .assignment {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            /* max-width: 1200px; */
            margin: 0 auto;
        }

        .left-section {
            flex: 1;
            padding: 20px;
            min-width: 250px;
        }

        .right-section {
            flex: 1;
            padding: 20px;
            /* background-color: #205bb3; */
            background-image: linear-gradient(to right, #accff7, #e5e5e6, #e4e5e9, #accff7);
            border-radius: 10px;
            min-width: 300px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .highlight {
            background: linear-gradient(to right, #9d2022, #205bb3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bolder;
            font-size: 60px;
        }

        .ratings {
            display: flex;
            margin-top: 15px;
        }

        .rating {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .rating img {
            width: 30px;
            height: 30px;
            margin-right: 5px;
        }



        img {
            max-width: 100%;
            height: auto;
            /* margin-top: 15px; */
        }

        @media (max-width: 1024px) {

            .left-section,
            .right-section {
                flex: 0 0 48%;
            }
        }

        @media (max-width: 768px) {
            .assignment {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
            }

            .pages-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .pages-control {
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.5rem;
            }

            .highlight {
                font-size: 2.5rem;
            }

            .form input,
            .form select,
            .form button {
                font-size: 0.9rem;
                padding: 8px;
            }

            .pages-control input {
                width: 40px;
            }
        }

        /* FORM STYLING  */
        form {
            border-radius: 10px;
            padding: 20px 30px;
            background-color: white;
            box-shadow: 0 4px 20px rgba(231, 103, 103, 0.1);
        }

        .submitInstantForm {
            margin-top: 1.5rem;
        }

        .file-row input[type="file"] {
            height: 50px;
            padding: 10px;
        }

        .toggle-label {
            margin-left: 10px;
        }

        .tooltiptext {
            visibility: hidden;
            width: 150px;
            background-color: #e9ecef;
            color: black;
            text-align: center;
            border-radius: 5px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -60px;
        }

        .quant-style:hover .tooltiptext {
            visibility: visible;
        }

        .submit {
            color: black;
            border-radius: 20px;
            border: none;
            font-size: 15px;
            font-weight: bold;
        }

        .back {
            background: transparent linear-gradient(180deg, #f6f6fa, #f5f6fa 0, #d2e8ff) 0 0 no-repeat padding-box;
        }

        .fa-circle-check {
            color: #205bb3;
        }

        /* Responsive text */
        .left-section h1,
        .left-section p {
            text-align: left;
        }

        /* Smaller size for mobile devices */
        @media (max-width: 768px) {
            .responsive-line {
                font-weight: bold;
                font-size: 1.25rem;
            }
        }

        /* Footer css  */
        footer {
            background: transparent linear-gradient(180deg, #f6f6fa, #f5f6fa 0, #d2e8ff) 0 0 no-repeat padding-box;
            background: url(footer-bg.png);
            /* padding: 40px 0; */
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            padding-top: 30px;
            justify-content: space-between;
        }

        .footer-column {
            flex: 1 1 200px;
            margin: 10px;
        }

        h2 {
            color: #205bb3;
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        p,
        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #205bb3;
        }

        .contact-info i {
            margin-right: 10px;
            color: #205bb3;
        }

        .newsletter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .newsletter input[type="email"] {
            padding: 10px;
            border: none;
            outline: none;
            flex: 1;
            box-sizing: border-box;
        }

        .newsletter button {
            padding: 10px 20px;
            border: none;
            background-color: #205bb3;
            color: white;
            cursor: pointer;
        }

        .social-icons {
            margin-top: 15px;
        }

        .social-icons a {
            margin-right: 10px;
            font-size: 1.5rem;
            color: #205bb3;
        }

        .social-icons a:hover {
            color: #205bb3;
        }

        .footer-bottom {
            background-color: #205bb3;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                flex-basis: 100%;
                text-align: center;
            }

            .newsletter {
                width: 100%;
                max-width: none;
            }

            .social-icons {
                justify-content: center;
            }
        }

        .footer-column ul {
            list-style-type: none;
            /* Removes bullet points */
            padding: 0;
            /* Removes default padding */
        }

        .footer-column li {
            margin: 5px 0;
        }

        .footer-background {
            background: white url(footer-bg.png) no-repeat right top;
            background-size: contain;
            border-top: 1px solid #e1ecff;
            border-bottom: 1px solid #e1ecff;
            /* padding: 60px 0 30px 0; */

        }

        .footer-container {
            position: relative;
            z-index: 1;
        }

        .footer-bottom {
            z-index: 1;
            position: relative;
            padding: 10px 0;
            text-align: center;
        }

        /* To style the modal */
        .offer-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .offer-discount {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .offer-details {
            margin-top: 10px;
            font-size: 1rem;
        }

        /* User Icon Styles */
        .user-icon {
            font-size: 2rem;
            cursor: pointer;
            color: #004da8;
            text-align: center;
            margin: 20px;
        }

        /* Login Section */
        .login-btn {
            background-color: #004da8;
            color: white;
            font-weight: bold;
            width: 100%;
        }

        /* Social Login Buttons */
        .social-login {
            margin-top: 20px;
        }

        .social-login button {
            width: 48%;
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .social-login i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Hover and Active Effects */
        .social-login button:hover {
            background-color: #004da8;
            color: white;
            border-color: #004da8;
        }

        .social-login button:active {
            background-color: #004da8;
            color: white;
            border-color: #004da8;
        }

        .modal-custom {
            max-width: 800px;
            /* Set desired width */
        }

        .features {
            display: flex;
            justify-content: space-around;
            padding: 15px;
            margin-left: -50px;

        }

        .feature-item {
            display: flex;
            align-items: center;
            /* padding: 10px; */
        }

        .feature-text {
            text-align: left;
        }

        .feature-text h4 {
            font-size: 18px;
            margin: 0;
            font-weight: bold;
        }

        .feature-text p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .features {
                flex-direction: column;
                align-items: center;
            }

            .feature-item {
                margin-bottom: 20px;
            }
        }

        .yellow {
            color: rgb(247, 167, 18);
        }

        .green {
            color: green;
        }

        .red {
            color: #9d2022;
        }

        .blue {
            color: #004da8;
        }
    </style>

</head>

<body>


    <!-- First Session Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <div class="row w-100">
                <!-- Logo Section -->
                <div class="col-6 col-lg-3 d-flex align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img src="logo.png" alt="Logo" width="100%" title=""> <!-- Ensure logo has a height -->
                    </a>
                </div>

                <!-- User Icon and Mobile Menu Button -->
                <div class="col-6 d-lg-none d-flex justify-content-end align-items-center">
                    <img src="user.png" alt="User Icon" class="user-icon me-2" title="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <!-- Navigation Links Section -->
                <div class="col-12 col-lg-6 mt-3">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <li><a href="https://www.essaycorp.com/services/online-assignment-help"
                                            class="dropdown-item">Assignment Management</a></li>
                                    <li><a href="https://www.essaycorp.com/services/homework-help"
                                            class="dropdown-item">Homework Management</a></li>
                                    <li><a href="https://www.essaycorp.com/services/thesis-dissertation-help"
                                            class="dropdown-item">Thesis-Dissertation Help</a></li>
                                    <li><a href="https://www.essaycorp.com/services/term-paper-help"
                                            class="dropdown-item">Term Paper Help</a></li>
                                    <li><a href="https://www.essaycorp.com/services/proofreading-help"
                                            class="dropdown-item">Proofreading Help</a></li>
                                    <li><a href="https://www.essaycorp.com/services/essay-help"
                                            class="dropdown-item">Essay Help</a></li>
                                    <li><a href="https://www.essaycorp.com/services/plagiarism"
                                            class="dropdown-item">Plagiarism Check</a></li>
                                    <li><a href="https://www.essaycorp.com/referencing-help"
                                            class="dropdown-item">Referencing Help</a></li>
                                    <li><a href="https://www.essaycorp.com/online-exam-test-quiz"
                                            class="dropdown-item">Online Exam/Text/Quiz</a></li>
                                    <li><a href="https://www.essaycorp.com/essay-writing-service-in-canada"
                                            class="dropdown-item">Essay Writing Canada</a></li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown nested-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Subject
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="subjectDropdown">
                                    <li class="mba"><a href="#" class="dropdown-item">Management/MBA</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px;  margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/marketing-assignment-help">Marketing</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/leadership-assignment-help">Leadership</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/hospitality-management-assignment-help">Hospitality</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/human-resource-management-assignment-help">Human
                                                                Resourses</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/marketing-research-assignment-help">Marketing
                                                                Research</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-environment-assignment-help">Business
                                                                Environment</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/mba-essay-writing-service">MBA
                                                                Essay</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/mba-assignment-help">MBA</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/organizational-behavior-assignment-help">Organization
                                                                Behavior</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/relationship-marketing-assignment-help">Relationship
                                                                Marketing</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-management-assignment-help">Business
                                                                Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-development-assignment-help">Business
                                                                Development</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-ethics-assignment-help">Business
                                                                Ethics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/organization-culture-assignment-help">Organization
                                                                Culture</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-plan-assignment-help">Business
                                                                Planning</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/operation-research-assignment-help">Operation
                                                                Research</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/consumer-behavior-assignment-help">Consumer
                                                                Behavior</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/strategic-management-assignment-help">Strategic
                                                                Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/information-technology-management-assignment-help">IT
                                                                Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/change-management-assignment-help">Change
                                                                Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/management-assignment-help">Management</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/international-equity-market-assignment-help">International
                                                                Equity Market</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/project-management-assignment-help">Project
                                                                Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/cross-cultural-management-assignment-help">Cross
                                                                Cultural Management</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/compensation-management-assignments-help">Compensation
                                                                Management</a> </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/public-relation-assignment-help">Public
                                                                Relation</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/internship-assignment-help">Internship</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Finance/Accounting</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px;  margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/accounting-assignment-help">Accounting</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/debenture-assignment-help">Debenture</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/bookkeeping-assignment-help">Bookkeeping</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/firm-valuation-assignment-help">Firm
                                                                Valuation</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/capital-budgeting-assignment-help">Capital
                                                                Budgeting</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/perdisco-assignment-help">Perdisco/MyOB</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/accounting-101-assignment-help">Accounting
                                                                101</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/behavioral-finance-assignment-help">Behavioral
                                                                Finance</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/offshore-banking-assignment-help">Offshore
                                                                Banking</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/financial-accounting-assignment-help">Financial
                                                                Accounting</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/cost-accounting-assignment-help">Cost
                                                                Accounting</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/corporate-finance-assignment-help">Corporate
                                                                Finance</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-accounting-assignment-help">Business
                                                                Accounting</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/accounting-concepts-assignment-help">Accounting
                                                                Concepts</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/finance-assignment-help">Finance</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/finance-planning-assignment-help">Finance
                                                                Planning</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/corporate-banking-assignment-help">Corporate
                                                                Banking</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/cash-flow-statement-assignment-help">Cash
                                                                Flow Statement</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/management-accounting-assignment-help">Management
                                                                Accounting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Taxation/Law</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px;  margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/taxation-assignment-help">Taxation</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/law-enforcement-assignment-help">Law
                                                                Enforcement</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/political-science-assignment-help">Political
                                                                Science</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/australian-taxation-assignment-help">Australian
                                                                Texation</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/contract-law-assignment-help">Contract
                                                                Law</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/law-assignment-help">Law</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/uk-taxation-assignment-help">U.K
                                                                Texation</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/constitutional-law-assignment-help">Constitutional
                                                                Law</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-law-assignment-help">Business
                                                                Law</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/criminology-assignment-help">Criminology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Medical/Science</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px;  margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/science-assignment-help">Science</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/pathophysiology-assignment-help">Pathophysiology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/paleontology-assignment-help">Paleontology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/biotechnology-assignment-help">BioTechnology</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/biology-assignment-help">Biology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/nursing-assignment-help">Nursing</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/pathology-assignment-help">Pathology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/sports-science-assignment-help">Sports
                                                                Science</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/zoology-assignment-help">Zoology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/gynaecological-nursing-assignment-help">Gynaecology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/pharmacology-assignment-help">Pharmacology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/biometry-assignment-help">Biometry</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/chemistry-assignment-help">Chemistry</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/vertebrates-assignment-help">Vertebrates</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/quaternary-science-assignment-help">Quaternary
                                                                Science</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/medical-science-assignment-help">Medical
                                                                Science</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Engineering</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/matlab-assignment-help">Matlab</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/fluid-mechanics-assignment-help">Fluid
                                                                Mechanics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/traffic-engineering-assignment-help">Traffic
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/geomatics-assignment-help">Geomatics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/mechanical-engineering-assignment-help">Mechanical
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/biomedical-engineering-assignment-help">Biomedical
                                                                Engineering</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/civil-engineering-assignment-help">Civil
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/aerospace-engineering-assignment-help">Aerospace
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/nuclear-engineering-assignment-help">Nuclear
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/solid-modeling-assignment-help">Solid
                                                                Modeling</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/geotechnical-engineering-assignment-help">Geotechnical</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/engineering-ethics-assignment-help">Engineering
                                                                Ethics</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/electrical-engineering-assignment-help">Electrical
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/chemical-engineering-assignment-help">Chemical
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/solid-mechanics-assignment-help">Solid
                                                                Mechanics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/thermal-engineering-assignment-help">Thermal
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/thermodynamics-assignment-help">Thermodynamics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/architecture-assignment-help">Architecture</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/autocad-assignment-help">AutoCard</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/abaqus-assignment-help">Abaqus</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computer-engineering-assignment-help">Computer
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/materials-engineering-assignment-help">Materials
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/structural-engineering-assignment-help">Structurals
                                                                Engineering</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/engineering-assignment-help">Engineering</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Social Science</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/microeconomics-assignment-help">Microeconomics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/geography-assignment-help">Geography</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/normative-economics-assignment-help">Normative
                                                                Economics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/communication-system-assignment-help">Communication
                                                                System</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/economics-assignment-help">Economics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/political-science-assignment-help">Political
                                                                Science</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/philosophy-assignment-help">Philosophy</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/humanities-assignment-help">Humanities</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/social-science-assignment-help">Social
                                                                Science</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/mass-communication-assignment-help">Mass
                                                                Communication</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/history-assignment-help">History</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/anthropology-assignment-help">Anthropology</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/anthropology-assignment-help">Communication</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Computer Science</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computer-science-assignment-help">Computer
                                                                Science</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/c++-assignment-help">C++</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/html-assignment-help">HTML</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computer-architecture-assignment-help">Computer
                                                                Architecture</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/maple-assignment-help">Maple</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/oracle-assignment-help">Oracle</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/php-assignment-help">PHP</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/database-normalization-assignment-help">Database
                                                                Normalization</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/software-engineering-assignment-help">Software
                                                                Engineering</a> </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/oxmetrics-assignment-help">OxMetrics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/artificial-intelligence-assignment-help">Artificial
                                                                Intelligence</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/data-research-assignment-help">Data
                                                                Research</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/sql-assignment-help">SQL</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/ruby-assignment-help">Ruby</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/cloud-computing-assignment-help">Cloud
                                                                Computing</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/programming-assignment-help">Programming</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/operating-system-assignment-help">Operating
                                                                system</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/data-research-assignment-help">Data
                                                                Structure</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/python-assignment-help">Python</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computer-network-assignment-help">Computer
                                                                Network</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computer-graphics-assignment-help">Computer
                                                                Graphics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/object-oriented-programming-assignment-help">OOPs</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/android-assignment-help">Android</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/java-assignment-help">Java</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/linux-assignment-help">Linux</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/racket-programming-assignment-help">Racket</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/computation-assignment-help">Computation</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/uml-diagram-assignment-help">UML
                                                                Diagram</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/information-technology-assignment-help">Information
                                                                Technology</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Mathematics</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/math-assignment-help">Math</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/geometry-assignment-help">Geometry</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/applied-math-assignment-help">Applied
                                                                Mathematics</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/math-homework-help">Homework</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/trigonometry-assignment-help">Trigonometry</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/binomial-theorem-assignment-help">Binomial
                                                                Theorem</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/arithmetic-assignment-help">Arithmetic</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/linear-algebra-assignment-help">Linear
                                                                Algebra</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/probability-distributions-assignment-help">Probability
                                                                Distributions</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/mathcad-assignment-help">Mathcard</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/calculus-assignment-help">Calculus</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">English</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/english-assignment-help">English</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/english-essay-writing">English
                                                                Essay</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/literature-essay-help">Literature</a>
                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Statistics</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px; margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/statistics-assignment-help">Statistics</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/permutations-and-combinations-assignment-help">Permutations
                                                                & Combin</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/hypothesis-testing-assignment-help">Hypothesis</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/spss-assignment-help">SPSS</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/business-statistics-assignment-help">Business
                                                                Statistics</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/probability-assignment-help">Probability</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/regression-analysis-assignment-help">Regression
                                                                Analysis</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/statistical-simulation-assignment-help">Statistical
                                                                Simulation</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mba"><a href="#" class="dropdown-item">Writing</a>
                                        <div class="container mbadrop shadow border"
                                            style="width: 930px; font-size: 14px;  margin-top: -40px; margin-left: -10px;">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/academic-assignment-writing">Academic</a>
                                                        </li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/reflective-essay-writing">Reflective
                                                                Essay</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/five-paragraph-essay-writing-help">Five
                                                                Paragraph</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/thesis-writing-help">Thesis
                                                                Writing</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/paper-writing-help-service">Paper
                                                                Writing</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/essay-writing-help">Essay
                                                                Writing</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul style="list-style-type: none;">
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/case-study-assignment-help">Case
                                                                Study</a></li>
                                                        <li class="py-2"><a
                                                                href="https://www.essaycorp.com/resume-writing-help">Resume
                                                                Study</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="experts.html">Experts</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="reviews.html">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item dropdown nested-dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Resources
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                                    <li><a href="https://www.essaycorp.com/samples" class="dropdown-item">Samples</a>
                                    </li>
                                    <li><a href="https://www.essaycorp.com/blog/" class="dropdown-item">Blog </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Button and User Icon Section for larger screens -->
                <div class="col-lg-3 d-none d-lg-flex justify-content-end align-items-center">
                    <!-- Order Now button visible on larger screens -->
                    <button class="text-light border-0 btn-order p-2 border-0 rounded"
                        style="background-color: #205bb3;" type="button"><a href="https://www.essaycorp.com/order_now"
                            class="text-decoration-none text-light">Order Now</a></button>
                    <img src="user.png" alt="User Icon" class="user-icon ms-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal" title="login/signup">
                </div>
            </div>
        </div>
        <!-- Mobile Dropdown Menu (Toggler opens this) -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Other menu items here -->

                <!-- Order Now button inside mobile menu, hidden on larger screens -->
                <li class="nav-item d-lg-none">
                    <button class="text-light border-0 btn-order p-2 border-0 rounded w-100 mt-2"
                        style="background-color: #205bb3;" type="button">Order Now</button>
                </li>
            </ul>
        </div>

    </nav>
    <!-- Login/Signup Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-custom"> <!-- Use a custom class here -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Image Column -->
                        <div class="col-lg-6 p-0"> <!-- Remove padding to make the image full width -->
                            <img src="form.png" alt="Description"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                            <!-- Full height and cover image -->
                        </div>

                        <!-- Content Column -->
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <!-- Center content vertically -->
                            <h5 class="text-center" id="loginModalLabel">Login / Sign Up</h5> <!-- Move title here -->
                            <div class="text-center title-underline"></div> <!-- Line below title -->
                            <p class="text-center">Login or Sign Up With Your Email to Complete the Order Process</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email Id" required>
                                </div>
                                <button type="submit" class="btn login-btn">Continue With Email</button>
                            </form>

                            <div class="text-center mt-3">Or Continue with</div>

                            <div class="d-flex justify-content-between social-login mt-3">
                                <!-- Google Login Button -->
                                <button class="btn" id="googleLoginBtn">
                                    <img src="google (1).png" alt="Google" width="20px" class="me-2">Google
                                </button>
                                <!-- Facebook Login Button -->
                                <button class="btn" id="facebookLoginBtn">
                                    <img src="facebook (6).png" alt="face" width="20px" class="me-2">Facebook
                                </button>
                            </div>

                            <p class="text-center mt-3 small">
                                By clicking "Continue with Email", you agree to our terms of service and privacy policy.
                                We’ll occasionally send you promo and account-related emails.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Assignment Session  -->
    <div class="container">
        <div class="assignment px-5">
            <div class="row ">
                <!-- Left Section -->
                <div class="col-lg-7 col-md-12 mt-2">
                    <div class="left-section text-center text-lg-start">
                        <h1><span class="highlight responsive-line">Assignment Writing Service By Experts</span></h1>
                        <p class="mt-2 fw-bold">Essay Writing Assistance by Professional Ph.D. Experts
                        </p>
                        <p class="mt-2 mb-0"><span style="font-weight: bold;">1.3M+</span> Trusted & Happy Customers</p>


                        <!-- ================== -->
                        <div class="features mt-3">
                            <div class="feature-item">
                                <img src="university.png" alt="" width="30px" class="me-2">
                                <div class="feature-text" alt="PhD writer" title="">
                                    <h4>PhD Writers</h4>
                                </div>
                            </div>

                            <div class="feature-item">
                                <img src="plagiarism (1).png" alt="" width="30px" class="me-2">
                                <div class="feature-text" alt="No Plagiarism" title="">
                                    <h4>0% Plagiarism</h4>
                                </div>
                            </div>

                            <div class="feature-item">
                                <img src="zero-ai.png" alt="AI Free" width="30px" class="me-2" title="">
                                <div class="feature-text">
                                    <h4>AI Free</h4>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <!-- =================== -->
                        <div class="features">
                            <div class="feature-item">
                                <img src="google (1).png" alt="Google icon" width="30px" class="me-2" title="">
                                <div class="feature-text">
                                    <h4>Google Reviews</h4>
                                    <span>4.7</span>
                                    <i class="fa-solid fa-star yellow"></i>
                                    <i class="fa-solid fa-star yellow"></i>
                                    <i class="fa-solid fa-star yellow"></i>
                                    <i class="fa-solid fa-star yellow"></i>
                                    <i class="fa-solid fa-star-half yellow"></i>
                                </div>
                            </div>

                            <div class="feature-item">
                                <i class="fa-solid fa-star green fs-2 me-2"></i>
                                <div class="feature-text">
                                    <h4>Trustpilot</h4>
                                    <span>4.6</span>

                                    <i class="fa-solid fa-star green"></i>
                                    <i class="fa-solid fa-star green"></i>
                                    <i class="fa-solid fa-star green"></i>
                                    <i class="fa-solid fa-star green"></i>
                                    <i class="fa-solid fa-star-half green"></i>
                                </div>
                            </div>

                            <div class="feature-item">
                                <img src="essaycorpicon.png" alt="essaycorp icon" width="30px" class="me-2">
                                <div class="feature-text">
                                    <h4>Esaycorp reviews</h4>
                                    <span>4.5</span>
                                    <i class="fa-solid fa-star red"></i>
                                    <i class="fa-solid fa-star red"></i>
                                    <i class="fa-solid fa-star red"></i>
                                    <i class="fa-solid fa-star red"></i>
                                    <i class="fa-solid fa-star-half red"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-lg-5 col-md-12 mt-2 px-lg-2">
                    <div class="right-section">
                        <form action="form.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_cc"
                                value="rajatm@amicicorp.net, digital@amicicorp.net, essaycorp.aus@gmail.com">
                            <h3 class="text-center" style="font-size: 22px; margin-bottom: 19px;">Trusted Assignment
                                Help By
                                Real Experts</h3>

                            <!-- Email and Assessment Type -->
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-6 form-group">

                                    <div class="input-group">
                                        <select class="form-select" id="email-dropdown" name="assessment_type" required>
                                            <option selected="selected" value="Assessment">Assessment</option>
                                            <option value="Article">Article</option>
                                            <option value="Case Study">Case Study</option>
                                            <option value="Coursework">Coursework</option>
                                            <option value="Dissertation">Dissertation</option>
                                            <option value="Proposal">Proposal</option>
                                            <option value="Essay">Essay</option>
                                            <option value="Literature Review">Literature Review</option>
                                            <option value="Resume">Resume</option>
                                            <option value="Problem-Solving">Problem-Solving</option>
                                            <option value="Report">Report</option>
                                            <option value="Research Paper">Research Paper</option>
                                            <option value="Thesis">Thesis</option>
                                            <option value="Term Paper">Term Paper</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Subject and Budget -->
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="input-group">
                                        <select id="currency" name="currency" class="form-select">
                                            <option value="USD" selected="selected">$</option>
                                            <option value="GBP">£</option>
                                            <option value="EUR">€</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Budget" id="budget"
                                            name="budget">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-6 form-group mt-3">
                                    <div class="quant-style input-group tooltips">
                                        <button class="cart-qty-minus input-group-text" type="button" value="-"
                                            id="minus">-</button>
                                        <input type="text" id="myNumber" name="qty" value="0"
                                            class="qty form-control input-text qty" disabled maxlength="12"
                                            placeholder="Pages">
                                        <input type="hidden" id="qty_data" name="qty_data" value="" maxlength="12"
                                            placeholder="Pages">
                                        <button class="cart-qty-plus input-group-text" type="button" value="+"
                                            id="add">+</button>
                                        <span class="tooltiptext" id="wordCountBox">1 Pages : 250 Words</span>
                                    </div>
                                </div>
                                <div class="col-md-6  col-6  form-group mt-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">No Word
                                            Limit</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone and Deadline -->
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <div class="input-group">
                                        <select class="form-select country-code border-secondary"
                                            style="max-width: 70px;" name="country_code">

                                            <option value="1" selected>USA (+1)</option>
                                            <option value="+91">India +91</option>
                                            <option value="61">Australia (+61)</option>
                                            <option value="213">Algeria (+213)</option>
                                            <option value="376">Andorra (+376)</option>
                                            <option value="244">Angola (+244)</option>
                                            <option value="1264">Anguilla (+1264)</option>
                                            <option value="1268">Antigua &amp; Barbuda (+1268)</option>
                                            <option value="54">Argentina (+54)</option>
                                            <option value="374">Armenia (+374)</option>
                                            <option value="297">Aruba (+297)</option>
                                            <option value="43">Austria (+43)</option>
                                            <option value="994">Azerbaijan (+994)</option>
                                            <option value="1242">Bahamas (+1242)</option>
                                            <option value="973">Bahrain (+973)</option>
                                            <option value="880">Bangladesh (+880)</option>
                                            <option value="1246">Barbados (+1246)</option>
                                            <option value="375">Belarus (+375)</option>
                                            <option value="32">Belgium (+32)</option>
                                            <option value="501">Belize (+501)</option>
                                            <option value="229">Benin (+229)</option>
                                            <option value="1441">Bermuda (+1441)</option>
                                            <option value="975">Bhutan (+975)</option>
                                            <option value="591">Bolivia (+591)</option>
                                            <option value="387">Bosnia Herzegovina (+387)</option>
                                            <option value="267">Botswana (+267)</option>
                                            <option value="55">Brazil (+55)</option>
                                            <option value="673">Brunei (+673)</option>
                                            <option value="359">Bulgaria (+359)</option>
                                            <option value="226">Burkina Faso (+226)</option>
                                            <option value="257">Burundi (+257)</option>
                                            <option value="855">Cambodia (+855)</option>
                                            <option value="237">Cameroon (+237)</option>
                                            <option value="1">Canada (+1)</option>
                                            <option value="238">Cape Verde Islands (+238)</option>
                                            <option value="1345">Cayman Islands (+1345)</option>
                                            <option value="236">Central African Republic (+236)</option>
                                            <option value="56">Chile (+56)</option>
                                            <option value="86">China (+86)</option>
                                            <option value="57">Colombia (+57)</option>
                                            <option value="269">Comoros (+269)</option>
                                            <option value="242">Congo (+242)</option>
                                            <option value="682">Cook Islands (+682)</option>
                                            <option value="506">Costa Rica (+506)</option>
                                            <option value="385">Croatia (+385)</option>
                                            <option value="53">Cuba (+53)</option>
                                            <option value="90392">Cyprus North (+90392)</option>
                                            <option value="357">Cyprus South (+357)</option>
                                            <option value="42">Czech Republic (+42)</option>
                                            <option value="45">Denmark (+45)</option>
                                            <option value="253">Djibouti (+253)</option>
                                            <option value="1809">Dominica (+1809)</option>
                                            <option value="1809">Dominican Republic (+1809)</option>
                                            <option value="593">Ecuador (+593)</option>
                                            <option value="20">Egypt (+20)</option>
                                            <option value="503">El Salvador (+503)</option>
                                            <option value="240">Equatorial Guinea (+240)</option>
                                            <option value="291">Eritrea (+291)</option>
                                            <option value="372">Estonia (+372)</option>
                                            <option value="251">Ethiopia (+251)</option>
                                            <option value="500">Falkland Islands (+500)</option>
                                            <option value="298">Faroe Islands (+298)</option>
                                            <option value="679">Fiji (+679)</option>
                                            <option value="358">Finland (+358)</option>
                                            <option value="33">France (+33)</option>
                                            <option value="594">French Guiana (+594)</option>
                                            <option value="689">French Polynesia (+689)</option>
                                            <option value="241">Gabon (+241)</option>
                                            <option value="220">Gambia (+220)</option>
                                            <option value="7880">Georgia (+7880)</option>
                                            <option value="49">Germany (+49)</option>
                                            <option value="233">Ghana (+233)</option>
                                            <option value="350">Gibraltar (+350)</option>
                                            <option value="30">Greece (+30)</option>
                                            <option value="299">Greenland (+299)</option>
                                            <option value="1473">Grenada (+1473)</option>
                                            <option value="590">Guadeloupe (+590)</option>
                                            <option value="671">Guam (+671)</option>
                                            <option value="502">Guatemala (+502)</option>
                                            <option value="224">Guinea (+224)</option>
                                            <option value="245">Guinea - Bissau (+245)</option>
                                            <option value="592">Guyana (+592)</option>
                                            <option value="509">Haiti (+509)</option>
                                            <option value="504">Honduras (+504)</option>
                                            <option value="852">Hong Kong (+852)</option>
                                            <option value="36">Hungary (+36)</option>
                                            <option value="354">Iceland (+354)</option>
                                            <option value="91">India (+91)</option>
                                            <option value="62">Indonesia (+62)</option>
                                            <option value="98">Iran (+98)</option>
                                            <option value="964">Iraq (+964)</option>
                                            <option value="353">Ireland (+353)</option>
                                            <option value="972">Israel (+972)</option>
                                            <option value="39">Italy (+39)</option>
                                            <option value="1876">Jamaica (+1876)</option>
                                            <option value="81">Japan (+81)</option>
                                            <option value="962">Jordan (+962)</option>
                                            <option value="7">Kazakhstan (+7)</option>
                                            <option value="254">Kenya (+254)</option>
                                            <option value="686">Kiribati (+686)</option>
                                            <option value="850">Korea North (+850)</option>
                                            <option value="82">Korea South (+82)</option>
                                            <option value="965">Kuwait (+965)</option>
                                            <option value="996">Kyrgyzstan (+996)</option>
                                            <option value="856">Laos (+856)</option>
                                            <option value="371">Latvia (+371)</option>
                                            <option value="961">Lebanon (+961)</option>
                                            <option value="266">Lesotho (+266)</option>
                                            <option value="231">Liberia (+231)</option>
                                            <option value="218">Libya (+218)</option>
                                            <option value="417">Liechtenstein (+417)</option>
                                            <option value="370">Lithuania (+370)</option>
                                            <option value="352">Luxembourg (+352)</option>
                                            <option value="853">Macao (+853)</option>
                                            <option value="389">Macedonia (+389)</option>
                                            <option value="261">Madagascar (+261)</option>
                                            <option value="265">Malawi (+265)</option>
                                            <option value="60">Malaysia (+60)</option>
                                            <option value="960">Maldives (+960)</option>
                                            <option value="223">Mali (+223)</option>
                                            <option value="356">Malta (+356)</option>
                                            <option value="692">Marshall Islands (+692)</option>
                                            <option value="596">Martinique (+596)</option>
                                            <option value="222">Mauritania (+222)</option>
                                            <option value="269">Mayotte (+269)</option>
                                            <option value="52">Mexico (+52)</option>
                                            <option value="691">Micronesia (+691)</option>
                                            <option value="373">Moldova (+373)</option>
                                            <option value="377">Monaco (+377)</option>
                                            <option value="976">Mongolia (+976)</option>
                                            <option value="1664">Montserrat (+1664)</option>
                                            <option value="212">Morocco (+212)</option>
                                            <option value="258">Mozambique (+258)</option>
                                            <option value="95">Myanmar (+95)</option>
                                            <option value="264">Namibia (+264)</option>
                                            <option value="674">Nauru (+674)</option>
                                            <option value="977">Nepal (+977)</option>
                                            <option value="31">Netherlands (+31)</option>
                                            <option value="687">New Caledonia (+687)</option>
                                            <option value="64">New Zealand (+64)</option>
                                            <option value="505">Nicaragua (+505)</option>
                                            <option value="227">Niger (+227)</option>
                                            <option value="234">Nigeria (+234)</option>
                                            <option value="683">Niue (+683)</option>
                                            <option value="672">Norfolk Islands (+672)</option>
                                            <option value="670">Northern Marianas (+670)</option>
                                            <option value="47">Norway (+47)</option>
                                            <option value="968">Oman (+968)</option>
                                            <option value="680">Palau (+680)</option>
                                            <option value="507">Panama (+507)</option>
                                            <option value="675">Papua New Guinea (+675)</option>
                                            <option value="595">Paraguay (+595)</option>
                                            <option value="51">Peru (+51)</option>
                                            <option value="63">Philippines (+63)</option>
                                            <option value="48">Poland (+48)</option>
                                            <option value="351">Portugal (+351)</option>
                                            <option value="1787">Puerto Rico (+1787)</option>
                                            <option value="974">Qatar (+974)</option>
                                            <option value="262">Reunion (+262)</option>
                                            <option value="40">Romania (+40)</option>
                                            <option value="7">Russia (+7)</option>
                                            <option value="250">Rwanda (+250)</option>
                                            <option value="378">San Marino (+378)</option>
                                            <option value="239">Sao Tome &amp; Principe (+239)</option>
                                            <option value="966">Saudi Arabia (+966)</option>
                                            <option value="221">Senegal (+221)</option>
                                            <option value="381">Serbia (+381)</option>
                                            <option value="248">Seychelles (+248)</option>
                                            <option value="232">Sierra Leone (+232)</option>
                                            <option value="65">Singapore (+65)</option>
                                            <option value="421">Slovak Republic (+421)</option>
                                            <option value="386">Slovenia (+386)</option>
                                            <option value="677">Solomon Islands (+677)</option>
                                            <option value="252">Somalia (+252)</option>
                                            <option value="27">South Africa (+27)</option>
                                            <option value="34">Spain (+34)</option>
                                            <option value="94">Sri Lanka (+94)</option>
                                            <option value="290">St. Helena (+290)</option>
                                            <option value="1869">St. Kitts (+1869)</option>
                                            <option value="1758">St. Lucia (+1758)</option>
                                            <option value="249">Sudan (+249)</option>
                                            <option value="597">Suriname (+597)</option>
                                            <option value="268">Swaziland (+268)</option>
                                            <option value="46">Sweden (+46)</option>
                                            <option value="41">Switzerland (+41)</option>
                                            <option value="963">Syria (+963)</option>
                                            <option value="886">Taiwan (+886)</option>
                                            <option value="7">Tajikstan (+7)</option>
                                            <option value="66">Thailand (+66)</option>
                                            <option value="228">Togo (+228)</option>
                                            <option value="676">Tonga (+676)</option>
                                            <option value="1868">Trinidad &amp; Tobago (+1868)</option>
                                            <option value="216">Tunisia (+216)</option>
                                            <option value="90">Turkey (+90)</option>
                                            <option value="7">Turkmenistan (+7)</option>
                                            <option value="993">Turkmenistan (+993)</option>
                                            <option value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                            <option value="688">Tuvalu (+688)</option>
                                            <option value="256">Uganda (+256)</option>
                                            <option value="380">Ukraine (+380)</option>
                                            <option value="971">United Arab Emirates (+971)</option>
                                            <option value="598">Uruguay (+598)</option>
                                            <option value="7">Uzbekistan (+7)</option>
                                            <option value="678">Vanuatu (+678)</option>
                                            <option value="379">Vatican City (+379)</option>
                                            <option value="58">Venezuela (+58)</option>
                                            <option value="84">Vietnam (+84)</option>
                                            <option value="84">Virgin Islands - British (+1284)</option>
                                            <option value="84">Virgin Islands - US (+1340)</option>
                                            <option value="681">Wallis &amp; Futuna (+681)</option>
                                            <option value="969">Yemen (North)(+969)</option>
                                            <option value="967">Yemen (South)(+967)</option>
                                            <option value="260">Zambia (+260)</option>
                                            <option value="263">Zimbabwe (+263)</option>
                                            <!-- Additional country codes -->
                                        </select>
                                        <input type="number" class="form-control" placeholder="Mobile"
                                            name="contact_number">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="deadline" name="deadline"
                                        placeholder="Deadline" required>
                                </div>


                            </div>

                            <!-- Discount and File Upload -->
                            <div class="row mt-3">
                                <div class="col-md-12 form-group">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="discountToggle">
                                        <label class="form-check-label toggle-label" for="discountToggle">Get a Flat 10%
                                            Off
                                            on First Booking</label>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group file-row mt-3">
                                    <input name="filesname[]" aria-label="file" class="form-control" type="file"
                                        id="files" multiple="">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center submitInstantForm m-0">
                                <button type="submit" class="submit px-4 py-2 mt-3  text-light m-0"
                                    style="background-color: #205bb3;" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 contact" id="contact">
                    <div class="form-cover">
                        <?php include("instantform-pro.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- First Card Session -->
    <section class="py-5 back p-0 m-0">

        <div class="container mt-5">
            <div class="row">
                <!-- Card 1: Trustworthy Experts -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="trustworthiness.png" alt="Trustworthy Experts" class="d-block mx-auto" width="50px"
                            title="">
                        <p class="fw-bold text-dark fonts mt-2">Trustworthy Experts</p>
                        <p>Our team of highly qualified experts ensures exceptional and reliable academic support for
                            all your assignment needs.</p>
                    </div>
                </div>

                <!-- Card 2: Quality Writing -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="high-quality (1).png" alt="Quality Writing" class="d-block mx-auto" width="50px"
                            title="">
                        <p class="fw-bold text-dark fonts mt-2">Quality Writing</p>
                        <p>Our dedication to quality ensures each assignment is well-researched, clearly written, and
                            meets the highest academic standards.</p>
                    </div>
                </div>

                <!-- Card 3: Timely Delivery -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="timetable.png" alt="Timely Delivery" class="d-block mx-auto" width="50px">
                        <p class="fw-bold text-dark fonts mt-2" title="">Timely Delivery</p>
                        <p>We guarantee timely delivery of every assignment, ensuring you meet your deadlines with
                            well-researched, high-quality work every time.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Card 4: Free Rework Policy -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="insurance-policy (1).png" alt="Free Rework Policy" class="d-block mx-auto"
                            width="50px" title="">
                        <p class="fw-bold text-dark fonts mt-2">Free Rework Policy</p>
                        <p>Our free rework policy ensures revisions until your assignment meets your requirements and

                            satisfaction.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Budget-Friendly Service -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="budget.png" alt="Budget-Friendly Service" class="d-block mx-auto" width="50px"
                            title="">
                        <p class="fw-bold text-dark fonts mt-2">Budget-Friendly Service</p>
                        <p>Our budget-friendly service delivers quality academic support at affordable rates, making
                            excellence accessible without overspending.</p>
                    </div>
                </div>

                <!-- Card 6: 24/7 Availability -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card border-0 text-center">
                        <img src="24-hours.png" alt="24/7 Availability" class="d-block mx-auto" width="50px" title="">
                        <p class="fw-bold text-dark fonts mt-2">24/7 Availability</p>
                        <p>Our 24/7 availability ensures you receive support anytime, guaranteeing assistance whenever
                            needed, day or night.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel  Session  -->
    <div class="container-fluid">
        <div class="container">
            <h2 class="section-title text-center text-dark mt-5">How our online assignment help services work?</h2>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <img src="contract.png" alt="Submit Your Requirements" class="box-img">
                        <p class="box-title">Submit Your Requirements</p>
                        <p class="box-content">Simply fill out the order form with your assignment details and <br>
                            requirements.</p>
                    </div>
                    <i class="fa fa-arrow-right" style="font-size: 42px; margin-left: 30px;"></i>
                </div>

                <div class="item">
                    <div class="box">
                        <img src="tips.png" alt="Make Payment" class="box-img">
                        <p class="box-title">Make Payment</p>
                        <p class="box-content">Proceed to make the payment using our secure payment gateway to confirm
                            your order.</p>
                    </div>
                    <i class="fa fa-arrow-right" style="font-size: 42px; margin-left: 30px;"></i>

                </div>

                <div class="item">
                    <div class="box">
                        <img src="online-education.png.png" alt="Your Work Starts" class="box-img">
                        <p class="box-title">Your Work Starts</p>
                        <p class="box-content">Provide specific details in the order form, like deadline and
                            assignment<br> length.</p>
                    </div>
                    <i class="fa fa-arrow-right" style="font-size: 42px; margin-left: 30px;"></i>

                </div>

                <div class="item">
                    <div class="box">
                        <img src="sketch.png" alt="Receive Draft" class="box-img">
                        <p class="box-title">Receive Draft</p>
                        <p class="box-content">Complete payment to confirm your order using our convenient<br> options.
                        </p>
                    </div>
                    <i class="fa fa-arrow-right" style="font-size: 42px; margin-left: 30px;"></i>

                </div>

                <div class="item">
                    <div class="box">
                        <img src="attachment.png" alt="Download Your Assignment" class="box-img">
                        <p class="box-title">Download Your Assignment</p>
                        <p class="box-content">Once the writer is done, they promptly update you. View the solution in
                            your account.</p>
                    </div>
                    <i class="fa fa-arrow-right" style="font-size: 42px; margin-left: 30px;"></i>

                </div>
            </div>
        </div>
    </div>

    <!-- Second Card Session -->
    <div class="container mt-3">
        <h2 class="section-title text-center text-dark">The best assignment writers</h2>
        <p class="text-center text-secondary mb-4">Real Writers Only - No AI Evidence</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="d-flex align-items-center">
                        <img src="Thompson.jpg" alt="Profile Picture">
                        <div class="ms-3">
                            <h4>Sarah Thompson</h4>
                            <p class="text-muted" style="margin: 0;">MA English</p>
                            <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                        </div>
                    </div>
                    <p class="description text-center">Sarah, an Oxford English Literature graduate, excels in research
                        and high-quality academic writing.</p>
                    <button class="hire-btn"> <a href="https://www.essaycorp.com/order_now" class="text-light">Hire
                            Me</a></button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="d-flex align-items-center">
                        <img src="Richardson.jpg" alt="Profile Picture">
                        <div class="ms-3">
                            <h4>David Richardson</h4>
                            <p class="text-muted" style="margin: 0;">Ph.D. Mech Eng</p>
                            <div class="rating">&#9733; &#9733; &#9733; &#9733; ☆</div>
                        </div>
                    </div>
                    <p class="description text-center">David, Ph.D. in Mechanical Engineering from MIT, specializes in
                        technical writing and engineering assignments.</p>
                    <button class="hire-btn"> <a href="https://www.essaycorp.com/order_now" class="text-light">Hire
                            Me</a></button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="d-flex align-items-center">
                        <img src="Stevens.png" alt="Profile Picture">
                        <div class="ms-3">
                            <h4>Emily Stevens</h4>
                            <p class="text-muted" style="margin: 0;">MBA BM</p>
                            <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                        </div>
                    </div>
                    <p class="description text-center">Emily, an MBA from Harvard, specializes in business case studies
                        and marketing strategies, providing valuable support at EssayCorp.</p>
                    <button class="hire-btn"> <a href="https://www.essaycorp.com/order_now" class="text-light">Hire
                            Me</a></button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="d-flex align-items-center">
                        <img src="Patel.jpg" alt="Profile Picture">
                        <div class="ms-3">
                            <h4>James Patel</h4>
                            <p class="text-muted" style="margin: 0;">B.A. in Psychology</p>
                            <div class="rating">&#9733; &#9733; &#9733; &#9733; ☆</div>
                        </div>
                    </div>
                    <p class="description text-center">James, a Stanford Psychology graduate, has eight years of
                        experience writing insightful essays and research papers at EssayCorp.</p>
                    <button class="hire-btn"> <a href="https://www.essaycorp.com/order_now" class="text-light">Hire
                            Me</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Line Session -->
    <div class="container-fluid line">
        <p class="text-center pt-2 mt-5"><img src="zero-ai.png" alt="AI Free" class="px-4 mb-2" width="90px"><b
                class="fs-5">Zero AI involvement, only real experts.</b></p>
    </div>

    <!-- Cards Session -->
    <div class="box2">
        <!-- Text Content -->
        <div class="text-content">
            <h1>Get the Best quality assignment writing services at affordable prices</h1>
            <p><b>Mentioned below are the services that we provide to the students</b></p>
            <hr>

            <!-- <h3>Services Provided By EssayCorp</h3> -->
            <div class="topics">
                <ul>
                    <li>Assignment Help</li>
                    <li>Homework Help</li>
                    <li>Thesis/Dissertation Help</li>
                </ul>
                <ul>
                    <li>Proofreading Help</li>
                    <li>Referencing Help</li>
                    <li>Essay Help</li>
                </ul>
                <ul>
                    <li>Term Paper Help</li>
                    <li>Online Exam</li>
                    <li>Test/Quiz</li>
                </ul>
            </div>
        </div>

        <!-- Features Card -->
        <div class="features-card">
            <h2 class="text-center">Services & Free Features</h2>
            <ul class="features-list">
                <li>
                    <span>Formatting</span>
                    <span><span class="price">$20.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Title page</span>
                    <span><span class="price">$19.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Reference page</span>
                    <span><span class="price">$14.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Unlimited revisions</span>
                    <span><span class="price">$12.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Premium Guarantee</span>
                    <span><span class="price">$10.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Early draft</span>
                    <span><span class="price">$6.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>1-Page abstract</span>
                    <span><span class="price">$7.99</span> <span class="free">FREE</span></span>
                </li>
                <li>
                    <span>Detailed outline</span>
                    <span><span class="price">$5.99</span> <span class="free">FREE</span></span>
                </li>
            </ul>

            <div class="text-center">
                <button class="border-0">
                    <a href="https://www.essaycorp.com/order_now" class="text-light"
                        style="background-color: #205bb3; border-radius: 5px; padding: 13px;">Book Now</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Owl Carousel Container -->
    <div class="container-fluid">
        <div class="container">
            <h2 class="section-title text-center text-dark mt-5">Top-quality assignment assistance for every type of
                academic task</h2>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box">

                        <p class="box-title">Management/MBA</p>
                        <img src="management.png" alt="Management" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> MBA Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Marketing Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Management Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Business Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Human Assignment</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="box">

                        <p class="box-title">Finance Accounting</p>
                        <img src="accounts.png" alt="Finance Accounting" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> Perdisco and MYOB</li>
                            <li><i class="fa-solid fa-circle-check"></i> Accounting Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Management Accounting</li>
                            <li><i class="fa-solid fa-circle-check"></i> Finance Planning</li>
                            <li><i class="fa-solid fa-circle-check"></i> Business Accounting</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="box">

                        <p class="box-title">Engineering Assignment</p>
                        <img src="ROCKET.png" alt="Engineering Assignment" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> MATLAB Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> AutoCAD Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Aerospace Engineering</li>
                            <li><i class="fa-solid fa-circle-check"></i> Computer Engineering</li>
                            <li><i class="fa-solid fa-circle-check"></i> Mechanical Engineering</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="box">

                        <p class="box-title">Computer Science</p>
                        <img src="ROBORT.png" alt="Computer Science" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> Python Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> C++ Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Software Engineering</li>
                            <li><i class="fa-solid fa-circle-check"></i> Android Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Artificial Intelligence</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>



                <div class="item">
                    <div class="box">

                        <p class="box-title">Medical Science</p>
                        <img src="doctor.png" alt="Computer Science" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> Biology Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Nursing Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Chemistry Assignment</li>
                            <li><i class="fa-solid fa-circle-check"></i> Biotechnology</li>
                            <li><i class="fa-solid fa-circle-check"></i> Zoology Assignment</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="box">

                        <p class="box-title">Law/Taxation</p>
                        <img src="law.png" alt="Computer Science" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> Business Law</li>
                            <li><i class="fa-solid fa-circle-check"></i> Law Enforcement</li>
                            <li><i class="fa-solid fa-circle-check"></i> UK Taxation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Constitutional Law</li>
                            <li><i class="fa-solid fa-circle-check"></i> Contract Law</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="box">

                        <p class="box-title">Statistics Assignment</p>
                        <img src="bar-graph.png" alt="Computer Science" class="box-img">
                        <ul style="list-style-type: none; text-align: left;">
                            <li><i class="fa-solid fa-circle-check"></i> Hypothesis Testing</li>
                            <li><i class="fa-solid fa-circle-check"></i> Business Statistics</li>
                            <li><i class="fa-solid fa-circle-check"></i> Probability</li>
                            <li><i class="fa-solid fa-circle-check"></i> SPSS</li>
                            <li><i class="fa-solid fa-circle-check"></i> Statistical Simulation</li>
                            <!-- <li><i class="fa-solid fa-circle-check"></i> Others</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tenth Session -->
    <div class="container mt-3">

        <h2 class="section-title text-center text-dark">Reviews from clients</h2>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="align-items-center">
                        <h4 style="border-bottom: 1px solid #004da8;" class="text-center pb-3">ENGLISH</h4>
                        <div class="comment-info">
                            <p>I am happy I worked with EssayCorp. They have very affordable prices. I have been
                                able to manage a stressful situation because of the assistance received. Highly
                                recommended.</p>
                        </div>
                        <div class="author-content">
                            <div class="author-info">
                                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                                <h5 class="author-name">Henry</h5>
                                <span class="author-work">12 September 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="align-items-center">
                        <h4 style="border-bottom: 1px solid #004da8;" class="text-center pb-3">MANAGEMENT</h4>
                        <div class="comment-info">
                            <p>I had my Thesis pending until the last minute and thank god I got help from
                                EssayCorp. My research and analysis were done very well in a short period of
                                time.</p>
                        </div>
                        <div class="author-content">
                            <div class="author-info">
                                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                                <h5 class="author-name">Miley Cyrus</h5>
                                <span class="author-work">24 September 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="align-items-center">
                        <h4 style="border-bottom: 1px solid #004da8;" class="text-center pb-3">COMPUTER SCIENCE</h4>
                        <div class="comment-info">
                            <p>Thank you, EssayCorp, for exceeding my expectations! I scored well and will recommend
                                you to friends. Your service is fantastic and worth every penny!</p>
                        </div>
                        <div class="author-content">
                            <div class="author-info">
                                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                                <h5 class="author-name">Thomas Walter</h5>
                                <span class="author-work">1 October 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div class="profile-card">
                    <div class="align-items-center">
                        <h4 style="border-bottom: 1px solid #004da8;" class="text-center pb-3">ENGINEERING</h4>
                        <div class="comment-info">
                            <p>I do a part-time job and pursue a master’s degree as well. I looked for assignment
                                writers near me and found Essay Corp
                                assignment writing services. Since then my job has been easy.
                            </p>
                        </div>
                        <div class="author-content">
                            <div class="author-info">
                                <div class="rating">&#9733; &#9733; &#9733; &#9733; &#9733;</div>
                                <h5 class="author-name">Sophia Bennett</h5>
                                <span class="author-work">4 October 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- eleventh session  -->
    <div class="stats-container mt-5 mb-5">
        <div class="stat-box">
            <h2>5,000+</h2>
            <p>Assignments Completed</p>
        </div>

        <div class="divider"></div>

        <!-- <div class="stat-box">
            <h2>98%</h2>
            <p>Satisfaction Rate</p>
        </div> -->

        <div class="stat-box">
            <h2 style="color: #205bb3 ;">98%</h2>
            <p>Satisfaction Rate</p>
        </div>

        <div class="divider"></div>

        <div class="stat-box">
            <h2>20+ Countries</h2>
            <p>Trust Our Service</p>
        </div>
    </div>

    <!-- Twelth session  -->
    <div class="container">
        <h2 class="section-title text-center text-dark mt-5">Frequently asked questions</h2>
        <div class="accordion-wrapper">
            <div class="row"> <!-- Added justify-content-center -->
                <div class="col-md-4">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-title">How do I place an order?</div>
                            <div class="accordion-content">
                                To place an order, click on the "Order Now" button on our homepage, fill out the
                                required details about your assignment (such as type, deadline, word count, etc.), and
                                proceed to make payment. Once completed, we will match your assignment with the most
                                suitable writer.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What types of assignments can you help with?</div>
                            <div class="accordion-content">
                                We offer assistance with a wide range of academic assignments, including essays,
                                research papers, dissertations, case studies, coursework, lab reports, thesis writing,
                                and more. If you're unsure, feel free to contact us to discuss your needs.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Can I choose my own writer?</div>
                            <div class="accordion-content">
                                Yes, we provide the option to choose from our pool of expert writers. You can view their
                                profiles, ratings, and reviews to make an informed choice. Alternatively, we can
                                automatically assign the best-suited writer based on your assignment’s requirements.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">How can I ensure originality?</div>
                            <div class="accordion-content">
                                We guarantee 100% original content in every assignment. All work is thoroughly checked
                                using advanced plagiarism detection tools, and you can request a plagiarism report for
                                additional peace of mind.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What if I'm not satisfied with the assignment?</div>
                            <div class="accordion-content">
                                If you are not satisfied with the quality of your assignment, we offer free revisions to
                                ensure that the final paper meets your expectations. Our goal is to ensure complete
                                satisfaction, and you can request revisions within a specific time frame after delivery.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">How much does your service cost?</div>
                            <div class="accordion-content">
                                The cost of your assignment depends on factors such as the type of assignment, word
                                count, academic level, and urgency. You can use our price calculator on the homepage to
                                get an instant quote. We also offer discounts for first-time users and bulk orders.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-title">How do you protect my personal information?</div>
                            <div class="accordion-content">
                                We take your privacy very seriously. All personal information and payment details are
                                encrypted using secure SSL technology. We never share your information with third
                                parties, and your work will remain confidential.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What payment methods do you accept?</div>
                            <div class="accordion-content">
                                We accept a variety of payment methods, including major credit cards (Visa, Mastercard,
                                American Express), PayPal, and other secure online payment options.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What's the completion time?</div>
                            <div class="accordion-content">
                                We offer flexible deadlines to suit your needs. Assignments can be completed in as
                                little as 3 hours for urgent orders, but we recommend giving us as much time as possible
                                to ensure the highest quality.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Can I talk to my writer during the process?</div>
                            <div class="accordion-content">
                                Yes, we provide a direct messaging system that allows you to communicate with your
                                assigned writer throughout the process. You can share additional details, request
                                updates, or ask questions.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Do you offer refunds?</div>
                            <div class="accordion-content">
                                Yes, we offer a money-back guarantee if we are unable to meet your requirements or if
                                there is an issue with the quality of the work. Please refer to our refund policy for
                                more details on eligibility and the process.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What if my assignment is technical?</div>
                            <div class="accordion-content">
                                Our team consists of experts from a variety of academic fields. Whether your assignment
                                is simple or highly technical, we can match you with a qualified writer who has the
                                relevant expertise in your subject area.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-title">Is your service legal?</div>
                            <div class="accordion-content">
                                Yes, using our service is completely legal. We provide academic assistance, and the work
                                we deliver is intended to be used as a model or reference to guide you in completing
                                your own assignments.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">What is your revision policy?</div>
                            <div class="accordion-content">
                                We offer free revisions within a certain time period after the delivery of your
                                assignment. If the delivered assignment does not meet your initial instructions, you can
                                request changes. Please see our revision policy for specific details.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Do you help with editing and proofreading?</div>
                            <div class="accordion-content">
                                Yes, in addition to writing assignments from scratch, we also offer editing and
                                proofreading services. Our editors will review your paper for grammar, spelling,
                                structure, and overall clarity.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">How do you ensure timely delivery?</div>
                            <div class="accordion-content">
                                We understand the importance of deadlines. Our team works around the clock to ensure
                                that your assignment is delivered on or before the specified deadline. You can track the
                                progress of your order through your account.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Can I cancel my order?</div>
                            <div class="accordion-content">
                                Yes, you can cancel your order, but it must be done within a certain timeframe. If
                                significant progress has already been made on the assignment, a partial refund may be
                                offered. Please review our cancellation policy for more details.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title">Do you offer discounts or promotions?</div>
                            <div class="accordion-content">
                                Yes, we regularly offer discounts for new customers, seasonal promotions, and loyalty
                                discounts for returning clients. Be sure to subscribe to our newsletter or check our
                                website for the latest offers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <div class="container-fluid">
        <footer class="mt-5 mb-5 footer-background">
            <div class="footer-container">
                <div class="footer-column mx-5">
                    <h2>About</h2>
                    <p>EssayCorp is the best assignment help provider and the right platform for every student who
                        requires professional help with their academic assignments.</p>
                    <div class="contact-info">
                        <span><i class="fa-solid fa-phone"></i> <a href="tel:+17243846101">+1 (724) 384-6101</a></span>
                        <p><i class="fas fa-envelope"></i> <a
                                href="mailto:essaycorp.aus@gmail.com">essaycorp.aus@gmail.com</a></p>
                    </div>
                </div>
                <div class="footer-column ps-5">
                    <h2>Our Services</h2>
                    <ul>
                        <li><a href="https://www.essaycorp.com/services/online-assignment-help">Assignment</a></li>
                        <li><a href="https://www.essaycorp.com/services/plagiarism">Plagiarism</a></li>
                        <li><a href="https://www.essaycorp.com/case-study-assignment-help">Case Study</a></li>
                        <li><a
                                href="https://www.essaycorp.com/services/thesis-dissertation-help">Thesis/Dissertation</a>
                        </li>
                        <li><a href="https://www.essaycorp.com/services/essay-help">Essay Help</a></li>
                        <li><a href="https://www.essaycorp.com/services/homework-help">Homework Help</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>Informations</h2>
                    <ul>
                        <li><a href="https://www.essaycorp.com/offers">Offers</a></li>
                        <li><a href="https://www.essaycorp.com/about-us">About Us</a></li>
                        <li><a href="https://www.essaycorp.com/blog/">Blog</a></li>
                        <li><a href="https://www.essaycorp.com/essaycorp-reviews">Review</a></li>
                        <li><a href="https://www.essaycorp.com/ask-experts">Ask Experts</a></li>
                        <li><a href="https://www.essaycorp.com/privacy-policy">Policy</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h2>Our Countries</h2>
                    <ul>
                        <li><a href="https://www.essaycorp.com/country/united-states">USA</a></li>
                        <li><a href="https://www.essaycorp.com/country/united-kingdom">UK</a></li>
                        <li><a href="https://www.essaycorp.com/country/germany">Germany</a></li>
                        <li><a href="https://www.essaycorp.com/country/australia">Australia</a></li>
                        <li><a href="https://www.essaycorp.com/country/canada">Canada</a></li>
                        <li><a href="https://www.essaycorp.com/country/kuwait">Kuwait</a></li>
                    </ul>
                </div>
                <div class="footer-column mt-5">
                    <ul>
                        <li><a href="https://www.essaycorp.com/country/uae">UAE</a></li>
                        <li><a href="https://www.essaycorp.com/country/new-zealand">New Zealand</a></li>
                        <li><a href="https://www.essaycorp.com/country/singapore">Singapore</a></li>
                        <li><a href="https://www.essaycorp.com/country/france">France</a></li>
                        <li><a href="https://www.essaycorp.com/country/saudi-arabia">Saudi Arabia</a></li>
                        <li><a href="https://www.essaycorp.com/country/malaysia">Malaysia</a></li>
                    </ul>
                </div>
            </div>

            <div class="social-icons text-center d-flex justify-content-end"
                style="margin-top: -30px; margin-left: -20px;">
                <a href="https://www.facebook.com/essaycorpinternational/" class="me-3"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/Essay_Corp" class="me-3"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/essay__corp/" class="me-3"><i class="fab fa-instagram"></i></a>
                <!-- <a href="https://www.youtube.com/channel/UC0445kAV1IWu2ygF_67TmAw" class="me-3"><i class="fab fa-linkedin-in"></i></a> -->
                <a href="https://www.youtube.com/channel/UC0445kAV1IWu2ygF_67TmAw"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="footer-bottom">
                © Copyright EssayCorp. All Rights Reserved
            </div>
        </footer>
    </div>

    <!-- Form  Functionality -->
    <script>
        var target = document.getElementById("myNumber");
        var checkInput = document.getElementById("flexSwitchCheckChecked");
        var add = document.getElementById("add");
        var minus = document.getElementById("minus");
        var num = document.getElementById("num");
        var wordCountBox = document.getElementById("wordCountBox");
        var wordIncrement = 0; // Word increment step


        minus.addEventListener("click", function () {
            target.value--;

            wordIncrement -= 250
            wordCountBox.innerHTML = `Total words: ${wordIncrement}`
        });

        add.addEventListener("click", function () {
            target.value++;

            wordIncrement += 250
            wordCountBox.innerHTML = `Total words: ${wordIncrement}`
        });

        checkInput.addEventListener("click", function () {
            if (checkInput.checked) {
                target.setAttribute("disabled", "true");
                add.setAttribute("disabled", "true");
                minus.setAttribute("disabled", "true");
            } else {
                target.removeAttribute("disabled");
                add.removeAttribute("disabled");
                minus.removeAttribute("disabled");
            }
        });

        minus.addEventListener("mouseenter", function () {
            num.style.display = "block";
        });
        add.addEventListener("mouseenter", function () {
            num.style.display = "block";
        });
    </script>

    <!-- jQuery (required for Bootstrap Datepicker) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#deadline').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>


    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Owl Carousel Script -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 3, // Default number of items to display
                loop: true, // Loop the items
                margin: 10, // Space between items
                nav: true, // Show next/prev buttons
                autoplay: true, // Enable autoplay
                autoplayTimeout: 3000, // Autoplay time interval
                autoplayHoverPause: true, // Pause on mouse hover
                responsive: {
                    0: {
                        items: 1, // 1 item on mobile
                    },
                    576: {
                        items: 2, // 2 items on tablets
                    },
                    768: {
                        items: 3, // 3 items on larger screens
                    }
                }
            });
        });
    </script>

    <!-- Accordion Script  -->
    <script>
        // JavaScript to handle accordion toggle
        const accordionItems = document.querySelectorAll('.accordion-title');

        accordionItems.forEach(item => {
            item.addEventListener('click', () => {
                const content = item.nextElementSibling;
                const activeItem = document.querySelector('.accordion-title.active');

                // Close other open items
                if (activeItem && activeItem !== item) {
                    activeItem.classList.remove('active');
                    activeItem.nextElementSibling.classList.remove('show');
                }

                // Toggle the current item
                item.classList.toggle('active');
                content.classList.toggle('show');
            });
        });
    </script>

    <script>
        // Redirect user to Google login page
        document.getElementById('googleLoginBtn').onclick = function () {
            window.location.href = "https://accounts.google.com/o/oauth2/v2/auth?client_id=YOUR_GOOGLE_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=profile email";
        };

        // Redirect user to Facebook login page
        document.getElementById('facebookLoginBtn').onclick = function () {
            window.location.href = "https://www.facebook.com/v12.0/dialog/oauth?client_id=YOUR_FACEBOOK_APP_ID&redirect_uri=YOUR_REDIRECT_URI&scope=email,public_profile";
        };
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>