<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 20px 0;
            font-size: 32px;
        }
        .faculty-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border: 1px solid #ddd;
        }
        .faculty-card .photo {
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            margin-right: 20px;
        }
        .faculty-card .photo img {
            width: 100%;
            border-radius: 8px;
        }
        .faculty-card .details {
            flex: 2;
            min-width: 300px;
        }
        .faculty-card .details h3 {
            color: #333;
            font-size: 24px;
            margin: 0 0 10px;
        }
        .faculty-card .details p {
            font-size: 16px;
            line-height: 1.6;
            margin: 5px 0;
        }
        .contact-info p {
            font-size: 14px;
            color: #666;
        }
        .contact-info .email {
            font-weight: bold;
            color: #2e8b57;
        }
        .contact-info .phone {
            font-weight: bold;
            color: #4682b4;
        }
        .faculty-card .details span {
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Faculty Details</h1>

        <!-- Faculty Cards for Each Teacher -->
        
        <!-- Faculty Card for Dr. Mohammad Motiur Rahman -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image1.jpg" alt="Dr. Mohammad Motiur Rahman">
            </div>
            <div class="details">
                <h3>Dr. Mohammad Motiur Rahman <span>(Professor - Grade 1)</span></h3>
                <div class="contact-info">
                    <p class="email">mm73rahman@gmail.com</p>
                    <p class="phone">01711-362344</p>
                </div>
                <p><strong>Field of Interests:</strong> Medical Image Processing, Machine Learning, Computer Vision</p>
            </div>
        </div>

        <!-- Faculty Card for Dr. Mostofa Kamal Nasir -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image2.jpg" alt="Dr. Mostofa Kamal Nasir">
            </div>
            <div class="details">
                <h3>Dr. Mostofa Kamal Nasir <span>(Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">kamal@mbstu.ac.bd</p>
                    <p class="phone">+8801716056915</p>
                </div>
                <p><strong>Field of Interests:</strong> Vehicular Ad Hoc Network, IoT, Wireless Sensor Network</p>
            </div>
        </div>

        <!-- Faculty Card for Dr. Md. Sazzad Hossain -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image3.jpg" alt="Dr. Md. Sazzad Hossain">
            </div>
            <div class="details">
                <h3>Dr. Md. Sazzad Hossain <span>(Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">sazzadjoy@gmail.com</p>
                    <p class="phone">+8801716862814</p>
                    <p class="address">60/9/C/3, Dhalpur, Dhaka-1204</p>
                </div>
                <p><strong>Field of Interests:</strong> VLSI, System Optimization, Soft Computing Methods, System Design, Human Factors, Human Computer Interaction</p>
            </div>
        </div>

        <!-- Faculty Card for Md. Hadifur Rahman -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image4.jpg" alt="Md. Hadifur Rahman">
            </div>
            <div class="details">
                <h3>Md. Hadifur Rahman <span>(Associate Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">hadifur@gmail.com</p>
                    <p class="phone">01716-517171</p>
                </div>
                <p><strong>Field of Interests:</strong> VLSI Design</p>
            </div>
        </div>

        <!-- Faculty Card for Md. Mosaddik Hasan -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image5.jpg" alt="Md. Mosaddik Hasan">
            </div>
            <div class="details">
                <h3>Md. Mosaddik Hasan <span>(Associate Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">shohug0301012@gmail.com</p>
                    <p class="phone">01715-455722</p>
                </div>
                <p><strong>Field of Interests:</strong> Neural Network, Medical Image Processing</p>
            </div>
        </div>

        <!-- Faculty Card for Md. Mazder Rahman -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image6.jpg" alt="Md. Mazder Rahman">
            </div>
            <div class="details">
                <h3>Md. Mazder Rahman <span>(Assistant Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">mazdercsdu2000@yahoo.com</p>
                </div>
                <p><strong>Field of Interests:</strong> Quantum Computing, Logic Synthesis, Reversible Logic</p>
            </div>
        </div>

        <!-- Faculty Card for Abu Sayem Mohammad Delowar Hossain -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image7.jpg" alt="Abu Sayem Mohammad Delowar Hossain">
            </div>
            <div class="details">
                <h3>Abu Sayem Mohammad Delowar Hossain <span>(Assistant Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">uzzal35@yahoo.com</p>
                    <p class="phone">01713-585542</p>
                </div>
                <p><strong>Field of Interests:</strong> Machine Learning, IoT, Data Mining</p>
            </div>
        </div>

        <!-- Faculty Card for Md. Rashedul Hasan -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image8.jpg" alt="Md. Rashedul Hasan">
            </div>
            <div class="details">
                <h3>Md. Rashedul Hasan <span>(Assistant Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">rakib_cse02@yahoo.com</p>
                </div>
                <p><strong>Field of Interests:</strong> Machine Learning, Natural Language Processing</p>
            </div>
        </div>

        <!-- Faculty Card for Md. Belayet Ali -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image9.jpg" alt="Md. Belayet Ali">
            </div>
            <div class="details">
                <h3>Md. Belayet Ali <span>(Assistant Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">belayet_2003@yahoo.com</p>
                </div>
                <p><strong>Field of Interests:</strong> Logic Optimization Algorithms, Data Structure and Analysis of Algorithms</p>
            </div>
        </div>

        <!-- Faculty Card for Dr. Mehedi Hasan Talukder -->
        <div class="faculty-card">
            <div class="photo">
                <img src="faculty_image10.jpg" alt="Dr. Mehedi Hasan Talukder">
            </div>
            <div class="details">
                <h3>Dr. Mehedi Hasan Talukder <span>(Professor)</span></h3>
                <div class="contact-info">
                    <p class="email">mehedi@mbstu.ac.bd</p>
                    <p class="phone">+8801717562621</p>
                </div>
                <p><strong>Field of Interests:</strong> Machine Learning, Computer Vision, Human Computer Interaction, Image Processing</p>
            </div>
        </div>

        <!-- Additional Faculty Cards for the remaining professors follow the same structure -->
        <!-- Add more faculty details here as needed -->

    </div>

</body>
</html>
