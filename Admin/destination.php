<html>

<head>
    <link rel="stylesheet" href="admin.css">
    <style>
        #t2 {
            display: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  
    <script>
        function switchVisible() {
            if (document.getElementById('t1')) {

                if (document.getElementById('t1').style.display == 'none') {
                    document.getElementById('t1').style.display = 'block';
                    document.getElementById('t2').style.display = 'none';
                }
                else {
                    document.getElementById('t1').style.display = 'none';
                    document.getElementById('t2').style.display = 'block';
                }
            }
        }
    </script>
</head>

<body>
    <div class="boxes">
        <span style="margin-top:-2vh"><button id="Button1" onclick="switchVisible();">Destinations/Packages</button>
        </span>
    </div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="admin.html">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="destination.php">
                    <i class="fa fa-globe fa-2x"></i>
                    <span class="nav-text">
                        Destinations
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="adminenquiry.php">
                    <i class="fa fa-comments fa-2x"></i>
                    <span class="nav-text">
                        Enquiries
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="userdetails.php">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">
                        User Details
                    </span>
                </a>

            </li>
            <li>
                <a href="adminbooking.php">
                    <i class="fa fa-plane fa-2x"></i>
                    <span class="nav-text">
                        Booking Details
                    </span>
                </a>
            </li>
            <li>
                <a href="userpayment.php">
                    <i class="fa fa-credit-card"></i>
                    <span class="nav-text">
                        User Payments
                    </span>
                </a>
            </li>
        </ul>

        <ul class="logout">
            <li>
                <a href="../User/Login/login.html">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <table border="0" width="100%" align="center" class="customers" id="t1">
        <tr align="center">
            <th>Pune</th>
            <th>Mumbai</th>
            <th>Delhi</th>
        </tr>
        <tr>
            <td align="center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Shaniwar Wada&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
            <td align="center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Gateway of India&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
            <td align="center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Chhatarpur Temple&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
        </tr>
        <td align="center">Lal Mahal</td>
        <td align="center">TAJ HOTEL</td>
        <td align="center">LOTUS TEMPLE</td>
        </tr>
        <td align="center">Dagdusheth ganpati</td>
        <td align="center">SHREE SIDDHIVINAYAK TEMPLE</td>
        <td align="center">JAMA MASJID</td>
        </tr>
        <td align="center">ISKCON NVCC Pune</td>
        <td align="center">HANGING GARDEN</td>
        <td align="center">AKSHARDHAM TEMPLE</td>
        </tr>
        <td align="center">Shivneri Fort</td>
        <td align="center">OBEROI MALL</td>
        <td align="center">QUTUB MINAR</td>
        </tr>
        <td align="center">Phoenix City Mall</td>
        <td align="center">STREET SHOPPING</td>
        <td align="center">Delhi Zoo</td>
        </tr>
        <td align="center">INOX - Elpro City Square</td>
        <td align="center">MALABAR HILL FOREST TRAIL</td>
        <td align="center">GATEWAY OF INDIA DELHI</td>
        </tr>
        <td align="center">Hotel JW MARRIOTT</td>
        <td align="center">BABULNATH MANDIR</td>
        <td align="center">TUMBLE HOUSE</td>
        </tr>
        <td align="center">Okayama Friendship Garden</td>
        <td align="center">HAJI ALI DARGAH</td>
        <td align="center">DE PAVILION HOTEL</td>
        </tr>
        <td align="center">Sinhagad Fort</td>
        <td align="center">FUN CITY COME PLAY!</td>
        <td align="center">LODHI GARDEN</td>
        </tr>
        <td align="center">TULSI BAUG SHOPPING MARKET</td>
        <td align="center">MARINE DRIVE MUMBAI</td>
        <td align="center">South Delhi Garden</td>
        </tr>
        <td align="center">AGA KHAN PALACE</td>
        <td align="center">ELEPHANTA CAVES</td>
        <td align="center">TAJ MAHAL HOTEL</td>
        </tr>
    </table>
    <table border="0" width="80%" align="center" class="customers" id="t2" name="t2">
        <tr align="center">
            <th>Pune</th>
            <th>Mumbai</th>
            <th>Delhi</th>
        </tr>
        <tr>
            <td align="center">PUNE FULL TOUR</td>
            <td align="center">MUMBAI FULL TOUR</td>
            <td align="center">DELHI FULL TOUR</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;Pune Full Tour: 12 Destinations&emsp;&emsp;&emsp;</td>
            <td>&emsp;&emsp;&emsp;Mumbai Full Tour: 12 Destinations&emsp;&emsp;&emsp;</td>
            <td>&emsp;&emsp;&emsp;Delhi Full Tour: 12 Destinations&emsp;&emsp;&emsp;</td>
        </tr>
    </table>
    </div>
</body>

</html>